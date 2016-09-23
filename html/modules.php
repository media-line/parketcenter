
<?php
/**
 * @version		$Id: modules.php 14401 2010-01-26 14:10:00Z louis $
 * @package		Joomla
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

/*
 * none (output raw module content)
 */
 function modChrome_xhtmltable($module, &$params, &$attribs)
{ ?>
	    <div class="table">
        <? if ($module->showtitle != 0) : echo  '<div class="title">'.$module->title.'</div>'; endif ?>
      		<?
	if (!empty ($module->content)) : echo $module->content;endif;
	    ?>
          <div class="nog"></div>
</div><!-- table -->

<?        
}
 function modChrome_xhtmlform($module, &$params, &$attribs)
{ ?>
	    <div class="table">
        <div class="form">
        <? if ($module->showtitle != 0) : echo  '<div class="title">'.$module->title.'</div>'; endif ?>
      		<?
	if (!empty ($module->content)) : echo $module->content;endif;
	    ?>
        </div>
          <div class="nog"></div>
</div><!-- table form -->

<?        
}
 function modChrome_xhtmlmod($module, &$params, &$attribs)
{
	?>
    <div class="mod">
      
            <? if ($module->showtitle != 0) : echo  '<div class="title">'.$module->title.'</div>'; endif ?>
              
              <div class="body">
                  <? if (!empty ($module->content)) : echo $module->content;endif; ?>
              </div>
    </div>
    <?
}

 function modChrome_xhtmlfooter($module, &$params, &$attribs)
{
	?>
    <div id="footer-block">
     <div class="bg-l">
      <div class="bg-r">
      <div>
	  <? if ($module->showtitle != 0) : echo $module->title; endif ?>
        <? if (!empty ($module->content)) : echo $module->content;endif; ?>
        </div>
        </div>
        </div>
        </div>     		  
    <?
}

//******************** end my modules *****************************************

?>