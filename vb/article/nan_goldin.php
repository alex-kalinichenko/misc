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
	<title>Нэн Голдин - креативный фотограф Виктория Балашова</title>
	<meta name="keywords" content="нэн голдин,фотография,фотограф,vogue,Куки Муэллер" />
	<meta name="description" content="Любимица трансвеститов Нэн Голдин. Снимала свои исчезающие воспоминания о прошлом ...чтобы помнить" />
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
		    <h1>Нэн Голдин</h1>
			<br />
			<br />
			<a rel="shadowbox" href="nan_goldin/nan_goldin.jpg"><img alt="Портрет Нэн Годлин, сделанный Дэвидом Армстронгом" title="Портрет Нэн Годлин, сделанный Дэвидом Армстронгом" class="picture_article" src="nan_goldin/nan_goldin-thumb.jpg" width="168" height="200"></a>
			<p><strong>Нэн Голдин</strong> стала известна благодаря фотосъемкам своего окружения. Ее жизнь всегда была неотъемлемой частью творчества, ее фотографии невозможно обсуждать, не обращаясь к их персонажам по имени, ведь все эти люди являются ее семьей, друзьями, любовниками. Нэн Голдин пример  художника-документалиста, который конспектирует свою жизнь посредством фотографии: ее жизнь - это ее работа, ее работа - это ее жизнь. «Я очень хотела снимать для Vogue, поэтому мои снимки изначально содержат в себе эстетический элемент, они отражают мою любовь к людям, местам и времени. Они создают запись в истории». Когда Нэн было 14 лет, ее старшая сестра Барбара Холи Голдин покончила с собой, это потрясение вызвало  череду депрессий, наркотическую  и алкогольную зависимость, ну и как следствие помещение в исправительную колонию для несовершеннолетних «Сатия» (Линкольн, Массачусетс). Именно там она встретила Дэвида Армстронга и Сюзанну Флэтчер - людей, которые станут ее самыми близкими друзьями и наставниками. Поскольку память о ее сестре стала становиться туманной, <strong>Нэн Голдин</strong> начала снимать свои исчезающие воспоминания о прошлом. Фотографию она использовала как способ обрести себя и тех кто вокруг нее. Благодаря Армстронгу <strong>Нэн Голдин</strong> стала вхожа в гей сообщества, снимала конкурсы красоты трансвеститов в клубе "The other side" в Бостоне в начале 70-х. Нэн стремилась изобразить особенности сексуальности человека прямо, не поверхностно, привлекая внимание к тонкой грани между мужским и женским. Через эти портреты, наряду со многими другими, Голдин иллюстрирует беспорядок и безрассудство времени, в которое она создавала свое искусство.</p>
			<a rel="shadowbox" href="nan_goldin/simon_and_jessica_in_the_shower.jpg"><img alt="Нэн Голдин/Саймон и Джэссика в душе" title="Нэн Голдин/Саймон и Джэссика в душе" class="picture_left" src="nan_goldin/simon_and_jessica_in_the_shower-thumb.jpg" width="260" height="415"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_jessica.jpg"><img alt="Нэн Голдин/Джэссика" title="Нэн Голдин/Джэссика" class="picture_left" src="nan_goldin/nan_goldin_jessica-thumb.jpg" width="289" height="192"></a>
			<a rel="shadowbox" href="nan_goldin/simon_jessica_making_love.jpg"><img alt="Нэн Голдин/Саймон и Джессика занимаются любовью" title="Нэн Голдин/Саймон и Джессика занимаются любовью" class="picture_left" src="nan_goldin/simon_jessica_making_love-thumb.jpg" width="289" height="195"></a>
			<p>Именно во время этого периода <strong>Нэн Голдин</strong> продолжила свое исследование фотографии  в Бостонской Школе Искусств. Этот переход отмечает изменение в фотографическом стиле Голдин. До колледжа Нэн использовала черно-белую пленку, снимая только от доступных источников света (за исключением некоторых из фотографий, сделанных в "The other side", для которой она использовала вспышку). Эксперименты с цветом станут неотъемлемой частью ее фотографического стиля. Введение вспышки в ее работу также очень способствовало тому, что сегодня называют "взглядом Голдин". Нэн Голдин осторожно использует вспышку, которая дает характерный цветовой эффект. Она достигает ярких, глубоких оттенков, печатая цветные отпечатки со слайдов (Сибахром). Отпечатки делаются на фотобумаге, покрытой тремя слоями эмульсии, каждый слой сенсибилизирован под один из первичных аддитивных цветов (RGB) и каждый из них содержит красители дополнительных субтрактивных цветов. В процессе постадийного проявления серебро и красители из каждого слоя выборочно (пропорционально засветке) обесцвечиваются и вымываются, оставляя в итоге композитное позитивное цветное изображение. Процесс использовался для изготовления цветных отпечатков со слайдов известен стабильностью и четкостью изображения, а также насыщенностью цветов.</p>
             <a rel="shadowbox" href="nan_goldin/suzane_on_the_train.jpg"><img alt="Нэн Голдин/Сьюзэн в поезде" title="Нэн Голдин/Сьюзэн в поезде" class="picture_left" src="nan_goldin/suzane_on_the_train-thumb.jpg" width="178" height="119"></a>
			<a rel="shadowbox" href="nan_goldin/smoky_car_in_new_hampshire_1979.jpg"><img alt="Нэн Голдин/Дымящийся автомобиль в Нью-Хэмпшире" title="Нэн Голдин/Дымящийся автомобиль в Нью-Хэмпшире" class="picture_left" src="nan_goldin/smoky_car_in_new_hampshire_1979-thumb.jpg" width="164" height="119"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_variety_1983.jpg"><img alt="Нэн Голдин/Варьете" title="Нэн Голдин/Варьете" class="picture_right" src="nan_goldin/nan_goldin_variety_1983-thumb.jpg" width="187" height="274"></a>
			<a rel="shadowbox" href="nan_goldin/joana_with_valerie_and_reine_in_the_mirror_1999.jpg"><img alt="Нэн Голдин/Джоана с Валери и Рейн в зеркале" title="Нэн Голдин/Джоана с Валери и Рейн в зеркале" class="picture_left" src="nan_goldin/joana_with_valerie_and_reine_in_the_mirror_1999-thumb.jpg" width="178" height="115"></a>
			<a rel="shadowbox" href="nan_goldin/couple_in_bed_chicago.jpg"><img alt="Нэн Голдин/Джоана с Валери и Рейн в зеркале" title="Нэн Голдин/Джоана с Валери и Рейн в зеркале" class="picture_left" src="nan_goldin/couple_in_bed_chicago-thumb.jpg" width="165" height="115"></a>
			<p>Начиная с 1978 года фотографии <strong>Нэн Голдин</strong> затрагивают тему наркомании, алкоголя, а также отношений, как говорила сама Голдин: «Говорить с истинным пониманием  и сочувствием можно о том, что Вы испытали на собственной шкуре». Верная своему кредо Нэн Голдин запечатлит темные стороны жизни, дурные привычки, жестокое обращение и безысходность, впоследствии эти работы будут объединены в слайд-шоу под названием "Баллада о сексуальной зависимости" ("The Ballad of Sexual Dependency"). Этот самый известный проект <strong>Нэн Голдин</strong> является ее дневником, в который она позволила заглянуть, а фотографии - моментом ясности и эмоциональной связи с тем или иным человеком. Наблюдения за людьми не имели для <strong>Нэн Голдин</strong> значения, камера была предметом повседневности, она наполняла мгновение съемки красотой и силой, она хотела, чтобы цветные картинки памяти людей жили вечно, ведь историю переписать можно, а память не сотрешь. «Я действительно не помню свою сестру. После ухода из семьи, восстанавливаясь после потрясения, я потеряла реальную память о ней. Я помню, что она значила для меня. Но я не помню материального смысла того, кем она была, ее присутствие, на что были похожи ее глаза, на что походил ее голос. Я никогда не хочу терять реальную память о чем бы то ни было снова». Тему сексуальности <strong>Нэн Голдин</strong> будет исследовать еще много лет, наблюдая за своей сестрой, она видела какую роль играет в ее становлении сексуальность, неконтролируемость, гнев, агрессия, невыраженные чувства, когда огромное желание несет в себе губительную силу. Через неделю после похорон сестры Нэн Голдин была изнасилована пожилым мужчиной. «Во время этого периода самой большой боли и потери, я была одновременно побуждена к интенсивному сексуальному волнению. Несмотря на вину, я была одержима моим желанием.</p>
			<p>Мое понимание власти сексуальности было определено этими двумя событиями. Исследование и понимание перестановок этой власти мотивируют мою жизнь и мою работу».</p>
			<a rel="shadowbox" href="nan_goldin/nan-goldin4.jpg"><img alt="Нэн Голдин" title="Нэн Голдин" class="picture_left" src="nan_goldin/nan-goldin4-thumb.jpg" width="279" height="187"></a>
			<a rel="shadowbox" href="nan_goldin/nan-goldin-cody.jpg"><img alt="Нэн Голдин/Коди" title="Нэн Голдин/Коди" class="picture_left" src="nan_goldin/nan-goldin-cody-thumb.jpg" width="269" height="187"></a>
			<a rel="shadowbox" href="nan_goldin/tabboo_and_jimmy_paul_in_the_bathroom.jpg"><img alt="Нэн Голдин/Табу и Джимми Пол в ванной" title="Нэн Голдин/Табу и Джимми Пол в ванной" class="picture_left" src="nan_goldin/tabboo_and_jimmy_paul_in_the_bathroom-thumb.jpg" width="283" height="191"></a>
			<a rel="shadowbox" href="nan_goldin/greer_and_robert_on_the_bed_1982.jpg"><img alt="Нэн Голдин/Грир и Роберт в постели" title="Нэн Голдин/Грир и Роберт в постели" class="picture_left" src="nan_goldin/greer_and_robert_on_the_bed_1982-thumb.jpg" width="265" height="191"></a>
			<a rel="shadowbox" href="nan_goldin/siobhan_and_kristie_nude_laughing.jpg"><img alt="Нэн Голдин/Голые Сиобан и Кристи смеются" title="Нэн Голдин/Голые Сиобан и Кристи смеются" class="picture_left" src="nan_goldin/siobhan_and_kristie_nude_laughing-thumb.jpg" width="283" height="185"></a>
			<p>В 1976 году <strong>Нэн Голдин</strong> знакомится с арт-хаусной актрисой <strong>Куки Муэллер</strong>, которая будет ее музой до своей смерти в 1989,этот проект будет называться The Cookie’s Portfolio,история жизни молодой женщины, ее радости, вредные привычки, рождение сына, свадьба и похороны. Сама <strong>Куки Муэллер</strong> незадолго до смерти сказала: "К счастью, я не первый человек, который скажет Вам, что Вы никогда не умрете. Вы просто потеряете тело. Вас больше не будет волновать вопрос арендной платы, ипотеки или модной одежды. Вы будете освобождены от сексуальных навязчивых идей. У Вас не будет наркомании. Вы не будете нуждаться в алкоголе. Вы не должны будете волноваться о целлюлите, сигаретах, раке или СПИДе. Вы будете свободны." Куки Муэллер умерла в 40 лет, в один год со своим мужем Витторио от СПИДа.</p>
			<a rel="shadowbox" href="nan_goldin/cookie_mueller.jpg"><img alt="Нэн Голдин/Куки Муэллер" title="Нэн Голдин/Куки Муэллер" class="picture_left" src="nan_goldin/cookie_mueller-thumb.jpg" width="276" height="185"></a>
			<a rel="shadowbox" href="nan_goldin/cookie_mueller_portfolio_1983.jpg"><img alt="Нэн Голдин/Куки Муэллер портфолио 1983" title="Нэн Голдин/Куки Муэллер портфолио 1983" class="picture_left" src="nan_goldin/cookie_mueller_portfolio_1983-thumb.jpg" width="272" height="185"></a>
			<a rel="shadowbox" href="nan_goldin/cookie_mueller1.jpg"><img alt="Нэн Голдин/Куки Муэллер" title="Нэн Голдин/Куки Муэллер" class="picture_left" src="nan_goldin/cookie_mueller1-thumb.jpg" width="270" height="183"></a>
			<a rel="shadowbox" href="nan_goldin/cookie_and_vittorio_wedding_1986.jpg"><img alt="Нэн Голдин/Свадьба Куки и Витторио 1986" title="Нэн Голдин/Свадьба Куки и Витторио 1986" class="picture_left" src="nan_goldin/cookie_and_vittorio_wedding_1986-thumb.jpg" width="277" height="183"></a>
			<p>Несмотря на поднятие одной из самых актуальных тем в фотографии, <strong>Нэн Голдин</strong> была осуждена критиками  за продвижение героиновой темы и унижении традиционных эталонов красоты. Отдельное место в ее исследовании было посвящено отношениям полов, вот что Нэн говорила: «Что Вы знаете эмоционально и что Вы жаждете сексуально, может быть дико противоречащим. Сам пол - только один аспект сексуальной зависимости. Удовольствие становится побуждением, но реальное удовлетворение упоительно. Кровать становится форумом, на котором борьба в отношениях разряжена или усилена. Интенсивные сексуальные связи вырабатывают привычку. Вы становитесь зависящими от удовлетворения. Пол становится микромиром отношений, ревность используется для того, чтобы вдохновить страсть».</p>
			<a rel="shadowbox" href="nan_goldin/nan_and_brian_in_the_bed_1983.jpg"><img alt="Нэн Голдин/Нэн и Брайен в постели 1983" title="Нэн Голдин/Нэн и Брайен в постели 1983" class="picture_left" src="nan_goldin/nan_and_brian_in_the_bed_1983-thumb.jpg" width="193" height="141"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self-portrait.jpg"><img alt="Нэн Голдин/Автопортрет" title="Нэн Голдин/Автопортрет" class="picture_left" src="nan_goldin/nan_goldin_self-portrait-thumb.jpg" width="134" height="141"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self_portrait_in_kimono_with_brian.jpg"><img alt="Нэн Голдин/Автопортрет в кимоно с Брайеном" title="Нэн Голдин/Автопортрет в кимоно с Брайеном" class="picture_left" src="nan_goldin/nan_goldin_self_portrait_in_kimono_with_brian-thumb.jpg" width="210" height="141"></a>
			<p>1988 году злоупотребление наркотиками сильно повлияло на трудоспособность <strong>Нэн Голдин</strong> и она легла в клинику. В своей палате она не расставалась с камерой, хотя ранее <strong>Нэн Голдин</strong> экспериментировала с автопортретом, именно в клинике Голдин создала множество своих изображений, передав всю палитру чувств и свое одиночество.</p>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self_portrait_in_my_blue_bathroom.jpg"><img alt="Нэн Голдин/Автопортрет в голубой ванной" title="Нэн Голдин/Автопортрет в голубой ванной" class="picture_left" src="nan_goldin/nan_goldin_self_portrait_in_my_blue_bathroom-thumb.jpg" width="277" height="183"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self_portrait_in_the_mirror_1988.jpg"><img alt="Нэн Голдин/Автопортрет в зеркале 1988" title="Нэн Голдин/Автопортрет в зеркале 1988" class="picture_left" src="nan_goldin/nan_goldin_self_portrait_in_the_mirror_1988-thumb.jpg" width="268" height="183"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self-portrait_in_hospital.jpg"><img alt="Нэн Голдин/Автопортрет в госпитале" title="Нэн Голдин/Автопортрет в госпитале" class="picture_left" src="nan_goldin/nan_goldin_self-portrait_in_hospital-thumb.jpg" width="289" height="184"></a>
			<a rel="shadowbox" href="nan_goldin/nan_goldin_self_portrait_with_head_against_pillow.jpg"><img alt="Нэн Голдин/Автопортрет с головой напротив подушки" title="Нэн Голдин/Автопортрет с головой напротив подушки" class="picture_left" src="nan_goldin/nan_goldin_self_portrait_with_head_against_pillow-thumb.jpg" width="259" height="184"></a>
			<p>В 1994 году <strong>Нэн Голдин</strong> выпускает книгу своих работ совместно с Дэвидом Армстронгом под названием Двойная жизнь, а в 1996 году музей американского искусства Уитни провел выставку из лучших работ <strong>Нэн Голдин</strong> «Я буду Вашим зеркалом..» Нэн также сотрудничала с японским фотографом  Нобуйоши Араки, они вместе сняли цикл фотографий, отображающих странные пейзажи, людей в воде, горизонты Нью-Йорка. В 2002 году французский центр Помпиду провел ретроспективу ее работ, а в 2006 году в Нью-Йорке выставка «Преследуя призрака» произвела огромное впечатление благодаря показу ее слайд-шоу, сопровождаемое голосом за кадром и различными звуковыми эффектами. "Моя работа изменяется, как изменяюсь я, ведь эволюция в этом деле просто необходима, а я не собираюсь останавливаться».</p>
			<br />
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова</p>
			<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
			<br />
			<br />
			
			<p style="font-size:0.9em;">Если эта статья вам понравилась, поделитесь ссылкой с друзьями. Нажмите ниже "+1", "Like", "Мне нравится" или оставьте свой комментарий. Спасибо!</p>
			<? include("../social.php"); ?>
			<br />
			<br />
			
			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<div id="border">
			<p>Ещё статьи:</p>
			<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
			<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
			<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнейший портретист ХХ века.</p>
			<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - культовый фотограф киностудии MGM.</p>
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
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/nan_goldin.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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