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
<meta name="format-detection" content="telephone=no">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Russian Blockchain Week — 2017 Конференция по блокчейн</title>
	<meta name="keywords" content="russian blockchain week, blockchain week, конференция блокчейн, blockchain конференция, конференция биткоин, блокчейн семинар, биткоин семинар, обучение блокчейн, обучение  blockchain, консультации блокчейн" />
	<meta name="description" content="Russian blockсhain Week (Российская неделя блокчейн и криптовалют) — это главное событие года в своей индустрии, которое объединяет в себе 4 формата: конференция, выставка и шоу блокчейн-проектов, Blockchain.EXPO и Blockchain.NIGHT" />
	<link href="css/style.css" type="text/css" rel="stylesheet"/>
	<link href="css/fonts.css" type="text/css" rel="stylesheet"/>
	<link href="css/jquery.formstyler.css" type="text/css" rel="stylesheet"/>
	<link href="css/jquery.formstyler.theme.css" type="text/css" rel="stylesheet"/>
	
</head>
<div class="wrapper wrapper--page-sponsor">
	<div class="page-sponsor">
		<header class="header">
			<div class="center">
				<div class="menu-toggle"></div>
				<ul class="menu">
					<li><a href="/#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
					<li><a href="/#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
					<li><a href="/#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
					<li><a href="/#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
					<li><a href="/#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
					<li><a href="/#block10" class="active" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
					<li class="buy-ticket"><a href="/#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
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
					<li><a href="/#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
					<li><a href="/#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
					<li><a href="/#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
					<li><a href="/#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
					<li><a href="/#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
					<li><a href="/#block10" class="active" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
					<li class="buy-ticket"><a href="/#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
				</ul>
			</div>	
			<div class="toggle"></div>
			<div class="menu-mobile">
				<li><a href="/#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
				<li><a href="/#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
				<li><a href="/#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
				<li><a href="/#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
				<li><a href="/#block9-bottom.mobile" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
				<li><a href="/#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
				<li><a href="/#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
			</div>
		</div><!-- .header-->

		<div class="block--sponsor-title">
			<div class="center">
		    	<div class="title">Партнерам<br />конференции</div>
			</div>
		</div>
		
		<div class="block--sponsor--declare-your-company">
			<div class="center">
		    	<div class="title">Заявите о своей компании</div>
		    	<div class="desc">Продемонстрируйте свою надежность и сделайте специальное предложение для участников конференции — вы получите доступ к двум целевым аудиториям.</div>
				<div class="grid">
					<div class="col col-1">
						<div class="subtitle">Руководители<br />и предприниматели </div>
						<p>Руководители среднего и высшего звена в крупных компаниях, основатели малого и среднего бизнеса,  интересующиеся технологией блокчейн и возможностью реализовать новый проект или запустить новый бизнес на основе новой технологии.</p>
					</div>
					<div class="col col-2">
						<div class="subtitle">Конференция</div>
					</div>
					<div class="col col-3">
						<div class="subtitle">Инвесторы</div>
						<p>Аудитория, интересующаяся технологией блокчейн и заработком на криптовалютах, которая готова инвестировать в частный бизнес.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="block--advantages">
			<div class="center">
		    	<div class="title">Что даёт партнерство<br />с конференцией</div>
		    	<div class="list">
		    		<div class="item">Доступ к лояльной<br />целевой аудитории</div>
		    		<div class="item">Имиджевая поддержка<br />от крупного тематического<br />мероприятия </div>
		    	</div>	
		    </div>
		</div>

		<div class="block--possible-formats">
			<div class="center">
				<div class="col">
		    		<div class="title">Возможные <br />форматы <br />участия</div>
		    	</div>
		    	<div class="col">
			    	<div class="list">
			    		<div class="item">место в выставочной зоне;</div>
			    		<div class="item">размещение информации в СМИ;</div>
			    		<div class="item">публикация информации среди подписчиков в группе конференции в социальных сетях;</div>
			    		<div class="item">размещение ролл-апа на конференции;</div>
			    		<div class="item">брендирование бейджей / раздаточных материалов / стоек регистрации;</div>
			    		<div class="item">публикация информации на сайте;</div>
			    		<div class="item">скидки для ваших клиентов и подписчиков по промокоду;</div>
			    		<div class="item">распространение рекламных материалов в пакетах для участников конференции.</div>
			    	</div>
		    	</div>	
		    </div>
		</div>


		<div class="block--declare-yourself">
			<div class="center">
		    	<div class="title">Заявите о себе как о надежной<br />и доверенной компании</div>
		    	<div class="desc">Участники конференции уже зарабатывают большие деньги на криптовалюте и блокчейне. Они будут искать новые возможности и решения для своих проектов. Становитесь таким решением и зарабатывайте вместе.</div>	
		    </div>
		    <div class="actions">
		    	<div class="list">
		    		<div class="item ic-download"><a href="/Predlozhenie_dlja_blokchejn_proektov.pdf" target="_blank">Cкачать описание<br />возможностей</a></div>
		    		<div class="item ic-mail"><a href="mailto:hi@blockchainweek.moscow">Напишите нам</a></div>
		    	</div>	
		    </div>
		</div>

	<!--
		<div id="block-organizers">
			<div class="center">
				<div class="title">Организаторы</div>

				<div class="block4-inside">
					<div class="text">
						Напишите одному из организаторов, если вы хотите принять участие<br />в конференции в качестве спикера или спонсора, а также если у вас есть любой<br />другой вопрос, касающийся Russian blockchain week 2017
					</div>
				</div>

				<div class="peoples" id="speakers">
					
					<div class="block">
						<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
						<div class="name">Олег Петряшёв</div>
						<div class="about-people">
							Взаимодействие с экспонентами и спонсорами
						</div>
						<div class="mail"><a href="mailto:ar@blockchainweek.moscow">ar@blockchainweek.moscow</a></div>
					</div>
					<div class="block">
						<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
						<div class="name">Кирилл Поляков</div>
						<div class="about-people">
							Коммуникация со спикерами
						</div>
						<div class="mail"><a href="mailto:kirill@blockchainweek.moscow">kirill@blockchainweek.moscow</a></div>
					</div>
					<div class="block">
						<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
						<div class="name">Дарья Руденко</div>
						<div class="about-people">
							Информационные партнеры
						</div>
						<div class="mail"><a href="mailto:dasha@blockchainweek.moscow">dasha@blockchainweek.moscow</a></div>
					</div>
					<div class="block">
						<div class="img"><img src="img/Kabakov.jpg" alt="img"/></div>
						<div class="name">Павел Серышев</div>
						<div class="about-people">
							Взаимодействие со СМИ
						</div>
						<div class="mail"><a href="mailto:pavel@blockchainweek.moscow">pavel@blockchainweek.moscow</a></div>
					</div>
				</div>
			</div>
		</div>
	-->
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
</div>

<!-- Scripts -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/jquery.scrolldepth.min.js" type="text/javascript"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="js/script.js"></script>
<script src="https://api.ticketscloud.org/static/scripts/widget/tcwidget.js"></script>
</body>
</html>