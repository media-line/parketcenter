
<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<?php if ($this->params->get('show_page_title', 1)) : ?>
<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
	<?php echo $this->escape($this->params->get('page_title')); ?>
</div>
<?php endif; ?>
<table class="blog<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" cellpadding="0" cellspacing="0">
<?php if ($this->params->def('num_leading_articles', 1)) : ?>
<tr>
	<td valign="top">
	<?php for ($i = $this->pagination->limitstart; $i < ($this->pagination->limitstart + $this->params->get('num_leading_articles')); $i++) : ?>
		<?php if ($i >= $this->total) : break; endif; ?>
		<div>
		<?php
			$this->item =& $this->getItem($i, $this->params);
   	        
$str=$this->loadTemplate('item');
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
	$finishing=substr($str,$result['tag-begin-end']);
	echo $begining;
	displayColumns($str2,3);
	echo '<div class="clear"></div>'.$finishing;
	
}
else{
  echo $str;
  }
?>
		
		</div>
	<?php endfor; ?>
	</td>
</tr>
<?php else : $i = $this->pagination->limitstart; endif; ?>

<?php
$startIntroArticles = $this->pagination->limitstart + $this->params->get('num_leading_articles');
$numIntroArticles = $startIntroArticles + $this->params->get('num_intro_articles', 4);
if (($numIntroArticles != $startIntroArticles) && ($i < $this->total)) : ?>
<tr>
	<td valign="top">
		<table width="100%"  cellpadding="0" cellspacing="0">
		<tr>
		<?php
			$divider = '';
			if ($this->params->def('multi_column_order',1)) : // order across as before
			for ($z = 0; $z < $this->params->def('num_columns', 2); $z ++) :
				if ($z > 0) : $divider = " column_separator"; endif; ?>
				<?php
				    $rows = (int) ($this->params->get('num_intro_articles', 4) / $this->params->get('num_columns'));
				    $cols = ($this->params->get('num_intro_articles', 4) % $this->params->get('num_columns'));
				?>
				<td valign="top" width="<?php echo intval(100 / $this->params->get('num_columns')) ?>%" class="article_column<?php echo $divider ?>">
				<?php
				$loop = (($z < $cols)?1:0) + $rows;

				for ($y = 0; $y < $loop; $y ++) :
					$target = $i + ($y * $this->params->get('num_columns')) + $z;
					if ($target < $this->total && $target < ($numIntroArticles)) :
						$this->item =& $this->getItem($target, $this->params);
						echo $this->loadTemplate('item');
					endif;
				endfor;
						?></td>
						<?php endfor; 
						$i = $i + $this->params->get('num_intro_articles') ; 
			else : // otherwise, order down columns, like old category blog
				for ($z = 0; $z < $this->params->get('num_columns'); $z ++) :
					if ($z > 0) : $divider = " column_separator"; endif; ?>
					<td valign="top" width="<?php echo intval(100 / $this->params->get('num_columns')) ?>%" class="article_column<?php echo $divider ?>">
					<?php for ($y = 0; $y < ($this->params->get('num_intro_articles') / $this->params->get('num_columns')); $y ++) :
					if ($i < $this->total && $i < ($numIntroArticles)) :
						$this->item =& $this->getItem($i, $this->params);
						echo $this->loadTemplate('item');
						$i ++;
					endif;
				endfor; ?>
				</td>
		<?php endfor; 
		endif;?>		
		</tr>
		</table>
	</td>
</tr>
<?php endif; ?>
<?php if ($this->params->def('num_links', 4) && ($i < $this->total)) : ?>
<tr>
	<td valign="top">
		<div class="blog_more<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
			<?php
				$this->links = array_splice($this->items, $i - $this->pagination->limitstart);
				echo $this->loadTemplate('links');
			?>
		</div>
	</td>
</tr>
<?php endif; ?>

<?php if ($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2 && $this->pagination->get('pages.total') > 1)) : ?>
<tr>
	<td valign="top" align="center">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<br /><br />
	</td>
</tr>
<?php if ($this->params->def('show_pagination_results', 1)) : ?>
<tr>
	<td valign="top" align="center">
		<?php echo $this->pagination->getPagesCounter(); ?>
	</td>
</tr>
<?php endif; ?>
<?php endif; ?>
</table>