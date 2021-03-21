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
	<title>Виктория Балашова - креативный фотограф в Москве. Свадебные фотосессии, фотосъёмка в студии и на пленэре, портфолио для моделей. Необычные фотографии. Креативные фотографии. Знаменитые фотографы и статьи о них. Работы знаменитых фотографов. Вика Балашова. Фотосессии беременных</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="виктория балашова вика victoria balashova vika москва креативный фотограф свадебный фотография потфолио фотосессия свадьба свадебная фотосъёмка авторские статьи знаменитые фотографы искусство фото" />
	<meta name="description" content="Я cнимаю необычные фотографии. Мои креативные фотографии показывают неповторимость, очарование и внутреннюю красоту человека. Пишу статьи о знаменитых фотографах." />
	<link rel="stylesheet" href="css/style-portfolio.css" type="text/css" media="screen, projection" />
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
</head>

<body>
<!-- СЧЁТЧИК Яндекс -->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- СЧЁТЧИК Яндекс -->

<div id="wrapper_index"><!--ширина 1100px -->
  
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
		    <p> </p><!-- резиновая самая правая часть (пустая) min=1088px (была предназначена для контента) -->
		    <!-- пробел <p> </p> должно стоять обязательно. Иначе сбивается форматирование -->
		</div><!-- #content-->
	 </div><!-- #container-->
		
	 <div class="sidebar" id="sideLeft">  <!-- --  ЛЕВЫЙ САЙДБАР 70px ----- -->
          <p> </p>
	 </div><!-- .sidebar#sideLeft -->     <!-- - # ЛЕВЫЙ САЙДБАР  ----- -->
		
	 <div class="sidebar" id="sideRight">  <!--  ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА 998px  -->

<table cols="1" border="0" height="650">
  <tr>
   <td>   <!-- Т А Б Л И Ц А -->
   </td>
  </tr>
</table>
        <p>Я - <strong>Виктория Балашова</strong>, <strong>креативный фотограф</strong>. Я рада приветствовать вас на моем сайте, посвященном искусству фотографии.</p>
		<p>Профессиональная фотосъемка, будь то <strong>свадьба</strong>, <strong>love story</strong> или <strong>портфолио</strong>  - это настоящее искусство, позволяющее запечатлеть лучшие моменты нашей жизни. Я, как настоящий <strong>фотограф</strong> являюсь не просто специалистом своего дела, но и психологом. Умение расположить к себе, раскрепостить и создать соответствующую атмосферу это тоже талант. Я творчески подхожу к процессу создания образов, исходя из пожеланий клиентов.</p>
		<p>Я отличаюсь от большинства фотографов тем, что я снимаю <strong>необычные фотографии</strong> и показываю внутреннюю красоту человека. В каждом есть своя неповторимость и очарование и я стремлюсь это подчеркнуть. Главная проблема фотографии, как искусства, сегодня - следование стандартам и шаблонам. Большинству очень сложно найти что-то новое среди предложений по <strong>фото</strong>. Создаётся лишь иллюзия выбора, на самом деле его почти нет. Разные фотографы предлагают одно и тоже. Я предлагаю совершенно новое. У меня необычный взгляд на предмет, кто-то может понимать, кто-то нет. Но <strong>фотосессия</strong> каждого человека у меня уникальна. Я не повторяюсь.</p>
		<p>В процессе фотосессии огромную роль играет мимика, выигрышные позы и выбор правильного ракурса и я уделяю этому наибольшее внимание. Даже уверенным в своей полной нефотогеничности людям, я предлагаю индивидуальный подход, чтобы получить <strong>необычные фотографии</strong>. Весь секрет не только в профессионализме, но и в <strong>креативности</strong>, в творческом подходе к процессу фотосъёмки.</p>
		<p>Для меня, как для фотографа, очень важна коммуникация с моделью. Я стараюсь, чтобы вы чувствовали себя раскованно и непосредственно. Только в расслабленном состоянии можно создать фотографии, которые будут нравится и вам и всем окружающим. Люди, впервые попадающие на фотосессию освобождаются от масок, которые они носят в повседневной жизни.</p>
		<p>Моё кредо - внести свой вклад в развитие фотографии и создать то, что никто ещё не делал.</p>
		Я, <strong>креативный фотограф</strong>, приглашаю вас на фотосессию, чтобы вы убедились, что я действительно обрадую вас потрясающе красивыми фотографиями. Позвоните по телефону <b>+7 962 953 35 35</b> (г. <strong>Москва</strong>) или напишите письмо: <b>in<div class="foem">!#N#!</div><span class="mfs">f</span><!-- pop -->o&#64<!-- 2 -->vic<!-- --->toriabalashova&#46;<!--[if IE]>c<![endif]--><![if !IE]>c<![endif]>om</span></b>
		<p>Рекомендую прочитать обо мне <a href="review.php" title="отзывы">отзывы</a> и посмотреть мои <strong>креативные фотографии</strong> в <a href="portfolio.php" title="портфолио">портфолио</a>.</p>
		<p><strong>Знаменитые фотографы</strong> изменили наше представление об искусстве фотографии. В разделе <a href="article.php" title="статьи">статьи</a> я рассказываю о том, как знаменитые фотографы создавали свои шедевры и привожу цитаты фотографов.</p>
		<p align="right"><i>Креативный фотограф Вика Балашова</i></p>
	</div><!--#itemscope-->
   </div><!-- .sidebar#sideRight -->     <!-- #ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 998px -- -->
 </div><!-- #middle-->
</div><!-- #wrapper -->			

<div id="footer"> <!-- ---------  П О Д В А Л ----------------------------- -->
  <div id="copyright">
	<? include("copyright.php"); ?>
  </div><!-- #copyright --> 

  <div id="citation"> <!--ЦИТАТЫ-->
    <? include("quotes.php"); ?>
  </div><!--#citation-->
   
  <div id="top100"><!-- begin of Top100 code -->
    <script id="top100Counter" type="text/javascript" src="http://counter.rambler.ru/top100.jcn?2674104">
    </script><noscript><a href="http://top100.rambler.ru/navi/2674104/" rel="nofollow"><img 
    src="http://counter.rambler.ru/top100.cnt?2674104" alt="Rambler's Top100" border="0" /></a></noscript>
  </div><!-- end of Top100 code -->
</div><!-- #footer -->  <!-- --------- # П О Д В А Л ----------------------------- -->
</body>
</html>