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
	<title>Фотосессия "Stewardess" - Студийная фотосъёмка "Стюардесса" - Виктория Балашова креативный фотограф</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="stewardess,стюардесса,креативный фотограф,виктория балашова,фотосессия,фотостудия" />
	<meta name="description" content="Фотосессия Stewardess креативного фотографа Виктории Балашовой" />
	<!--link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" / -->
	<link rel="stylesheet" href="../css/style-portfolio.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->

<!-- скрипты и css галереи -->
	<link rel="stylesheet" type="text/css" href="../css/style_galery.css" />
	<link rel="stylesheet" type="text/css" href="../resources/fancy.css" />
	<script type="text/javascript" src="../js/jquery-1.2.3.pack.js"></script>
	<script type="text/javascript" src="../js/jquery.fancybox-1.0.0.js"></script>
	<script type="text/javascript">$(function(){$(".photo-link").fancybox({ 'zoomSpeedIn': 500, 'zoomSpeedOut': 500,
	'overlayShow': true }); });	</script>
<!-- #скрипты и css галереи -->

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

<!--  мне нравится и каменты ВКонтакте -->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?48"></script>
<script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
<!-- #мне нравится и каменты ВКонтакте -->
</head>

<body>
<!-- СЧЁТЧИК Яндекс -->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- СЧЁТЧИК Яндекс -->

<!-- мне нравится и каменты Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1&appId=168625286589101";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- #мне нравится и каменты Facebook -->

<div id="wrapper"><!--ширина 1100px -->
  
  <div id="header">      <!-- --------------- Ш А П К А -----------------------------------------   -->
    <strong><a href="http://victoriabalashova.com" id="header1">Виктория Балашова</a></strong>
    <strong><a href="http://victoriabalashova.com" id="header2">креативный фотограф</a></strong>

    <div id="menu">
      <a href="../index.php"     class="home"      title="Главная">Главная</a>
      <a href="../about.php"     class="about"     title="Обо мне">Обо мне</a>
      <a href="../portfolio.php" class="portfolio" title="Портфолио">Портфолио</a>
      <a href="../video.php"     class="video"     title="Видео">Видео</a>
      <a href="../article.php"   class="article"   title="Статьи">Статьи</a>
      <a href="../review.php"    class="review"    title="Отзывы">Отзывы</a>
      <a href="../price.php"     class="price"     title="Цены">Цены</a>
      <a href="../contact.php"   class="contact"   title="Контакты">Контакты</a>
    </div><!-- #menu-->

    <div id="hor_line">
      <img src="../images/line.jpg"/>
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
	 	
		<h1>Фотосессия "Stewardess"</h1>
		<br /><br />
		<h2>Фотосессия в студии</h2>
		<br />
		<a href="portfolio-studio-50.php" class="previous" title="Предыдущая фотосессия"><-Предыдущая фотосессия</a>
		<a href="../portfolio.php"  class="back_portfolio" title="Портфолио">Вернуться в портфолио</a>
		<a href="portfolio-studio-55.php"  class="next"   title="Следующая фотосессия">Следующая фотосессия-></a>
        <br />
        
     <table cols="1">
      <tr>
       <td>
        <?php
		/* settings */
		$image_dir = 'studio-53-stewardess/';
		$per_column = 6;
		/* step one:  read directory, make array of files */
		if ($handle = opendir($image_dir)) {while (false !== ($file = readdir($handle))) 
		{if ($file != '.' && $file != '..') {if(strstr($file,'-thumb')) {$files[] = $file;}}}closedir($handle);}
		/* step two: loop through, format gallery */
		if(count($files)){foreach($files as $file){$count++;
		echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'">
		<img src="',$image_dir,$file,'" width="150" height="150" alt="Фотосессия Стюардесса (Stewardess) - креативный фотограф Виктория Балашова" /></a>';
		if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
		}}else{echo '<p>Отстутствуют фотографии в этом фотосете.</p>';}?>
	   </td>
	  </tr>
	 </table>

    <br />
    <br />
    <p>Понравилось? Нажмите!</p>
	<? include("social-portfolio.php"); ?>

	<br />
	<p>Фотосессия "Stewardess". Модель – стюардесса в авиакомпании Аэрофлот. В этой фотосессии она сфотографирована в нескольких образах: хуликанки, романтической девушки и строгой бизнес-вумен. Оля одинаково прекрасно смотрится в любой одежде. Она игрива, обаятельна и прекрасно позирует. Модель позирует в классической форме стюардессы, котрая ей очень к лицу и подчёркивает все достоинства. Белые перчатки и строгая форма показывают красоту и привлекательность одной из самых лучших профессии в мире.</p>
	<br />
	<a href="portfolio-studio-50.php" class="previous_bottom" title="Предыдущая фотосессия"><-Предыдущая фотосессия</a>
	<a href="../portfolio.php"  class="back_portfolio_bottom" title="Портфолио">Вернуться в портфолио</a>
	<a href="portfolio-studio-55.php"  class="next_bottom"   title="Следующая фотосессия">Следующая фотосессия-></a>
	<br />
	<br />
	
	 </div><!-- .sidebar#sideRight -->     <!-- #ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 560px -- -->

  </div><!-- #middle-->

</div><!-- #wrapper -->			


<div id="footer"> <!-- ---------  П О Д В А Л ----------------------------- -->

  <div id="copyright">
	<? include("../copyright.php"); ?>
  </div><!-- #copyright --> 

  <div id="citation">       <!--ЦИТАТЫ-->
    <? include("../quotes.php"); ?>
  </div><!--#citation-->
</div><!-- #footer -->  <!-- --------- # П О Д В А Л ----------------------------- -->
<!-- скрипт для кнопки +1 -->
<script type="text/javascript"> window.___gcfg = {lang: 'ru'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
<!-- #скрипт для кнопки +1 -->
</body>
</html>