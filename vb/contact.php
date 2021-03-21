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
	<title>Контакты - Виктория Балашова - креативный фотограф город Москва</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="креативный фотограф,виктория балашова,victoria balashova,москва,телефон,e-mail,вконтакте,facebook,twitter,qr,профиль" />
	<meta name="description" content="Контакты Виктории Балашовой, фотографа в Москве  - телефон, e-mail, профили ВКонтакте, Facebook, Twitter, Google+, ЖЖ." />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!-- скрипт гугл аналитикс -->
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
<!-- #скрипт гугл аналитикс -->

<!-- Google+ page badge -->
<link href="https://plus.google.com/102082891825055382320" rel="publisher" /><script type="text/javascript">
window.___gcfg = {lang: 'ru'};(function() {var po = document.createElement("script");
po.type = "text/javascript"; po.async = true;po.src = "https://apis.google.com/js/plusone.js";
var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(po, s);})();</script>
<!-- #Google+ page badge -->
</head>

<body>
<!-- СЧЁТЧИК Яндекс -->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- СЧЁТЧИК Яндекс -->

<!-- Facebook LIKE Box Java Script start -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=168625286589101";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook LIKE Box Java script end -->

<div id="wrapper_contact">

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
		<h1>Контакты</h1>
		<br />
		   <div class="vcard">
		   <p>Я надеюсь, что вам понравилось моё <a href="portfolio.php" title="Портфолио">портфолио</a>.</p>
		   <p>Для заказа фотосессии позвоните мне по телефону (г. <strong><span class="adr"><span class="locality">Москва</span></span></strong>): <b><span class="tel">+7 962 935 53 53</span></b></p>
		   или напишите: <b>in<div class="foem">!#N#!</div><span class="mfs">f</span><!-- pop -->o&#64<!--- 2 -->vic<!-- --->toriabalashova&#46;<!--[if IE]>c<![endif]---><![if !IE]>c<![endif]>om</span></b>
		   <p><span class="fn org">Виктория Балашова</span> - <span class="title">креативный фотограф</span></p>
		   </div><!-- #vcard -->
		<br />
		<br />
		<br />
		<a href="http://vk.com/victoriabalashova" title="В Контакте" rel="nofollow" target="_blank">Моя страница в Контакте</a>
		<br />
		<br />
		  <!-- VK виджет -->			
			<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?48"></script>
			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 0, width: "360", height: "190"}, 34989517);
			</script>
		  <!-- VK виджет -->
		<br />
		<br />
		<br />
		<a href="http://facebook.com/VictoriaBalashova" title="Facebook" rel="nofollow" target="_blank">Моя страница в Facebook</a>
		<br />
		<br />
		<!-- Facebook LIKE BOX  -->
		  <div class="fb-like-box" data-href="http://www.facebook.com/victoriabalashova" data-width="360" data-colorscheme="dark" data-show-faces="true" data-stream="true" data-header="true"></div>
		<!-- #Facebook LIKE BOX -->
		<br />
		<br />
		<br />
		<a href="https://plus.google.com/b/102082891825055382320/" title="Google+" rel="nofollow" target="_blank">Моя страница в Google+</a>
		<br />
		<br />
		<!-- Google+ page badge -->
		  <g:plus href="https://plus.google.com/102082891825055382320" width="360" height="131" theme="dark"></g:plus>
		<!-- #Google+ page badge -->
		<br />
		<br />
		<p>Ниже размещён QR-код. Просканируйте его своим телефоном и вы получите все мои контакты</p>
		<br />
		<img src="images/qr_vika_balashova.gif" alt="QR-код с контактами Виктории Балашовой" />
		<br /><br />
		<br /><br />
		<a href="http://twitter.com/Vika_Balashova" title="Vika's Balashova Twitter" rel="nofollow" target="_blank">Я в Твиттере</a>
		<br /><br />
		<!--- читать vika_balashova в twitter -->
		<a href="https://twitter.com/Vika_Balashova" class="twitter-follow-button" data-show-count="false" data-lang="ru">Читать @Vika_Balashova</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <!--- #читать vika_balashova в twitter -->
        <br /><br />
		<!--- twitter script -->
          <script src="http://widgets.twimg.com/j/2/widget.js"></script>
          <script>
          new TWTR.Widget({version: 2,type: 'profile',rpp: 4,interval: 30000,width: 250,height: 300,
          theme: {shell: {background: '#333333',color: '#ffffff'},tweets: {background: '#000000',
          color: '#ffffff',links: '#3b87a3'}},features: {scrollbar: false,loop: false,live: true,
          behavior: 'all'}}).render().setUser('Vika_Balashova').start();
          </script>
		<!--- twitter script -->
		<br />
		<p>Узнать подробнее о моём кредо и стиле работы можно на этой <a href="about.php" title="Обо мне">странице</a></p>
		<p>Советую почитать <a href="article.php" title="Статьи">мои статьи о знаменитых фотографах</a></p>
			
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
</body>
</html>