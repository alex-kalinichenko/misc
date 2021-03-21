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
	<title>Кларенс Синклер Булл - Виктория Балашова - креативный фотограф</title>
	<meta name="keywords" content="Кларенс Синклер Булл,фотография,фотограф" />
	<meta name="description" content="Кларенс Синклер Булл - эксклюзивный фотограф Греты Гарбо" />
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
	 	<h1>Кларенс Синклер Булл</h1>
	 	<br />
	 	<br />
	 	<a rel="shadowbox" href="clarence-bull/clarence-bull.jpg"><img alt="Кларенс Синклер Булл" title="Кларенс Синклер Булл" class="picture_article" src="clarence-bull/clarence-bull-thumb.jpg" width="142" height="150"></a>
	 	<p><strong>Кларенс Синклер Булл</strong> родился в Мичигане, но большинство своей жизни провел в Голливуде, где скончался в 1979 году. Он был нанят продюсером Сэмюэлем Голдвином в 1920 году в качестве фотографа в кинокомпанию Голдвин Пикчерс Корпорейшн. Четыре года спустя, когда произошло соединение Голдвин Пикчерс Корпорейшн, Метро Пикчерс Корпорейшн и Луис Б. Майер Пикчерс, Кларенс Булл был назначен главой отдела фотографии на MGM. Он оставался на этом посту до 1960 года, за  64 года работы в компании он сфотографировал самых выдающихся актеров и актрис Голливуда, но как ни странно, в историю он вошел как эксклюзивный фотограф всего только одной звезды, легендарной Греты Гарбо.</p>
	 	<p>Он делал рекламные снимки всех ее картин за исключением  фильма Romance, тогда на MGM пригласили талантливого портретиста <a href="george_hurrell.php" target="_blank" title="Джордж Харрелл">Джорджа Харрелла</a>, который снял единственную фотосессию с Гарбо в своей карьере, после которой она осталась недовольна. С Кларенсом Буллом она чувствовала себя спокойнее и раскрепощеннее, он был одним из первых, кто поддержал ее на киностудии, не зная английского, 21-летняя Гарбо приехала из Стокгольма сниматься в своем первом американском фильме The Torrent в 1926 году.</p>
	 	<a rel="shadowbox" href="clarence-bull/mata-hari-3.jpg"><img alt="Кларенс Синклер Булл/Мата Хари" title="Кларенс Синклер Булл/Мата Хари" class="picture_left" src="clarence-bull/mata-hari-3-thumb.jpg" width="178" height="231"></a>
	 	<a rel="shadowbox" href="clarence-bull/mata-hari-2.jpg"><img alt="Кларенс Синклер Булл/Мата Хари" title="Кларенс Синклер Булл/Мата Хари" class="picture_left" src="clarence-bull/mata-hari-2-thumb.jpg" width="183" height="231"></a>
	 	<a rel="shadowbox" href="clarence-bull/mata-hari.jpg"><img alt="Кларенс Синклер Булл/Мата Хари" title="Кларенс Синклер Булл/Мата Хари" class="picture_left" src="clarence-bull/mata-hari-thumb.jpg" width="182" height="231"></a>
	 	<p>Гарбо, абсолютный консерватор, не желающая принимать в свой круг новых людей, с удовольствием поменяла Рут Харриет Луиз (1925-1930 г. работала на MGM ведущим фотографом) на Кларэнса Синклера Булла. Большинство кинозвезд считали фотосъемки самой скучной частью своей работы и Грета не была исключением, в день их первой встречи она выглядела как «испуганная школьница». «То чего она не знала, это то, что я тоже боялся ее, в течении трех часов я фотографировал каждую ее позу и жест, ловил  любое изменение в ее лице. В конце съемки, которая проходила без перерыва она сказала: «В следующий раз я сделаю это лучше мистер Булл. Я был настолько взволнован, что похлопав ее по руке, сказал: «И я тоже».</p>
	 	<p>В 1929 году Гарбо была самой большой звездой MGM. Это было время Великой депрессии, большинство студий перешли в звуковую эру, но продюсеры боялись провала и задержали премьеру первого звукового фильма с Гарбо на год. Это была экранизация пьесы «Анна Кристи», Юджина О’Нила.</p>
	 	<a rel="shadowbox" href="clarence-bull/anna_christie-2.jpg"><img alt="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" title="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" class="picture_left" src="clarence-bull/anna_christie-2-thumb.jpg" width="165" height="252"></a>
	 	<a rel="shadowbox" href="clarence-bull/anna_christie.jpg"><img alt="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" title="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" class="picture_left" src="clarence-bull/anna_christie-thumb.jpg" width="186" height="252"></a>
	 	<a rel="shadowbox" href="clarence-bull/anna_christie-1.jpg"><img alt="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" title="Кларенс Синклер Булл/Анна Кристи - Юджин О’Нил" class="picture_left" src="clarence-bull/anna_christie-1-thumb.jpg" width="193" height="252"></a>
	 	<p>Одно из введенных новшеств Булла это разработанная и запатентованная процедура нумерации негативов. Он требовал от своих подчиненных вносить имя фотографа, дату проведения съемки и отдел, для которого этот снимок был сделан на стороне каждого негатива. До 1929 года студийные фотографы не делали подобных меток поэтому со временем стало сложно доказать принадлежность того или иного снимка.</p>
	 	<p>Портреты Гарбо, сделанные для фильма «The Kiss»  отличаются мягким освещением, черным фоном и абсолютным вниманием к лицу. Ее утонченное лицо,  кокетливый взгляд из под длинных ресниц, полуулыбка показаны в наиболее выгодном свете. По сравнению с Рут Харриет, которая снимала Гарбо более целеустремленной и волевой, у Булла трансформируется в нечто гипнотическое и таинственное, образуя образ истинной кинодивы. Как-то раз во время съемки он осмелился спросить ее, настоящие ли у нее ресницы, Гарбо улыбнулась: «Проверьте и узнаете мистер Булл…»</p>
	 	<a rel="shadowbox" href="clarence-bull/the-kiss.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" title="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" class="picture_left" src="clarence-bull/the-kiss-thumb.jpg" width="183" height="225"></a>
	 	<a rel="shadowbox" href="clarence-bull/the-kiss-1.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" title="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" class="picture_left" src="clarence-bull/the-kiss-1-thumb.jpg" width="181" height="225"></a>
	 	<a rel="shadowbox" href="clarence-bull/the-kiss-2.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" title="Кларенс Синклер Булл/Грета Гарбо - Поцелуй" class="picture_left" src="clarence-bull/the-kiss-2-thumb.jpg" width="179" height="225"></a>
	 	<p>Самый известный эксперимент Булла был проделан с одной из фотографий Гарбо к кинофильму «Inspiration», он наложил ее на изображение статуи сфинкса, этот коллаж стал самой известной фотографией Греты, так как он наиболее точно характеризовал ее сущность. Интроверт по натуре, Грета Гарбо не любила публичность, с неохотой давала интервью и скептически относилась к новым знакомствам. С возрастом она все сильнее отдалялась от общества, тем самым подогревая интерес к своей загадочной персоне. Многие считали, что это был маркетинговый ход, однако это не так, Гарбо действительно не притворялась, она хотела быть просто актрисой и ей было очень тяжело следовать всем пунктам своего контракта, а именно, общаться с журналистами, ходить на премьеры и сниматься для рекламы. Рабочий день Гарбо длился 8 часов и никто не мог заставить ее задержаться на площадке хоть на минуту, но эти часы она отрабатывала мастерски, Кларенс Булл вспоминал: «Она свободно ходила по студии, когда мне нравилась та или иная поза она замечала это и останавливалась, мне оставалось только установить свет и фотографировать».</p>
	 	<a rel="shadowbox" href="clarence-bull/inspiration-2.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Inspiration" title="Кларенс Синклер Булл/Грета Гарбо - Inspiration" class="picture_left" src="clarence-bull/inspiration-2-thumb.jpg" width="151" height="168"></a>
	 	<a rel="shadowbox" href="clarence-bull/inspiration.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Inspiration" title="Кларенс Синклер Булл/Грета Гарбо - Inspiration" class="picture_left" src="clarence-bull/inspiration-thumb.jpg" width="127" height="168"></a>
	 	<a rel="shadowbox" href="clarence-bull/as-you-desire-me.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Какой ты меня желаешь" title="Кларенс Синклер Булл/Грета Гарбо - Какой ты меня желаешь" class="picture_left" src="clarence-bull/as-you-desire-me-thumb.jpg" width="134" height="168"></a>
	 	<a rel="shadowbox" href="clarence-bull/garbo-sphinx.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Сфинкс" title="Кларенс Синклер Булл/Грета Гарбо - Сфинкс" class="picture_left" src="clarence-bull/garbo-sphinx-thumb.jpg" width="128" height="168"></a>
	 	<p>Гарбо была его «любимой моделью... самой легкой в работе среди прочих, никаких  видимых недостатков, плохих ракурсов. Ее связь с камерой была сверхъестественной, она любила ее. Гарбо была единственной актрисой, всегда желающей новизны в работе, новые эффекты освещения и выражения внутренних чувств и конфликтов». По сути благодаря ей Булл подолгу сидел в студии и отрабатывал различные приемы освещения, стремясь повторить эффекты освещения картин Жоржа де ла Тура и Караваджо. Как то раз к нему в студию пришла Марлен Дитри, и посмотрев работы сказала: «Вы даже лучше, чем мне о вас рассказывали, я улыбнулся и ответил: «Но вы не Гарбо».</p>
	 	<p>13 апреля 1932 года состоялась фотосессия для картины «Гранд Отель», Булл создал коллаж, где объединил всех главных персонажей и в центре поместил Гарбо. В начале 30-х годов Гарбо уже снималась всего в двух фильмах за год, поэтому посещала студию нечасто, однако из-за участия в костюмных исторических лентах, съемочный гардероб увеличивался. Как правило, к концу съемочного дня, она весело скандировала: «Ну вот и всё! Спасибо мистер Булл, надеюсь, некоторое фотографии Вам понравятся». Через 10 лет работы на MGM, студия решила перевести Кларенса на более высокую позицию и отстранить от фотосъемок, но Гарбо настояла на его единственном праве фотографировать ее.</p>
	 	<a rel="shadowbox" href="clarence-bull/grand-hotel-1.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Гранд отель" title="Кларенс Синклер Булл/Грета Гарбо - Гранд отель" class="picture_left" src="clarence-bull/grand-hotel-1-thumb.jpg" width="186" height="223"></a>
	 	<a rel="shadowbox" href="clarence-bull/grand-hotel.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Гранд отель коллаж" title="Кларенс Синклер Булл/Грета Гарбо - Гранд отель коллаж" class="picture_left" src="clarence-bull/grand-hotel-thumb.jpg" width="178" height="223"></a>
	 	<a rel="shadowbox" href="clarence-bull/grand-hotel-2.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Гранд отель" title="Кларенс Синклер Булл/Грета Гарбо - Гранд отель" class="picture_left" src="clarence-bull/grand-hotel-2-thumb.jpg" width="179" height="223"></a>
	 	<p>Для фильма «Королева Кристина» Булл фотографировал Гарбо используя свет от свечей, на которые она смотрела, опять внимание было приковано к ее лицу, мягкий свет подчеркивал ее строгую красоту и создавал трехмерность в потрете.</p>
	 	<a rel="shadowbox" href="clarence-bull/queen-christina-2.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" title="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" class="picture_left" src="clarence-bull/queen-christina-2-thumb.jpg" width="200" height="225"></a>
	 	<a rel="shadowbox" href="clarence-bull/queen-christina-1.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" title="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" class="picture_left" src="clarence-bull/queen-christina-1-thumb.jpg" width="173" height="225"></a>
	 	<a rel="shadowbox" href="clarence-bull/queen-christina.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" title="Кларенс Синклер Булл/Грета Гарбо - Королева Кристина" class="picture_left" src="clarence-bull/queen-christina-thumb.jpg" width="172" height="225"></a>
	 	<p>В 1942 году он снимал ее в последний раз для кинофильма «Двуликая женщина», она изменилась, стала более замкнутой и отчужденной. Из одежды: личные вещи актрисы, простенькая водолазка и золотой браслет. Позы те же: рука подпирающая голову с разными ракурсами, легкая улыбка и надменный взгляд. В тот день Булл почувствовал, что это в последний раз и попросил ее еще об одном снимке, она терпеливо сняла пальто и вернулась в студию. Больше Булл с ней никогда не встречался. Грета Гарбо ушла из кино в 1942 году в возрасте 36 лет, оставшись в памяти зрителей такой же разной, как снимки Кларенса Синклера Булла.</p>
	 	<a rel="shadowbox" href="clarence-bull/ninochka-1.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Ниночка" title="Кларенс Синклер Булл/Грета Гарбо - Ниночка" class="picture_left" src="clarence-bull/ninochka-1-thumb.jpg" width="187" height="241"></a>
	 	<a rel="shadowbox" href="clarence-bull/ninochka.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Ниночка" title="Кларенс Синклер Булл/Грета Гарбо - Ниночка" class="picture_left" src="clarence-bull/ninochka-thumb.jpg" width="174" height="241"></a>
	 	<a rel="shadowbox" href="clarence-bull/ninochka-2.jpg"><img alt="Кларенс Синклер Булл/Грета Гарбо - Ниночка" title="Кларенс Синклер Булл/Грета Гарбо - Ниночка" class="picture_left" src="clarence-bull/ninochka-2-thumb.jpg" width="183" height="241"></a>
	 	<br />
	 	<br />
	 	<p align="right">Виктория Балашова</p>
	 	<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
	 	<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
	 	<br />
	 	<br />
			
	 	<p>Понравилось? Нажмите!</p>
		<? include("../social.php"); ?>
		<br />
		<br />
			
		<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<p>Читайте другие статьи о знаменитых фотографах:</p>
		<div id="border">
		<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - самый занменитый фотограф киностудии MGM.</p>
		<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
		<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
		<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнийший портретист ХХ века.</p>
		<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
		</div>
		<!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<br />
		<p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
		<br />
		<br />
			
        <!-- FACEBOOK каменты-->
        <p style="font-size:1.3em;">Комментарии Facebook:</p>
        <div class="fb-comments" data-href="http://victoriabalashova.com/article/clarence-bull.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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