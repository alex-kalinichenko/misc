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
	<title>Как хорошо получаться на фотографиях - Виктория Балашова - креативный фотограф</title>
	<meta name="keywords" content="как хорошо получаться на фотографиях,хорошо,фотография,фотогеничность,фотосъёмка,нестандарт,внешность,фотошкола,модель,снимок,стеснительность,раскрепощённость,правило,результат,идеально,скучно,образ,сногсшибательно,одежда,макияж,причёска,волнение,фотограф,ракурс,совет,наблюдение,внимание,осанка,сутулость,спина,живот,прогиб,контур,тело,скусуальность,нога,рука,поза,естественность,мимика,лицо,напряжение,взгляд,объектив,белки,глаз,свобода,медленно,статичность,просьба,рекомендация,удача" />
	<meta name="description" content="Рекомендации професионального фотографа о том, как позировать и вести себя на фотосессии." />
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
		    <h1>Как хорошо получаться на фотографиях?</h1>
			<br />
			<p>Многие жалуются на не фотогеничность, это неправильное утверждение. Даже самая красивая девушка имеет свой неправильный ракурс, который легко вычислить в процессе фотосъемки. Именно поэтому я уделяю особое внимание фотосъемке людей с нестандартной внешностью, еще учась в фотошколе, я снимала профессиональных моделей и скажу откровенно, с ними работается намного проще, только потому что эти люди любят фотографироваться и иметь абсолютно отличные друг от друга снимки, поэтому они отбрасывают всю свою стеснительность и позируют раскрепощено. Это самое главное правило для получения превосходного результата, поверьте мне. Но работая с идеальными лицами и фигурами мне стало скучно, я захотела снимать обыкновенных людей с таким же результатом и я горжусь тем, что мне это удается. Даже самые стеснительные люди, не верящие в свою привлекательность, на моих снимках выглядят сногсшибательно. Перед съемкой я всегда расспрашиваю об ожиданиях того или иного человека в каком образе он хотел бы себя увидеть и что он не приемлет. Как правило, здесь желания расходятся, кто-то предпочитает, чтобы его не узнавали на фотографиях, а кто-то мечтает предстать в роли самого себя. Готовясь к фотосъемке Вам необходимо только взять одежду, нанести макияж и сделать прическу (если Вы не будете пользоваться услугами визажиста) все остальное дело техники. Я работаю исключительно в интерьерных фотостудиях потому как не приемлю фотографии, где присутствуют только модель и бумажный фон. Во время процесса фотосъемки главное не волноваться, выполнять просьбы фотографа о принятии нужной позы, не препятствовать фотографу, ведь ему намного виднее с какого ракурса Вас снимать. Вот некоторые советы из моих наблюдений, на что нужно в первую очередь обращать внимание модели:</p>
			<ul id="list">
			 <li>Не сутультесь, старайтесь держать спину ровно, а живот подтянутым.</li>
			 <li>Не забывайте о прогибе спины, чтобы в кадре был изогнутый контур тела, это смотрится очень сексуально.</li>
			 <li>Следите за постановкой ног и рук, все позы должны выглядеть естественно.</li>
			 <li>Помните о мимике лица, она не должна быть напряженной.</li>
			 <li>Не отводите слишком взгляд от объектива, иначе на фотографии будут видны только белки глаз.</li>
			 <li>Если фотосессия проходит в свободном режиме, старайтесь медленно двигаться, не принимайте статических поз.</li>
			</ul>
			<p>Внимательно прислушивайтесь к тому, о чем вас просят, не желание выполнять рекомендации фотографа, приводит к значительному уменьшению количества удачных фотографий.</p>
			<p>Желаю вам удачи и хороших фотоснимков!</p>
			<br />
			<p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
			<p align="right">Виктория Балашова</p>
			<p align="right"><a href="http://www.victoriabalashova.com">www.victoriabalashova.com</a></p>
			<br />

			<p>Понравилось? Нажмите!</p>
			<? include("../social.php"); ?>	
			 	
			<!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<div id="border">
            	<p><b>Читайте мои статьи:</b></p>
            	<p><a href="principles_of_lighting.php" title="Основы освещения в фотостудии">Основы освещения в фотостудии</a></p>
            	<p><a href="quotes_photographers.php" id="link" title="Цитаты фотографов">Цитаты фотографов</a><p></p></p>
            	<p><a href="diane_arbus.php" title="Диана Арбус">Диана Арбус</a>, вошедшая в историю как "фотограф, снимавшая уродцев".</p>
            	<p><a href="nan_goldin.php" title="Нэн Голдин">Нэн Голдин</a> - фотограф, снимавшая геев и трансвеститов.</p>
            	<p><a href="yousuf_karsh.php" title="Юсуф Карш">Юсуф Карш</a> - знаменитейший портретист ХХ века.</p>
            	<p><a href="cindy_sherman.php" title="Синди Шерман">Синди Шерман</a> - культовый и самый высокооплачиваемый фотограф концептуального искусства.</p>
				<p><a href="george_hurrell.php" title="Джордж Харрелл">Джордж Харрелл</a> - величайший фотограф киностудии MGM.</p>
			</div>
			<!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			<br />
			<p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>

			<br />
            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/how_to_look_good.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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