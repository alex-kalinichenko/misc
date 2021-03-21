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
	<title>Цены - Виктория Балашова - креативный фотограф. Фотограф на свадьбу</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="цена фотограф на свадьбу стоимость фотосессия фотосъёмка студия фотостудия образ фотографироваться обработка заказ загс прогулка невеста фотокнига свадебная фотокнига визажист" />
	<meta name="description" content="Цены на фотосъёмку на свадьбе и фотосессию в студии или на пленэре. Стоимость изготовления свадебных фотокниг" />
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

<div id="wrapper_price">

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
		    <h1>Цены</h1>
			<br />
			<br />
			<p>Вы можете выбрать готовый пакет или почасовую оплату.</p>
			<br />
			<p>Новый тренд в фотографии - принты или <a href="prints.php" target="_blank">печать фотографий на холсте</a></p>
			<br />
			
     <strong>Фотосессия в студии</strong>
            <ul id="list">
              <li>Длительность фотосъемки 3 часа</li>
              <li>Несколько образов (вы приносите одежду, в которой хотели бы сфотографироваться)</li>
              <li>Обработка 15-20 понравившихся фотографий</li>
              <li>Запись всех фотографий на диск <a href="#" onclick="window.open('images/dvd-box.jpg',
                  'winscript','height=478,width=600,toolbars=0;'); return false" >пример 1</a> </li>
              <li>Фотостудия включена в стоимость фотосессии</li>
              <li>Стоимость 10 тыс. руб.</li>
            </ul>
            <p>Готовность заказа: 14 дней с момента съемки.</p>
            <br />
            
     <strong>Свадебная фотосъемка</strong>
            <ul id="list">
              <li>Стоимость 1500 руб/час</li>
              <li>Количество часов определяете вы</li>
              <li>Обработка лучших снимков</li>
              <li>Запись всех фотографий на диск <a href="#" onclick="window.open('images/dvd-box-3.jpg',
                  'winscript','height=478,width=600,toolbars=0;'); return false" >пример 3</a></li>
            </ul>
            <p>Готовность заказа: 20 дней с момента съемки</p>
            <br />
            
     <strong>Фотосъёмка на пленере</strong>
            <ul id="list">
              <li>Стоимость 1500 руб/час</li>
              <li>количество часов и место фотосъёмки выбираете вы</li>
              <li>Обработка удачных фотографий</li>
              <li>Запись всех фотографий на диск <a href="#" onclick="window.open('images/dvd-in-box.jpg',
                  'winscript','height=535,width=1092,toolbars=0;'); return false" >пример 5</a></li>
              <li>Минимальный заказ от 3-х часов</li>
              <p>Готовность заказа: 14 дней с момента съемки</p>
            </ul>
			<br />
			
	 <strong>Свадебная фотокнига</strong>
			<p>Отдельно вы можете заказать изготовление свадебной фотокниги. Пример фотокниги <a href="video.php#photobook" target="_blank" title="Video">здесь</a>. Работа включает в себя:</p>
            <ul id="list">
              <li>Обработка фотографий</li>
              <li>Вёрстка фотокниги</li>
              <li>Печать в типографии и склейка + шитьё ниткой</li>
              <li>Цена от 4 до 10 тыс руб. (зависит от формата и количества страниц)</li>
            </ul>
            <br />
            <p id="blink">Заинтересована в сотрудничестве с девушками модельной внешности на основе ТFP. Вместе мы сможем реализовать интересные проекты.</p> Пишите мне: <b>in<div class="foem">!#N#!</div><span class="mfs">f</span><!-- pop -->o&#64<!--- 2 -->vic<!-- --->toriabalashova&#46;<!--[if IE]>c<![endif]---><![if !IE]>c<![endif]>om</span></b>
	 		<br />
	 		
            <br />
            <br />
			<p>При желании Вы можете заказать услуги визажиста, стоимость 2000 руб. за 3 часа съемки.</p>
			<br />
			<p>Весь "сырой", необработанный  материал выдается по просьбе заказчика.</p>
			<br />
			<p>С отзывами о работе со мной можно ознакомиться в <a href="review.php" title="Отзывы">"Отзывах"</a>.</p>
			<p>Для заказа фотосессии позвоните мне по телефону (г. <strong>Москва</strong>): <b>+7 962 935 53 53</b></p>
		или напишите: <b>in<div class="foem">!#N#!</div><span class="mfs">f</span><!-- pop -->o&#64<!--- 2 -->vic<!-- --->toriabalashova&#46;<!--[if IE]>c<![endif]---><![if !IE]>c<![endif]>om</span></b>
		    <br /><br />
		    <p>Все мои контакты указаны на <a href="contact.php" title="Контакты">этой странице</a>.</p>		
			<p>Рекомендую почитать <a href="article.php" title="Статьи">мои статьи о знаменитых фотографах</a></p>
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