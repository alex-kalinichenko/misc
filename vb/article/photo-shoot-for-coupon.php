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
	<title>Фотосессии по купонам</title>
	<meta name="keywords" content="фотосессия купон" />
	<meta name="description" content="Чего ожидать, покупая купон на фотосессию со скидкой" />
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
       <h1>Фотосессии по купонам</h1>
       <br />
       <p><i>В этой статье я хочу поделиться своими мыслями о таком набирающем популярность явлении, как фотосессии по купонам. Таких предложений всё больше и больше. Автор статьи хорошо изучил нюансы работы с сайтами купонов и поэтому решил поделиться своим опытом.</i></p>
       <br />
       <h2>Что такое сайты купонов</h2>
       <p>Изначально сайты, предлагающие купоны, задумывались как очень полезный способ увеличения оборота товаров и услуг. Причём полезный как для продавца, так и для потребителя. Залежался, например. у вас на складе какой-то товар, а продаж нет. Вы даёте объявление на Групон, Купонатор или какой-либо другой подобный проект  и распродаёте всё очень быстро. Конечно, вы даёте большую скидку, но зато за счёт оборота, освобождения торговых и складских помещений вы либо будете в прибыли, либо избегаете больших убытков. Покупатель также доволен - он приобрёл вещь дешевле.</p>
       <p>Или например вы открыли ресторан или кафе. Репутация у вас ещё не сложилась, постоянных посетителей нет, а известность получать как-то надо. Реклама в СМИ дорога и не всегда эффективна. На помощь приходят сайты коллективных покупок. Ваше предложение там выставляется со значительной скидкой, но вы не будете в проигрыше так как о вас узнает немало людей, которые возможно придут ещё не раз. А за счёт больших оборотов и высокой посещаемости вы сможете не только компенсировать предоставленную скидку, но и, возможно, заработать.</p>
       <img src="photo-shoots-for-coupon/photo-shoot-for-coupon-1.jpg" width="540" height="469" alt="Фотосессия со скидкой по купону">
       <br />
       <br />
       <h2>Что ожидают люди, заказывающие фотосессию на сайтах купонов</h2>
       <p>Эта модель отлично работает с товарами и услугами, у которых при массовом, "серийном" производстве качество остаётся неизменным. Действительно, не очень важно 10 или 100 человек в день посещают ваш ресторан, - хватало бы помещений, поваров и официантов. Так же и с интернет-магазинами - чем выше оборот, тем меньше издержки на единицу товара.</p>
       <p>Естественно, что такую успешную модель стали применять всё больше и больше во всех сферах, в том числе и в фотографии. Но что из этого получается?</p>
       <p>Любой человек, задумывающийся о фотосессии, хочет получить себя любимого в самых красивых образах и ракурсах. При мысли о собственной фотосессии рисуются развороты глянцевых журналов, где модели выглядят потрясающе и роскошно. Соответственно, любой человек вправе ожидать, что заказав фотосессию со скидкой, получит полноценную услугу, а именно - фотосессию, которую сразу можно печатать в журнале. И совсем не хочется думать, за счёт чего получается скидка. А подумать об этом надо.</p>
       <img src="photo-shoots-for-coupon/photo-shoot-for-coupon-2.jpg" width="540" height="318" alt="Предложение фотосессии со скидкой по купону">
       <br />
       <br />
       <h2>Откуда берётся экономия в фотосессиях по купонам?</h2>
       <p>Стоимость фотосессии складывается из стоимости работы фотографа (съёмка и обработка фотографий) и аренды фотостудии. Если предложение вы покупаете через портал купонов, то они забирают себе до 30%. Да, ни много, ни мало - почти треть!!!</p>
       <p>Сайт купонов, естественно, заинтересован в притоке клиентов, поэтому менеджеры настаивают на снижении цены и соглашаются сотрудничать с фотографами только при условии, что предложение будет соответствовать очень низкой ценовой политике других предложений.</p>
       <p>Для манёвра остаётся только два параметра - фотограф и студия. Приличная фотостудия сейчас стоит от 800 рублей в час. Конечно, если она у вас собственная, эта цена ниже, но это не значит, что она обходится совершенно бесплатно. Часто фотосессию по купонам устраивают в маленьких подвальных помещениях или квартирах. Эти помещения и фотостудией назвать трудно.</p>
       <p>Теперь фотограф. Если его труд будет оплачен по минимальной стоимости, то в этом случае получится действительно очень дешевая фотосессия по купону. Но какой фотограф согласится работать за 200-300 рублей в час? Естественно только начинающие, не известные и те, у кого ещё нет своего портфолио. Ради опыта начинающие фотографы согласны фотографировать по минимальной цене или вообще бесплатно. Осуждать их за это нельзя - все когда-то начинали. Но только нужен ли такой фотограф вам? Где гарантия, что у начинающего хватит таланта и опыта снять вас достойно? Очень  мало шансов на то, что результат фотосессии вас устроит. Фотография - это искусство. Мало значит марка фотоаппарата, стоимость оборудования в студии и прочей техники. Гораздо важнее наличие креативности у фотографа и умения видеть, как надо сфотографировать человека. Увы, но чаще всего клиенты фотосессий по купонам остаются весьма недовольны результатом. Таких отзывов можно найти немало: <a href="http://www.u-mama.ru/forum/messages.php?id=10298118&iq=11" rel="nofollow" target="_blank">http://www.u-mama.ru/forum/messages.php?id=10298118&iq=11</a></p>
       <img src="photo-shoots-for-coupon/photo-shoot-for-coupon-3.jpg" width="540" height="393" alt="Фотосессия по купону">
       <br />
       <br />
       <h2>Где же выход?</h2>
       <p>Выход как всегда очень прост. Не нужно гонятся за халявой - скупой платит дважды. Экономия - дело хорошее, но во всё нужно знать меру. Можно найти хорошего и недорогого фотографа, но он никогда не будет ставить своё творчество на поток.</p>
       <p>В фотосессиях по купонам съёмочный процесс - это не творчество и не искусство. Это настоящий конвеер, где всех фотографируют в стандартных позах, на одних и тех же фонах. Нет никакого индивидуального подхода и внимания к потребностям клиента. Профессиональный фотограф, который работает с каждым клиентом индивидуально, старается установить эмоциональный контакт. Он делает всё, чтобы модель чувствовала себя уверено. Он подсказывает, что и как делать, как позировать, как смотреть. Он заинтересован в результате не меньше заказчика. Всёго это весьма сложно ожидать от тех, кто фотографирует потоком, по купонам.</p>
       <p>Поэтому мой совет: выбирайте именно того фотографа, чьи работы вам нравятся и не поддавайтесь заманчивым предложениям фирм, работающим на поток, как бы выгодно это не звучало!</p>
       <img src="photo-shoots-for-coupon/photo-shoot-for-coupon-4.jpg" width="540" height="367" alt="Предложение фотосессии по купону">
       <br />
       <br />
       <p><i>P.S. Для иллюстрации использованы реальные предложения фотосессий по купонам. Все права на изображения принадлежат авторам.</i></p>
       <p><i>P.P.S. Присмотритесь к ним и прочитайте повнимательнее. Многие из них весьма забавны:)</i></p>

       <br />
       <p align="right">Justice</p>
       <p align="right"><a href="http://victoriabalashova.com">victoriabalashova.com</a></p>
       <p align="right">Все материалы являются собственностью. Любое копирование запрещено!</p>
       <br />
       
       <p>Полезная статья? Нажмите!</p>
       <? include("../social.php"); ?>
		<br />
				
       <!-- ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
		<p><b>Читайте мои статьи:</b></p>
		<div id="border">
		  <p><a href="posovetuite-fotografa.php" title="Советы по выбору фотографа на свадьбу в Москве">Советы  хороших фотографа на свадьбу</a></p>
		  <p><a href="pregnancy-photo.php">Фотосессия для беременных</a></p>
		  <p><a href="photographer-wedding-moscow.php" title="Как выбрать фотографа на свадьбу в Москве">Выбираем свадебного фотографа в Москве</a></p>
		  <p><a href="expensive-photographer.php" title="Дорогой фотограф">Дорогие фотографы. Почему они столько стоят?</a></p>
		  <p><a href="unusual-creative-photography.php">Креативность и необычность в фотографии</a></p>
		  <p><a href="inexpensive-photographer.php">Выбираем недорого фотографа в Москве</a></p>
		</div><!-- #border-->
       <!-- #ССЫЛКИ НА ДРУГИЕ СТАТЬИ -->
			
       <br />
	   <p>Рекомендую посмотреть моё <a href="../portfolio.php" title="портфолио">портфолио</a>.</p>
	   <br />

            <!-- FACEBOOK каменты-->
            <p style="font-size:1.3em;">Комментарии Facebook:</p>
            <div class="fb-comments" data-href="http://victoriabalashova.com/article/photo-shoot-for-coupon.php" data-num-posts="5" data-width="560" data-colorscheme="dark"></div>
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