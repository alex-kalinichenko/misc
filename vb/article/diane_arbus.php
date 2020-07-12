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
	<title>Диана Арбус - креативный фотограф Виктория Балашова</title>
	<meta name="keywords" content="фотограф,неординарная,таинственная,сюрреалистичная,диана арбус,стюарт стерн,аллан,теркель,graflex,алан арбус,vogue,harper's bazaar,отклонение,урод,красота,уродство,легенда,кинозвезда,депрессия,призвание,счастье,страсть,лизетт модел,зернистость,двухцветность,совершенство,музей гуггенхайм,американский опыт,американские обряды,обычаи,мэри селлерс,карлотта маршалл,сьюзен зонтаг,норман кингсли мейлер,сандра филипс,музей современного искусства,мех,мех воображаемый портрет дианы арбус" />
	<meta name="description" content="Неординарная, таинственная и сюрреалистичная Диана Арбус - фотограф, снимавшая уродцев." />
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
		    <h1>Диана Арбус</h1>
			<br />
			<br />
			<a rel="shadowbox" href="diane_arbus/diane_arbus.jpg"><img alt="Портрет Дианы Арбус" title="Портрет Дианы Арбус" class="picture_article" src="diane_arbus/diane_arbus-thumb.jpg" width="240" height="232"></a>
			<p>Пожалуй, из всех женщин-фотографов самой неординарной, таинственной и сюрреалистичной я назвала бы <strong>Диану Арбус</strong>. Свое мировоззрение она однажды сформулировала так: «Было и есть бесконечное количество вещей на земле. Все индивидуальности разные, все хотят разного, все знают разные вещи, все выглядят различно. Это то, что я люблю — различия, уникальность каждого и важность жизни. Я вижу что-то, что кажется чудесным, я вижу божественность ординарных вещей…» Еще учась в филдстоновской школе этической культуры в Ривердейле, <strong>Диана Арбус</strong> выделялась своими произведениями.  «Она смотрела на модель и рисовала то, чего никто больше не видел», – вспоминает ее одноклассник, сценарист Стюарт Стерн. Однако она не доверяла кисти как инструменту. «Закончив картину, она показывала её, и все говорили: О, Диана, это изумительно, изумительно», – вспоминает ее будущий муж Аллан. Журналисту Теркелю Диана призналась, что «от подобных похвал меня трясло». И к тому времени, когда отец нанял иллюстратора моды из Russek's, чтобы тот давал ей уроки, Диана уже потеряла интерес к живописи.</p>
			<a rel="shadowbox" href="diane_arbus/diana_arbus_child_with_a_toy.jpg"><img alt="Диана Арбус/Ребёнок с игрушечной гранатой" title="Диана Арбус/Ребёнок с игрушечной гранатой" class="picture_right" src="diane_arbus/diana_arbus_child_with_a_toy-thumb.jpg" width="250" height="251"></a>
			<p><strong>Диана Арбус</strong> намеренно уходила от того, что давалось ей легко, и было для нее слишком просто. «Мне казалось, что если я в чем-то очень хороша – этим заниматься не стоит, и я не чувствовала никакого смысла в стремлении этим заниматься», – говорила она. С живописью было покончено, ее - дочь богатого промышленника, ждало банальное будущее: дети, семья, ненавязчивый быт, респектабельное общество, необременительные светские обязанности. Встретив своего будущего мужа,  <strong>Диана Арбус</strong> обрела увлечение, которое перерастет в смысл ее существования и вечный поиск, а разорвав семейные узы - свободу творить и двигаться в выбранном направлении. И тем не менее этот опыт совместной жизни не пройдет даром, в 1941 году ее муж Алан Арбус подарит ей камеру Graflex, уменьшенную версию классической репортерской фотокамеры и сам будет обучать ее основам фотографии, а ее отец станет их первым клиентом, наняв супругов для съемки рекламы меховых изделий. Технической частью в студии занимался Алан в то время как Диана была его идейным вдохновителем. Через несколько лет супруги уже будут снимать для Vogue и Harper’s Bazaar, но это не то, чего хотела Диана, ее поиски только начинаются. Позже Аллан вспоминал: «Я всегда чувствовал, что именно наше расставание сделало её фотографом. Видимо, я не соответствовал её стремлениям. Она была готова идти в бары и в дома к людям. Меня это приводило в ужас». И Диана с головой окунулась в реальность именно в ее понимании этого слова. На смену спокойной работе в студии с бесшовно-белым миром модной фотографии под контролем мужа, пришел абсолютно иной спектр ее фотографических интересов. Она выискивала на улицах тех, на кого тогдашнее общество предпочитало не смотреть, не обращать внимание.</p>
			<p>В 2006 году в американский прокат вышел фильм <strong>"Мех: Воображаемый портрет Дианы Арбус"</strong>. "Мех" представляет собой метафорический взгляд, на предположение о том, что могло заставить Диану Арбус оставить свою семью ради поиска себя в творчестве. <strong>"Мех: Воображаемый портрет Дианы Арбус"</strong>, по словам режиссёра Патриции Босуорт, не фокусируется на подробностях жизни Арбюс, а ставит целью освещение самого важного момента её биографии — на принятии решения уйти от съёмок со своим мужем, чтобы фотографировать самой.</p>
			<a rel="shadowbox" href="diane_arbus/jewish_giant_at_home.jpg"><img alt="Диана Арбус/Еврейский великан дома" title="Диана Арбус/Еврейский великан дома" class="picture_left" src="diane_arbus/jewish_giant_at_home-thumb.jpg" width="275" height="286"></a>
			<p><strong>Диана Арбус</strong> могла превращать в достоинство то, что считалось отклонением. Зачастую Диана поддерживала связь со своими «моделями» на протяжении долгих лет. Фотограф искала их среди представителей самых разных слоев общества, как правило, людей физически или морально непохожих на других. «Я часто фотографировала уродов», – вспоминала она, – «Это – мои первые фотографические опыты и они были очень волнительны». И далее: «Большинство людей проходят через жизнь, страшась травматического опыта. А уроды родились с травмой. Они уже прошли жизненную проверку. Они – аристократы». <strong>Диана Арбус</strong> очень боялась, что ее запомнят как фотографа, предпочитающего красоте уродство, так и случилось, это то, что отличало ее от других, поиск красоты там, где другие ее не видели. Журналисту Newsweek она сказала: «В уродцах есть нечто сродни легенде. Они как сказочные персонажи, которые останавливают тебя и требуют отгадать загадку. Я скорее стану поклонницей уродцев, чем кинозвезд, потому что кинозвездам их поклонники наскучили, а уродцы испытывают благодарность к тем, кто обращает на них искреннее внимание».</p>
			<a rel="shadowbox" href="diane_arbus/diana_arbus9.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana_arbus9-thumb.jpg" width="270" height="271"></a>
			<a rel="shadowbox" href="diane_arbus/masked_woman_in_a_wheelchair.jpg"><img alt="Диана Арбус" title="Диана Арбус/Женщина в маске на инвалидной коляске" class="picture_right" src="diane_arbus/masked_woman_in_a_wheelchair-thumb.jpg" width="270" height="270"></a>
			
			<a rel="shadowbox" href="diane_arbus/mexican_dwarf.jpg"><img alt="Диана Арбус" title="Диана Арбус/Мексиканский карлик" class="picture_right" src="diane_arbus/mexican_dwarf-thumb.jpg" width="270" height="270"></a>
			<br /><br />
			<p><strong>Диана Арбус</strong> искала себя в учебе, ей необходимо было открыть свой стиль, но фотокурсы, которые она посещала, не давали результатов, будучи человеком ранимым она впадала в депрессию. Еще четыре тяжелых и невыносимых по своей однотонности скучных года Диана делала выбор между долгом перед семьей и своим призванием, между спокойным обывательским счастьем и безумной, сумасшедшей страстью, которую большинство назовет болезнью, долгом перед общественным положением или перед самой собой, своим даром и талантом, который, к слову, понять дано было не каждому.</p>
			<p>В 1956 году в жизни Дианы Арбус произошла судьбоносная встреча с <strong>Лизетт Модел</strong>, известным фотографом того времени, после трех фотосессий с Лизетт работы Арбус изменились в одночасье. Она смогла раскрепоститься, сбросить напряжение и научится передавать отражение чувств, психологизм в фотографии. Арбус была очень благодарна Лизетт и поддерживала с ней связь до конца жизни. Незадолго до смерти Арбус сказала своим студентам: «Именно моя учительница, Лизетт Модел, помогла мне понять, что чем более индивидуален, своеобразен ты сам – тем более обобщающими будут фотографии».</p>
			<p>Тенденции модной фотографии того времени состояли в строгой неподвижности в постановке моделей, в жесткой освещенности, ориентации на цветные нюансы. Но у <strong>Дианы Арбус</strong> результат получался особенным, не похожим на другие, как говорила <strong>Лизетт Модел</strong>: «Сначала зернистость и двухцветность. Затем – совершенство». Она отщелкивала пленку за пленкой, пытаясь выхватить что-то, что видно только ей одной. «Я никогда не выбирала свои модели на основании того, что они могли бы значить для меня, если бы я о них задумалась», – говорила Диана. Она могла потратить на интересную модель сколь угодно много времени, она была искренне заинтересована и озабочена – но только до окончания фотосессии. <strong>Диана Арбус</strong> снимала в необычном квадратном формате, центровано, отчужденно. Диана никогда не просила своих моделей принимать определенные позы. Фотосессия начиналась с беседы, а потом в процессе, Диана улавливала тонкий момент раскрытия, когда открывалась суть. Именно эту «суть повседневности» мы и видим на снимках.</p>
			<a rel="shadowbox" href="diane_arbus/arbus_backstage_at_the_follies.jpg"><img alt="Диана Арбус/За кулисами" title="Диана Арбус/За кулисами" class="picture_left" src="diane_arbus/arbus_backstage_at_the_follies-thumb.jpg" width="264" height="267"></a>
			<a rel="shadowbox" href="diane_arbus/diana-arbus-6.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana-arbus-6-thumb.jpg" width="275" height="267"></a>
			<a rel="shadowbox" href="diane_arbus/lady_bartender.jpg"><img alt="Диана Арбус/Леди-бармен" title="Диана Арбус/Леди-бармен" class="picture_left" src="diane_arbus/lady_bartender-thumb.jpg" width="271" height="274"></a>
			<a rel="shadowbox" href="diane_arbus/twins.jpg"><img alt="Диана Арбус/Близнецы" title="Диана Арбус/Близнецы" class="picture_left" src="diane_arbus/twins-thumb.jpg" width="269" height="274"></a>
			<p><strong>Диана Арбус</strong> никогда не проявляла пленку сама, отдавала в лабораторию, а потом долго разглядывала негативы, выбирая самый «правильный». Продавая фотографии и фоторепортажи в различные периодические издания, она зарабатывала себе на жизнь.</p>
			<a rel="shadowbox" href="diane_arbus/mae_west_in_a_chair.jpg"><img alt="Диана Арбус/Мэй Уэст в кресле" title="Диана Арбус/Мэй Уэст в кресле" class="picture_left" src="diane_arbus/mae_west_in_a_chair.jpg" width="270" height="272"></a>
			<a rel="shadowbox" href="diane_arbus/susan_sontag.jpg"><img alt="Диана Арбус/Сюзан Сонтаг с сыном" title="Диана Арбус/Сюзан Сонтаг с сыном" class="picture_left" src="diane_arbus/susan_sontag-thumb.jpg" width="274" height="272"></a>
			<a rel="shadowbox" href="diane_arbus/jayne_mansfield_with_her_daughter.jpg"><img alt="Диана Арбус/Джейн Мэнсфилд с дочерью" title="Диана Арбус/Джейн Мэнсфилд с дочерью" class="picture_left" src="diane_arbus/jayne_mansfield_with_her_daughter-thumb.jpg" width="270" height="295"></a>
			<p><strong>Диана Арбус</strong> получала гранты Музея Гуггенхайм в 1963 и 1966 годах   для работы над проектами «Американский опыт» («The American Experience»), «Американские обряды, обычаи и нравы» («American Rites, Manners and Customs»). Ее пригласили участвовать в выставке «Новые документы», открывшейся в Музее современного искусства в феврале 1967 года и она часто приходила смотреть на свои работы, но от собственной большой выставки отказывалась, Диана по-прежнему считала себя неготовой к публичному вниманию. По окончании выставки она собиралась  воплотить новые идеи, Аллан вспоминает: «У неё возникало сразу 30 проектов», но они так и остались нереализованными, виной всему ухудшающееся здоровье Арбус, в 1968 году она перенесла приступ гепатита, последовала операция. «Она жила среди постоянной боли, пытаясь понять, в чём смысл её жизни. Я никогда не видела её такой хрупкой и неуверенной», – говорит Мэри Селлерс. Своей подруге Карлотте Маршалл в конце 1968 года <strong>Диана Арбус</strong> писала: «Я постоянно испытываю сильнейшие перепады настроения. Наверное, я всегда была такой. Иногда это случается, когда я преисполнена энергии и радости, начинаю много дел сразу, или задумываюсь о том, что бы я хотела сделать – от волнения у меня дыхание прерывается. А потом, вдруг, из-за усталости, разочарования или из-за чего-то более таинственного - энергия исчезает, оставляя меня изнуренной, взволнованной, обезумевший, напуганной тем, к чему стремлюсь! Уверена, это классика».</p>
			<p>Последние два года жизни <strong>Диана Арбус</strong> была счастлива, родственник помог организовать съемку в клинике для умственно-отсталых в Нью-Джерси, в этих работах она комбинировала вспышку с дневным светом и фиксировала модели в движении, стремилась запечатлеть мгновения их жизни в заточении. Своему мужу она писала: «Фотографии очень расплывчатые и изменчивые, но некоторые великолепны. НАКОНЕЦ-то это то, что я искала. Я, кажется, обнаруживаю солнечный свет, солнечный свет поздним днем в начале зимы. Это просто чудесно. В общем, я, кажется, постоянно извращаю твою блестящую технику, деформирую её – можно сказать, это ПОЧТИ снимки, только лучше». Вот цитаты из письма дочери Дун, написанном в этот период: «Некоторые из них такие маленькие, что их плечи оказываются прямо под моей рукой, и я ласкаю их, а их головы клонятся мне на грудь. Они – наиболее странная смесь взрослого и ребенка, виденная мною в жизни. Одна дама снова и снова повторяла: «Я сожалею, я сожалею...» Чуть позже кто-то из персонала сказал ей: «Ничего страшного, но больше так не делай», – и она успокоилась... Думаю, они бы тебе понравились».</p>
			<a rel="shadowbox" href="diane_arbus/diana_arbus2.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana_arbus2-thumb.jpg" width="270" height="270"></a>
			<a rel="shadowbox" href="diane_arbus/diana_arbus_1.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana_arbus_1-thumb.jpg" width="270" height="270"></a>
			<a rel="shadowbox" href="diane_arbus/diana-arbus-untitled-4.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana-arbus-untitled-4-thumb.jpg" width="270" height="270"></a>
			<a rel="shadowbox" href="diane_arbus/diana-arbus-untitled-2.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/diana-arbus-untitled-2-thumb.jpg" width="270" height="270"></a>
			<a rel="shadowbox" href="diane_arbus/untitled.jpg"><img alt="Диана Арбус" title="Диана Арбус" class="picture_left" src="diane_arbus/untitled-thumb.jpg" width="270" height="270"></a>
			<p>На многих из последних фоторабот, <strong>Диана Арбус</strong> вернулась к своей ранней практике запечатления людей, не знающих, что их снимают. Но теперь эффект был другим: «Я вдруг поняла, что, когда я фотографирую людей, я уже не хочу, чтобы они на меня смотрели. (Раньше я почти всегда ждала, чтобы они посмотрели мне в глаза, но сейчас я думаю, что увижу их более ясно, если они не будут смотреть на меня, смотрящую на них.)».</p>
			<p>Существует разное мнение о том, что именно хотела  отразить в своих фотографиях <strong>Диана Арбус</strong>. Критик Сьюзен Зонтаг в своем эссе  утверждала, будто Арбус не случайно «фотографировала людей, которые вызывают жалость и отторжение», по ее мнению фотограф ориентировала зрителя на чувство, которое, заставляет смотреть и видеть страдание и боль». Мы живем в мире, где СМИ часто спекулируют на образах таких людей, с конкретной целью нажиться на их горе, а снимки <strong>Дианы Арбус</strong> оказывают им поддержку, стремясь передать волшебство их внутреннего мира. Другой критик Норман Кингсли Мейлер заявлял: «Давать Арбус камеру — всё равно, что разрешить ребёнку играть с гранатой». Сандра С. Филипс, хранитель фотографии в Музее Современного искусства в Сан-Франциско говорила: «Она была великим гуманным фотографом, который был в центре деятельности нового веяния фотографического искусства".</p>
			<a rel="shadowbox" href="diane_arbus/diana_arbus_child_crying.jpg"><img alt="Диана Арбус/Плачущий ребёнок" title="Диана Арбус/Плачущий ребёнок" class="picture_left" src="diane_arbus/diana_arbus_child_crying-thumb.jpg" width="250" height="248"></a>
			<br />
			<p><strong>Диана Арбус</strong>, испытывала огромное сочувствие к людям, которых она фотографировала («Я чувствовала смесь позора и страха».), но она не была одной из них, однако очень себя с ними идентифицировала. Она переживала свои собственные душевные проблемы  и ощущала связь с этими людьми, она понимала их. Фундаментальный труд, который Диана оставила, считается признанным не только из-за его темной красоты или ее абсолютного видения предмета, но потому что она задает вопросы о нашем соучастии во всем этом. Смысл соучастия – ее и нашего – находится в самом сердце. Ее изображения держат нас под влиянием, даже когда мы инстинктивно отводим взгляд. Если она и эксплуатировала эти образы, она делала это мастерски.</p>
			<p>Её всегда беспокоил не вопрос «достаточно ли это хорошо, а – вполне ли это правдиво».</p>
			<br />
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова, креативный фотограф</p>
			<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
			<br />

			<p>Понравилось? Нажмите!</p>
			<? include("../social.php"); ?>
			<br />

			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<p>Читайте другие мои статьи о знаменитых фотографах</p>
			<div id="border">
			<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - ярчайшая представительница концептуального искусства и самый высокооплачиваемый фотограф.</p>
			<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - гениальнийший портретист ХХ века.</p>
			<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - культовый фотограф киностудии MGM.</p>
			<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
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
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/diane_arbus.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
            <!--#FACEBOOK каменты-->
			
            <!-- вконтакте каменты-->
            <p style="font-size:1.3em;">Комментарии Вконтакте:</p>
            <script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
            <div id="vk_comments"></div><script type="text/javascript">
            VK.Widgets.Comments("vk_comments", {limit: 10, width: "560", attach: false});</script>
            <!--# вконтакте каменты-->
			<br />
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