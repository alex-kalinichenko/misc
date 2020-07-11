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
	<title>Знаменитые фотографы. Статьи и фотографии знаменитых фотографов. Цитаты известных фотографов</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="статьи фотограф знаменитые фотографы история развитие фотографии искусство фотографировать синди шерман диана арбус нэн голдин юсуф карш джордж харрелл цитаты" />
	<meta name="description" content="Знаменитые фотографы - Синди Шерман, Диана Арбус, Нэн Голдин, Юсуф Карш, Джордж Харрел и др. Статьи. Цитаты." />
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

<!-- ========================================================================== -->

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

<div id="wrapper_article">

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
		    <h1>Авторские статьи о знаменитых фотографах и искусстве фотографии</h1>
		    <br />
		    <p>В этом разделе размещены статьи, посвещённые фотографам мирового значения. Эти <strong>знаменитые фотографы</strong> не только навсегда вошли в историю, но и определили развитие фотографии на долгие годы вперёд. Именно они сделали из фотографии настоящее искусство. К сожалению, в России немногие знают об этих мастерах. Поэтому я решила написать цикл статей, в которых расскажу о том, как они творили, кого фотографировали и что привнесли нового в искусство.</p>
		    <p>Также здесь публикуются некоторые статьи о том, как фотографировать и позировать.</p>
		    <br />
		    <br />
		    <h2>Цикл статей: "Знаменитые фотографы"</h2>
			<br />
			<p><a href="article/milton-greene.php" title="Милтон Грин">Милтон Грин</a> - фотограф Мэрилин Монро (часть 1).</p>
			<p><a href="article/milton-greene-2.php" title="Милтон Грин">Милтон Грин</a> - фотограф Мэрилин Монро (часть 2).</p>
			<p><a href="article/cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - самая яркая последовательница концептуального искусства и самый высокооплачиваемый фотограф.</p>
			<p><a href="article/diane_arbus.php" title="Диана Арбус">Диана Арбус</a> - как бы того ни хотела, но все равно вошла в историю фотографии как "Фотограф, снимавшая уродцев".</p>
			<p><a href="article/nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов. Снимала свои исчезающие воспоминания о прошлом ...чтобы помнить.</p>
			<p><a href="article/yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнейший фотограф-портретист ХХ века и этим всё сказано.</p>
			<p><a href="article/george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - культовый фотограф киностудии MGM. Без него кинозвезды не стали бы легендами.</p>
			<p><a href="article/clarence-bull.php" title="Кларенс Синклер Булл">Кларенс Синклер Булл</a> - эксклюзивный фотограф только одной звезды, легендарной Греты Гарбо.</p>

			<br />
		    <h2>Статьи о фотографии</h2>
			<br />
			<p><a href="article/photo-shoot-for-coupon.php">Фотосессия по купонам</a></p>
			<p><a href="article/pregnancy-photo.php">Фотосессия для беременных</a></p>
			<p><a href="article/unusual-creative-photography.php">Креативные и необычные фотографии</a></p>
			<p><a href="article/inexpensive-photographer.php">О недорогих фотографах</a></p>
			<p><a href="article/posovetuite-fotografa.php">Посоветуйте хорошего фотографа на свадьбу</a></p>
			<p><a href="article/expensive-photographer.php">Дорогой фотограф</a></p>
			<p><a href="article/photographer-wedding-moscow.php">Как выбрать свадебного фотографа в Москве</a></p>
			<p><a href="article/how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо получаться на фотографиях?</a></p>
			<p><a href="article/principles_of_lighting.php" title="Основы освещения в фотостудии">Основы освещения в фотостудии</a></p>
			<p><a href="article/quotes_photographers.php" title="Цитаты фотографов">Цитаты фотографов</a></p>
			<br />
			<p>Посмотрите моё <a href="portfolio.php" title="Портфолио">портфолио</a>. Больше информации обо мне <a href="about.php" title="Обо мне">здесь</a></p>
			<br />
			<br />
			<p>Если мои статьи вам понравилась, поделитесь ссылкой с друзьями. Нажмите кнопку Вконтакте, Одноклассники, Facebook, Twitter, Google+, ЖЖ или оставьте свой комментарий. Спасибо!</p>
			
			<? include("social.php"); ?>
			<!-- FACEBOOK каменты-->
			<p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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