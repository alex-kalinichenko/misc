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
	<title>Обо мне - Виктория Балашова - креативный фотограф</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="фотография,творчество,красиво,идеи,художник,скрытое,внутренняя красота,модель,кадр,образ,фантазия,портфолио,кинозвезда,фото,свадьба,профессиональные фото,снимок,услуги,студия,плэнер,качество" />
	<meta name="description" content="Я стараюсь быть перфекционистом и снимать людей красиво. Фотографирую людей в необычных образах." />
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
</head>

<body>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->

<div id="wrapper_about">

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
		    <h1>Обо мне</h1>
			<img src="images/victoria_balashova.jpg" alt="Виктория Балашова - Victoria Balashova - Вика Балашова" title="Виктория Балашова" class="picture_left"/>
			<br />
			<p>Меня зовут Виктория Балашова. Я профессиональный фотограф. Мои фотографии - это полностью мое творчество. Я стремлюсь быть перфекционистом и красиво снимать людей. Создаю и реализую собственные идеи, я сама себе художник. В каждом человеке я стараюсь увидеть то, что скрыто от посторонних глаз, и передать не только внешнюю, но и внутреннюю красоту модели. Удачный кадр может поймать те оттенки душевного состояния, которые человеческий глаз не всегда успевает уловить. Я люблю фотографировать людей подчас в совершенно необычных для них образах и вкладываю все свое умение и фантазию для того, чтобы сделать уникальные фотографии. Если вы хотите портфолио кинозвезды или вам необходимы профессиональные свадебные фото, или вы просто хотите украсить стены комнат красивыми снимками, то предлагаю воспользоваться моими услугами в студии и на плэнере. Это наилучший способ сделать постановочные фотографии максимального качества.</p>
			<p>Вы можете почитать обо мне <a href="review.php" title="отзывы">отзывы</a> и посмотреть моё <a href="portfolio.php" title="портфолио">портфолио</a>.</p>
			<p>Здесь указаны <a href="price.php" title="цены">цены</a></p>
			<p>Также рекомендую почитать <a href="article.php" title="Статьи">цикл статей "Знаменитые фотографы"</a></p>
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