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
	<title>Дорогой фотограф</title>
	<meta name="keywords" content="дорогой фотограф фотосессия фотография" />
	<meta name="description" content="Cколько стоит дорогой фотограф и чем дорогой фотограф отличается от дешового" />
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
       <h1>Дорогой фотограф</h1>
       <br />
       <p><i>В этой статье я расскажу о том сколько стоит <strong>дорогой фотограф</strong>, чем отличается дорогой от недорого и попробуем разобраться из чего же складывается стоимость дорогого фотографа. Мы порассуждаем всегда ли высокая цена эквивалентна высокому качеству и как же выбрать настоящего профессионала.</i></p>
       <br />
       <h2>Сколько стоит дорогой фотограф</h2>
       <p>Давайте сначала для ясности определимся с ценовым диапазоном стоимости фотографов, чтобы понимать, сколько "дорого", а сколько нет. Нужно учитывать, что цена фотосессии в фотостудии и на пленэре (т.е. на открытом пространстве, на природе, в парке и т.д.) различается. Как правило в стоимость фотосессии входит оплата фотостудии, поэтому студийная фотосъёмка всегда дороже. Для ясности будем говорить о ценах на пленэре, без студийной наценки. Итак:</p>
       <ul id="list">
       	<li>от 500 до 1000 рублей в час берут недорогие фотографы,</li>
       	<li>от 1000 до 2000 в час  - фотографы среднего ценового диапазона,</li>
       	<li>от 2000 в час свои услуги предоставляют дорогие фотографы.</li>
       </ul>
       <br />
       <h2>Почему фотограф может стоить дорого</h2>
       <p>Давайте проанализируем, из чего же складывается цена дорогого фотографа, чем оправданы его более высокие гонорары и нужно ли столько платить.</p>
       <ul>
       	<li><b>стоимость фототехники</b>. Не секрет, что <img src="expensive-photographer/canon-5d-mark-ii.jpg" class="picture_right" width="275" height="252" alt="Canon EOS 5D Mark II" /> зеркальные фотоаппараты, которыми фотографируют профессионалы, стоят весьма недёшево.  Например самый распространённый среди зеркальный фотоаппарат Canon EOS 5D Mark II стоит около 85 тысяч рублей, и это только "тушка", без объективна. А появившийся в этом году Mark III стоит около 150 тысяч! А ещё любому фотографу, а не только дорогому,  нужны различные объективы с различными фокусными расстояниями для различных типов съёмки - длиннофокусные, короткофокусные, рыбий глаз ... Также необходимы различные штативы, отражатели, сумки, фильтры, карты памяти и так далее и тому подобное, продолжать можно долго. А ведь весь этот арсенал техники необходимо регулярно обновлять не только в связи с износом, но и для того, чтобы идти в ногу со временем. Естественно, это удовольствие обходиться достаточно дорого.</li>
       	 <br />
       	 <li><b>раскрученность и известность</b>. Когда у фотографа наработана клиентская база, спрос на него растёт и всё больше и больше клиентов хотят его пригласить. Естественно, что разорваться он не может и для того, чтобы уменьшить спрос, ему приходится повышать цену. Т.е. здесь автоматически срабатывает правило: "известность = дороговизна".</li>
       	 <li><b>обучение и повышение уровня</b>. Любой мастер в своей области не останавливается на достигнутом, а стремится покорять новые вершины. Для этого он проходит обучения,  посещает мастер-классы, читает специализированную (как правило довольно дорогую) литературу.</li>
       	 <li><b>участие в конкурсах</b>. Настоящий фотограф (не только дорогой), который снимает не только ради денег, а ещё и для того, чтобы сделать свой вклад в развитие искусства, принимает участие в различных международных и российских конкурсах. Участие в них совсем не бесплатное, обычно приходится заплатить вступительный взнос.
       	 <br />
       	 <img src="expensive-photographer/konkurs.jpg" width="500" height="107" alt="Конкурсы" />
       	 </li>
       	 <br />
       	 <li><b>продвижение сайта</b>. Для того, чтобы у фотографа было достаточное количество клиентов, ему необходимо, чтобы его сайт находился в топе Яндекса и Гугла. Если цель - попасть в топ10 по высокочастотному пользовательскому запросу, например "фотограф на свадьбу в москве", то стоит это удовольствие весьма дорого. Подробнее об этом читайте мою <a href="photographer-wedding-moscow.php" target="_blank">статью о свадебных фотографах Москвы</a>.
       	 <br />
       	 <img src="expensive-photographer/prodvijenie-saita.jpg" width="500" height="434" alt="Стоимость продвижения сайта" />
       	 </li>
       </ul>
       <br />
       <br />
       <h2>Выбирать ли дорогого фотографа?</h2>
       <p>После того, как мы определились, сколько стоит <strong>дорогой фотограф</strong> и из чего складывается эта дороговизна, становится понятно, что условие "дорогой фотограф = качественная фотосессия" выполняется далеко не всегда, и совсем не так часто как хотелось бы. Мы всё ещё можем рассчитывать на срабатывание правила "дорого = качественно" когда покупаем например, бытовую технику, но к сожалению к искусству фотографии это не относится.</p>
       <p>Получается, что фотограф обязан вкладывать в своё дело большие суммы. А это значит, что это себе позволить могут либо обеспеченные люди, либо те профессионалы, на которые есть спрос. Следовательно, если он стоит недёшево и аппаратура у него соответствующая, то мы как минимум может рассчитывать на профессионализм и опыт. Т.е. вас будет снимать не любитель, купивший зеркальную камеру на прошлой неделе, а мастер, за плечами которого уже немало фотосессий.</p>
       
       <p>Итак, резюмируя всё вышеизложенное, сделаем вывод, что <strong>дорогой фотограф</strong>, как правило является экспертом в своём деле, и вряд ли заказав дорогого фотографа вы получите откровенную халтуру, но для того чтобы получить креативные и необычные фотографии, от которых вы будет в восторге, необходимо оценивать не только стоимость, но и другие критерии. Какие именно, можно почитать в моей <a href="photographer-wedding-moscow.php" target="_blank">статье о свадебных фотографах</a>.</p>
       
       <p align="right">Justice</p>
       <p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
       <p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
       <br />
       
       <p>Понравилось? Нажмите!</p>
       <? include("../social.php"); ?>
		<br />
				
       <!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<p><b>Читайте мои статьи:</b></p>
		<div id="border">
		  <p><a href="photographer-wedding-moscow.php" title="Как выбрать фотографа на свадьбу в Москве">Как выбрать фотографа на свадьбу в Москве</a></p>
		  <p><a href="posovetuite-fotografa.php">Как ответить на вопрос: Посоветуйте хорошего фотографа на свадьбу</a></p>
		  <p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы правильного освещения в студии</a></p>
          <p><a href="how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо выходить на фотографиях?</a></p>
          <p><a href="quotes_photographers.php" title="Цитаты фотографов">Цитаты фотографов</a><p></p></p>
		</div><!-- #border-->
       <!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			
       <br />
	   <p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
	   <br />
	   <p style="font-size:0.9em;">Если эта статья вам понравилась, поделитесь ссылкой с друзьями. Нажмите ниже "+1", "Like", "Мне нравится" или оставьте свой комментарий. Спасибо!</p>
	   <br />

            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/expensive-photographer.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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