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
	<title>Юсуф Карш - гениальнейший портретист | Креативный фотограф Виктория Балашова</title>
	<meta name="keywords" content="юсуф карш,фотография,фотограф,портфолио,джордж нэкэш,джон гаро,рембранд,веласкес,канада,санделл,Saturday night,лорд дунконнон,лорд бессборо,леди бессборо,London News,the Tatler,the Sketch,Соланж Готье,Соланж Карш,Франклин Делано Рузвельт,Франклин Рузвельт,Лорд Твидсмуир,Маккензи Кинг,Уинстон Черчиль,Черчиль,Лица нашего времени,президент сша,папа римский,премьер-министр великобритании,хрущев,брежнев,горбачев,эйнштейн,нельсон мандела,одри хепберн,эрнест хемингуэй,сомерсет моэм,пабло пикассо,бернард шоу,элеанора рузвельт,Château Laurier,эстреллита нашбар,музей изящных искусств,симфоническии дворец" />
	<meta name="description" content="Юсуф Карш стал легендой ещё при жизни и считается гениальнийшим портретистом ХХ века." />
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
		
		<div class="sidebar" id="sideLeft">  <!-- --  Л Е В Ы Й  С А Й Д Б А Р  ----- -->
          <!--  левый сайдбар шириной 70px -->
		</div><!-- .sidebar#sideLeft -->     <!-- - # Л Е В Ы Й  С А Й Д Б А Р  ----- -->
		
		<div class="sidebar" id="sideRight">  <!--  П Р А В Ы Й  С А Й Д Б А Р - МЕСТО ДЛЯ КОНТЕНТА. ШИРИНА 560px  -->
		    <h1>Юсуф Карш</h1>
			<br />
			<a rel="shadowbox" href="yousuf_karsh/yousuf-karsh.jpg"><img alt="Юсуф Карш" title="Юсуф Карш" class="picture_article" src="yousuf_karsh/yousuf-karsh-thumb.jpg" width="138" height="200"></a>
			<p>"Если, глядя на мои портреты, вы узнаете об изображенных на них людях что-нибудь более значительное, если они помогут вам разобраться в своих чувствах относительно кого-нибудь, чья работа оставила след в вашей душе – если вы взглянете на фотографию и скажете: «Да, это он» и при этом узнаете о человеке что-то новое – значит, это действительно удачный портрет", - так писал в своей книге «Портфолио» великий портретист XX века <strong>Юсуф Карш</strong>. Он стал легендой еще при жизни, у него почитали за честь сфотографироваться первые лица страны и не мудрено, его стиль до сих пор остается уникальным, но его жизнь могла бы сложится иначе, если бы не случай. <strong>Юсуф Карш</strong> был выходцем из Армении из города Мардин, самым старшим из четырех детей. «Мои воспоминания о тех днях состоят из странной смеси крови, красоты, преследования и мира. В 1922 году нашей семье разрешили сбежать. Мы должны были оставить двери дома открытыми – взять собой ничего не разрешили. Идти нужно было пешком. Во время нашей поездки длиной в месяц с бедуинским и курдским караваном, мои родители потратили все деньги, которые у нас были. Последняя серебряная монета моего отца пошла, чтобы спасти меня после того, как я был пойман по-дурацки, делая эскиз из человеческих костей и черепов».</p>
			<a rel="shadowbox" href="yousuf_karsh/alfred_hichkock.jpg"><img alt="Юсуф Карш/Альфред Хичкок" title="Юсуф Карш/Альфред Хичкок" class="picture_left" src="yousuf_karsh/alfred_hichkock-thumb.jpg" width="179" height="225"></a>
			<a rel="shadowbox" href="yousuf_karsh/ernest_hemingway.jpg"><img alt="Юсуф Карш/Эрнест Хумигуэй" title="Юсуф Карш/Эрнест Хумигуэй" class="picture_left" src="yousuf_karsh/ernest_hemingway-thumb.jpg" width="178" height="225"></a>
			<a rel="shadowbox" href="yousuf_karsh/george_bernard_shaw.jpg"><img alt="Юсуф Карш/Джордж Бернард Шоу" title="Юсуф Карш/Джордж Бернард Шоу" class="picture_left" src="yousuf_karsh/george_bernard_shaw-thumb.jpg" width="183" height="225"></a>
						
			<a rel="shadowbox" href="yousuf_karsh/francois_mauriac.jpg"><img alt="Юсуф Карш/Франсуа Мориак" title="Юсуф Карш/Франсуа Мориак" class="picture_left" src="yousuf_karsh/francois_mauriac-thumb.jpg" width="135" height="170"></a>
			<a rel="shadowbox" href="yousuf_karsh/pablo_picasso.jpg"><img alt="Юсуф Карш/Пабло Пикассо" title="Юсуф Карш/Пабло Пикассо" class="picture_left" src="yousuf_karsh/pablo_picasso-thumb.jpg" width="124" height="170"></a>
			<a rel="shadowbox" href="yousuf_karsh/tennessee_williams.jpg"><img alt="Юсуф Карш/Тэнесси Уильямс" title="Юсуф Карш/Тэнесси Уильямс" class="picture_left" src="yousuf_karsh/tennessee_williams-thumb.jpg" width="127" height="170"></a>
			<a rel="shadowbox" href="yousuf_karsh/man_ray.jpg"><img alt="Юсуф Карш/Ман Рэй" title="Юсуф Карш/Ман Рэй" class="picture_left" src="yousuf_karsh/man_ray-thumb.jpg" width="140" height="170"></a>
			
			<p><strong>Юсуф Карш</strong> хотел посвятить свою жизнь медицине, если бы родители не отправили его к родственнику Джорджу Нэкэшу фотографу из Шербрука.</p>
			<p>«Летом 1926 я начал работать на дядю Нэкэша в его студии, несмотря на мое огромное желание  изучать медицину. В это время все связанное с искусством очаровывало меня, я еще не понимал, что это станет моим средством к существованию, будет давать мне энергию и желание жить. Я бродил по округам Шербрука каждые выходные с маленькой камерой, одним из многих подарков моего дяди. Я уверен, что мои первые снимки были примитивны, но я учился, а дядя Нэкэш был самым главным критиком. Именно с этой камерой связан мой первый фотографический успех. Я сфотографировал пейзаж с играющими детьми и подарил его однокласснику на Рождество в качестве открытки. Тайно, он отправил этот снимок на конкурс. К моему изумлению снимок получил первый приз, пятьдесят долларов. Я дал десять долларов своему другу и остальные послал моим родителям в Алеппо - это были первые заработанные мною деньги. Через 2 года в 1928 году мой дядя устроил меня на курсы к своему другу Джону Х. Гаро в  Бостон, он был признан выдающимся портретистом в Восточных Штатах. Гаро был мудрым консультантом; он поощрял меня посещать вечерние занятия по истории искусств и изучать работу великих художников, особенно Рембрандта и Веласкеса. Хотя я никогда не учился живописи, я многое узнал об освещении из их работ». Гаро передал мне не только технические навыки, он научил меня «видеть и понимать». Он говорил: «Ясно представляй себе, какой результат ты хочешь получить и когда ты увидишь это, фотографируй. Искусство не бывает случайным».</p>
             <a rel="shadowbox" href="yousuf_karsh/anita_ekberg.jpg"><img alt="Юсуф Карш/Анита Экберг" title="Юсуф Карш/Анита Экберг" class="picture_left" src="yousuf_karsh/anita_ekberg-thumb.jpg" width="115" height="145"></a>
			<a rel="shadowbox" href="yousuf_karsh/audrey_hepburn.jpg"><img alt="Юсуф Карш/Одри Хепбёрн" title="Юсуф Карш/Одри Хепбёрн" class="picture_left" src="yousuf_karsh/audrey_hepburn-thumb.jpg" width="116" height="145"></a>
			<a rel="shadowbox" href="yousuf_karsh/elizabeth_taylor.jpg"><img alt="Юсуф Карш/Элизабет Тейлор" title="Юсуф Карш/Элизабет Тейлор" class="picture_left" src="yousuf_karsh/elizabeth_taylor-thumb.jpg" width="117" height="145"></a>
			<a rel="shadowbox" href="yousuf_karsh/brigitte_bardot.jpg"><img alt="Юсуф Карш/Бриджит Бардо" title="Юсуф Карш/Бриджит Бардо" class="picture_left" src="yousuf_karsh/brigitte_bardot-thumb.jpg" width="179" height="145"></a>
			<p>Вместо запланированных шести месяцев <strong>Юсуф Карш</strong> провел в Бостоне более трех лет. По возвращении в Канаду Юсуфу исполнилось двадцать и он был полон решимости начать собственное дело. Его студия располагалась в Chateau Laurier Hotel в Оттаве, недалеко от здания местного правительства. С большим трудом оплачивая аренду <strong>Юсуф Карш</strong> верил в свое великое будущее, настоящей удачей стала для него встреча с Б.К. Санделлом, редактором престижного периодического издания "Saturday night", благодаря чему его снимки впервые появились на страницах журнала. В это же время группа актеров-любителей пригласила Карша посетить Маленький театр в Оттаве: «Опыт фотографирования актеров на сцене с театральным освещением был волнующим. Неограниченные возможности искусственного света сокрушили меня, ведь в студии Гаро нужно было ждать — часто в течение многих часов нужного освещения. На сцене инструкции давались режиссером; он мог приказать, чтобы освещение менялось в зависимости от его желания. Я был взволнован этим средством выражения, этим методом интерпретации жизни; новый мир был открыт мне».</p>
			<a rel="shadowbox" href="yousuf_karsh/humphrey_bogart.jpg"><img alt="Юсуф Карш/Хамфри Богарт" title="Юсуф Карш/Хамфри Богарт" class="picture_left" src="yousuf_karsh/humphrey_bogart-thumb.jpg" width="179" height="223"></a>
			<a rel="shadowbox" href="yousuf_karsh/anna_magnani_1958.jpg"><img alt="Нэн Голдин/Анна Маньяни 1958" title="Нэн Голдин/Анна Маньяни 1958" class="picture_left" src="yousuf_karsh/anna_magnani_1958-thumb.jpg" width="180" height="223"></a>
			<a rel="shadowbox" href="yousuf_karsh/clarck_gable.jpg"><img alt="Юсуф Карш/Кларк Гейбл" title="Юсуф Карш/Кларк Гейбл" class="picture_left" src="yousuf_karsh/clarck_gable-thumb.jpg" width="179" height="223"></a>
			
			<a rel="shadowbox" href="yousuf_karsh/joan_crawford.jpg"><img alt="Юсуф Карш/Джоан Кроуфорд" title="Юсуф Карш/Джоан Кроуфорд" class="picture_left" src="yousuf_karsh/joan_crawford-thumb.jpg" width="274" height="340"></a>
			<a rel="shadowbox" href="yousuf_karsh/ingrid_bergman.jpg"><img alt="Юсуф Карш/Ингрид Бергман" title="Юсуф Карш/Ингрид Бергман" class="picture_left" src="yousuf_karsh/ingrid_bergman-thumb.jpg" width="268" height="340"></a>
			<p>Одним из актеров театра был Лорд Дунконнон, сын генерала-губернатора Лорда Бессборо и Леди Бессборо, именно он уговорил своих родителей сделать семейный портрет в студии <strong>Юсуфа</strong>. <strong>Карш</strong> был так взволнован, что даже не смог правильно навести фокус камеры, снимок не получился. Понимая насколько важна была молодому фотографу его работа Лорд Бессборо предложил повторить попытку, на этот раз успешно, эти фотографии были размещены в газетах London News, The Tatler и The Sketch. Помимо этого в том Маленьком театре <strong>Юсуф Карш</strong> был представлен актрисе Соланж Готье, которая впоследствии станет его женой и музой, после ее смерти в 1960 году <strong>Юсуф Карш</strong> учредит в Канаде актерскую премию имени Соланж Карш.</p>
			<p>В 1936 году Оттаву посетил Франклин Делано Рузвельт вместе с Лордом Твидсмуиром и Премьер-министром Маккензи Кингом. <strong>Юсуф Карш</strong> был приглашен сделать портрет Премьер-министра, после этого случая Кинг стал его покровителем и другом, а также тем, кто пригласит Карша снимать <strong>Уинстона Черчиля</strong>  в 1941 году после его речи в Канадской Палате Общин.</p>
			<p>Снимок века принес <strong>Юсуфу Каршу</strong> международное признание и стал самым популярным фотопортретом <strong>Черчиля</strong>, редко какая книга по истории Великобритании, Второй мировой войны обходится без него. Сам Карш так описал это событие в книге «Лица нашего времени»: «У него абсолютно не было настроения фотографироваться, а у меня было в распоряжении всего 2 минуты, за которые я должен был снять человека, который написал или вдохновил к написанию целую библиотеку книг, сбил с толку своих биографов, наполнил мир своей славой, а меня страхом». <strong>Черчилль</strong> прошел в кабинет, грозно косясь на мою камеру как на врага, выражение его лица подходило идеально для портрета века, единственное, что не вписывалось, была его излюбленная сигара.</p>
			<p>Поэтому <strong>Юсуф Карш</strong> просто шагнул к премьер-министру и деликатно, но, не спрашивая на, то разрешения, а лишь промолвив «Простите, сэр!», вынул сигару из его рта! «Когда я вернулся к камере он выглядел настолько агрессивно и воинственно, словно хотел меня сожрать», – вспоминал Карш. В этот момент он сделал снимок, которому суждено было прославить его на весь мир. <strong>Черчилль</strong> улыбнулся и  сказал: « Ты можешь сделать еще один кадр». После этого <strong>Черчилль</strong> подошел ко мне, пожал руку и  сказал: «А ты, похоже, можешь даже рычащего льва заставить замереть перед камерой!», после этого название к портрету приклеилось само собой. Вторая, менее известная фотография <strong>Черчилля</strong>, была самой любимой работой Юсуфа.</p>
			<a rel="shadowbox" href="yousuf_karsh/karsh_churchill.jpg"><img alt="Юсуф Карш/Черчиль" title="Юсуф Карш/Черчиль" class="picture_left" src="yousuf_karsh/karsh_churchill-thumb.jpg" width="271" height="346"></a>
			<a rel="shadowbox" href="yousuf_karsh/karsh_churchill_smiling.jpg"><img alt="Юсуф Карш/Улыбающийся Черчиль" title="Юсуф Карш/Улыбающийся Черчиль" class="picture_left" src="yousuf_karsh/karsh_churchill_smiling-thumb.jpg" width="269" height="346"></a>
			<p><strong>Юсуф Карш</strong> был мастером по свету, когда он начал работать с постоянными источниками света, результат превзошел все его ожидания :«Грамотное использование света – это тончайший инструмент для отображения лица человека» - пояснял Карш. Владея этим инструментом в совершенстве (помимо умения «поймать момент»), фотограф добивался потрясающей глубины и выразительности своих портретов. Для того чтобы получить такой результат, он использовал мощные источники заливающего света и прожекторы, изготовленные по его персональному заказу. Это позволяло ему фотографировать с закрытой диафрагмой, добиваясь тем самым желаемой глубины резкости. Точеный и строго отмеренный, классический «голливудский» свет, направленный главным образом на лицо и руки, в контрасте с темной одеждой и темным фоном. <strong>Юсуф Карш</strong> не использует декоративных изгибов драпировки или пёстрых текстур в качестве фона, у него все внимание привлечено к персоне, которую он снимает, а именно к лицу и рукам. На его портретах все равны, потому что там не существует социальных слоев, там присутствует индивидуальность.</p>
			<p>«Моей сверхзадачей является поймать то великое, что есть в каждом сердце, уме и духе, неважно знаменит этот человек или нет. Всякому – мужчине ли, женщине ли – есть что скрывать, и моя задача как фотографа – по возможности обнаружить это и показать. Человек может приоткрыться на какую-то долю секунды в бессознательном жесте, проблеске в глазах, кратковременном сбросе маски, которую все мы носим, чтобы спрятать самое свое сокровенное от окружающих. И вот это ускользающее мгновение фотограф может либо поймать, либо упустить».</p>
			<a rel="shadowbox" href="yousuf_karsh/grace_kelly_and_prince_rainier_iii.jpg"><img alt="Юсуф Карш/Грейс Келли и князь Ренье III" title="Юсуф Карш/Грейс Келли и князь Ренье III" class="picture_right" src="yousuf_karsh/grace_kelly_and_prince_rainier_iii-thumb.jpg" width="197" height="200"></a>
			<a rel="shadowbox" href="yousuf_karsh/wallis_simpson_and_edward_viii.jpg"><img alt="Юсуф Карш/Уоллис Симпсон и Эдуард VIII" title="Юсуф Карш/Уоллис Симпсон и Эдуард VIII" class="picture_right" src="yousuf_karsh/wallis_simpson_and_edward_viii-thumb.jpg" width="148" height="200"></a>
			<br />
			<p>В течении своей жизни <strong>Юсуф Карш</strong> сделал портреты 12 президентов США, 4 Папы Римских, всех премьер-министров Великобритании, советских лидеров Хрущева, Брежнева, Горбачева, Альберта Эйнштейна, Нельсона Манделы, Одри Хепберн, Эрнеста Хемингуэя, Сомерсета Моэма, Пабло Пикассо, Бернарда Шоу и Элеаноры Рузвельт. В июне 1992 <strong>Карш</strong> закрыл свою студию Оттавы в отеле Château Laurier и больше не преследовал коммерческих целей. После шестидесяти лет это был эмоциональный рывок, чтобы сказать до свидания своей студии и духу товарищества который царил в ней. <strong>Юсуф Карш</strong> поселился в Бостоне со своей второй женой Эстреллитой Нашбар в квартире рядом с Городским парком, Музеем Изящных искусств и Симфоническим дворцом.</p>
			<a rel="shadowbox" href="yousuf_karsh/pope_john_paul_ii.jpg"><img alt="Юсуф Карш/Иоанн Павел II" title="Юсуф Карш/Иоанн Павел II" class="picture_left" src="yousuf_karsh/pope_john_paul_ii-thumb.jpg" width="135" height="169"></a>
			<a rel="shadowbox" href="yousuf_karsh/mother_teresa.jpg"><img alt="Юсуф Карш/Мать Тереза" title="Юсуф Карш/Мать Тереза" class="picture_left" src="yousuf_karsh/mother_teresa-thumb.jpg" width="127" height="169"></a>
			<a rel="shadowbox" href="yousuf_karsh/jacqueline_kennedy.jpg"><img alt="Юсуф Карш/Жаклин Кеннеди" title="Юсуф Карш/Жаклин Кеннеди" class="picture_left" src="yousuf_karsh/jacqueline_kennedy-thumb.jpg" width="131" height="169"></a>
			<a rel="shadowbox" href="yousuf_karsh/john_kennedy.jpg"><img alt="Юсуф Карш/Джон Кеннеди" title="Юсуф Карш/Джон Кеннеди" class="picture_left" src="yousuf_karsh/john_kennedy-thumb.jpg" width="135" height="169"></a>
			<br />
			<p><strong>Юсуф Карш</strong> скончался в 2002 году в возрасте 93 лет, оставив молодым фотографам, и не только им, замечательный совет: «В поисках величия духа я неизменно стремился достичь совершенства, прекрасно зная, что оно недостижимо. Но сам этот процесс доставлял мне огромное удовольствие. Он позволял мне, несмотря на годы, оставаться в душе молодым искателем приключений, всегда чего-то хотящим и всегда осознающим, что подлинный объектив камеры – это твои сердце и ум».</p>
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова, креативный фотограф</p>
			<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
			<br />

			<p>Понравилось? Нажмите!</p>
			<? include("../social.php"); ?>
			<br />

			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<p>Рекомендую прочитать другие статьи о знаменитых фотографах</p>
			<div id="border">
			<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - культовый фотограф киностудии MGM.</p>
			<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
			<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
			<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
			<br />
			<p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы освещения в фотостудии</a></p>
			<p><a href="how_to_look_good.php" title="Как хорошо получаться на фотографиях?">Как хорошо получаться на фотографиях?</a></p>
            <p><a href="quotes_photographers.php" id="link" title="Цитаты знаменитых фотографов">Цитаты знаменитых фотографов</a><p></p></p>
			</div>
			<!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<br />
			<p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
			<br />
			<br />
            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/yousuf_karsh.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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