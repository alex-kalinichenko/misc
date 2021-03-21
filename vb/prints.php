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
	<title>Авторские принты - печать фотографий на холсте креативного фотографа Вики Балашовой</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="принт печать на холсте фотография" />
	<meta name="description" content="Что такое принты и печать на холсте. Примеры того, как как это выглядит" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!-- скрипты и css галереи -->
 <link rel="stylesheet" type="text/css" href="css/style_galery.css" />
 <link rel="stylesheet" type="text/css" href="resources/fancy.css" />
 <script type="text/javascript" src="js/jquery-1.2.3.pack.js"></script>
 <script type="text/javascript" src="js/jquery.fancybox-1.0.0.js"></script>
 <script type="text/javascript">$(function(){$(".photo-link").fancybox({ 'zoomSpeedIn': 500, 'zoomSpeedOut': 500,
	'overlayShow': true }); });	</script>
<!-- #скрипты и css галереи -->
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
<!--  мне нравится и каменты ВКонтакте -->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?48"></script>
<script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
<!-- #мне нравится и каменты ВКонтакте -->
</head>

<body>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-----------СЧЁТЧИК Яндекс--------------------------------------->

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
	     <h1>Изготовление принтов - печать авторских фотографий на холсте</h1>
		 <br />
		 <br />
		 <p>Печать на холсте это простой и сравнительно дешевый способ придать эксклюзивность любой фотографии. Этот новый вид изобразительного искусства появился сравнительно недавно, но уже стал новым трендом в искусстве и фотографии. Что же такое холст? Это плотный материал с фактурной поверхностью, похожий на художественное полотно. По качеству и износостойкости он превосходит натуральный и визуально полностью ему идентичен. Сейчас чаще всего, художественную фотографию, снятую профессиональным фотографом и напечатанную на холсте называют принтом.</p>
		 <p>Многие заказывают принты для украшения интерьера, но я считаю, что у каждого человека должна висеть собственная семейная постановочная фотография в одной из комнат, просто потому что это ваша история. Фотография, напечатанная на холсте без всякого обрамления в раму, на мой взгляд, выглядит намного стильнее и привлекательнее. Она сочетается с предметами интерьера и не напоминает музей. Вы  можете заказать понравившуюся фотографию из моего портфолио или же сделать заказ после фотосессии в студии. Такие принты станут настоящим украшением вашего дома, кроме того, это прекрасный подарок!</p>

		 <br />
		 <table cols="1">
		  <tr>
		   <td>
		    <?php
		    /* settings */
		    $image_dir = 'images/prints/';
		    $per_column = 6;
		    /* step one:  read directory, make array of files */
		    if ($handle = opendir($image_dir)) {while (false !== ($file = readdir($handle))) 
		    {if ($file != '.' && $file != '..') {if(strstr($file,'-thumb')) {$files[] = $file;}}}closedir($handle);}
		    /* step two: loop through, format gallery */
		    if(count($files)){foreach($files as $file){$count++;
		    echo '<a class="photo-link" rel="one-big-group" href="',$image_dir,str_replace('-thumb','',$file),'">
		    <img src="',$image_dir,$file,'" width="150" height="150" alt="Авторский принт - фотография на холсте - креативный фотограф Виктория Балашова" /></a>';
		    if($count % $per_column == 0) { echo '<div class="clear"></div>'; }
		    }}else{echo '<p>Отстутствуют фотографии в этом фотосете.</p>';}?>
		   </td>
		  </tr>
		 </table>
		 <br />

		 <p>Понравилось? Нажмите!</p>
		 <? include("social.php"); ?>
		 <br />

		 <h2>Печать на холсте с последующей натяжкой на подрамник</h2>
		 <br />
		 <p>Изготовление принтов состоит из нескольких процедур. Печать фотографии на холсте - это лишь первый этап в цепочке изготовления фотоработы. Следующим этапом является натяжка холста на подрамник - закрепление полотна с изображением на деревянный остов в виде рамы, толщиной, как правило, 2 см. Таким образом достигается эффект объемности изображения. После монтажа работа готова к тому, чтобы стать украшением интерьера. Холст, натянутый на подрамник - это самостоятельный предмет оформления.</p>
		 <img src="images/prints/podramnik.gif" width="317" height="164" alt="Натяжка на подрамник">
		 <br />
         <br />
         <h2>Типы подрамников</h2>
         <p>В зависимости от размера изображения выбирается тот или иной тип подрамника: шириной 4 см или 6 см. Чем больше изображение - тем он шире. Также при натяжке очень больших форматов по диагонали ставятся деревянные перекрестия. Такая схема крепления поможет избежать провисания полотна спустя длительное время.</p>
         <h2>Защита изображения лаком</h2>
         <p>Для дополнительной защиты изображения от влаги и выгорания холст рекомендуется покрывать лаком. Лаковое покрытие предохраняет изображение от мелких механических повреждений и продлевает срок жизни готовой работы. После покрытия лаком напечатанное изображение становится ярче и контрастнее.</p>
         <br />
         <h2>Стоимость изготовления авторских принтов фотографа Виктории Балашовой</h2>
         <br />
         <p>Форматы принтов от 30х30 до 75х110 см.</p>
			
         <table width="550" border="0" cols="3">
          <tr>
		   <td>
		    <table width="240" border="1" cols="2">
		     <tr> <td align=center colspan="2">Прямоугольник 2 к 3</td> </tr>
		     <tr> <th>Размер постера на холсте</th><th align=center>Стоимость</th> </tr>
		     <tr> <td>30x45</td><td align=center>2460</td> </tr>
		     <tr> <td>40x60</td><td align=center>3190</td> </tr>
		     <tr> <td>50x75 - рекомендуемый</td><td align=center>3990</td> </tr>
		     <tr> <td>60x90</td><td align=center>4950</td> </tr>
		     <tr> <td>75x110</td><td align=center>5790</td> </tr>
		    </table>
		   </td>
		   <td width="90"> </td>
		   <td>
		    <table width="240" border="1" cols="2">
			 <tr> <td align=center colspan="2">Квадрат</td> </tr>
			 <tr> <th>Размер постера на холсте</th><th align=center>Стоимость</th> </tr>
			 <tr> <td>30x30</td><td align=center>2250</td> </tr>
			 <tr> <td>40x40</td><td align=center>2660</td> </tr>
			 <tr> <td>50x50 - рекомендуемый</td><td align=center>3500</td> </tr>
			 <tr> <td>60x60</td><td align=center>4190</td> </tr>
			 <tr> <td>75x75</td><td align=center>4890</td> </tr>
		    </table>
		   </td>
          </tr>
         </table>
         <br />

         <table width="550">
          <tr>
           <td align="center">
            <table align="center" width="240" border="1" cols="2">
             <tr> <td align=center colspan="2">Прямоугольник 3 к 4</td> </tr>
             <tr> <th>Размер постера на холсте</th><th align=center>Стоимость</th> </tr>
             <tr> <td>30x40</td><td align=center>2360</td> </tr>
             <tr> <td>40x55</td><td align=center>2960</td> </tr>
             <tr> <td>40x60</td><td align=center>3260</td> </tr>
             <tr> <td>50x65 - рекомендуемый</td><td align=center>3800</td> </tr>
             <tr> <td>60x80</td><td align=center>4680</td> </tr>
             <tr> <td>75x100</td><td align=center>5790</td> </tr>
            </table>		        
           </td>
          </tr>
         </table>
         <br />

         <p><i>Рекомендуемый размер</i> - это оптимальный размер по параметрам "величина холста" - "визуальное восприятие" - "цена". Начиная с этого размера принт приобретает глубину и смотриться как часть интерьера.</p>
         <br />
         <p>Также вы можете заказать мои принты размером до 50x50 см на <a href="http://instacanv.as/victoria_balashova" target="_blank">этом сайте</a>. Стоимость самого большого квадратного принта размером 50 на 50 см примерно 2400 руб. Но доставка будет стоить 1500 руб за первый принт и по 750 за каждый дополнительный.</p>
         <br />
         <p>С отзывами о работе со мной можно ознакомиться в <a href="review.php" title="Отзывы">"Отзывах"</a>.</p>
         <p>Для заказа принтов позвоните мне по телефону (г. <strong>Москва</strong>): <b>+7 962 935 53 53</b></p>
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
<!-- скрипт для кнопки +1 -->
<script type="text/javascript"> window.___gcfg = {lang: 'ru'}; (function() { var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
<!-- #скрипт для кнопки +1 -->
</body>
</html>