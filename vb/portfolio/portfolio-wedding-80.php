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
	<title>Свадебная фотосессия зимой - Виктория Балашова креативный фотограф.</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="портфолио свадебная фотосессия зимой креативный фотограф виктория балашова" />
	<meta name="description" content="Свадебная фотосессия зимой креативного фотографа Виктории Балашовой" />

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
	 	
		<h1>Свадебная фотосессия зимой</h1>
		<h2>Радослав и Оксана. Избранные фото</h2>
		<br />
		<br />
		<a href="portfolio-wedding-70.php" class="previous" title="Предыдущая фотосессия"><-Предыдущая фотосессия</a>
		<a href="../portfolio.php"  class="back_portfolio" title="Портфолио">Вернуться в портфолио</a>
		<a href="portfolio-wedding-90.php"  class="next"   title="Следующая фотосессия">Следующая фотосессия-></a>
        <br />
        
     <table cols="1">
      <tr>
       <td>
        <?php
		/* settings */
		$image_dir = 'wedding-80-radek-oxi/';
		$per_column = 6;
		/* step one:  read directory, make array of files */
		if ($handle = opendir($image_dir)) {while (false !== ($file = readdir($handle))) 
		{if ($file != '.' && $file != '..') {if(strstr($file,'-thumb')) {$files[] = $file;}}}closedir($handle);}
		/* step two: loop through, format gallery */
		if(count($files)){foreach($files as $file){$count++;
		echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'">
		<img src="',$image_dir,$file,'" width="150" height="150" alt="Свадебная фотосессия зимой - креативный фотограф Виктория Балашова" /></a>';
		if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
		}}else{echo '<p>Отстутствуют фотографии в этом фотосете.</p>';}?>
	   </td>
	  </tr>
	 </table>
	
	<br />
	<br />
    <p>Молодожёнами была заказана свадебная фотокнига, в которую вошли фотографии из этой фотосессии и романтические фотографии <a href="portfolio-love-story-50.php" target="_blank" title="Love story">Love story</a>.</p>
    <p>Ссылка на YouTube: <a href="http://youtu.be/MlDq41jLzFk" rel="nofollow" target="_blank" title="Свадебная фотокнига">http://youtu.be/MlDq41jLzFk</a></p>
    <br />
    <iframe width="560" height="315" rel="nofollow" src="http://www.youtube.com/embed/MlDq41jLzFk" frameborder="0" allowfullscreen></iframe>
    <br />
    <br />
    <br />
    <p>Рекомендую посмотреть <a href="portfolio-love-story-50.php" title="Love Story">фотосессию Love Story</a> Радека и Оксаны</p>
    <br />
    <p>Понравилось? Нажмите "Мне нравится"!</p>
	<? include("social-portfolio.php"); ?>
	<br />
	
	<p>Свадебная фотосессия на мосту Багратион – это прекрасное решения для зимних свадеб. Как раз такую зимнюю свадьбу я снимала 24 декабря. Мост Багратион хорош тем, что здесь есть как крытая, так и открытая часть. Молодожены, выбравшие его для своей свадебной прогулки, могут не бояться испортившейся в день свадьбы погоды. Помещения моста отапливаются, и зимой невеста не замерзнет даже в легком свадебном платье. С моста открывается великолепный вид на Москву-реку, на этом месте можно сделать потрясающие снимки. Большие оконные проемы и сине-голубой цвет конструкции создают воздушность и романтичность. Это место по праву может считаться воплощением современной архитектуры, новаторством в области мостостроения, а значит занять свое достойное место в маршрутном листе вашей свадебной прогулки.</p>
	<p>Решимость снять фотосессию оправдывается на все сто. Здесь легко получается отличная <strong>свадебная фотосессия зимой</strong>. Рядом с мостом Багратион имеются несколько смотровых площадок на открытом воздухе, так же подходящих для фотосессии. В непосредственной близости также находятся Воробьевы горы и Новодевичий монастырь.</p>
	<br />
	<a href="portfolio-wedding-70.php" class="previous_bottom" title="Предыдущая фотосессия"><-Предыдущая фотосессия</a>
	<a href="../portfolio.php"  class="back_portfolio_bottom" title="Портфолио">Вернуться в портфолио</a>
	<a href="portfolio-wedding-90.php"  class="next_bottom"   title="Следующая фотосессия">Следующая фотосессия-></a>
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