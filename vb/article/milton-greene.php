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
	<title>Милтон Грин эксклюзивный фотограф Мэрилин Монро - первая часть - Виктория Балашова - креативный фотограф</title>
	<meta name="keywords" content="Милтон Грин,Мэрилин Монро,фотография,фотограф" />
	<meta name="description" content="Милтон Грин - фотограф Мэрилин Монро" />
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
	 	<h1>Милтон Грин - фотограф Мэрилин Монро</h1>
	 	<br />
	 	<h2>Часть первая</h2>
	 	<br />
	 	<a rel="shadowbox" href="milton-greene/milton-greene.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_article" src="milton-greene/milton-greene-thumb.jpg" width="200" height="173"></a>
	 	<q><i>I thought I'd seen them all; being in the business I'd seen so many models and actresses. But I'd never seen anyone with that tome of voice, that kindness, that real softness. If she saw a dead dog in the road, she'd cry. She was so supersensitive you had to watch your tone of voice all the time. Later I was to find out that she was schizoid - that she could be absolutely brilliant or absolutely kind, then, the total opposite.</i></q><br />
	 	<q><i>- Milton Greene</i></q>
	 	<br />
	 	<q><i>Я думал, что уже видел их всех; будучи в бизнесе я работал с таким количеством моделей и актрис. Но я никогда не видел никого с такой интонацией в голосе, добротой и мягкостью. Если она видела мертвую собаку на дороге, она рыдала. Она была настолько чувствительна ко всему, что нужно было постоянно следить за тоном голоса, чтобы не обидеть ее. Позже я обнаружил, что она шизойдная личность, она могла быть великодушной и доброй, а потом становилась полной противоположностью.</i></q>
	 	<br />
	 	<q><i>- Милтон Грин</i></q>
	 	<br />
	 	<br />
	 	
	 	<p><strong>Милтон Хоуторн Грингольц</strong> родился в Нью-Йорке в 1922 году. Уже в 14 лет он начал фотографировать и грезил о работе в журнале мод. Свое образование он получил в Институте Пратта в Бруклине, который до сих пор считается ведущим среди творческих учебных заведений в Америке. К сожалению, я не знаю каким образом и благодаря каким связям Милтону Грину удалось стать фотожурналистом и ассистентом Луизы Дал-Вулф, знаменитому модному фотографу журнала Harper’s Bazaar. Луиза Дал-Вулф работала в тандеме с редактором журнала Дианой Вриланд, также была известна тем, что открыла голливудскую звезду и будущую жену Хемфри Богарта - Лорен Бэколл, сфотографировав ее для обложки Harper’s Bazaar 1943 года. Будучи ассистентом  Дал-Вулф, Грин быстро совершенствовался в фотографии и к 23 годам его окрестили «Кудесником цветной фотографии».</p>
	 	
	 	<a rel="shadowbox" href="milton-greene/look/ava-gardner.jpg"><img alt="Милтон Грин - Ава Гарднер" title="Милтон Грин - Ава Гарднер" class="picture_left" src="milton-greene/look/ava-gardner-thumb.jpg" width="194" height="218"></a>
	 	<a rel="shadowbox" href="milton-greene/look/jean-patchett.jpg"><img alt="Милтон Грин - Джин Патчетт" title="Милтон Грин - Джин Патчетт" class="picture_left" src="milton-greene/look/jean-patchett-thumb.jpg" width="176" height="218"></a>
	 	<a rel="shadowbox" href="milton-greene/look/picture-for-life-magazine.jpg"><img alt="Милтон Грин - Довима" title="Милтон Грин - Довима" class="picture_left" src="milton-greene/look/picture-for-life-magazine-thumb.jpg" width="174" height="218"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene/look/romy-schnyder.jpg"><img alt="Милтон Грин - Роми Шнайдер" title="Милтон Грин - Роми Шнайдер" class="picture_left" src="milton-greene/look/romy-schnyder-thumb.jpg" width="171" height="243"></a>
	 	<a rel="shadowbox" href="milton-greene/look/loren-bacall-by-luise-dahl.jpg"><img alt="Милтон Грин - Луиза Дахл Лорен Бэколл" title="Милтон Грин - Луиза Дахл Лорен Бэколл" class="picture_left" src="milton-greene/look/loren-bacall-by-luise-dahl-thumb.jpg" width="176" height="243"></a>
	 	<a rel="shadowbox" href="milton-greene/look/picture-for-life-magazine-1.jpg"><img alt="Милтон Грин - Фото для журнала Life" title="Милтон Грин - Фото для журнала Life" class="picture_left" src="milton-greene/look/picture-for-life-magazine-1-thumb.jpg" width="195" height="243"></a>
	 	
	 	<p>В 50-х и 60-х большинство его работ было опубликовано в журналах Vogue, Look, Life и Harper's Bazaar. Свою известность он приобрел благодаря фотографиям знаменитостей, многие фотосессии из которых стали легендарными. Его задачей был индивидуальный подход к каждому и раскрытие внутренней сущности человека. Он не снимал «звездность» и кинозвезд, он снимал земных людей и это сделало его фотографии уникальными. Его стремление преобразовать видение в высокое искусство, его вера в красоту людей и естественное проявление личности, мы наблюдаем в каждой его работе. Но, как не странно, его музой стала только одна кинозвезда - Мэрилин Монро. Она была ему и другом и партнером по бизнесу. И именно благодаря ей, он полностью раскрыл свой творческий потенциал.</p>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-rancho.jpg"><img alt="Милтон Грин и Мерилин Монро на ранчо в Аризоне" title="Милтон Грин и Мерилин Монро на ранчо в Аризоне" class="picture_left" src="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-rancho-thumb.jpg" width="165" height="182"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-rancho-1.jpg"><img alt="Милтон Грин и Мерилин Монро на ранчо в Аризоне" title="Милтон Грин и Мерилин Монро на ранчо в Аризоне" class="picture_left" src="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-rancho-1-thumb.jpg" width="158" height="182"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-greene-is-making-picture-of-marilyn.jpg"><img alt="Милтон Грин фотографирует Мерилин Монро" title="Милтон Грин фотографирует Мерилин Монро" class="picture_left" src="milton-greene/monroe-greene/milton-greene-is-making-picture-of-marilyn-thumb.jpg" width="219" height="182"></a>
	 	<p>Мэрилин Монро и Милтон Грин впервые встретились в студии журнала Life, куда в 1949 году Мэрилин направила киностудия 20-й век Фокс. «Мне показали папку с самыми красивыми снимками, которые мне доводилось видеть в своей жизни. Я только ахнула и спросила: «Господи, кто же их сделал?». После того, как ее представили Грину, Мэрилин  Монро сказала:  «Но Вы же еще мальчик!», на что Милтон, не растерявшись, ответил: «Что ж, а вы еще девочка!». Двадцатисемилетний и разведенный на тот момент Милтон Грин был невысоким, темноволосым и эмоциональным мужчиной, который с ходу произвел на Мэрилин неизгладимое впечатление. Он говорил о «написании картин с помощью фотоаппарата», о красочных и фантастических идеях воспевания женщин на фотоснимках. Будучи большой почитательницей фотографии и прирожденной моделью, Мэрилин Монро не отступала от него ни на шаг. Последующие 10 дней они провели в гостинице Шато-Мармон на бульваре Сансет, а 14 сентября 1949 года Милтон Грин возвратился в Нью-Йорк, не сделав ни единого снимка Мэрилин Монро. По свидетельству актрисы это была единственная измена, которую она позволила себе  по отношению к Джонни Хайду (менеджеру Монро, с которым она на тот момент сожительствовала).</p>
	 	<p>В следующий раз они встретились уже четыре года спустя, Милтон Грин приехал в октябре 1953 года в Нью-Йорк со своей женой Эми. За это время он поменял работу в журнале Life на Look и превратился в одного из известных и пользующихся популярностью фотографов. Тогда же он сделал 9 снимков Мэрилин для журнала Look, которые были опубликованы 17 ноября 1953 года.</p>
	 	<a rel="shadowbox" href="milton-greene/mandalina/portrait-of-marilyn.jpg"><img alt="Милтон Грин - Портрет Мерилин Монро" title="Милтон Грин - Портрет Мерилин Монро" class="picture_left" src="milton-greene/mandalina/portrait-of-marilyn-thumb.jpg" width="159" height="219"></a>
	 	<a rel="shadowbox" href="milton-greene/mandalina/marilyn-monroe-with-mandalina.jpg"><img alt="Милтон Грин - Мерилин Монро с мандалиной" title="Милтон Грин - Мерилин Монро с мандалиной" class="picture_left" src="milton-greene/mandalina/marilyn-monroe-with-mandalina-thumb.jpg" width="208" height="219"></a>
	 	<a rel="shadowbox" href="milton-greene/mandalina/marilyn-with-mandalina.jpg"><img alt="Милтон Грин - Мерилин Монро с мандалиной" title="Милтон Грин - Мерилин Монро с мандалиной" class="picture_left" src="milton-greene/mandalina/marilyn-with-mandalina-thumb.jpg" width="176" height="219"></a>

	 	<a rel="shadowbox" href="milton-greene/mandalina/marilyn-monroe-and-mandalina.jpg"><img alt="Милтон Грин - Мерилин Монро с мандалиной" title="Милтон Грин - Мерилин Монро с мандалиной" class="picture_left" src="milton-greene/mandalina/marilyn-monroe-and-mandalina-thumb.jpg" width="183" height="199"></a>
	 	<a rel="shadowbox" href="milton-greene/mandalina/marilyn-monroe-milton-greene.jpg"><img alt="Милтон Грин - Мерилин Монро" title="Милтон Грин - Мерилин Монро" class="picture_left" src="milton-greene/mandalina/marilyn-monroe-milton-greene-thumb.jpg" width="210" height="199"></a>
	 	<a rel="shadowbox" href="milton-greene/mandalina/marilyn-with-cigarette.jpg"><img alt="Милтон Грин - Мерилин Монро с сигаретой" title="Милтон Грин - Мерилин Монро с сигаретой" class="picture_left" src="milton-greene/mandalina/marilyn-with-cigarette-thumb.jpg" width="150" height="199"></a>
	 	
	 	<p>1954 год стал временем перемен для Мэрилин Монро. И прежде всего она выступила против своей киностудии. После того как за неявку на съемочную площадку во время съёмок фильма «Розовые чулки» 4 января 1954 года киностудия XX век Фокс приостановила действие ее контракта, Мэрилин сделала заявление для прессы. Ее главными требованиями было повышение гонорара и возможность выбирать сценарий будущей картины. Милтон Грин считал, что переезд Монро из Голливуда в Нью-Йорк станет для нее новым поворотом в судьбе. Начиная с 1947 года Мэрилин Монро была собственностью «Фокса»  и теперь стремилась прожить очередные семь лет контакта своим умом. Милтон Грин привлекал к себе актрису не только тем, что чудесно фотографировал ее, но и тем, что не был деловым человеком, бизнесменом.</p>
	 	<p>Милтон Грин осознавал возможность выйти из привычного амплуа, организовывая компанию "Мэрилин Монро Продакшнс", он хотел стать продюсером, а из Мэрилин сделать независимую актрису. В это время состоялась самая известная фотосессия Мэрилин с балетным платьем на Ленсингтон Авеню в Нью-Йорке. Надо сказать, что балетное платье, заказанное Грином, не подошло Мэрилин по размеру, и она просто держала его в руках.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/balerina-sitting.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/balerina-sitting-thumb.jpg" width="172" height="191"></a>
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/marilyn-monroe.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/marilyn-monroe-thumb.jpg" width="190" height="191"></a>
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe1.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe1-thumb.jpg" width="179" height="191"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/balerina-sitting1.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/balerina-sitting1-thumb.jpg" width="184" height="202"></a>
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe-thumb.jpg" width="177" height="202"></a>
	 	<a rel="shadowbox" href="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe-2.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/balerina-sitting/balerina-sitting-marilyn-monroe-2-thumb.jpg" width="182" height="202"></a>
	 	
	 	<p>В 1956 году журнал Тайм  назвал Мэрилин Монро настоящей деловой женщиной, детально описывая условия ее нового контракта с киностудией XX век Фокс. Она прибыла в Голливуд для начала работы над кинофильмом "Автобусная остановка". Все финансирование картин шло "из кармана Мэрилин", как тогда говорила Эмми Грин: "у нее был дар собирать вокруг себя нахлебников". Милтон Грин вместе со своими адвокатами занялись производственной частью работы. На Милтоне лежала ответственность за поиски богатых спонсоров, но все его усилия оказались пустой тратой времени и сил. Ежедневно агенты по связям с общественностью сортировали приглашения для Монро участвовать на том или ином мероприятии, снятся для разных журналов, посетить благотворительный ужин, она выбирала актерские курсы и посещение  бродвейских спектаклей. Таким образом, единственные, кто фотографировал ее в течении этих двух лет был Милтон Грин и Ева Арнольд. Мэрилин Монро обладала достаточно большим опытом, чтобы знать, насколько ей необходимы высококвалифицированные фотографы, которые воздавали ей дань с помощью изображений, не только поддерживающих мифы и иллюзий, но и подталкивающих людей отправиться в кино.</p>

	 	<a rel="shadowbox" href="milton-greene/monroe-greene/marilyn-monroe-and-milton-greene.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/monroe-greene/marilyn-monroe-and-milton-greene-thumb.jpg" width="194" height="148"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-the-airport.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-the-airport-thumb.jpg" width="128" height="148"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-marilyn-in-the-airport.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/monroe-greene/milton-marilyn-in-the-airport-thumb.jpg" width="221" height="148"></a>
	 	
	 	<p>1955 год для Мэрилин Монро явившийся по многим соображениям годом ценных открытий и полезной учебы, оказался  для нее также периодом, когда она глотала слишком много таблеток и пила много шампанского. Брат Милтона Грина был врачом и снабжал любыми лекарствами  Милтона и Мэрилин. Кроме того, Мэрилин все более подозрительным взглядом смотрела на Гринов. В процессе принятия решения она чувствовала себя на вторых ролях и видела, что ее мнением пренебрегают, а в личном плане устала от одиночества. Все свои горести она изливала семейству Ли Страсберга. В начале лета журналистка из нью-йоркской прессы отметила, что место Милтона Грина как наставника Мэрилин Монро занял Ли Страсберг. Это стало причиной неслыханно напряженной атмосферы на последующих заседаниях в ММП. 1 июля Милтон попросил Мэрилин поехать с ним и Эмми в Италию, в ответ, Мэрилин приняла приглашение Ли Страсберга провести уик-энд с его семьей  недалеко от Манхеттена.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/amy-greene-paula-strasberg-marilyn-monroe.jpg"><img alt="Милтон Грин - Эми Грин, Паула Страсберг и ММ" title="Милтон Грин - Эми Грин, Паула Страсберг и ММ" class="picture_left" src="milton-greene/monroe-greene/amy-greene-paula-strasberg-marilyn-monroe-thumb.jpg" width="225" height="175"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/joshua-greene-marilyn-monroe.jpg"><img alt="Милтон Грин - ММ и Джошуа Грин" title="Милтон Грин - ММ и Джошуа Грин" class="picture_left" src="milton-greene/monroe-greene/joshua-greene-marilyn-monroe-thumb.jpg" width="144" height="175"></a>
	 	<a rel="shadowbox" href="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-waterpool.jpg"><img alt="Милтон Грин и ММ в бассеине" title="Милтон Грин и ММ в бассеине" class="picture_left" src="milton-greene/monroe-greene/milton-greene-marilyn-monroe-in-waterpool-thumb.jpg" width="173" height="175"></a>
	 	
	 	<p>Снимки, которые сделал Милтон Грин в 1954 и 1955 годах, принадлежат к числу наиболее искусительных и эротичных в истории фотографии. На некоторых их них, которые сделаны с рассеивающим фильтром и называются «Сидящая в черном», Мэрилин напоминает женщину-вамп – на ней только сетчатые чулки, что то вроде корсажа и шляпа, а ее поза и взгляд поразительно естественны.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting-thumb.jpg" width="166" height="204"></a>
	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting3.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting3-thumb.jpg" width="206" height="204"></a>
	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting4.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting4-thumb.jpg" width="170" height="204"></a>

	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting1.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting1-thumb.jpg" width="225" height="212"></a>
	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting2.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting2-thumb.jpg" width="158" height="212"></a>
	 	<a rel="shadowbox" href="milton-greene/black-sitting/black-sitting-milton-greene.jpg"><img alt="Милтон Грин" title="Милтон Грин" class="picture_left" src="milton-greene/black-sitting/black-sitting-milton-greene-thumb.jpg" width="159" height="212"></a>
	 	
	 	<p><a href="http://victoriabalashova.com/article/milton-greene-2.php">Продолжение &gt;&gt;&gt;</a></p>
	 	
	 	
	 	
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
		<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - самый знаменитый фотограф киностудии MGM.</p>
		<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
		<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
		<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнийший портретист ХХ века.</p>
		<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуализма и самый высокооплачиваемый фотограф.</p>
		<p><a href="clarence-bull.php" title="Кларенс Синклер Булл">Кларенс Синклер Булл</a> - эксклюзивный фотограф только одной звезды, легендарной Греты Гарбо.</p>
		</div>
		<!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<br />
		<p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
		<br />
		<br />
			
        <!-- FACEBOOK каменты-->
        <p style="font-size:1.3em;">Комментарии Facebook:</p>
        <div class="fb-comments" data-href="http://victoriabalashova.com/article/milton-greene.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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