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
	<title>Цитаты фотографов - Виктория Балашова - креативный фотограф</title>
	<meta name="keywords" content="цитаты фотографов,диана арбус,юсуф карш,йосеф судек,синди шерман,джордж харрел,ансель адамс,альфред стиглиц,бил брандт,анри картье-брессон,ричард аведон,джордж бернард шоу,эдвард уэстон,сесиль битон,марсель дюшам,энни лейбовиц,минор уайт,фотография,фотограф" />
	<meta name="description" content="Цитаты фотографов об искусстве фотографии." />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="../css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!-- скрипт и стили для Shadowbox.js -->
<link rel="stylesheet" type="text/css" href="../shadowbox/shadowbox.css">
<script type="text/javascript" src="../shadowbox/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
<!-- #скрипт и стили для Shadowbox.js -->

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
		    <h1>Цитаты фотографов</h1>
			<br /><br /><br />
			<p>Цитаты фотографов, прочитав которые вы сможете понять, что великие фотографы чувствовали, как относились к искусству фотографии, какие они ставили перед собой цели и задачи. Вдумываясь в смысл цитат фотографов можно понять ход их мыслей.</p>
			<br /><br /><br />
			<p>Я по-настоящему верю, что есть вещи, которые никто не может увидеть пока я их не сфотографирую.</p><p align="right"><i>Диана Арбус</i></p>
			<br /><br />
   	        <p>Наблюдай и думай до того как нажать кнопку затвора. Сердце и разум - вот настоящие объективы фотокамеры.</p><p align="right"><i>Юсуф Карш</i></p>
   	        <br /><br />
   	        <p>Всё вокруг нас, живое или мертвое, в глазах безумного фотографа загадочно трансформируется в различные вариации, чтобы неодушевленный на вид объект ожил благодаря свету или его окружению.</p><p align="right"><i>Йосеф Судек</i></p>
   	        <br /><br />
   	        <p>Я не хотела заниматься «высоким искусством», у меня не было интереса к живописи, я хотела сфотографировать то, что любой мог понять, не зная ничего о современном искусстве. Я не хотела,чтобы работа походила на товар.</p><p align="right"><i>Синди Шерман</i></p>
   	        <br /><br />
   	        <p>Это так просто – никто не верит мне …вы принимаете позу, ставите освещение. Затем Вы паясничаете и экспрессивно изображаете некое действие. Потом  фотографируете.</p><p align="right"><i>Джордж Харрелл</i></p>
   	        <br /><br />
   	        <p>То, что фотограф способен увидеть, а об увиденном — сказать, имеет несравненно большее значение, чем качество технического оборудования.</p><p align="right"><i>Ансель Адамс</i></p>
   	        <br /><br />
   	        <p>Фотографировать можно везде, где есть свет.</p><p align="right"><i>Альфред Стиглиц</i></p>
   	        <br /><br />
   	        <p>Фотография — это не спорт. У нее нет правил. Все должно быть испробовано.</p><p align="right"><i>Бил Брандт</i></p>
   	        <br /><br />
   	        <p>Разница между хорошим произведением и посредственностью — вопрос миллиметров.</p><p align="right"><i>Анри Картье-Брессон</i></p>
   	        <br /><br />
   	        <p>Мои портреты больше обо мне, чем о тех, кого я фотографирую.</p><p align="right"><i>Ричард Аведон</i></p>
   	        <br /><br />
   	        <p>Картина, которую хвалят больше, чем десять процентов публики, подлежит сожжению.</p><p align="right"><i>Джордж Бернард Шоу</i></p>
   	        <br /><br />
   	        <p>Фотографировать может только тот, кто сумеет выстроить на одной оси глаз, голову и сердце.</p><p align="right"><i>Анри-Картье Брессон</i></p>
   	        <br /><br />
   	        <p>Вспоминать правила композиции перед съемкой все равно, что мыслить о законе гравитации, выходя на прогулку.</p><p align="right"><i>Эдвард Уэстон</i></p>
   	        <br /><br />
   	        <p>Мы ограниченны не нашими возможностями, а нашим видением предмета.</p><p align="right"><i>Сесиль Битон</i></p>
   	        <br /><br />
   	        <p>Если изображение не шокирует, оно ничто.</p><p align="right"><i>Марсель Дюшам</i></p>
   	        <br /><br />
   	        <p>Когда я говорю, что хочу сфотографировать кого-то, это значит, что я хочу узнать его. Всех, кого я знаю, я фотографирую.</p><p align="right"><i>Энни Лейбовиц</i></p>
   	        <br /><br />
   	        <p>Для практики я мысленно все фотографирую.</p><p align="right"><i>Минор Уайт</i></p>
			<br />
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова</p>
			<p align="right"><a href="http://www.victoriabalashova.com">www.victoriabalashova.com</a></p>
			<br />

			<p style="font-size:0.9em;">Если эта статья вам понравилась, поделитесь ссылкой с друзьями. Нажмите ниже "+1", "Like", "Мне нравится" или оставьте свой комментарий. Спасибо!</p>
			<? include("../social.php"); ?>

			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<p>Рекомендую почитать мои статьи:</p>
			<div id="border">
			<p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы освещения в фотостудии</a></p>
			<p><a href="how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо получаться на фотографиях?</a></p>
			<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
			<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
			<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнейший портретист ХХ века.</p>
			<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - культовый фотограф киностудии MGM.</p>
			<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
			</div>
			<!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<br />
			
			<p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
			<br />
			 
			<br />
            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/quotes_of_great_photographers.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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