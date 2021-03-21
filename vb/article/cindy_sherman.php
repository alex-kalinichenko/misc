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
	<title>Синди Шерман - креативный фотограф Виктория Балашова</title>
	<meta name="keywords" content="синди шерман,шерман,концептуальное искусство,фотография,без названия № 69,дорого,аукцион,Cristi’s,Untitlet Film Stills,Кадры из фильмов без названия,модель,родственниеи,студия,бессмысленность,цирк,макияж,костюм,антураж,актриса,снимок,дежа-вю,домохозяйка,проститутка,танцовщица,кухня,нью-йорк,Rear-Screen Projections,Проекции экрана,sex pictures,инфантилизм,камера,карьера,критик,сми,колледж,искусство,фотография,исторические портреты,стареющие актрисы,клоун,марк джейкобс" />
	<meta name="description" content="Скандально известная Синди Шерман - ярчайший представитель концептуализма и самый высокооплачиваемый фотограф в мире" />
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
<!-- #СЧЁТЧИК Яндекс -->

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
		  <h1>Синди Шерман</h1>
			<br />
			<h2><i>Жанр: Концептуальное искусство</i></h2>
			<br />
			<br />
			<a rel="shadowbox" href="cindy_sherman/cindy_sherman.jpg"><img alt="Портрет Синди Шерман" title="Портрет Синди Шерман" class="picture_article" src="cindy_sherman/cindy_sherman-thumb.jpg" width="235" height="280"></a>
			<br />
			<p>В своих работах <strong>Синди Шерман</strong> многолика, неординарна, загадочна, мир признал ее искания и принес к ногам мировую известность. В мае 2011 года фотография <strong>Синди Шерман «Без названия № 96»</strong> стала самой дорогой в истории, на аукционе Cristi’s  она ушла с молотка за $3.89 млн! Этот снимок из серии Untitlet Film Stills (Кадры из фильмов <strong>Синди Шерман без названия</strong>) 1977 - 1980 г был сделан 23-летней некому еще неизвестной фотохудожницей из Нью-Джерси и станет самой известной фотосессией за всю карьеру Шерман.</p>
			<p>Идея проекта, состоящая из 69 снимков – различные образы женщин, представленных в разных возрастных категориях и эмоциональных состояниях, снимки которых напоминали стоп-кадры из фильмов. Кроме этого особенностью проекта было и то, что моделью для своих снимков выступала сама Синди Шерман, она объясняла  это сложностью восприятия модели ее образов, другими словами, она изначально исключала возможность осуществления этого проекта с кем бы то ни было:«Я пробовала использовать родственников или друзей, но даже заплатив деньги, я жаждала вышвырнуть их из студии. Я чувствовала, что давила на них. Для них это было развлечением, что-то типа Хэллоуина или игры в переодевания. Для меня же это не было игрой». "Бессмысленность" образа было  сложно потребовать от привлеченных помощников. Поэтому Синди искала его самостоятельно, перевоплощаясь в героинь вымышленных кинофильмов 50-х годов.</p>
			<p>С помощью париков, макияжа, костюмов и верно выбранного антуража <strong>Синди Шерман</strong> примеряла на себя образы актрис второсортных американских триллеров и европейских арт-лент.</p>
			<a rel="shadowbox" href="cindy_sherman/untitled_96.jpg"><img alt="Синди Шерман/Без названия № 96" title="Синди Шерман/Без названия № 96" class="picture_left" src="cindy_sherman/untitled_96-thumb.jpg" width="292" height="157"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled_92.jpg"><img alt="Синди Шерман/Без названия № 92" title="Синди Шерман/Без названия № 92" class="picture_left" src="cindy_sherman/untitled_92-thumb.jpg" width="247" height="157"></a>
			<p>Каждый снимок создает стойкое впечатление как будто бы вырезанного из фильма кадра: камера «застигает» героиню в момент высочайшего напряжения, опасности, неуверенности или страха. У зрителей эти работы должны вызывать ощущение некого дежа-вю, сцен из забытых кинолент или газетных вырезок, они могут также принять эти фотографии за портреты Шерман, но на самом деле это больше чем просто портреты. На каждом снимке <strong>Синди Шерман</strong> покорно, подобно хамелеону  играет человеческие типы: домохозяйка, проститутка, нищенка, танцовщица, актриса… Проект был закончен в 1980 году по словам Синди она «исчерпала клише», но благодаря этой серии снимков у нее появилась возможность провести персональную выставку своих работ в «Кухне», некоммерческом пространстве в Нью-Йорке.</p>
			<a rel="shadowbox" href="cindy_sherman/untitled7.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled7-thumb.jpg" width="184" height="235"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled_film_still_14.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled_film_still_14-thumb.jpg" width="353" height="235"></a>
			<p>Следующей ее работой стали "Rear-Screen Projections" (Проекции экрана)  для которой она также позировала в придуманных ею образах. Она по-прежнему была своей единственной моделью, а ее изображения стали более жесткими, иногда скандальными. «Я была свободна, могла делать все что захочу», – вспоминала она. В различных интервью фотограф по-разному оценивала эти годы: иногда выражала недовольство недостаточным вниманием, иногда возмущалась «нуворишами-коллекционерами», скупающими ее работы. Последнее побудило ее делать фотографии вызывающие отрицательные эмоции, фотографировать рвотные массы и тому подобное, дескать: «Повесь-ка это у себя над кроватью!». К сожалению, Синди Шерман ошиблась, эти фотографии покупали и вешали – если не над кроватью, то уж, по крайней мере, на стенах музеев. Она вдохновляется вещами — принадлежностями искусственного мира; в ее мастерской костюмы, парики, туфли, предметы, грим. Работая над серией, она так много вкладывает и выдает в концентрированный период времени, что после завершения съемки долго не может подойти к фотокамере.</p>
			<p>В самом начале 90-х в свет выходят легендарные «Sex pictures» на этот раз она не снималась сама, вооружившись медицинским каталогом она заказала дюжину манекенов, разрисовала их вручную и смастерила половые органы: «Возможно, в этом есть что-то инфантильное. Я чувствую какое-то детское влечение к вещам, которые должны внушать отвращение. Мне интересно, почему некоторые предметы вызывают подобные чувства. … Я чувствую, что мне нужно исследовать это». Синди часто поднимает множество проблем в современном мире, тематика ее фотографий меняется, от роли и представления женщины в обществе до ужасов «гражданской войны». Как потом призналась Синди Шерман, затрагивая эту тему, она и не подозревала, что связанные со смертью сюжеты, окажутся для нее столь значимыми. Видимо, намерение Шерман состоит в том, чтобы исследовать отвратительное, все же это вещи, в которых она по своему признанию может найти красоту.</p>
			<a rel="shadowbox" href="cindy_sherman/untitled_sex_pic.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled_sex_pic-thumb.jpg" width="358" height="260"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled_sex_2.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled_sex_2-thumb.jpg" width="175" height="260"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled_sex.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_right" src="cindy_sherman/untitled_sex-thumb.jpg" width="178" height="260"></a>
			<p>Практически никакой информации нельзя найти в интернете по поводу становления ее карьеры, каким образом она попала в обозрение критиков и в коммерческие салоны. В СМИ больше можно узнать об очередной продаже ее работы, нежели о фактах из ее биографии. Сама Синди Шерман  так описывала начало творческого пути: «Только в колледже я стала иметь представление о том, что происходило в мире искусства. Когда я была ребенком, я думала, что художники бывают двух разновидностей, тех, что рисуют судебные заседания и карикатуристы. Настоящим открытием для меня были репродукции из книги моих родителей, включавшей в себя работы Дали и Пикассо среди прочих.» После окончания средней школы, Синди Шерман поступила Университетский колледж Баффало изучать живопись. В последующих интервью о своем опыте она рассказывает, что уже в то время ее картинами были автопортреты и реалистические копии картинок или фотографий, которые она находила в журналах или рекламе. В один прекрасный день она осознала, что сделала все что могла на этом поприще, копируя чужое искусство, «я просто могу использовать камеру для реализации собственных идеи». И это то, что она сделала. Ретроспективно, <strong>Синди Шерман</strong> выразила, что она никогда, возможно, не преуспевала как живописец, заявляя, что она неспособна реагировать на живопись в чем-то большем, чем интуитивном плане. Налаживая связи для продвижения своей карьеры, она переключается на фотографию, которая забирает все ее свободное время и становится частью ее жизни.</p>
			<p>В «Исторических портретах» <strong>Синди Шерман</strong> опять использует себя в качестве модели, живя в Риме она в течении двух лет копирует работы великих художников: "За эти два года создания проекта я никогда не посещала музеи, работала только с репродукциями. Это - аспект фотографии, которую я ценю, концептуально: идея, что изображения могут быть воспроизведены и замечены в любое время, где угодно, любым."</p>
			<a rel="shadowbox" href="cindy_sherman/historyportrait.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/historyportrait-thumb.jpg" width="125" height="191"></a>
			<a rel="shadowbox" href="cindy_sherman/fornarina.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/fornarina-thumb.jpg" width="121" height="191"></a>
			<a rel="shadowbox" href="cindy_sherman/untitledhistory.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitledhistory-thumb.jpg" width="134" height="191"></a>
			<a rel="shadowbox" href="cindy_sherman/untitles_209.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitles_209-thumb.jpg" width="138" height="191"></a>
			<p>Вновь «вернулась к себе» <strong>Синди Шерман</strong> только в XXI веке. Она создала галерею стареющих актрис – невольно вспоминаются «Кадры из фильмов без названия», только актрисы эти уже не могут рассчитывать на главные роли.</p>
			<a rel="shadowbox" href="cindy_sherman/sherman.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/sherman-thumb.jpg" width="144" height="160"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled4.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled4-thumb.jpg" width="107" height="160"></a>
			<a rel="shadowbox" href="cindy_sherman/untitled34.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/untitled34-thumb.jpg" width="120" height="160"></a>
			<a rel="shadowbox" href="cindy_sherman/sherman1.jpg"><img alt="Синди Шерман" title="Синди Шерман" class="picture_left" src="cindy_sherman/sherman1-thumb.jpg" width="156" height="160"></a>
			<p><strong>Синди Шерман</strong> попробовала себя в образе клоуна – в результате получилась скорее грустная, чем забавная серия. В 2006 году Синди создала серию рекламных плакатов для нью-йоркского кутюрье Марка Джейкобса. Она продолжает фотографировать и сегодня – в бескрайних просторах всемирной паутины можно найти ее фотографии.</p>
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова, креативный фотограф</p>
			<p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
			<br />
			
			<p>Понравилось? Нажмите!</p>
			<? include("../social.php"); ?>
			<br />

			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<p>Читайте ещё статьи о знаменитых фотографах</p>
			<div id="border">
			<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, которая вошла в историю как "фотограф, снимавшая уродцев".</p>
			<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - любимица трансвеститов.</p>
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
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/cindy_sherman.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
            <!--#FACEBOOK каменты-->
            
            <!-- VK каменты-->
            <p style="font-size:1.3em;">Комментарии Вконтакте:</p>
            <script type="text/javascript">VK.init({apiId: 2841363, onlyWidgets: true});</script>
            <div id="vk_comments"></div><script type="text/javascript">
            VK.Widgets.Comments("vk_comments", {limit: 10, width: "560", attach: false});</script>
            <!--# VK каменты-->
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