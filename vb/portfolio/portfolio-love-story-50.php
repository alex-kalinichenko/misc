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
	<title>Фотосессия Love Story - История любви - Свадебная фотокнига - Виктория Балашова - креативный фотограф.</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="фотосессия love story свадебная фотокнига креативный фотограф виктория балашова" />
	<meta name="description" content="Фотосессия Love Story креативного фотографа Виктории Балашовой. " />

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
	 	
		<h1>Фотосессия Love Story</h1>
		<br />
		<h2>История любви Радослава и Оксаны</h2>
		<br />
		<a href="portfolio-studio-55.php" class="previous" title="Предыдущая фотосессия">&lt;-Предыдущая фотосессия</a>
		<a href="../portfolio.php"  class="back_portfolio" title="Портфолио">Вернуться в портфолио</a>
		<a href="portfolio-studio-55.php"  class="next"   title="Следующая фотосессия">Следующая фотосессия-&gt;</a>
        <br />
        
     <table cols="1">
      <tr>
       <td>
        <?php
		/* settings */
		$image_dir = 'love-story-50-radek-oxi/';
		$per_column = 6;
		/* step one:  read directory, make array of files */
		if ($handle = opendir($image_dir)) {while (false !== ($file = readdir($handle))) 
		{if ($file != '.' && $file != '..') {if(strstr($file,'-thumb')) {$files[] = $file;}}}closedir($handle);}
		/* step two: loop through, format gallery */
		if(count($files)){foreach($files as $file){$count++;
		echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'">
		<img src="',$image_dir,$file,'" width="150" height="150" alt="Фотосессия love story (история любви) - креативный фотограф Виктория Балашова" /></a>';
		if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
		}}else{echo '<p>Отстутствуют фотографии в этом фотосете.</p>';}?>
	   </td>
	  </tr>
	 </table>
	
	<br />
    <br />
    <p>Молодожёнами была заказана свадебная фотокнига, в которую вошли фотографии из этой фотосессии и <a href="portfolio-wedding-80.php" target="_blank" title="свадебные фотографии">фотографии с их свадьбы</a>.</p>
    <p>Ссылка на YouTube: <a href="http://youtu.be/MlDq41jLzFk" rel="nofollow" target="_blank" title="Свадебная фотокнига">http://youtu.be/MlDq41jLzFk</a></p>
    <br />
    <iframe width="560" height="315" rel="nofollow" src="http://www.youtube.com/embed/MlDq41jLzFk" frameborder="0" allowfullscreen></iframe>
    <br />
	<br />

    <p>Понравилось? Нажмите "мне нравится"!</p>
	<? include("social-portfolio.php"); ?>

	<br />
	<p>Фотосессия Love Story - это фотосессия, заказанная двумя влюбленными, которые хотят сохранить историю своих взаимоотношений. Эмоции возможно со временем пройдут, но фотографии останутся на память. Я рекомендую заказывать фотосессию love story  вместе со свадебной фотосессией. Из нее можно сделать слайд-шоу и демонстрировать на свадьбе во время банкета. Или включить эти фотографии в свадебный альбом в качестве предыстории. Это сделает альбом более разнообразным и интересным.</p>
	<p>В Москве огромное количество мест, где можно провести фотосъемку пары. Это может быть излюбленное место влюблённых или фотограф предложит что-то на свой выбор. В студии также есть прекрасная возможность воплотить любые идеи, более того, фотостудия - это уединенное пространство, где вы сможете чувствовать себя намного комфортнее.</p>
	<p>Перед началом работы над Love Story придумывается идея, сюжет, когда решают что необходимо снимать. Для того, чтобы в Love Story подчеркнуть как ваш индивидуальный стиль, так и настроение второй половинки, можно использовать уже имеющиеся аксессуары или купить те предметы, которые буду отражать ваш образ. Фотосъемка Love Story обычно делается в репортажном стиле. Съёмочный процесс может длиться без остановки, и, как правило, без постановочных кадров. Мастерство фотографа позволяет поймать самые интересные моменты тогда, когда пара этого не ожидает и сфотографировать их максимально естественно и красиво.</p>
	<p>Эта love story фотосессия была проведена в новогодние каникулы.
Первая часть сфотографирована в строгих образах. На нём костюм, а на ней роскошное вечернее платье. Пара позирует в различных интерьерах - они играют в шахматы, танцуют, обнимаются.
Во второй части влюблённые перебрались в постель и устроили бой подушками. Просматривая фотографии складывается впечатление, что они встретили вместе Новый Год, только что проснулись и собираются открывать подарки. В фотосессии присутствует легкий эротический подтекст, который придаёт ей интимность и очарование.</p>
	<br />
	
	<p>Рекомендую посмотреть <a href="portfolio-wedding-80.php" title="Свадебная фотосессия" target="_blank">зимнюю свадебную фотосессию</a> Радослава и Оксаны.</p>
	<br />
	
	<a href="portfolio-studio-55.php" class="previous_bottom" title="Предыдущая фотосессия">&lt;-Предыдущая фотосессия</a>
	<a href="../portfolio.php"  class="back_portfolio_bottom" title="Портфолио">Вернуться в портфолио</a>
	<a href="portfolio-studio-55.php"  class="next_bottom"   title="Следующая фотосессия">Следующая фотосессия-&gt;</a>
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