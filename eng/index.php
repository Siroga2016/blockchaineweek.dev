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

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Технологии блокчейн и криптовалюты — 2017</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="/css/style.css" type="text/css" rel="stylesheet"/>
	<link href="/css/fonts.css" type="text/css" rel="stylesheet"/>
	<link href="/css/jquery.formstyler.css" type="text/css" rel="stylesheet"/>
	<link href="/css/jquery.formstyler.theme.css" type="text/css" rel="stylesheet"/>
	
</head>
<body>

<div class="wrapper">
	<header class="header">
		<div class="center">
			<div class="menu-toggle"></div>
			<ul class="menu">
				<li><a href="#block2">О мероприятии  <img src="/img/icon-dropdown.png" alt="img"/></a></li>
				<li><a href="#block3">Ключевые темы</a></li>
				<li><a href="#block7">Программа</a></li>
				<li><a href="#block8">Стоимость</a></li>
				<li><a href="#block9-bottom">Контакты</a></li>
				<li><a href="#block10">Партнеры</a></li>
				<li class="buy-ticket"><a href="#block8-bottom">Купить билет</a></li>
			</ul>

			<ul class="languages">
				<li><a href="/" class="active">Рус</a></li>
				<li><a href="/eng">Eng</a></li>
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
				<li><a href="#block2">О мероприятии </a></li>
				<li><a href="#block3">Ключевые темы</a></li>
				<li><a href="#block7">Программа</a></li>
				<li><a href="#block8">Стоимость</a></li>
				<li><a href="#block9-bottom">Контакты</a></li>
				<li><a href="#block10">Партнеры</a></li>
				<li class="buy-ticket"><a href="#block8-bottom">Купить билет</a></li>
			</ul>
		</div>	
	</div><!-- .header-->
	
	<div class="block1">
		
		<div id="particles-js"></div>

		<div class="center">
			
			<!--<a href="#block5" class="discount-for-registration "></a>-->
			
			<div class="top-block">
				<div class="date-container">
					<div class="date">
						<span>26 - 27</span> октября
					</div>
					<div class="city">
						<img src="/img/icon-city.png" alt="img"/>
						Москва
					</div>
				</div>

				<div class="phone">
					<img src="/img/icon-phone2.png" alt="img"/>
					<span>+7 (499)</span> 404-17-03
				</div>
			</div>

			<h1>Russian <br>
				blockchain<br>
				week <span>2017</span>
			</h1>

			<p class="text">Всё, что вы хотели знать о технологиях блокчейн и криптовалютах. Отдельные секции<br> для начинающих и для продвинутых — представителей бизнеса.</p>
			
			<div class="how-many">
				<div>
					<span>2</span><br>
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


			<div class="align-button">
				<a href="#block8-bottom" class="button">Принять участие</a>
			</div>

			<div class="arrow-down"><img src="/img/arrow-down-white.png" alt="img"/></div>
		</div>	
	</div>

	<div class="block2" id="block2">

	 <div class="center">
    	<div class="title">Russian Blockchain Week<br> - это</div>
    	<p class="text">Russian Blockchain Week (Российская неделя блокчейн и криптовалют) - это главное событие года в своей индустрии, которое обьеденяет в себе 4 формата: конференция, шоу блокчейн+проектов и мастер-классы, Blockchain.EXPO а также Blockchain.NIGHT</p>
	</div>
			<div class="tabs">
			    <ul>
			        <li>Конференция "Блокчейн<br> и криптовалюты 2017"</li>
			        <li>Шоу блокчейн проектов<br> и технологий</li>
			        <li>Blockchain expo 2017</li>
			        <li>Blockchain night</li>
			    </ul>
			    <div>
			        <div class="tab1">
			        	<div class="block2-bottom">
							<div class="center">
								<div class="title">Конференция "Блокчейн<br> и криптовалюты 2017" -</div>
								<p>это доклады более, чем 40 российских и мировых<br> легендблокчейн индустрии</p>
							</div>
						</div>
			        </div>
			        <div>
			        	<div class="block2-bottom block2-bottom2">
							<div class="center">
								<div class="title">Шоу блокчейн проектов<br>
								и технологий</div>
								<p>несколько десятков стартапов раскажут о себе,
									а для слушателей — это овзможность увидеть перспективные сегменты и вложиться
									в компанию на этапе pre-ICO
								</p>
							</div>
						</div>
				    </div>
			        <div>
			        	<div class="block2-bottom block2-bottom3">
							<div class="center">
								<div class="title">Blockchain EXPO  2017 </div>
								<p>Представители производителей оборудования, компаний-разработчиков, стартапов,
								и консультантов в сфере блокчейн и криптовалют</p>
							</div>
						</div>
			        </div>
			         <div>
			         	<div class="block2-bottom block2-bottom4">
							<div class="center">
								<div class="title">Blockchain.Night </div>
								<p>Новые связи, знания, знакомства и обсуждение проектов в неформальной обстановке. Представители индустрии и участники конференции</p>
							</div>
						</div>
			        </div>

			    </div>            
			</div> 

	</div>

	

	<div class="block3" id="block3">
		<div class="center">

			<div class="title">Ключевые темы</div>

			<div class="left">
				
				<ul>
					<li>
						<div class="top">
							<img src="/img/block3-icon1.png" alt="img"/><br>
						</div>
						<div class="bottom">Майнинг и оборудование</div>
					</li>
					<li>
						<div class="top">
							<img src="/img/block3-icon2.png" alt="img"/><br>
						</div>
						<div class="bottom">Криптовалюты. Инвестиции. Трейдинг</div>
					</li>
					<li>
						<div class="top">
							<img src="/img/block3-icon3.png" alt="img"/><br>
						</div>
						<div class="bottom">Разработка ПО</div>
					</li>
					<li>
						<div class="top">
							<img src="/img/block3-icon4.png" alt="img"/><br>
						</div>
						<div class="bottom">Бизнес</div>
					</li>
					<li>
						<div class="top">
							<img src="/img/block3-icon5.png" alt="img"/><br>
						</div>
						<div class="bottom">Правовое</div>
					</li>
					<li>
						<div class="top">
							<img src="/img/block3-icon6.png" alt="img"/><br>
						</div>
						<div class="bottom">ICO</div>
					</li>

				</ul>
			</div>

			<div class="right">
				<ul>
					<li>Биткоины и альткоины</li>
					<li>Принципы и технологии блокчейн</li>
					<li>Как заработать на инвестициях и трейдинге</li>
					<li>Стартапы и кейсы</li>
					<li>Блокчейн в финансовом секторе</li>
					<li>Государство и блокчейн</li>
					<li>Правовые основы и тренды регулирования</li>
					<li>Inital Coin Offering</li>
					<li>Прогнозы развития тренда</li>
					<li>Блокчейн для бизнеса</li>
				</ul>
			</div>



		</div>
	</div>


	<div class="block4" id="block4">
		<div class="center">

			<div class="title">30 лучших спикеров<br>
			 	и экспертов
			 </div>

			<div class="block4-inside">
				<div class="left">
					<div class="text">
						Мы пригласили более 30-ти ведущих экспертов из разных отраслей: представители технологических стартапов, разработчиков, банков, государственных структур, частных инвесторов и независимых консультантов.
					</div>
				</div>

				<div class="right">
					В совокупности всеосторонне осветят тему блокчейна и состояние текущих технологий и индустрии, а также открывающихся возможностях для каждого человека или бизнеса использовния этой технологии
				</div>
			</div>

			<div class="peoples" id="speakers">
				<div class="block">
					<div class="img"><img src="/img/block4-people1.jpg" alt="img"/></div>
					<div class="name">Роман Потёмкин</div>
					<div class="about-people">
						Основатель Wirex
					</div>
				</div>
				<div class="block">
					<div class="img"><img src="/img/block4-people2.jpg" alt="img"/></div>
					<div class="name">Дмитрий Булычков</div>
					<div class="about-people">
						Директор проектов Центра технологических инноваций Сбербанка
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/block4-people6.jpg" alt="img"/></div>
					<div class="name">Алексей Архипов</div>
					<div class="about-people">
						Директор по развитию криптотехнологий, QIWI. Руководитель направления развития технологии распределенных реестров, Ассоциации ФинТех
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/block4-people11.jpg.jpg" alt="img"/></div>
					<div class="name">Michael Reh</div>
					<div class="about-people">
						CEO и Co-founder Tymlez (ранее 1-ий вице-президент SAP)
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/maxim-ermelova.jpeg" alt="img"/></div>
					<div class="name">Максим Ермилов</div>
					<div class="about-people">
						CEO Газпром digital ventures!
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/gershuni.jpg" alt="img"/></div>
					<div class="name">Степан Гершуни</div>
					<div class="about-people">
						  co-founder Block Notary, сотрудник BitFury
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/block4-people5.jpg" alt="img"/></div>
					<div class="name">Элина Сидоренко</div>
					<div class="about-people">
						Руководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной Думы
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="/img/smerkis.jpg" alt="img"/></div>
					<div class="name">Владимир Смеркис</div>
					<div class="about-people">
						 Управляющий партнер «The Token Fund» (первый в России инвестфонд с цифровыми активами)!
					</div>
				</div> 

				<div class="block">
					<div class="img"><img src="/img/Kabakov.jpg" alt="img"/></div>
					<div class="name">Ярослав Кабаков</div>
					<div class="about-people">
						  зам.генерального директора Финам
					</div>
				</div>

				<div class="all-speakers show">
					<a href="javascript:void(0)" class="show-all-speakers">
					+ 
					<span>Показать <br>всех</span>
					</a>
				</div>


				<div class="block hide" >
					<div class="img"><img src="img/block4-people3.jpg" alt="img"/></div>
					<div class="name">Анатолий Каплан</div>
					<div class="about-people">
						Основатель Forklog, CEO Forklog.consulting
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="/img/block4-people4.jpg" alt="img"/></div>
					<div class="name">Сергей Примачик</div>
					<div class="about-people">
						Руководитель polybius.io
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="/img/block4-people7.jpg" alt="img"/></div>
					<div class="name">Владимир Гамза</div>
					<div class="about-people">
						Председатель Комитета ТПП РФ по финансовым рынкам <br>и кредитным организациям
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="/img/block4-people8.jpg" alt="img"/></div>
					<div class="name">Павел Мартынов</div>
					<div class="about-people">
						Основатель Steepshot
					</div>
				</div>

					<div class="block hide">
						<div class="img"><img src="/img/block4-people9.jpg" alt="img"/></div>
						<div class="name">Олег Кудренко</div>
						<div class="about-people">
							Ведуший <br>разработчик CEX.io
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/fedin.jpg" alt="img"/></div>
						<div class="name">Евгений Федин</div>
						<div class="about-people">
							Генеральный <br>директор 51asic
						</div>
					</div>

					

					<div class="block hide">
						<div class="img"><img src="/img/Jack_Saba.jpg" alt="img"/></div>
						<div class="name">Jack Saba</div>
						<div class="about-people">
							Co-founder Day one investments
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/Kumar_gaurav.jpg" alt="img"/></div>
						<div class="name">Kumar Gaurav</div>
						<div class="about-people">
							председатель совета директоров Auxesis Group
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/Bruce_Pon.jpg" alt="img"/></div>
						<div class="name">Bruce Pon</div>
						<div class="about-people">
							CEO & founder в BlockChainDB
						</div>
					</div>
					
					<div class="block hide">
						<div class="img"><img src="/img/zegelman.jpg" alt="img"/></div>
						<div class="name">Юлий Зегельман</div>
						<div class="about-people">
							 Управляющий партнер Velton Zegelman PC!
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/brusov.jpg" alt="img"/></div>
						<div class="name">Михаил Брусов</div>
						<div class="about-people">
							  CEO & co-founder Cindicator!
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/markov.jpg" alt="img"/></div>
						<div class="name">Виктор Марков</div>
						<div class="about-people">
							  Старший аналитик АО ИК «ЦЕРИХ Кэпитал Менеджмент»
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/fedorov.jpg" alt="img"/></div>
						<div class="name">Алексей Федоров</div>
						<div class="about-people">
							 Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»
						</div>
					</div>
					
					<div class="block hide">
						<div class="img"><img src="/img/shulgin.jpg" alt="img"/></div>
						<div class="name">Александр Шульгин</div>
						<div class="about-people">
							 Визионер и инвестор в технологии будущего (BitFury, Lending Club, DotBlockchain,
								Ticketland, Aviasales, Farfetсh, Rocket Lawer, PlutoTV и т.д.) !
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/kostarev.jpg" alt="img"/></div>
						<div class="name">Алексей Костарев</div>
						<div class="about-people">
							 project manager в ГОЛОС Медиаблокчейн
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/ageyev.jpg" alt="img"/></div>
						<div class="name">Виктор Агеев</div>
						<div class="about-people">
							 CEO, cryptonomica.net!
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/barinov.jpg" alt="img"/></div>
						<div class="name">Игорь Баринов</div>
						<div class="about-people">
							  co-founder Block notary, партнер фонда Bits.capital
						</div>
					</div>

					<div class="block hide">
						<div class="img"><img src="/img/polozov.jpg" alt="img"/></div>
						<div class="name">Станислав Полозов</div>
						<div class="about-people">
							  руководитель отдела внедрения блокченй-платформы EMER
						</div>
					</div>


				<div class="all-speakers hide">
					<a href="javascript:void(0)" class="show-all-speakers">
						<span>Спрятать <br>всех</span>
					</a>
				</div>


				
				
			</div>

			


		</div>
	</div>

	<div class="block5" id="block5">
		<div class="center">
		
		<div class="left">
			<div class="title">Зарегистрироваться <br> на конференцию Блокчейн<br> и криптовалюты — 2017</div>
			<p class="text">Зарегистрируйтесь на Конференцию 
				«Блокчейн и криптовалюты — 2017».
				Которая состоится 26 - 27 октября 2017 года</p>
		</div>

		<div class="right">

			<form id="form">
				<p>Зарегистрироваться <br>на мероприятие</p>
				<input type="text" placeholder="Ваше имя" name="name" class="name" required="required">
				<input type="email" placeholder="Ваш e-mail" name="email" class="email" required="required">
				<input type="text" placeholder="Ваш номер телефона" name="phone" class="phone" required="required">
				<select class="select" name="select_form">
					<option>Тип билета </option>
					<option>Онлайн</option>
					<option>Базовый</option>
					<option>Pro</option>
				</select>

				<input type="submit" value="Зарегистрироваться">
			</form>
		</div>

		</div>
	</div>


	<div class="block6" id="block6">
		<div class="center">
		
		<div class="title">Нужно быть
			готовым<br>
			к новым вызовам
		</div>

		<div class="quote-block">
			
			<div class="text">
				Россия инвестирует в технологии цифровой экономики и криптовалют 100 млрд долларов
			</div>
			
			<div class="name">
				<p>Игорь Шувалов</p>
				<span>Вице-премьер РФ</span>
			</div>
			<img src="/img/block6-quote-img1.jpg" alt="img"/>
		</div>

		<div class="bottom">
			<div class="left">
				<p>
					Технологию блокчейн и криптовалюты обсуждают лидеры стран, члены правительственных комиссий, Центральный банк
				</p>
				<div class="text-big">
					  Чтобы не остаться за бортом рынка, уже недостаточно идти в ногу со временем. нужно быть на шаг впереди. <br>не упустите свою возможность
				</div>

			</div>
			<div class="right">
				<p>Наиболее продвинутые банки и платёжные системы уже реализовали пилотные версии блокчейн-проектов у себя в компаниях. Крупные технологические предприятия инвестируют милиарды доларов.</p>
				<div class="link-container">
					<a href="raspisanie.pdf" target="_blank">
						<img src="/img/block6-icon-a1.png" alt="img"/>
						<span>Скачать программу конференции</span>
					</a>
					<a href="#block8">
						<img src="/img/block6-icon-a2.png" alt="img"/>
						<span>Купить билет<br> на форум</span>
					</a>
				</div>
			</div>


		</div>

		</div>
	</div>

	<!--
	<div class="block7" id="block7">
		<div class="center">
		
		<div class="title">ДЛЯ КОГО</div>

		<ul>
			
			<li>
				<img src="/img/block7-img1.png" alt="img"/>
				<p>Руководителям<br> и предпринимателям</p>
			</li>
			<li>
				<img src="/img/block7-img2.png" alt="img"/>
				<p>Частным <br>
					лицам</p>
			</li>
			<li>
				<img src="/img/block7-img3.png" alt="img"/>
				<p>Стартапам <br> и инвесторам</p>
			</li>
			<li>
				<img src="/img/block7-img4.png" alt="img"/>
				<p>Разработчикам</p>
			</li>
		</ul>

		</div>
	</div>
	-->

	<div class="block7" id="block7">
		<div class="center">

		<div class="top-panel">
			<div class="left">
				Программа<br> мероприятия
			</div>
			<div class="right">

			<div class="link-container">
				<a href="raspisanie.pdf" target="_blank">
					<img src="/img/block6-icon-a1-green.png" alt="img"/>
					<span>Скачать<br>
						программу<br>
					 	конференции</span>
				</a>
			</div>


			</div>
		</div>

		<div class="program-block">
			<div class="day-of-program">День 1</div>
			<div class="left">
				<div class="title">Главный зал</div>
				<div class="table-top">
					<div class="col-left">Выступление</div>
					<div class="col-right">Категория</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Технология Блокчейн: настоящее и перспективы</div>
						<div class="user">
							<img src="/img/block4-people2.jpg" alt="img"/>
							<p>Дмитрий Булычков</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Что вы должны знать о технологии Мастречейн</div>
						<div class="user">
							<img src="/img/block4-people6.jpg" alt="img"/>
							<p>Алексей Архипов</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Перспективы совершенствования законодательства в области оборота криптовалют</div>
						<div class="user">
							<img src="/img/block4-people5.jpg" alt="img"/>
							<p>Элина Сидоренко</p>
						</div>
					</div>
					<div class="col-right">Юридические механизмы</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Как запустить свой блокчейн-стартап</div>
						<div class="user">
							<img src="/img/block4-people8.jpg" alt="img"/>
							<p>Павел Мартынов</p>
						</div>
					</div>
					<div class="col-right">Бизнес на блокчейн</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Как блокчейн изменит идентификацию</div>
						<div class="user">
							<img src="/img/alex-molot-300x300_0.jpg" alt="img"/>
							<p>Александр Момот</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Технологии гибридного интеллекта на финансовых рынках</div>
						<div class="user">
							<img src="/img/brusov.jpg" alt="img"/>
							<p>Михаил Брусов</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Блокчейн: владение цифровой собственостью</div>
						<div class="user">
							<img src="/img/Bruce_Pon.jpg" alt="img"/>
							<p>Bruce Ron</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Инвестиции на рынке криптовалют</div>
						<div class="user">
							<img src="/img/smerkis.jpg" alt="img"/>
							<p>Владимир Смеркис</p>
						</div>
					</div>
					<div class="col-right">Инвестиции</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Наглядно об ICO</div>
						<div class="user">
							<img src="/img/block4-people3.jpg" alt="img"/>
							<p>Анатолий Каплан</p>
						</div>
					</div>
					<div class="col-right">ICO</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Оборудование для майнинга</div>
						<div class="user">
							<img src="/img/fedin.jpg" alt="img"/>
							<p>Евгений Федин</p>
						</div>
					</div>
					<div class="col-right">Оборудование и майнинг</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Угроза
							квантовых
							компьютеров
							для блокчейниндустрии</div>
						<div class="user">
							<img src="/img/fedorov.jpg" alt="img"/>
							<p>Алексей Федоров</p>
						</div>
					</div>
					<div class="col-right">Технологии</div>
				</div>

			</div>

			<div class="right">
				<div class="title">Зал мастер-классов и старптапов</div>
				<div class="table-top">
					<div class="col-left">Выступление</div>
					<div class="col-right">Категория</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Как блокчейн изменит способ работы бизнеса. Мнение инвесторов и стартап сообщества</div>
						<div class="user">
							<img src="/img/Jack_Saba.jpg" alt="img"/>
							<p>Jack Saba</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Дебетовые карты для биткоина - как это работает?</div>
						<div class="user">
							<img src="/img/block4-people1.jpg" alt="img"/>
							<p>Роман Потёмкин</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Банкинг будущего на основе технологии блокчейн</div>
						<div class="user">
							<img src="/img/maxim-ermelova.jpeg" alt="img"/>
							<p>Максим Ермилов</p>
						</div>
					</div>
					<div class="col-right">Финансы</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Инвестиции в криптовалюты для консервативных инвесторов</div>
						<div class="user">
							<img src="/img/Kabakov.jpg" alt="img"/>
							<p>Ярослав Кабаков</p>
						</div>
					</div>
					<div class="col-right">Инвестиции</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Как делать
							проекты на
							блокчейн
							технологии и
							оставаться в
							правовом поле?</div>
						<div class="user">
							<img src="/img/zegelman.jpg" alt="img"/>
							<p>Юлий Зегельман</p>
						</div>
					</div>
					<div class="col-right">Юридические
						механизмы</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Програмирование смарт контрактов: мастер класс Live coding of smart contract</div>
						<div class="user">
							<img src="/img/block4-people11.jpg.jpg" alt="img"/>
							<p>Michael Reh</p>
						</div>
					</div>
					<div class="col-right">Смарт контракты</div>
				</div>


				<div class="row">
					<div class="col-left">
						<div class="name">Инвестиции в блокчейн и криптовалюты</div>
						<div class="user">
							<img src="/img/markov.jpg" alt="img"/>
							<p>Виктор Марков</p>
						</div>
					</div>
					<div class="col-right">Инвестиции</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Социальные медиа на блокчейн</div>
						<div class="user">
							<img src="/img/kostarev.jpg" alt="img"/>
							<p>Алексей Костарев</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="presentation-block">
					<img src="/img/presentation-img.png" alt="img"/>
					<p>Презентация блокчейн-проектов</p>
				</div>



			</div>


		</div>




		<div class="program-block">
			<div class="day-of-program">День 2</div>
			<div class="left">
				<div class="title">Главный зал</div>
				<div class="table-top">
					<div class="col-left">Выступление</div>
					<div class="col-right">Категория</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Может ли Bitcoin
							Cash стать одним
							из крупнейших
							альткоинов</div>
						<div class="user">
							<img src="/img/Kumar_gaurav.jpg" alt="img"/>
							<p>Kumar Gaurav</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Государство и
						блокчейн
						технологии</div>
						<div class="user">
							<img src="/img/block4-people7.jpg" alt="img"/>
							<p>Владимир Гамза</p>
						</div>
					</div>
					<div class="col-right">Юридические механизмы</div>
				</div>

				<!--<div class="row">
					<div class="col-left">
						<div class="name">Как внедряют
							блокчейн
							российские и
							американские
							компании</div>
						<div class="user">
							<img src="/img/block4-people10.jpg" alt="img"/>
							<p>Игорь Калганов</p>
						</div>
					</div>
					<div class="col-right">Бизнес на блокчейн</div>
				</div>-->

				<div class="row">
					<div class="col-left">
						<div class="name">Продукты/сервисы
						на блокчейн
						этериума</div>
						<div class="user">
							<img src="/img/block4-people9.jpg" alt="img"/>
							<p>Олег Кудренко</p>
						</div>
					</div>
					<div class="col-right">Технологии</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Каким будет
							будущее с
							блокчейном</div>
						<div class="user">
							<img src="/img/shulgin.jpg" alt="img"/>
							<p>Александр Шульгин</p>
						</div>
					</div>
					<div class="col-right">Блокчейн теория и приминение</div>
				</div>


			</div>

			<div class="right">
				<div class="title">Зал мастер-классов и старптапов</div>
				<div class="table-top">
					<div class="col-left">Выступление</div>
					<div class="col-right">Категория</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Оценка
							капитализации
							публичных
							блокчейн
							проектов и
							токенов.
							Создание
							экономической
							модели токена
							для ICO</div>
						<div class="user">
							<img src="/img/gershuni.jpg" alt="img"/>
							<p>Степан Гершуни</p>
						</div>
					</div>
					<div class="col-right">ICO, Токены</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Альтернативные
							алгоритмы
							консенсуса в
							экосистеме
							Ethereum</div>
						<div class="user">
							<img src="/img/barinov.jpg" alt="img"/>
							<p>Игорь Баринов</p>
						</div>
					</div>
					<div class="col-right">Технологии</div>
				</div>

				<div class="row">
					<div class="col-left">
						<div class="name">Планы развития и
							нововведения в
							консенсусе
							блокчейна
							Ethereum</div>
						<div class="user">
							<img src="/img/block4-people10.jpg" alt="img"/>
							<p>Иван Тихонов</p>
						</div>
					</div>
					<div class="col-right"></div>
				</div>

			</div>


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
					1-го августа, далее — каждые 2 недели
				</div>
			</div>
		</div>

		<div class="block8-bottom" id="block8-bottom">
			<div class="center">
				<div class="pay-container">
					
					<div class="pay-block blue">
						<div class="name">Онлайн</div>
						<div class="pay-text">Участие в конференции</div>
						<div class="price price1">5 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<div class="price price2">9 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<a href="http://market.robokassa.ru/offer/3741612">Принять участие</a>
					</div>

					<div class="pay-block green">
						<div class="name">Базовый</div>
						<div class="pay-text">Участие в конференции</div>
						<div class="price price1">15 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<div class="price price2">19 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<a href="http://market.robokassa.ru/offer/3701793">Принять участие</a>
					</div>

					<div class="pay-block orange">
						<div class="name">Бизнес</div>
						<div class="pay-text">Участие в конференции<br>
							<span>+</span><br>
							день для бизнеса
						</div>
						<div class="price price1">29 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<div class="price price2">34 000 <img src="/img/block8-icon-ruble.png" alt="img"/></div>
						<a href="http://market.robokassa.ru/offer/3701798">Принять участие</a>
					</div>

					<div class="pay-bottom">
						<div class="row">Цена в июле  (руб.)</div>
						<div class="row">Цена до 15 августа (руб.)</div>
					</div>


				</div>
			</div>
		</div>

	</div>

	<div class="block9" id="block9">
		<div class="center">

			<div class="title">Участники конференции —<br> не только единомышленники, но и новые возможности</div>

			<div class="link-user-container">

				<div class="link-user link-user1">
					
					<div class="about-link-user">Предпрениматель</div><br>
					<a href="javascript:void(0);"></a>
				</div>

				<div class="link-user link-user2">
					<div class="about-link-user">Стартап</div><br>
					<a href="javascript:void(0);"></a>
				</div>

				<div class="link-user link-user3">
					<div class="about-link-user">Разработчик</div><br>
					<a href="javascript:void(0);"></a>
				</div>

				<div class="link-user link-user4">
					<div class="about-link-user">Директор по маркетингу</div><br>
					<a href="javascript:void(0);"></a>
					
				</div>

				<div class="link-user link-user5">
					<div class="about-link-user">Поставщик оборудования</div><br>
					<a href="javascript:void(0);"></a>
				</div>


			</div>

		</div>
	</div>


	<div class="block9-bottom" id="block9-bottom">
		<div class="center">

			<div class="center-block">
				<span class="first-span">Мы ждём <br>
				Вас в
				</span>
				<p>Paveletsky  <br>
				Art Center</p>
				<span class="last-span">г. Москва, <br>
				Павелецкая набережная, д. 2, стр.18
				</span>
			</div>

			<div class="bottom">
				<p class="month"><span>26 - 27 </span>октября 2017 </p>

				<div class="div-parking">
					<div class="p">P</div>
					<a href="javascript:void(0);">Парковка</a>
					<span class="parking-text">Парковочное место – 300 рублей / день</span>
				</div>

				<div class="div-map">
					<img src="/img/icon-city.png" alt="img"/>
					<a href="javascript:void(0);">Карта <br>проезда</a>
				</div>


			</div>
		</div>
	</div>

	<div class="block10 nav" id="block10">
	<div class="top-block">
		<div class="center">
			<div class="title">Наши партнеры</div>
			<div class="links-partner">
				<p>Официальные партнеры</p>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/moedelo.jpg" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/MMPG.jpg" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/netology.png" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/finam.png" alt="img"/></a>
				<br>
				<p>Информационные партнеры</p>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/Brand_YellowRockets_logo_rocket.png" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/insider.pro.jpg" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/investforsight.jpg" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/thewall.jpg" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/tn_logo_vertical.png" alt="img"/></a>
				<!--<a href="#"><img src="/img/logo-partners/bunchart.ru.jpg" alt="img"/></a>
				<a href="#"><img src="/img/logo-partners/economica-segodnya.PNG" alt="img"/></a>
				<a href="#"><img src="/img/logo-partners/thewall.jpg" alt="img"/></a>-->
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/CFO-Russia-2.png" alt="img"/></a>
				<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/ProsperityMedia.png" alt="img"/></a>
				<a target="_blank" href="http://astera.ru/events/"><img src="/img/logo-partners/Astera.JPG" alt="img"/></a>
				<a target="_blank" href="http://www.connect-wit.ru/"><img src="/img/logo-partners/Connect_180x92 (1).jpg" alt="img"/></a>
				<a target="_blank" href="http://nbj.ru/"><img src="/img/logo-partners/Logo_NBJ_jpeg.jpg" alt="img"/></a>
				<a target="_blank" href="http://ict-online.ru/"><img src="/img/logo-partners/ict_online_logo.jpg" alt="img"/></a>
				<!--<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/" alt="img"/></a>-->
				<a target="_blank" href="http://forklog.com/"><img src="/img/logo-partners/logo.svg" alt="img"/></a>
				<a target="_blank" href="https://bits.media/news/"><img src="/img/logo-partners/bits-media.png" alt="img"/></a>
				<a target="_blank" href="https://www.itweek.ru/"><img src="/img/logo-partners/pcweek_logo2.png" alt="img"/></a>
				<a target="_blank" href="https://bbf.ru/"><img src="/img/logo-partners/bbflogo.png" alt="img"/></a>
				<a target="_blank" href="FreeBitcoins.pp.ua"><img src="/img/logo-partners/head.png" alt="img"/></a>
				<a target="_blank" href="sotnibankov.com"><img src="/img/logo-partners/cec0a5d02e9d1fe042cc0629b7188e9c.png" alt="img"/></a>
				<a target="_blank" href="www.bankchart.ru"><img src="/img/logo-partners/bankchart.ru.png" alt="img"/></a>
				<a target="_blank" href="rarib.ru"><img src="/img/logo-partners/logo_new.png" alt="img"/></a>
				<a target="_blank" href="npaed.ru"><img src="/img/logo-partners/logo (2).png" alt="img"/></a>
				<!--<a target="_blank" href="javascript:void(0)"><img src="/img/logo-partners/" alt="img"/></a>-->
				<a target="_blank" href="https://fd.ru/"><img src="/img/logo-partners/logo (1).png" alt="img"/></a>
				<a target="_blank" href="https://bosfera.ru"><img src="/img/logo-partners/bo_sayt_standart_1_0.jpg" alt="img"/></a>
				<a target="_blank" href="http://www.cio.ru/"><img src="/img/logo-partners/open-system.jpg" alt="img"/></a>
				<a target="_blank" href="http://web-payment.ru/"><img src="/img/logo-partners/logo.png" alt="img"/></a>
				<a target="_blank" href="https://t.me/Pro_Crypto"><img src="/img/logo-partners/bazukaTG2.png" alt="img"/></a>
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

			<a href="javascript:void(0);">Стать партнером</a>
			<a href="javascript:void(0);" class="copyright">Конференция Блокчейн <br> и криптовалюты — 2017</a>

			<div class="right">
				<div class="phone">+7 499 404 17 03</div>
				<a href="javascript:void(0);">welcome@bcconf.ru</a>
			</div>
			
		</div>
	</div>

	</div>


</div>


<!-- Scripts -->
<script src="/js/jquery-2.1.1.min.js"></script>
<script src="/js/jquery.formstyler.min.js"></script>
<script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="/js/script.js"></script>
<script src="/js/particles.js"></script>
<script src="/js/app.js"></script>
<script src="https://api.ticketscloud.org/static/scripts/widget/tcwidget.js"></script>

</body>
</html>