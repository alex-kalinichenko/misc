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
	<title>Милтон Грин эксклюзивный фотограф Мэрилин Монро - вторая часть - Виктория Балашова - креативный фотограф</title>
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
	 	<h2>Часть вторая</h2>
	 	<br />
	 	<p>Первая часть <a href="http://victoriabalashova.com/article/milton-greene.php">здесь</a></p>
	 	<p>Годами Эмми Грин опровергала слухи о любовной связи <strong>Мэрилин Монро</strong> и своего мужа <strong>Милтона Грина</strong>. Однако она была вынуждена признать, что Мэрилин разбивала супружеские союзы, сама того не желая. Когда фирма Монро-Грина перестала функционировать Мэрилин довольно открыто рассказывала своему агенту по связям с общественностью Руперту Алану о романе с Милтоном, который продолжался пока существовала ММП (Мэрилин Монро Продакшнс). Еще со времен Андре де Дьенеса (фотограф снимавший ММ еще в начале карьеры) безбоязненный и настойчиво убедительный Милтон Грин оказывал на Мэрилин  наиболее сильное и необузданное эротическое воздействие.</p>

	 	
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/marilyn-monroe-for-life.jpg"><img alt="Милтон Грин - Мэрилин Монро для журнала Лайф" title="Милтон Грин - Мэрилин Монро для журнала Лайф" class="picture_left" src="milton-greene-2/other-photos/marilyn-monroe-for-life-thumb.jpg" width="177" height="178"></a>
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/in-black-marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро в чёрном" title="Милтон Грин - Мэрилин Монро в чёрном" class="picture_left" src="milton-greene-2/other-photos/in-black-marilyn-monroe-thumb.jpg" width="237" height="178"></a>
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/red-sweater-marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро в красном свитере" title="Милтон Грин - Мэрилин Монро в красном свитере" class="picture_left" src="milton-greene-2/other-photos/red-sweater-marilyn-monroe-thumb.jpg" width="129" height="178"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/marilyn-monroe-milton-greene.jpg"><img alt="Милтон Грин - Мэрилин Монро" title="Милтон Грин - Мэрилин Монро" class="picture_left" src="milton-greene-2/other-photos/marilyn-monroe-milton-greene-thumb.jpg" width="189" height="190"></a>
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/in-house-of-josef-shenk.jpg"><img alt="Милтон Грин - Мэрилин Монро в доме Джосефа Шенка" title="Милтон Грин - Мэрилин Монро в доме Джозефа Шенка" class="picture_left" src="milton-greene-2/other-photos/in-house-of-josef-shenk-thumb.jpg" width="182" height="190"></a>
	 	<a rel="shadowbox" href="milton-greene-2/other-photos/marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро" title="Милтон Грин - Мэрилин Монро" class="picture_left" src="milton-greene-2/other-photos/marilyn-monroe-thumb.jpg" width="171" height="190"></a>
	 	
	 	<p>Во время съемок фильма "Автобусная остановка" Милтон решил никого не допускать к Мэрилин, что порождало огромные проблемы для журналистов и репортеров. 18 марта Милтон и Мэрилин громко и яростно спорили о том, должна ли компания ММП платить Ли Страсбергу за пребывание на съемочной площадке. Сразу после окончания дискуссии актрису вызвали для съемки одной из сцен, и вдруг она упала с расположенной на высоте почти двух метров платформы. Ошеломленная и впавшая на несколько мгновений в такой сильный шок, что не могла кричать от боли, она лежала неподалеку от Милтона, который как обычно, без конца фотографировал каждую снимаемую сцену. «Прежде всего я фотограф и только потом продюссер» - ответил Милтон Грин Джорджу Аксельроду, обвинившему Грина, что тот не бросился на помощь Мэрилин.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/bus-stop-milton-greene.jpg"><img alt="Милтон Грин - Мэрилин Монро - Автобусная остановка" title="Милтон Грин - Мэрилин Монро - Автобусная остановка" class="picture_left" src="milton-greene-2/bus-stop/bus-stop-milton-greene-thumb.jpg" width="192" height="222"></a>
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/marilyn-monroe1.jpg"><img alt="Милтон Грин - Мэрилин Монро - Автобусная остановка" title="Милтон Грин - Мэрилин Монро - Автобусная остановка" class="picture_left" src="milton-greene-2/bus-stop/marilyn-monroe1-thumb.jpg" width="198" height="222"></a>
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/bus-stop-filmstill.jpg"><img alt="Милтон Грин - Мэрилин Монро - Автобусная остановка" title="Милтон Грин - Мэрилин Монро - Автобусная остановка" class="picture_left" src="milton-greene-2/bus-stop/bus-stop-filmstill-thumb.jpg" width="153" height="222"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/marilyn-monroe2.jpg"><img alt="Милтон Грин - Мэрилин Монро - Автобусная остановка" title="Милтон Грин - Мэрилин Монро - Автобусная остановка" class="picture_left" src="milton-greene-2/bus-stop/marilyn-monroe2-thumb.jpg" width="176" height="196"></a>
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро - Автобусная остановка" title="Милтон Грин - Мэрилин Монро - Автобусная остановка" class="picture_left" src="milton-greene-2/bus-stop/marilyn-monroe-thumb.jpg" width="169" height="196"></a>
	 	<a rel="shadowbox" href="milton-greene-2/bus-stop/joshua-greene-marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро с Джошуа Грин" title="Милтон Грин - Мэрилин Монро с Джошуа Грин" class="picture_left" src="milton-greene-2/bus-stop/joshua-greene-marilyn-monroe-thumb.jpg" width="197" height="196"></a>
	 	<p>После окончания работы над фильмом "Автобусная остановка", Мэрилин приступила к работе над лентой "Принц и танцовщица". Как раз в это же время Артур Миллер развелся с женой и сделал Мэрилин предложение. До предела ревнивый и недоверчивый  Милтон Грин подозревал, что любовь Артура может иметь еще и финансовую окраску: в конце концов, драматургу приходилось платить гигантские алименты, а доходы у него были совсем небольшие. Но это были не те дела, которые хотела обсуждать Монро и начиная с указанного момента они стали подходить друг к другу с недоверием, а  Мэрилин оказалась в самом центре острой схватки за перенятие контроля над киностудией ММП. Артур Миллер должен был платить ежегодно 16 тысяч долларов на содержание детей, бывшая жена получала 40% от его доходов. До конца года студия ММП пыталась найти способ увеличить капитал Артура и не допустить его к участию в прибылях. Это было возможно, только если Миллер начал бы писать сценарии для картин с Монро, но этого не случилось. Одним из механизмов, позволявших Милтону Грину манипулировать Мэрилин, было постоянное предоставление ей медикаментозных средств, по мнению его знакомых он умел быть отрицательным персонажем, который сделает всё, лишь бы осуществить свой план. Милтон Грин подписывая договор с Лоуренсом Оливье, исполнителем главной роли в фильме Принц и танцовщица, требовал для себя статус исполнительного директора-продюссера, в дальнейшем решением этого вопроса занялся Джек Уорнер (владелец кинокомпании Уорнер Бразерс). В титрах первых копий фамилия Грина фигурировала, но потом ее каким-то таинственным образом убрали.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/milton-greene-marilyn-monroe.jpg"><img alt="Милтон Грин - Принц и танцовщица" title="Милтон Грин - Принц и танцовщица" class="picture_left" src="milton-greene-2/prince-and-showgirl/milton-greene-marilyn-monroe-thumb.jpg" width="218" height="173"></a>
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/marilyn-monroe-as-elsie-marina.jpg"><img alt="Милтон Грин - Мэрилин Монро в роли Элси Марины" title="Милтон Грин - Мэрилин Монро в роли Элси Марины" class="picture_left" src="milton-greene-2/prince-and-showgirl/marilyn-monroe-as-elsie-marina-thumb.jpg" width="170" height="173"></a>
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/123.jpg"><img alt="Милтон Грин - Реклама фильма Принц и танцовщица" title="Милтон Грин - Реклама фильма Принц и танцовщица" class="picture_left" src="milton-greene-2/prince-and-showgirl/123-thumb.jpg" width="153" height="173"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/laurence-olivier-marilyn-monroe.jpg"><img alt="Милтон Грин - Мэрилин Монро и Лоуренс Оливье" title="Милтон Грин - Мэрилин Монро и Лоуренс Оливье" class="picture_left" src="milton-greene-2/prince-and-showgirl/laurence-olivier-marilyn-monroe-thumb.jpg" width="189" height="195"></a>
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/marilyn-monroe-prince-and-showgirl1.jpg"><img alt="Милтон Грин - Принц и танцовщица" title="Милтон Грин - Принц и танцовщица" class="picture_left" src="milton-greene-2/prince-and-showgirl/marilyn-monroe-prince-and-showgirl1-thumb.jpg" width="176" height="195"></a>
	 	<a rel="shadowbox" href="milton-greene-2/prince-and-showgirl/marilyn-monroe-prince-and-showgirl.jpg"><img alt="Милтон Грин - Принц и танцовщица" title="Милтон Грин - Принц и танцовщица" class="picture_left" src="milton-greene-2/prince-and-showgirl/marilyn-monroe-prince-and-showgirl-thumb.jpg" width="178" height="195"></a>
	 	
	 	<p>Милтон Грин не проявлял энтузиазма,  в поддержке стараний Артура как-то внедрится в ММП, так что Артур Миллер использовал напряженность, сопровождавшую отношения между Мэрилин и Милтоном, с целью добиться большего контроля над ММП.</p>
	 	<p>Делание кинематографической карьеры, никогда не было в состоянии удовлетворить эмоциональные потребности Мэрилин. Ее врожденная подозрительность по поводу лояльности окружающих вынуждала ее часто менять агентов, преподавателей - не говоря уже о мужьях. В жизни Мэрилин не было ничего прочного и постоянного, она нигде не пускала корней и сейчас у нее тоже не было никого, кому она могла бы полностью доверять. Ситуация менялась быстро, Артур уехал погостить к друзьям в Париж. Тем временем Мэрилин была убеждена, что Милтон Грин скупает английский антиквариат за счет ММП и пересылает его морем в свой коннектикутский дом. Похоже, буквально все тратили деньги актрисы и, прежде всего, Ли Страсберг, который ежедневно звонил за счет Мэрилин, напоминая, что единственный шанс благополучного завершения съемок - это возобновление сотрудничества с Паулой, его женой.</p>
	 	<p>Тем временем деловые и личные отношения между Милтоном и Мэрилин быстро ухудшались. Каждый из них, взаимно обвинял другого в тех трудностях, которые возникли в процессе реализации "Принца и танцовщицы", с подозрением относился к честности и открытости партнера. Кроме того, не утихали споры о планах на будущее и возрастающее влияние Артура. В 1957 году сложилась новая структура взаимоотношений. Мэрилин полагала, что ради  блага Артура она должна порвать со всем, что у того ассоциируется с Милтоном - это значит с ММП, с некоторыми формами светской жизни, с определенными категориями кинофильмов. Если говорить про самого Милтона Грина, то каждый, кто видел его за работой, знал: в нем имеется нечто от гения. Но одновременно он являлся также человеком, которому было присуще ужасающее отсутствие умеренности, из-за чего он разрушил и погубил себя. Талант и способности Грина значительно пострадали, с тех пор как он стал принимать дилантин - лекарство, назначавшееся эпилептикам, которым он пользовался не по соображению здоровья, а потому что оно повсеместно считалось средством, повышающим энергетику организма, за счет стимулирования электрических импульсов в мозгу. Дилантин должен как-то нивелировать последствия воздействия нембутала и других барбитуратов, равно как и транквилизаторов. Благодаря ему после искусственно вызванного сна у человека, на следующий день столь же искусственно добивались оживленного состояния. В результате прием этого лекарства становился для Грина труднопреодолимой вредной привычкой.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/marilyn-and-arthur-kissing.jpg"><img alt="Мэрилин Монро и Артур Миллер целуются" title="Мэрилин Монро и Артур Миллер целуются" class="picture_left" src="milton-greene-2/monroe-miller-wedding/marilyn-and-arthur-kissing-thumb.jpg" width="175" height="196"></a>
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/marilyn-monroe-arthur-miller.jpg"><img alt="Свадьба Мэрилин Монро и Артура Миллера" title="Свадьба Мэрилин Монро и Артура Миллера" class="picture_left" src="milton-greene-2/monroe-miller-wedding/marilyn-monroe-arthur-miller-thumb.jpg" width="179" height="196"></a>
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/marilyn-monroe-arthur-miller-wedding.jpg"><img alt="Свадьба Мэрилин Монро и Артура Миллера" title="Свадьба Мэрилин Монро и Артура Миллера" class="picture_left" src="milton-greene-2/monroe-miller-wedding/marilyn-monroe-arthur-miller-wedding-thumb.jpg" width="190" height="196"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/wedding-cake.jpg"><img alt="Свадьба Мэрилин Монро и Артура Миллера - свадебный торт" title="Свадьба Мэрилин Монро и Артура Миллера - свадебный торт" class="picture_left" src="milton-greene-2/monroe-miller-wedding/wedding-cake-thumb.jpg" width="176" height="123"></a>
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/wedding-day.jpg"><img alt="Свадьба Мэрилин Монро и Артура Миллера" title="Свадьба Мэрилин Монро и Артура Миллера" class="picture_left" src="milton-greene-2/monroe-miller-wedding/wedding-day-thumb.jpg" width="181" height="123"></a>
	 	<a rel="shadowbox" href="milton-greene-2/monroe-miller-wedding/wedding-of-arthur-and-marilyn.jpg"><img alt="Свадьба Мэрилин Монро и Артура Миллера" title="Свадьба Мэрилин Монро и Артура Миллера" class="picture_left" src="milton-greene-2/monroe-miller-wedding/wedding-of-arthur-and-marilyn-thumb.jpg" width="184" height="123"></a>
	 	
	 	<p>Мэрилин же нацелилась порвать дружеские и партнерские отношения с Милтоном. Просматривая сырую копию фильма «Принц и танцовщица» в Лондоне Мэрилин заявила, что в тайне от всех Грин перемонтировал картину. Вначале она заявила, что Милтон должен предотвратить возможность плохого монтажа и озвучания картины, тесно сотрудничая с Оливье. А после, что указание фамилии Грина в фильме не было ни согласовано с ней, ни заслужено им. 11 апреля Мэрилин Монро, сделала заявление для Нью-Йорк Таймс, о том, что Милтон Грин плохо управлял компанией ММП, что он предоставил ей ложную информацию по поводу отдельных контрактных договоренностей и что он уволен с поста вице-президента компании. Публичный ответ Милтона Грина был полон достоинства и выдержан в тоне сожаления: «Мэрилин не хочет реализовать задачи, которые мы перед собой поставили. Последние полтора года я посвятил исключительно ей. Практически я отказался от фотографирования». Было очевидно, что актрису желавшую начать новую жизнь и карьеру рядом с Артуром Миллером, убедили, что Милтон Грин ей уже не нужен. Эмми Грин потом вспоминала слова Мэрилин: «Артур лишает меня человека, которому я всегда доверяла  - Милтона», - а у нее нет сил противостоять этому. По странной прихоти судьбы Мэрилин Монро очутилась в той же самой ситуации. Ранее она позволила Милтону назначить своих друзей на посты ММП. Сейчас же согласилась, чтобы Артур проделал тоже самое, только на этот раз друзья были действительно не компетентны.</p>
	 	<p>В конце января 1957 года у Милтона и Мэрилин состоялась последняя фотосессия, она называлась «Сидящая в красном». Несмотря на отсутствие взаимопонимания она все-таки пришла к нему в студию. Милтон использовал в качестве фона огромный кусок черного бархата, Мэрилин была одета в платье ярко-красного цвета и черный бархат должен был по задумке Милтона придать фотографиям немного драматический характер. Результатом стали провокационные, игривые, невинные снимки, без намека на произошедшую ссору. А на фотографии, где она лежит в странной позе, отвернувшись от объектива, она как будто утопает в бесконечности черного.</p>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting-thumb.jpg" width="172" height="192"></a>
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting1.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting1-thumb.jpg" width="192" height="192"></a>
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting2.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting2-thumb.jpg" width="176" height="192"></a>
	 	
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting4.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting4-thumb.jpg" width="187" height="198"></a>
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting3.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting3-thumb.jpg" width="176" height="198"></a>
	 	<a rel="shadowbox" href="milton-greene-2/red-sitting/red-sitting5.jpg"><img alt="Милтон Грин - Мэрилин Монро - Сидящяя в красном" title="Милтон Грин - Мэрилин Монро - Сидящяя в красном" class="picture_left" src="milton-greene-2/red-sitting/red-sitting5-thumb.jpg" width="179" height="198"></a>
	 	
	 	<p>Мэрилин Монро и Милтон Грин никогда больше не встретились. Их адвокаты воевали больше года, пока Мэрилин не выкупила его долю за 100 000 долларов – что явилось всем жалованием Грина за 2 года работы. Он снова занялся фотографией, однако пережитое разочарование болезненно отразилось на нем, в последующие годы он больше и больше становился зависимым от алкоголя и наркотиков. Тем не менее, в своих публичных высказываниях Милтон всегда проявлял к Мэрилин максимальную вежливость: «Она была сверхвпечатлительна и очень предана своей работе – независимо от того, отдавали себе в этом отчет окружающие или нет. Я всегда верил в нее. Это была чудесная, любящая и фантастическая личность, которую понимали совсем не многие».</p>

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
        <div class="fb-comments" data-href="http://victoriabalashova.com/article/milton-greene-2.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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