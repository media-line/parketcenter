<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="/css/style.css" type="text/css" media="screen, projection" />
	<script language="javascript">AC_FL_RunContent = 0;</script>
    <script src="/js/AC_RunActiveContent.js" language="javascript"></script>
    <script src="/js/jquery-1.6.2.min.js" language="javascript"></script>
    <script src="/js/j.js" language="javascript"></script>
    <script src="/js/scrollTo.js" language="javascript"></script>    
    <script type="text/javascript">
	jQuery.noConflict();
	  jQuery(document).ready(function(){
          jQuery(".form input.inputbox").css("height","20px");//Задаем высоту для тектового поля в форме обратной связии
          jQuery(".form input.inputbox").css("width","340px");//Задаем ширину для тектового поля в форме обратной связи		  	  
		  jQuery(".form textarea.inputbox").css("width","340px");//Задаем ширину для тектового поля в форме обратной связи		  	  
	  });
	  jQuery(function(){
		jQuery(".blog_more strong").css("display","none");//Скрываем слово "Еще статьи" при отображении материалов категории	  
	  });
	</script>
    <!--[if lte IE 6]>
		<script src="/js/DD_belatedPNG.js"></script>
		<script> DD_belatedPNG.fix('div, img, a, span, p');</script>	
        <link rel="stylesheet" href="/css/styleIE6.css" type= "text/css" />
	<![endif]-->
  
</head>

<body>
     
<div id="wrapper">

	<div id="header">
	  <div class="headerLeft">
	   <div class="headerName">
	      <p><a href="/"><img src="/images/logo.png" height="126"></a></p>
	   </div>
	   <div class="date">
	    <?php 	
			setlocale(LC_ALL, 'ru_RU');
			echo strftime('%d %B, %A', time()); 
		?>     
	    <?php //echo date('d F, l'); ?>     
	   </div>
	   <div style="float:left">
	      <p class="dirty">№ 8 495 766-16-45</p>
	   </div>
	  </div><!-- headerLeft -->
	  <div class="headerRight">
	      <p><img src="/images/ukladka.png" alt=""></p>
	  </div><!-- headerRight -->
	  <div class="clear"></div>
	  <div class="flash">
	      <script type="text/javascript" language="javascript">

			var flashvars = {
					};
			
			var params = {play: "true", loop: "true", menu: "true", scale: "default", wmode: "window", quality: "best", align: "default", swliveconnect: "false", devicefont: "false", allowscriptaccess: "always", seamlesstabbing: "true", allowfullscreen: "false", allownetworking: "all", debugmode: "false"}

			var attributes = {
			};

			swfobject.embedSWF("/3d_floor.swf", "movie1_container", "806", "500", "8.0.0", "", flashvars, params, attributes);
		</script>
		<!-- flash container div -->
		<div class="flash_class" id="movie1">
			<object type="application/x-shockwave-flash" data="/3d_floor.swf" width="806" height="500" id="movie1_container" style="visibility: visible;"><param name="play" value="true"><param name="loop" value="true"><param name="menu" value="true"><param name="scale" value="default"><param name="wmode" value="window"><param name="quality" value="best"><param name="align" value="default"><param name="swliveconnect" value="false"><param name="devicefont" value="false"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="allowfullscreen" value="false"><param name="allownetworking" value="all"><param name="debugmode" value="false"></object>
		</div>
		<div class="flash_debug">
			</div>
 
	  </div><!-- flash -->
	  <div class="menu">
      	<ul style="list-style:none;">
		<li style="float:left;"><a href="/index" class="mainlevel">Главная</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="/otzyvy-menu" class="mainlevel">Отзывы</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="/price-menu" class="mainlevel">Цены</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="/our-works-menu" class="mainlevel">Наши работы</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="/contacts" class="mainlevel">Контакты</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="/zakaz" class="mainlevel">Заказать</a></li>
		<li class="separate">&nbsp; </li>
		<li style="float:left;"><a href="http://parketcenter.ru/parket/about.php" class="mainlevel">Статьи</a></li>
		</ul>  
	  </div><!-- menu -->
	</div><!-- #header-->

	<div id="middle">

		<div id="container">
			<div id="content">
                  <jdoc:include type="message" />
            	  <jdoc:include type="component" />
			  <div class="colum" id="c1">

			  </div>
			  <div class="colum" id="c2">


			  </div>
			  <div class="colum" id="c3">
	

			  </div>
			</div><!-- #content-->
		</div><!-- #container-->
     <div class="footer">
	   <div class="footerLeft">
	    <jdoc:include type="modules" name="footer-left" style="xhtmlnone"/> 
	   </div>
	   <div class="footerRight">
	    <jdoc:include type="modules" name="footer-right" style="xhtmlnone"/>
        <span style="float: right;"><noindex><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t25.2;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet--></noindex></span> 
	   </div>
	 </div>
		

	</div><!-- #middle-->

</div><!-- #wrapper -->
<?
/*
?>
<div id="wrapper-inner">

	<div id="header">
	  <div class="headerLeft">
	   <div class="date">
	    <?php echo JHTML::_('date', $date = null, $format = '%d %B, %A' , $offset = NULL ); ?>           
	   </div>
	   <div style="float:left">
		    <jdoc:include type="modules" name="head-tel" style="xhtmlnone"/> 
	   </div>
	  </div><!-- headerLeft -->
	  <div class="headerRight">
	    <span>стр. <?=Jrequest::getVar('Itemid')?></span>
	  </div><!-- headerRight -->
	  <div class="clear"></div>

	  <div class="menu2">
		    <jdoc:include type="modules" name="menu-sp" style="xhtmlnone"/> 				
	  </div><!-- menu -->
	</div><!-- #header-->

	<div id="middle">

		<div id="container">
			<div id="content">

			<div class="maincontent">
                  <jdoc:include type="message" />
            	  <jdoc:include type="component" />
			  <div class="title">
	
			  </div>
			  <div class="anotation">

			  </div><!-- anotation -->
			  <div class="colum" id="c1">

			  </div>
			  <div class="colum" id="c2">

			  </div>
			  <div class="clear"></div>
			
            </div><!-- main content -->

			    <jdoc:include type="modules" name="footer" style="xhtmltable"/> 
			    <jdoc:include type="modules" name="footer-form" style="xhtmlnone"/> 

			</div><!-- #content-->
		</div><!-- #container-->
		
	    <div class="sidebar" id="sideRight">
		    <jdoc:include type="modules" name="banners" style="xhtmlnone"/> 				
		</div><!-- .sidebar#sideRight -->
		

	</div><!-- #middle-->

<div class="clear"></div>
     <div class="footer">
	   <div class="footerLeft">
	    <jdoc:include type="modules" name="footer-left" style="xhtmlnone"/>
	   </div>
	   <div class="footerRight">
	    <jdoc:include type="modules" name="footer-right" style="xhtmlnone"/>
<span style="float: right;"><noindex><!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t25.2;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число посетителей за"+
" сегодня' "+
"border='0' width='88' height='15'><\/a>")
//--></script><!--/LiveInternet--></noindex></span>
	   </div>
	 </div>
</div><!-- #wrapper-inner -->
<?
}*/
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39366585 = new Ya.Metrika({
                    id:39366585,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39366585" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>

