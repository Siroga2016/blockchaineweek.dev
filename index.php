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
	<link href="css/style.css?v=10" type="text/css" rel="stylesheet"/>
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
				<li><a href="#block-programm" onclick='ga("send", "event", "menu", "click item", "Программа");'>Программа</a></li>
				<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
				<li><a href="#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
				<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
				<li>
                    <button type="button" onclick='ga("send", "event", "menu", "click item", "Купить сейчас");'
                            data-tc-event="59b96cd6519f7b0019309a7d"
                            data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                        Купить сейчас
                    </button>
                </li>
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
				<li><a href="#block-program" onclick='ga("send", "event", "menu", "click item", "Программа");'>Программа</a></li>
				<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
				<li><a href="#block9-bottom" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
				<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
				<li>
                    <button type="button"
                            onclick='ga("send", "event", "menu", "click item", "Купить сейчас");'
                            data-tc-event="59b96cd6519f7b0019309a7d"
                            data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                        Купить сейчас
                    </button>
                </li>
				<li class="buy-ticket"><a href="#block5" onClick='ga("send", "event", "head", "click button", "booking");'>Забронировать билет</a></li>
			</ul>
		</div>
		<div class="toggle"></div>
		<div class="menu-mobile">
			<li><a href="#block2" onClick='ga("send", "event", "menu", "click item", "О мероприятии");'>О мероприятии</a></li>
			<li><a href="#block3" onClick='ga("send", "event", "menu", "click item", "Ключевые темы");'>Ключевые темы</a></li>
			<li><a href="#block4" onClick='ga("send", "event", "menu", "click item", "Спикеры");'>Спикеры</a></li>
			<li><a href="#block-program" onclick='ga("send", "event", "menu", "click item", "Программа");'>Программа</a></li>
			<li><a href="#block8-bottom" onClick='ga("send", "event", "menu", "click item", "Стоимость");'>Стоимость</a></li>
			<li><a href="#block9-bottom.mobile" onClick='ga("send", "event", "menu", "click item", "Контакты");'>Контакты</a></li>
			<li><a href="#block10" onClick='ga("send", "event", "menu", "click item", "Партнеры");'>Партнеры</a></li>
			<li>
                <button type="button"
                        onclick='ga("send", "event", "menu", "click item", "Купить сейчас");'
                        data-tc-event="59b96cd6519f7b0019309a7d"
                        data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                    Купить сейчас
                </button>
            </li>
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
					<button type="button" data-tc-event="59b96cd6519f7b0019309a7d" data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                    </button>
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
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 0); ga("send", "event", "slider", "сlick slider", "Конференция «Блокчейн и криптовалюты-2017»");'>
						<a>Конференция «Блокчейн и криптовалюты-2017»</a>
					</div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 1); ga("send", "event", "slider", "сlick slider", "Шоу блокчейн-проектов и технологий");'>
						<a>Шоу блокчейн-проектов и технологий</a>
					</div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 3); ga("send", "event", "slider", "сlick slider", "Blockchain.Night");'>
						<a>Blockchain.Night</a>
					</div>
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
			    		<div class="title">Blockchain.Night</div>
			    		<div class="desc">Новые связи, знания, знакомства и обсуждение проектов<br />в неформальной обстановке.</div>
			    	</div>
			    </div>
			</div>
			<div class="center">
				<div class="cycle-pager">
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 0); ga("send", "event", "slider", "сlick slider", "Конференция «Блокчейн и криптовалюты-2017»");'></div>
					<div class="item" onClick='$(".cycle-slideshow").cycle("goto", 1); ga("send", "event", "slider", "сlick slider", "Шоу блокчейн-проектов и технологий");'></div>
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

	<div class="block-program" id="block-program">
		<div class="center">
			<a href="../RBW2017.pdf" target="_blank" class="button-program">Программа мероприятия</a>
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
					<div class="img"><img src="img/speakers/rozkowertz.jpg" alt="img"/></div>
					<div class="name">Joerg Roskowertz</div>
					<div class="about-people">
						AMD Blockchain expert
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
					<div class="img"><img src="img/speakers/novikov.jpg" alt="img"/></div>
					<div class="name">Павел Новиков</div>
					<div class="about-people">
						Директор центра финансовых технологий «Сколково»
					</div>
				</div>

				<div class="block">
					<div class="img"><img src="img/speakers/belozerov.jpg" alt="img"/></div>
					<div class="name">Андрей Белозёров </div>
					<div class="about-people">
						Советник руководителя Департамента информационных технологий г. Москвы <br>по стратегическим проектам <br> и инновациям
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
					<div class="img"><img src="img/speakers/petryashov.jpg" alt="img"/></div>
					<div class="name">Олег Петряшёв</div>
					<div class="about-people">
						 Генеральный директор Russian Вlockchain Week
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
					<div class="img">
						<img src="img/kelevra.jpg" alt="img"/>
					</div>
					<div class="name">Кир Келевра</div>
					<div class="about-people">
						Независимый криптотрейдер
					</div>
				</div>

				<div class="all-speakers show">
					<a href="javascript:void(0)" class="show-all-speakers">
					+
					<span>Показать <br>всех</span>
					</a>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/ivanov.jpg" alt="img"/></div>
					<div class="name">Олег Иванов</div>
					<div class="about-people">
						Основатель CryptoBazar
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/yudin.jpg" alt="img"/></div>
					<div class="name">Андрей Юдин</div>
					<div class="about-people">
						Co-Founder CryptoBazar Fund
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/block4-people7.jpg" alt="img"/></div>
					<div class="name">Владимир Гамза</div>
					<div class="about-people">
						Председатель комитета ТПП РФ по финансовым рынкам<br />и кредитным организациям
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/merkylova.jpg" alt="img"/></div>
					<div class="name">Дина Меркулова</div>
					<div class="about-people">
						Управляющий директор<br />по торговому финансированию Альфа-Банка
					</div>
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
					<div class="name"> Артем Баранов</div>
					<div class="about-people">
						Со-основатель и операционный директор Cindicator
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/stukolov.png" alt="img"/></div>
					<div class="name">Павел Стуколов</div>
					<div class="about-people">
						CEO TokenStars
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
					<div class="img"><img src="img/speakers/muratov.jpg" alt="img"/></div>
					<div class="name">Алексей Муратов </div>
					<div class="about-people">
						Основатель криптовалюты PRIZM
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/julin.jpg" alt="img"/></div>
					<div class="name">Артем Жилин</div>
					<div class="about-people">
						COO Gelios
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/insarov.jpg" alt="img"/></div>
					<div class="name">Андрей Инсаров</div>
					<div class="about-people">
						СЕО SMSCHAIN
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/vasin.jpg" alt="img"/></div>
					<div class="name">Антон Васин</div>
					<div class="about-people">
						Сооснователь проекта Serenity Financial
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/churakov.jpg" alt="img"/></div>
					<div class="name">Чураков Илья</div>
					<div class="about-people">
						Основатель сервиса дистанционного обучения ExpertSystem.ru
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/malkov.jpg" alt="img"/></div>
					<div class="name">Александр Мальков </div>
					<div class="about-people">
						CEO Arbi
					</div>
				</div>

				<div class="block hide">
					<div class="img"><img src="img/speakers/chulkov.jpg" alt="img"/></div>
					<div class="name">Станислав Чулков</div>
					<div class="about-people">
						Founder of Mining Solutions
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
						<div class="img"><img src="img/speakers/petryashov.jpg" alt="img"/></div>
						<div class="name">Олег Петряшёв</div>
						<div class="about-people">
							 Генеральный директор Russian Вlockchain Week
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

					<div class="block">
						<div class="img"><img src="img/speakers/muratov.jpg" alt="img"/></div>
						<div class="name">Алексей Муратов </div>
						<div class="about-people">
							Основатель криптовалюты PRIZM
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
							CEO TokenStars
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

					<div class="block">
						<div class="img"><img src="img/speakers/rozkowertz.jpg" alt="img"/></div>
						<div class="name">Joerg Roskowertz</div>
						<div class="about-people">
							AMD Blockchain expert
						</div>
					</div>

				</div>
				<div>
					<div class="block">
						<div class="img"><img src="img/speakers/julin.jpg" alt="img"/></div>
						<div class="name">Артем Жилин </div>
						<div class="about-people">
							COO Gelios
						</div>
					</div>
					<div class="block">
						<div class="img"><img src="img/speakers/insarov.jpg" alt="img"/></div>
						<div class="name">Андрей Инсаров</div>
						<div class="about-people">
							СЕО SMSCHAIN
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/speakers/vasin.jpg" alt="img"/></div>
						<div class="name">Антон Васин</div>
						<div class="about-people">
							Сооснователь проекта Serenity Financial
						</div>
					</div>
					<div class="block">
						<div class="img"><img src="img/speakers/churakov.jpg" alt="img"/></div>
						<div class="name">Чураков Илья</div>
						<div class="about-people">
							Основатель сервиса дистанционного обучения ExpertSystem.ru
						</div>
					</div>
				</div>

				<div>
					<div class="block">
						<div class="img"><img src="img/speakers/malkov.jpg" alt="img"/></div>
						<div class="name">Александр Мальков </div>
						<div class="about-people">
							CEO Arbi
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/speakers/chulkov.jpg" alt="img"/></div>
						<div class="name">Станислав Чулков</div>
						<div class="about-people">
							Founder of Mining Solutions
						</div>
					</div>

					<div class="block">
						<div class="img"><img src="img/gershuni.jpg" alt="img"/></div>
						<div class="name">Степан Гершуни</div>
						<div class="about-people">
							  Управляющий партнер bits.capital
						</div>
					</div>

				</div>

		    </div>
	    </div>
	</div>

	<div class="block-night">
        <div class="center">
            <div class="title">
                Blockchain.Night
            </div>
            <div class="time">
                19:00, 27 октября
            </div>
            <div class="text">
                Налаживайте связи и&nbsp;знакомства<br/>в неформальной обстановке
            </div>
            <a href="https://smartvalley.io/" target="_blank" class="logo">
                <img src="/img/img-smartvalley.png" alt="img">
            </a>
            <a href="https://smartvalley.io/" target="_blank" class="logo-moobile">
                 <img src="/img/img-smartvalley.png" alt="img">
            </a>
        </div>
    </div>



	<div class="block--video desktop">
		<div class="center">
			<div class="title">Интервью со спикерами</div>
			<div class="list desktop-version">
			    <div class="nav">
			        <span class="prev" id="block-video-prev2"></span>
			        <span class="next" id="block-video-next2"></span>
			    </div>

			    <div class="cycle-slideshow"
			    data-cycle-fx="scrollHorz"
			     data-cycle-timeout=0
			      data-cycle-prev="#block-video-prev2"
			       data-cycle-next="#block-video-next2"
			        data-cycle-slides="> div" >

			        <div>
						<div class="video">
		 					<div class="preview video-1">
		 						<img src="img/video-preview-1.jpg" />
		 						<div id="youtube-video-1"></div>
		 					</div>
		 					<div class="name">Дмитрий Булычков</div>
		 					<div class="desc">Директор проектов Центра технологических инноваций Сбербанка</div>
						</div>

						<div class="video">
		 					<div class="preview video-2">
		 						<img src="img/video-preview-2.jpg"/>
		  						<div id="youtube-video-2"></div>
		 					</div>
		 					<div class="name">Максим Азрильян</div>
		 					<div class="desc">Главный технический архитектор <br />Альфа-Банка</div>
						</div>

						<div class="video">
		 					<div class="preview video-9">
		 						<img src="img/video-preview-9.jpg"/>
		  						<div id="youtube-video-9"></div>
		 					</div>
		 					<div class="name">Алексей Архипов</div>
		 					<div class="desc">Руководитель направления развития технологии распределенного реестра, Ассоциации ФинТех</div>
						</div>
					</div>

					<div>
						<div class="video">
		 					<div class="preview video-5">
		 						<img src="img/video-preview-4.jpg"/>
		  						<div id="youtube-video-5"></div>
		 					</div>
		 					<div class="name">Алексей Федоров</div>
		 					<div class="desc">Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»</div>
						</div>

						<div class="video">
		 					<div class="preview video-6">
		 						<img src="img/video-preview-5.jpg"/>
		  						<div id="youtube-video-6"></div>
		 					</div>
		 					<div class="name">Ярослав Кабаков</div>
		 					<div class="desc">Заместитель генерального директора АО «Инвестиционная компания «ФИНАМ»</div>
						</div>

						<div class="video">
		 					<div class="preview video-7">
		 						<img src="img/video-preview-6.jpg"/>
		  						<div id="youtube-video-7"></div>
		 					</div>
		 					<div class="name">Артём Гуревич</div>
		 					<div class="desc">Co-founder Get Crypto</div>
						</div>
					</div>

					<div>
						<div class="video">
		 					<div class="preview video-8">
		 						<img src="img/video-preview-8.jpg"/>
		  						<div id="youtube-video-8"></div>
		 					</div>
		 					<div class="name">Александр Бородич</div>
		 					<div class="desc">Основатель блокчейн платформы Universa</div>
						</div>

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

	<div class="block--video mobile">
		<div class="center">
			<div class="title">Интервью со спикерами</div>
			<div class="list desktop-version">
			    <div class="nav">
			        <span class="prev" id="block-video-prev"></span>
			        <span class="next" id="block-video-next"></span>
			    </div>

			    <div class="cycle-slideshow"
			    data-cycle-fx="scrollHorz"
			     data-cycle-timeout=0
			      data-cycle-prev="#block-video-prev"
			       data-cycle-next="#block-video-next"
			        data-cycle-slides="> div" >

			        <div>
						<div class="video">
		 					<div class="preview video-99">
		 						<img src="img/video-preview-9.jpg"/>
		  						<div id="youtube-video-99"></div>
		 					</div>
		 					<div class="name">Алексей Архипов</div>
		 					<div class="desc">Руководитель направления развития технологии распределенного реестра, Ассоциации ФинТех</div>
						</div>
					</div>

			        <div>
						<div class="video">
		 					<div class="preview video-11">
		 						<img src="img/video-preview-1.jpg" />
		 						<div id="youtube-video-11"></div>
		 					</div>
		 					<div class="name">Дмитрий Булычков</div>
		 					<div class="desc">Директор проектов Центра технологических инноваций Сбербанка</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-22">
		 						<img src="img/video-preview-2.jpg"/>
		  						<div id="youtube-video-22"></div>
		 					</div>
		 					<div class="name">Максим Азрильян</div>
		 					<div class="desc">Главный технический архитектор <br />Альфа-Банка</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-33">
		 						<img src="img/video-preview-3.jpg"/>
		  						<div id="youtube-video-33"></div>
		 					</div>
		 					<div class="name">Степан Гершуни</div>
		 					<div class="desc">Управляющий партнер <br />bits.capital</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-55">
		 						<img src="img/video-preview-4.jpg"/>
		  						<div id="youtube-video-55"></div>
		 					</div>
		 					<div class="name">Алексей Федоров</div>
		 					<div class="desc">Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-66">
		 						<img src="img/video-preview-5.jpg"/>
		  						<div id="youtube-video-66"></div>
		 					</div>
		 					<div class="name">Ярослав Кабаков</div>
		 					<div class="desc">Заместитель генерального директора АО «Инвестиционная компания «ФИНАМ»</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-77">
		 						<img src="img/video-preview-6.jpg"/>
		  						<div id="youtube-video-77"></div>
		 					</div>
		 					<div class="name">Артём Гуревич</div>
		 					<div class="desc">Co-founder Get Crypto</div>
						</div>
					</div>
					<div>
						<div class="video">
		 					<div class="preview video-88">
		 						<img src="img/video-preview-8.jpg"/>
		  						<div id="youtube-video-88"></div>
		 					</div>
		 					<div class="name">Александр Бородич</div>
		 					<div class="desc">Основатель блокчейн платформы Universa</div>
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
					<button type="button" data-tc-event="59b96cd6519f7b0019309a7d"
					        data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                    </button>
				</form>
			</div>
		</div>
	</div>

<!--
  	<div id="programm" class="l-program">
        <div class="b-program">
            <div class="center">
                <div class="b-program__header">
                    <div class="title">Программа мероприятия</div>
                    <a href="../files/program.pdf" download class="download">
                        <img src="../img/program-download.png" alt="">
                        <p>Скачать программу конференции</p>
                    </a>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-header">
                        <div class="b-program__table-header_half">
                            Конференц зал
                        </div>
                        <div class="b-program__table-header_half">
                            Зал мастер-классов и стартапов
                        </div>
                    </div>
                    <div class="b-program__table-day">
                        <span>День 1</span>
                        <span>26 октября</span>
                        <span>Четверг</span>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            Принципы технологии блокчейн и будущее её применения
                        </div>
                        <div class="b-program__table-title_half">
                            Финтех. Блокчейн в банковском секторе
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>


                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/novikov.jpg" alt="Дмитрий Булычков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Новиков
                                    </div>
                                    <div class="position">
                                         Директор центра финансовых технологий. Фонд Сколково
                                    </div>
                                    <div class="report">
                                    	3 очень конкретных совета, которые позволят блокчейн-проекту взлететь
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/bulichkov.png" alt="Дмитрий Булычков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Дмитрий Булычков
                                    </div>
                                    <div class="position">
                                        Директор проектов Центра технологических инноваций Сбербанка
                                    </div>
                                    <div class="report">
                                        Технология Блокчейн: настоящее и&nbsp;перспективы
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/borodich.png" alt="Александр Бородич">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Александр Бородич
                                    </div>
                                    <div class="position">
                                        Основатель блокчейн платформы Universa
                                    </div>
                                    <div class="report">
                                        Будущее блокчейнов в целом, проблемы биткоина и&nbsp;эфира в&nbsp;частности
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="b-programm__table-content_half">

                        	<div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text registration-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>

                        	<div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/blagirev.png" alt="Алексей Благирев ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Благирев
                                    </div>
                                    <div class="position">
                                        Директор по&nbsp;инновациям, Банк&nbsp;«Открытие»
                                    </div>
                                    <div class="report">
                                        Решение KYC на&nbsp;блокчейн
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/azrilyan.png" alt="Максим Азрильян">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Максим Азрильян
                                    </div>
                                    <div class="position">
                                        Главный технический архитектор Альфа-Банк
                                    </div>
                                    <div class="report">
                                        Блокчейн-проекты в&nbsp;банковском секторе
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/matveev.png" alt="Павел Матвеев">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Матвеев
                                    </div>
                                    <div class="position">
                                        Основатель Wirex (более 500.000 клиентов в&nbsp;130 странах мира)
                                    </div>
                                    <div class="report">
                                        Криптовалюты&nbsp;-&nbsp;будущее платежной индустрии
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:30
                                    </div>
                                    <div class="time-end">
                                        12:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Сергей Рыжавин ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Рыжавин
                                    </div>
                                    <div class="position">
                                         B2BX. Продакт-менеджер PAMM/MAM/social trading
                                    </div>
                                    <div class="report">
                                        Эволюция IT инфраструктуры. Как покупать криптовалюты в 2018 - 2019
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>11:40-12:20 Кофе брейк</p>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            Инвестиции и криптовалюты
                        </div>
                        <div class="b-program__table-title_half">
                            Финтех. Блокчейн в банковском секторе
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">


                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:25
                                    </div>
                                    <div class="time-end">
                                        12:50
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kelevra.png" alt="Кир Келевра ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Кир Келевра
                                    </div>
                                    <div class="position">
                                        Независимый криптотрейдеp
                                    </div>
                                    <div class="report">
                                        Меняйся или умри:<br/>Wall&nbsp;Street vs.&nbsp;Cryptotrading
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:50
                                    </div>
                                    <div class="time-end">
                                        13:15
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/ivanov.png" alt="Олег Иванов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Олег Иванов
                                    </div>
                                    <div class="position">
                                        CEO и основатель CryptoBazar Fund
                                    </div>
                                    <div class="report">
                                        Инвестирование в проекты до выхода на ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:15
                                    </div>
                                    <div class="time-end">
                                        13:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Алексей Шульженко  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Шульженко
                                    </div>
                                    <div class="position">
                                        Директор по маркетингу Trading View
                                    </div>
                                    <div class="report">
                                        Влияние криптовалют на финансовые рынки и трейдинг. Текущее состояние и тенденции.
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:30
                                    </div>
                                    <div class="time-end">
                                        13:45
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/muratov.jpg" alt="Алексей Муратов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Муратов
                                    </div>
                                    <div class="position">
                                        Основатель криптовалюты PRIZM
                                    </div>
                                    <div class="report">
                                        Существующие проблемы криптовалют, перспективы решения и&nbsp;возможные альтернативы
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:45
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/discuss.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">

                                    </div>
                                    <div class="report">
                                    	Панельная дискуссия. <br>Криптовалюты 2018. Мнения экспертов
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:20
                                    </div>
                                    <div class="time-end">
                                        13:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/arhipov.png" alt="Алексей Архипов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Архипов
                                    </div>
                                    <div class="position">
                                        Руководитель направления развития технологии распределенного реестра, Ассоциации ФинТех
                                    </div>
                                    <div class="report">
                                        Мастерчейн – первый юридически чистый блокчейн в России
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:00
                                    </div>
                                    <div class="time-end">
                                        13:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/vasin.jpg" alt="Антон Васин">

                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Антон Васин
                                    </div>
                                    <div class="position">
                                        Сооснователь проекта Serenity Financial
                                    </div>
                                    <div class="report">
                                       Альтернативное регулирование Форекс индустрии  с использованием блокчейн технологий.
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:20
                                    </div>
                                    <div class="time-end">
                                        13:45
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/merkulova.png" alt="Дина Меркулова">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Дина Меркулова
                                    </div>
                                    <div class="position">
                                         Управляющий директор по торговому финансированию Альфа-Банка
                                    </div>
                                    <div class="report">
                                        Кейсы Альфа-Банка при&nbsp;реализации
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:45
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/julin.jpg" alt="Артем Жилин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Артем Жилин
                                    </div>
                                    <div class="position">
                                         COO Gelios
                                    </div>
                                    <div class="report">
                                        Методы KYC применительно к блокчейн технологиям
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>14:00-15:00 Обед</p>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            ICO как способ привлечения денег в стартап
                        </div>
                        <div class="b-program__table-title_half">
                            Блокчейн проекты
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">

                        	 <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:00
                                    </div>
                                    <div class="time-end">
                                        15:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/gershuni.png" alt="Степан Гершуни ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Степан Гершуни
                                    </div>
                                    <div class="position">
                                        Управляющий партнёр bits.capital
                                    </div>
                                    <div class="report">
                                        Как повысить капитализацию блокчейн проекта. Создание экономической модели токена для&nbsp;ICO
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:40
                                    </div>
                                    <div class="time-end">
                                        16:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/zazimonec.png" alt="Антон Занимовец">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Антон Занимовец
                                    </div>
                                    <div class="position">
                                        CEO Iskander ICOFund
                                    </div>
                                    <div class="report">
                                        ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/baranov.jpg" alt="Баранов Артем">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Артем Баранов
                                    </div>
                                    <div class="position">
                                         Сооснователь и операционный директор Cindicator
                                    </div>
                                    <div class="report">
                                        Сможет ли ICO полностью заменить венчурное инвестирование для технологических компаний
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:20
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/voronin.jpg" alt="Алексей Воронин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Воронин
                                    </div>
                                    <div class="position">
                                          Founder ICO LAB
                                    </div>
                                    <div class="report">
                                        Как спасти ICO
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="b-programm__table-content_half">


                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:00
                                    </div>
                                    <div class="time-end">
                                        15:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/polozov.png" alt="Станислав Полозов  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Станислав Полозов
                                    </div>
                                    <div class="position">
                                        Руководитель отдела внедрения платформы Emer
                                    </div>
                                    <div class="report">
                                        Как защитить корпоративные сети c&nbsp;помощью блокчейна?
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:20
                                    </div>
                                    <div class="time-end">
                                        15:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kostarev.png" alt="Алексей Костарев ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Костарев
                                    </div>
                                    <div class="position">
                                        Co-founder Robot Vera
                                    </div>
                                    <div class="report">
                                        Как блокчейн технологии могут поменять рынок HR
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:40
                                    </div>
                                    <div class="time-end">
                                        16:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/insarov.jpg" alt="img"/>
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Андрей Инсаров
                                    </div>
                                    <div class="position">
                                        СЕО SMSCHAIN
                                    </div>
                                    <div class="report">
                                        P2b сервисы на рынке телекоммуникаций
                                    </div>
                                </div>
                            </div>

                             <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/stukolov.png" alt="Павел Стуколов ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Стуколов
                                    </div>
                                    <div class="position">
                                        CEO TokenStars
                                    </div>
                                    <div class="report">
                                        Как привлечь более 1 млн $ на стадии pre-ICO
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>16:40-17:00 Кофе брейк</p>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            Майнинг и оборудование, прогнозы
                        </div>
                        <div class="b-program__table-title_half">
                            Блокчейн проекты
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:00
                                    </div>
                                    <div class="time-end">
                                        17:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/gurevich.png" alt="Артём Гуревич ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Артём Гуревич
                                    </div>
                                    <div class="position">
                                        Co-Founder в Get Crypto
                                    </div>
                                    <div class="report">
                                        Майнинг: хайп и бизнес
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:30
                                    </div>
                                    <div class="time-end">
                                        18:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/rozkowertz.jpg" alt="Joerg Roskowertz">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Joerg Roskowertz
                                    </div>
                                    <div class="position">
                                         AMD Blockchain expert
                                    </div>
                                    <div class="report">
                                        Оборудование для майнинга и обзор перспектив оборудования нового поколения
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        18:00
                                    </div>
                                    <div class="time-end">
                                        18:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/chulkov.jpg" alt=" Станислав Чулков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                         Станислав Чулков
                                    </div>
                                    <div class="position">
                                         Founder of Mining Solutions
                                    </div>
                                    <div class="report">
                                        Практические аспекты GPU майнинга
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="b-programm__table-content_half">



                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:00
                                    </div>
                                    <div class="time-end">
                                        17:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/barinov.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Игорь Баринов
                                    </div>
                                    <div class="position">
                                    	Сo-founder Block notary, партнер фонда Bits.capital
                                    </div>
                                    <div class="report">
                                    	Технические аспекты при проведении ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:30
                                    </div>
                                    <div class="time-end">
                                        18:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        СПИКЕР УТОЧНЯЕТСЯ
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                    	ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <span>День 2</span>
                        <span>27 октября</span>
                        <span>Пятница</span>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            Разработка проектов на блокчейн для не программистов
                        </div>
                        <div class="b-program__table-title_half">
                            ICO, как способ привлечения денег в стартап
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">

                        	<div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text registration-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/goldshtain.png" alt="Константин Гольдштейн">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Константин Гольдштейн
                                    </div>
                                    <div class="position">
                                        Блокчейн-евангелист Microsoft
                                    </div>
                                    <div class="report">
                                        Blockchain: От прорывной концепции до комплексного решения для компаний
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/tihonov.png" alt="Иван Тихонов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Иван Тихонов
                                    </div>
                                    <div class="position">
                                        Основатель и руководитель в Bits.media
                                    </div>
                                    <div class="report">
                                        Чего нового ожидать в Ethereum?
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:20
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/fedorov.png" alt="Алексей Федоров ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Федоров
                                    </div>
                                    <div class="position">
                                        Научный сотрудник Российского квантового центра, создатель «квантового блокчейна»
                                    </div>
                                    <div class="report">
                                        Угроза квантовых компьютеров для блокчейн индустрии
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text registration-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/sergienko.png" alt="Сергей Сергиенко ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Сергиенко
                                    </div>
                                    <div class="position">
                                        CEO в ChronoBank
                                    </div>
                                    <div class="report">
                                        Реально ли сделать ICO самостоятельно? И когда это стоит делать
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Спикер уточняется
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                        ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>
                             <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/ageyev.png" alt="Виктор Агеев">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Виктор Агеев
                                    </div>
                                    <div class="position">
                                        CEO Сryptonomica.net
                                    </div>
                                    <div class="report">
                                        Юридическая механизмы для blockchain и ICO
                                    </div>
                                </div>
                            </div>
                             <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:20
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Андрей Юдин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Андрей Юдин
                                    </div>
                                    <div class="position">
                                        Co-founder CryptoBazar Fund
                                    </div>
                                    <div class="report">
                                        Как правильно выбрать проект для инвестирования
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>11:40-12:00 Кофе брейк</p>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">
                            Законодательное регулирование
                        </div>
                        <div class="b-program__table-title_half">
                            Блокчейн проекты
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:00
                                    </div>
                                    <div class="time-end">
                                        12:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/zegelman.png" alt="Юлий Зегельман">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Юлий Зегельман
                                    </div>
                                    <div class="position">
                                        Управляющий партнер Velton Zegelman PC
                                    </div>
                                    <div class="report">
                                        Обзор международной практики, работа с США и SEC. Где&nbsp;криптовалюты используются официально
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:30
                                    </div>
                                    <div class="time-end">
                                        13:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/sidorenko.png" alt="Элина Сидоренкo ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Элина Сидоренкo
                                    </div>
                                    <div class="position">
                                        Pуководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной Думы
                                    </div>
                                    <div class="report">
                                        Перспективы совершенствования законодательства в области оборота криптовалют
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:30
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Иванов Алексей">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Иванов
                                    </div>
                                    <div class="position">
                                        Директор Института права и развития ВШЭ-Сколково
                                    </div>
                                    <div class="report">
                                        Тема уточняется
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        14:00
                                    </div>
                                    <div class="time-end">
                                        15:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/discuss.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">

                                    </div>
                                    <div class="report">
                                    	Панельная дискуссия.<br> Блокчейн и криптовалюты в Российском законодательстве.
                                    </div>
                                    <div class="position">
                                    </div>

                                     <div class="name">
                                        Андрей Белозёров
                                    </div>
                                    <div class="position">
                                        Советник руководителя Департамента информационных технологий города Москвы по стратегическим проектам и инновациям;
                                    </div>

                                    <div class="name">
                                        Алексей Иванов
                                    </div>
                                    <div class="position">
                                        Директор Института права и развития ВШЭ-Сколково;
                                    </div>
                                    <div class="name">
                                        Элина Сидоренко
                                    </div>
                                    <div class="position">
                                        Руководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной Думы.
                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="b-programm__table-content_half">

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:00
                                    </div>
                                    <div class="time-end">
                                        12:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/simanovskiy.png" alt="Сергей Симановский">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Симановский
                                    </div>
                                    <div class="position">
                                        CEO Golos Fund
                                    </div>
                                    <div class="report">
                                        Технология графен в блокчейне и Голос
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:20
                                    </div>
                                    <div class="time-end">
                                        12:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/olin.png" alt="Алексей Олин  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Олин
                                    </div>
                                    <div class="position">
                                        Основатель DAO.Finance и iVenturer
                                    </div>
                                    <div class="report">
                                        Тема уточняется
                                    </div>
                                </div>
                            </div>
                           <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:40
                                    </div>
                                    <div class="time-end">
                                        13:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/martin.png" alt="Павел Мартынов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Мартынов
                                    </div>
                                    <div class="position">
                                        Основатель Steepshot
                                    </div>
                                    <div class="report">
                                        Как запустить свой блокчейн-стартап
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:00
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Спикер уточняется
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                    	Тема уточняется
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        14:00
                                    </div>
                                    <div class="time-end">
                                        15:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/technopark-ava.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Модератор: Павел Новиков;
										Технопарк Сколкого.
                                    </div>
                                    <div class="position">
                                    </div>
                                    <div class="report">
                                    	Питч-сессия с голосованием.<br>
										«Технологические блокчейн-проекты Сколково»
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>15:00-16:00 Обед</p>
                    </div>
                    <div class="b-program__table-title">
                        <div class="b-program__table-title_half">

                        </div>
                        <div class="b-program__table-title_half">

                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_half">



                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kabakov.png" alt="Ярослав Кабаков ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Ярослав Кабаков
                                    </div>
                                    <div class="position">
                                        Заместитель генерального директора АО&nbsp;«Инвестиционная компания ФИНАМ»
                                    </div>
                                    <div class="report">
                                        Инвестиции в&nbsp;криптовалюты для&nbsp;консервативных&nbsp;инвесторов
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_right">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:40
                                    </div>
                                    <div class="time-end">
                                        17:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Спикер уточняется
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                    	Тема уточняется
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="b-programm__table-content_half">

                        	<div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Вячеслав Семенчук
                                    </div>
                                    <div class="position">
                                    	Серийный предприниматель. Основатель первой кошерной криптовалюты и блокчейн экосистемы. BITCOEN
                                    </div>
                                    <div class="report">
                                    	Тема уточняется
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_left">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:20
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Спикер уточняется
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                    	Тема уточняется
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__table-day">
                        <p>16:40-17:00 Закрытие конференции</p>
                    </div>
                    <div class="b-programm__table-content_blue blockchain-night">
                    	<div class="left">
	                        <b>Blockchain.Night</b>
	                        <p>Новые связи, знания, знакомства и обсуждение проектов в неформальной обстановке</p>
	                    </div>
	                    <div class="right">
	                    	<p>При поддержке<br>
								<span>Smart Valley</span>
							</p>
							<a href="https://smartvalley.io/" target="_blank"><img src="../img/logo-smartvalley.jpg" alt="img"></a>
	                    </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <span>День 3</span>
                        <span>28 октября</span>
                        <span>Суббота</span>
                    </div>
                    <div class="b-program__table-title">
                        КРИПТОКЛАСС РОССИЙСКОГО ЭКОНОМИЧЕСКОГО УНИВЕРСИТЕТА ИМ. Г.В. ПЛЕХАНОВА
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    10:00
                                </div>
                                <div class="time-end">
                                    13:00
                                </div>
                            </div>
                            <div class="b-programm__table-item-photo">
                                <img src="../img/lectors/plehanov.png" alt="">
                            </div>
                            <div class="b-programm__table-item-text list-half">
                                <div class="title">
                                    Введение в технологию блокчейн, криптовалюты и ICO
                                </div>
                                <div class="list">
                                    <b>
                                        Электронные деньги
                                    </b>
                                    <ul>
                                        <li>Трансформация мира денег.</li>
                                        <li>Альтернативные деньги.</li>
                                        <li>Принципы доверия к валюте.</li>
                                        <li>Требования к скорости транзакций.</li>
                                        <li>Вопросы хранения цифровых денег.</li>
                                        <li>Инфляция и курсы цифровых валют.</li>
                                        <li>Проблематика цифровой экономики.</li>
                                    </ul>
                                    <b>
                                        Что такое «блокчейн»
                                    </b>
                                    <ul>
                                        <li>Понятие цифровой подписи.</li>
                                        <li>Открытый и закрытый ключ.</li>
                                        <li>Обмен данными с шифрованием ключами.</li>
                                        <li>Понятие hash функции.</li>
                                        <li>Использование hash функции.</li>
                                        <li>Архитектура криптовалюты.</li>
                                        <li>Биткоин.</li>
                                    </ul>
                                </div>
                                <div class="list">
                                    <b>
                                        Распределенные вычисления и блокчейн
                                    </b>
                                    <ul>
                                        <li>Принцип децентрализации.</li>
                                        <li>Подтверждение работы.</li>
                                        <li>Подтверждение владения.</li>
                                        <li>Стоимость транзакций и время обработки.</li>
                                        <li>Ветвление, появление форков (fork).</li>
                                        <li>Неоднозначность истории транзакций при ветвлении.</li>
                                        <li>Виды ветвлений.</li>
                                    </ul>
                                    <b>
                                        Умные контракты и другие применения крипотовалют
                                    </b>
                                    <ul>
                                        <li>Умные контракты.</li>
                                        <li>Эфириум.</li>
                                        <li>Решения для IoT (интернета вещей).</li>
                                        <li>Специализированные криптовалюты.</li>
                                        <li>Создание своей криптовалюты.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>13:00-13:15 Кофе брейк</p>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    13:15
                                </div>
                                <div class="time-end">
                                    14:15
                                </div>
                            </div>
                            <div class="b-programm__table-item-photo">
                                <img src="../img/lectors/plehanov.png" alt="">
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Правовые аспекты создания, трейдинга и майнинга криптовалют,<br>проведения ICO
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Правовые последствия операции с криптовалютами;</li>
                                        <li>Порядок проведения Initial Coin Offering криптовалюты (ICO);</li>
                                        <li>Правовые последствия применении результатов технологии блокчейна</li>
                                        <li>Правовые аспекты криптовалют, регулирование в разных странах</li>
                                        <li>Токен, как ценная и как не ценная бумага</li>
                                        <li>Предпродажная стадия. Pre-ICO</li>
                                        <li>HOWEY тест</li>
                                        <li>Схемы размещения токенов</li>
                                        <li>Размещение токенов. Пост-продажная стадия</li>
                                        <li>Налоги</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>14:15-14:45 Обед</p>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    14:45
                                </div>
                                <div class="time-end">
                                    15:45
                                </div>
                            </div>
                            <div class="b-programm__table-item-photo">
                                <img src="../img/lectors/plehanov.png" alt="">
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Майнинг биткойна и других криптовалют
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Общие принципы майнинга.</li>
                                        <li>Виды алгоритмов шифрования и технический подход при майнинге.</li>
                                        <li>Соло-майнинг или майнинг в пуле.</li>
                                        <li>Организация майнингово бизнеса.</li>
                                        <li>Риски и затраты.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="b-program__table-day">
                        <p>15:45-16:00 Кофе брейк</p>
                    </div>

                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    16:00
                                </div>
                                <div class="time-end">
                                    18:00
                                </div>
                            </div>
                            <div class="b-programm__table-item-photo">
                                <img src="../img/lectors/plehanov.png" alt="">
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Криптовалютный трейдинг, деятельность криптовалютных бирж
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Хранение криптовалютных активов и текущие расчеты криптовалютой.</li>
                                        <li>Технологии хранения криптовалютных активов.</li>
                                        <li>Криптовалюта, как средство платежа.</li>
                                        <li>Трейдинг и портфельные инвестиции.</li>
                                        <li>Операции на P2P внебиржевых площадках.</li>
                                        <li>Портфельные инвестиции в криптовалюту.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="b-program-mobile">
            <div class="center">
                <div class="b-program__header">
                    <div class="title">Программа мероприятия</div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <span>День 1</span>
                        <span>26 октября</span>
                        <span>Четверг</span>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Принципы технологии блокчейн и будущее её применения</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>


                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/novikov.jpg" alt="Дмитрий Булычков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Новиков
                                    </div>
                                    <div class="position">
                                         Директор центра финансовых технологий. Фонд Сколково
                                    </div>
                                    <div class="report">
                                    	3 очень конкретных совета, которые позволят блокчейн-проекту взлететь
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/bulichkov.png" alt="Дмитрий Булычков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Дмитрий Булычков
                                    </div>
                                    <div class="position">
                                        Директор проектов Центра технологических инноваций Сбербанка
                                    </div>
                                    <div class="report">
                                        Технология Блокейн: настоящее и&nbsp;перспективы
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/borodich.png" alt="Александр Бородич">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Александр Бородич
                                    </div>
                                    <div class="position">
                                        Основатель блокчейн платформы Universa
                                    </div>
                                    <div class="report">
                                        Будущее блокчейнов в целом, проблемы биткоина и&nbsp;эфира в&nbsp;частности
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Финтех. Блокчейн в банковском секторе</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>
                        <div class="b-programm__table-content">
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        9:00
                                    </div>
                                    <div class="time-end">
                                        10:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Регистрация
                                    </div>
                                </div>
                            </div>

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/blagirev.png" alt="Алексей Благирев ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Благирев
                                    </div>
                                    <div class="position">
                                        Директор по&nbsp;инновациям, Банк&nbsp;«Открытие»
                                    </div>
                                    <div class="report">
                                        Решение KYC на&nbsp;блокчейн
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/azrilyan.png" alt="Максим Азрильян">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Максим Азрильян
                                    </div>
                                    <div class="position">
                                        Главный технический архитектор Альфа-Банк
                                    </div>
                                    <div class="report">
                                        Блокчейн-проекты в&nbsp;банковском секторе
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/matveev.png" alt="Павел Матвеев">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Матвеев
                                    </div>
                                    <div class="position">
                                        Основатель Wirex (более 500.000 клиентов в&nbsp;130 странах мира)
                                    </div>
                                    <div class="report">
                                        Криптовалюты&nbsp;-&nbsp;будущее платежной индустрии
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:30
                                    </div>
                                    <div class="time-end">
                                        12:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Сергей Рыжавин ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Рыжавин
                                    </div>
                                    <div class="position">
                                         B2BX. Продакт-менеджер PAMM/MAM/social trading
                                    </div>
                                    <div class="report">
                                        Эволюция IT инфраструктуры. Как покупать криптовалюты в 2018 - 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>11:40-12:20 Кофе брейк</p>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Криптовалюты, инвестиции</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:25
                                    </div>
                                    <div class="time-end">
                                        12:50
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kelevra.png" alt="Кир Келевра ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Кир Келевра
                                    </div>
                                    <div class="position">
                                        Независимый криптотрейдеp
                                    </div>
                                    <div class="report">
                                        Меняйся или умри:<br/>Wall&nbsp;Street vs.&nbsp;Cryptotrading
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:50
                                    </div>
                                    <div class="time-end">
                                        13:15
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/ivanov.png" alt="Олег Иванов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Олег Иванов
                                    </div>
                                    <div class="position">
                                        Учредитель компании «CryptoBazar»
                                    </div>
                                    <div class="report">
                                        Инвестирование в&nbsp;криптовалюты. Инвестирование в&nbsp;проекты до&nbsp;выхода на&nbsp;ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:15
                                    </div>
                                    <div class="time-end">
                                        13:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Алексей Шульженко  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Шульженко
                                    </div>
                                    <div class="position">
                                        Директор по маркетингу Trading View
                                    </div>
                                    <div class="report">
                                        Влияние криптовалют на финансовые рынки и трейдинг. Текущее состояние и тенденции
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:30
                                    </div>
                                    <div class="time-end">
                                        13:45
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/muratov.jpg" alt="Алексей Муратов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Муратов
                                    </div>
                                    <div class="position">
                                        Основатель Prizm
                                    </div>
                                    <div class="report">
                                        Существующие проблемы криптовалют, перспективы решения и&nbsp;возможные альтернативы
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:45
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/discuss.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">

                                    </div>
                                    <div class="report">
                                       Панельная дискуссия. <br>Криптовалюты 2018. Мнения экспертов
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Финтех. Блокчейн в банковском секторе</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>
                        <div class="b-programm__table-content">

                           <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:20
                                    </div>
                                    <div class="time-end">
                                        13:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/arhipov.png" alt="Алексей Архипов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Архипов
                                    </div>
                                    <div class="position">
                                        Руководитель направления развития технологии распределенного реестра, Ассоциации ФинТех
                                    </div>
                                    <div class="report">
                                        Мастерчейн – первый юридически чистый блокчейн в России
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:00
                                    </div>
                                    <div class="time-end">
                                        13:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/vasin.jpg" alt="Антон Васин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Антон Васин
                                    </div>
                                    <div class="position">
                                        Сооснователь проекта Serenity Financial
                                    </div>
                                    <div class="report">
                                        Альтернативное регулирование Форекс индустрии  с использованием блокчейн технологий.
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:20
                                    </div>
                                    <div class="time-end">
                                        13:45
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/merkulova.png" alt="Дина Меркулова">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Дина Меркулова
                                    </div>
                                    <div class="position">
                                        Управляющий директор по торговому финансированию Альфа-Банка
                                    </div>
                                    <div class="report">
                                        Кейсы Альфа-Банка при&nbsp;реализации
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:45
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/julin.jpg" alt="Артем Жилин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Артем Жилин
                                    </div>
                                    <div class="position">
                                        COO Gelios
                                    </div>
                                    <div class="report">
                                        Методы KYC применительно к блокчейн технологиям
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>14:00-15:00 Обед</p>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">ICO, как способ привлечения денег в стартап</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:00
                                    </div>
                                    <div class="time-end">
                                        15:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/gershuni.png" alt="Степан Гершуни ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Степан Гершуни
                                    </div>
                                    <div class="position">
                                        Управляющий партнёр bits.capital
                                    </div>
                                    <div class="report">
                                        Как повысить капитализацию блокчейн проекта. Создание экономической модели токена для&nbsp;ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:40
                                    </div>
                                    <div class="time-end">
                                        16:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/zazimonec.png" alt="Антон Занимовец ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Антон Занимовец
                                    </div>
                                    <div class="position">
                                        CEO в Iskander ICOFund
                                    </div>
                                    <div class="report">
                                        Тема уточняется
                                    </div>
                                </div>
                            </div>

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/baranov.jpg" alt="Баранов Артем">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                         Артем Баранов
                                    </div>
                                    <div class="position">
                                        Сооснователь и операционный директор Cindicator
                                    </div>
                                    <div class="report">
                                        Сможет ли ICO полностью заменить венчурное инвестирование для технологических компаний
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:20
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/voronin.jpg" alt="Алексей Воронин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Воронин
                                    </div>
                                    <div class="position">
                                        Founder ICO LAB
                                    </div>
                                    <div class="report">
                                        Как спасти ICO
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Блокчейн проекты</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>
                        <div class="b-programm__table-content">

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:00
                                    </div>
                                    <div class="time-end">
                                        15:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/polozov.png" alt="Станислав Полозов  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Станислав Полозов
                                    </div>
                                    <div class="position">
                                        Руководитель отдела внедрения платформы Emer
                                    </div>
                                    <div class="report">
                                        Как защитить корпоративные сети c&nbsp;помощью блокчейна?
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:20
                                    </div>
                                    <div class="time-end">
                                        15:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kostarev.png" alt="Алексей Костарев ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Костарев
                                    </div>
                                    <div class="position">
                                        Co-founder Robot Vera
                                    </div>
                                    <div class="report">
                                        Как блокчейн технологии могут поменять рынок HR
                                    </div>
                                </div>
                            </div>


                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        15:40
                                    </div>
                                    <div class="time-end">
                                        16:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/insarov.jpg" alt="img"/>
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Андрей Инсаров
                                    </div>
                                    <div class="position">
                                        СЕО SMSCHAIN
                                    </div>
                                    <div class="report">
                                         P2b сервисы на рынке телекоммуникаций
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/stukolov.png" alt="Павел Стуколов ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Стуколов
                                    </div>
                                    <div class="position">
                                        CEO TokenStars
                                    </div>
                                    <div class="report">
                                        Как привлечь более 1 млн $ на стадии pre-ICO
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>16:40-17:00 Кофе брейк</p>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Майнинг и оборудование, прогнозы</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">

                             <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:00
                                    </div>
                                    <div class="time-end">
                                        17:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/gurevich.png" alt="Артём Гуревич ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Артём Гуревич
                                    </div>
                                    <div class="position">
                                        Co-founder в Get Crypto
                                    </div>
                                    <div class="report">
                                        Майнинг: хайп и бизнес
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:30
                                    </div>
                                    <div class="time-end">
                                        18:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/rozkowertz.jpg" alt="Joerg Roskowertz">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Joerg Roskowertz
                                    </div>
                                    <div class="position">
                                        AMD Blockchain expert
                                    </div>
                                    <div class="report">
                                        Оборудование для майнинга и обзор перспектив оборудования нового поколения
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        18:00
                                    </div>
                                    <div class="time-end">
                                        18:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/speakers/chulkov.jpg" alt=" Станислав Чулков">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                       Станислав Чулков
                                    </div>
                                    <div class="position">
                                        Founder of Mining Solutions
                                    </div>
                                    <div class="report">
                                        Практические аспекты GPU майнинга
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Блокчейн проекты</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>

                        <div class="b-programm__table-content">

                        	<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        17:00
                                    </div>
                                    <div class="time-end">
                                        17:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="img/barinov.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Игорь Баринов
                                    </div>
                                    <div class="position">
                                       Сo-founder Block notary, партнер фонда Bits.capital
                                    </div>
                                    <div class="report">
                                        Технические аспекты при проведении ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item_default">
                                    Уточняется спикер<br/>и тема выступления
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <span>День 2</span>
                        <span>27 октября</span>
                        <span>Пятница</span>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Разработка блокчейн</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/goldshtain.png" alt="Константин Гольдштейн">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Константин Гольдштейн
                                    </div>
                                    <div class="position">
                                        Блокчейн-евангелист Microsoft
                                    </div>
                                    <div class="report">
                                        Blockchain: От прорывной концепции до комплексного решения для компаний
                                    </div>
                                </div>
                            </div>
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/tihonov.png" alt="Иван Тихонов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Иван Тихонов
                                    </div>
                                    <div class="position">
                                        Основатель и руководитель в Bits.media
                                    </div>
                                    <div class="report">
                                        Чего нового ожидать в Ethereum?
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:20
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/fedorov.png" alt="Алексей Федоров ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Федоров
                                    </div>
                                    <div class="position">
                                        Угроза квантовых компьютеров для блокчейн индустрии
                                    </div>
                                    <div class="report">
                                        Угроза квантовых компьютеров для блокчейн индустрии
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">ICO, как способ привлечения денег в стартап</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>
                        <div class="b-programm__table-content">
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:00
                                    </div>
                                    <div class="time-end">
                                        10:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/sergienko.png" alt="Сергей Сергиенко ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Сергиенко
                                    </div>
                                    <div class="position">
                                        CEO в ChronoBank
                                    </div>
                                    <div class="report">
                                        Реально ли сделать ICO самостоятельно? И когда это стоит делать
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        10:30
                                    </div>
                                    <div class="time-end">
                                        11:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Спикер уточняется
                                    </div>
                                    <div class="position">

                                    </div>
                                    <div class="report">
                                        ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:00
                                    </div>
                                    <div class="time-end">
                                        11:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/ageyev.png" alt="Виктор Агеев">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Виктор Агеев
                                    </div>
                                    <div class="position">
                                        CEO, cryptonomica.net
                                    </div>
                                    <div class="report">
                                        Юридическая механизмы для blockchain и ICO
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        11:20
                                    </div>
                                    <div class="time-end">
                                        11:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="Андрей Юдин">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Андрей Юдин
                                    </div>
                                    <div class="position">
                                        Co-founder CryptoBazar Fund
                                    </div>
                                    <div class="report">
                                        Как правильно выбрать проект для инвестирования
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>11:40-12:00 Кофе брейк</p>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Законодательное регулирование</p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">


                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:00
                                    </div>
                                    <div class="time-end">
                                        12:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/zegelman.png" alt="Юлий Зегельман">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Юлий Зегельман
                                    </div>
                                    <div class="position">
                                        Управляющий партнер Velton Zegelman PC!
                                    </div>
                                    <div class="report">
                                        Обзор международной практики, работа с США и SEC. Где&nbsp;криптовалюты используются официально
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:30
                                    </div>
                                    <div class="time-end">
                                        13:30
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/sidorenko.png" alt="Элина Сидоренкo ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Элина Сидоренкo
                                    </div>
                                    <div class="position">
                                        Pуководитель межведомственной рабочей группы по оценкам рисков оборота криптовалюты Государственной Думы
                                    </div>
                                    <div class="report">
                                        Перспективы совершенствования законодательства в области оборота
                                    </div>
                                </div>
                            </div>

							<div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:30
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                   <img src="../img/lectors/default.png" alt="Иванов Алексей">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                         Алексей Иванов
                                    </div>
                                    <div class="position">
                                        Директор Института права и развития ВШЭ-Сколково
                                    </div>
                                    <div class="report">
                                        Тема уточняется
                                    </div>
                                </div>
                            </div>


                             <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        14:00
                                    </div>
                                    <div class="time-end">
                                        15:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/discuss.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">

                                    </div>
                                    <div class="report">
                                       Панельная дискуссия - Блокчейн и криптовалюты в Российском законодательстве.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title">Блокчейн проекты</p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>
                        <div class="b-programm__table-content">

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:00
                                    </div>
                                    <div class="time-end">
                                        12:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/simanovskiy.png" alt="Сергей Симановский">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Сергей Симановский
                                    </div>
                                    <div class="position">
                                        CEO Golos Fund
                                    </div>
                                    <div class="report">
                                        Технология графен в блокчейне и Голос
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:20
                                    </div>
                                    <div class="time-end">
                                        12:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/olin.png" alt="Алексей Олин  ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Алексей Олин
                                    </div>
                                    <div class="position">
                                        Основатель DAO.Finance и iVenturer
                                    </div>
                                    <div class="report">
                                        ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        12:40
                                    </div>
                                    <div class="time-end">
                                        13:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/martin.png" alt="Павел Мартынов">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Павел Мартынов
                                    </div>
                                    <div class="position">
                                        Основатель Steepshot
                                    </div>
                                    <div class="report">
                                        Как запустить свой блокчейн-стартап
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        13:00
                                    </div>
                                    <div class="time-end">
                                        14:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="default ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Согласовываются спикеры и темы выступлений
                                    </div>
                                    <div class="position">
                                    </div>
                                    <div class="report">
                                    </div>
                                </div>
                            </div>

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        14:00
                                    </div>
                                    <div class="time-end">
                                        15:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/speakers/technopark-ava.jpg" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Модератор: Павел Новиков;
										Технопарк Сколкого.
                                    </div>
                                    <div class="position">
                                    </div>
                                    <div class="report">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>15:00-16:00 Обед</p>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title"></p>
                            <span class="place">Конференц зал</span>
                        </div>
                        <div class="b-programm__table-content">

                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kabakov.png" alt="Ярослав Кабаков ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Ярослав Кабаков
                                    </div>
                                    <div class="position">
                                    	Заместитель генерального директора АО&nbsp;«Инвестиционная компания ФИНАМ»
                                    </div>
                                    <div class="report">
                                    	Инвестиции в&nbsp;криптовалюты для&nbsp;консервативных&nbsp;инвесторов
                                    </div>
                                </div>
                            </div>

                             <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:40
                                    </div>
                                    <div class="time-end">
                                        17:00
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/kabakov.png" alt="Ярослав Кабаков ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        СПИКЕР УТОЧНЯЕТСЯ
                                    </div>
                                    <div class="position">
                                    </div>
                                    <div class="report">
                                    	ТЕМА УТОЧНЯЕТСЯ
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="b-program__preview">
                        <div class="b-program__preview-header">
                            <p class="title"></p>
                            <span class="place">Зал мастер-классов и стартапов</span>
                        </div>

						<div class="b-programm__table-content">
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:00
                                    </div>
                                    <div class="time-end">
                                        16:20
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="img">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Вячеслав Семенчук
                                    </div>
                                    <div class="position">
										Серийный предприниматель. Основатель первой кошерной криптовалюты и блокчейн экосистемы. BITCOEN
                                    </div>
                                    <div class="report">
										Тема уточняется
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="b-programm__table-content">
                            <div class="b-programm__table-item_full">
                                <div class="b-programm__table-item-time">
                                    <div class="time-start">
                                        16:20
                                    </div>
                                    <div class="time-end">
                                        16:40
                                    </div>
                                </div>
                                <div class="b-programm__table-item-photo">
                                    <img src="../img/lectors/default.png" alt="default ">
                                </div>
                                <div class="b-programm__table-item-text">
                                    <div class="name">
                                        Согласовываются спикеры и темы выступлений
                                    </div>
                                    <div class="position">
                                    </div>
                                    <div class="report">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-program__table-day">
                        <p>16:40-17:00 Закрытие конференции</p>
                    </div>
                    <div class="b-programm__table-content_blue blockchain-night">
                    	<div class="left">
	                        <b>Blockchain.Night</b>
	                        <p>Новые связи, знания, знакомства и обсуждение проектов в неформальной обстановке</p>
	                    </div>
	                    <div class="right">
	                    	<p>При поддержке<br>
								<span>Smart Valley</span>
							</p>
							<a href="https://smartvalley.io/"  target="_blank"> <img src="../img/logo-smartvalley.jpg" alt="img"></a>
	                    </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <span>День 3</span>
                        <span>28 октября</span>
                        <span>Суббота</span>
                    </div>
                    <div class="b-program__table-title-plehanov">
                        <div class="b-program__table-title-plehanov_photo">
                            <img src="../img/lectors/plehanov.png" alt="">
                        </div>
                        <div class="b-program__table-title-plehanov_title">
                            КРИПТОКЛАСС РОССИЙСКОГО<br/>ЭКОНОМИЧЕСКОГО УНИВЕРСИТЕТА<br/>ИМ. Г.В. ПЛЕХАНОВА
                        </div>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    10:00
                                </div>
                                <div class="time-end">
                                    13:00
                                </div>
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Введение в технологию блокчейн, криптовалюты и ICO
                                </div>
                                <div class="b-programm__description">
                                    <div class="open">Описание</div>
                                    <div class="content">
                                        <div class="list ">
                                            <b>
                                                Электронные деньги
                                            </b>
                                            <ul>
                                                <li>Трансформация мира денег.</li>
                                                <li>Альтернативные деньги.</li>
                                                <li>Принципы доверия к валюте.</li>
                                                <li>Требования к скорости транзакций.</li>
                                                <li>Вопросы хранения цифровых денег.</li>
                                                <li>Инфляция и курсы цифровых валют.</li>
                                                <li>Проблематика цифровой экономики.</li>
                                            </ul>
                                            <b>
                                                Что такое «блокчейн»
                                            </b>
                                            <ul>
                                                <li>Понятие цифровой подписи.</li>
                                                <li>Открытый и закрытый ключ.</li>
                                                <li>Обмен данными с шифрованием ключами.</li>
                                                <li>Понятие hash функции.</li>
                                                <li>Использование hash функции.</li>
                                                <li>Архитектура криптовалюты.</li>
                                                <li>Биткоин.</li>
                                            </ul>
                                        </div>
                                        <div class="list">
                                            <b>
                                                Распределенные вычисления и блокчейн
                                            </b>
                                            <ul>
                                                <li>Принцип децентрализации.</li>
                                                <li>Подтверждение работы.</li>
                                                <li>Подтверждение владения.</li>
                                                <li>Стоимость транзакций и время обработки.</li>
                                                <li>Ветвление, появление форков (fork).</li>
                                                <li>Неоднозначность истории транзакций при ветвлении.</li>
                                                <li>Виды ветвлений.</li>
                                            </ul>
                                            <b>
                                                Умные контракты и другие применения крипотовалют
                                            </b>
                                            <ul>
                                                <li>Умные контракты.</li>
                                                <li>Эфириум.</li>
                                                <li>Решения для IoT (интернета вещей).</li>
                                                <li>Специализированные криптовалюты.</li>
                                                <li>Создание своей криптовалюты.</li>
                                            </ul>
                                        </div>
                                        <div class="close">Скрыть описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>13:00-13:15 Кофе брейк</p>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    13:15
                                </div>
                                <div class="time-end">
                                    14:15
                                </div>
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Правовые аспекты создания, трейдинга и майнинга криптовалют,<br>проведения ICO
                                </div>
                                <div class="b-programm__description">
                                    <div class="open">Описание</div>
                                    <div class="content">
                                        <div class="list">
                                            <ul>
                                                <li>Правовые последствия операции с криптовалютами;</li>
                                                <li>Порядок проведения Initial Coin Offering криптовалюты (ICO);</li>
                                                <li>Правовые последствия применении результатов технологии блокчейна</li>
                                                <li>Правовые аспекты криптовалют, регулирование в разных странах</li>
                                                <li>Токен, как ценная и как не ценная бумага</li>
                                                <li>Предпродажная стадия. Pre-ICO</li>
                                                <li>HOWEY тест</li>
                                                <li>Схемы размещения токенов</li>
                                                <li>Размещение токенов. Пост-продажная стадия</li>
                                                <li>Налоги</li>
                                            </ul>
                                        </div>
                                        <div class="close">Скрыть описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-program__table">
                    <div class="b-program__table-day">
                        <p>14:15-14:45 Обед</p>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    14:15
                                </div>
                                <div class="time-end">
                                    15:45
                                </div>
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Майнинг биткойна и других криптовалют
                                </div>
                                <div class="b-programm__description">
                                    <div class="open">Описание</div>
                                    <div class="content">
                                        <div class="list list_mt-45">
                                            <ul>
                                                <li>Общие принципы майнинга.</li>
                                                <li>Виды алгоритмов шифрования и технический подход при майнинге.</li>
                                                <li>Соло-майнинг или майнинг в пуле.</li>
                                                <li>Организация майнингово бизнеса.</li>
                                                <li>Риски и затраты.</li>
                                            </ul>
                                        </div>
                                        <div class="close">Скрыть описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-program__table-day">
                        <p>15:45-16:00 Кофе брейк</p>
                    </div>
                    <div class="b-programm__table-content">
                        <div class="b-programm__table-content_full">
                            <div class="b-programm__table-item-time">
                                <div class="time-start">
                                    16:00
                                </div>
                                <div class="time-end">
                                    18:00
                                </div>
                            </div>
                            <div class="b-programm__table-item-text">
                                <div class="title">
                                    Криптовалютный трейдинг, деятельность криптовалютных бирж
                                </div>
                                <div class="b-programm__description">
                                    <div class="open">Описание</div>
                                    <div class="content">
                                        <div class="list list_mt-45">
                                            <ul>
                                                <li>Хранение криптовалютных активов и текущие расчеты криптовалютой.</li>
		                                        <li>Технологии хранения криптовалютных активов.</li>
		                                        <li>Криптовалюта, как средство платежа.</li>
		                                        <li>Трейдинг и портфельные инвестиции.</li>
		                                        <li>Операции на P2P внебиржевых площадках.</li>
		                                        <li>Портфельные инвестиции в криптовалюту.</li>
                                            </ul>
                                        </div>
                                        <div class="close">Скрыть описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

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

	<div id="partners" class="block-sponsor">
        <div class="center">
            <div class="title">Блокчейн проекты</div>
            <div class="b-sponsor__wrap">
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">PRIZM</div>
                        <a href="http://prizm.club/ru/" target="_blank" class="b-sponsor__img prizm"></a>
                    </div>
                    <div class="b-sponsor__text">Полностью децентрализованная, саморегулируемая цифровая валюта. Новая реализация концепции криптовалюты, позволяющая любому пользователю легко и надежно хранить и производить денежные переводы напрямую, словно передача наличных денег из рук в руки.</div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor1">О проекте</div>
                        <div>
                            <div class="b-sponsor__video-link j-video1">Видеоинтервью</div>
                            <a href="files/PRIZM.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">SMSCHAIN</div>
                        <a href="https://smschain.org/" target="_blank" class="b-sponsor__img smschain"></a>
                    </div>
                    <div class="b-sponsor__text">SMSCHAIN представляет собой P2B (peer-to-business) систему, выполняющую функционал СМС-шлюза для отправки служебных сообщений различных веб-сервисов. Владельцы Android-смартфона могут продать неиспользованные СМС, включенные в тарифный план, компаниям, отправляющим уведомления для своих клиентов.</div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor2">О проекте</div>
                        <div>
                            <!--<div class="b-sponsor__video-link j-video2">Видеоинтервью</div>-->
                            <a href="files/SMSCHAIN.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-sponsor__wrap">
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">SERENITY FINANCIAL</div>
                        <a href="https://serenity-financial.io/" target="_blank" class="b-sponsor__img serenity"></a>
                    </div>
                    <div class="b-sponsor__text">Первая арбитражная платформа на блокчейне для безопасного трейдинга
                        и хранения средств.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor3">О проекте</div>
                        <div>
                            <div class="b-sponsor__video-link j-video3">Видеоинтервью</div>
                            <a href="files/Serenity_ru.pptx" download class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>

                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">Mining Solutions</div>
                        <a href="https://www.minso.net/" target="_blank" class="b-sponsor__img mining-solutions"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Компания разрабатывает простые и&nbsp;удобные программные решения, которые эффективно производят
                        настройку и&nbsp;управление GPU&nbsp;мощностями, сберегая электроэнергию и&nbsp;экологию, повышают
                        финансовую привлекательность. Решения высокого уровня позволяют производить быстрое переключение
                        мощностей для&nbsp;обработки различных алгоритмов, закладывают основы по&nbsp;применению GPU&nbsp;мощностей
                        для&nbsp;актуальных задач общества.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor10">О проекте</div>
                        <div>
                            <a href="../files/Mining-Solution.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>

                <?/*<div class="b-sponsor__item">
                    <div class="b-sponsor__item-empty">
                        Скоро здесь появится<br>новый блокчейн-проект
                    </div>
                </div>*/?>

                <?/* <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">B2Broker</div>
                        <a href="http://www.b2bx.pro" target="_blank" class="b-sponsor__img b2broker"></a>
                    </div>
                    <div class="b-sponsor__text">Первая в мире криптовалютная биржа-агрегатор для институциональных клиентов.
						Успешно прошла этап pre-ico и уже собрала более 5 млн. Евро.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor5">О проекте</div>
                        <div>
                            <a href="files/B2Broker.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>*/?>
            </div>

            <div class="b-sponsor__wrap">
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">FACETER</div>
                        <a href="https://faceter.io/?utm_source=blockchainweek_moscow&utm_medium=referral&utm_campaign=blockchain_week" target="_blank" class="b-sponsor__img faceter"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Cистема, которая анализирует видео с&nbsp;камер наблюдения, распознает лица и&nbsp;объекты, может&nbsp;быть&nbsp;настроена на&nbsp;конкретные сценарии поведения в&nbsp;определенных ситуациях. Выпущена версия для&nbsp;B2B. Вскоре сервис откроется для&nbsp;обычных пользователей. Им&nbsp;станет доступна технология интеллектуального видеонаблюдения, которую&nbsp;сейчас может себе позволить только крупный бизнес.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor9">О проекте</div>
                        <div>
                            <a href="../files/Faceter.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">REGA Risk Sharing</div>
                        <a href="https://rega.life/" target="_blank" class="b-sponsor__img rega-risk"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Разработчик децентрализованной crowdsurance платформы на&nbsp;технологии умных контрактов,
                        скоринга и&nbsp;искусственного интеллекта. Краудшуранс&nbsp;(сrowdsurance)&nbsp;-&nbsp;это&nbsp;объединение
                        физических&nbsp;лиц в&nbsp;группы с&nbsp;целью&nbsp;разделения собственных рисков. Такое&nbsp;коллективное
                        объединение строится на&nbsp;принципах автономных децентрализованных организаций с&nbsp;применением технологии
                        блокчейн и&nbsp;регулируется смарт-контрактами.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor12">О проекте</div>
                        <div>
                            <a href="../files/REGA-brief-last.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-sponsor__wrap">
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">Snovio</div>
                        <a href="https://tokensale.snov.io/ru/" target="_blank" class="b-sponsor__img snovio"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Уникальная децентрализованная платформа для&nbsp;поиска лидов, которая объединит в&nbsp;себе
                        модель краудколлектинга и&nbsp;маркетплейса. Взаиморасчеты на&nbsp;платформе будут происходить
                        в&nbsp;токенах&nbsp;SNOV&nbsp;-&nbsp;это&nbsp;станет базой для&nbsp;внедрения инновационного
                        подхода в&nbsp;лидогенерации. Транзакции внутри маркетплейса будут осуществляться через
                        <span style="white-space: nowrap">смарт-контракт</span> и&nbsp;храниться в&nbsp;блокчейне.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor11">О проекте</div>
                        <div>
                            <div class="b-sponsor__video-link j-video4">Видеопрезентация</div>
                        </div>
                    </div>
                </div>
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">Gelios</div>
                        <a href="http://brainysoft.ru/" target="_blank" class="b-sponsor__img gelios"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Платформа P2P&nbsp;кредитования в&nbsp;криптовалюте на&nbsp;блокчейн. Ключевая особенность
                        площадки&nbsp;–&nbsp;тонкая настройка процессов под&nbsp;бизнес-процессы кредитора. Глобальный охват,
                        KYC&nbsp;маркет, кастомизированная риск-аналитика, white-label решение личного кабинета. Блокчейн
                        используется для&nbsp;подтверждения доверия между сторонами, риск-аналитики. Проект развивается
                        на&nbsp;платформе Brainysoft&nbsp;–&nbsp;компании-резидента Инновационного центра Сколково.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor6">О проекте</div>
                        <div>
                            <a href="../files/Gelios.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
                <?/*<div class="b-sponsor__item">
                    <div class="b-sponsor__item-empty">
                        Скоро здесь появится<br>новый блокчейн-проект
                    </div>
                </div>*/?>
            </div>
            <?/*<div class="b-sponsor__wrap">

				<div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">Gelios</div>
                        <a href="javascript:void(0)" target="_blank" class="b-sponsor__img gelios"></a>
                    </div>
                    <div class="b-sponsor__text">
                    	Платформа P2Pкредитования в криптовалюте на блокчейн. Ключевая особенность площадки – тонкая настройка процессов под бизнес-процессы кредитора. Глобальный охват, KYCмаркет, кастомизированная риск-аналитика, white-labelрешение личного кабинета. Блокчейн используется для подтверждения доверия между сторонами, риск-аналитики. Проект развивается на платформе Brainysoft – компании-резидента Инновационного центра Сколково.
                    </div>
                    <!--<div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor6">О проекте</div>
                        <div>
                            <a href="files/B2Broker.pdf" download class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>-->
                </div>

               <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">SmartValley</div>
                        <a href="https://smartvalley.io" target="_blank" class="b-sponsor__img smartvalley"></a>
                    </div>
                    <div class="b-sponsor__text">

                    </div>
                    <div class="b-sponsor__item-bottom">
                        <!--<div class="b-sponsor__btn j-sponsor7">О проекте</div>-->
                        <div>
                            <a href="files/SmartValley.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>

            </div>*/?>

            <?/*<div class="b-sponsor__wrap">

                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">ETHLend</div>
                        <a href="http://ethlend.io" target="_blank" class="b-sponsor__img ethlend"></a>
                    </div>
                    <div class="b-sponsor__text">
                    	Децентрализованная peer-2-peer платформа для кредитования, работающая на основе сети Ethereum и смарт-контрактов.

						Данная система явлеется полностью прозрачной и позволяет воспользоваться услугами кредитования из любой точки планетыбыстро и эффективно, используя приемущества blockchain. При этом риск контрагента сведен к минимуму  в результате применения залога и смарт-контрактов.

                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor8">О проекте</div>
                        <div>
                            <!--<a href="files/presentation.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>-->
                        </div>
                    </div>
                </div>

                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-empty">
                        Скоро здесь появится<br>новый блокчейн-проект
                    </div>
                </div>
            </div>*/?>
            <div class="b-sponsor__wrap">
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">BONUM</div>
                        <a href="http://bonumchain.com/" target="_blank" class="b-sponsor__img bonum"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Bonum&nbsp;–&nbsp;платформа, предоставляющая услуги:
                        <ul>
                            <li>Криптозайма&nbsp;–&nbsp;получения займа в&nbsp;криптовалюте или&nbsp;фиате
                                с&nbsp;обеспечением в&nbsp;виде залога;</li>
                            <li>Депозита&nbsp;–&nbsp;возможность вложения криптовалюты и&nbsp;токенов под&nbsp;процент.</li>
                        </ul>
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor13">О проекте</div>
                        <div>
                            <a href="../files/Bonum.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
                    </div>
                </div>
                <div class="b-sponsor__item">
                    <div class="b-sponsor__item-top">
                        <div class="b-sponsor__title">SmartValley</div>
                        <a href="https://smartvalley.io" target="_blank" class="b-sponsor__img smartvalley"></a>
                    </div>
                    <div class="b-sponsor__text">
                        Smart&nbsp;Valley&nbsp;–&nbsp;автоматизированная площадка для&nbsp;привлечения финансирования проектов
                        и&nbsp;проведения легального&nbsp;ICO. Сервис обеспечивает высокое качество проектов и&nbsp;защиту
                        от&nbsp;мошенничества с&nbsp;помощью системы скоринга и&nbsp;биржи экспертов, построенными полностью
                        на&nbsp;блокчейне.
                    </div>
                    <div class="b-sponsor__item-bottom">
                        <div class="b-sponsor__btn j-sponsor7">О проекте</div>
                        <div>
                            <div class="b-sponsor__video-link j-video5">Видеоинтервью</div>
                            <a href="../files/SmartValley.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
                        </div>
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
				        <div class="price price2">25 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
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
				        <div class="price price2">39 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
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
				        <div class="price price2">45 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
				        <a href="#block5" onClick='selectTicketType("Бизнес+"); ga("send", "event", "tarif", "сlick button", "Бизнес+");'>Забронировать билет</a>
				    </div>
				    <div class="pay-bottom">
				        <div class="row">Цена до 25 октября<?/*<span>Скидка до 25 октября 10%</span>*/?></div>
				        <div class="row">Цена в день мероприятия</div>
				    </div>
				</div>

				<div class="pay-container b-buy-now">
                    <div class="pay-block">
                        <button type="button"
                                onclick='ga("send", "event", "tarif", "сlick button sale", "Базовый");'
                                data-tc-event="59b96cd6519f7b0019309a7d" data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                        </button>
                    </div>
                    <div class="pay-block">
                        <button type="button"
                                onclick='ga("send", "event", "tarif", "сlick button sale", "Бизнес");'
                                data-tc-event="59b96cd6519f7b0019309a7d" data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                        </button>
                    </div>
                    <div class="pay-block">
                        <button type="button"
                                onclick='ga("send", "event", "tarif", "сlick button sale", "Бизнес+");'
                                data-tc-event="59b96cd6519f7b0019309a7d" data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                        </button>
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
						        <div class="price price2">25 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
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
						        <div class="price price2">39 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
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
						        <div class="price price2">45 000 <img src="img/block8-icon-ruble.png" alt="img" /></div>
						        <a href="#block5" onClick='selectTicketType("Бизнес+"); ga("send", "event", "tarif", "сlick button", "Бизнес+");'>Забронировать билет</a>
						    </div>
						</div>
				    </div>

				    <div class="b-buy-now__mobile">
                        <button type="button"
                            onclick='ga("send", "event", "menu", "click item", "Купить сейчас");'
                            data-tc-event="59b96cd6519f7b0019309a7d" data-tc-token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6InRpY2tldHNjbG91ZC5ydSJ9.eyJwIjoiNTk5ZWNjOThkMzUyODYwMDFhMTM2NTBmIn0.Ezb5GcX02rbPsSCSp0xgDx0FNNHOE1GYdy4SFW9oXOg">
                            Купить сейчас
                        </button>
                    </div>

					<div class="pay-bottom">
						<div class="row">Цена до<br />25 октября<?/*<span>Скидка до 25 октября 10%</span>*/?></div>
						<div class="row">Цена в день меро&shy;приятия</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!--
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
	</div>-->

	<div class="block9-bottom" id="block9-bottom">
		<div class="center">

			<div class="center-block">
				<span class="first-span">Мы ждём <br>
				Вас в
				</span>
				<p>Российском экономическом университете<br>им. Г.В. Плеханова</p>
				<span class="last-span">г. Москва, <br>
				ул. Зацепа, 41
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
					<a href="https://yandex.ru/maps/-/CBUeAXsN8A" target="_blank">Карта <br>проезда</a>
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
								<div class="content flex-logo">
								    <a target="_blank" href="https://www.mos.ru/dit/">
								        <img src="img/logo-partners/DIT_Logo.jpg" class="flex-img" alt="img" style="margin: 0;"/>
                                    </a>
									<a target="_blank" href="https://www.finam.ru/">
									    <img src="img/logo-partners/finam.png" alt="img" class="flex-img" style="max-height: 113px; margin-top: -19px;"/>
                                    </a>
									<a target="_blank" href="http://learn.alfabank.ru/">
									    <img src="img/logo-partners/logo-alfa.jpg" class="flex-img" alt="img" style="margin: 0;"/>
                                    </a>
									<a target="_blank" href="https://www.moedelo.org/">
									    <img src="img/logo-partners/moedelo.jpg" alt="img" class="flex-img"/>
                                    </a>
									<a target="_blank" href="https://ru.tradingview.com/">
									    <img src="img/logo-partners/tradingview.svg" class="flex-img" alt="img" style="width:140px; margin: 0;"/>
                                    </a>
									<a target="_blank" href="https://alfabank.ru/">
									    <img src="img/logo-partners/alfabank.png" class="flex-img" alt="img"/>
                                    </a>
									<a target="_blank" href="http://lp.mmgp.ru/7" style="margin: 0 0 15px">
									    <img src="img/logo-partners/logo_mmgp.png" class="flex-img" alt="img" style="margin: 0;"/>
                                    </a>
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
							<div class="links-partner">
								<p style="margin-top: 30px;">Технический партнер</p>
								<div class="content technical-partner">
									<a target="_blank" href="http://avms.ru/"><img src="img/logo-partners/mediasystem-group.png" alt="img" class="avms-logo"/></a>
									<span>MediaSystem Group — один из ведущих операторов по техническому оснащению мероприятий.</span>
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
									<a target="_blank" href="https://utro.ru"><img src="img/logo-partners/utro-logo.png" alt="img"/></a>
									<a target="_blank" href="https://forklog.com"><img src="img/logo-partners/forklog.png" alt="img"/></a>
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
									<a target="_blank" href="http://www.mvexpo.ru/ "><img src="img/logo-partners/mvexpo-200x100.gif" alt="img"/></a>
									<a target="_blank" href="http://www.moneyinformer.ru/ "><img src="img/logo-partners/mi_logo-200.png" alt="img"/></a>
									<a target="_blank" href="https://altcoin.info/ "><img src="img/logo-partners/alt_opacity100.png" alt="img"/></a>
									<a target="_blank" href="http://www.iksmedia.ru"><img src="img/logo-partners/IKS-media.jpg" alt="img"/></a>
									<a target="_blank" href="http://www.idealmachine.ru/"><img src="img/logo-partners/iDealMachine.jpg" alt="img"/></a>
									<a target="_blank" href="http://sbi.tusur.ru/ "><img src="img/logo-partners/logo-m-top.png" alt="img"/></a>
									<a target="_blank" href="http://www.bitmoneyekb.com/ "><img src="img/logo-partners/bit-money.png" alt="img"/></a>
									<a target="_blank" href="http://www.fxstreet.ru.com/"><img src="img/logo-partners/fxs_logo_whiteback_screen.png" alt="img"/></a>

									<a target="_blank" href="https://chainnews.ru"><img src="img/logo-partners/chainnews.png" alt="img"/></a>
									<a target="_blank" href="http://konkir.ru"><img src="img/logo-partners/konkir.jpg" alt="img"/></a>
									<a target="_blank" href="https://anycoin.news"><img src="img/logo-partners/logo-anycoin.png" alt="img"/></a>
									<a target="_blank" href="https://expotrade.ru"><img src="img/logo-partners/expoTrade.png" alt="img"/></a>
									<a target="_blank" href="http://www.techbook.ru"><img src="img/logo-partners/techbook.gif" alt="img"/></a>
									<a target="_blank" href="http://finpublic.ru"><img src="img/logo-partners/finpublic.png" alt="img"/></a>
									<a target="_blank" href="https://expoclub.ru"><img src="img/logo-partners/expoclub.png" alt="img"/></a>
									<a target="_blank" href="http://itpark-kazan.ru"><img src="img/logo-partners/itpark.png" alt="img"/></a>
									<a target="_blank" href="http://probusinesstv.ru"><img src="img/logo-partners/PRObusiness-logo.jpg" alt="img"/></a>
									<a target="_blank" href="https://helpinver.com"><img src="img/logo-partners/helpinwer.png" alt="img"/></a>
									<a target="_blank" href="http://coinews.io/ru/category/1-kripto"><img src="img/logo-partners/coinews.io.png" alt="img"/></a>
									<a target="_blank" href="https://ituber.me"><img src="img/logo-partners/ituber.jpg" alt="img"/></a>
									<a target="_blank" href="https://innmind.com/ru"><img src="img/logo-partners/Innmind.jpg" alt="img"/></a>

									<a target="_blank" href="https://lagente.do"><img src="img/logo-partners/logo_lagente.jpg" alt="img"/></a>
									<a target="_blank" href="https://zucker.studio/"><img src="img/logo-partners/Zucker-Studio.png" alt="img"/></a>
									<a target="_blank" href="http://www.regruss.ru"><img src="img/logo-partners/regionalnaya_rossiya.png" alt="img"/></a>
									<a target="_blank" href="http://www.plusworld.ru"><img src="img/logo-partners/plas.jpg" alt="img"/></a>
									<a target="_blank" href="http://balakovo-bi.ru"><img src="img/logo-partners/BMP.jpg" alt="img"/></a>
									<a target="_blank" href="https://www.rubrain.com"><img src="img/logo-partners/rubrain.jpg" alt="img"/></a>
									<a target="_blank" href="https://www.seonews.ru"><img src="img/logo-partners/seonews.svg" alt="img"/></a>
									<a target="_blank" href="http://mti.edu.ru"><img src="img/logo-partners/MTI-logo.jpeg" alt="img"/></a>
									<a target="_blank" href="https://mbschool.ru"><img src="img/logo-partners/MBS-logo.png" alt="img"/></a>
									<a target="_blank" href="https://blockchainevents.ru/"><img src="img/logo-partners/blockchainevents_onwhite.jpg" alt="img"/></a>
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
					<a target="_blank" href="https://www.mos.ru/dit/"><img src="img/logo-partners/DIT_Logo.jpg" alt="img"  style="max-width: 220px;"/></a>
					<a target="_blank" href="https://www.finam.ru/" class="big"><img src="img/logo-partners/finam.png" alt="img" style="max-height: 113px; margin-top: -19px;"/></a>
					<a target="_blank" href="http://learn.alfabank.ru/" class="big alfabank"><img src="img/logo-partners/logo-alfa.jpg" alt="img"/></a>
					<a target="_blank" href="http://lp.mmgp.ru/7" class="big"><img src="img/logo-partners/logo_mmgp.png" alt="img"/></a>
					<a target="_blank" href="https://ru.tradingview.com/" class="big"><img style="width:120px" src="img/logo-partners/tradingview.svg" alt="img"/></a>
					<a target="_blank" href="https://alfabank.ru/" class="big"><img style="max-width:250px" src="img/logo-partners/alfabank.png" alt="img"/></a>
					<a target="_blank" href="https://www.moedelo.org/" class="big"><img src="img/logo-partners/moedelo.jpg" alt="img"/></a>

					<p style="margin-top: 30px;">Инновационный партнер</p>
					<div class="information-partners inovations-partner">
						<a target="_blank" href="http://sk.ru/technopark/"><img src="img/logo-partners/sklogo_ru.png" style="max-height:120px" alt="img"/></a>
						<span>Миссия Фонда «Сколково» – создание Экосистемы, формирование благоприятных условий для инновационного процесса.</span>
					</div>

					<br>
					<p>Технический партнер</p>
					<div class="information-partners technical-partner">
						<a target="_blank" href="http://avms.ru/"><img src="img/logo-partners/mediasystem-group.png" alt="img"/></a>
						<span>MediaSystem Group — один из ведущих операторов по техническому оснащению мероприятий.</span>
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
						<a target="_blank" href="https://utro.ru"><img src="img/logo-partners/utro-logo.png" alt="img"/></a>
						<a target="_blank" href="https://forklog.com"><img src="img/logo-partners/forklog.png" alt="img"/></a>
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
						<a target="_blank" href="http://www.mvexpo.ru/ "><img src="img/logo-partners/mvexpo-200x100.gif" alt="img"/></a>
						<a target="_blank" href="http://www.moneyinformer.ru/ "><img src="img/logo-partners/mi_logo-200.png" alt="img"/></a>
						<a target="_blank" href="https://altcoin.info/ "><img src="img/logo-partners/alt_opacity100.png" alt="img"/></a>
						<a target="_blank" href="http://www.iksmedia.ru"><img src="img/logo-partners/IKS-media.jpg" alt="img"/></a>
						<a target="_blank" href="http://www.idealmachine.ru/"><img src="img/logo-partners/iDealMachine.jpg" alt="img"/></a>
						<a target="_blank" href="http://sbi.tusur.ru/ "><img src="img/logo-partners/logo-m-top.png" alt="img"/></a>
						<a target="_blank" href="http://www.bitmoneyekb.com/ "><img src="img/logo-partners/bit-money.png" alt="img"/></a>
						<a target="_blank" href="http://www.fxstreet.ru.com/"><img src="img/logo-partners/fxs_logo_whiteback_screen.png" alt="img"/></a>
						<a target="_blank" href="https://chainnews.ru"><img src="img/logo-partners/chainnews.png" alt="img"/></a>
						<a target="_blank" href="http://konkir.ru"><img src="img/logo-partners/konkir.jpg" alt="img"/></a>
						<a target="_blank" href="https://anycoin.news"><img src="img/logo-partners/logo-anycoin.png" alt="img"/></a>
						<a target="_blank" href="https://expotrade.ru"><img src="img/logo-partners/expoTrade.png" alt="img"/></a>
						<a target="_blank" href="http://www.techbook.ru"><img src="img/logo-partners/techbook.gif" alt="img"/></a>
						<a target="_blank" href="http://finpublic.ru"><img src="img/logo-partners/finpublic.png" alt="img"/></a>
						<a target="_blank" href="https://expoclub.ru"><img src="img/logo-partners/expoclub.png" alt="img"/></a>
						<a target="_blank" href="http://itpark-kazan.ru"><img src="img/logo-partners/itpark.png" alt="img"/></a>
						<a target="_blank" href="http://probusinesstv.ru"><img src="img/logo-partners/PRObusiness-logo.jpg" alt="img"/></a>
						<a target="_blank" href="https://helpinver.com"><img src="img/logo-partners/helpinwer.png" alt="img"/></a>
						<a target="_blank" href="http://coinews.io/ru/category/1-kripto"><img src="img/logo-partners/coinews.io.png" alt="img"/></a>
						<a target="_blank" href="https://ituber.me"><img src="img/logo-partners/ituber.jpg" alt="img"/></a>
						<a target="_blank" href="https://innmind.com/ru"><img src="img/logo-partners/Innmind.jpg" alt="img"/></a>
						<a target="_blank" href="https://lagente.do"><img src="img/logo-partners/logo_lagente.jpg" alt="img"/></a>
						<a target="_blank" href="https://zucker.studio/"><img src="img/logo-partners/Zucker-Studio.png" alt="img"/></a>
						<a target="_blank" href="http://www.regruss.ru"><img src="img/logo-partners/regionalnaya_rossiya.png" alt="img"/></a>
						<a target="_blank" href="http://www.plusworld.ru"><img src="img/logo-partners/plas.jpg" alt="img"/></a>
						<a target="_blank" href="http://balakovo-bi.ru"><img src="img/logo-partners/BMP.jpg" alt="img"/></a>
						<a target="_blank" href="https://www.rubrain.com"><img src="img/logo-partners/rubrain.jpg" alt="img"/></a>
						<a target="_blank" href="https://www.seonews.ru"><img src="img/logo-partners/seonews.svg" alt="img"/></a>
						<a target="_blank" href="http://mti.edu.ru"><img src="img/logo-partners/MTI-logo.jpeg" alt="img"/></a>
						<a target="_blank" href="https://mbschool.ru"><img src="img/logo-partners/MBS-logo.png" alt="img"/></a>
						<a target="_blank" href="https://blockchainevents.ru/"><img src="img/logo-partners/blockchainevents_onwhite.jpg" alt="img"/></a>
						<a target="_blank" href="http://asiablockchain.org"><img src="img/logo-partners/www.asiablockchain.org.png" alt="img"/></a>

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
				ул. Зацепа, 41
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
					<a href="https://yandex.ru/maps/-/CBUeAXsN8A" target="_blank">Карта <br>проезда</a>
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

<div id="sponsor1" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">PRIZM</div>
            <a href="http://prizm.club/ru/" target="_blank" class="b-sponsor__img prizm_white"></a>
        </div>
        <div class="b-video__wrapper">
             <div class="b-video b-video-sp-1">
                <img src="../img/prizm_preview.jpg" alt="">
                <div id="youtube-sponsor-video-4-click"></div>
            </div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Полностью росийская разработка Общественного движения CWT. Нет эмиссионого центра, может использоваться
                как&nbsp;полностью прозрачное (блокчейн) и&nbsp;децентрализованное платежное средство.</p>
            <p>Преимущества&nbsp;-&nbsp;скорость транзакций&nbsp;-&nbsp;до&nbsp;1&nbsp;минуты. Пропускная способность
                не&nbsp;ограничена. До&nbsp;сотен тысяч
                транзакций в&nbsp;мин&nbsp;(1&nbsp;блок /1&nbsp;мин). Минимальная комиссия 0.5% до&nbsp;10$, после суммы перевода, где&nbsp;0.5%
                превышает 10$,&nbsp;-&nbsp;фиксированная 10$. Т.е&nbsp;при&nbsp;переводе 1&nbsp;млн. $ через ПРИЗМ из&nbsp;одной точки мира в&nbsp;другую
                вы&nbsp;заплатите комиссию всего 10$.</p>
            <p>Благодаря технической реализации совершенно иной концепции эмиссии новых монет, чем у&nbsp;всех криптовалют,
                ПРИЗМ по&nbsp;мере своего развития становится еще более децентрализованным и&nbsp;не&nbsp;центрируется. Мы&nbsp;первые,
                кто&nbsp;решил проблему 51%. Эту&nbsp;проблему не&nbsp;смогла решить ни&nbsp;одна команда из&nbsp;существующих криптовалют
                в&nbsp;мире.</p>
            <p>Открытый исходный код <a href="https://github.com/prizmspace/PrizmCore" target="_blank">здесь</a></p>
            <p>Проект рассчитан на&nbsp;абсолютно любую аудиторию в&nbsp;абсолютно любой стране мира, целевая
                аудитория&nbsp;-&nbsp;все&nbsp;жители планеты Земля. Миссия Призм&nbsp;-&nbsp;осуществить плавный переход от&nbsp;мировой финансовой системы,
                основанной долларе США, к&nbsp;криптоэкономике, экономике будущего, построенной на&nbsp;блокчейне. Мы&nbsp;считаем,
                что&nbsp;Россия в&nbsp;этом плане может стать ведущим игроком, направив развитие криптоэкономики в&nbsp;русло именно
                децентрализации, выиграть за&nbsp;счет этого, стать лидером для&nbsp;всех, в&nbsp;том&nbsp;числе развитых стран в&nbsp;финансовой
                сфере.</p>
            <p>Наши задачи:</p>
            <p> Во-первых&nbsp;-&nbsp;полная реализация премайна ПРИЗМ (10&nbsp;млн&nbsp;монет). Это&nbsp;как&nbsp;ico в&nbsp;других проектах. Только после
                этого проект становится действительно децентрализованным. Все новые монеты начисляются уже&nbsp;только
                на&nbsp;основе старых, которые полностью будут распределены и&nbsp;находятся не&nbsp;у&nbsp;создателей, а&nbsp;на&nbsp;руках
                у&nbsp;пользователей ситемы. На&nbsp;средства, вырученные от&nbsp;продажи премайна будет создана платежная инфраструктура
                ПРИЗМ&nbsp;-&nbsp;это подключение к&nbsp;онлайн и&nbsp;офлайн <span style="white-space: nowrap">биржам/сертифицированным криптообменникам</span>, подключение
                к&nbsp;платежной системе VISA.</p>
            <p>Активное продвижение криптовалюты&nbsp;-&nbsp;съемки художественного сериала на&nbsp;десятках языков о&nbsp;криптовалюте
                ПРИЗМ, организация десятков регулярных онлайн/оффлайн конференций и&nbsp;тренингов ежедневно по&nbsp;всему миру
                и&nbsp;тд.</p>
            <p>Проект использует технологию блокчейн, за&nbsp;основу используется ядро NXT&nbsp;Core, которое в&nbsp;процессе
                разработки, было полностью переработано. Реализован уникальный механизм Парамайнинг, то&nbsp;есть&nbsp;эмиссия
                новых монет отвязана от&nbsp;процесса <span style="white-space: nowrap">майнинга/форжинга</span>, как&nbsp;это&nbsp;происходит в&nbsp;любых других криптовалютах
                (<sppan style="white-space: nowrap">Proof-of-Work</span>/<span style="white-space: nowrap">Proof-of-Stake</span>).</p>
            <p>В&nbsp;ПРИЗМ эмиссия новых монет осуществляется децентрализованно на&nbsp;кошельках всех пользавателей сети
                одновременно. Благодаря этому, по&nbsp;мере развития сети с&nbsp;генезис кошелька новые монеты распределяются
                на&nbsp;все большее количество адресов. Таким образом ПРИЗМ все сильнее распыляется и&nbsp;становится все более
                децентрализованным.</p>
            <p>Скорость создания новых монет зависит от&nbsp;двух факторов. В&nbsp;механизме Параманйинг использованы элементы
                сетевого маркетинга на&nbsp;блокчейне. Именно благодаря этому, сеть может развиваться сама, раширяясь
                и&nbsp;поглощая все больше и&nbsp;больше пользователей, как социальный вирус.</p>
            <p>Система ПРИЗМ никогда не&nbsp;станет центристской моделью, как&nbsp;это&nbsp;происходит в&nbsp;Биткойн (майнинговые пулы)
                или&nbsp;пос валютах (объем стэйка). Установка ноды и&nbsp;создание блоков возможно каждому на&nbsp;его&nbsp;домашнем компьютере
                и эта&nbsp;задача не&nbsp;усложняется. Уникальный парамайнинг ПРИЗМ технически нигде больше не&nbsp;реализован,
                ни&nbsp;в&nbsp;одной криптовалюте, ни&nbsp;в&nbsp;одной стране. Это&nbsp;уникальная разработка, не&nbsp;имеющая аналогов в&nbsp;мире,
                поэтому эта&nbsp;часть исходного кода на&nbsp;данный момент закодирована лицензионным кодировщиком Java. Она&nbsp;будет
                раскодирована и&nbsp;выложена в&nbsp;публичный доступ после&nbsp;полной реализации предмайна.</p>
            <p>В криптовалюте ПРИЗМ полностью устранены все минусы и&nbsp;собраны все плюсы других мировых криптовалют.
                С&nbsp;момента запуска уже&nbsp;преодолено множество трудностей: удалось показать не&nbsp;только жизнеспособность проекта
                в&nbsp;довольно агрессивной среде, но&nbsp;и&nbsp;его&nbsp;перспективность и&nbsp;долгосрочность. Основной трудностью, конечно,
                являются навязанные за&nbsp;последние 100&nbsp;лет стереотипы о&nbsp;существующей мировой финансовой системе, а&nbsp;также
                превосходство топовых криптовалют. Мы&nbsp;надеемся, что&nbsp;наша идеология и&nbsp;наш инструмент ПРИЗМ снимет эти
                стереотипы и&nbsp;послужит на&nbsp;благо народа не&nbsp;только России, но&nbsp;и&nbsp;всего мира.</p>
            <p>Как писалось выше, в&nbsp;данный момент идет распределение предмайнинга, для&nbsp;выполнения дальнейшей стратегии
                развития. Но&nbsp;нам важны не&nbsp;просто инвестиции в&nbsp;наш&nbsp;проект, а&nbsp;мы&nbsp;в&nbsp;первую очередь ищем партнёров в&nbsp;странах
                способных “распылить” ПРИЗМ по&nbsp;максимально большему количеству участников. Именно такой подход позволит
                ПРИЗМ пройти в&nbsp;кратчайший срок тот путь развития, который был у&nbsp;Биткойн. Мы&nbsp;уверены, что&nbsp;ПРИЗМ не&nbsp;только&nbsp;догонит
                биткойн по&nbsp;капитализации и&nbsp;численности пользователей, но&nbsp;и&nbsp;обойдёт его, так&nbsp;как&nbsp;технически
                по&nbsp;всем параметрам ПРИЗМ его&nbsp;превосходит.</p>
            <p>Проект задумывался прежде всего как&nbsp;удобное и&nbsp;современное международное платежное средство. Именно
                платёжное средство, которым так&nbsp;и&nbsp;не&nbsp;стал Биткойн.</p>
        </div>
    </div>
    <a href="files/PRIZM.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor-video1" class="sponsor video-sp-1">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">PRIZM</div>
            <a href="http://prizm.club/ru/" target="_blank" class="b-sponsor__img prizm_white"></a>
        </div>
        <div class="b-video__wrapper">
            <div id="youtube-sponsor-video-4"></div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Полностью росийская разработка Общественного движения CWT. Нет эмиссионого центра, может использоваться
                как&nbsp;полностью прозрачное (блокчейн) и&nbsp;децентрализованное платежное средство.</p>
            <p>Преимущества&nbsp;-&nbsp;скорость транзакций&nbsp;-&nbsp;до&nbsp;1&nbsp;минуты. Пропускная способность
                не&nbsp;ограничена. До&nbsp;сотен тысяч
                транзакций в&nbsp;мин&nbsp;(1&nbsp;блок /1&nbsp;мин). Минимальная комиссия 0.5% до&nbsp;10$, после суммы перевода, где&nbsp;0.5%
                превышает 10$,&nbsp;-&nbsp;фиксированная 10$. Т.е&nbsp;при&nbsp;переводе 1&nbsp;млн. $ через ПРИЗМ из&nbsp;одной точки мира в&nbsp;другую
                вы&nbsp;заплатите комиссию всего 10$.</p>
            <p>Благодаря технической реализации совершенно иной концепции эмиссии новых монет, чем у&nbsp;всех криптовалют,
                ПРИЗМ по&nbsp;мере своего развития становится еще более децентрализованным и&nbsp;не&nbsp;центрируется. Мы&nbsp;первые,
                кто&nbsp;решил проблему 51%. Эту&nbsp;проблему не&nbsp;смогла решить ни&nbsp;одна команда из&nbsp;существующих криптовалют
                в&nbsp;мире.</p>
            <p>Открытый исходный код <a href="https://github.com/prizmspace/PrizmCore" target="_blank">здесь</a></p>
            <p>Проект рассчитан на&nbsp;абсолютно любую аудиторию в&nbsp;абсолютно любой стране мира, целевая
                аудитория&nbsp;-&nbsp;все&nbsp;жители планеты Земля. Миссия Призм&nbsp;-&nbsp;осуществить плавный переход от&nbsp;мировой финансовой системы,
                основанной долларе США, к&nbsp;криптоэкономике, экономике будущего, построенной на&nbsp;блокчейне. Мы&nbsp;считаем,
                что&nbsp;Россия в&nbsp;этом плане может стать ведущим игроком, направив развитие криптоэкономики в&nbsp;русло именно
                децентрализации, выиграть за&nbsp;счет этого, стать лидером для&nbsp;всех, в&nbsp;том&nbsp;числе развитых стран в&nbsp;финансовой
                сфере.</p>
            <p>Наши задачи:</p>
            <p> Во-первых&nbsp;-&nbsp;полная реализация премайна ПРИЗМ (10&nbsp;млн&nbsp;монет). Это&nbsp;как&nbsp;ico в&nbsp;других проектах. Только после
                этого проект становится действительно децентрализованным. Все новые монеты начисляются уже&nbsp;только
                на&nbsp;основе старых, которые полностью будут распределены и&nbsp;находятся не&nbsp;у&nbsp;создателей, а&nbsp;на&nbsp;руках
                у&nbsp;пользователей ситемы. На&nbsp;средства, вырученные от&nbsp;продажи премайна будет создана платежная инфраструктура
                ПРИЗМ&nbsp;-&nbsp;это подключение к&nbsp;онлайн и&nbsp;офлайн <span style="white-space: nowrap">биржам/сертифицированным криптообменникам</span>, подключение
                к&nbsp;платежной системе VISA.</p>
            <p>Активное продвижение криптовалюты&nbsp;-&nbsp;съемки художественного сериала на&nbsp;десятках языков о&nbsp;криптовалюте
                ПРИЗМ, организация десятков регулярных онлайн/оффлайн конференций и&nbsp;тренингов ежедневно по&nbsp;всему миру
                и&nbsp;тд.</p>
            <p>Проект использует технологию блокчейн, за&nbsp;основу используется ядро NXT&nbsp;Core, которое в&nbsp;процессе
                разработки, было полностью переработано. Реализован уникальный механизм Парамайнинг, то&nbsp;есть&nbsp;эмиссия
                новых монет отвязана от&nbsp;процесса <span style="white-space: nowrap">майнинга/форжинга</span>, как&nbsp;это&nbsp;происходит в&nbsp;любых других криптовалютах
                (<sppan style="white-space: nowrap">Proof-of&nbsp;Work</span>/<span style="white-space: nowrap">Proof-of-Stake</span>).</p>
            <p>В&nbsp;ПРИЗМ эмиссия новых монет осуществляется децентрализованно на&nbsp;кошельках всех пользавателей сети
                одновременно. Благодаря этому, по&nbsp;мере развития сети с&nbsp;генезис кошелька новые монеты распределяются
                на&nbsp;все большее количество адресов. Таким образом ПРИЗМ все сильнее распыляется и&nbsp;становится все более
                децентрализованным.</p>
            <p>Скорость создания новых монет зависит от&nbsp;двух факторов. В&nbsp;механизме Параманйинг использованы элементы
                сетевого маркетинга на&nbsp;блокчейне. Именно благодаря этому, сеть может развиваться сама, раширяясь
                и&nbsp;поглощая все больше и&nbsp;больше пользователей, как социальный вирус.</p>
            <p>Система ПРИЗМ никогда не&nbsp;станет центристской моделью, как&nbsp;это&nbsp;происходит в&nbsp;Биткойн (майнинговые пулы)
                или&nbsp;пос валютах (объем стэйка). Установка ноды и&nbsp;создание блоков возможно каждому на&nbsp;его&nbsp;домашнем компьютере
                и эта&nbsp;задача не&nbsp;усложняется. Уникальный парамайнинг ПРИЗМ технически нигде больше не&nbsp;реализован,
                ни&nbsp;в&nbsp;одной криптовалюте, ни&nbsp;в&nbsp;одной стране. Это&nbsp;уникальная разработка, не&nbsp;имеющая аналогов в&nbsp;мире,
                поэтому эта&nbsp;часть исходного кода на&nbsp;данный момент закодирована лицензионным кодировщиком Java. Она&nbsp;будет
                раскодирована и&nbsp;выложена в&nbsp;публичный доступ после&nbsp;полной реализации предмайна.</p>
            <p>В криптовалюте ПРИЗМ полностью устранены все минусы и&nbsp;собраны все плюсы других мировых криптовалют.
                С&nbsp;момента запуска уже&nbsp;преодолено множество трудностей: удалось показать не&nbsp;только жизнеспособность проекта
                в&nbsp;довольно агрессивной среде, но&nbsp;и&nbsp;его&nbsp;перспективность и&nbsp;долгосрочность. Основной трудностью, конечно,
                являются навязанные за&nbsp;последние 100&nbsp;лет стереотипы о&nbsp;существующей мировой финансовой системе, а&nbsp;также
                превосходство топовых криптовалют. Мы&nbsp;надеемся, что&nbsp;наша идеология и&nbsp;наш инструмент ПРИЗМ снимет эти
                стереотипы и&nbsp;послужит на&nbsp;благо народа не&nbsp;только России, но&nbsp;и&nbsp;всего мира.</p>
            <p>Как писалось выше, в&nbsp;данный момент идет распределение предмайнинга, для&nbsp;выполнения дальнейшей стратегии
                развития. Но&nbsp;нам важны не&nbsp;просто инвестиции в&nbsp;наш&nbsp;проект, а&nbsp;мы&nbsp;в&nbsp;первую очередь ищем партнёров в&nbsp;странах
                способных “распылить” ПРИЗМ по&nbsp;максимально большему количеству участников. Именно такой подход позволит
                ПРИЗМ пройти в&nbsp;кратчайший срок тот путь развития, который был у&nbsp;Биткойн. Мы&nbsp;уверены, что&nbsp;ПРИЗМ не&nbsp;только&nbsp;догонит
                биткойн по&nbsp;капитализации и&nbsp;численности пользователей, но&nbsp;и&nbsp;обойдёт его, так&nbsp;как&nbsp;технически
                по&nbsp;всем параметрам ПРИЗМ его&nbsp;превосходит.</p>
            <p>Проект задумывался прежде всего как&nbsp;удобное и&nbsp;современное международное платежное средство. Именно
                платёжное средство, которым так&nbsp;и&nbsp;не&nbsp;стал Биткойн.</p>
        </div>
    </div>
    <a href="files/PRIZM.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor2" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">SMSCHAIN</div>
            <a href="https://smschain.org/" target="_blank" class="b-sponsor__img smschain"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>
                <b>SMSCHAIN представила блокчейн-приложение для&nbsp;монетизации неиспользованных SMS.</b>
            </p>
            <p>SMSCHAIN представляет собой не&nbsp;имеющую аналогов <span style="white-space: nowrap">P2B&nbsp;(peer-to-business) систему</span>, выполняющую функционал
                <span style="white-space: nowrap">СМС-шлюза</span> для&nbsp;отправки служебных сообщений различных веб-сервисов. Приложение дает возможность любому
                владельцу <span style="white-space: nowrap">Android-смартфона</span> продать неиспользованные СМС, включенные в&nbsp;тарифный план, компаниям,
                отправляющим уведомления для&nbsp;своих клиентов.</p>
            <p>SMSCHAIN представила блокчейн-приложение, которое позволит получать вознаграждение за&nbsp;свои
                неиспользованные СМС. Первая версия будет доступна всем владельцам устройств на&nbsp;Android. Приложение
                позволяет настраивать как объем СМС-трафика, проходящего через устройство, так&nbsp;и&nbsp;его содержание:
                пользователь сможет видеть шаблоны сообщений, которые будут отправляться с&nbsp;его телефона. Над решением
                работает коллектив с&nbsp;более чем 10-летним опытом работы в&nbsp;сфере телекоммуникаций.</p>
            <p>2P&nbsp;(application-to-person) сообщения включают в&nbsp;себя уведомления, подтверждения двухфакторной
                аутентификации, и&nbsp;др. Их&nbsp;используют такие компании как &nbsp;Google, Uber или&nbsp;Facebook для&nbsp;обеспечения
                безопасности и&nbsp;других ключевых функций своих веб-сервисов, а&nbsp;также&nbsp;в&nbsp;маркетинговых кампаниях и&nbsp;мобильных
                платежах. Рынок A2P сообщений стремительно развивается: по&nbsp;подсчетам аналитиков, его объем к&nbsp;2020&nbsp;году
                достигнет <a href="https://globenewswire.com/news-release/2017/05/23/995205/0/en/Global-A2P-SMS-Market-Size-Will-Reach-USD-70-0-Billion-by-2020.html" target="_blank">$70 млрд</a>.
                Его рост обусловлен расширением мобильного покрытия, особенно в&nbsp;странах с&nbsp;формирующейся рыночной экономикой.</p>
            <p>Сегодня основной A2P-трафик генерируется с&nbsp;помощью <span style="white-space: nowrap">GSM&nbsp;СМС-шлюзов</span>. Это&nbsp;довольно дорогостоящее
                оборудование, требующее постоянного обслуживания и&nbsp;географического присутствия. Использование блокчейна
                для&nbsp;децентрализации сети, через которую отправляются сообщения, решает основные проблемы этой сферы.</p>
            <p>“SMSCHAIN&nbsp;-&nbsp;это полностью децентрализованная система, к&nbsp;которой сможет присоединиться пользователь
                из&nbsp;любой точки мира и&nbsp;получить вознаграждение за&nbsp;СМС, отправленные с&nbsp;его&nbsp;телефона”,&nbsp;-&nbsp;комментирует Андрей
                Инсаров, CEO&nbsp;SMSCHAIN.&nbsp;-&nbsp;Децентрализация существенно повышает эффективность СМС-шлюзов, предоставляя
                возможность глобального масштабирования системы и&nbsp;существенного снижения операционных затрат,
                что&nbsp;невозможно с&nbsp;сегодняшними решениями на&nbsp;рынке”.</p>
            <p>Роль посредника между пользователями приложения и&nbsp;бизнесом будут выполнять СМС-агрегаторы. Они будут
                создавать <span style="white-space: nowrap">заявки-аукционы</span>, в&nbsp;каждом из&nbsp;которых будут указаны назначение, объем трафика, стоимость и&nbsp;сам
                текст сообщения. Пользователи смогут выбрать понравившийся заказ из&nbsp;реестра, чтобы выполнить его.
                Вознаграждение они получают только по&nbsp;завершении рассылки, так&nbsp;что все стороны вопроса будут
                уверены исполнении взаимных договоренностей.</p>
            <p>“Мы верим, что&nbsp;рынок A2P сообщений остро нуждается в&nbsp;цифровой трансформации. Блокчейн открывает
                невероятные возможности для&nbsp;всех вовлеченных сторон. Пользователям он&nbsp;дает возможность получать
                вознаграждение за&nbsp;неиспользуемый ресурс своего тарифного плана, оптимизировать расходы за&nbsp;мобильную
                связь, а&nbsp;также позволяет быть частью глобальной P2B-сети. Для бизнеса оно&nbsp;решает ряд существующих
                сегодня основных проблем с&nbsp;доставкой SMS. Использование SMSCHAIN предоставит быстрое развертывание
                и&nbsp;масштабирование, значительное сокращение расходов на&nbsp;обслуживание и&nbsp;оборудование, а&nbsp;также&nbsp;обеспечит
                уверенность в&nbsp;исполнении задачи по&nbsp;доставке <span style="white-space: nowrap">SMS-сообщений</span>”&nbsp;-&nbsp;добавил Олег Макаров, COO&nbsp;SMSCHAIN.</p>
            <p>
                <b>О SMSCHAIN</b>
            </p>
            <p>SMSCHAIN&nbsp;-&nbsp;IT/телеком компания, которая занимается разработкой инфраструктуры уникального P2B сервиса.
                Создатели проекта имеют обширный опыт в&nbsp;телекоммуникациях и&nbsp;ведении собственного бизнеса. Предыдущий
                проект команды, Money&nbsp;SMS&nbsp;App имеет почти 100&nbsp;000&nbsp;скачиваний в&nbsp;Google&nbsp;Play&nbsp;Market.
                Андрей Инсаров, СEO, возглавляет европейскую телекоммуникационную B2B-компанию Intis Telecom, которая имеет
                более&nbsp;500&nbsp;бизнес-клиентов по&nbsp;всему миру. Олег Макаров, COO, также&nbsp;является CEO компании&nbsp;TelQ,
                международного шлюза для&nbsp;СМС-рассылок, платформы <span style="white-space: nowrap">СМС-маркетинга</span>, клиентами которой являются 2 из&nbsp;3 ключевых лидеров
                рынка.</p>
            <p>Олег Сейдак, CEO&nbsp;Blackmoon&nbsp;Financial&nbsp;Group, чей проект Blackmoon Crypto собрал $30&nbsp;миллионов меньше
                чем&nbsp;за 20 часов, является консультантом SMSCHAIN.</p>
        </div>
    </div>
    <a href="files/SMSCHAIN.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor3" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">SERENITY FINANCIAL</div>
            <a href="https://serenity-financial.io/" target="_blank" class="b-sponsor__img serenity_transparent"></a>
        </div>
         <div class="b-video__wrapper">
             <div class="b-video b-video-sp-3">
                <img src="/img/serenity_preview.jpg" alt="">
                <div id="youtube-sponsor-video-se-click"></div>
            </div>
        </div>
        <div class="b-sponsor__popup-text">
            <p><b>Платформа SERENITY&nbsp;FINANCIAL</b> объединяет брокеров любых юрисдикций и&nbsp;трейдеров со&nbsp;всего мира. Благодаря
                системе депозитария и&nbsp;технологии блокчейна платформа обеспечивает гарантию честности сделок и&nbsp;вывода
                средств.</p>
            <p><b>Миссия проекта</b>&nbsp;—&nbsp;создать безопасное, прозрачное, стандартизированное пространство для&nbsp;контроля торговых
                и&nbsp;неторговых операций между брокером и&nbsp;трейдером, а&nbsp;также стабилизационный фонд, страхующий риски.</p>
            <p><b>Арбитражная платформа Serenity</b> создана с&nbsp;целью защитить интересы трейдеров, обеспечить брокеров
                технологиями и&nbsp;ликвидностью и&nbsp;сформировать пространство для&nbsp;цивилизованных отношений.</p>
            <p><b>Создатели платформы</b> имеют более 10&nbsp;лет опыта работы на&nbsp;рынке форекс как&nbsp;со&nbsp;стороны трейдера, так&nbsp;и&nbsp;со&nbsp;стороны
                брокера. Поэтому они знают о&nbsp;проблемах отрасли всё. Проект уже&nbsp;получил позитивные отзывы от&nbsp;трейдеров и&nbsp;ряда брокеров.</p>
            <p><b>Изменить имидж рынка форекс</b> возможно только с&nbsp;помощью глобальных реформ. Консервативные методы
                регулирования устарели и&nbsp;уже не&nbsp;способны выполнять свои задачи в&nbsp;<span style="white-space: nowrap">интернет-трейдинге</span>. <b>SERENITY</b> решает
                проблемы отрасли, используя современные технологии блокчейна.</p>
            <p><b>Для миллионов трейдеров во&nbsp;всем мире</b> будет решен вопрос, как&nbsp;выбрать брокера, которому можно доверять,
                так&nbsp;как&nbsp;Serenity даст гарантии, что&nbsp;брокерам, участникам системы, можно доверять свои средства.</p>
            <p><b>Принцип работы платформы простой:</b> клиент регистрируются в&nbsp;Serenity, покупает токены, выбирает любого
                брокера из&nbsp;списка Serenity, переводит ему&nbsp;токены и&nbsp;получает на&nbsp;торговый счет эквивалент в&nbsp;любой
                доступной валюте. Все транзакции и&nbsp;торговые сделки записываются в&nbsp;блокчейн, чтоvисключает возможность
                подделки. Средства клиента хранятся в&nbsp;депозитарии Serenity, что&nbsp;исключает возможность использования
                их&nbsp;брокером в&nbsp;своих целях.</p>
            <p><b>Арбитром&nbsp;в&nbsp;спорах выступает Serenity.</b> Имея все данные из&nbsp;блокчейна и&nbsp;профессиональную комиссию, Serenity
                выносит вердикт и&nbsp;может заставить брокера выплатить клиенту прибыль.</p>
            <p><b>Для инвесторов проект интересен тем,</b> что&nbsp;за&nbsp;проектом стоят реальные брокерские компании, которые
                выступают первичными инвесторами, имеют огромный опыт в&nbsp;отрасли и&nbsp;ресурсы для&nbsp;реализации проекта.
                Средний потенциал доходности проекта&nbsp;—&nbsp;$1&nbsp;000&nbsp;000&nbsp;в&nbsp;месяц. Стоимость одного токена&nbsp;—&nbsp;0,1 eth.</p>
            <p>Присоединяйтесь к&nbsp;успешному проекту!</p>
        </div>
    </div>
    <a href="files/Serenity_ru.pptx" download class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor-video3" class="sponsor video-sp-3">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">SERENITY FINANCIAL</div>
            <a href="https://serenity-financial.io/" target="_blank" class="b-sponsor__img serenity_transparent"></a>
        </div>
         <div class="b-video__wrapper">
            <div id="youtube-sponsor-video-se"></div>
        </div>
        <div class="b-sponsor__popup-text">
            <p><b>Платформа SERENITY&nbsp;FINANCIAL</b> объединяет брокеров любых юрисдикций и&nbsp;трейдеров со&nbsp;всего мира. Благодаря
                системе депозитария и&nbsp;технологии блокчейна платформа обеспечивает гарантию честности сделок и&nbsp;вывода
                средств.</p>
            <p><b>Миссия проекта</b>&nbsp;—&nbsp;создать безопасное, прозрачное, стандартизированное пространство для&nbsp;контроля торговых
                и&nbsp;неторговых операций между брокером и&nbsp;трейдером, а&nbsp;также стабилизационный фонд, страхующий риски.</p>
            <p><b>Арбитражная платформа Serenity</b> создана с&nbsp;целью защитить интересы трейдеров, обеспечить брокеров
                технологиями и&nbsp;ликвидностью и&nbsp;сформировать пространство для&nbsp;цивилизованных отношений.</p>
            <p><b>Создатели платформы</b> имеют более 10&nbsp;лет опыта работы на&nbsp;рынке форекс как&nbsp;со&nbsp;стороны трейдера, так&nbsp;и&nbsp;со&nbsp;стороны
                брокера. Поэтому они знают о&nbsp;проблемах отрасли всё. Проект уже&nbsp;получил позитивные отзывы от&nbsp;трейдеров и&nbsp;ряда брокеров.</p>
            <p><b>Изменить имидж рынка форекс</b> возможно только с&nbsp;помощью глобальных реформ. Консервативные методы
                регулирования устарели и&nbsp;уже не&nbsp;способны выполнять свои задачи в&nbsp;<span style="white-space: nowrap">интернет-трейдинге</span>. <b>SERENITY</b> решает
                проблемы отрасли, используя современные технологии блокчейна.</p>
            <p><b>Для миллионов трейдеров во&nbsp;всем мире</b> будет решен вопрос, как&nbsp;выбрать брокера, которому можно доверять,
                так&nbsp;как&nbsp;Serenity даст гарантии, что&nbsp;брокерам, участникам системы, можно доверять свои средства.</p>
            <p><b>Принцип работы платформы простой:</b> клиент регистрируются в&nbsp;Serenity, покупает токены, выбирает любого
                брокера из&nbsp;списка Serenity, переводит ему&nbsp;токены и&nbsp;получает на&nbsp;торговый счет эквивалент в&nbsp;любой
                доступной валюте. Все транзакции и&nbsp;торговые сделки записываются в&nbsp;блокчейн, чтоvисключает возможность
                подделки. Средства клиента хранятся в&nbsp;депозитарии Serenity, что&nbsp;исключает возможность использования
                их&nbsp;брокером в&nbsp;своих целях.</p>
            <p><b>Арбитром&nbsp;в&nbsp;спорах выступает Serenity.</b> Имея все данные из&nbsp;блокчейна и&nbsp;профессиональную комиссию, Serenity
                выносит вердикт и&nbsp;может заставить брокера выплатить клиенту прибыль.</p>
            <p><b>Для инвесторов проект интересен тем,</b> что&nbsp;за&nbsp;проектом стоят реальные брокерские компании, которые
                выступают первичными инвесторами, имеют огромный опыт в&nbsp;отрасли и&nbsp;ресурсы для&nbsp;реализации проекта.
                Средний потенциал доходности проекта&nbsp;—&nbsp;$1&nbsp;000&nbsp;000&nbsp;в&nbsp;месяц. Стоимость одного токена&nbsp;—&nbsp;0,1 eth.</p>
            <p>Присоединяйтесь к&nbsp;успешному проекту!</p>
        </div>
    </div>
    <a href="files/Serenity_ru.pptx" download class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor5" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">B2Broker</div>
            <a href="http://www.b2bx.pro" target="_blank" class="b-sponsor__img b2broker-white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>На текущий момент B2BX — это агрегатор криптовалютной ликвидности для маржинальной и биржевой торговли и дистрибьюции ликвидности брокерскими компаниями. Мы планируем сделать первую официальную криптовалютную B2B-биржу или маркетплейс, в который подключим не менее 5% от количества текущих Forex и фондовых брокеров.</p>

			<p>Текущие решения на рынке ориентированы на ритейл, B2BX будет фокусироваться исключительно на институциональных клиентах: фондовых и криптовалютных биржах, форекс, фондовых и криптовлаютных брокерах. Все участники будут контролироваться биржей и финансовыми регуляторами. Биржа предоставит рейтинг брокеров и выступит гарантом надежности для клиентов, которые выберут в качестве брокера участника B2BX.</p>

			<p>Таким образом B2BX даст преимущества как финансовым институтам, так и ритейл клиентам. В частности B2B клиенты будут обеспечены глубоким стаканом цен на криптовалюты за счет того, что B2BX объединит брокеров, биржи и прочие финансовые институты на одной площадке. Розничные клиенты получат возможность торговли криптовалютами у любого привычного брокера, биржи и обменника.</p>

			<p>Компания B2Broker  </p>

			<p>Компания B2Broker предлагает комплексные решения для брокерских компаний
			Мы помогаем начинающим брокерам построить собственный бизнес, а уже работающим компаниям повысить эффективность и оптимизировать рабочие процессы. Наши специалисты не один год проработали в розничном брокерском бизнесе и знают его изнутри. Мы уже набили шишки, причитающиеся начинающему брокеру,  но при этом получили бесценный опыт и верный план, как избежать ловушек, открывая или оптимизируя собственную брокерскую компанию.</p>

			<p>Брокер с чистого листа</p>

			<p>Нам нравится открывать новые брокерские компании с нуля, поэтому наша гордость и наш флагманский продукт — это «Брокер под ключ». Человек приходит в B2Broker с мечтой о собственной брокерской компании, а через месяц уходит встречать своих первых клиентов.</p>

			<p>Нет предела совершенству</p>

			<p>Брокерский бизнес не стоит на месте, высокая конкуренция заставляет компании двигаться вперед, предлагать клиентам новые решения и условия. Если вы уже работаете на рынке, мы подскажем, как расширить линейку продуктов за счет ПАММ и МАММ сервисов и повысить конверсию минимум на 30% за счет автоматизации бизнеса и оптимизации рабочих процессов. Если что-то пошло не так, мы поможем разобраться и исправить ошибки.</p>

			<p>Наши продукты:</p>

			<p>Брокер под ключ — комплекс готовых решений для быстрого запуска компании с нуля;
			Программа White Label — подключение торгового сервера с DMA-ликвидностью от 17 крупнейших банков и личным кабинетом;
			Cloud CRM — система, позволяющая автоматизировать бизнес-процессы и повысить конверсию;
			ПАММ и МАММ сервисы — автоматизированные инвестиционные решения;
			Cloud2Bridge — система, позволяющая моментально соединять торговые сервера с поставщиками ликвидности;
			Web API МТ4/МТ5 — интеграция торговых серверов с веб-сервисами;
			Юридическое и финансовое сопровождение — консалтинг полного цикла, включая регистрацию и лицензирование брокерских компаний, а также сопровождение сделок по купле/продаже брокерского бизнеса;
			Мы помогаем строить честный и эффективный брокерский бизнес. Не тратьте время на создание правовой и ИТ-инфраструктуры, доверьте это нам.</p>
        </div>
    </div>
    <a href="files/B2Broker.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor6" class="sponsor">
    <span id="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">Gelios</div>
            <a href="javascript:void(0)" target="_blank" class="b-sponsor__img gelios-white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p><b>Gelios.io&nbsp;–&nbsp;платформа p2p&nbsp;кредитования в&nbsp;криптовалюте на&nbsp;блокчейн.</b> Целью
                платформы является предоставление возможности людям по&nbsp;всему земному шару выдавать средства
                в&nbsp;кредит, выбирая ключевые условия финансирования&nbsp;–&nbsp;ставку, срок, сумму кредита.
                Криптовалюта&nbsp;–&nbsp;внутренний токен Gelios, выпущенный на&nbsp;блокчейне Ethereum по&nbsp;стандарту
                ERC&nbsp;20 позволяет нивелировать страновые границы между заинтересоваными сторонами, устранить риск
                хардфорков (что&nbsp;в&nbsp;основном касается мейнистрим-криптовалют), осуществлять микротранзакции.
                Ключевым отличием площадки от&nbsp;подобных проектов является максимальная кастомизируемость процесса
                выдачи для&nbsp;кредитора, что&nbsp;приводит к&nbsp;бОльшему предложению средств для&nbsp;заемщика.</p>
            <p>Участники системы: кредитор, заемщик, провайдер&nbsp;KYC, риск-аналитик, коллектор, вебмастер.</p>
            <p><b>Архитектура платформы:</b></p>
            <p>
                <ol>
                    <li>1. Ограниченное количество токенов стандарта ERC20&nbsp;на&nbsp;блокчейн Ethereum</li>
                    <li>2. Hyperledger&nbsp;Fabric&nbsp;v.1.0: запись показателей сторон в&nbsp;блокчейн, обеспечение траста между сторонами,
                        включая показатели по&nbsp;кредитам заемщика (выплаты, просрочки). Майнерами системы являются риск-аналитики,
                        которым предоставляется возможность изучать блокчейн и&nbsp;транзакции всех заемщиков в&nbsp;анонимизированном
                        виде.
                    </li>
                    <li>3. Расчетное ядро Brainysoft.</li>
                </ol>
            </p>
            <p>Функции Gelios:</p>
            <p><b>KYC&nbsp;маркет</b>: решения, такие как&nbsp;Civic, Oz&nbsp;Forensics, CredyCo позволяют либо&nbsp;выдать
                однозначную оценку об&nbsp;идентификации и&nbsp;верификации пользователя, либо&nbsp;предоставить
                скоринговый балл. Интеграция с&nbsp;Gelios происходит по&nbsp;API.</p>
            <p><b>Рынок риск-алгоритмов</b>: так&nbsp;как&nbsp;майнерами в&nbsp;системе выступают риск-аналитики,
                это&nbsp;позволяет им&nbsp;строить модели, как&nbsp;общей направленности на&nbsp;определенный тип
                кредитного продукта, так&nbsp;и&nbsp;более&nbsp;сегментированные,
                например c&nbsp;использованием данных о&nbsp;просрочках во&nbsp;внутреннем блокчейне, сегментацией
                на&nbsp;отдельную страну
                или&nbsp;даже&nbsp;город, повторных заемщиков.</p>
            <p><b>White-label решения для&nbsp;личного кабинета заемщика.</b> Позволяет кредитору подключить личный кабинет заемщика
                к&nbsp;собственному домену или&nbsp;мобильному приложению и&nbsp;работать по&nbsp;собственной бизнес-схеме,
                используя все&nbsp;возможности Gelios.</p>
            <p><b>CPA&nbsp;маркет</b>: представив свой оффер для&nbsp;вебмастеров (сумму за&nbsp;одного выданного заемщика)
                кредитор решает
                вопрос привлечения трафика на&nbsp;платформу. Лидогенерация является на&nbsp;текущий момент одним из&nbsp;основных
                методов по&nbsp;привлечению трафика во&nbsp;всем&nbsp;мире. Использование антифрод-технологий (защита от&nbsp;сбрасывания
                лидов кредитором) позволяет вебмастеру быть уверенным в&nbsp;благонадежном использовании трафика.</p>
            <p><b>Управляющие</b>&nbsp;–&nbsp;профессиональные участники платформы, принимающие средства под управление.</p>
            <p>Разработчик платформы&nbsp;–&nbsp;компания Brainysoft, резидент Инновационного центра Сколково с&nbsp;2014 года. Продукт
                включает в&nbsp;себя&nbsp;API, кредитный конвейер, полное соответствие нормам регуляторов.</p>
            <p>Механика ICO и преимущества:</p>
            <p>
                <ol>
                    <li>1. Ограниченное количество токенов&nbsp;–&nbsp;80000000.</li>
                    <li>2. Pre-ICO&nbsp;–&nbsp;декабрь&nbsp;2017. ICO&nbsp;–&nbsp;март&nbsp;2018</li>
                    <li>3. Президент проекта&nbsp;–&nbsp;Виктор Орловский&nbsp;–&nbsp;управляющий директор SBT&nbsp;Venture&nbsp;Fund 1 и 2.</li>
                    <li>4. Платформа разработана на&nbsp;основе действующего бизнеса Brainysoft&nbsp;–&nbsp;резидента Инновационного центра
                        Сколково
                    </li>
                </ol>
            </p>
        </div>
    </div>
    <a href="../files/Gelios.pdf" target="_blank" class="b-sponsor__link">Смотреть презентацию</a>
</div>

<div id="sponsor7" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">SmartValley</div>
            <a href="https://smartvalley.io" target="_blank" class="b-sponsor__img smartvalley-white"></a>
        </div>
        <div class="b-video__wrapper">
            <div class="b-video b-video-sp-5">
                <img src="../img/smartvalley_preview.png" alt="">
                <div id="youtube-sponsor-video-smartvalley-click"></div>
            </div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>SmartValley&nbsp;—&nbsp;это децентрализованная «Силиконовая&nbsp;долина», которая связывает инвесторов, проекты,
                специалистов, профессиональные сообщества со&nbsp;всего мира и&nbsp;из&nbsp;любой его&nbsp;точки,
                где&nbsp;каждый проект может независимо от&nbsp;своего месторасположения привлечь инвестиции,
                специалистов, сообщество и&nbsp;реализовать свою идею!</p>
            <p>Одним из&nbsp;ключевых сервисов экосистемы будет сервис мультискоринга, который децентрализованно оценивает
                проект с&nbsp;помощью экспертов, сообществ (мудрость толпы), и&nbsp;искусственного интеллекта.</p>
            <p>На&nbsp;нашей платформе проект может выпустить токен на&nbsp;любой платформе, будь то&nbsp;Ethereum,
                Bitshares, Waves или&nbsp;EOS</p>
            <p>Благодаря нашему проекту инвесторы по&nbsp;всему миру смогут безопасно и&nbsp;легально вкладывать свои деньги,
                проекты&nbsp;-&nbsp;их&nbsp;получать, специалисты найдут работу в&nbsp;новой отрасли, а&nbsp;проектные
                команды и&nbsp;маркетологи найдут друг друга</p>
            <p>Экосистема разрабатывается как&nbsp;децентрализованное приложение на&nbsp;платформе Ethereum.</p>
        </div>
    </div>
</div>

<div id="sponsor-video5" class="sponsor video-sp-5">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">SmartValley</div>
            <a href="https://smartvalley.io" target="_blank" class="b-sponsor__img smartvalley-white"></a>
        </div>
        <div class="b-video__wrapper">
            <div id="youtube-sponsor-video-smartvalley"></div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>SmartValley&nbsp;—&nbsp;это децентрализованная «Силиконовая&nbsp;долина», которая связывает инвесторов, проекты,
                специалистов, профессиональные сообщества со&nbsp;всего мира и&nbsp;из&nbsp;любой его&nbsp;точки,
                где&nbsp;каждый проект может независимо от&nbsp;своего месторасположения привлечь инвестиции,
                специалистов, сообщество и&nbsp;реализовать свою идею!</p>
            <p>Одним из&nbsp;ключевых сервисов экосистемы будет сервис мультискоринга, который децентрализованно оценивает
                проект с&nbsp;помощью экспертов, сообществ (мудрость толпы), и&nbsp;искусственного интеллекта.</p>
            <p>На&nbsp;нашей платформе проект может выпустить токен на&nbsp;любой платформе, будь то&nbsp;Ethereum,
                Bitshares, Waves или&nbsp;EOS</p>
            <p>Благодаря нашему проекту инвесторы по&nbsp;всему миру смогут безопасно и&nbsp;легально вкладывать свои деньги,
                проекты&nbsp;-&nbsp;их&nbsp;получать, специалисты найдут работу в&nbsp;новой отрасли, а&nbsp;проектные
                команды и&nbsp;маркетологи найдут друг друга</p>
            <p>Экосистема разрабатывается как&nbsp;децентрализованное приложение на&nbsp;платформе Ethereum.</p>
        </div>
    </div>
</div>

<div id="sponsor8" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">ETHLend</div>
            <a href="http://ethlend.io" target="_blank" class="b-sponsor__img ethlend-white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>ETHLend- это 100% равноправная платформа для децентрализованногокредитования, разработанная на основе сети Ethereum.Одно из главных преимуществ децентрализованного кредитования на основе blockchain – это предоставление доступа<br> к всемирному капиталу и снижение зависимости от банковской инфраструктуры.</p>

			<p>Прогнозируется, что  всемирный рынок P2P-кредитования вырастет<br> по среднегодовому темпу роста на 53.06% в течение 2016-2020 гг. <br>Также возрастет необходимость в безопасном методе кредитования <br>на основе blockchain. </p>

			<p>Система Умных Контрактов (SmartContracts)vETHlend обеспечивает мгновенное и безопасное кредитование, предоставляя заём в любое время и в любом месте, тем самым органически дополняя рынок P2Pкредитования путем предоставления возможности кредиторам<br> и заемщикам привлекать средства из любой финансовой организации<br> в мире. Дополнительно данная система снижает и уравнивает процентные ставки по всему миру, предоставляя глобальный пул ликвидности <br>на равных основах.</p>

			<p>Первый кредит был выданнами 8 июня 2017 годаблагодаря полностью рабочей альфа-версии протокола, гдевместо кредитования<br> на основефиатных валют, участники использовали валюту Ethereum. Процесс кредитования полностью децентрализован-  никто, включая ETHLend, не может изменить, манипулировать или повлиять на процесс выдачи или получения кредита, что делает систему  безопасной по своему строению.</p>

			<p>В нашей платформе в качестве залоговых средств заёмщик использует ERC-20 токены, которые представляютсобой “дигитализированный” эквивалент стоимости актива компании  в системе blockchain. На данный момент рынок ERC-20 токенов оценивается в несколько миллиардов долларов США.</p>

			 <p>Мы ожидаем ускорение процесса «токенизации» в ближайшем будущем: заёмщик сможет с легкостью купить недвижимость в Канаде и оценить ее в соответствии с ERC-20 токеном, чтобы в дальнейшем привлечь средства через ETHLend. Таким образом, заёмщик получает доступ к инвесторам со всего мира, а не только к локальным игрокам, что обеспечивает свободную конкуренцию по процентным ставкам. </p>

			<p>ETHLend – это международная команда, настроенная изменить и расширить общественное мнение о доступности и возможностях кредитования. </p>

        </div>
    </div>
</div>

<div id="sponsor9" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">FACETER</div>
            <a href="https://faceter.io/?utm_source=blockchainweek_moscow&utm_medium=referral&utm_campaign=blockchain_week" target="_blank" class="b-sponsor__img faceter_white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Faceter.io&nbsp;—&nbsp;международный проект основан тремя единомышленниками из&nbsp;разных&nbsp;стран, которые&nbsp;с&nbsp;2014&nbsp;года
                совместно ведут исследования и&nbsp;разработки в&nbsp;области распознавания визуальных образов с&nbsp;помощью
                нейросетей и&nbsp;deep&nbsp;learning (одна&nbsp;из&nbsp;технологий искусственного интеллекта). Первый успешный продукт&nbsp;-&nbsp;pay.cards&nbsp;-&nbsp;команда выпустила
                в&nbsp;2015&nbsp;году. Это&nbsp;открытая библиотека для&nbsp;разработчиков приложений,
                распознающих данные на&nbsp;банковских картах. Продукт получил высокую оценку профессионального сообщества
                и&nbsp;до&nbsp;сих&nbsp;пор&nbsp;активно используется разработчиками по&nbsp;всему&nbsp;миру.</p>
            <p>Полученный опыт команда применила для&nbsp;создания&nbsp;Faceter&nbsp;-&nbsp;системы, которая анализирует видео с&nbsp;камер
                наблюдения, распознает лица и&nbsp;объекты, может&nbsp;быть&nbsp;настроена на&nbsp;конкретные сценарии поведения
                в&nbsp;определенных ситуациях. Обычным пользователям и&nbsp;малому бизнесу станет доступна технология
                интеллектуального видеонаблюдения, которую сейчас может себе позволить только крупный бизнес в&nbsp;силу
                дороговизны таких решений.</p>
        </div>
    </div>
    <a href="../files/Faceter.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor10" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">Mining Solutions</div>
            <a href="https://www.minso.net/" target="_blank" class="b-sponsor__img mining-solutions_white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Развивая свой майнинговый центр, специалисты компании Mining Solutions обратили внимание на&nbsp;то,
                что&nbsp;при&nbsp;использовании GPU&nbsp;не&nbsp;решено много простых задач. В&nbsp;частности, простой
                и&nbsp;удобный разгон видеокарт,
                излишнее выделение тепла&nbsp;и, как&nbsp;следствие, проблемы либо&nbsp;с&nbsp;вентиляцией,
                либо&nbsp;с&nbsp;местом размещения. Все&nbsp;вместе это&nbsp;понижает финансовую привлекательность проектов по&nbsp;GPU-майнингу.</p>
            <P>Эксперты Mining&nbsp;Solutions провели большое количество тестов и&nbsp;зафиксировали наилучшие достижения,
                написали удобное&nbsp;ПО, с&nbsp;которым&nbsp;даже&nbsp;непрофессионал сможет эффективно произвести настройку своих&nbsp;GPU&nbsp;мощностей,
                не&nbsp;подвергая риску оборудование.</P>
            <p>На&nbsp;сегодняшний день в&nbsp;майнинговом центре Mining&nbsp;Solutions настройки проводятся с&nbsp;применением <span style="white-space: nowrap">MSP&nbsp;Driver&nbsp;P106-100</span>
                и&nbsp;<span style="white-space: nowrap">MSP Driver RX 400/500 series</span>. Из&nbsp;технической документации следует, что&nbsp;скорость расчетов
                в&nbsp;среднем&nbsp;на&nbsp;<span style="white-space: nowrap">10%-20% выше базовых</span>, а&nbsp;потребляемая мощность <span style="white-space: nowrap">на 20%-30% ниже базой</span>.
                Повышение скорости и&nbsp;уменьшение энергопотребления существенно увеличивают финансовую привлекательность
                проектов по&nbsp;GPU&nbsp;майнингу.</p>
            <p>В&nbsp;процессе общения с&nbsp;участниками майнингового сообщества выяснилась необходимость в&nbsp;инструментах
                более&nbsp;высокого уровня, которые&nbsp;бы&nbsp;обеспечивали быстрое и&nbsp;удобное переключение обрабатываемых алгоритмов.
                В&nbsp;Mining&nbsp;Solutions эта&nbsp;задача решена посредством разработки собственного MSP&nbsp;Miner.
                Устанавливая правильные драйвера под&nbsp;каждый алгоритм мы&nbsp;быстро и&nbsp;надежно получаем оптимальные настройки
                и&nbsp;максимальную отдачу.</p>
            <p>На&nbsp;конференциях и&nbsp;в&nbsp;кулуарах мы&nbsp;все&nbsp;чаще слышим&nbsp;о&nbsp;том, что&nbsp;криптомайнинг
                скоро умрет, либо&nbsp;станет совсем&nbsp;не&nbsp;эффективным. Эта&nbsp;информация сильно снижает интерес
                вхождения новых игроков, а&nbsp;уже&nbsp;существующие не&nbsp;сильно спешат расширяться.</p>
            <p>Имея в&nbsp;арсенале линейку собственных решений: <span style="white-space: nowrap">MSP Drivers</span>,
                <span style="white-space: nowrap">MSP Miner</span>, <span style="white-space: nowrap">MSP Pool</span>
                мы&nbsp;решили разработать решение, которое&nbsp;бы&nbsp;стало основным связующим звеном между&nbsp;владельцами
                GPU&nbsp;мощностей и&nbsp;потребителями расчетных мощностей. В&nbsp;данной задаче проблема не&nbsp;в&nbsp;том,
                чтобы найти платежеспособного клиента, а&nbsp;в&nbsp;том, чтобы&nbsp;научиться обрабатывать поставленные задачи
                большим количеством распределенных счетных мощностей. По&nbsp;предварительным переговорам, большой объем
                счетных мощностей требуется в&nbsp;таких отраслях&nbsp;как: наука&nbsp;и&nbsp;образование,
                навигационная диспетчеризация (авиа, авто), медицина, космос, качественные съемки и&nbsp;<span style="white-space: nowrap">видео/виртуальные игры</span>.</p>
            <p>В&nbsp;качестве основного решения разрабатывается <span style="white-space: nowrap">MSP Next Generation</span>.
                Это решение, которое&nbsp;будет являться мостиком между&nbsp;задачами реального общества и&nbsp;ресурсами
                криптосообщества. Для&nbsp;решения этой&nbsp;задачи требуется большое количество исследований, привлечения
                квалифицированных экспертов из&nbsp;разных отраслей, математиков и&nbsp;программистов. Наша команда понимает,
                что&nbsp;надо&nbsp;делать и&nbsp;куда надо&nbsp;двигаться, но&nbsp;для&nbsp;реализации данного проекта
                в&nbsp;сжатые&nbsp;сроки требуется большой объем ресурсов, которые мы&nbsp;планируем собрать,
                проведя кампанию по&nbsp;реализации наших токенов.</p>
            <p>Следует отметить, что&nbsp;токен <span style="white-space: nowrap">Mining Solutions</span> не&nbsp;является
                платежным средством в&nbsp;прямом смысле. Он&nbsp;является элементом экосреды, за&nbsp;счет которого будут
                функционировать многие процессы. За&nbsp;токены нельзя приобрести решения <span style="white-space: nowrap">Mining Solutions</span>,
                но&nbsp;можно&nbsp;стать активным участником сообщества и&nbsp;получить решения Бесплатно!
                Также&nbsp;участники сообщества имеют возможность активно участвовать в&nbsp;решении актуальных задач.</p>
        </div>
    </div>
    <a href="../files/Mining-Solution.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>

<div id="sponsor11" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">Snovio</div>
            <a href="https://tokensale.snov.io/ru/" target="_blank" class="b-sponsor__img snovio_white"></a>
        </div>
        <div class="b-video__wrapper">
            <div class="b-video b-video-sp-4">
                <img src="../img/snovio_preview.png" alt="">
                <div id="youtube-sponsor-video-snovio-click"></div>
            </div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Snovio, платформа для&nbsp;генерации и&nbsp;поиска лидов, объявила о&nbsp;запуске токенсейла, который начнется
                31&nbsp;октября&nbsp;2017. Команда готовит полную трансформацию подходов к&nbsp;поиску контактов
                и&nbsp;потенциальных клиентов, устоявшихся на&nbsp;рынке лидогенерации.</p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Минимальный работающий продукт Snovio</b></p>
            <p>Snovio запустил бета-версию платформы в&nbsp;апреле&nbsp;2017&nbsp;года. За&nbsp;это&nbsp;время Snovio
                удалось наработать базу данных, которая&nbsp;состоит из&nbsp;800&nbsp;000 уникальных контактов для&nbsp;бизнес
                сегмента, а&nbsp;также&nbsp;расширить функционал сервиса, разработав и&nbsp;внедрив следующий набор
                функций:</p>
            <p>
            <ul>
                <li>
                    <br>
                    Проверка email адресов
                    <br>
                    <br>
                    <span>Функция используется для&nbsp;того, чтобы&nbsp;минимизировать показатель возвратов при&nbsp;отправке
                        email&nbsp;рассылок по&nbsp;спискам получателей. Валидация email&nbsp;адресов происходит в&nbsp;несколько
                        этапов: проверка на&nbsp;наличие синтаксических ошибок в&nbsp;электронном адресе, проверка существования
                        домена, проверка через SMTP&nbsp;протокол, а&nbsp;также&nbsp;прогонка адресов через&nbsp;базу недоставленных писем.</span>
                </li>
                <li>
                    <br>
                    Поиск email адресов в LinkedIn
                    <br>
                    <br>
                    <span>Используется для&nbsp;поиска и&nbsp;сохранения электронных адресов и&nbsp;более ценных данных пользователей LinkedIn.
                            Клиент может выполнить простой поиск или&nbsp;использовать фильтры, чтобы&nbsp;найти только&nbsp;интересующие
                            профили.</span>
                </li>
                <li>
                    <br>
                    Поиск по домену
                    <br><br>
                    <span>Благодаря этой&nbsp;функции пользователи получают доступ к&nbsp;электронным адресам, именам и&nbsp;должностям по&nbsp;домену.
                            Возможен поиск по&nbsp;домену любой компании. Функция будет полезна для&nbsp;тех, кому&nbsp;нужно наладить партнерские
                            отношения и&nbsp;найти потенциальных клиентов.</span>
                </li>

                <li>
                    <br>
                    Поиск компаний
                    <br>
                    <br>
                    <span>С&nbsp;помощью этой&nbsp;функции можно найти контактное лицо интересующей компании, доступен фильтр по&nbsp;стране,
                            городу, индустрии и&nbsp;размеру. Пользователь может создать список компаний, которые соответствуют
                            его&nbsp;требованиям, и&nbsp;просмотреть детальные профили выбранных компаний, предоставленные сервисом.</span>
                </li>
            </ul>
            </p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Предстоящие улучшения и инновационные разработки</b></p>
            <p>Алексей Кратко, генеральный директор и&nbsp;создатель Snovio, объясняет, что&nbsp;платформа создана для&nbsp;того,
                чтобы&nbsp;упростить процесс поиска и&nbsp;генерации лидов, то&nbsp;есть потенциальных клиентов и&nbsp;контактных
                данных, для&nbsp;всех&nbsp;без&nbsp;исключения охотников за&nbsp;информацией. Snovio трансформирует
                устоявшиеся методы лидогенерации и&nbsp;сорсинга посредством децентрализации, внедрения технологии
                блокчейна в&nbsp;свою деятельность и&nbsp;использования смарт-контракта.</p>
            <p>
            <ul>
                <li><br>
                    Децентрализованный поиск
                    <br>
                    <br>
                    <span>Метод крауд-коллектинга данных Snovio будет реализован с&nbsp;помощью децентрализованной сети, состоящей
                        из&nbsp;неограниченного числа контрибьюторов (поставщиков данных), которые&nbsp;будут автоматически добавлять новые,
                        публично-доступные данные в&nbsp;систему и&nbsp;актуализировать уже&nbsp;существующие контакты с&nbsp;помощью
                        Snovio&nbsp;Chrome&nbsp;Extension. Платформа будет вознаграждать поставщиков данных токенами SNOV в&nbsp;размере&nbsp;70%
                        от&nbsp;стоимости проданного лида. Благодаря технологии блокчейна и&nbsp;смарт-контракту все&nbsp;транзакции
                        между покупателем и&nbsp;контрибьюторами сохраняются, что&nbsp;обеспечивает прозрачность взаиморасчетов.</span>
                </li>


                <li><br>
                    Маркетплейс
                    <br>
                    <br>
                    <span>После завершения токенсейла платформа эволюционирует в&nbsp;маркетплейс. Заказчик сможет разместить заказ
                            на&nbsp;поставку данных и&nbsp;установить вознаграждение в&nbsp;токенах&nbsp;SNOV за&nbsp;выполнение
                            этого заказа. Контрибьютор или&nbsp;несколько контрибьюторов, заинтересованных в&nbsp;получении
                            вознаграждения, выполнят поиск и&nbsp;предоставят собранную информацию заказчику, который, в&nbsp;свою
                            очередь, сможет проверить, а&nbsp;затем принять заказ. После&nbsp;этого контрибьютор получит
                            вознаграждение, а&nbsp;если заказ был&nbsp;выполнен несколькими контрибьюторами,
                            вознаграждение будет пропорционально распределено между ними.</span>
                </li>

                <li><br>Сервис email рассылки
                    <br>
                    <br>
                    <span>Кроме работы над&nbsp;техниками обогащения данных, команда разрабатывает сервис
                            email&nbsp;рассылки, благодаря&nbsp;которому&nbsp;клиенты смогут создавать и&nbsp;запускать
                            email&nbsp;кампании, а&nbsp;также рассылать автоматизированные, триггерные цепочки писем.</span>
                </li>
            </ul>
            </p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Детали токенсейла</b></p>

            <p>Платформа выпустит 2,5 миллиарда токенов&nbsp;SNOV. Токены будут созданы на&nbsp;блокчейне Ethereum,
                и&nbsp;иметь стандарт ERC-20. Для&nbsp;покупки будет доступно 1,5&nbsp;миллиарда токенов,
                то&nbsp;есть 60%&nbsp;от&nbsp;общего количества. Предпродажа через White&nbsp;List началась
                4&nbsp;сентября и&nbsp;продлится до&nbsp;30&nbsp;октября, а&nbsp;сам токенсейл начнется 31&nbsp;октября
                и&nbsp;будет продолжаться 30&nbsp;дней или&nbsp;пока все&nbsp;токены не&nbsp;будут распроданы.</p>

            <p>Ознакомиться с проектом Snovio и условиями предстоящего токенсейла можно по следующим ссылкам:</p>
            <p>
                <a href="https://tokensale.snov.io/" target="_blank">Официальный сайт</a>
                <br>
                <a href="https://tokensale.snov.io/docs/WhitePaperRu.pdf" target="_blank">White Paper</a>
                <br>
                <a href="https://twitter.com/snovio_ico" target="_blank">Twitter</a>
                <br>
                <a href="https://t.me/snovio_ico" target="_blank">Телеграм</a>
                <br>
                <a href="https://bitcointalk.org/index.php?topic=2111272.0" target="_blank">Bitcointalk</a>
                <br>
                <a href="https://www.facebook.com/ICOsnovio/" target="_blank">Facebook</a>
                <br>
                <a href="https://medium.com/@ico_snovio" target="_blank">Medium</a>
            </p>
        </div>
    </div>
</div>

<div id="sponsor-video4" class="sponsor video-sp-4">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">Snovio</div>
            <a href="https://tokensale.snov.io/ru/" target="_blank" class="b-sponsor__img snovio_white"></a>
        </div>
        <div class="b-video__wrapper">
            <div id="youtube-sponsor-video-snovio"></div>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Snovio, платформа для&nbsp;генерации и&nbsp;поиска лидов, объявила о&nbsp;запуске токенсейла, который начнется
                31&nbsp;октября&nbsp;2017. Команда готовит полную трансформацию подходов к&nbsp;поиску контактов
                и&nbsp;потенциальных клиентов, устоявшихся на&nbsp;рынке лидогенерации.</p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Минимальный работающий продукт Snovio</b></p>
            <p>Snovio запустил бета-версию платформы в&nbsp;апреле&nbsp;2017&nbsp;года. За&nbsp;это&nbsp;время Snovio
                удалось наработать базу данных, которая&nbsp;состоит из&nbsp;800&nbsp;000 уникальных контактов для&nbsp;бизнес
                сегмента, а&nbsp;также&nbsp;расширить функционал сервиса, разработав и&nbsp;внедрив следующий набор
                функций:</p>
            <p>
            <ul>
                <li>
                    <br>
                    Проверка email адресов
                    <br>
                    <br>
                    <span>Функция используется для&nbsp;того, чтобы&nbsp;минимизировать показатель возвратов при&nbsp;отправке
                        email&nbsp;рассылок по&nbsp;спискам получателей. Валидация email&nbsp;адресов происходит в&nbsp;несколько
                        этапов: проверка на&nbsp;наличие синтаксических ошибок в&nbsp;электронном адресе, проверка существования
                        домена, проверка через SMTP&nbsp;протокол, а&nbsp;также&nbsp;прогонка адресов через&nbsp;базу недоставленных писем.</span>
                </li>
                <li>
                    <br>
                    Поиск email адресов в LinkedIn
                    <br>
                    <br>
                    <span>Используется для&nbsp;поиска и&nbsp;сохранения электронных адресов и&nbsp;более ценных данных пользователей LinkedIn.
                            Клиент может выполнить простой поиск или&nbsp;использовать фильтры, чтобы&nbsp;найти только&nbsp;интересующие
                            профили.</span>
                </li>
                <li>
                    <br>
                    Поиск по домену
                    <br><br>
                    <span>Благодаря этой&nbsp;функции пользователи получают доступ к&nbsp;электронным адресам, именам и&nbsp;должностям по&nbsp;домену.
                            Возможен поиск по&nbsp;домену любой компании. Функция будет полезна для&nbsp;тех, кому&nbsp;нужно наладить партнерские
                            отношения и&nbsp;найти потенциальных клиентов.</span>
                </li>

                <li>
                    <br>
                    Поиск компаний
                    <br>
                    <br>
                    <span>С&nbsp;помощью этой&nbsp;функции можно найти контактное лицо интересующей компании, доступен фильтр по&nbsp;стране,
                            городу, индустрии и&nbsp;размеру. Пользователь может создать список компаний, которые соответствуют
                            его&nbsp;требованиям, и&nbsp;просмотреть детальные профили выбранных компаний, предоставленные сервисом.</span>
                </li>
            </ul>
            </p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Предстоящие улучшения и инновационные разработки</b></p>
            <p>Алексей Кратко, генеральный директор и&nbsp;создатель Snovio, объясняет, что&nbsp;платформа создана для&nbsp;того,
                чтобы&nbsp;упростить процесс поиска и&nbsp;генерации лидов, то&nbsp;есть потенциальных клиентов и&nbsp;контактных
                данных, для&nbsp;всех&nbsp;без&nbsp;исключения охотников за&nbsp;информацией. Snovio трансформирует
                устоявшиеся методы лидогенерации и&nbsp;сорсинга посредством децентрализации, внедрения технологии
                блокчейна в&nbsp;свою деятельность и&nbsp;использования смарт-контракта.</p>
            <p>
            <ul>
                <li><br>
                    Децентрализованный поиск
                    <br>
                    <br>
                    <span>Метод крауд-коллектинга данных Snovio будет реализован с&nbsp;помощью децентрализованной сети, состоящей
                        из&nbsp;неограниченного числа контрибьюторов (поставщиков данных), которые&nbsp;будут автоматически добавлять новые,
                        публично-доступные данные в&nbsp;систему и&nbsp;актуализировать уже&nbsp;существующие контакты с&nbsp;помощью
                        Snovio&nbsp;Chrome&nbsp;Extension. Платформа будет вознаграждать поставщиков данных токенами SNOV в&nbsp;размере&nbsp;70%
                        от&nbsp;стоимости проданного лида. Благодаря технологии блокчейна и&nbsp;смарт-контракту все&nbsp;транзакции
                        между покупателем и&nbsp;контрибьюторами сохраняются, что&nbsp;обеспечивает прозрачность взаиморасчетов.</span>
                </li>


                <li><br>
                    Маркетплейс
                    <br>
                    <br>
                    <span>После завершения токенсейла платформа эволюционирует в&nbsp;маркетплейс. Заказчик сможет разместить заказ
                            на&nbsp;поставку данных и&nbsp;установить вознаграждение в&nbsp;токенах&nbsp;SNOV за&nbsp;выполнение
                            этого заказа. Контрибьютор или&nbsp;несколько контрибьюторов, заинтересованных в&nbsp;получении
                            вознаграждения, выполнят поиск и&nbsp;предоставят собранную информацию заказчику, который, в&nbsp;свою
                            очередь, сможет проверить, а&nbsp;затем принять заказ. После&nbsp;этого контрибьютор получит
                            вознаграждение, а&nbsp;если заказ был&nbsp;выполнен несколькими контрибьюторами,
                            вознаграждение будет пропорционально распределено между ними.</span>
                </li>

                <li><br>Сервис email рассылки
                    <br>
                    <br>
                    <span>Кроме работы над&nbsp;техниками обогащения данных, команда разрабатывает сервис
                            email&nbsp;рассылки, благодаря&nbsp;которому&nbsp;клиенты смогут создавать и&nbsp;запускать
                            email&nbsp;кампании, а&nbsp;также рассылать автоматизированные, триггерные цепочки писем.</span>
                </li>
            </ul>
            </p>
            <br>
            <br>
            <p><b style="font-size: 20px;">Детали токенсейла</b></p>

            <p>Платформа выпустит 2,5 миллиарда токенов&nbsp;SNOV. Токены будут созданы на&nbsp;блокчейне Ethereum,
                и&nbsp;иметь стандарт ERC-20. Для&nbsp;покупки будет доступно 1,5&nbsp;миллиарда токенов,
                то&nbsp;есть 60%&nbsp;от&nbsp;общего количества. Предпродажа через White&nbsp;List началась
                4&nbsp;сентября и&nbsp;продлится до&nbsp;30&nbsp;октября, а&nbsp;сам токенсейл начнется 31&nbsp;октября
                и&nbsp;будет продолжаться 30&nbsp;дней или&nbsp;пока все&nbsp;токены не&nbsp;будут распроданы.</p>

            <p>Ознакомиться с проектом Snovio и условиями предстоящего токенсейла можно по следующим ссылкам:</p>
            <p>
                <a href="https://tokensale.snov.io/" target="_blank">Официальный сайт</a>
                <br>
                <a href="https://tokensale.snov.io/docs/WhitePaperRu.pdf" target="_blank">White Paper</a>
                <br>
                <a href="https://twitter.com/snovio_ico" target="_blank">Twitter</a>
                <br>
                <a href="https://t.me/snovio_ico" target="_blank">Телеграм</a>
                <br>
                <a href="https://bitcointalk.org/index.php?topic=2111272.0" target="_blank">Bitcointalk</a>
                <br>
                <a href="https://www.facebook.com/ICOsnovio/" target="_blank">Facebook</a>
                <br>
                <a href="https://medium.com/@ico_snovio" target="_blank">Medium</a>
            </p>
        </div>
    </div>
</div>

<div id="sponsor12" class="sponsor">
    <span class="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">REGA Risk Sharing</div>
            <a href="https://rega.life/" target="_blank" class="b-sponsor__img rega-risk_white"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Разработчик децентрализованной crowdsurance платформы на&nbsp;технологии умных контрактов, скоринга
                и&nbsp;искусственного интеллекта. <b>Краудшуранс&nbsp;(сrowdsurance)</b>&nbsp;-&nbsp;это&nbsp;объединение
                физических&nbsp;лиц в&nbsp;группы с&nbsp;целью минимизации собственных рисков. Такое&nbsp;коллективное
                объединение строится на&nbsp;принципах автономных децентрализованных организаций с&nbsp;применением
                технологии блокчейн и&nbsp;регулируется смарт-контрактами.</p>
            <p>Проект REGARiskSharing развивает собственную платформу на&nbsp;технологии блокчейн для&nbsp;развёртывания
                на&nbsp;ее&nbsp;основе краудшуранс продуктов для&nbsp;конечных пользователей по&nbsp;взаимному
                управлению рисками и&nbsp;минимизации их&nbsp;финансовых последствий.</p>
            <p>REGARiskSharing&nbsp;-&nbsp;единственный проект в&nbsp;своем сегменте, выходящий на&nbsp;ICO
                с&nbsp;уже&nbsp;имеющимся и&nbsp;работающим&nbsp;MVP. В&nbsp;марте&nbsp;2017&nbsp;года
                <span style="white-space: nowrap">REGA RISK Sharing</span> запустила пилотный продукт
                <span style="white-space: nowrap">Lexi Club</span>&nbsp;-&nbsp;социальный краудшуранс
                сервис для&nbsp;владельцев домашних животных. Для защиты животного не&nbsp;требуется предварительное чипирование,
                предъявление паспорта животного и&nbsp;встреча со&nbsp;страховым агентом.</p>
            <p>Больше информации на&nbsp;<a href="https://rega.life/" target="_blank">сайте</a> проекта.</p>
            <a href="../files/REGA-brief-last.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
        </div>
    </div>
</div>

<div id="sponsor13" class="sponsor">
    <span id="modal_close">X</span>
    <div class="b-sponsor__popup">
        <div class="b-sponsor__item-top">
            <div class="b-sponsor__title">BONUM</div>
            <a href="http://bonumchain.com/" target="_blank" class="b-sponsor__img bonum"></a>
        </div>
        <div class="b-sponsor__popup-text">
            <p>Bonum предлагает своим клиентам следующие продукты:</p>
            <p>Нецелевой займ в&nbsp;криптовалюте, токенах или&nbsp;фиатной валюте под&nbsp;залог криптоактивов
                (криптовалют и&nbsp;токенов).</p>
            <p>Благодаря платформе вы&nbsp;получаете возможность получить необходимые средства «здесь и&nbsp;сейчас»
                и&nbsp;тратить&nbsp;их по&nbsp;своему усмотрению. Залог&nbsp;–&nbsp;единственное обеспечение займа.</p>
            <p>Вклад в&nbsp;криптовалюте или токенах.</p>
            <p>Bonum дает вам&nbsp;возможность преумножить свой капитал по&nbsp;принципу «вложил-забыл». Вклады будут обеспечены
                залогами, а&nbsp;также резервным фондом, который будет формироваться в&nbsp;ходе&nbsp;ICO. Т.о.&nbsp;вклады
                клиентов будут защищены.</p>
            <p>Мультивалютная опция.</p>
            <p>Мы реализуем опции мультивалютного залога и&nbsp;мультивалютного вклада. Иными словами, клиент может
                сформировать залог и&nbsp;вклад в&nbsp;виде портфеля криптоактивов.</p>
            <p>В&nbsp;нашей системе, клиенты могут играть роль, как&nbsp;вкладчика, так&nbsp;и&nbsp;заемщика. Заемщик
                получает в&nbsp;свое распоряжение средства, которые может использовать по&nbsp;своему усмотрению. Вкладчик
                получает возможность выгодного вложения.</p>
            <p>Все существенные условия займа и&nbsp;вклада: ставка, срок, сумма, дата платежа и&nbsp;погашения известны клиенту
                заранее и&nbsp;понятны: переменные процентные ставки, плавающие сроки платежа и&nbsp;погашения не&nbsp;используются,
                скрытые комиссии отсутствуют.</p>
            <p>Проект Bonum опирается на&nbsp;рост капитализации рынка блокчейн активов (не&nbsp;только криптовалют), вначале
                которого мы&nbsp;сейчас находимся. Рост капитализации этого рынка будет привлекать все&nbsp;больше игроков и&nbsp;все
                больше моделей экономического поведения из&nbsp;обычной, привычной нам&nbsp;экономики. Учитывая текущие размеры
                указанного рынка можно прогнозировать, что он&nbsp;может вырасти даже не&nbsp;в&nbsp;десятки, а&nbsp;в&nbsp;сотни раз.
                Соответственно, будут расти и&nbsp;объемы финансовых операций, связанных с&nbsp;пассивным извлечением доходов
                (вкладами) и&nbsp;займами, основанными на&nbsp;блокчейн активах.</p>
            <p>Наша цель&nbsp;–&nbsp;создать стандарт в&nbsp;отрасли и&nbsp;универсальное решение, позволяющее достигнуть эффективного
                распределения криптовалют, исходя из&nbsp;нужд клиентов, и&nbsp;тем самым увеличить благосостояние вкладчиков
                и&nbsp;удовлетворить потребности заемщиков.</p>
            <p>Фаундеры проекта уже&nbsp;имеют опыт создания, управления и&nbsp;эффективного развития крупной федеральной
                финансовой корпорации&nbsp;–&nbsp;одного из&nbsp;лидеров микрофинансового рынка&nbsp;РФ. Компания прошла комплексную
                проверку Центрального Банка&nbsp;РФ, работает в&nbsp;правовом поле&nbsp;РФ и&nbsp;в&nbsp;восьми часовых поясах
                по&nbsp;всей стране.</p>
        </div>
    </div>
    <a href="../files/Bonum.pdf" target="_blank" class="b-sponsor__presentation">Смотреть презентацию</a>
</div>


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

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>

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

    youtubeVideoPlayer5 = new YT.Player('youtube-video-5', {
      height: '196',
      width: '350',
      videoId: 'tI5qy4ftZKc'
    });

    youtubeVideoPlayer6 = new YT.Player('youtube-video-6', {
      height: '196',
      width: '350',
      videoId: '9v5iBKUK7_4'
    });

    youtubeVideoPlayer7 = new YT.Player('youtube-video-7', {
      height: '196',
      width: '350',
      videoId: 'pYyEVv1n800'
    });

     youtubeVideoPlayer8 = new YT.Player('youtube-video-8', {
      height: '196',
      width: '350',
      videoId: 'RfXBvVZwxWY'
    });

      youtubeVideoPlayer9 = new YT.Player('youtube-video-9', {
      height: '196',
      width: '350',
      videoId: '8CVpHBFT_L8'
    });

    // for mobile version video
    ///////////////////////////////////////////////////////////////
    youtubeVideoPlayer11 = new YT.Player('youtube-video-11', {
      height: '196',
      width: '350',
      videoId: '7xF6JHkuDOw'
    });

    youtubeVideoPlayer22 = new YT.Player('youtube-video-22', {
      height: '196',
      width: '350',
      videoId: 'SqPRWf7UqDA'
    });

    youtubeVideoPlayer33 = new YT.Player('youtube-video-33', {
      height: '196',
      width: '350',
      videoId: 'GnYXuQjPSbQ'
    });

    youtubeVideoPlayer55 = new YT.Player('youtube-video-55', {
      height: '196',
      width: '350',
      videoId: 'tI5qy4ftZKc'
    });

    youtubeVideoPlayer66 = new YT.Player('youtube-video-66', {
      height: '196',
      width: '350',
      videoId: '9v5iBKUK7_4'
    });

    youtubeVideoPlayer77 = new YT.Player('youtube-video-77', {
      height: '196',
      width: '350',
      videoId: 'pYyEVv1n800'
    });

     youtubeVideoPlayer88 = new YT.Player('youtube-video-88', {
      height: '196',
      width: '350',
      videoId: 'RfXBvVZwxWY'
    });

     youtubeVideoPlayer99 = new YT.Player('youtube-video-99', {
      height: '196',
      width: '350',
      videoId: '8CVpHBFT_L8'
    });

    youtubeVideoPlayerSp1 = new YT.Player('youtube-sponsor-video-4', {
        videoId: 'qN6Z5tvlg7g'
    });

    youtubeVideoPlayerSp1Click = new YT.Player('youtube-sponsor-video-4-click', {
        videoId: 'qN6Z5tvlg7g'
    });

    youtubeVideoPlayerSp3 = new YT.Player('youtube-sponsor-video-se', {
        videoId: 'CuXmbGVme1w'
    });

    youtubeVideoPlayerSp3Click = new YT.Player('youtube-sponsor-video-se-click', {
        videoId: 'CuXmbGVme1w'
    });

    youtubeVideoPlayerSp4 = new YT.Player('youtube-sponsor-video-snovio', {
        videoId: 'BYIpuxVB5x8'
    });

    youtubeVideoPlayerSp4Click = new YT.Player('youtube-sponsor-video-snovio-click', {
        videoId: 'BYIpuxVB5x8'
    });

    youtubeVideoPlayerSp5 = new YT.Player('youtube-sponsor-video-smartvalley', {
        videoId: 'j3iNkGWXpOY'
    });

    youtubeVideoPlayerSp5Click = new YT.Player('youtube-sponsor-video-smartvalley-click', {
        videoId: 'j3iNkGWXpOY'
    });
  }
</script>

<!-- Scripts -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="js/jquery.scrolldepth.min.js" type="text/javascript"></script>
<script src="js/script.js?v=7"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script>
<script src="js/jquery.cycle2.carousel.min.js"></script>
<script src="https://api.ticketscloud.org/static/scripts/widget/tcwidget.js"></script>
</body>
</html>
