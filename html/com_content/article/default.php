
<?php // no direct access
defined('_JEXEC') or die('Restricted access');

$canEdit	= ($this->user->authorize('com_content', 'edit', 'content', 'all') || $this->user->authorize('com_content', 'edit', 'content', 'own'));
?>
<?php if ($this->params->get('show_page_title', 1) && $this->params->get('page_title') != $this->article->title) : ?>
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>
<?php if ($canEdit || $this->params->get('show_title') || $this->params->get('show_pdf_icon') || $this->params->get('show_print_icon') || $this->params->get('show_email_icon')) : ?>
<table class="contentpaneopen<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
<tr>
	<?php if ($this->params->get('show_title')) : ?>
	<td class="contentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" width="100%">
		<?php if ($this->params->get('link_titles') && $this->article->readmore_link != '') : ?>
		<a href="<?php echo $this->article->readmore_link; ?>" class="contentpagetitle<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
			<?php echo $this->escape($this->article->title); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->article->title); ?>
		<?php endif; ?>
	</td>
	<?php endif; ?>
	<?php if (!$this->print) : ?>
		<?php if ($this->params->get('show_pdf_icon')) : ?>
		<td align="right" width="100%" class="buttonheading">
		<?php echo JHTML::_('icon.pdf',  $this->article, $this->params, $this->access); ?>
		</td>
		<?php endif; ?>

		<?php if ( $this->params->get( 'show_print_icon' )) : ?>
		<td align="right" width="100%" class="buttonheading">
		<?php echo JHTML::_('icon.print_popup',  $this->article, $this->params, $this->access); ?>
		</td>
		<?php endif; ?>

		<?php if ($this->params->get('show_email_icon')) : ?>
		<td align="right" width="100%" class="buttonheading">
		<?php echo JHTML::_('icon.email',  $this->article, $this->params, $this->access); ?>
		</td>
		<?php endif; ?>
		<?php if ($canEdit) : ?>
		<td align="right" width="100%" class="buttonheading">
			<?php echo JHTML::_('icon.edit', $this->article, $this->params, $this->access); ?>
		</td>
		<?php endif; ?>
	<?php else : ?>
		<td align="right" width="100%" class="buttonheading">
		<?php echo JHTML::_('icon.print_screen',  $this->article, $this->params, $this->access); ?>
		</td>
	<?php endif; ?>
</tr>
</table>
<?php endif; ?>

<?php  if (!$this->params->get('show_intro')) :
	echo $this->article->event->afterDisplayTitle;
endif; ?>
<?php echo $this->article->event->beforeDisplayContent; ?>
<table class="contentpaneopen<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
<?php if (($this->params->get('show_section') && $this->article->sectionid) || ($this->params->get('show_category') && $this->article->catid)) : ?>
<tr>
	<td>
		<?php if ($this->params->get('show_section') && $this->article->sectionid && isset($this->article->section)) : ?>
		<span>
			<?php if ($this->params->get('link_section')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getSectionRoute($this->article->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->escape($this->article->section); ?>
			<?php if ($this->params->get('link_section')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
				<?php if ($this->params->get('show_category')) : ?>
				<?php echo ' - '; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
		<?php if ($this->params->get('show_category') && $this->article->catid) : ?>
		<span>
			<?php if ($this->params->get('link_category')) : ?>
				<?php echo '<a href="'.JRoute::_(ContentHelperRoute::getCategoryRoute($this->article->catslug, $this->article->sectionid)).'">'; ?>
			<?php endif; ?>
			<?php echo $this->escape($this->article->category); ?>
			<?php if ($this->params->get('link_category')) : ?>
				<?php echo '</a>'; ?>
			<?php endif; ?>
		</span>
		<?php endif; ?>
	</td>
</tr>
<?php endif; ?>
<?php if (($this->params->get('show_author')) && ($this->article->author != "")) : ?>
<tr>
	<td valign="top">
		<span class="small">
			<?php JText::printf( 'Written by', ($this->escape($this->article->created_by_alias) ? $this->escape($this->article->created_by_alias) : $this->escape($this->article->author)) ); ?>
		</span>
		&nbsp;&nbsp;
	</td>
</tr>
<?php endif; ?>

<?php if ($this->params->get('show_create_date')) : ?>
<tr>
	<td valign="top" class="createdate">
		<?php echo JHTML::_('date', $this->article->created, JText::_('DATE_FORMAT_LC2')) ?>
	</td>
</tr>
<?php endif; ?>

<?php if ($this->params->get('show_url') && $this->article->urls) : ?>
<tr>
	<td valign="top">
		<a href="http://<?php echo $this->article->urls ; ?>" target="_blank">
			<?php echo $this->escape($this->article->urls); ?></a>
	</td>
</tr>
<?php endif; ?>

<tr>
<td valign="top">

<?php if (isset ($this->article->toc)) : ?>
	<?php echo $this->article->toc; ?>
<?php endif; ?>
<?php 
$str=$this->article->text;

function singleTag($str){
	$single=array(
	0=>'br',
	1=>'hr',
	2=>'img',
	3=>'break',
	);
	$flag=0;
	$i=0;
	$tagName='';
	if ($str[0]=="<"){
		$i=missSeparate(1,$str);

		if ($i){

			while (($str[$i]!=" ")&&($str[$i]!=">")&&($str[$i]!="/")){
				$tagName.=$str[$i];
				$i++;
			}		
		}else
		{
			return false;
		}
	}else
	{
		return false;
	}	
	$i=0;
	while (($i<count($single))and(!$flag))
	{
		if ($single[$i]==$tagName){
			$flag=true;
			}
		$i++;
	}

	return $flag;

}
function missSeparate($i=0,$str){
	$j=$i;
	while (($j<strlen($str))&&($str[$j]==" ")){
		$j++;
	}
	if ($str[$j]!=" "){
		return $j;
	}else
	{
		return false;
	}	
}

function getTag($i,$str){
	$j=$i;
	if ($str[$i]=='<'){
		$tag=$str[$j];
		while (($j<strlen($str))&&($str[$j]!='>')){
			$j++;
			$tag.=$str[$j];
		}
		if ($str[$j]=='>'){
			return $tag;
		}else
		{
			return false;
		}
		
	}else
	{
		return false;
	}				
}

function nameTag($str){
	if ($str[0]=="<"){
		$i=missSeparate(1,$str);
		if ($i){
			if (typeTag($str)=="close"){
				$i++;
				$i=missSeparate($i,$str);
			}			
			while (($str[$i]!=" ")&&($str[$i]!=">")&&($str[$i]!="/")){
				$name.=$str[$i];
				$i++;
			}		
			if (strlen($name)){
				return $name;
			}else
			{
				return false;
			}			
		}else
		{
			return false;
		}
	}else
	{
		return false;
	}	
}

function typeTag($tag){
	if (strlen($tag)){
		if (singleTag($tag)){
			return "single";
		}else{
			if ($tag[$i]=="<"){
			$i=missSeparate(1,$tag);
				if ($tag[$i]!="/"){
					return "open";
				}else
				{
					return "close";
				}
			}else
			{
				return false;
			}
		}
	}else
	{
		return false;
	}
}

function enterHtml($str,$id='class="colums"'){
	
	$n=0;//общее количество тегов
	$startTag='';//открывающий тег в котором находится указанный class или id и тип в вите div-open 
	$endTag='';//закрывающий тег в котором -..-
	$start=0;//номер символа с которого начинается материал для колонок
	$end=0;//номер символа котором заканчивается материал для колонок
	$startTagPos=0;// номер символа с которого начинается тег колонок
	$endTagPos=0;
	$tags=array();
	$col=0;	
	$ok=false;
	if (strpos($str,$id)){
		$i=strpos($str,$id);
		//ищем позицию с которой начинается тег с идентификатором колонок
		while (($i>=0)&&($str[$i]!='<')){
			$i--;
		}
		//конец поиска 
		
		//ищем теги и заносим их в стэк
		if ($str[$i]=='<'){
			$j=$i;
			while (($j<strlen($str))&&(!$ok)){
				if ($str[$j]=='<'){		
				
					if (getTag($j,$str)){
						$tag=getTag($j,$str);
						if ($tag){
//							echo nameTag($tag).' '.typeTag($tag).'<br/> ';
//								echo '<br/>'.substr($tag,1).'</br>'; 
							if (((nameTag($tag))&&(typeTag($tag)))&&(!singleTag($tag))){

								$tags[$col]['name']=nameTag($tag);
								$tags[$col]['type']=typeTag($tag);
								$n++;				
								if ($col==0){
									$startTag=$tags[$col]['name'];
									$start=$j+strlen($tag);
									$startTagPos=$j;
								}
								if ($col>=1){
									if (($tags[$col]['name']==$tags[$col-1]['name'])&&($tags[$col]['type']=="close")&&($tags[$col-1]['type']=="open")){
									   $endTag=$tags[$col]['name'];
									   $end=$j-1;
									   $endTagPos=$j+strlen($tag);
									   $col-=2;
									   if ($col==-1){
//										   echo $tags[$col]['name'].'- this -'.$tags[$col+1]['name'];
										   $ok=true;
									   }
									}
								}
								$col++;	
							}
						}
					}
				}
				$j++;
			}
		
  				$result['tag-begin-name']=$startTag;
  				$result['tag-begin-start']=$startTagPos;
				$result['begin']=$start;
				$result['tag-end-name']=$endTag;
				$result['end']=$end;
  				$result['tag-begin-end']=$endTagPos;
				return $result;
		}		
		else
		{
			return false;
		}
	}else
	{
		return false;
	}
}


function divisionByColumns($str,$col){
	$columnsText=array();//массив в котором хранится колонки
	for ($i=0;$i<$col-1;$i++)
	{
		$start=strpos($str,'<break>');
		$columnsText[$i]=substr($str,0,$start-1);
		$str=substr($str,$start+7);
//		echo $lenColum[$i].'<br/>';
	}
	$columnsText[$col-1]=$str;
	
	return $columnsText;
}

function displayColumns($str,$col){
	$columns=divisionByColumns($str,$col);
	$i=0;
	foreach($columns as $colum){
		$i++;
		echo'<div class="colum" id="c'.$i.'">'.$colum.'</div>';
	}
}

//echo onlyTextSize($str).' '.divisionByColumns($str,2).' '.divisionByColumns($str,3);
if (strpos($str,'class="colums"')){
	$result=enterHtml($str,'class="colums"');
	$str2=substr($str,$result['begin'],$result['end']-$result['begin']);
	$begining=substr($str,0,$result['tag-begin-start']);
	$finishing=substr($str,$result['tag-begin-end'],strlen($str)-$result['tag-begin-end']-4);
	echo $begining;
	displayColumns($str2,2);
    echo '<div class="clear"></div>'.$finishing;
	
}
else{
  echo $this->article->text;
  }
?>

</td>
</tr>

<?php if ( intval($this->article->modified) !=0 && $this->params->get('show_modify_date')) : ?>
<tr>
	<td class="modifydate">
		<?php echo JText::sprintf('LAST_UPDATED2', JHTML::_('date', $this->article->modified, JText::_('DATE_FORMAT_LC2'))); ?>
	</td>
</tr>
<?php endif; ?>
</table>
<span class="article_separator">&nbsp;</span>
<?php echo $this->article->event->afterDisplayContent; ?>