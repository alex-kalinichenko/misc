<?
//echo var_export($_SERVER,true);
// Это хитрая и не совсем хорошая проверка на то, что вызываемый скрипт соответствует запрошенной странице
if ($_SERVER['REQUEST_URI'] != $_SERVER['SCRIPT_NAME']) {
	// Тут несколько способов:

	// Говорим что 404ая. Поисковикам этого будет достаточно
	//header("HTTP/1.0 404 Not Found", true, 404);

	// Редиректим на главную. Это можно. Но нужно-ли - решай сам.
	//header("Location: http://victoriabalashova.com/");

	// А это способ который применяется на этом хостинге:
	header("Location: http://victoriabalashova.com/404.htm", true, 302);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Видео - Виктория Балашова - креативный фотограф в Москве</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="видео,отчёт,non-stop,позитив,веселье,слайд-шоу,фотосессия,свадебная фотосессия,фотокнига,свадебная фотокнига,фотокнига" />
	<meta name="description" content="Видео-обзоры процесса фотосъёмки, слайд-шоу фотосессий и свадебные фотокниги." />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!-------------скрипт гугл аналитикс------------------------------>
		<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24806937-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
       </script>
<!--------------#скрипт гугл аналитикс----------------------------->

<!-- виджеты ВКонтакте -->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?48"></script>
<script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
<!-- #виджеты ВКонтакте -->

<!-- модерация каментов Facebook (мой id)--> <meta property="fb:admins" content="1514995105"/>
<!--id приложения каментов Facebook-->  <meta property="fb:app_id" content="168625286589101"/>
</head>

<body>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->

<!-- каменты Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=168625286589101";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- #каменты Facebook -->

<!-- виджеты VK -->
<script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
<!-- #виджеты VK -->

<div id="wrapper_video">

  <div id="header">      <!-- --------------- Ш А П К А -----------------------------------------   -->
    <strong><a href="http://victoriabalashova.com" id="header1">Виктория Балашова</a></strong>
    <strong><a href="http://victoriabalashova.com" id="header2">креативный фотограф</a></strong>

    <div id="menu">
      <a href="index.php"     class="home"      title="Главная">Главная</a>
      <a href="about.php"     class="about"     title="Обо мне">Обо мне</a>
      <a href="portfolio.php" class="portfolio" title="Портфолио">Портфолио</a>
      <a href="video.php"     class="video"     title="Видео">Видео</a>
      <a href="article.php"   class="article"   title="Статьи">Статьи</a>
      <a href="review.php"    class="review"    title="Отзывы">Отзывы</a>
      <a href="price.php"     class="price"     title="Цены">Цены</a>
      <a href="contact.php"   class="contact"   title="Контакты">Контакты</a>
    </div><!-- #menu-->

    <div id="hor_line">
      <img src="images/line.jpg"/>
    </div><!-- #hor_lin-->
    
  </div><!-- #header-->  <!-- ------------- # Ш А П К А ----------------------------------------   -->

  <div id="middle">

     <div id="container">
		<div id="content">
		    <p> </p><!-- резиновая самая правая часть (пустая) шириной от 170px (была предназначена для контента) -->
		    <!-- пробел <p> </p> должно стоять обязательно. Иначе сбивается форматирование -->
		</div><!-- #content-->
	 </div><!-- #container-->
		
	 <div class="sidebar" id="sideLeft">  <!-- --  ЛЕВЫЙ САЙДБАР  ----- -->
          <!--  левый сайдбар шириной 70px -->
	 </div><!-- .sidebar#sideLeft -->     <!-- - # ЛЕВЫЙ САЙДБАР  ----- -->
		
	 <div class="sidebar" id="sideRight">  <!--  ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 560px  -->
	    <h1>Видео</h1>
	    <br />
	    <br />
	    <b>Небольшой видео-отчёт с фотосессии "Non-Stop" 18 февраля 2012 года в г. Москва.</b>
	    <p>11 человек, 3 часа времени и куча позитива и веселья.</p>
		<br />
		<iframe width="420" height="315" src="http://www.youtube.com/embed/A4G_3Cdm_-M" frameborder="0" allowfullscreen></iframe>
	    <br />
		<br />
		<br />
		<b>Слайд-шоу фотосессии с Ириной</b>
		<br />
		<br />
		<iframe width="560" height="315" src="http://www.youtube.com/embed/jWuNOiFadzM" frameborder="0" allowfullscreen></iframe>
		<br />
		<br />
		<br />
		<b><a name="photobook"></a>Свадебная фотокнига. Вы можете заказать такую же в дополнение к свадебной фотосессии. Также возможен заказ фотокниги в дополнение к обычной фотосессии</b>
		<br />
		<br />
		<iframe width="560" height="315" src="http://www.youtube.com/embed/MlDq41jLzFk" frameborder="0" allowfullscreen></iframe>
		<br />
		<br />
		<br />
		<br />
		<p>С ценами можно ознакомиться <a href="price.php" title="Цены">здесь</a>. Мои контакты на этой <a href="contact.php" title="Контакты">странице</a>.</p>
		<br />
		<p style="font-size:0.9em;">Если эти видео вам понравились, поделитесь ссылкой с друзьями или оставьте свой комментарий. Спасибо!</p>
		<!-- кнопки share42-->
		  <div class="share42init"></div>
		  <script type="text/javascript" src="http://victoriabalashova.com/share42/share42.js"></script>
		  <script type="text/javascript">share42('http://victoriabalashova.com/share42/')</script>
		<!-- #кнопки share42-->
		<br />

		<!-- таблица кнопок Твитнуть, мне нравится и +1 -->
		<table border="0" width="460px">
		    <tr>
			   <td><!-- ReTweet-->
		           <a href="https://twitter.com/share" rel="nofollow" class="twitter-share-button" data-via="Vika_Balashova" 
		           data-lang="ru">Твитнуть</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
		           if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";
		           fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                   <!-- #ReTweet-->
               </td>
               <td><!-- Facebook Like-->
		           <div class="fb-like" data-send="false" data-layout="button_count" data-width="170" data-show-faces="true"></div>
		           <!-- #Facebook Like-->
		       </td>
		       <td><!-- VK.com Like-->
			   	   <div id="vk_like"></div><script type="text/javascript">
		           VK.Widgets.Like("vk_like", {type: "button", height: 20});</script>
		           <!-- #VK.com Like-->
			   </td>
               <td>  <!-- +1 -->
                   <g:plusone size="medium"></g:plusone> 
               </td> <!-- #+1 -->
		    </tr>
		</table> <!-- #таблица кнопок Твитнуть, мне нравится и +1 -->
			
		<!-- Одноклассники и Мой мир Like -->
			<a target="_blank" rel="nofollow" class="mrc__plugin_uber_like_button" href="http://connect.mail.ru/share" data-mrc-config="{'type' : 'small',
			 'caption-mm' : '1', 'caption-ok' : '3', 'counter' : 'true', 'width' : '100%', 'nt' : '1'}
			 ">Нравится</a><script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript" charset="UTF-8"></script> </p>
		<!-- #Одноклассники и Мой мир Like -->
		<br />
		<!-- FACEBOOK каменты-->
		    <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/video.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
        <!--#FACEBOOK каменты-->

        <!-- VK каменты-->
            <p style="font-size:1.3em;">Комментарии Вконтакте:</p>
            <script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
            <div id="vk_comments"></div><script type="text/javascript">
            VK.Widgets.Comments("vk_comments", {limit: 10, width: "560", attach: false});</script>
        <!--# VK каменты-->
			
	 </div><!-- .sidebar#sideRight -->     <!-- #ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 560px -- -->

  </div><!-- #middle-->

</div><!-- #wrapper -->			


<div id="footer"> <!-- ---------  П О Д В А Л ----------------------------- -->

  <div id="copyright">
	<? include("copyright.php"); ?>
  </div><!-- #copyright --> 

   <div id="citation">       <!--ЦИТАТЫ-->
     <? include("quotes.php"); ?>
   </div><!--#citation-->
</div><!-- #footer -->  <!-- --------- # П О Д В А Л ----------------------------- -->
<!-- скрипт для кнопки +1 -->
<script type="text/javascript"> window.___gcfg = {lang: 'ru'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
<!-- #скрипт для кнопки +1 -->
</body>
</html>