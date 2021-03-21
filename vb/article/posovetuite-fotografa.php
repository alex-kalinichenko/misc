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
	<title>Посоветуйте фотографа на свадьбу</title>
	<meta name="keywords" content="посоветуйте фотографа,посоветуйте фотографа на свадьбу,посоветуйте свадебного фотографа,посоветуйте хорошего фотографа" />
	<meta name="description" content="Выбираем хорошего фотографа на свадьбу и в студию." />
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
       <h1>Посоветуйте хорошего фотографа</h1>
       <h4>такой вопрос часто можно встретить на просторах интернета</h4>
       <br />
       <p>Когда мы сталкиваемся с тем, что нам приходится что-то выбирать, мы задумываемся: "как выбрать правильно?" Это касается любых товаров и услуг, в том числе и услуг фотографа. Конечно же самый популярный способ решения этой задачи - посоветоваться с Яндексом или Гуглом. Обычно там набирают фразу: "<strong>посоветуйте фотографа</strong>" или "<strong>посоветуйте хорошего фотографа</strong>". Планирующие свадьбу набирают "<strong>посоветуйте фотографа на свадьбу</strong>" или "<strong>посоветуйте свадебного фотографа</strong>". Возможно и вы пришли сюда по одному из этих запросов.</p>
       <br />
       <h2>Важность фотографа</h2>
       <br />
       <p>Посоветовать фотографа очень легко, но ведь у каждого есть свои собственные критерии оценки фотографа. Кому то важно, чтобы фотограф говорил, что делать, как позировать и куда смотреть. А кому-то нужно чтобы фотограф был не заметен и просто делал своё дело.
Но в любом случае, каждый хочет, чтобы его снимал настоящий профессионал своего дела. Поэтому, фотографа на свадьбу нужно выбирать очень тщательно. Предполагается что услугами фотографа мы пользуемся весьма не часто (конечно если вы не модель). Обычно фотографа заказывают на свадьбу или если хотят сфотографироваться в различных образах и получить красивые фотографии. Многие хотят снять фотосессию в стиле love story (история любви) вместе со своей второй половинкой.</p>
       <img src="posovetuite-fotografa/vajnost-fotografa.jpg" width="500" height="506" alt="Важность фотографа" />
       <p>Фотограф на свадьбе - одна из самых значимых фигур (после жениха и невесты разумеется) потому что, именно от него полностью зависит какая фотографии у нас останутся как память о столь торжественном мероприятии. Его взгляд, его ракурсы, те кадры, которые он сделал, будут долгие годы передавать эмоции и впечатления не только вам, но и всем друзьям и родственникам.
Важность фотографа, снимающего не свадьбу, а фотосессию не менее важна. То, как он вас видит является определяющим тому, как он вас сфотографирует, и, соответственно как передаст ваш образ на фотографии.</p>
       <br />
       <h2>Чьи советы слушать</h2>
       <br />
       <p>Если мы начнём опрашивать всех, кто встречается нам в жизни, то у каждого будет своё авторитетное мнение. Давайте разберёмся, чьи советы надо слушать, а чьи нет.</p>
       <ul>
       	<li><b>родственники и друзья</b>. Очень часто люди, планирующие заказать услуги хорошего фотографа спрашивают совета у близких людей и это естественно. Плохо только то, что, как правило, они совсем не компетентны в этих вопросах и могут посоветовать только того фотографа, с кем они знакомы, или того, кто снимал их знакомых. Вывод: прислушиваться к их мнению надо очень осторожно.</li>
       	<img src="posovetuite-fotografa/kogo-slushat.jpg" width="500" height="347" alt="Чьи советы слушать при выборе фотографа" />
       	<li><b>реклама</b>. Если вы зайдёте на любой ресурс, посвящённый фотографии, на вас обрушится нескончаемый поток рекламных объявлений. После того, как вы по ним кликните и перейдёте на рекламируемый сайт, вы обнаружите, что среди всей массы предложений есть как стоящие фотографы, так и откровенные халтурщики. Это неслучайно - везде есть как хорошее, так и плохое, надо просто отделять зёрна от плевел. Но важно помнить, что объявление стоит денег и её надо отбивать, поэтому имейте ввиду - все рекламные предложения имеют завышенную стоимость именно потому, что в них заложена стоимость самой рекламы.</li>
       	<li><b>контекстная реклама</b>. То же самое, что и в предыдущем абзаце. Разница только в том, что она появляется сверху и сбоку страницы, когда вы вводите свой запрос "посоветуйте фотографа на свадьбу" или "посоветуйте свадебного фотографа". Можно выбрать и такого фотограф , важно лишь помнить о добавочной стоимости.</li>
       	<li><b>Яndex и Google</b>. Об этом я уже подробно рассказывал <a href="photographer-wedding-moscow.php" target="_blank">здесь</a>. Повторятся не буду, скажу только, что фотографы с первых страниц, как правило, самые дорогие (если только их сайты продвигали не бесплатными методами. Такое очень редко, но возможно. Например этот сайт продвигается именно бесплатными способами).</li>
       	<li><b>самостоятельный поиск</b>. Наверное самый правильный, дающий самые хорошие результаты, но и самый трудоёмкий. Вы делаете то же самое, что описывалось в предыдущих абзацах: вводите "посоветуйте фотографа" или "посоветуйте хорошего фотографа" и просматриваете 10, 20, 30 или больше страниц выдачи - насколько у вас хватит сил и терпения. Чем дальше вы будете переходить, тем больше шансы найти качественного специалиста за разумные деньги.</li>
       </ul>
       <p>Хочу заметить, что затраты времени по последнему методу, потраченные на отыскивание фотографа вашей мечты, окупятся сторицей - качество будет вас устраивать, так как это ваш собственный выбор, и цена будет тоже намного ниже, потому что этого фотографа вы нашли не по рекламному объявлению и не из топа Яндекса.</p>
       <p>Желаю удачи в этом нелёгком деле - поиске хорошего фотографа!</p>

       <p align="right">Justice</p>
       <p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
       <p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
       <br />
       
       <p>Понравилось? Нажмите!</p>
       <? include("../social.php"); ?>
		<br />
				
       <!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<p><b>Читайте другие мои статьи:</b></p>
		<div id="border">
		  <p><a href="photographer-wedding-moscow.php" title="Как выбрать фотографа на свадьбу в Москве">Как выбрать фотографа на свадьбу в Москве</a></p>
		  <p><a href="expensive-photographer.php" title="Дорогой фотограф">Статья о дорогих фотографах и причинах их высокой стоимости</a></p>
		  <p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы правильного освещения в студии</a></p>
          <p><a href="how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо выходить на фотографиях?</a></p>
          <p><a href="quotes_photographers.php" title="Цитаты фотографов">Цитаты фотографов</a></p>
		</div><!-- #border-->
       <!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			
       <br />
	   <p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
	   <br />

            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/posovetuite-fotografa.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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