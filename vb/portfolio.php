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
	<title>Портфолио - креативный фотограф Виктория Балашова. Свадебная фотосессия. Love story. Фотосессии в студии и на пленере, пленэре</title>
	<meta name="author" content="Виктория Балашова"/>
	<meta name="copyright" content="Виктория Балашова"/>
	<meta name="keywords" content="портфолио,креативный фотограф,студийная фотосессия,свадебная фотосессия,фотосессия беременных,пленэр,пленер,плэнэр,история любви,love story,портфолио для моделей" />
	<meta name="description" content="Портфолио фотографа. Фотосессии в студии и на пленэре. Свадебные фотосессии. Фотосеты в различных образах" />
	<link rel="stylesheet" href="css/style-portfolio.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="css/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->

<!-- скрипты и css галереи -->
<script src="gallery/scripts/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
<script src="gallery/scripts/mootools-1.2-more.js" type="text/javascript"></script>
<script src="gallery/scripts/jd.gallery.js" type="text/javascript"></script>
<link rel="stylesheet" href="gallery/css/jd.gallery.css" type="text/css" media="screen" />
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
	 	
		<h1>Портфолио креативного фотографа Виктории Балашовой</h1>
		<br />
		<p>Все фотосессии разбиты на категории: "<strong>свадебные</strong>", фотосессии "<strong>в студии</strong>", "<strong>на пленэре</strong>" и романтические "<strong>love story</strong>".</p>
        <img src="images/border.gif" id="border-1" />	<img src="images/border.gif" id="border-2" />
        <img src="images/border.gif" id="border-3" />	<img src="images/border.gif" id="border-4" />
		
<table cols="1" border="0" height="550px">   <!-- --- Т А Б Л И Ц А  Г А Л Е Р Е И --------------   -->
 <tr>
  <td>
	<div id="myGallery1"><!-- ------------- С В А Д Ь Б А ---------------------------------   -->
		<div class="imageElement">
			<h3>Свадебная фотосессия Влада и Анны</h3>
			<p>Избранные фотографии. Парк Царицыно, Москва</p>
			<a href="portfolio/portfolio-wedding-90.php" title="Посмотреть свадебные фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-wedding-1.jpg" class="full" alt="Свадебная фотосессия" />
		</div>
		<div class="imageElement">
			<h3>Зимняя свадебная фотосессия Радослава и Оксаны</h3>
			<p>Избранные фотографии. Дворец Бракосочетания № 4, Храм Христа Спасителя, мост Багратион, ресторан</p>
			<a href="portfolio/portfolio-wedding-80.php" title="Посмотреть свадебные фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-wedding-2.jpg" class="full" alt="Свадебная фотосессия" />
		</div>
		<div class="imageElement">
			<h3>Свадебная фотосессия Руслана и Луизы</h3>
			<p>Избранные фотографии</p>
			<a href="portfolio/portfolio-wedding-70.php" title="Посмотреть свадебные фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-wedding-3.jpg" class="full" alt="Свадебная фотосессия" />
		</div>
	</div>
	<!--скрипт gallery simple slideshow with links-->
	<script type="text/javascript">function startGallery() {var myGallery = new gallery($('myGallery1'), {
	timed: true, showArrows:false, showCarousel:false, embedLinks:true});}window.addEvent('domready', startGallery);
	</script>

	
	<div id="myGallery2"><!-- ------------- С Т У Д И Я ---------------------------------   -->
		<div class="imageElement">
			<h3>Фотосессия в студии - фотосет "Inspiration"</h3><!-- Юля -->
			<p>Вдохновение - это яркость и смех, строгость и веселье</p>
			<a href="portfolio/portfolio-studio-50.php" title="Посмотреть фотосессии в студии" class="open"></a>
			<img src="portfolio/portfolio/photo-studio-1.jpg" class="full" alt="Фотосессия в студии" />
		</div>
		<div class="imageElement"> <!--Вика-->
			<h3>Фотосессия в студии - фотосет "Dolce Vita"</h3>
			<p>В образе Аниты Экберг из фильма Федерико Феллини "Сладкая жизнь"</p>
			<a href="portfolio/portfolio-studio-60.php" title="Посмотреть фотосессии в студии" class="open"></a>
			<img src="portfolio/portfolio/photo-studio-2.jpg" class="full" alt="Фотосессия в студии" />
		</div>
		<div class="imageElement">
			<h3>Фотосессии в студии - "Romance"</h3> <!--Марианна-->
			<p>Различные стили: от романтичного до античного</p>
			<a href="portfolio/portfolio-studio-65.php" title="Посмотреть фотосессии в студии" class="open"></a>
			<img src="portfolio/portfolio/photo-studio-3.jpg" class="full" alt="Фотосессия в студии" />
		</div>
	</div>
	<script type="text/javascript">function startGallery() {var myGallery = new gallery($('myGallery2'), {
	timed:true, showArrows:false, showCarousel:false, embedLinks:true});}window.addEvent('domready', startGallery);
	</script>	

		<div id="myGallery3"><!-- -------------П Л Е Н Э Р ---------------------------------   -->
		<div class="imageElement">
			<h3>Фотосессия на пленере - "Кусково"</h3><!--Наташа в Кусково-->
			<p>Парк Кусково, Москва</p>
			<a href="portfolio/portfolio-plener-60.php" title="Посмотреть фотосессии на пленэре" class="open"></a>
			<img src="portfolio/portfolio/photo-plener-1.jpg" class="full" alt="Фотосессия на пленэре" />
		</div>
		<div class="imageElement"><!--Сат-Чит-Ананда-->
			<h3>Фотосессия на пленере - "Сат-Чит-Ананда"</h3>
			<p>Не здесь, где-то далеко, на другой планете...</p>
			<a href="portfolio/portfolio-plener-49.php" title="Посмотреть фотосессии на пленэре" class="open"></a>
			<img src="portfolio/portfolio/photo-plener-2.jpg" class="full" alt="Фотосессия на пленэре" />
		</div>
		<div class="imageElement"><!--Аня Осень-->
			<h3>Фотосессия на пленере - "Осень"</h3>
			<p>Парк Коломенское, Москва</p>
			<a href="portfolio/portfolio-plener-70.php" title="Посмотреть фотосессии на пленэре" class="open"></a>
			<img src="portfolio/portfolio/photo-plener-4.jpg" class="full" alt="Фотосессия на пленэре" />
		</div>
		<div class="imageElement"><!--Кислород-->
			<h3>Фотосессия на пленере - "Кислород"</h3>
			<p>Подмосковье</p>
			<a href="portfolio/portfolio-plener-90.php" title="Посмотреть фотосессии на пленэре" class="open"></a>
			<img src="portfolio/portfolio/photo-plener-3.jpg" class="full" alt="Фотосессия на пленэре" />
		</div>
	</div>
	<!--скрипт gallery simple slideshow with links-->
	<script type="text/javascript">function startGallery() {var myGallery = new gallery($('myGallery3'), {
	timed: true, showArrows:false, showCarousel:false, embedLinks:true});}window.addEvent('domready', startGallery);
	</script>

		<div id="myGallery4"> <!-- ------------- L O V E  S T O R Y ----------------------------   -->
		<div class="imageElement">
			<h3>Love story</h3><!--Радек и Оксана в постели и с шахматами-->
			<p>История любви Радослава и Оксаны. Фотосессии в аристократическом и романтично-постельном стилях.</p>
			<a href="portfolio/portfolio-love-story-50.php" title="Посмотреть Love Story фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-love-story-1.jpg" class="full" alt="Фотосессия love Story" />
		</div>
		<div class="imageElement"><!-- Нон-Стоп Зибровы ?????-->
			<h3>Love story</h3>
			<p>Фотографии в романтическом стиле</p>
			<a href="portfolio/portfolio-studio-55.php" title="Посмотреть Love Story фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-love-story-2.jpg" class="full" alt="Фотосессия love Story" />
		</div>
		<div class="imageElement"><!-- Нон-Стоп Петуховы ?????-->
			<h3>Love story</h3>
			<p>Фотографии в романтическом стиле</p>
			<a href="portfolio/portfolio-studio-55.php" title="Посмотреть Love Story фотосессии" class="open"></a>
			<img src="portfolio/portfolio/photo-love-story-3.jpg" class="full" alt="Фотосессия love Story" />
		</div>
	</div>
	<!--скрипт gallery simple slideshow with links-->
	<script type="text/javascript">function startGallery() {var myGallery = new gallery($('myGallery4'), {
	timed: true, showArrows:false, showCarousel:false, embedLinks:true});}window.addEvent('domready', startGallery);
	</script>
  </td>
 </tr>
</table>	<!-- --- #Т А Б Л И Ц А  Г А Л Е Р Е И --------------   -->

	  <div id="border">     <!-- С С Ы Л К И  Н А  Н О В Ы Е  Ф О Т О С Е С С И И -->
	  	<p><b>Новые фотосессии:</b> &nbsp;&nbsp;&nbsp; Фотосессия <a href="portfolio/portfolio-plener-49.php" title="Фотосессия Сат-Чит-Ананда">Сат-Чит-Ананда</a> &nbsp;&nbsp;&nbsp; Свадебная фотосессия <a href="portfolio/portfolio-wedding-69.php" title="Свадебная фотосессия ">Владислава и Валентины</a> &nbsp;&nbsp;&nbsp; Фотосессия <a href="portfolio/portfolio-studio-48.php" title="Фотосессия Psychodelic">Psychodelic</a>  
	  	</p>
	  </div><!--#border--> <!-- # С С Ы Л К И  Н А  Н О В Ы Е  Ф О Т О С Е С С И И -->
	  <br />
	  <p style="font-size:0.9em;" align="center">Поделитесь с друзьями!</p>
	  <? include("portfolio/social-portfolio.php"); ?>
	  <br />

	  <p>Здесь размещено портфолио креативного фотографа Виктории Балашовой. Только изучая портфолио фотографов можно судить о профессионализме и таланте и понять, что это именно тот фотограф, который вам нужен. Я рекомендую посмотреть каждый раздел - свадебные фотосессии, фотосессии на пленере, лав стори (love story) и фотосеты в студии.</p>
	  <h2>Свадебная фотосессия</h2>
	  <p>Молодожены готовятся к свадьбе несколько месяцев. Столько волнений и переживаний! Жениху и невесте хочется, чтобы свадьба прошла идеально. А когда наступает долгожданный день, он пролетает так быстро и неумолимо, что не успеваешь сконцентрироваться и получить удовольствие от каждого мгновения: выкупа, росписи, венчания, прогулки, банкета. Вернуть эти мгновения, пережить и прочувствовать их заново поможет профессиональный свадебный фотограф.</p>
	  <p>Я творчески подхожу к каждому кадру. Из всех видов освещения выбираю наиболее подходящий. Использование широких возможностей современной фототехники, позволяет сохранить знаменательные моменты вашей жизни навсегда. Компьютерная обработка (ретушь) изображений с использованием Photoshop позволяет мне достигать высоких результатов. Лично для меня каждая свадьба является уникальным событием, поэтому вы можете быть абсолютно  уверены, что ваши фотографии не будут  похожи на другие. Ведь это только ваш  день, и он просто обязан быть неповторимым.</p>
	  <h2>Студийная фотосессия</h2>
	  <p>Фотосъемку в студии можно подразделить на несколько востребованных на сегодняшний день видов:</p>
	  <div id="list">
	  <ul>
	  	<li>портфолио модели</li>
	  	<li>фотосессия пар</li>
	  	<li>фотосессия беременных</li>
	  	<li>семейная фотосъемка</li>
	  	<li>женская или мужская фотосессия</li>
	  </ul>
	  </div>
	  <p>В современном обществе мы чаще всего довольствуемся любительскими снимками в своем фотоальбоме, на которых редко кто может похвастаться, что сам себе нравится. Профессиональное портфолио подразумевает создание индивидуального образа, который представит Вас в любой ситуации в самом выгодном свете. Фотосъемка проводится в самых лучших фотостудиях Москвы с интерьером.</p>
	  <h2>Фотосессия Love Story</h2>
	  <p>Принято считать, что у съемки love story обязательно должен быть какой-то особенный сюжет.  Да, здорово, если он есть, но это совсем не главное. Когда два человека любят друг друга, их нежность, прикосновения, улыбки уже сами по себе становятся сюжетом. Хороший фотограф обязательно увидит эти чувства и сохранит их в снимках. Сохраните историю своей любви в домашней фотоколлекции! Фотосессия love story - это возможность запечатлеть яркие моменты отношений и красивую историю любви.</p>
	  <p>Проживите вашу любовь с самого начала перед объективом профессионального фотографа: все Ваши воспоминания и рассказы станут основой для сюжета фотосессии! Я рекомендую комбинировать два вида фотосъемки свадебную и студийную для молодоженов, так <a href="video.php" title="Посмотреть Love Story фотосессии" class="open"></a>свадебная фотокнига получается намного интереснее. Фотосъемку Love Story Вы можете заказать как на плэнере так и в студии.</p>
	  <h2>Фотосессия на пленере</h2>
	  <p>Пленер (от фр. en plein air - «на открытом воздухе», или иногда говорят пленэр) - живописная техника изображения объектов при естественном свете и в естественных условиях. Фотосъемка на пленере  считается самой распространенной.  Доступный и разнообразный свет, разнообразие мест для съемки позволяют создавать совершенно разноплановые фотографии  Привычная всем обстановка, солнце, легкий ветер, а может быть даже и летний теплый дождь, создают романтическое настроение и позволяют получить яркие, необыкновенно эмоциональные фотографии, максимально точно передающие чувства человека и его настроение. По моему мнению самые лучшие фотосессии получаются летом и ранней осенью.</p>
	  <h2>Фотосессия беременных</h2>
	  <p>При фотосъёмке беременных я проявляю максимум терпения и деликатности. Беременная женщина находится в особенном эмоциональном состоянии, она излучает ту энергетику, которую хоть и не в состоянии поймать фотокамера, но которая передается зрителю посредством невидимых флюидов радости и счастья. В каждом ее взгляде сквозит любовь, а в глазах - играют лучики света. Как приятно фотографировать одну маму или влюбленную пару, которая заботливо обнимает округлившийся животик. А будущему малышу через несколько лет будет интересно посмотреть на фотографии, сделанные до его рождения. Смотрите в моём портфолио <a href="portfolio/portfolio-studio-80.php" target="_blank">фотосессию беременной</a>.</p>
	  <h2>Художественное портфолио для модели</h2>
	  <p><strong>Портфолио</strong> - это фотосъемка модели в различных образах, с проявлением максимума эмоций и одновременной демонстрацией всех достоинств модели. Фото Портфолио - это Ваша своеобразная визитная карточка, потому очень важно, чтобы фотосъемка портфолио проводилась профессионалами. Удачное портфолио передает не только красоту модели, но и ее актерские качества, умение входить в образ, быть разной. Именно это и должно привлекать в модели потенциальных работодателей. Пожалуй ни с кем не работается так легко как с профессиональной моделью, еще и потому что они любят экспериментировать со своей внешностью и не бояться предстать на фото в необычном образе, поэтому работа с моделями мне особенно интересна. Приходите ко мне, вместе мы создадим шедевральные снимки.</p>

	 </div><!-- .sidebar#sideRight -->     <!-- #ПРАВЫЙ САЙДБАР - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 998px -- -->
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
<script type="text/javascript"> window.___gcfg = {lang: 'ru'}; (function() { var po = document.createElement('script');
po.type = 'text/javascript'; po.async = true; po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s); })();</script>
<!-- #скрипт для кнопки +1 -->
</body>
</html>