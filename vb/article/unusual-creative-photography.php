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
	<title>Необычные и креативные фотографии</title>
	<meta name="keywords" content="необычные фотографии,креативные фотографии" />
	<meta name="description" content="О необычных и креативных фотографиях и фотографах" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="../css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
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

<!-- комментарии ВКонтакте -->
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?48"></script>
<script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
<!-- #комментарии ВКонтакте -->

<!-- модерация каментов Facebook (мой id)--> <meta property="fb:admins" content="1514995105"/>
<!--id приложения каментов Facebook-->  <meta property="fb:app_id" content="168625286589101"/>
</head>

<!-- ========================================================================== -->

<body oncopy="return false">
<!-- СЧЁТЧИК Яндекс -->
<div style="display:none;"><script type="text/javascript">(function(w, c) {    (w[c] = w[c] || []).push(function() {        try {            w.yaCounter8070736 = new Ya.Metrika({id:8070736, enableAll: true});        }        catch(e) { }    });})(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/8070736" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- СЧЁТЧИК Яндекс -->

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

<div id="wrapper_article">

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
		    <p> </p><!-- резиновая самая правая часть (пустая) шириной от 170px (была предназначена для контента) -->
		    <!-- пробел <p> </p> должно стоять обязательно. Иначе сбивается форматирование -->
		</div><!-- #content-->
	 </div><!-- #container-->
		
	 <div class="sidebar" id="sideLeft">  <!-- --  ЛЕВЫЙ САЙДБАР  ----- -->
          <!--  левый сайдбар шириной 70px -->
	 </div><!-- .sidebar#sideLeft -->     <!-- - # ЛЕВЫЙ САЙДБАР  ----- -->
		
	 <div class="sidebar" id="sideRight">  <!--  ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 560px  -->
       <h1>Необычные и креативные фотографии</h1>
       <br />
       <br />
       <p>В этой статье я хочу рассказать о необычности в фотографии, о креативности, творческом начале и, как о противоположности всему этому - о банальщине. Стандартизации и шаблонности мышления многих современных фотографов.</p>
       <br />
       <img src="unusual-creative-photography/creative-photo.jpg" width="520" height="780" alt="Креативная фотография">
       <br />
       <br />
       <p>Многие из Вас мечтают иметь красивые креативные и необычные фотографии, сделанные в фотостудии. Фотостудия - это целая лаборатория по раскрытию неповторимости, полета мысли и фантазии каждого из вас. И именно она играет основополагающую роль в конечном результате. Сейчас фотография опускается до уровня конъюнктуры благодаря обилию рекламных купонов, покупая которые вам обещают фотосессию за смешные деньги с визажистом и костюмами. С одной стороны это хорошо, потому что художественная фотография, как услуга, стала доступна абсолютно всем, но пострадало качество. Каждый, решившийся на подобный шаг должен осознавать, что эти деньги себя не оправдают, просто потому, что это конвейер  и ни о каком высоком искусстве здесь говорить не приходится. Выбор за вами, но я настоятельно рекомендую рассматривать портфолио фотографа или фотостудии, предлагающей подобные акции. Не всегда заявленная цена соответствует  качеству. Ориентируйтесь на свой вкус и восприятие, результат должен нравится только вам, так как вы - заказчик. Смотрите, если ли в портфолио действительно необычные фотографии, или у него всё как у всех. Если там нет креатива или какой-то необычности, смело ищите другого фотографа.</p>
       <br />
       <img src="unusual-creative-photography/unusual-photo.jpg" width="520" height="755" alt="Необычная фотография">
       <br />
       <br />
       <p>К сожалению, стандартизация охватила весь наш мир, и фотографию в том числе. Мы часто зависим от общественного мнения и перестаем прислушиваться к себе. И уже не так важна цена, сколько желание получить то же самое. Креативная фотография - это искусство, а фотограф, обожающий свою профессию - творец. Его работы потрясают воображение только потому, что там есть душа, уникальность и необычность, а не желание следовать традиции и повторять за другими. Фотосессия - это летопись вашей жизни и она демонстрирует вашу индивидуальность. А какая может быть индивидуальность, когда большинство людей, вместо осознанного поиска и выбора того, что подходит именно им, передают своего фотографа как эстафетную палочку своим друзьям и родственникам? Я рекомендую думать, смотреть и выбирать непременно сами и тогда результат превзойдет самые смелые ожидания.</p>
       <br />

       <p align="right">Justice</p>
       <p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
       <p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
       <br />
       
       <p>Понравилось? Нажмите!</p>
       <? include("../social.php"); ?>
       <br />
				
       <!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<p><b>Читайте мои статьи о фотографии:</b></p>
		<div id="border">
		  <p><a href="article/inexpensive-photographer.php">Недорогой фотограф</a></p>
		  <p><a href="photographer-wedding-moscow.php" title="Как выбрать фотографа на свадьбу в Москве">Как выбрать фотографа на свадьбу в Москве</a></p>
		  <p><a href="expensive-photographer.php" title="Дорогой фотограф">Статья о дорогих фотографах и причинах их высокой стоимости</a></p>
		  <p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы правильного освещения в студии</a></p>
          <p><a href="how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо выходить на фотографиях?</a></p>
		</div><!-- #border-->
       <!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			
       <br />
	   <p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
	   <br />

            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/unusual-creative-photography.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
            <!--#FACEBOOK каменты-->
            
            <!-- VK каменты-->
            <p style="font-size:1.3em;">Комментарии Вконтакте:</p>
            <script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
            <div id="vk_comments"></div><script type="text/javascript">
            VK.Widgets.Comments("vk_comments", {limit: 10, width: "560", attach: false});</script>
            <!--# VK каменты-->
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