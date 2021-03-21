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
	<title>Джордж Харрелл - Виктория Балашова - креативный фотограф</title>
	<meta name="keywords" content="джордж харрелл,фотография,фотограф,mgm" />
	<meta name="description" content="Джордж Харрелл - культовый фотограф киностудии MGM, один из атрибутов американской мечты." />
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
		    <h1>Джордж Харрелл</h1>
			<br />
			<br />
			<a rel="shadowbox" href="george_hurrell/hurrell_young_camera.jpg"><img alt="Молодой Джордж Харрелл" title="Молодой Джордж Харрелл" class="picture_article" src="george_hurrell/hurrell_young_camera-thumb.jpg" width="154" height="200"></a>
			<p><strong>Джордж Харрелл</strong> явился одним из атрибутов американской мечты, фотографом главной американской киностудии MGM, на протяжении долгих лет снимающем звезд первой величины, без него не было бы того волшебного ореола, которым он наполнил образ каждой из них, выявил индивидуальность, характер, темперамент. Блестящий знаток своего дела, неутомимый художник, <strong>Джордж Харрелл</strong> до последнего дня отдавал все свое мастерство людям и сегодня глядя на его работы, мы видим кусочки целого  мира название которому Голливуд. Еще в детстве <strong>Джордж Харрелл</strong> понял, что хочет стать художником: «Я всегда хотел быть человеком искусства. Ребенком я, что то постоянно рисовал и дома и в школе, рисование было моим любимым предметом.» Родившись в 1904 году в Цинциннати в семье фабриканта обуви решил пойти по стопам своего старшего брата и поступил в священную семинарию в Чикаго, но к конце концов передумал и пошел в Институт изящных искусств. Дело в том, что с фотографией Джордж познакомился во время своего обучения, так как студентам необходимо было тренировать свое восприятие и видение того или иного предмета, поэтому прежде чем что - то нарисовать нужно было это сфотографировать, а также если речь шла о написании пейзажа, то этот снимок помогал не тормозить работу зимой. Снимки Харрелла увидел фотограф Юджин Хатчинсон и пригласил его поработать в качестве ассистента в здании Института на Мичиган Авеню. Так начался его интерес к портретной съемке. Затем Институт посетил художник Эдгар Элвин Пэйн  с лекцией, пейзаж нарисованный Харреллом произвел на него впечатление и он  пригласил его в Лагуну Бич, Калифорния. Они приехали туда на одной машине, как раз на двадцать первый день рождения Джорджа Харрелла, 1 июня 1925 года. Несмотря на приглашение семьи Пэйн остановится у них, Харелл обосновался в бунгало по соседству, арендованное режиссером Молом Сант-Клэром, с которым он заранее договорился присматривать за домом в обмен на бесплатное проживание. Здесь <strong>Джордж Харрелл</strong> начал практиковаться в фотографии, но не бросал рисовать. В канун рождества он был представлен Президенту ассоциации художников Лагуны Бич Уильяму Гриффиту, а также Флоренс Лоу Барнс (Панчо Барнс), впоследствии ставшей одной из самых знаменитых женщин-пилотов наравне с Амелией Эрхарт. С этого дня Харрелл стал постоянным гостем на ее вечеринках, Флоренс происходила из очень богатой семьи и владела ранчо в 40 акров.</p> 
			<a rel="shadowbox" href="george_hurrell/pancho_barnes.jpg"><img alt="Джордж Харрелл/Панчо Барнс" title="Джордж Харрелл/Панчо Барнс" class="picture_left" src="george_hurrell/pancho_barnes-thumb.jpg" width="207" height="255"></a>
			<a rel="shadowbox" href="george_hurrell/pancho_barnes1.jpg"><img alt="Джордж Харрелл/Панчо Барнс" title="Джордж Харрелл/Панчо Барнс" class="picture_left" src="george_hurrell/pancho_barnes1.jpg" width="200" height="255"></a>
			<br />
			<p>В 1928 году Панчо Барнс планировала принять участие в очередном воздушном соревновании, но Орвиль Райт, влиятельный человек, собиравший заявки на участие открыто выступал против женщин-пилотов, поэтому она обратилась за помощью к Хареллу, она попросила сфотографировать ее в мужском обличье для анкеты. Этот трюк удался, таким образом, Панчо пробилась в мир авиации.</p>
			<p>Она имела широкий круг знакомств и одним из ее друзей был Рамон Наварро - голливудский актер с испанскими корнями, обладая прекрасным певческим голосом Наварро планировал дать свой дебютный концерт в Вене, но для этого ему необходимы были рекламные фотографии и Флоренс порекомендовала Харрелла. Результатом стали прекрасные снимки «Новый орфей», где Наварро позировал в романтическом образе с белой лошадью. Флоренс увидев фото сказала: «Если <strong>Джордж Харрелл</strong> может заставить выглядеть мою лошадь так же сногсшибательно как и самого красивого мужчину Америки, тогда все должны у него фотографироваться».</p>
			<a rel="shadowbox" href="george_hurrell/navarro.jpg"><img alt="Джордж Харрелл/Рамон Наварро" title="Джордж Харрелл/Рамон Наварро" class="picture_left" src="george_hurrell/navarro-thumb.jpg" width="156" height="192"></a>
			<a rel="shadowbox" href="george_hurrell/navarro1.jpg"><img alt="Джордж Харрелл/Рамон Наварро" title="Джордж Харрелл/Рамон Наварро" class="picture_left" src="george_hurrell/navarro1-thumb.jpg" width="223" height="192"></a>
			<a rel="shadowbox" href="george_hurrell/navarro-benhur-hurrell.jpg"><img alt="Джордж Харрелл/Рамон Наварро" title="Джордж Харрелл/Рамон Наварро" class="picture_left" src="george_hurrell/navarro-benhur-hurrell-thumb.jpg" width="154" height="192"></a>
			<p>Таким образом слава о Харреле стала распространятся в кругах киноиндустрии и его следующей клиенткой стала сама Норма Ширер. Для тех, кто не знает, Норма Ширер на тот момент считалась Первой леди киностудии MGM и была женой правой руки Луиса Б. Майера и главного продюссера студии Ирвинга Талберга. Ее проблема заключалась в нежелании ее мужа давать ей роль в картине «The Devorcee» («Развод»). Ширер должна была играть даму легкого поведения, в то время как ее имидж диктовал совершенно обратное. Она попросила <strong>Джордж Харрелл</strong> запечатлеть ее в образе кокотки. Это был тот самый шанс на миллион, благодаря которому Джордж Харрелл в итоге стал главным фотографом киностудии MGM. Кстати, Норма Ширер благодаря этим фотографиям все-таки получила роль и Оскар за фильм.</p>
			<a rel="shadowbox" href="george_hurrell/norma_shearer.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer-thumb.jpg" width="174" height="250"></a>
			<a rel="shadowbox" href="george_hurrell/norma_shearer4.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer4-thumb.jpg" width="182" height="250"></a>
			<a rel="shadowbox" href="george_hurrell/norma_shearer_devorcee.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer_devorcee-thumb.jpg" width="179" height="250"></a>
			
			<a rel="shadowbox" href="george_hurrell/norma_shearer_portrait.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer_portrait-thumb.jpg" width="146" height="190"></a>
			<a rel="shadowbox" href="george_hurrell/norma_shearer2.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer2-thumb.jpg" width="251" height="190"></a>
			<a rel="shadowbox" href="george_hurrell/norma_shearer3.jpg"><img alt="Джордж Харрелл/Норма Ширер" title="Джордж Харрелл/Норма Ширер" class="picture_left" src="george_hurrell/norma_shearer3-thumb.jpg" width="138" height="190"></a>
			<br />
			<p>Первые снимки, которые он сделал в качестве Ведущего фотографа были сняты 1 января 1930 года. Это были старлетка Харриет Лэйк, впоследствии ставшая Энн Созерн и легендарный Лон Чейни. Тогда же Харелл изобретает свой стиль работы с моделью, развлекает и успокаивает джазовой музыкой, просит выполнить те или иные гимнастические упражнения, много беседует. </p>
			<a rel="shadowbox" href="george_hurrell/lon_chaney.jpg"><img alt="Джордж Харрелл/Лон Чейни" title="Джордж Харрелл/Лон Чейни" class="picture_left" src="george_hurrell/lon_chaney-thumb.jpg" width="182" height="238"></a>
			<a rel="shadowbox" href="george_hurrell/harriet_lake.jpg"><img alt="Джордж Харрелл/Харриет Лэйк - Энн Созерн" title="Джордж Харрелл/Харриет Лэйк - Энн Созерн" class="picture_left" src="george_hurrell/harriet_lake-thumb.jpg" width="176" height="238"></a>
			<a rel="shadowbox" href="george_hurrell/harriet_lake1.jpg"><img alt="Джордж Харрелл/Харриет Лэйк - Энн Созерн" title="Джордж Харрелл/Харриет Лэйк - Энн Созерн" class="picture_left" src="george_hurrell/harriet_lake1-thumb.jpg" width="177" height="238"></a>
			<p><strong>Джордж Харрелл</strong> моделировал лица своих моделей светом и тенью, используя осветительный прибор, который он изготовил сам. Это была мощная лампа закрепленная в форме подвесного микрофона, для того чтобы подсвечивать скулы и создавать тени под глазами и носом. «Самая главная задача в освещении для меня  это работать с тенями вместо того, чтобы заполнять лицо светом.» Во то время студийные фотографии были одним из ключевых элементов в процессе продвижения кинозвезд, отдел связи с общественностью помещал эти фотографии в журналы и афиши, а также массово распространял среди фанатов. Эти кадры идеализировали обыкновенных людей, скрывали их возраст, меняли цвет волос, иными словами, превращали в богов и богинь экрана, намного лучше, чем это делала кинопленка. И все же фотографии не были полностью искусственными, ведь даже самый одаренный фотограф не сможет раскрыть индивидуальность одним светом и ретушью. Как мог бы Харрелл передать харизматичность и высокий стиль Джоан Кроуфорд или сексуальность Джин Харлоу, если бы они не обладали этими качествами? Скорее он поощрял и усиливал то, чем они обладали изначально, наделяя их томные образы магией.</p>
			<a rel="shadowbox" href="george_hurrell/errol_flynn.jpg"><img alt="Джордж Харрелл/Эррол Флинн" title="Джордж Харрелл/Эррол Флинн" class="picture_left" src="george_hurrell/errol_flynn-thumb.jpg" width="187" height="235"></a>
			<a rel="shadowbox" href="george_hurrell/myrna_loy.jpg"><img alt="Джордж Харрелл/Мирна Лой" title="Джордж Харрелл/Мирна Лой" class="picture_left" src="george_hurrell/myrna_loy-thumb.jpg" width="168" height="235"></a>
			<a rel="shadowbox" href="george_hurrell/robert_taylor.jpg"><img alt="Джордж Харрелл/Роберт Тейлор" title="Джордж Харрелл/Роберт Тейлор" class="picture_left" src="george_hurrell/robert_taylor-thumb.jpg" width="185" height="235"></a>
			
			<a rel="shadowbox" href="george_hurrell/marlene_dietrich.jpg"><img alt="Джордж Харрелл/Марлен Дитрих" title="Джордж Харрелл/Марлен Дитрих" class="picture_left" src="george_hurrell/marlene_dietrich-thumb.jpg" width="156" height="212"></a>
			<a rel="shadowbox" href="george_hurrell/loretta_young.jpg"><img alt="Джордж Харрелл/Лоретта Янг" title="Джордж Харрелл/Лоретта Янг" class="picture_left" src="george_hurrell/loretta_young-thumb.jpg" width="214" height="212"></a>
			<a rel="shadowbox" href="george_hurrell/clark-gable.jpg"><img alt="Джордж Харрелл/Кларк Гейбл" title="Джордж Харрелл/Кларк Гейбл" class="picture_left" src="george_hurrell/clark-gable-thumb.jpg" width="171" height="212"></a>
			<p>Джоан Кроуфорд было 26, когда она впервые побывала в его студии и стала его постоянной клиенткой. Известная своей любовью к модной одежде, она часто фотографировалась в сценических костюмах, сшитых специально для ее ролей модельером студии MGM Адрианом. Вначале она старалась придерживаться своих привычных поз, но Харрелл попросил ее плавно переходить из одной в другую и замирать, поначалу они много спорили, но ему удалось заставить ее довериться ему. Джоан Кроуфорд обладала необыкновенным, фигурным лицом и только Харрелл с его мастерством света и тени мог передать на ее портретах красоту ее огромных глаз, идеальную форму носа и объемность губ. Все фотографии подвергались тщательной ретуши, в случае с Джоан это были веснушки, которыми было усеяно все ее лицо.</p>
			<a rel="shadowbox" href="george_hurrell/joan_crawford2.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford2-thumb.jpg" width="181" height="236"></a>
			<a rel="shadowbox" href="george_hurrell/joan_crawford_1.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford_1-thumb.jpg" width="180" height="236"></a>
			<a rel="shadowbox" href="george_hurrell/joan_crawford3.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford3-thumb.jpg" width="178" height="236"></a>
			<a rel="shadowbox" href="george_hurrell/joan_crawford6.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford6-thumb.jpg" width="182" height="230"></a>
			<a rel="shadowbox" href="george_hurrell/joan_crawford.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford-thumb.jpg" width="173" height="230"></a>
			<a rel="shadowbox" href="george_hurrell/joan_crawford_grand_hotel.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд" title="Джордж Харрелл/Джоан Кроуфорд" class="picture_left" src="george_hurrell/joan_crawford_grand_hotel-thumb.jpg" width="183" height="230"></a>
			<p>Ретуширование стало формой искусства. <strong>Джордж Харрелл</strong> просил своих моделей наносить небольшое количество грима перед фотосъемкой  таким образом, он фактически наносил грим и убирал недостатки с помощью ручной ретуши. Оцените сами, вот исходник и обработанный снимок.</p>
			<a rel="shadowbox" href="george_hurrell/joanCrawfordUntouched.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд - неретушированное фото" title="Джордж Харрелл/Джоан Кроуфорд - неретушированное фото" class="picture_left" src="george_hurrell/joanCrawfordUntouched-thumb.jpg" width="275" height="347"></a>
			<a rel="shadowbox" href="george_hurrell/joanCrawfordRetouched.jpg"><img alt="Джордж Харрелл/Джоан Кроуфорд - ретушированное фото" title="Джордж Харрелл/Джоан Кроуфорд - ретушированное фото" class="picture_left" src="george_hurrell/joanCrawfordRetouched-thumb.jpg" width="275" height="347"></a>
			<p>Киностудия MGM в 1930 году дала Джорджу Харрелу задание провести рекламную фотосессию с первой звездой киностудии Гретой Гарбо, которая закончилась провалом. Для съемки рекламных фотографий для фильма «Romance» («Роман») она приехала в студию с костюмами XIX века, сшитыми Адрианом из вельвета и меховых вставок. У неё было своё представление в каких позах ей нужно позировать. Как Харрелл ни старался, ни развлекал ее шутками, ни бегал пританцовывая, актриса осталась в образе своего гламурного имиджа. Джордж хотел настоящей  и живой Гарбо, он хотел вызвать эмоции. Ему это удалось, он упал и она улыбнулась, единственный раз за весь период съемки. И этот момент Харрелл поймал. К сожалению, Гарбо попросила студийных боссов больше не посылать ее к этому «сумасшедшему» и предпочла фотографироваться у второго фотографа студии MGM Кларенса Синклера Булла.</p>
			<a rel="shadowbox" href="george_hurrell/garbo.jpg"><img alt="Джордж Харрелл/Грета Гарбо улыбается" title="Джордж Харрелл/Грета Гарбо улыбается" class="picture_left" src="george_hurrell/garbo-thumb.jpg" width="172" height="228"></a>
			<a rel="shadowbox" href="george_hurrell/greta_garbo7.jpg"><img alt="Джордж Харрелл/Грета Гарбо" title="Джордж Харрелл/Грета Гарбо" class="picture_left" src="george_hurrell/greta_garbo7-thumb.jpg" width="186" height="228"></a>
			<a rel="shadowbox" href="george_hurrell/greta_garbo8.jpg"><img alt="Джордж Харрелл/Грета Гарбо" title="Джордж Харрелл/Грета Гарбо" class="picture_left" src="george_hurrell/greta_garbo8-thumb.jpg" width="181" height="228"></a>
			
			<a rel="shadowbox" href="george_hurrell/greta_garbo.jpg"><img alt="Джордж Харрелл/Грета Гарбо" title="Джордж Харрелл/Грета Гарбо" class="picture_left" src="george_hurrell/greta_garbo-thumb.jpg" width="186" height="236"></a>
			<a rel="shadowbox" href="george_hurrell/greta_garbo_romance.jpg"><img alt="Джордж Харрелл/Грета Гарбо - кинофильм Романс" title="Джордж Харрелл/Грета Гарбо - кинофильм Романс" class="picture_left" src="george_hurrell/greta_garbo_romance-thumb.jpg" width="173" height="236"></a>
			<a rel="shadowbox" href="george_hurrell/greta_garbo_1.jpg"><img alt="Джордж Харрелл/Грета Гарбо" title="Джордж Харрелл/Грета Гарбо" class="picture_left" src="george_hurrell/greta_garbo_1-thumb.jpg" width="181" height="236"></a>
			<p>Джин Харлоу в отличие от нее была самой покорной клиенткой Джорджа Харрела, с удовольствием позировала и выполняла все требования фотографа. Когда ей исполнился 21 год MGM купила ее контракт у авиатора Говарда Хьюза. В 1930 году Хьюз финансировал фильм «Hell’s Angels» о летчиках-истребителях, в этом фильме одну из ролей исполнила никому неизвестная блондинка. После успеха картины Пол Бёрн, впоследствии муж Харлоу, организовал покупку ее контакта и переход на киностудию MGM. На снимках 1933 года Джордж Харрелл использует рисующий свет, обостряя теневой рисунок, добавляет внешности Харлоу небольшую брутальность, подчеркивает ее волевой характер, а также легкую уязвимость. Он придает ее коже сияние, приковывает внимание к округлым частям тела. Она естественна и прекрасна.</p>
			<a rel="shadowbox" href="george_hurrell/jean_harlow.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow-thumb.jpg" width="189" height="228"></a>
			<a rel="shadowbox" href="george_hurrell/jean_harlow5.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow5-thumb.jpg" width="171" height="228"></a>
			<a rel="shadowbox" href="george_hurrell/jean_harlow_01.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow_01-thumb.jpg" width="179" height="228"></a>
			
			<a rel="shadowbox" href="george_hurrell/jean_harlow_1.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow_1-thumb.jpg" width="175" height="224"></a>
			<a rel="shadowbox" href="george_hurrell/jean_harlow2.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow2-thumb.jpg" width="168" height="224"></a>
			<a rel="shadowbox" href="george_hurrell/jean_harlow_portrait.jpg"><img alt="Джордж Харрелл/Джин Харлоу" title="Джордж Харрелл/Джин Харлоу" class="picture_left" src="george_hurrell/jean_harlow_portrait-thumb.jpg" width="196" height="224"></a>
			<p>Собственную студию <strong>Джордж Харрелл</strong> открывает в 1932 году  на Сансет бульваре в Калифорнии, теперь он работает как фрилансер с самыми крупными студиями, включая MGM. Помимо основной работы, Джордж занимается различными проектами. К примеру, голливудская актриса Долорес Дель Рио заказала съемку ее родного города Мексики с высоты птичьего полета и Харрелл совместно с Панчо Барнс и колумнистом Тедом Куком совершает несколько полетов в течении 1935-1936 года.</p>
			<p>Далее по приглашению армии Воздушных сил США <strong>Джордж Харрелл</strong> снимал учебные фильмы и фотографировал военоначальников в Пентагоне. По возвращении Харрел обосновался в Нью-Йорке, где продолжал работать для рекламных компаний и домов моды.</p> 
			<p>К сожалению, после второй мировой войны студийная система разрушилась по причине развития телевидения и падения посещаемости кинотеатров. В промежуток с 1946 по 1956 год более чем вдвое выросло число независимых проектов, которые позволяли продюссерам зарабатывать намного больше на одном фильме, чем киностудии на нескольких проектах. Актеры были демистифицированы и низвергнуты в простые смертные, они стали такими как мы с вами, только красивее. Изменилась технология, фотографы приобретали 35-миллиметровые камеры и перестали ретушировать фотографии. «Когда мы перестали использовать камеры 8x10, гламур исчез». <strong>Джордж Харрелл</strong> считал очарование иллюзии свойственной фотографии. «Мы все огламурезованы, включая документальных фотографов, они облекают в гламур даже грязь и нищету. Мой друг Эдвард Уэстон тоже поступает так когда делает снимок скрюченного ствола дерева, главный вопрос на чем фокусироваться на грязи или на красоте».</p>
			<p>Начиная с 1965 года выставки Джорджа Харрелла проходят по всему мира, коллекционными изданиями печатаются его работы. За это время <strong>Джордж Харрелл</strong> продолжал снимать, добавляя к своему портфолио снимки таких звезд, как Лайза Минелли, Роберт Рэдфорд, Пол Ньюмен, Шэрон Стоун и Шерилин Фен. В последние годы жизни Харрелл работал с продюсером Гриром Кларком и режиссером Карлом Колби над фильмом, посвященном его творчеству "Легенды света".</p>
			<p>Работы Харрела это ода красоте и идеализации человека. сейчас, когда большинство этих лиц забыто, мы можем наиболее высоко оценить работу художника.</p>
			<a rel="shadowbox" href="george_hurrell/ava_gardner_with_venus_statue.jpg"><img alt="Джордж Харрелл/Ава Гарднер со статуей Венеры" title="Джордж Харрелл/Ава Гарднер со статуей Венеры" class="picture_left" src="george_hurrell/ava_gardner_with_venus_statue-thumb.jpg" width="175" height="238"></a>
			<a rel="shadowbox" href="george_hurrell/carole_lombard.jpg"><img alt="Джордж Харрелл/Кэрол Ломбард" title="Джордж Харрелл/Кэрол Ломбард" class="picture_left" src="george_hurrell/carole_lombard-thumb.jpg" width="179" height="238"></a>
			<a rel="shadowbox" href="george_hurrell/charles_boyer.jpg"><img alt="Джордж Харрелл/Шарль Буайе" title="Джордж Харрелл/Шарль Буайе" class="picture_left" src="george_hurrell/charles_boyer-thumb.jpg" width="185" height="238"></a>
			
			<a rel="shadowbox" href="george_hurrell/hedy_lamarr.jpg"><img alt="Джордж Харрелл/Хэди Ламарр" title="Джордж Харрелл/Хэди Ламарр" class="picture_left" src="george_hurrell/hedy_lamarr-thumb.jpg" width="181" height="248"></a>
			<a rel="shadowbox" href="george_hurrell/douglas_fairbanks.jpg"><img alt="Джордж Харрелл/Дуглас Фэйрбенкс младший" title="Джордж Харрелл/Дуглас Фэйрбенкс младший" class="picture_left" src="george_hurrell/douglas_fairbanks-thumb.jpg" width="174" height="248"></a>
			<a rel="shadowbox" href="george_hurrell/gene_tierney.jpg"><img alt="Джордж Харрелл/Джин Тирни" title="Джордж Харрелл/Джин Тирни" class="picture_left" src="george_hurrell/gene_tierney-thumb.jpg" width="179" height="248"></a>
			<p>Мистер <strong>Джорж Эдвард Харрелл</strong>, я преклоняюсь перед твоим искусством.</p>
			<br />
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова</p>
			<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
			<br />
			<br />
			
			<p>Понравилось? Нажмите!</p>
			<? include("../social.php"); ?>
			<br />
			<br />
			
			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<p>Читайте другие статьи о знаменитых фотографах:</p>
			<div id="border">
			<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
			<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
			<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнийший портретист ХХ века.</p>
			<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
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
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/george_hurrell.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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