<?php
session_start();
error_reporting(85);


$utm = array("utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term");

$utm_clean = false; foreach($utm as $v){if(trim($_GET[$v])&&trim($_GET[$v])!=$_SESSION[$v]){$utm_clean = true; break;}}
if($utm_clean){foreach($utm as $v){unset($_SESSION[$v]);}}

foreach($utm as $v){if(trim($_GET[$v])&&!$_SESSION[$v]){$_SESSION[$v] = trim($_GET[$v]);}}
?>
<!DOCTYPE html>
<html>
<head>

<!-- Код тега ремаркетинга Google -->

<script type="text/javascript">

var google_tag_params = {

dynx_itemid: 'REPLACE_WITH_VALUE',

dynx_itemid2: 'REPLACE_WITH_VALUE',

dynx_pagetype: 'REPLACE_WITH_VALUE',

dynx_totalvalue: 'REPLACE_WITH_VALUE',

};

</script>

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 856609541;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/856609541/?guid=ON&amp;script=0"/>

</div>

</noscript>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1855224518076375');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1855224518076375&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45636015 = new Ya.Metrika({
                    id:45636015,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45636015" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45373752 = new Ya.Metrika({
                    id:45373752,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45373752" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103044283-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'cz1ToJAZR2';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = 'https://vk.com/rtrg?p=VK-RTRG-156489-gtgHR';</script>
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width">
<meta name='og:image' content='/og-image.jpg'>
<meta name="format-detection" content="telephone=no">

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Russian Blockchain Week 2017 Конференция по блокчейн</title>
	<meta name="keywords" content="russian blockchain week, blockchain week, конференция блокчейн, blockchain конференция, конференция биткоин, блокчейн семинар, биткоин семинар, обучение блокчейн, обучение  blockchain, консультации блокчейн" />
	<meta name="description" content="Russian blockсhain Week (Российская неделя блокчейн и криптовалют) — это главное событие года в своей индустрии, которое объединяет в себе 4 формата: конференция, выставка и шоу блокчейн-проектов, Blockchain.EXPO и Blockchain.NIGHT" />
	<link href="css/style.css" type="text/css" rel="stylesheet"/>
	<link href="css/fonts.css" type="text/css" rel="stylesheet"/>
	<link href="css/jquery.formstyler.css" type="text/css" rel="stylesheet"/>
	<link href="css/jquery.formstyler.theme.css" type="text/css" rel="stylesheet"/>
	
</head>

<div class="wrapper">
	<header class="header">
		<div class="center">
			<div class="menu-toggle"></div> 
			<ul class="menu">
				<li><a href="#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
				<li><a href="#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
				<li><a href="#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
				<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
				<li><a href="#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
				<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
				<li class="buy-ticket"><a href="#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
			</ul>

			<ul class="languages">
			
			</ul>
		</div>	
	</header><!-- .header-->

	<div class="header header-fixed">
		<div class="center">
			<div class="logo">
				RUSSIAN <br>
				BLOCKCHAIN<br>
				WEEK <span>2017</span>
			</div>
			<div class="menu-toggle"></div>
			<ul class="menu" id="menu">
				<li><a href="#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
				<li><a href="#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
				<li><a href="#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
				<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
				<li><a href="#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
				<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
				<li class="buy-ticket"><a href="#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
			</ul>
		</div>
		<div class="toggle"></div>
		<div class="menu-mobile">
			<li><a href="#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
			<li><a href="#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
			<li><a href="#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
			<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
			<li><a href="#block9-bottom.mobile" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
			<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
			<li><a href="#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
		</div>
	</div><!-- .header-->
	
	<div class="block1">
		
		<div id="particles-js"></div>

		<div class="center">
			
			<!--<a href="#block5" class="discount-for-registration "></a>-->
			<div class="col col-left">
				<div class="top-block">
					<div class="date-container">
						<div class="date">
							<span>26 - 28</span> октября
						</div>
						<div class="city">
							<img src="img/icon-city.png" alt="img"/>
							Москва
						</div>
					</div>
				</div>
				<div class="subtitle"><img src="img/logo-reu.png" style="float: left; margin-right: 10px; margin-top: -18px;" alt="img"/> При поддержке Российского экономического<br />университета им. Г.В. Плеханова (РЭУ)</div>

				<h1>Russian <br>
					blockchain<br>
					week <span>2017</span>
				</h1>

				<p class="text">Все, что вы хотели знать о технологии блокчейн и криптовалютах. Узнайте, <br />как на этом зарабатывают миллионы: получите вдохновляющие идеи и найдите новые возможности для развития бизнеса.</p>
				
				<div class="how-many">
					<div>
						<span>3</span><br>
						дня
					</div>
					<div>
						<span>30+</span><br>
						спикеров
					</div>
					<div>
						<span>50+</span><br>
						проектов <br>и стартапов
					</div>
					<div>
						<span>500</span><br>
						участников
					</div>
				</div>
				<div class="action-mobile">
					<a href="#block5" class="button">Забронировать билет</a>
				</div>
			</div>

			<div class="col col-right">
				<div class="phone">
					<!--<img src="img/icon-phone2.png" alt="img"/>-->
					<span>+7 (499)</span> 404-17-03
				</div>

				<ul class="social">
					<li><a href="https://facebook.com/blockchainweek/" target="_blank"  class="facebook"></a></li>
					<!--<li><a href="#" class="twitter"></a></li>-->
					<li><a href="https://vk.com/blockchainweek.moscow" class="vk" target="_blank" ></a></li>	
				</ul>

				<form id="form1" class="registration-form">
					<p>Зарегистрироваться <br>на мероприятие</p>
					<input type="text" placeholder="Ваше имя" name="name" class="field-name">
					<input type="email" placeholder="Ваш e-mail" name="email" class="field-email" required="required">
					<input type="text" placeholder="Ваш номер телефона" name="phone" class="field-phone" required="required">
					<select class="select" name="select_form">
						<option>Тип билета </option>
						<option>Базовый</option>
						<option>Бизнес</option>
						<option>Бизнес+</option>
					</select>
					<div class="form-item">
						<input type="checkbox" id="checkbox-1-1" class="regular-checkbox">
						<label for="checkbox-1-1"><a href="personal-info.pdf" target="_blank">Даю согласие на обработку<br/>персональных данных</a></label>
					</div>

					<input type="submit" value="Зарегистрироваться" class="disabled">
				</form>
			</div>

			<div class="align-button">
				<a href="#block5" class="button">Забронировать билет</a>
			</div>
		</div>	
	</div>

	<div class="block2-wrapper">
		<div class="block2" id="block2">
			<div class="center">
				<div class="fon-video"></div>
				<div class="center-block">
			    	<div class="title">Russian Вlockchain Week</div>
			    	<p class="text">Это конференция с докладами более чем 30 топовых экспертов, мастер-классы и презентации десятков блокчейн-проектов. Вдохновитесь новыми идеями и узнайте обо всех возможностях применения технологии, реальных кейсах и о том, что нас ждет в ближайшем будущем.</p>
			    	<a href="javascript:void(0)" class="play-button"></a>
			    </div>
			</div>
		</div>

		<div id="block-slider">
			<div class="pager-wrapper">
				<div class="pager">
					<div class="cycle-slideshow" 
					    data-cycle-fx=scrollHorz
					    data-cycle-slides="> div"
					    data-cycle-timeout=4000
					    >
					    <div></div>
					    <div></div>
					    <div></div>
					    <div></div>
					</div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 0); ga("send", "event", "slider", "сlick slider", "Конференция «Блокчейн и криптовалюты-2017»");'><a>Конференция «Блокчейн и криптовалюты-2017»</a></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 1); ga("send", "event", "slider", "сlick slider", "Шоу блокчейн-проектов и технологий");'><a>Шоу блокчейн-проектов и технологий</a></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 2); ga("send", "event", "slider", "сlick slider", "Blockchain.EXPO-2017");'><a>Blockchain.EXPO-2017</a></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 3); ga("send", "event", "slider", "сlick slider", "Blockchain.Night");'><a>Blockchain.Night</a></div>
				</div>
			</div>
			<div class="cycle-slideshow cycle-slideshow-main" 
			    data-cycle-fx=scrollHorz
			    data-cycle-slides="> div"
			    data-cycle-timeout=4000
			    >

			    <div>
			    	<div class="center">
				    	<div class="title">Конференция «Блокчейн<br />и криптовалюты-2017»</div>
				    	<div class="desc">Это доклады более чем 30 российских<br />и мировых легенд блокчейн-индустрии.</div>
			    	</div>
			    </div>
			    <div>
			    	<div class="center">
				    	<div class="title">Шоу блокчейн-проектов<br />и технологий</div>
				    	<div class="desc">Несколько десятков проектов расскажут<br />в 15-минутных сессиях о бизнесе на блокчейне.</div>
			    	</div>
			    </div>
			    <div>
			    	<div class="center">
			    		<div class="title">Blockchain.EXPO-2017</div>
			    		<div class="desc">Представители производителей оборудования, компаний-разработчиков, стартапов, консультантов в сфере блокчейна и криптовалют.</div>
			    	</div>
			    </div>
			    <div>
			    	<div class="center">
			    		<div class="title">Blockchain.Night</div>
			    		<div class="desc">Новые связи, знания, знакомства и обсуждение проектов<br />в неформальной обстановке.</div>
			    	</div>
			    </div>
			</div>
			<div class="center">
				<div class="cycle-pager">
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 0); ga("send", "event", "slider", "сlick slider", "Конференция «Блокчейн и криптовалюты-2017»");'></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 1); ga("send", "event", "slider", "сlick slider", "Шоу блокчейн-проектов и технологий");'></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 2); ga("send", "event", "slider", "сlick slider", "Blockchain.EXPO-2017");'></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 3); ga("send", "event", "slider", "сlick slider", "Blockchain.Night");'></div>
				</div>
			</div>
		</div>
	</div>

	<div class="block3" id="block3">
		<div class="center">
			<div class="title">Ключевые темы</div>
			<div class="grid">
				<div class="item">Криптовалюты</div>
				<div class="item">Принципы<br />и применение технологии блокчейн</div>
				<div class="item">ICO</div>
				<div class="item">Законодательное регулирование</div>
				<div class="item">Майнинг<br />и оборудование</div>
				<div class="item">Блокчейн для бизнеса</div>

				<div class="slider-mobile">
				    <div class="nav">
				        <span class="prev" id="block3-prev"></span>
				        <span class="next" id="block3-next"></span>
				    </div>

				    <div class="cycle-slideshow" 
				        data-cycle-fx=scrollHorz
				        data-cycle-timeout=0
				        data-cycle-prev="#block3-prev"
				        data-cycle-next="#block3-next"
				        data-cycle-slides="> div"
				        >
				        <div>
							<div class="item">Криптовалюты</div>
							<div class="item">Принципы<br />и применение технологии блокчейн</div>
						</div>
						<div>
							<div class="item">ICO</div>
							<div class="item">Законодательное регулирование</div>
						</div>
						<div>
							<div class="item">Майнинг<br />и оборудование</div>
							<div class="item">Блокчейн для бизнеса</div>
						</div>
				    </div>
			    </div>
			</div>
		</div>
	</div>

	<div class="block4" id="block4">
		<div class="center">
			<div class="title">30 топовых спикеров</div>

			<div class="block4-inside">
				<div class="left">
					<div class="text">
						Мы пригласили более 30 топовых спикеров из разных отраслей: представителей технологических стартапов, банков, государственных структур, а также разработчиков, частных инвесторов и независимых консультантов.
					</div>
				</div>
			</div>

			<div class="block-logos">
				<div class="row">
					<a href="https://www.finam.ru/" target="_blank"><img src="img/logo-finam.jpg "style="position: relative; top: -10px; left: -5px;" /></a>
					<a href="https://alfabank.ru/" target="_blank"><img src="img/logo-alfa-bank.jpg" /></a>
					<a href="http://www.sberbank.ru/ru/s_m_business" target="_blank"><img src="img/logo-sberbank.jpg" /></a>
					<a href="https://qiwi.com/" target="_blank"><img src="img/logo-qiwi.jpg" /></a>
				</div>
				<div class="row">
					<a href="https://www.microsoft.com/ru-ru" target="_blank"><img src="img/logo-microsoft.jpg" style="position: relative; top: -6px; left: -12px;" /></a>
					<a href="https://wirexapp.com/ru-ru/" target="_blank"><img src="img/logo-wirex.jpg" style="position: relative; top: 7px; left: -3px;" /></a>
					<a href="http://fintechru.org/" target="_blank"><img src="img/logo-finteh.jpg" /></a>
				</div>
			</div>

			<div class="peoples" id="speakers">
				
				<div class="block">
					<div class="img"><img src="img/block4-people2.jpg" alt="img"/></div>
					<div class="name">Дмитрий Булычков</div>
					<div class="about-people">
						Директор проектов Центра технологических инноваций Сбербанка
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/block4-people6.jpg" alt="img"/></div>
					<div class="name">Алексей Архипов</div>
					<div class="about-people">
						Руководитель направления развития технологии распределенного реестра, Ассоциации ФинТех
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/gershuni.jpg" alt="img"/></div>
					<div class="name">Степан Гершуни</div>
					<div class="about-people">
						  Управляющий партнер bits.capital
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
					<div class="name">Ярослав Кабаков</div>
					<div class="about-people">
						Заместитель генерального директора АО «Инвестиционная компания «ФИНАМ»
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/block4-people5.jpg" alt="img"/></div>
					<div class="name">Элина Сидоренко</div>
					<div class="about-people">
						Руководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной думы
					</div>
				</div> 

				<div class="block">
					<div class="img">
						<img src="img/kelevra.jpg" alt="img"/>
					</div>
					<div class="name">Кир Келевра</div>
					<div class="about-people">
						Независимый криптотрейдер
					</div>
				</div>
				
				<div class="block">
					<div class="img"><img src="img/barinov.jpg" alt="img"/></div>
					<div class="name">Игорь Баринов</div>
					<div class="about-people">
						 Founder of Oracles Network
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/azrilyan.jpg" alt="img"/></div>
					<div class="name">Максим Азрильян</div>
					<div class="about-people">
						Главный технический архитектор Альфа-Банка
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/block4-people11.jpg" alt="img"/></div>
					<div class="name">Константин Гольдштейн</div>
					<div class="about-people">
						Ведущий технический евангелист Microsoft
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/ivanov.jpg" alt="img"/></div>
					<div class="name">Олег Иванов</div>
					<div class="about-people">
						Основатель CryptoBazar
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/speakers/yudin.jpg" alt="img"/></div>
					<div class="name">Андрей Юдин</div>
					<div class="about-people">
						Co-Founder CryptoBazar Fund
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/block4-people7.jpg" alt="img"/></div>
					<div class="name">Владимир Гамза</div>
					<div class="about-people">
						Председатель комитета ТПП РФ по финансовым рынкам<br />и кредитным организациям
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/merkylova.jpg" alt="img"/></div>
					<div class="name">Дина Меркулова</div>
					<div class="about-people">
						Управляющий директор<br />по торговому финансированию Альфа-Банка
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/speakers/novikov.jpg" alt="img"/></div>
					<div class="name">Павел Новиков</div>
					<div class="about-people">
						Директор центра финансовых технологий
					</div>
				</div>
				

				<div class="all-speakers show">
					<a href="javascript:void(0)" class="show-all-speakers">
					+ 
					<span>Показать <br>всех</span>
					</a>
				</div>
				
				<div class="block hide">
					<div class="img"><img src="img/zegelman.jpg" alt="img"/></div>
					<div class="name">Юлий Зегельман</div>
					<div class="about-people">
						Управляющий партнер Velton Zegelman PC
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people12.jpg" alt="img"/></div>
					<div class="name">Павел Матвеев</div>
					<div class="about-people">
						Основатель Wirex
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/baranov.jpg" alt="img"/></div>
					<div class="name">Баранов Артем</div>
					<div class="about-people">
						Со-основатель и операционный директор Cindicator
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/stukolov.png" alt="img"/></div>
					<div class="name">Павел Стуколов</div>
					<div class="about-people">
						CEO Token Stars
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/simanovskiy.png" alt="img"/></div>
					<div class="name">Сергей Симановский</div>
					<div class="about-people">
						CEO Golos Fund
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/olin.jpg" alt="img"/></div>
					<div class="name">Алексей Олин</div>
					<div class="about-people">
						Основатель DAO.Finance и iVenturer
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/fedorov.jpg" alt="img"/></div>
					<div class="name">Алексей Федоров</div>
					<div class="about-people">
						Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/ageyev.jpg" alt="img"/></div>
					<div class="name">Виктор Агеев</div>
					<div class="about-people">
						CEO, cryptonomica.net
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people8.jpg" alt="img"/></div>
					<div class="name">Павел Мартынов</div>
					<div class="about-people">
						Основатель Steepshot
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people13.jpg" alt="img"/></div>
					<div class="name">Антон Занимонец</div>
					<div class="about-people">
						CEO в Iskander ICOFund
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people15.jpg" alt="img"/></div>
					<div class="name">Станислав Полозов</div>
					<div class="about-people">
						Руководитель отдела внедрения платформы Emer
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people16.jpg" alt="img"/></div>
					<div class="name">Сергей Сергиенко</div>
					<div class="about-people">
						CEO ChronoBank
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/tichonov.jpg" alt="img"/></div>
					<div class="name">Иван Тихонов</div>
					<div class="about-people">
						Основатель и руководитель Bits.media
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/Borodich.jpeg" alt="img"/></div>
					<div class="name">Александр Бородич</div>
					<div class="about-people">
						Основатель блокчейн платформы Universa
					</div>
				</div>

				<div class="block  hide">
					<div class="img"><img src="img/speakers/Blagirev.jpg" alt="img"/></div>
					<div class="name">Алексей Благирев</div>
					<div class="about-people">
						Директор по инновациям, Банк «Открытие»
					</div>
				</div>

				<div class="block  hide">
					<div class="img"><img src="img/speakers/Gurevich.jpg" alt="img"/></div>
					<div class="name">Артём Гуревич</div>
					<div class="about-people">
						Co-Founder Get Crypto
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/kostarev.jpg" alt="img"/></div>
					<div class="name">Алексей Костарев</div>
					<div class="about-people">
						Co-founder Robot Vera
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/belozerov.jpg" alt="img"/></div>
					<div class="name">Андрей Белозёров </div>
					<div class="about-people">
						Советник руководителя Департамента информационных технологий г. Москвы по стратегическим проектам и инновациям
					</div>
				</div>

				<div class="all-speakers hide">
					<a href="javascript:void(0)" class="show-all-speakers">
						<span>Скрыть<br>всех</span>
					</a>
				</div>
			</div>
		</div>

		<div class="slider-mobile peoples">
		    <div class="nav">
		        <span class="prev" id="block4-prev"></span>
		        <span class="next" id="block4-next"></span>
		    </div>

		    <div class="cycle-slideshow" 
		        data-cycle-fx=scrollHorz
		        data-cycle-timeout=0
		        data-cycle-prev="#block4-prev"
		        data-cycle-next="#block4-next"
		        data-cycle-slides="> div"
		        >
		        <div>
					<div class="block">
						<div class="img"><img src="img/block4-people2.jpg" alt="img"/></div>
						<div class="name">Дмитрий Булычков</div>
						<div class="about-people">
							Директор проектов Центра технологических инноваций Сбербанка
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/block4-people6.jpg" alt="img"/></div>
						<div class="name">Алексей Архипов</div>
						<div class="about-people">
							Директор по развитию криптотехнологий QIWI, руководитель направления развития технологии распределенных реестров Ассоциации ФинТех
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/gershuni.jpg" alt="img"/></div>
						<div class="name">Степан Гершуни</div>
						<div class="about-people">
							  Управляющий партнер bits.capital
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
						<div class="name">Ярослав Кабаков</div>
						<div class="about-people">
							Заместитель генерального директора АО «Инвестиционная компания «ФИНАМ»
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/block4-people5.jpg" alt="img"/></div>
						<div class="name">Элина Сидоренко</div>
						<div class="about-people">
							Руководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной думы
						</div>
					</div> 

					<div class="block">
						<div class="img">
							<img src="img/kelevra.jpg" alt="img"/>
						</div>
						<div class="name">Кир Келевра</div>
						<div class="about-people">
							Независимый криптотрейдер
						</div>
					</div>
					
					<div class="block">
						<div class="img"><img src="img/barinov.jpg" alt="img"/></div>
						<div class="name">Игорь Баринов</div>
						<div class="about-people">
							 Founder of Oracles Network
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/azrilyan.jpg" alt="img"/></div>
						<div class="name">Максим Азрильян</div>
						<div class="about-people">
							Главный технический архитектор Альфа-Банка
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/block4-people11.jpg" alt="img"/></div>
						<div class="name">Константин Гольдштейн</div>
						<div class="about-people">
							Ведущий технический евангелист Microsoft
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/ivanov.jpg" alt="img"/></div>
						<div class="name">Олег Иванов</div>
						<div class="about-people">
							Основатель CryptoBazar
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/block4-people7.jpg" alt="img"/></div>
						<div class="name">Владимир Гамза</div>
						<div class="about-people">
							Председатель комитета ТПП РФ по финансовым рынкам<br />и кредитным организациям
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/merkylova.jpg" alt="img"/></div>
						<div class="name">Дина Меркулова</div>
						<div class="about-people">
							Управляющий директор<br />по торговому финансированию Альфа-Банка
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/zegelman.jpg" alt="img"/></div>
						<div class="name">Юлий Зегельман</div>
						<div class="about-people">
							Управляющий партнер Velton Zegelman PC
						</div>
					</div>


					<div class="block">
						<div class="img"><img src="img/block4-people12.jpg" alt="img"/></div>
						<div class="name">Павел Матвеев</div>
						<div class="about-people">
							Основатель Wirex
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/speakers/Gurevich.jpg" alt="img"/></div>
						<div class="name">Артём Гуревич</div>
						<div class="about-people">
							Co-Founder Get Crypto
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/brusov.jpg" alt="img"/></div>
						<div class="name">Михаил Брусов</div>
						<div class="about-people">
							CEO & co-founder Cindicator
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/stukolov.png" alt="img"/></div>
						<div class="name">Павел Стуколов</div>
						<div class="about-people">
							CEO Token Stars
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/simanovskiy.png" alt="img"/></div>
						<div class="name">Сергей Симановский</div>
						<div class="about-people">
							CEO Golos Fund
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/olin.jpg" alt="img"/></div>
						<div class="name">Алексей Олин</div>
						<div class="about-people">
							Основатель DAO.Finance и iVenturer
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/fedorov.jpg" alt="img"/></div>
						<div class="name">Алексей Федоров</div>
						<div class="about-people">
							Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/ageyev.jpg" alt="img"/></div>
						<div class="name">Виктор Агеев</div>
						<div class="about-people">
							CEO, cryptonomica.net
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/block4-people8.jpg" alt="img"/></div>
						<div class="name">Павел Мартынов</div>
						<div class="about-people">
							Основатель Steepshot
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/block4-people13.jpg" alt="img"/></div>
						<div class="name">Антон Занимонец</div>
						<div class="about-people">
							CEO в Iskander ICOFund
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/speakers/yudin.jpg" alt="img"/></div>
						<div class="name">Андрей Юдин</div>
						<div class="about-people">
							Co-Founder CryptoBazar Fund
						</div>
					</div>
					<div class="block">
						<div class="img"><img src="img/block4-people15.jpg" alt="img"/></div>
						<div class="name">Станислав Полозов</div>
						<div class="about-people">
							Руководитель отдела внедрения платформы Emer
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/block4-people16.jpg" alt="img"/></div>
						<div class="name">Сергей Сергиенко</div>
						<div class="about-people">
							CEO ChronoBank
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/tichonov.jpg" alt="img"/></div>
						<div class="name">Иван Тихонов</div>
						<div class="about-people">
							Основатель и руководитель Bits.media
						</div>
					</div>
				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/Borodich.jpeg" alt="img"/></div>
						<div class="name">Александр Бородич</div>
						<div class="about-people">
							Основатель блокчейн платформы Universa
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/speakers/Blagirev.jpg" alt="img"/></div>
						<div class="name">Алексей Благирев</div>
						<div class="about-people">
							Директор по инновациям, Банк «Открытие»
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/speakers/belozerov.jpg" alt="img"/></div>
						<div class="name">Андрей Белозёров </div>
						<div class="about-people">
							Советник руководителя Департамента информационных технологий г. Москвы по стратегическим проектам и инновациям
						</div>
					</div>

				</div>
		    </div>
	    </div>
	</div>

	<div class="block--video">
		<div class="center">
			<div class="title">Интервью со спикерами</div>
			<div class="list slider-mobile">
			    <div class="nav">
			        <span class="prev" id="block-video-prev"></span>
			        <span class="next" id="block-video-next"></span>
			    </div>

			    <div class="cycle-slideshow" 
			        data-cycle-fx=scrollHorz
			        data-cycle-timeout=0
			        data-cycle-prev="#block-video-prev"
			        data-cycle-next="#block-video-next"
			        data-cycle-slides="> div"
			        >
			        <div>
						<div class="video">
		 					<div class="preview video-1">
		 						<img src="img/video-preview-1.jpg" />
		 						<div id="youtube-video-1"></div>
		 					</div>
		 					<div class="name">Дмитрий Булычков</div>
		 					<div class="desc">Директор проектов Центра технологических инноваций Сбербанка</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-2">
		 						<img src="img/video-preview-2.jpg"/>
		  						<div id="youtube-video-2"></div>
		 					</div>
		 					<div class="name">Максим Азрильян</div>
		 					<div class="desc">Главный технический архитектор <br />Альфа-Банка</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-3">
		 						<img src="img/video-preview-3.jpg"/>
		  						<div id="youtube-video-3"></div>
		 					</div>
		 					<div class="name">Степан Гершуни</div>
		 					<div class="desc">Управляющий партнер <br />bits.capital</div>
						</div>
					</div>
			    </div>
		    </div>
		</div>
	</div>
	<div class="block5" id="block5">
		<div class="center">
			<div class="left">
				<div class="title">Зарегистрируйтесь на RUSSIAN BLOCKCHAIN <br />WEEK 2017</div>
				<p class="text">Оставьте заявку сейчас и забронируйте место по самой<br />выгодной цене.</p>
				<p class="text"><a href="#block8-bottom">Подробнее о тарифах</a></p>
			</div>

			<div class="right">

				<form id="form" class="registration-form">
					<p>Зарегистрироваться <br>на мероприятие</p>
					<input type="text" placeholder="Ваше имя" name="name" class="field-name">
					<input type="email" placeholder="Ваш e-mail" name="email" class="field-email" required="required">
					<input type="text" placeholder="Ваш номер телефона" name="phone" class="field-phone" required="required">
					<select class="select" name="select_form">
						<option>Тип билета </option>
						<option>Базовый</option>
						<option>Бизнес</option>
						<option>Бизнес+</option>
					</select>
					<div class="form-item">
						<input type="checkbox" id="checkbox-1-2" class="regular-checkbox">
						<label for="checkbox-1-2"><a href="personal-info.pdf" target="_blank">Даю согласие на обработку<br/>персональных данных</a></label>
					</div>
					<input type="submit" value="Зарегистрироваться" class="disabled">
				</form>
			</div>
		</div>
	</div>

	<div class="block-8-top">
		<div class="center">
			<div class="col">
				<div class="img"><img src="img/logo-reu-medium.jpg" alt="img"/></div>
			</div>
			<div class="col col-2">
				<div class="subtitle">Со-организатор конференции</div>
	    		<div class="title">Российский экономический <br />университет <br class="br-mobile" />имени Г.В. Плеханова</div>
	    		<p class="text">Старейшее высшее образовательное учреждение экономического профиля и один из крупнейших экономических ВУЗов России. Первое из федеральных учебных заведений России, запустившее программу обучения на тему блокчейн.</p>
			</div>
		</div>
	</div>

	<div class="block-cryptoclass">
		<div class="center">

			<div class="title">КРИПТОКЛАСС</div>
			<p class="text">В рамках уникального сотрудничества Russian Blockchain Week 2017 и Российского экономического университета им. Г.В. Плеханова, для всех участников конференции есть возможность дополнительно погрузиться в тему блокчейн и пройти дополнительный образовательный курс в рамках одного дня на базе РЭУ им. Плеханова.</p>

			<div class="subtitle">Основные темы:</div>
			<div class="block-center">
				<ul>
					<li class="first">Введение в технологию блокчейн, криптовалюты и ICO</li>
					<li class="second">Правовые аспекты создания, трейдинга и майнинга криптовалют, проведения ICO</li>
					<li class="third">Майнинг биткойна и других криптовалют</li>
					<li class="fouth">Криптовалютный трейдинг, деятельность криптовалютных бирж</li>
				</ul>	
			</div>

			<div class="subtitle">Что даст участие в криптоклассе:</div>
			<div class="block-bottom">
				<ul>
					<li class="first">
						<img src="img/icon1.png" alt="img"/>
						<p>Работа в небольшой группе с преподавателем</p>
					</li>
					<li class="second">
						<img src="img/icon2.png" alt="img"/>
						<p>Профессиональные связи с уникальными экспертами индустрии</p>
					</li>
					<li class="third">
						<img src="img/icon3.png" alt="img"/>
						<p>Престижный <br>сертификат</p>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="block8" id="block8"> 
		
		<div class="block8-top">
			<div class="center">
				<div class="title">
					Сделайте шаг<br>
					навстречу технологиям<br>
					прямо сейчас!
				</div>

				<div class="bottom-text">
					Бронируйте место на конференции<br> по самой низкой доступной цене!*
				</div>
				<div class="text">
					*Цена за участие в конференции поднимается<br> 
					31-го августа, далее — каждые 2 недели
				</div>
			</div>
		</div>

		<div class="block8-bottom" id="block8-bottom">
			<div class="center">
				<div class="pay-container">
				    <div class="pay-block blue">
				        <div class="name">Базовый</div>
				        <div class="fix-height">
				            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
				            <div class="pay-text">Доступ в выставочную зону</div>
				        </div>
				        <div class="price price1">19 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <div class="price price2">23 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <a href="#block5" onClick='selectTicketType("Базовый"); ga("send", "event", "tarif", "сlick button", "Базовый");'>Забронировать билет</a>
				    </div>
				    <div class="pay-block green">
				        <div class="name">Бизнес</div>
				        <div class="fix-height">
				            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
				            <div class="pay-text">Доступ в выставочную зону</div>
				            <div class="pay-text">Доступ на презентацию стартапов и зал мастер-классов</div>
				            <div class="pay-text">Презентации спикеров и видеозаписи выступлений</div>
				        </div>
				        <div class="price price1">29 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <div class="price price2">34 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <a href="#block5" onClick='selectTicketType("Бизнес"); ga("send", "event", "tarif", "сlick button", "Бизнес");'>Забронировать билет</a>
				    </div>
				    <div class="pay-block orange">
				        <div class="name">Бизнес+</div>
				        <div class="fix-height">
				            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
				            <div class="pay-text">Доступ в выставочную зону</div>
				            <div class="pay-text">Доступ на презентацию стартапов и зал мастер-классов</div>
				            <div class="pay-text">Презентации спикеров и видеозаписи выступлений</div>
				            <div class="pay-text">Доступ на 3-ий день обучения (криптокласс)</div>
				            <div class="pay-text">Сертификат об обучении от РЭУ им. Г.В. Плеханова</div>
				        </div>
				        <div class="price price1">38 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <div class="price price2">44 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <a href="#block5" onClick='selectTicketType("Бизнес+"); ga("send", "event", "tarif", "сlick button", "Бизнес+");'>Забронировать билет</a>
				    </div>
				    <div class="pay-bottom">
				        <div class="row">Цена до 12 октября (руб.)<span>Скидка до 12 октября 10%</span></div>
				        <div class="row">Цена октября (руб.)</div>
				    </div>
				</div>

				<div class="pay-container mobile">
				    <div class="nav">
				        <span class="prev" id="block8-prev"></span>
				        <span class="next" id="block8-next"></span>
				    </div>
				    <div class="cycle-slideshow" 
				        data-cycle-timeout=0
				        data-cycle-prev="#block8-prev"
				        data-cycle-next="#block8-next"
				        data-cycle-slides="> div"
				        data-cycle-fx=carousel
				        data-cycle-carousel-visible=2
				        >
						<div>
						    <div class="pay-block blue">
						        <div class="name">Базовый</div>
						        <div class="fix-height">
						            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
						            <div class="pay-text">Доступ в выставочную зону</div>
						        </div>
						        <div class="price price1">19 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <div class="price price2">23 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <a href="#block5" onClick='selectTicketType("Базовый"); ga("send", "event", "tarif", "сlick button", "Базовый");'>Забронировать билет</a>
						    </div>
						</div>
						<div>
						    <div class="pay-block green">
						        <div class="name">Бизнес</div>
						        <div class="fix-height">
						            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
						            <div class="pay-text">Доступ в выставочную зону</div>
						            <div class="pay-text">Доступ на презентацию стартапов и зал мастер-классов</div>
						            <div class="pay-text">Презентации спикеров и видеозаписи выступлений</div>
						        </div>
						        <div class="price price1">29 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <div class="price price2">34 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <a href="#block5" onClick='selectTicketType("Бизнес"); ga("send", "event", "tarif", "сlick button", "Бизнес");'>Забронировать билет</a>
						    </div>
						</div>
				        <div>
						    <div class="pay-block orange">
						        <div class="name">Бизнес+</div>
						        <div class="fix-height">
						            <div class="pay-text">Доступ в основной поток (конференц-зал)</div>
						            <div class="pay-text">Доступ в выставочную зону</div>
						            <div class="pay-text">Доступ на презентацию стартапов и зал мастер-классов</div>
						            <div class="pay-text">Презентации спикеров и видеозаписи выступлений</div>
						            <div class="pay-text">Доступ на 3-ий день обучения (криптокласс)</div>
						            <div class="pay-text">Сертификат об обучении от РЭУ им. Г.В. Плеханова</div>
						        </div>
						        <div class="price price1">38 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <div class="price price2">44 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <a href="#block5" onClick='selectTicketType("Бизнес+"); ga("send", "event", "tarif", "сlick button", "Бизнес+");'>Забронировать билет</a>
						    </div>
						</div>
				    </div>

					<div class="pay-bottom">
						<div class="row">Цена до<br />12 октября (руб.)<span>Скидка до 12 октября 10%</span></div>
						<div class="row">Цена октября (руб.)</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="block9" id="block9">
		<div class="center">
			<div class="title">Участники конференции —<br> не только единомышленники,<br /> но и новые возможности</div>

			<div class="tooltips">
				<div class="tooltip tooltip-bottom-right">Предприниматель</div>
				<div class="tooltip tooltip-top">Стартап</div>
				<div class="tooltip tooltip-bottom">Разработчик</div>
				<div class="tooltip tooltip-top">Поставщик<br />оборудования</div>
				<div class="tooltip tooltip-bottom-left">Инвесторы</div>
			</div>
		</div>
	</div>

	<div class="block9-bottom" id="block9-bottom">
		<div class="center">

			<div class="center-block">
				<span class="first-span">Мы ждём <br>
				Вас в
				</span>
				<p>Российском экономическом университете<br>им. Г.В. Плеханова</p>
				<span class="last-span">г. Москва, <br>
				Стремянный пер. 36
				</span>
			</div>

			<div class="bottom">
				<p class="month"><span>26 - 28 </span>октября 2017 </p>

				<div class="div-parking">
					<div class="p">P</div>
					<a href="javascript:void(0);">Парковка</a>
					<span class="parking-text">Парковка муниципальная</span>
				</div>

				<div class="div-map">
					<img src="img/icon-city.png" alt="img"/>
					<a href="https://yandex.ru/maps/213/moscow/?z=16&mode=search&ll=37.627696%2C55.727268&text=%D0%A1%D1%82%D1%80%D0%B5%D0%BC%D1%8F%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BF%D0%B5%D1%80.%2036&sll=37.645914%2C55.716680&sspn=0.020685%2C0.006977" target="_blank">Карта <br>проезда</a>
				</div>

			</div>
		</div>
	</div>

	<div class="block10 nav" id="block10">
		<div class="top-block">
			<div class="center">
				<div class="title">Наши партнеры</div>
				<div class="actions">
					<a href="#" class="button btn-become-partner">Стать партнером</a>
					<a href="sponsor.php" class="button more">Подробнее</a>
				</div>
				<div class="slider-mobile">
				    <div class="nav">
				        <span class="prev" id="block10-prev"></span>
				        <span class="next" id="block10-next"></span>
				    </div>

				    <div class="cycle-slideshow" 
				        data-cycle-fx=scrollHorz
				        data-cycle-timeout=0
				        data-cycle-prev="#block10-prev"
				        data-cycle-next="#block10-next"
				        data-cycle-slides="> div"
				        >
				        <div>
							<div class="links-partner">
								<p>Официальный партнер</p>
								<div class="content">
									<a target="_blank" href="http://fintechru.org/" style="margin-bottom: 26px;"><img src="img/logo-partners/logo-finteh.jpg" alt="img" style="max-width: 300px;"/></a>
									<span>Помогает создавать условия для цифровизации экономики и разрабатывает новые технологические решения в целях обеспечения развития финансового рынка РФ.</span>
								</div>
							</div>
						</div>
						<div>
							<div class="links-partner">
								<p style="margin-bottom: 20px;">Партнеры</p>
								<div class="content">
									<a target="_blank" href="https://www.moedelo.org/"><img src="img/logo-partners/moedelo.jpg" alt="img"/></a>
									<a target="_blank" href="https://www.finam.ru/"><img src="img/logo-partners/finam.png" alt="img" style="max-height: 113px; margin-top: -19px;"/></a>
									<a target="_blank" href="http://learn.alfabank.ru/"><img src="img/logo-partners/logo-alfa.jpg" alt="img"/></a>
									<a target="_blank" href="http://lp.mmgp.ru/7"><img src="img/logo-partners/logo_mmgp.png" alt="img"/></a>
									<a target="_blank" href="https://ru.tradingview.com/"><img src="img/logo-partners/logo-teletrade.jpg" alt="img"/></a>
									<a target="_blank" href="https://alfabank.ru/"><img src="img/logo-partners/alfabank.png" alt="img"/></a>
								</div>
							</div>
						</div>

						<div>
							<div class="links-partner">
								<p style="margin-top: 30px;">Инновационный партнер</p>
								<div class="content">
									<a target="_blank" href="http://sk.ru/technopark/"><img src="img/logo-partners/sklogo_ru.png" alt="img"/></a>
									<span>Миссия Фонда «Сколково» – создание Экосистемы, формирование благоприятных условий для инновационного процесса.</span>
								</div>
							</div>
						</div>

						<div>
							<div class="links-partner information--partners">
								<p style="margin-top: 30px; margin-bottom: 40px;">Информационные партнеры</p>
								<div class="content">
									<a target="_blank" href="http://www.interfax.ru/"><img src="img/logo-partners/Interfax.png" alt="img"/></a>
									<a target="_blank" href="https://freedman.club/"><img src="img/logo-partners/Freedman-club-Crypto-News.svg" alt="img"/></a>
									<a target="_blank" href="http://sk.ru/technopark/"><img src="img/logo-partners/technopark.jpg" alt="img"/></a>
									<a target="_blank" href="http://1prime.ru/ "><img src="img/logo-partners/logo-prime.jpg" alt="img"/></a>
									<a target="_blank" href="https://ru.insider.pro/"><img src="img/logo-partners/insider.pro.jpg" alt="img"/></a>
									<a target="_blank" href="http://inc.hse.ru/ "><img src="img/logo-partners/inc.hse.png" alt="img"/></a>
									<a target="_blank" href="https://www.if24.ru/kontakty/"><img src="img/logo-partners/investforsight.jpg" alt="img"/></a>
									<a target="_blank" href="http://thewallmagazine.ru/"><img src="img/logo-partners/thewall.jpg" alt="img"/></a>
									<a target="_blank" href="https://www.mediacrat.com"><img src="img/logo-partners/BRICS_logo_white.png" alt="img"/></a>
									<a target="_blank" href="http://www.prosperity-media.ru/"><img src="img/logo-partners/ProsperityMedia.png" alt="img"/></a>
									<a target="_blank" href="http://astera.ru/events/"><img src="img/logo-partners/Astera.JPG" alt="img"/></a>
									<a target="_blank" href="http://www.connect-wit.ru/"><img src="img/logo-partners/Connect_180x92 (1).jpg" alt="img"/></a>
									<a target="_blank" href="http://nbj.ru/"><img src="img/logo-partners/Logo_NBJ_jpeg.jpg" alt="img"/></a>
									<a target="_blank" href="http://ict-online.ru/"><img src="img/logo-partners/ict_online_logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://bits.media/news/"><img src="img/logo-partners/bits-media.png" alt="img"/></a>
									<a target="_blank" href="https://www.itweek.ru/"><img src="img/logo-partners/pcweek_logo2.png" alt="img"/></a>
									<a target="_blank" href="https://bbf.ru/"><img src="img/logo-partners/bbflogo.png" alt="img"/></a>
									<a target="_blank" href="http://FreeBitcoins.pp.ua"><img src="img/logo-partners/head.png" alt="img"/></a>
									<a target="_blank" href="http://sotnibankov.com"><img src="img/logo-partners/cec0a5d02e9d1fe042cc0629b7188e9c.png" alt="img"/></a>
									<a target="_blank" href="http://www.bankchart.ru"><img src="img/logo-partners/bankchart.ru.png" alt="img"/></a>
									<a target="_blank" href="http://rarib.ru"><img src="img/logo-partners/logo_new.png" alt="img"/></a>
									<a target="_blank" href="http://npaed.ru"><img src="img/logo-partners/logo (2).png" alt="img"/></a>
									<a target="_blank" href="https://fd.ru/"><img src="img/logo-partners/logo (1).png" alt="img"/></a>
									<a target="_blank" href="https://bosfera.ru"><img src="img/logo-partners/bo_sayt_standart_1_0.jpg" alt="img"/></a>
									<a target="_blank" href="http://www.cio.ru/"><img src="img/logo-partners/open-system.jpg" alt="img"/></a>
									<a target="_blank" href="http://web-payment.ru/"><img src="img/logo-partners/logo.png" alt="img"/></a>
									<a target="_blank" href="https://t.me/Pro_Crypto"><img src="img/logo-partners/bazukaTG2.png" alt="img"/></a>
									<a target="_blank" href="http://it-events.com"><img src="img/logo-partners/it-events-logo.png" alt="img"/></a>
									<a target="_blank" href="https://rueconomics.ru/page/about"><img src="img/logo-partners/rueconomics.png" alt="img"/></a>
									<a target="_blank" href="https://new-retail.ru/"><img src="img/logo-partners/nr.png" alt="img"/></a>
									<a target="_blank" href="https://www.cfo-russia.ru/ "><img src="img/logo-partners/CFO.png" alt="img"/></a>
									<a target="_blank" href="https://visinvest.net/"><img src="img/logo-partners/visinvest-logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://happycoin.club/"><img src="img/logo-partners/hc-club-logo.jpg" alt="img"/></a>
									<a target="_blank" href="http://seo-party.com/ "><img src="img/logo-partners/logo-seo-party.jpg" alt="img"/></a>
									<a target="_blank" href="http://online24news.ru/"><img src="img/logo-partners/online24news.jpg" alt="img"/></a>
									<a target="_blank" href="https://t.me/trendcoin"><img src="img/logo-partners/trend-coin.png" alt="img"/></a>
									<a target="_blank" href="http://combanks.ru/"><img src="img/logo-partners/combanks.ru-logo.png" alt="img"/></a>
									<a target="_blank" href="https://www.iseo.ru/"><img src="img/logo-partners/logo-iSEO.jpg" alt="img"/></a>
									<a target="_blank" href="https://registratura.ru/"><img src="img/logo-partners/registratura-logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://vse-kursy.com/"><img src="img/logo-partners/logocom.jpg" alt="img"/></a>
									<a target="_blank" href="https://bitcoincloudmining.center/ "><img src="img/logo-partners/BitcoinCloudMining2.png" alt="img"/></a>
									<a target="_blank" href="https://xakep.ru/"><img src="img/logo-partners/xakep_logo_medium.png" alt="img"/></a>
									<a target="_blank" href="https://t.me/BTC4BROchannel"><img src="img/logo-partners/BTC4BROchannel.jpg" alt="img"/></a>
									<a target="_blank" href="http://crypto.by/ "><img src="img/logo-partners/crypto.by.jpg" alt="img"/></a>
									<a target="_blank" href="http://www.apollo-8.ru/"><img src="img/logo-partners/apollo-8.jpg" alt="img"/></a>
									<a target="_blank" href="https://investfuture.ru/ "><img src="img/logo-partners/investfuture-logo.jpg" alt="img"/></a>
									<a target="_blank" href="http://la.by/"><img src="img/logo-partners/laby-logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://allcoinshome.com/ "><img src="img/logo-partners/profvest.png" alt="img"/></a>
									<a target="_blank" href="http://la.by/"><img src="img/logo-partners/allcoinshome.png" alt="img"/></a>
									<a target="_blank" href="https://journal.ib-bank.ru/"><img src="img/logo-partners/bis_journal.png" alt="img"/></a>
									<a target="_blank" href="http://cyberrus.com/"><img src="img/logo-partners/voprosy-kiberbesopasnosti.png" alt="img"/></a>
									<a target="_blank" href="https://www.newstube.ru/"><img src="img/logo-partners/newstube.png" alt="img"/></a>
									<a target="_blank" href="https://maining.info/"><img src="img/logo-partners/maining-info.jpg" alt="img"/></a>
									<a target="_blank" href="http://bit.samag.ru/"><img src="img/logo-partners/bit-samag.ru.jpg" alt="img"/></a>
									<a target="_blank" href="http://samag.ru/"><img src="img/logo-partners/samag.ru.jpg" alt="img"/></a>
									<a target="_blank" href="http://apps4all.ru/"><img src="img/logo-partners/apps4all.png" alt="img"/></a>
									<a target="_blank" href="http://techworm.ru/ "><img src="img/logo-partners/techworm.png" alt="img"/></a>
									<a target="_blank" href="https://offshoreview.eu/ "><img src="img/logo-partners/offshoreview.png" alt="img"/></a>
									<a target="_blank" href="https://t.me/cryptoinvest"><img src="img/logo-partners/telegram-canal.jpg" alt="img"/></a>
									<a target="_blank" href="https://pma-network.com/"><img src="img/logo-partners/pman_logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://www.englishdom.com/?utm_medium=partners&utm_source=rbw2017&utm_campaign=banner_sidebar"><img src="img/logo-partners/englishdom.png" alt="img"/></a>
									<a target="_blank" href="https://www.prostoy.ru"><img src="img/logo-partners/prostoy.ru.png" alt="img"/></a>
									<a target="_blank" href="https://inforeactor.ru/ "><img src="img/logo-partners/iReactor_Black.png" alt="img"/></a>
									<a target="_blank" href="http://ingria-park.ru/ "><img src="img/logo-partners/Logo_TechnoparkSPb-ru.png" alt="img"/></a>
								</div>
							</div>
						</div>
				    </div>
			    </div>
				<div class="links-partner">
					<p>Официальный партнер</p>
					<a target="_blank" href="http://fintechru.org/" style="margin-right: 30px; margin-bottom: 58px;width:auto"><img src="img/logo-partners/logo-finteh.jpg" alt="img" style="max-width: 300px;"/></a>
					<span>Помогает создавать условия для цифровизации экономики и разрабатывает новые технологические решения в целях обеспечения развития финансового рынка РФ.</span>

					<p style="margin-bottom: 20px;">Партнеры</p>
					<a target="_blank" href="https://www.moedelo.org/" class="big"><img src="img/logo-partners/moedelo.jpg" alt="img"/></a>
					<a target="_blank" href="https://www.finam.ru/" class="big"><img src="img/logo-partners/finam.png" alt="img" style="max-height: 113px; margin-top: -19px;"/></a>
					<a target="_blank" href="http://learn.alfabank.ru/" class="big"><img src="img/logo-partners/logo-alfa.jpg" alt="img"/></a>
					<a target="_blank" href="http://lp.mmgp.ru/7" class="big"><img src="img/logo-partners/logo_mmgp.png" alt="img"/></a>
					<a target="_blank" href="https://ru.tradingview.com/" class="big"><img style="width:120px" src="img/logo-partners/logo-teletrade.jpg" alt="img"/></a>
					<a target="_blank" href="https://alfabank.ru/" class="big"><img style="max-width:250px" src="img/logo-partners/alfabank.png" alt="img"/></a>

					<p style="margin-top: 30px;">Инновационный партнер</p>
					<div class="information-partners">
						<a target="_blank" href="http://sk.ru/technopark/"><img src="img/logo-partners/sklogo_ru.png" style="max-height:120px" alt="img"/></a>
						<span>Миссия Фонда «Сколково» – создание Экосистемы, формирование благоприятных условий для инновационного процесса.</span>
					</div>

					<br>
					<p style="margin-top: 30px;">Информационные партнеры</p>
					<div class="information-partners">
						<a target="_blank" href="http://www.interfax.ru/"><img src="img/logo-partners/Interfax.png" alt="img"/></a>
						<a target="_blank" href="https://freedman.club/"><img src="img/logo-partners/Freedman-club-Crypto-News.svg" alt="img"/></a>
						<a target="_blank" href="http://sk.ru/technopark/"><img src="img/logo-partners/technopark.jpg" alt="img"/></a>
						<a target="_blank" href="http://1prime.ru/ "><img src="img/logo-partners/logo-prime.jpg" alt="img"/></a>
						<a target="_blank" href="https://ru.insider.pro/"><img src="img/logo-partners/insider.pro.jpg" alt="img"/></a>
						<a target="_blank" href="http://inc.hse.ru/ "><img src="img/logo-partners/inc.hse.png" alt="img"/></a>
						<a target="_blank" href="https://www.if24.ru/kontakty/"><img src="img/logo-partners/investforsight.jpg" alt="img"/></a>
						<a target="_blank" href="http://thewallmagazine.ru/"><img src="img/logo-partners/thewall.jpg" alt="img"/></a>
						<a target="_blank" href="https://www.mediacrat.com"><img src="img/logo-partners/BRICS_logo_white.png" alt="img"/></a>
						<a target="_blank" href="http://www.prosperity-media.ru/"><img src="img/logo-partners/ProsperityMedia.png" alt="img"/></a>
						<a target="_blank" href="http://astera.ru/events/"><img src="img/logo-partners/Astera.JPG" alt="img"/></a>
						<a target="_blank" href="http://www.connect-wit.ru/"><img src="img/logo-partners/Connect_180x92 (1).jpg" alt="img"/></a>
						<a target="_blank" href="http://nbj.ru/"><img src="img/logo-partners/Logo_NBJ_jpeg.jpg" alt="img"/></a>
						<a target="_blank" href="http://ict-online.ru/"><img src="img/logo-partners/ict_online_logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://bits.media/news/"><img src="img/logo-partners/bits-media.png" alt="img"/></a>
						<a target="_blank" href="https://www.itweek.ru/"><img src="img/logo-partners/pcweek_logo2.png" alt="img"/></a>
						<a target="_blank" href="https://bbf.ru/"><img src="img/logo-partners/bbflogo.png" alt="img"/></a>
						<a target="_blank" href="http://FreeBitcoins.pp.ua"><img src="img/logo-partners/head.png" alt="img"/></a>
						<a target="_blank" href="http://sotnibankov.com"><img src="img/logo-partners/cec0a5d02e9d1fe042cc0629b7188e9c.png" alt="img"/></a>
						<a target="_blank" href="http://www.bankchart.ru"><img src="img/logo-partners/bankchart.ru.png" alt="img"/></a>
						<a target="_blank" href="http://rarib.ru"><img src="img/logo-partners/logo_new.png" alt="img"/></a>
						<a target="_blank" href="http://npaed.ru"><img src="img/logo-partners/logo (2).png" alt="img"/></a>
						<a target="_blank" href="https://fd.ru/"><img src="img/logo-partners/logo (1).png" alt="img"/></a>
						<a target="_blank" href="https://bosfera.ru"><img src="img/logo-partners/bo_sayt_standart_1_0.jpg" alt="img"/></a>
						<a target="_blank" href="http://www.cio.ru/"><img src="img/logo-partners/open-system.jpg" alt="img"/></a>
						<a target="_blank" href="http://web-payment.ru/"><img src="img/logo-partners/logo.png" alt="img"/></a>
						<a target="_blank" href="https://t.me/Pro_Crypto"><img src="img/logo-partners/bazukaTG2.png" alt="img"/></a>
						<a target="_blank" href="http://it-events.com"><img src="img/logo-partners/it-events-logo.png" alt="img"/></a>
						<a target="_blank" href="https://rueconomics.ru/page/about"><img src="img/logo-partners/rueconomics.png" alt="img"/></a>
						<a target="_blank" href="https://new-retail.ru/"><img src="img/logo-partners/nr.png" alt="img"/></a>
						<a target="_blank" href="https://www.cfo-russia.ru/ "><img src="img/logo-partners/CFO.png" alt="img"/></a>
						<a target="_blank" href="https://visinvest.net/"><img src="img/logo-partners/visinvest-logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://happycoin.club/"><img src="img/logo-partners/hc-club-logo.jpg" alt="img"/></a>
						<a target="_blank" href="http://seo-party.com/ "><img src="img/logo-partners/logo-seo-party.jpg" alt="img"/></a>
						<a target="_blank" href="http://online24news.ru/"><img src="img/logo-partners/online24news.jpg" alt="img"/></a>
						<a target="_blank" href="https://t.me/trendcoin"><img src="img/logo-partners/trend-coin.png" alt="img"/></a>
						<a target="_blank" href="http://combanks.ru/"><img src="img/logo-partners/combanks.ru-logo.png" alt="img"/></a>
						<a target="_blank" href="https://www.iseo.ru/"><img src="img/logo-partners/logo-iSEO.jpg" alt="img"/></a>
						<a target="_blank" href="https://registratura.ru/"><img src="img/logo-partners/registratura-logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://vse-kursy.com/"><img src="img/logo-partners/logocom.jpg" alt="img"/></a>
						<a target="_blank" href="https://bitcoincloudmining.center/ "><img src="img/logo-partners/BitcoinCloudMining2.png" alt="img"/></a>
						<a target="_blank" href="https://xakep.ru/"><img src="img/logo-partners/xakep_logo_medium.png" alt="img"/></a>
						<a target="_blank" href="https://t.me/BTC4BROchannel"><img src="img/logo-partners/BTC4BROchannel.jpg" alt="img"/></a>
						<a target="_blank" href="http://crypto.by/ "><img src="img/logo-partners/crypto.by.jpg" alt="img"/></a>
						<a target="_blank" href="http://www.apollo-8.ru/"><img src="img/logo-partners/apollo-8.jpg" alt="img"/></a>
						<a target="_blank" href="https://investfuture.ru/ "><img src="img/logo-partners/investfuture-logo.jpg" alt="img"/></a>
						<a target="_blank" href="http://la.by/"><img src="img/logo-partners/laby-logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://allcoinshome.com/ "><img src="img/logo-partners/profvest.png" alt="img"/></a>
						<a target="_blank" href="http://la.by/"><img src="img/logo-partners/allcoinshome.png" alt="img"/></a>
						<a target="_blank" href="https://journal.ib-bank.ru/"><img src="img/logo-partners/bis_journal.png" alt="img"/></a>
						<a target="_blank" href="http://cyberrus.com/"><img src="img/logo-partners/voprosy-kiberbesopasnosti.png" alt="img"/></a>
						<a target="_blank" href="https://www.newstube.ru/"><img src="img/logo-partners/newstube.png" alt="img"/></a>
						<a target="_blank" href="https://maining.info/"><img src="img/logo-partners/maining-info.jpg" alt="img"/></a>
						<a target="_blank" href="http://bit.samag.ru/"><img src="img/logo-partners/bit-samag.ru.jpg" alt="img"/></a>
						<a target="_blank" href="http://samag.ru/"><img src="img/logo-partners/samag.ru.jpg" alt="img"/></a>
						<a target="_blank" href="http://apps4all.ru/"><img src="img/logo-partners/apps4all.png" alt="img"/></a>
						<a target="_blank" href="http://techworm.ru/ "><img src="img/logo-partners/techworm.png" alt="img"/></a>
						<a target="_blank" href="https://offshoreview.eu/ "><img src="img/logo-partners/offshoreview.png" alt="img"/></a>
						<a target="_blank" href="https://t.me/cryptoinvest"><img src="img/logo-partners/telegram-canal.jpg" alt="img"/></a>
						<a target="_blank" href="https://pma-network.com/"><img src="img/logo-partners/pman_logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://www.englishdom.com/?utm_medium=partners&utm_source=rbw2017&utm_campaign=banner_sidebar"><img src="img/logo-partners/englishdom.png" alt="img"/></a>
						<a target="_blank" href="https://www.prostoy.ru"><img src="img/logo-partners/prostoy.ru.png" alt="img"/></a>
						<a target="_blank" href="https://inforeactor.ru/ "><img src="img/logo-partners/iReactor_Black.png" alt="img"/></a>
						<a target="_blank" href="http://ingria-park.ru/ "><img src="img/logo-partners/Logo_TechnoparkSPb-ru.png" alt="img"/></a>

					</div>
				</div>
				<div class="block--become-partner">
					<div class="close"></div>
					<form id="form2" class="form--become-partner">
						<div class="form-item">
							<input type="text" placeholder="Ваше имя" name="name" class="field-name" required="required">
						</div>
						<div class="form-item">
							<input type="email" placeholder="Ваш e-mail" name="email" class="field-email" required="required">
						</div>
						<div class="form-item">
							<input type="text" placeholder="Ваш номер телефона" name="phone" class="field-phone" required="required">
						</div>
						<input type="submit" value="Отправить" class="disabled">
						<div class="notice"><span>*</span> Поля обязательные для заполнения</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="block9-bottom mobile" id="block9-bottom">
		<div class="center">

			<div class="center-block">
				<span class="first-span">Мы ждём <br>
				Вас в
				</span>
				<p>Российском экономическом университете<br>им. Г.В. Плеханова</p>
				<span class="last-span">г. Москва, <br>
				Стремянный пер. 36
				</span>
			</div>

			<div class="bottom">
				<p class="month"><span>26 - 28 </span>октября 2017 </p>

				<div class="div-parking">
					<div class="p">P</div>
					<a href="javascript:void(0);">Парковка</a>
					<span class="parking-text">Парковка муниципальная</span>
				</div>

				<div class="div-map">
					<img src="img/icon-city.png" alt="img"/>
					<a href="https://yandex.ru/maps/213/moscow/?z=16&mode=search&ll=37.627696%2C55.727268&text=%D0%A1%D1%82%D1%80%D0%B5%D0%BC%D1%8F%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BF%D0%B5%D1%80.%2036&sll=37.645914%2C55.716680&sspn=0.020685%2C0.006977" target="_blank">Карта <br>проезда</a>
				</div>

			</div>
		</div>
	</div>

	<div class="footer">
		<div class="center">
			<div class="logo">
				RUSSIAN <br>
				BLOCKCHAIN<br>
				WEEK <span>2017</span>
			</div>

			<a href="javascript:void(0);"></a>
			<a href="javascript:void(0);" class="copyright"> <br></a>

			<div class="right">
				<div class="phone"><span>+7 (499)</span> 404 17 03</div>
				<a class="mail" href="javascript:void(0);">hi@blockchainweek.moscow</a><br>
				<div class="links">
					<div class="link">
						<a target="_blank" href="/politikaconf.pdf">Политика конфиденциальности</a>
					</div>
					<div class="link">
						<a target="_blank" href="/oferta.pdf">Публичная оферта об участии в мероприятии</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->

	     <div class="block--video">
			<div class="video">
				<div class="preview video-4">
					<div id="youtube-video-4"></div>
				</div>
			</div>
		</div>

</div>
<div id="overlay"></div><!-- Пoдлoжкa -->




<script>
  var youtubeVideoTag1 = document.createElement('script');
  youtubeVideoTag1.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(youtubeVideoTag1, firstScriptTag);
  var youtubeVideoPlayer1;

  var youtubeVideoTag2 = document.createElement('script');
  youtubeVideoTag2.src = "https://www.youtube.com/iframe_api";
  firstScriptTag.parentNode.insertBefore(youtubeVideoTag2, firstScriptTag);
  var youtubeVideoPlayer2;

  var youtubeVideoTag3 = document.createElement('script');
  youtubeVideoTag3.src = "https://www.youtube.com/iframe_api";
  firstScriptTag.parentNode.insertBefore(youtubeVideoTag3, firstScriptTag);
  var youtubeVideoPlayer3;

   var youtubeVideoTag4 = document.createElement('script');
  youtubeVideoTag4.src = "https://www.youtube.com/iframe_api";
  firstScriptTag.parentNode.insertBefore(youtubeVideoTag4, firstScriptTag);
  var youtubeVideoPlayer4;

  function onYouTubeIframeAPIReady() {
    youtubeVideoPlayer1 = new YT.Player('youtube-video-1', {
      height: '196',
      width: '350',
      videoId: '7xF6JHkuDOw'
    });

    youtubeVideoPlayer2 = new YT.Player('youtube-video-2', {
      height: '196',
      width: '350',
      videoId: 'SqPRWf7UqDA'
    });

    youtubeVideoPlayer3 = new YT.Player('youtube-video-3', {
      height: '196',
      width: '350',
      videoId: 'GnYXuQjPSbQ'
    });

    youtubeVideoPlayer4 = new YT.Player('youtube-video-4', {
      height: '480',
      width: '854',
      videoId: 'VlYQc-RtCCU'
    });

  }
</script>

<!-- Scripts -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/jquery.scrolldepth.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="js/jquery.cycle2.carousel.min.js"></script>
</body>
</html>
