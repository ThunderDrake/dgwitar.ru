<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dental Group Witar</title>
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.css" integrity="sha512-XHhuZDcgyu28Fsd75blrhZKbqqWCXaUCOuy2McB4doeSDu34BgydakOK71TH/QEhr0nhiieBNhF8yWS8thOGUg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@400;600;700&family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<div id="page">
		<header class="header">
			<div class="wrap header__wrap">
				<div class="logo header__logo">
					<svg class="logo__icon"><use href="img/sprite.svg#logo"></use></svg>
					<div class="logo__main">
						<div class="logo__name">DENTAL GROUP WITAR</div>
						<div class="logo__slogan">стоматологические импланты</div>
					</div>
					<div class="logo__description">Представительство системы немецких имплантов WITAR в России</div>
				</div>
				<div class="header__open">
					Пн-Пт: с 10:00 до 18:00 <span class="online header__online"></span>
					<br>
				</div>
				<div class="header__address">г.Москва, <br>ул. Нижегородская, дом 7</div>
				<div class="header__contact">
					<a href="tel:+79859219577" class="header__contact-link">+7(985) 921-95-77</a>
					<a href="tel:+74952601967" class="header__contact-link">+7(495) 260-19-67</a>
				</div>
				<button class="header__menu">
					Меню
					<svg class="header__menu-icon"><use href="img/sprite.svg#burger"></use></svg>
				</button>
			</div>
		</header>
		<main class="content">
			<?php if (!empty($_GET) && $_GET['utm_content'] == 'course') { ?>
			<section class="main main--v2">
				<div class="wrap">
					<button class="btn btn--str btn--relative main__call" data-modal="modalCallback">
						<svg class="btn__icon"><use href="img/sprite.svg#call"></use></svg>
						Перезвоните мне
					</button>
					<div class="main__inner">
						<div class="main__info">
							<h1 class="main__title">
								<span class="color-main">Получите сертификат специалиста</span>
								<span class="h2">инновационной системы имплантологии</span>
								<span class="h3 color-second">всего за 2 дня</span>
							</h1>
							<p class="main__description">повысьте свою квалификацию и увеличьте прибыль клиники в 2,5 раза</p>
							<div class="main__edges">
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/best.png" alt="Профессорский состав">
									</div>
									<p class="main__edge-text">Профессорский состав</p>
								</div>
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/implant-2.png" alt="Импланты" style="max-width: none">
										<div class="main__edge-count">25+</div>
									</div>
									<p class="main__edge-text">Более 25 лет опыт специалистов в имплантации </p>
								</div>
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/implant.png" alt="Имплант">
										<div class="main__edge-count">5000+</div>
									</div>
									<p class="main__edge-text">Более 5000 операций в России и за рубежом</p>
								</div>
							</div>
							<div class="main__offer">
								<button class="btn main__offer-btn" data-modal="modalCourse">Записаться</button>
							</div>
						</div>
						<form class="main__form js-form">
							<div class="main__form-inner">
								<div class="main__form-edge"><b>Как стать</b> специалистом?</div>
								<div class="main__form-title">Курсы WITAR</div>
								<p class="main__form-text">Узнайте, что Вас ждёт на курсах и запишитесь онлайн</p>
								<div class="field main__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваше имя</span>
											<input type="text" name="name" class="field__input" placeholder="Введите имя">
										</label>
									</div>
								</div>
								<div class="field main__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваш номер телефона</span>
											<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
										</label>
									</div>
								</div>
								<button class="btn main__form-btn">Записаться</button>
								<input type="hidden" name="type" value="Запись на курсы">
								<label class="checkbox main__form-checkbox">
									<span class="checkbox__pointer">
										<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
										<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
									</span>
									<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
								</label>
							</div>
						</form>
					</div>
				</div>
			</section>
			<?php } else { ?>
			<section class="main">
				<div class="wrap">
					<button class="btn btn--str btn--relative main__call" data-modal="modalCallback">
						<svg class="btn__icon"><use href="img/sprite.svg#call"></use></svg>
						Перезвоните мне
					</button>
					<div class="main__inner">
						<div class="main__info">
							<h1 class="main__title">
								<span class="color-main">Циркониевые импланты</span>
								<span>с гарантией 25 лет</span>
								<span class="h3 color-second">по европейским стандартам ISO</span>
							</h1>
							<p class="main__description">Импланты из диоксида циркония надёжнее и безопаснее титановых в 4 раза</p>
							<div class="main__edges">
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/best.png" alt="Естественная белизна">
									</div>
									<p class="main__edge-text">Естественная белизна</p>
								</div>
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/implant-2.png" alt="Импланты" style="max-width: none">
										<div class="main__edge-count">15+</div>
									</div>
									<p class="main__edge-text">Более 15 лет успешного опыта работ</p>
								</div>
								<div class="main__edge">
									<div class="main__edge-img">
										<img src="img/implant.png" alt="Имплант">
									</div>
									<p class="main__edge-text">Полностью биосовместимы</p>
								</div>
							</div>
							<div class="main__offer">
								<button class="btn main__offer-btn" data-modal="modalCatalog">Получить каталог</button>
							</div>
						</div>
						<form class="main__form js-form">
							<div class="main__form-inner">
								<div class="main__form-edge"><b>В 2 раза</b> прочнее титана</div>
								<div class="main__form-title">Каталог WITAR</div>
								<p class="main__form-text">заполните форму и получите каталог продукции</p>
								<div class="field main__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваше имя</span>
											<input type="text" name="name" class="field__input" placeholder="Введите свое имя">
										</label>
									</div>
								</div>
								<div class="field main__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваш номер телефона</span>
											<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
										</label>
									</div>
								</div>
								<button class="btn main__form-btn">Получить каталог</button>
								<input type="hidden" name="type" value="Получение каталога">
								<label class="checkbox main__form-checkbox">
									<span class="checkbox__pointer">
										<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
										<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
									</span>
									<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
								</label>
							</div>
						</form>
					</div>
				</div>
			</section>
			<?php } ?>
			<section class="about" id="about">
				<div class="wrap">
					<div class="section-header about__section-header">
						<div class="sub-title wow">WITAR это…</div>
						<h2 class="title wow">Новшество дентальной имплантологии</h2>
					</div>
					<div class="about__inner">
						<div class="about__img">
							<img src="img/loudspeaker.png" alt="Имплант">
							<div class="circle-animation wow about__circle">
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
								<div class="circle-animation__item"></div>
							</div>
							<div class="about__img-description">Инновационное и выгодное решение <b>для Вашей клиники</b></div>
						</div>
						<div class="about__info">
							<div class="about__title"><b><span class="color-main">Система WITAR</span> –</b> единственная система циркониевых имплантов в России.</div>
							<p class="about__text">импланты AWI изготовляются из диоксида циркония, что на сегодняшний день является керамикой самого высокого уровня!</p>
							<p class="about__text">импланты AWI обеспечивают оптимальную, биосовместимую и надежную стоматологическую помощь. С нашими имплантами исключаются все отрицательные явления, возникающие при использовании имплантов из титанового сплава. </p>
							<p class="about__text">Единственная система имеющая реальные клинические отдаленные результаты более 15 лет</p>
							<button class="btn" data-modal="modalCatalog">Скачать каталог</button>
						</div>
					</div>
				</div>
			</section>
			<section class="edge" id="edge">
				<div class="wrap">
					<div class="edge__inner">
					    <div class="edge__img-container">
						    <img src="img/edge.png" alt="Имплант" class="edge__img">
						    <img src="img/edge-mobile.png" alt="Имплант" class="edge__img-mobile">
						</div>
						<ul class="edge__list">
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Натуральный цвет</div>
										<p class="edge__text">Позволяет ещё больше оптимизировать эстетические требования клиента!</p>
									</div>
								</div>
							</li>
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Биосовместимость</div>
										<p class="edge__text">Эстетический результат, усовершенствованный метод установки , абсолютно биологически совместимые</p>
									</div>
								</div>
							</li>
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Керамический абатмент</div>
										<p class="edge__text">Абатменты, изготовленные из диоксида циркония дают безупречную эстетику реставраций, не имеют аналогов по показателям прочности и долговечности</p>
									</div>
								</div>
							</li>
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Без применения металлов</div>
										<p class="edge__text">Не вызывают аллергических реакций, у пациентов не наблюдаются реакции отторжения или непереносимости материала</p>
									</div>
								</div>
							</li>
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Простота решений</div>
										<p class="edge__text">Этот материал может применяться при различных видах непереносимости металлов, нарушении обмена веществ и аутоиммунных заболеваниях</p>
									</div>
								</div>
							</li>
							<li class="edge__item">
								<button class="edge__btn">
									<svg class="edge__btn-icon"><use href="img/sprite.svg#add"></use></svg>
								</button>
								<div class="edge__info">
									<div class="edge__info-inner">
										<div class="edge__title">Нанопокрытие BIOVERT I</div>
										<p class="edge__text">Дает возможность использовать наш имплант для интеграции в любой тип кости</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="technology">
				<div class="wrap">
					<div class="technology__header">
						<div class="technology__info">
							<h2 class="color-main technology__title">Инновационная система керамических имплантов WITAR</h2>
							<p class="technology__text">позволит Вам быть на несколько шагов <b>впереди своих конкурентов,</b> а Вашим клиентам даст <b>безопасное и комфортное</b> лечение</p>
						</div>
						<div class="technology__lead">
							<ul class="technology__lead-list">
								<li class="technology__lead-list-item">- Оперативная обратная связь</li>
								<li class="technology__lead-list-item">- Постоянные консультации <b>Наших специалистов</b></li>
							</ul>
							<button class="btn btn--second" data-modal="modalCallback">связаться с нами</button>
						</div>
					</div>
					<ul class="technology__list">
						<li class="technology__list-item">
							<span class="technology__list-item-text"><b>Расширяем возможности</b> стоматологических центров, увеличение прибыли</span>
						</li>
						<li class="technology__list-item technology__list-item--big">
							<span class="technology__list-item-text">Исключаются все <b>отрицательные явления</b>, возникающие при использовании имплантов из титанового сплава</span>
						</li>
						<li class="technology__list-item technology__list-item--big">
							<img src="img/bill.png" alt="Счет" class="technology__list-item-img">
							<span class="technology__list-item-text">Безопасная и соответствует <b>реальной стоимости</b> система имплантов</span>
						</li>
						<li class="technology__list-item">
							<img src="img/time.png" alt="Время" class="technology__list-item-img">
							<span class="technology__list-item-text">Требуется <b>меньше времени</b> и материалов</span>
						</li>
						<li class="technology__list-item technology__list-item--big">
							<span class="technology__list-item-text">Простой и удобный способ проведения операции с <b>фиксированными ценами</b> и коротким периодом лечения</span>
						</li>
						<li class="technology__list-item">
							<span class="technology__list-item-text"><b>Гипоалергенны</b>, электрически нейтральны и не нагреваются</span>
						</li>
					</ul>
					<div class="technology__employee">
						<img src="img/ceo.png" alt="Генеральный директор">
						<div class="technology__employee-info">
							<div class="technology__employee-name">Виталий Кольбе</div>
							<p class="technology__employee-prof">Генеральный директор компании WITAR</p>
						</div>
					</div>
				</div>
			</section>
			<section class="compare">
				<div class="wrap">
					<div class="section-header compare__section-header">
						<div class="sub-title wow">Что лучше выбрать?</div>
						<h2 class="title wow">Преимущество керамических имплантов <span class="h4 color-main">перед металлическими</span></h2>
					</div>
					<div class="compare__inner">
						<div class="compare__employee">
							<img src="img/director.png" alt="Исполнительный директор" class="compare__employee-img">
							<div class="compare__employee-info">
								<div class="compare__employee-name">Артур Вольф</div>
								<p class="compare__employee-prof">исполнительный директор WITAR </p>
							</div>
							<div class="compare__video">
								<p class="compare__video-title">Преимущества</p>
								<p class="compare__video-text">керамических имплантов</p>
								<p class="compare__video-cta">Узнайте за 2 минуты</p>
								<a href="video/preimushchestva.mp4" data-fancybox class="compare__video-btn">
									<svg class="compare__video-btn-icon"><use href="img/sprite.svg#youtube"></use></svg>
								</a>
							</div>
						</div>
						<div class="compare__tab">
							<ul class="tab-list">
								<li class="tab-list__item">
									<button class="tab-list__item-btn active" data-tab-id="ceramics">Керамические импланты</button>
								</li>
								<li class="tab-list__item">
									<button class="tab-list__item-btn tab-list__item-btn--red" data-tab-id="titanium">Титановые</button>
								</li>
							</ul>
							<div class="tab-content active" data-tab="ceramics">
								<div class="compare__product">
									<div class="compare__product-title">Имплантация с керамическими имплантами AWI</div>
									<div class="compare__product-text">
										<p>Решаясь на установку имплантов AWI Вы получите не только превосходный эстетический эффект и биосовместимый безметалловый имплант, но и простой и удобный способ проведения операции с фиксированными ценами и коротким периодом лечения.</p>
										<p>Керамический имплант не просвечивает сквозь десну, нет серых металлических кантов.</p>
										<p>Процесс заживления мягких тканей после установки керамических имплантов протекает значительно быстрее. При использовании диоксида циркония наблюдается низкая степень образования зубного налета, а впоследствии зубного камня.</p>
										<p>Практически полностью отсутствует риск возникновения переимплантита.</p>
									</div>
									<ul class="compare__product-list">
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Биосовместим
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Простота установки
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Белый цвет
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Керамика
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Нет корозии
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Электрически нейтральны
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Гипоалергенны
										</li>
										<li class="compare__product-list-item">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
											Высокая твердость
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-content" data-tab="titanium">
								<div class="compare__product">
									<div class="compare__product-title">Традиционный подход имплантации</div>
									<div class="compare__product-text">
										<p>На сегодняшний день большинство имплантатов изготавливаются из титанового сплава, что вызывает все больше случаев их не приживления. <b>(примерно 15% населения страдает именно непереносимостью металлов.)</b></p>
										<p>По результатам новых исследований достаточно одного лабораторного анализа (тест трансформации лимфоцитов на титан) для выяснения у пациента подобного вида непереносимости.</p>
										<p>Для пациентов с непереносимостью или излишней чувствительностью к металлам желание иметь безупречную улыбку и ухоженную ротовую полость было бы невозможно без существования альтернативных имплантатов из керамики.</p>
										<p>Очаги воспалений  и повреждения в ротовой полости, челюстных костях вызывают ослабление всей иммунной системы, острые и хронические заболевания.</p>
									</div>
									<ul class="compare__product-list">
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Не нейтральный
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Возможна аллергия
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Не биосовместим
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Электропроводность
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Черный/серый цвет
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Металл нагревается
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Коррозия
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Предрасположенность к радиации
										</li>
										<li class="compare__product-list-item compare__product-list-item--red">
											<svg class="compare__product-list-item-icon"><use href="img/sprite.svg#times-square"></use></svg>
											Деформируется
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="roadmap">
				<ul class="tab-list roadmap__tab-list">
					<li class="tab-list__item">
						<button class="tab-list__item-btn active" data-tab-id="ceramics-roadmap">Керамические импланты</button>
					</li>
					<li class="tab-list__item">
						<button class="tab-list__item-btn tab-list__item-btn--red" data-tab-id="titanium-roadmap">Титановые импланты</button>
					</li>
				</ul>
				<div class="tab-content active" data-tab="ceramics-roadmap">
					<div class="roadmap__bg">
						<div class="wrap roadmap__wrap">
							<div class="roadmap__title">Установка керамических имплантов:</div>
							<div class="roadmap__list">
								<div class="roadmap__column">
									<div class="roadmap__item">
										<div class="roadmap__item-number">1</div>
										<p class="roadmap__item-text"><b>Cразу после установки</b> керамические импланты AWI закрываются заглушкой-формирователем.</p>
									</div>
									<div class="roadmap__item">
										<div class="roadmap__item-number">2</div>
										<p class="roadmap__item-text"><b>После приживления</b> импланта устанавливается керамический абатмент. Прочно сидящий абатмент обтачивается как естественный зуб. Затем последовательно проводится формовка для завершения лечения.</p>
									</div>
								</div>
								<div class="roadmap__column">
									<div class="roadmap__item">
										<div class="roadmap__item-number">3</div>
										<p class="roadmap__item-text"><b>Протезирование</b> осуществляется совершенно обычным способом, так же, как и при обточенном зубе, без увеличения стоимости</p>
									</div>
									<div class="roadmap__item">
										<div class="roadmap__item-number">4</div>
										<p class="roadmap__item-text">При таком подходе Вам потребуется <b>меньше времени и материалов</b>, следовательно, Ваши пациенты имеют более полное представление о стоимости услуги </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" data-tab="titanium-roadmap">
					<div class="roadmap__bg roadmap__bg--red">
						<div class="wrap roadmap__wrap">
							<div class="roadmap__title">Установка металлических имплантов:</div>
							<div class="roadmap__list">
								<div class="roadmap__column">
									<div class="roadmap__item">
										<div class="roadmap__item-number">1</div>
										<p class="roadmap__item-text">
											<b>При установке стандартной системы</b> из титанового сплава традиционный подход предполагает следующий минимум инструментов и материалов:<br>
											имплант с заглушкой-формирователем, трансфер для импланта, формирователь десны, индивидуальная ложка, лабораторный аналог, лабораторный винт, гипсовая модель с десневой маской, абатмент и упорный винт.<br><br>
											<b>Сложите цены на все составляющие</b> и Вы удивитесь, как много в итоге должны заплатить пациенты!
										</p>
									</div>
								</div>
								<div class="roadmap__column">
									<div class="roadmap__item">
										<div class="roadmap__item-number">2</div>
										<p class="roadmap__item-text"><b>Важный фактор</b> - Ваше время и время пациента. При правильном проведении подобной операции врач и пациент должны встретиться как минимум 4 раза.</p>
									</div>
									<div class="roadmap__item">
										<div class="roadmap__item-number">3</div>
										<p class="roadmap__item-text"><b>Коронка</b> изготовленная для импланта из титана в дентальной лаборатории <b>в разы дороже</b>, чем коронка изготовленная классическим способом.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<form class="lead-form roadmap__lead-form js-form">
					<div class="lead-form__inner">
						<div class="lead-form__additional"><b>Процент приживляемости</b> AWI имплантов превышает 98%.</div>
						<div class="lead-form__present">
							<div class="lead-form__present-inner">
								хирургический протокол <b>В подарок</b>
							</div>
						</div>
						<div class="lead-form__title"><span class="h4 color-main">Импланты AWI</span> представляют собой лучшую альтернативу из биологически и эстетически совместимого материала.</div>
						<p class="lead-form__text">Чтобы получить каталог введите свое имя и номер телефона</p>
						<div class="lead-form__fields">
							<div class="field lead-form__field">
								<div class="field__inner">
									<label class="field__label">
										<span class="field__placeholder">Ваше имя</span>
										<input type="text" name="name" class="field__input" placeholder="Введите свое имя">
									</label>
								</div>
							</div>
							<div class="field lead-form__field">
								<div class="field__inner">
									<label class="field__label">
										<span class="field__placeholder">Ваш номер телефона</span>
										<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
									</label>
								</div>
							</div>
							<button class="btn btn--second">Получить сейчас</button>
							<input type="hidden" name="type" value="Получение каталога">
						</div>
						<label class="checkbox lead-form__checkbox">
							<span class="checkbox__pointer">
								<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
								<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
							</span>
							<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
						</label>
					</div>
				</form>
			</section>
			<section class="catalog" id="catalog">
				<div class="wrap">
					<div class="section-header catalog__section-header">
						<div class="sub-title wow">Импланты из диоксида циркония</div>
						<h2 class="title wow">Каталог продукции</h2>
					</div>
					<div class="catalog__inner">
						<div class="catalog__nav">
							<div class="catalog__nav-inner">
								<div class="h5 catalog__nav-title">Мы предлагаем вам только лучшие решения</div>
								<ul class="tab-list catalog__list">
									<li class="catalig__list-item active" data-tab-id="product1"><span class="catalog__list-item-name">Одноэтапные импланты</span></li>
									<li class="catalig__list-item" data-tab-id="product2"><span class="catalog__list-item-name">Двухэтапные импланты</span></li>
									<li class="catalig__list-item" data-tab-id="product3"><span class="catalog__list-item-name">Абатменты</span></li>
									<li class="catalig__list-item" data-tab-id="product4"><span class="catalog__list-item-name">Набор инструментов</span></li>
								</ul>
								<button class="btn btn--second" data-modal="modalCatalog">Скачать прайс-лист</button>
							</div>
						</div>
						<div class="catalog__content">
							<p class="catalog__text">Мы предлагаем Вам безопасную и соответствующую реальной стоимости систему имплантов, которая отвечает потребностям пациентов.</p>
							<p class="catalog__offer">Инновационное и выгодное решение <b>для Вашей клиники</b></p>
							<div class="tab-content active" data-tab="product1">
								<div class="product">
									<div class="product__card">
										<div class="h4 product__title">AWI-394010/012</div>
										<p class="product__description">Имплант керамический белый</p>
										<ul class="product__list">
											<li class="product__list-item">Высота шейки <b>2,0 mm</b></li>
											<li class="product__list-item">Диаметр пришечной части <b>Ø 4,0</b></li>
											<li class="product__list-item">Диаметр резьбовой части <b>Ø 3,9</b></li>
											<li class="product__list-item">Длинна абатмента <b>10 mm</b></li>
											<li class="product__list-item">Длинна: <b>10 mm / 12 mm</b></li>
										</ul>
										<a href="https://www.dental-group.ru/catalog/89" class="btn btn--str btn--block">Заказать</a>
									</div>
									<div class="product__img-container">
										<img src="img/product/1e-implant.png" alt="Одноэтапный имплант" class="product__img">
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab="product2">
								<div class="product">
									<div class="product__card">
										<div class="h4 product__title">AWI-39../45../50..</div>
										<p class="product__description">Имплант керамический белый</p>
										<ul class="product__list">
											<li class="product__list-item">Высота шейки <b>3,0 mm</b></li>
											<li class="product__list-item">Диаметр пришечной части <b>Ø 5,0/6,0</b></li>
											<li class="product__list-item">Диаметр резьбовой части <b>Ø 3,9/5,0</b></li>
											<li class="product__list-item">Длинна: <b>8 mm /10 mm / 12 mm / 14 mm</b></li>
										</ul>
										<a href="https://www.dental-group.ru/catalog/89" class="btn btn--str btn--block">Заказать</a>
									</div>
									<div class="product__img-container">
										<img src="img/product/2e-implant.png" alt="Двухэтапный имплант" class="product__img">
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab="product3">
								<div class="product">
									<div class="product__card">
										<div class="h4 product__title">AWI-AB-5070/6070</div>
										<p class="product__description">Монолитный абатмент из керамики</p>
										<ul class="product__list">
											<li class="product__list-item">Плато <b>Ø 4,0/5,0</b></li>
											<li class="product__list-item">Длинна: <b>7 mm</b></li>
										</ul>
										<a href="https://www.dental-group.ru/catalog/89" class="btn btn--str btn--block">Заказать</a>
									</div>
									<div class="product__img-container">
										<img src="img/product/abatment.png" alt="Абатмент" class="product__img">
									</div>
								</div>
							</div>
							<div class="tab-content" data-tab="product4">
								<div class="product">
									<div class="product__card">
										<div class="h4 product__title">Инструменты</div>
										<p class="product__description">Из высокопрочной высокоэффективной керамики ATZ и хирургической стали</p>
										<ul class="product__list">
											<li class="product__list-item">Адаптер имплантатоввод</li>
											<li class="product__list-item">Адаптер для абатмента</li>
											<li class="product__list-item">Удлинитель углового наконечника</li>
											<li class="product__list-item">Адаптер углового наконечника</li>
											<li class="product__list-item">Адаптер для заглушки-формирователя</li>
											<li class="product__list-item">Динамометрический ключ-трещотка</li>
											<li class="product__list-item">Сверло, формирователи, метчики для имплантов</li>
										</ul>
										<a href="https://www.dental-group.ru/catalog/89" class="btn btn--str btn--block">Заказать</a>
									</div>
									<div class="product__img-container">
										<img src="img/product/instrument.png" alt="Инструмент" class="product__img">
									</div>
								</div>
							</div>
						</div>
					</div>
					<a href="https://www.dental-group.ru/catalog" class="catalog__link">
						Смотреть еще
						<svg class="catalog__link-icon"><use href="img/sprite.svg#down-2"></use></svg>
					</a>
				</div>
			</section>
			<section class="experience">
				<div class="wrap">
					<div class="experience__inner">
						<h2 class="experience__title"><span>50+</span> лет научного исследования</h2>
						<p class="experience__text">Находясь в непрерывной работе, имея отличные клинические показатели, керамические импланты демонстрируют на сегодняшний день надежность и долговечность.</p>
						<ul class="experience__list">
							<li class="experience__list-item">
								<svg class="experience__list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
								Любой тип кости
							</li>
							<li class="experience__list-item">
								<svg class="experience__list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
								Высокая надежность
							</li>
							<li class="experience__list-item">
								<svg class="experience__list-item-icon"><use href="img/sprite.svg#check-circle"></use></svg>
								Естественная белизна
							</li>
						</ul>
						<div class="experience__btn-container">
							<button class="btn experience__btn" data-modal="modalCourse">Записаться на курсы</button>
						</div>
					</div>
					<div class="experience__slider">
						<div class="experience__slider-item">
							<img src="img/experience/1.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/2.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/3.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/2.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/4.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/5.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/7.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/8.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/9.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/10.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/11.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/12.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/13.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/14.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/15.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/16.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/17.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/18.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/19.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/20.jpg" alt="Фото" class="experience__slider-img">
						</div>
						<div class="experience__slider-item">
							<img src="img/experience/21.jpg" alt="Фото" class="experience__slider-img">
						</div>
					</div>
				</div>
			</section>
			<section class="education" id="education">
				<div class="wrap">
					<div class="section-header education__section-header">
						<div class="sub-title wow">Предлагаем не просто приобрести инновационное решение, а получить <b class="color-main">эффективные знание и опыт</b></div>
						<h2 class="title wow">Обучение вместе с WITAR</h2>
					</div>
					<ul class="tab-list">
						<li class="tab-list__item">
							<button class="tab-list__item-btn active" data-tab-id="courses">Курсы</button>
						</li>
						<li class="tab-list__item">
							<button class="tab-list__item-btn" data-tab-id="master-classes">Мастер-классы</button>
						</li>
					</ul>
					<div class="tab-content active" data-tab="courses">
						<div class="courses education__courses">
							<div>
								<div class="course">
									<div class="course__left">
										<div class="h2 color-main course__title course__title--with-location">
											Курс «Био-Имплантация»
											<span class="course__title-location">УЦ " Дентал Групп", г. Москва, Нижегородская, 7</span>
										</div>
										<div class="course__sub-title">Особенности работы на высокопрочных дентальных имплантах AWI из диоксида циркония</div>
										<ul class="course__list">
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Титан или диоксид циркония? Плюсы и минусы.
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Выбор импланта
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Планирование лечения
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Хирургический протокол работы
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Разбор клинических случаев
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Основы протезирования на цирконевых имплантах AWI, базовые принципы временного протезирования
											</li>
										</ul>
									</div>
									<div class="course__img-container">
										<img src="img/medic.png" alt="Изображение" class="course__img">
									</div>
									<div class="course__video">
										<a href="video/ustanovka.mp4" class="course__video-btn" data-fancybox>
											<svg class="course__video-btn-icon"><use href="img/sprite.svg#youtube"></use></svg>
										</a>
										<div class="course__video-text"><b>Установка</b> керамических имплантов</div>
									</div>
									<div class="course__right">
										<div class="course__total">
											<p class="course__total-item">Продолжительность: <b>1 день</b></p>
											<p class="course__total-item">Дата начала: <b>25.11 и 23.12</b></p>
											<p class="course__total-item">Стоимость: <button class="course__total-link" data-modal="modalCallback">Узнать стоимость</button></p>
										</div>
										<form class="course__form js-form">
											<div class="course__form-inner">
												<div class="course__form-title">Запись на Обучение</div>
												<p class="course__form-text">Заполните форму и мы свяжемся с вами в ближайшее время</p>
												<div class="field course__form-field">
													<div class="field__inner">
														<label class="field__label">
															<span class="field__placeholder">Ваше имя</span>
															<input type="text" name="name" class="field__input" placeholder="Введите имя">
														</label>
													</div>
												</div>
												<div class="field course__form-field">
													<div class="field__inner">
														<label class="field__label">
															<span class="field__placeholder">Ваш номер телефона</span>
															<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
														</label>
													</div>
												</div>
												<button class="btn btn--second course__form-btn">Записаться</button>
												<input type="hidden" name="type" value="Запись на обучение">
												<label class="checkbox course__form-checkbox">
													<span class="checkbox__pointer">
														<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
														<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
													</span>
													<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab="master-classes">
						<div class="courses education__courses">
							<div>
								<div class="course">
									<div class="course__left">
										<div class="h2 color-main course__title course__title--with-location">
											Мастер-класс «Био-Имплантация»
											<span class="course__title-location">г. Санкт-Петербург</span>
										</div>
										<div class="course__sub-title">Особенности работы на высокопрочных дентальных имплантах AWI из диоксида циркония</div>
										<ul class="course__list">
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Титан или диоксид циркония? Плюсы и минусы.
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Выбор импланта
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Планирование лечения
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Хирургический протокол работы
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Разбор клинических случаев
											</li>
											<li class="course__list-item">
												<svg class="course__list-item-icon"><use href="img/sprite.svg#tick"></use></svg>
												Основы протезирования на цирконевых имплантах AWI, базовые принципы временного протезирования
											</li>
										</ul>
									</div>
									<div class="course__img-container">
										<img src="img/medic.png" alt="Изображение" class="course__img">
									</div>
									<div class="course__video">
										<a href="video/ustanovka.mp4" class="course__video-btn" data-fancybox>
											<svg class="course__video-btn-icon"><use href="img/sprite.svg#youtube"></use></svg>
										</a>
										<div class="course__video-text"><b>Установка</b> керамических имплантов</div>
									</div>
									<div class="course__right">
										<div class="course__total">
											<p class="course__total-item">Продолжительность: <b>1 день</b></p>
											<p class="course__total-item">Дата начала: <b>30 ноября</b></p>
											<a class="course__total-link" href="https://www.apexdental.ru/training_center/schedule/osobennosti-raboty-na-vysokoprochnykh-dvukhetapnykh-dentalnykh-implantatakh-awi-iz-tsirkon-dioksid-k/" target="_blank">Узнать подробности</a>
										</div>
										<form class="course__form js-form">
											<div class="course__form-inner">
												<div class="course__form-title">Запись на Обучение</div>
												<p class="course__form-text">Заполните форму и мы свяжемся с вами в ближайшее время</p>
												<div class="field course__form-field">
													<div class="field__inner">
														<label class="field__label">
															<span class="field__placeholder">Ваше имя</span>
															<input type="text" name="name" class="field__input" placeholder="Введите имя">
														</label>
													</div>
												</div>
												<div class="field course__form-field">
													<div class="field__inner">
														<label class="field__label">
															<span class="field__placeholder">Ваш номер телефона</span>
															<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
														</label>
													</div>
												</div>
												<button class="btn btn--second course__form-btn">Записаться</button>
												<input type="hidden" name="type" value="Запись на обучение">
												<label class="checkbox course__form-checkbox">
													<span class="checkbox__pointer">
														<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
														<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
													</span>
													<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
												</label>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="include">
					<div class="wrap">
						<h2 class="include__title color-main">Что будет на обучении:</h2>
						<ul class="include__list">
							<li class="include__list-item" style="width: 380px">
								<svg class="include__list-item-icon"><use href="img/sprite.svg#tick-circle"></use></svg>
								<span><b>Лекционная</b> часть, <b>практика</b> на искусственных челюстях</span>
							</li>
							<li class="include__list-item" style="width: 462px">
								<svg class="include__list-item-icon"><use href="img/sprite.svg#tick-circle"></use></svg>
								<span><b>«Живая» хирургическая операция</b> с использованием керамических имплантов на пациенте</span>
							</li>
							<li class="include__list-item" style="width: 340px">
								<svg class="include__list-item-icon"><use href="img/sprite.svg#tick-circle"></use></svg>
								<span><b>Ответы</b> на вопросы и <b>разборы</b> клинических случаев</span>
							</li>
						</ul>
					</div>
				</div>
				<form class="lead-form js-form">
					<div class="lead-form__inner">
						<div class="lead-form__title lead-form__title--center"><span class="h4 color-main">Записаться на <span class="color-second">бесплатный</span> вебинар</span></div>
						<p class="lead-form__text">Заполните форму и мы свяжемся с вами в ближайшее время</p>
						<div class="lead-form__fields">
							<div class="field lead-form__field">
								<div class="field__inner">
									<label class="field__label">
										<span class="field__placeholder">Ваше имя</span>
										<input type="text" name="name" class="field__input" placeholder="Введите имя">
									</label>
								</div>
							</div>
							<div class="field lead-form__field">
								<div class="field__inner">
									<label class="field__label">
										<span class="field__placeholder">Ваш номер телефона</span>
										<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
									</label>
								</div>
							</div>
							<button class="btn btn--second">Записаться</button>
							<input type="hidden" name="type" value="Запись на вебинар">
						</div>
						<label class="checkbox lead-form__checkbox">
							<span class="checkbox__pointer">
								<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
								<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
							</span>
							<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
						</label>
					</div>
				</form>
				<div class="opportunities">
					<div class="wrap">
						<div class="opportunity-list">
							<div class="opportunity">
								<img src="img/money-time.png" alt="Рассрочка" class="opportunity__img">
								<div class="opportunity__info"><b class="color-second">Предлагаем рассрочку</b> платежа в течении месяца до начала курса</div>
							</div>
							<div class="opportunity">
								<img src="img/discount.png" alt="Скидка" class="opportunity__img" width="140">
								<div class="opportunity__info">Приведи коллег <br>и получи <b class="color-second">скидку 25%</b> <br>на обучение</div>
							</div>
							<div class="opportunity">
								<img src="img/question-small.png" alt="Повтор курса" class="opportunity__img">
								<div class="opportunity__info">Постоянным клиентам возможность <b class="color-second">прослушать курс повторно</b></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="company" id="company">
				<div class="wrap">
					<div class="section-header company__section-header">
						<div class="sub-title wow">Мы предлагаем не просто приобрести инновационное решение, а получить <b class="color-main">эффективные знание и опыт</b></div>
						<h2 class="title wow">DENTAL GROUP WITAR</h2>
					</div>
					<div class="company__inner">
						<div class="company__text">
							<p>Уже несколько лет компания WITAR специализируется на разработке и внедрении инновационных способов дентальной имплантации и стоматологического протезирования без применения металлов.</p>
							<p>DENTAL GROUP WITAR  предлагает воспользоваться возможностью не просто приобрести инновационное решение в имплантации, а <b>получить эффективные знание и опыт,</b> ведущих специалистов Европы и России.</p>
							<ul>
								<li>
									<svg><use href="img/sprite.svg#tick"></use></svg>
									Инновационно
								</li>
								<li>
									<svg><use href="img/sprite.svg#tick"></use></svg>
									Надежно
								</li>
								<li>
									<svg><use href="img/sprite.svg#tick"></use></svg>
									Компетентно
								</li>
							</ul>
							<p>В команде DENTAL GROUP WITAR вы научитесь проводить операции на реальных клинических случаях.</p>
							<p>Будете иметь возможность получить консультацию в любых ситуациях. Состоять в закрытом онлайн клубе, в котором сможете задать вопросы и получать ответы не менеджеров продающих компаний, а экспертов в области имплантации с более 20 летним стажем. Узнавать и знакомиться с новыми коллегами, которые так же как и вы будет делиться своим опытом.</p>
							<p>Иметь возможность войти в состав Российской компании-экспертной группы имплантологов. <b>Покупая систему WITAR вы приобретаете качественный продукт и знания которые бесценны.</b></p>
						</div>
						<div class="company__other">
							<div class="company__personal">
								<div class="company__personal-item">
									<div class="company__personal-prof">Генеральный директор компании WITAR</div>
									<div class="company__personal-name">Виталий Кольбе</div>
								</div>
								<div class="company__personal-item">
									<div class="company__personal-prof">Исполнительный директор компании WITAR</div>
									<div class="company__personal-name">Артур Вольф</div>
								</div>
							</div>
							<img src="img/document.png" alt="Сертификат" class="company__document">
						</div>
					</div>
					<div class="partner">
						<h3 class="partner__title color-main">Уже с нами</h3>
						<div class="partner__list">
							<div>
								<div class="partner__item">
									<img src="img/partner/mirana.jpg" alt="Mirana Dent" class="partner__img">
								</div>
							</div>
							<div>
								<div class="partner__item">
									<img src="img/partner/trilogy.jpg" alt="Трилогия" class="partner__img">
								</div>
							</div>
							<div>
								<div class="partner__item">
									<img src="img/partner/witar.jpg" alt="WITAR" class="partner__img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="result">
				<div class="wrap">
					<div class="result__img">
						<div class="circle-animation wow result__circle">
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
							<div class="circle-animation__item"></div>
						</div>
					</div>
					<div class="result__item">
						<p class="result__text"><b>Каждый специалист</b> прошедший курс получает возможность узнать особенности работы с циркониевыми имплантами.</p>
						<p class="result__text"><b>Узнает</b> главные отличительные принципы работы хирургического протокола в сравнении с другими системами применяемые в имплантации. Применяет свои знания на курсе в реальных условиях на реальных пациентах.</p>
					</div>
					<div class="result__item result__item--second">
						<p class="result__text"><b>Получает сертификат специалиста</b> в области применения циркониевых имплантов <b>и баллы непрерывного медицинского образования (Баллы НМО)</b>.</p>
						<p class="result__text"><b>Самые активные студенты</b> академии принимаются в команду группы экспертов по имплатнации в России и Европы, с возможностью онлайн консультаций своих клинических случаев.</p>
					</div>
				</div>
			</section>
			<section class="review" id="review">
				<div class="wrap">
					<div class="section-header review__section-header">
						<div class="sub-title wow">Здоровье и высокий уровень жизни не являются роскошью, а должны быть <b class="color-main">доступны каждому</b> в современном обществе</div>
						<h2 class="title wow">Отзывы</h2>
					</div>
					<div class="review__list">
						<div>
							<a href="video/otziv1.mp4" data-fancybox class="review__item">
								<img src="img/review/1.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
						<div>
							<a href="video/otziv2.mp4" data-fancybox class="review__item">
								<img src="img/review/2.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
						<div>
							<a href="video/otziv3.mp4" data-fancybox class="review__item">
								<img src="img/review/3.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
						<div>
							<a href="video/otziv4.mp4" data-fancybox class="review__item">
								<img src="img/review/4.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
						<div>
							<a href="video/otziv5.mp4" data-fancybox class="review__item">
								<img src="img/review/5.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
						<div>
							<a href="video/otziv6.mp4" data-fancybox class="review__item">
								<img src="img/review/6.jpg" alt="Отзыв">
								<span class="review__item-play"></span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="question" id="contact">
				<div class="wrap">
					<div class="section-header question__section-header">
						<div class="sub-title wow">Обратная связь</div>
						<h2 class="title wow"><span class="color-main">Хотите задать нам вопрос</span> или нужна дополнительная информация?</h2>
					</div>
					<form class="question__form js-form">
						<div class="question__form-inner">
							<div class="question__form-title h3 color-main">Заполните форму</div>
							<div class="question__fields">
								<div class="field question__form-field">
									<div class="field__inner">
										<label class="field__label">
											<input type="hidden" name="interes" class="field__select-input">
											<svg class="field__icon"><use href="img/sprite.svg#down-2"></use></svg>
											<span class="field__placeholder">Вам необходимо:</span>
											<span class="field__select"></span>
										</label>
										<div class="field__list">
											<div class="field__list-inner js-custom-scroll">
												<ul class="field__list-items">
													<li class="field__list-item active" data-value="Обучающие курсы">Обучающие курсы</li>
													<li class="field__list-item" data-value="Каталог и цены">Каталог и цены</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="field question__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваша почта</span>
											<input type="text" name="email" class="field__input" placeholder="E-mail" data-required="required">
										</label>
									</div>
								</div>
								<div class="field question__form-field">
									<div class="field__inner">
										<label class="field__label">
											<span class="field__placeholder">Ваш номер телефона</span>
											<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
										</label>
									</div>
								</div>
							</div>
							<div class="question__form-radio">
								<div class="question__form-radio-title">В каком мессенджере удобно общатся?</div>
								<label class="question__form-radio-item">
									<input type="radio" name="messenger" value="WhatsApp" class="question__form-radio-item-input" checked>
									<span class="question__form-radio-item-inner question__form-radio-item-inner--whatsapp">
										<svg class="question__form-radio-item-icon"><use href="img/sprite.svg#whatsapp"></use></svg>
										<span class="question__form-radio-item-text">В WhatsApp</span>
									</span>
								</label>
								<label class="question__form-radio-item">
									<input type="radio" name="messenger" value="Viber" class="question__form-radio-item-input">
									<span class="question__form-radio-item-inner question__form-radio-item-inner--viber">
										<svg class="question__form-radio-item-icon"><use href="img/sprite.svg#viber"></use></svg>
										<span class="question__form-radio-item-text">В Viber</span>
									</span>
								</label>
								<label class="question__form-radio-item">
									<input type="radio" name="messenger" value="Telegram" class="question__form-radio-item-input">
									<span class="question__form-radio-item-inner question__form-radio-item-inner--telegram">
										<svg class="question__form-radio-item-icon"><use href="img/sprite.svg#telegram"></use></svg>
										<span class="question__form-radio-item-text">В Telegram</span>
									</span>
								</label>
							</div>
							<button class="btn question__form-btn">Отправить</button>
							<input type="hidden" name="type" value="Обратная связь">
							<label class="checkbox question__form-checkbox">
								<span class="checkbox__pointer">
									<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
									<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
								</span>
								<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
							</label>
						</div>
					</form>
				</div>
			</section>
		</main>
		<footer class="footer">
			<div class="wrap footer__wrap">
				<div class="logo footer__logo">
					<svg class="logo__icon"><use href="img/sprite.svg#logo"></use></svg>
					<div class="logo__main">
						<div class="logo__name">DENTAL GROUP WITAR</div>
						<div class="logo__slogan">стоматологические импланты</div>
					</div>
					<div class="logo__description">Представительство системы немецких имплантов WITAR в России</div>
				</div>
				<div class="footer__container footer__address">
					<svg class="footer__container-icon"><use href="img/sprite.svg#location"></use></svg>
					<div class="footer__container-content">г.Москва, <br>ул. Нижегородская, дом 7</div>
				</div>
				<div class="footer__container">
					<svg class="footer__container-icon"><use href="img/sprite.svg#call"></use></svg>
					<div class="footer__container-content">
						<a href="tel:+74952601967" class="footer__link">+7(495) 260-19-67</a>
						<a href="tel:+79859219577" class="footer__link">+7(985) 921-95-77</a>
					</div>
				</div>
				<div class="footer__container">
					<div class="footer__container-content">
						<button class="btn btn--str btn--relative" data-modal="modalCallback">
							<svg class="btn__icon"><use href="img/sprite.svg#call"></use></svg>
							Перезвоните мне
						</button>
						<div class="footer__open">Пн-Пт: с 10:00 до 18:00</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="menu">
		<div class="menu__bg"></div>
		<div class="menu__content">
			<svg class="menu__close"><use href="img/sprite.svg#close"></use></svg>
			<div class="menu__navigation">
				<nav class="navigation">
					<div class="h4 navigation__title">Навигация по сайту</div>
					<ul class="navigation__list">
						<li class="navigation__item"><a href="#about" class="js-scroll-to navigation__link">Что такое WITAR</a></li>
						<li class="navigation__item"><a href="#edge" class="js-scroll-to navigation__link">Преимущества</a></li>
						<li class="navigation__item"><a href="#catalog" class="js-scroll-to navigation__link">Каталог</a></li>
						<li class="navigation__item"><a href="#education" class="js-scroll-to navigation__link">Обучение</a></li>
						<li class="navigation__item"><a href="#company" class="js-scroll-to navigation__link">О нас</a></li>
						<li class="navigation__item"><a href="#review" class="js-scroll-to navigation__link">Отзывы</a></li>
						<li class="navigation__item"><a href="#contact" class="js-scroll-to navigation__link">Контакты</a></li>
					</ul>
				</nav>
				<div class="menu__lead">
					<button class="btn menu__lead-btn" data-modal="modalCatalog">Получить каталог</button>
				</div>
			</div>
			<div class="menu__contact">
				<div class="menu__contact-item">
					<div class="h4 menu__contact-title">Контакты</div>
					<a href="tel:+79859219577" class="menu__contact-link">+7(985) 921-95-77</a>
					<a href="tel:+74952601967" class="menu__contact-link">+7(495) 260-19-67</a>
				</div>
				<div class="menu__contact-item menu__messenger">
					<div class="h4 menu__contact-title">Пишите в мессенджеры</div>
					<div class="menu__contact-content">
						<svg class="menu__contact-icon"><use href="img/sprite.svg#online"></use></svg>
						<div class="menu__contact-value"><span class="menu__online">Сейчас мы онлайн. Пишите</span></div>
					</div>
					<div class="menu__contact-btn-list">
						<a href="https://wa.me/79859219577" target="_blank" class="menu__contact-btn-item menu__contact-btn-item--whatsapp">
							<svg class="menu__contact-btn-icon"><use href="img/sprite.svg#whatsapp"></use></svg>
						</a>
						<a href="viber://chat?number=%2B79859219577" target="_blank" class="menu__contact-btn-item menu__contact-btn-item--viber">
							<svg class="menu__contact-btn-icon"><use href="img/sprite.svg#viber"></use></svg>
						</a>
						<a href="https://t.me/Elena_dental" target="_blank" class="menu__contact-btn-item menu__contact-btn-item--telegram">
							<svg class="menu__contact-btn-icon"><use href="img/sprite.svg#telegram"></use></svg>
						</a>
					</div>
				</div>
				<div class="menu__contact-item">
					<div class="h4 menu__contact-title">Наш адрес</div>
					<div class="menu__contact-content">г.Москва, ул. Нижегородская, дом 7</div>
				</div>
				<div class="menu__contact-item menu__time">
					<div class="h4 menu__contact-title">Как мы работаем</div>
					<div class="menu__contact-content">
						<div class="menu__contact-value">Пн-Пт: с 10:00 до 18:00</div>
						<span class="online menu__contact-online"></span>
					</div>
					<div class="menu__contact-notice"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal modal--bg modal--relative" id="modalCatalog">
		<button class="modal__close">
	        <svg class="modal__close-icon"><use href="img/sprite.svg#close"></use></svg>
	    </button>
	    <div class="modal__inner">
		    <div class="modal__title">Отправим каталог и прайс в течение 5 минут</div>
		    <form class="modal__form js-form">
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваша почта</span>
							<input type="text" name="email" class="field__input" placeholder="E-mail" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">E-mail обязателен!</div>
					</div>
				</div>
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваш номер телефона</span>
							<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">Телефон обязателен!</div>
					</div>
				</div>
				<div class="modal__select">
					<div class="modal__select-title">В каком мессенджере отправить файлы?</div>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="WhatsApp" class="modal__select-item-input" checked>
						<span class="modal__select-item-inner modal__select-item-inner--whatsapp">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#whatsapp"></use></svg>
							<span class="modal__select-item-text">В WhatsApp</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Viber" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--viber">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#viber"></use></svg>
							<span class="modal__select-item-text">В Viber</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Telegram" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--telegram">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#telegram"></use></svg>
							<span class="modal__select-item-text">В Telegram</span>
						</span>
					</label>
				</div>
				<button class="btn modal__btn">Получить сейчас</button>
				<input type="hidden" name="type" value="Получение каталога">
				<label class="checkbox modal__checkbox">
					<span class="checkbox__pointer">
						<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
						<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
					</span>
					<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
				</label>
		    </form>
		</div>
	</div>

	<div class="modal modal--bg modal--relative" id="modalCallback">
		<button class="modal__close">
	        <svg class="modal__close-icon"><use href="img/sprite.svg#close"></use></svg>
	    </button>
	    <div class="modal__inner">
		    <div class="modal__title">Заполните форму</div>
		    <form class="modal__form js-form">
		    	<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<input type="hidden" name="interes" class="field__select-input">
							<svg class="field__icon"><use href="img/sprite.svg#down-2"></use></svg>
							<span class="field__placeholder">Вас интересует:</span>
							<span class="field__select"></span>
						</label>
						<div class="field__list">
							<div class="field__list-inner js-custom-scroll">
								<ul class="field__list-items">
									<li class="field__list-item active" data-value="Обучающие курсы">Обучающие курсы</li>
									<li class="field__list-item" data-value="Каталог и цены">Каталог и цены</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваша почта</span>
							<input type="text" name="email" class="field__input" placeholder="E-mail" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">E-mail обязателен!</div>
					</div>
				</div>
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваш номер телефона</span>
							<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">Телефон обязателен!</div>
					</div>
				</div>
				<div class="modal__select">
					<div class="modal__select-title">В каком мессенджере удобно общаться?</div>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="WhatsApp" class="modal__select-item-input" checked>
						<span class="modal__select-item-inner modal__select-item-inner--whatsapp">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#whatsapp"></use></svg>
							<span class="modal__select-item-text">В WhatsApp</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Viber" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--viber">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#viber"></use></svg>
							<span class="modal__select-item-text">В Viber</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Telegram" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--telegram">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#telegram"></use></svg>
							<span class="modal__select-item-text">В Telegram</span>
						</span>
					</label>
				</div>
				<button class="btn modal__btn">Написать нам</button>
				<input type="hidden" name="type" value="Обратная связь">
				<label class="checkbox modal__checkbox">
					<span class="checkbox__pointer">
						<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
						<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
					</span>
					<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
				</label>
		    </form>
		</div>
	</div>

	<div class="modal modal--bg modal--relative" id="modalCourse">
		<button class="modal__close">
	        <svg class="modal__close-icon"><use href="img/sprite.svg#close"></use></svg>
	    </button>
	    <div class="modal__inner">
		    <div class="modal__title">Заполните форму</div>
		    <form class="modal__form js-form">
		    	<!--<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<input type="hidden" name="course" class="field__select-input">
							<svg class="field__icon"><use href="img/sprite.svg#down-2"></use></svg>
							<span class="field__placeholder">Вас интересуют:</span>
							<span class="field__select"></span>
						</label>
						<div class="field__list">
							<div class="field__list-inner js-custom-scroll">
								<ul class="field__list-items">
									<li class="field__list-item active" data-value="Обучающие курсы">Обучающие курсы</li>
									<li class="field__list-item" data-value="Обучающие курсы 2">Обучающие курсы 2</li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваша почта</span>
							<input type="text" name="email" class="field__input" placeholder="E-mail" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">E-mail обязателен!</div>
					</div>
				</div>
				<div class="field">
					<div class="field__inner">
						<label class="field__label">
							<span class="field__placeholder">Ваш номер телефона</span>
							<input type="text" name="phone" class="field__input" placeholder="+ 7 ( - - - ) - - -  - -  - -" data-required="required">
						</label>
					</div>
					<div class="field__error">
						<svg class="field__error-icon"><use href="img/sprite.svg#danger-circle"></use></svg>
						<div class="field__error-text">Телефон обязателен!</div>
					</div>
				</div>
				<div class="modal__select">
					<div class="modal__select-title">В каком мессенджере удобно общаться?</div>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="WhatsApp" class="modal__select-item-input" checked>
						<span class="modal__select-item-inner modal__select-item-inner--whatsapp">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#whatsapp"></use></svg>
							<span class="modal__select-item-text">В WhatsApp</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Viber" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--viber">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#viber"></use></svg>
							<span class="modal__select-item-text">В Viber</span>
						</span>
					</label>
					<label class="modal__select-item">
						<input type="radio" name="messenger" value="Telegram" class="modal__select-item-input">
						<span class="modal__select-item-inner modal__select-item-inner--telegram">
							<svg class="modal__select-item-icon"><use href="img/sprite.svg#telegram"></use></svg>
							<span class="modal__select-item-text">В Telegram</span>
						</span>
					</label>
				</div>
				<button class="btn modal__btn">Записаться на курсы</button>
				<input type="hidden" name="type" value="Запись на курсы">
				<label class="checkbox modal__checkbox">
					<span class="checkbox__pointer">
						<input type="checkbox" name="privacy" class="checkbox__input" checked data-required="required">
						<svg class="checkbox__custom"><use href="img/sprite.svg#tick"></use></svg>
					</span>
					<span class="checkbox__text">Вы соглашаетесь на условия обработки персональных данных</span>
				</label>
		    </form>
		</div>
	</div>

	<div class="modal" id="modalThank">
		<button class="modal__close">
	        <svg class="modal__close-icon"><use href="img/sprite.svg#close"></use></svg>
	    </button>
	    <div class="modal__inner">
	    	<div class="modal__title">Спасибо, Ваша заявка успешно отправлена!</div>
	   	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.1/viewer.min.js" integrity="sha512-UzpQxIWgLbHvbVd4+8fcRWqFLi1pQ6qO6yXm+Hiig76VhnhW/gvfvnacdPanleB2ak+VwiI5BUqrPovGDPsKWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="js/swiped-event.min.js"></script>
	<script src="js/script.js?v=2"></script>
	
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(88269980, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/88269980" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>