<?php

/**
 * Template Name: Home
 * Template Post Type: page
 */

?>


<?php
// ===== index.php (главная страница) =====
get_header(); // Подключает header.php
?>


	<main>
		<div id="sp-home"></div>
		<section id="main-section">
			<!-- Title container -->
			<div id="title-container" class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-10 col-md-10"
						style="position: relative; padding-top: 30px; padding-bottom: 25px;">
						<h1 class="ps-0">Создание, продвижение<br class="d-none d-sm-block"> и поддержка сайтов</h1>
						<h5 class="mt-2 mt-sm-3">Частный веб-мастер. Опыт работы с 2016 года.</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-8 w-100">
						<!--div id="description">Разработаю продающий сайт. Настрою контекстную рекламу. Подключу CRM, онлайн оплату, сервис доставки. Создам систему привлечения клиентов в Ваш бизнес.</div-->
						<!--div id="description">Выявлю потребности Ваших клиентов, проанализирую конкурентов, создам продающий контент и уникальный дизайн, настрою контекстную рекламу, продвину в поиске, приведу новых клиентов в Ваш бизнес, буду поддерживать и улучшать Ваш проект.</div-->
						<div id="description">Выявлю потребности Ваших клиентов. Создам продающий сайт или улучшу имеющийся. Настрою
							контекстную рекламу. Продвину в поиске. Приведу больше клиентов в Ваш бизнес. Буду поддерживать и улучшать
							Ваш сайт или интернет-магазин.</div>
						<a href="#" class="d-inline-block home-btn">Оставить заявку</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Site create section -->
		<div id="sp-create"></div>
		<section id="site-create-section" class="py-5">
			<div class="container px-md-0 pt-5" style="overflow: hidden;">
				<div class="row">
					<div class="col offset-md-2">
						<div class="title-line mb-3"></div>
						<h2>Создание сайтов</h2>
					</div>
				</div>
			</div>
			<div class="container px-md-0 pb-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="60000">
							<div class="container">
								<div class="row justify-content-end">
									<div class="col-lg-8 col-xl-6" style="height: 100px; position: relative;">
										<button id="carousel-sites-create-control-prev" class="carousel-control-prev" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="prev" onclick="setPrevService();">
											<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><!--Вариант дешевеле--><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left.svg"
													class="me-3">Предыдущий</span>
										</button>
										<button id="carousel-sites-create-control-next" class="carousel-control-next" type="button"
											data-bs-target="#carouselExampleControls" data-bs-slide="next" onclick="setNextService();">
											<!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text">Следующий<img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right.svg"
													class="ms-3"><!--Вариант с лучшей конверсией--></span>
										</button>
									</div>
								</div>
							</div>
							<div class="carousel-inner">

								<!-- Одностраничный сайт или сайт визитка -->
								<div id="carousel-item-1" class="carousel-item active">
									<div class="row justify-content-end">

										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-1.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7" style="height: 100%; min-height: 175px;">
													<h3>Одностраничный сайт или сайт визитка</h3>
													<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или
														протестировать новую нишу.</p>
													<p>Стоимость создания от <span class="price">5 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>6 тематических блоков или страниц на выбор (например: главная, товары/услуги, обо мне/о
															компании, преимущества, как заказать, контакты и др.);</li>
														<li>нужное количество форм заказа и обратной связи;</li>
														<li>доменное имя на год, хостинг на 3 мес.</li>
													</ul>
													<p>Сроки разработки: 3-5 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>5 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 3 мес.</li>
															</ul>
															<p>Сроки разработки: 3-5 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>10 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 5-7 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Одностраничный сайт или сайт визитка -->

								<!-- Многостраничный сайт, сайт компании, промо сайт -->
								<div id="carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-1.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7" style="height: 100%; min-height: 175px;">
													<h3>Многостраничный сайт, сайт компании, промо сайт</h3>
													<p>Подойдет тем, кто хочет сделать более сложный и интересный проект, чтобы получить
														максимальную отдачу от вложенных средств.</p>
													<p>Стоимость создания от <span class="price">7 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>9 тематических блоков или страниц на выбор (например: главная, товары/услуги, подробное
															описание товара/услуги, акции, портфолио, обо мне/о компании, преимущества, как заказать,
															контакты и др.);</li>
														<li>нужное количество форм заказа и обратной связи;</li>
														<li>доменное имя на год, хостинг на 6 мес.</li>
													</ul>
													<p>Сроки разработки: 5-7 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>7 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 5-7 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>14 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 7-10 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-3.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Многостраничный сайт, сайт компании, промо сайт -->

								<!-- Интернет магазин или каталог -->
								<div id="carousel-item-3" class="carousel-item">
									<div class="row justify-content-start">
										<div class="col-md-1 col-lg-2">
											<div class="row">
												<div class="col">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-2.jpg); height: 100%; background-size: cover;">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-8">
											<div class="row">
												<div class="col-md-5 col-lg-5 mb-2">
													<div
														style="background: url(<?php echo get_template_directory_uri(); ?>/img/service-sites-create-3.jpg); height: 100%; min-height: 175px; background-size: cover;">
													</div>
												</div>
												<div class="col-md-7 col-lg-7">
													<h3>Интернет магазин или каталог</h3>
													<p>Подойдет тем, кто хочет продавать много различных товаров через интернет.</p>
													<p>Стоимость создания от <span class="price">10 000</span> руб.</p>
													<p>В минимальную стоимость входит:</p>
													<ul>
														<li>уникальный и адаптивный дизайн;</li>
														<li>главная страница, страница магазина, страница товаров, страница корзины, страница
															оформления заказа и др;</li>
														<li>система управления контентом;</li>
														<li>доменное имя и хостинг на год.</li>
													</ul>
													<p>Сроки разработки: 7-10 дней.</p>
													<!--
													<div class="row">
														<div class="col-md-6">
															<h5 class="mb-3">Шаблонный дизайн</h5>
															<p>Подойдет тем, кто хочет быстро и с минимальными вложениями запустить свой бизнес или протестировать новую нишу.</p>
															<p>Стоимость создания от <strong>10 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>3-5 шаблонов дизайна на выбор;</li>
																<li>изменение имеющейся текстовой и графической информации в шаблоне на Вашу (тексты, картинки, контакты) без внесения изменения в стили сайта;</li>
																<li>подключение форм заказа и обратной связи;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 6 мес.</li>
															</ul>
															<p>Сроки разработки: 7-10 дней.</p>
														</div>
														<div class="col-md-6">
															<h5 class="mb-3">Уникальный дизайн</h5>
															<p>Подойдет тем, кто хочет подчеркнуть особую индивидуальность своего бизнеса, что бы получить максимальную отдачу на вложенные средства.</p>
															<p>Стоимость создания от <strong>20 000</strong> руб.</p>
															<p>В минимальную стоимость входит:</p>
															<ul>
																<li>маркетинговый анализ;</li>
																<li>подготовка технического задания;</li>
																<li>создание уникального и адаптивного дизайна;</li>
																<li>верстка и запуск сайта в работу;</li>
																<li>доменное имя на 1 год;</li>
																<li>хостинг на 12 мес.</li>
															</ul>
															<p>Сроки разработки: 10-14 дней.</p>
														</div>
													</div>
													-->
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Интернет магазин или каталог -->
							</div>
						</div> <!-- #carouselExampleControls -->
					</div>
				</div>
			</div>
		</section>


		<!-- SITE CREATE PORTFOLIO -->
		<section id="site-create-portfolio" class="text-light pt-5 pb-4">
			<div class="container">
				<div class="row">
					<div class="col px-md-0 pt-5">
						<div class="title-line mb-3"></div>
						<h2 class="text-light mb-0">Несколько моих последних работ</h2>
					</div>
				</div>
				<div class="row">
					<div class="col px-md-0">
						<div class="nav-scroller">
							<ul class="nav d-flex" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0 me-4 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
										role="tab" aria-controls="home" aria-selected="true">Одностраничые</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0 me-4" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
										role="tab" aria-controls="profile" aria-selected="false">Многостраничные</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link ps-0" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" role="tab"
										aria-controls="contact" aria-selected="false">Интернет магазины</a>
								</li>
							</ul>
						</div>
						<div class="d-md-none text-center"><img
								src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.png"
								style="opacity: 1; max-width: 25px;"></div>
						<div class="tab-content pt-5" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2022/himmel/PHP"
											target="_blank">
											<img
												src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-himmel-2.jpg"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Потолочные системы</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://хорошийдом.москва" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-26.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Ремонт квартир</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://interflat-spb.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-19.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели 1
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://гарантшкаф.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-15.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели 2
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2019/glyanets-potolki"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-23.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Натяжные потолки</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/портфолио/2020/himmelaero"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-24.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Реечные потолки</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://асгард62.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-16.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт бани, сауны</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="http://site100.ru/wp-content/themes/site100theme/портфолио/2019/auto-ryazan"
											target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-21.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Купля/продажа авто</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-18.png"
											class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт бара, бильярдной
										</h5>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://stock-line.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/stock-line.jpg"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Продажа пиломатериалов
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/unistyle-mebel/" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/unistyle-mebel.jpg"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство и продажа
											корпусной мебели</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://gyard.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-11.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Строительство коттеджей
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://pokrov-petrovichi.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-12.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Сайт храма</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://unistyle-spb.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-13.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство и продажа
											жалюзи</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/wp-content/themes/site100theme/portfolio/kvartet" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-17.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Производство мебели</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://marusya62.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-20.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Строительство деревянных
											домов</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://трудовой-резерв.рф" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-22.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Автошкола на спецтехнику
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://naers.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-25.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Клининговая компания</h5>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
								<div class="row pt-3">
									<div class="col-md-4 mb-5">
										<a href="https://site100.ru/site100-lumber/" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/stock-line.jpg"
												class="img-fluid mb-4 w-100" style="border-radius: 20px;">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Продажа пиломатериалов
										</h5>
									</div>
									<div class="col-md-4 mb-5">
										<a href="https://galaxyderm.ru" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/site-portfolio/site-portfolio-14.png"
												class="img-fluid mb-4 w-100">
										</a>
										<h5 style="font-family: var(--font-family); font-size: 24px; color: #fff;">Косметологическая
											компания</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE CREATE PORTFOLIO -->


		<!-- Site create oreder -->
		<section id="site-create-order">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-5 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/site-create-order-img.jpg"
							class="w-100 mb-5 mb-md-0">
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-10 col-md-5" style="position: relative;">
						<div class="order-line"></div>
						<p>Если Вы не совсем разобрались, какой сайт подойдет именно Вам, свяжитесь со мной любым удобным для Вас
							способом и я все подробно Вам расскажу.</p>
						<p id="order-button-1" class="mb-0" onmouseover="hovOrderButtonMouseover('order-arrow-1');"
							onmouseout="hovOrderButtonMouseout('order-arrow-1');" style="cursor: pointer; font-weight: 400;"
							data-bs-toggle="modal" data-bs-target="#modalOrder">Оставить заявку на консультацию<img
								src="<?php echo get_template_directory_uri(); ?>/img/ico/long-arrow-right.svg" id="order-arrow-1"
								class="ms-2" style="position: relative; left: 0; transition: .35s;"></p>
					</div>
				</div>
			</div>
		</section>


		<!-- SITE PROMOTION SECTION -->
		<div id="sp-promotion"></div>
		<section id="site-promotion-section" class="py-5">
			<div class="container px-md-0 py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="mb-5">Продвижение сайтов</h2>
						<div class="row">
							<div class="col-md-10">
								<p class="mb-0" style="font-size: 18px;">Занимаюсь продвижением сайтов с 2016 года. Помогаю своим
									клиентам увеличивать продажи, всегда работаю на результат! Создаю и поддерживаю рекламные кампании на
									Вашем аккаунте или регистрирую новый. У Вас будет полный доступ ко всем рекламным кампаниям и
									используемым сервисам.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container px-md-0 pb-5">
				<div class="row">
					<div class="col-md-4">
						<div class="card mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">01</div>
								<h3 class="card-title mb-3">Настройка контекстной рекламы в&#160;Яндекс.Директ
									от&#160;20&#160;000&#160;руб.</h3>
								<p>Подойдет тем, кто только запускает свой бизнес в интернете или хочет протестировать новую нишу.</p>
								<p><strong>В минимальную стоимость входит:</strong></p>
								<ul>
									<li
										title="Один из основных и важных этапов настройки контекстной рекламы в Яндекс.Директ. От количества и точности соответствия ключевых фраз Вашей ниши зависит эффективность рекламных кампаний.">
										подбор максимально подходящих для Вашей ниши ключевых запросов;
									</li>
									<li
										title="Минус-слова еще больше уточняют ключевые фразы и еще больше увеличивают эффективность рекламных кампаний.">
										тщательная проработка и уточнение ключевых запросов минус-словами;
									</li>
									<li
										title="Чем точнее ключевые фразы распределены по группам тем точнее рекламное объявление может ответить на запрос пользователя, а значит и выше вероятность что пользователя заинтересует Ваше объявление.">
										разбиение всех ключевых запросов на максимально релевантные (схожие по смыслу) группы;
									</li>
									<li
										title="Разные объявления повышают вероятность, что разных пользователей заинтересуют Ваши объявления">
										составление до 18 разных продающих объявлений для каждой группы ключевых запросов;
									</li>
									<li title="">настройка нескольких рекламных кампаний в Яндекс.Директ: для поиска, для РСЯ, ретаргетинг
										объявлений;</li>
									<li title="">корректировки ставок по полу, возрасту, устройствам, регионам показа и другой, именно
										Вашей, целевой аудитории;</li>
									<li
										title="Настройка временного и географического таргетинга позваляет показываться Вашей рекламе только там и только тогда, когда Ваши потенциальные клиенты смогут ее увидеть. Тем самым это позволяет сэкономить рекламный бюджет.">
										настройка географического и временного таргетинга выхода объявлений;
									</li>
									<li title="">добавление быстрых и отображаемых ссылок, уточнений, цен, каталога товаров или услуг и
										всех других опций объявления;</li>
									<li title="Позволяет получить статистику для оценки эффективности и окупаемости рекламной компании.">
										подключение счетчика Яндекс.Метрики и создание целей;
									</li>
									<li title="">создание виртуальной визитки или организации в Яндекс.Справочнике;</li>
									<li title="">2-4 недели сопровождения для контроля и повышения эффективности.</li>
								</ul>
								<p><strong>Сроки настройки: 3-4 дня.</strong></p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								<h3 class="card-title mb-3">Ведение контекстной рекламы от&#160;10&#160;000&#160;руб/мес.</h3>
								<p class="card-text">
									<!--Подойдет тем, кто хочет получить максимальную отдачу от вложенных средств.-->Подойдет тем, кто не
									хочет останавливаться на достигнутом, а стремится развиваться и увеличивать отдачу от вложенных
									средств.
								</p>
								<p class="fw-normal">В минимальную стоимость входит:</p>
								<ul>
									<li title="">анализ трафика по показателю отказов;</li>
									<li title="">«чистка» трафика добавлением минус слов;</li>
									<li title="">анализ эффективности ключевых запросов/групп по стоимости заявки;</li>
									<li title="">отключение ключевых фраз/групп или корректировки ставок в зависимости от эффективности;
									</li>
									<li title="">корректировка ставок по полу, возрасту, мобильным устройствам, времени, целевой
										аудитории;</li>
									<li title="">настройка автоматической корректировки ставок;</li>
									<li title="">добавление новых кампаний, групп ключевых фраз, новых объявлений и др;</li>
									<li title="">мониторинг выхода и позиций объявлений;</li>
									<li title="">А/Б тестирование рекламных кампаний, групп объявлений, ключевых фраз.</li>
								</ul>
								<p>Сроки проведения: от 1 дня.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<h3 class="card-title mb-3">SEO оптимизация от&#160;10&#160;000&#160;руб/мес.</h3>
								<p class="card-text">Подойдет тем, кто хочет привлечь на свой сайт дополнительный, более дешевый в
									долгосрочной перспективе, трафик.</p>
								<p>В минимальную стоимость входит:</p>
								<ul>
									<li>сбор семантического ядра;</li>
									<li>добавление ключевых фраз в основные теги h1, h2, h3, title, a, i, strong и др;</li>
									<li>добавление основных метатегов (title, description, property и др.);</li>
									<li>повышение скорости загрузки сайта;</li>
									<li>добавление сайта в Яндекс.Справочник, Google Business;</li>
									<li>размещение информации о компании и ссылки на сайт в других справочниках и каталогах, подходящих по
										смыслу;</li>
									<li>написание SEO текстов, подготовка и размещение на сайте другого SEO контента;</li>
									<li>ведение блога;</li>
									<li>другие работы.</li>
								</ul>
							</div>
						</div>
					</div>

					<!--
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								
								
								
								<ul>
									
									
									<li>добавление основных метатегов (title, description, property и др.);</li>
									<li>повышение скорости загрузки сайта;</li>
									<li>добавление сайта в Яндекс.Справочник, Google Business;</li>
									<li>размещение информации о компании и ссылки на сайт в других справочниках и каталогах подходящих по смыслу;</li>
									<li>написание сео текстов, подготовка и размещение на сайте другого сео контента;</li>
									<li>ведение блога;</li>
									<li>другие работы.</li>
								</ul>
								<p>Время работ: 2-3 дня в течении месяца.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<h3 class="card-title mb-3">Комплексное продвижение от 9 000 руб/мес.</h3>
								<p class="card-text">Подойдет тем, кто хочет получить максимальную отдачу на вложенные средства.</p>
								<p>В минимальную стоимость входит:</p>
								<ul>
									<li>маркетинговый анализ для улучшения конверсионных показателей сайта;</li>
									<li>настройка контекстной рекламы;</li>
									<li>сео-оптимизация сайта;</li>
									<li>работы необходимые для поддержки сайта в рабочем состоянии;</li>
									<li>разработка дополнительных блоков, разделов, страниц сайта;</li>
									<li>другие работы по верстке и программированию необходимые для увеличения конверсии сайта;</li>
									<li>подключение CMS (системы управления сайтом), CRM (системы учета и взаимоотношений с клиентами);</li>
									<li>подключение сервисов сквозной аналитики.</li>
								</ul>
								<p>Время работ: 2-3 дня в течении месяца.</p>
							</div>
						</div>
					</div>
					-->

				</div>
			</div>
		</section>
		<!-- END SITE PROMOTION SECTION -->


		<!-- SITE PROMOTION PORTFOLIO -->
		<section id="site-promotion-portfolio" class="text-light py-5">
			<div class="container px-md-0 py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col offset-md-2">
						<div class="title-line mb-3"></div>
						<h2 class="text-light">Результаты по продвижению и контекстной рекламе</h2>
					</div>
				</div>
			</div>
			<div class="container px-md-0" style="overflow: hidden;">
				<div class="row">
					<div class="col">

						<div id="site-promotion-portfolio-carousel" class="carousel slide" data-bs-ride="carousel"
							data-bs-interval="60000">
							<div class="carousel-inner">

								<!-- Portfolo 1 -->
								<div id="promotion-portfolio-carousel-item-1" class="carousel-item active">
									<div class="row justify-content-end">
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт компании провайдера</h5>
														<a href="https://site100.ru/portfolio/vybor/" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-1.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>

								<!-- Portfolo 2 -->
								<div id="portfolio-carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-1.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт храма</h5>
														<a href="https://pokrov-petrovichi.ru" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>

								<!-- Portfolo 3 -->
								<div id="portfolio-carousel-item-2" class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-2.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Сайт храма</h5>
														<a href="https://pokrov-petrovichi.ru" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg);">
											</div>
										</div>
										<div class="col-md-1 col-lg-2 offset-lg-1">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-4.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio 3 -->

								<!-- Portfolo 4 -->
								<div id="portfolio-carousel-item-5" class="carousel-item">
									<div class="row justify-content-start">
										<div class="col-md-1 col-lg-2">
											<div
												style="background: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-3.jpg); height: 100%; background-size: cover; opacity: .5;">
											</div>
										</div>
										<div class="col-md-10 col-lg-1">
											<div class="row align-items-center row-portfolio-description">
												<div class="col">
													<div class="portfolio-description promotion-portfolio-description">
														<h3 class="text-light mb-5">Настройка и ведение Яндекс.Директ</h3>
														<!--h5 class="text-light">Интернет каталог магазина автозапчастей</h5>
														<a href="http://logan-shop62.ru/" target="_blank" class="text-light"><h3 class="text-light mb-5">Посмотреть сайт</h3></a-->
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-lg-6">
											<div class="portfolio-bg"
												style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/site-portfolio/yandex-direct-portfolio-4.jpg);">
											</div>
										</div>
									</div>
								</div>

							</div> <!-- carousel-inner -->
							<div class="container">
								<div class="row justify-content-center">
									<div class="col-6" style="height: 100px; position: relative;">
										<button id="carousel-sites-create-portfolio-control-prev" class="carousel-control-prev"
											type="button" data-bs-target="#site-promotion-portfolio-carousel" data-bs-slide="prev">
											<!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left-light.svg"
													class="ms-3"></span>
										</button>
										<button id="carousel-sites-create-portfolio-control-next" class="carousel-control-next"
											data-bs-target="#site-promotion-portfolio-carousel" type="button" data-bs-slide="next">
											<!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
											<span class="carousel-control-text"><img
													src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right-light.svg"
													class="me-3"></span>
										</button>
									</div>
								</div>
							</div>
						</div> <!-- #site-promotion-portfolio-carousel -->
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE PROMOTION PORTFOLIO -->


		<!-- SITE SUPPORT PORTFOLIO -->
		<div id="sp-support"></div>
		<section id="site-support-section" class="pt-5">
			<div class="container px-md-0 pt-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="mb-5">Поддержка сайтов</h2>
						<div class="row">
							<div class="col-md-10">
								<p class="mb-5" style="font-size: 18px;">Если у Вас уже есть сайт, но нет технического специалиста,
									который его обслуживает или этот специалист чем-то Вас не устраивает (низкое качество, высокая
									стоимость, нарушение сроков и т.п.), то я предлагаю Вам воспользоваться моими услугами по поддержке
									сайта.</p>
								<h3 class="mb-3" style="font-size: 1.125rem;">Чем я могу быть Вам полезен:</h3>
								<p class="mb-5" style="font-size: 18px;">Внедрю на сайт новые блоки и функционал по мере его развития,
									помогу с обновлением контента в активных разделах, разберусь с техническими проблемами, подключу
									необходимые сервисы и др. Со мной Ваш сайт всегда будет в отличной форме!</p>
							</div>
						</div>
						<h3 class="mb-5" style="font-size: 1.125rem;">Некоторые популярные работы по поддержке сайта, которые я
							делаю:</h3>
						<div class="row">
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">01</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">сбор (создание) и наполнение сайта контентом - от&#160;500&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">02</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">создание дополнительных блоков, страниц, функций сайта -
											от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">03</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">наполнение товарами интернет магазина - от&#160;500&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">04</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">подключение системы управления сайтом (CMS) - от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">05</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">исправление ошибок, увеличение скорости загрузки - от&#160;1&#160;000&#160;руб;
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">06</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">программирование скриптов, добавление анимации - от&#160;1&#160;000&#160;руб;
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">07</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">подключение онлайн оплаты (эквайринг) - от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">08</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с CRM (Битрикс24, amoCRM) - от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">09</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с Яндекс.Маркет и другими маркетплейсами -
											от&#160;8&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center">
									<div class="col-3 col-md-2">
										<div class="support-service-number">10</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">интеграция с сервисами доставки (Деловые линии, Почта России, СДЭК и др.) -
											от&#160;4&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">11</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">создание дизайна, редизайна - от&#160;1&#160;000&#160;руб;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">12</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">верстка дизайна по макету - от&#160;1&#160;000&#160;руб.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">13</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">заполнение данных организации в сервисе Яндекс.Бизнес -
											от&#160;4&#160;000&#160;руб.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">14</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">аудит сайта - <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 pb-5">
								<div class="row align-items-center pb-3">
									<div class="col-3 col-md-2">
										<div class="support-service-number">15</div>
									</div>
									<div class="col-9 col-md-8">
										<p class="card-text">аудит рекламной компании в Яндекс.Директ - <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
						</div>
						<p class="mb-3" style="font-size: 1.125rem; font-weight: normal;">Стоимость других работ по поддержке сайта:
						</p>
						<ul class="mb-5">
							<li><span style="font-weight: bold;">600</span> руб./час. (если общая сумма работ
								от&#160;15&#160;000&#160;руб);</li>
							<li><span style="font-weight: bold;">700</span> руб./час. (если общая сумма работ
								от&#160;5&#160;000&#160;руб);</li>
							<li><span style="font-weight: bold;">800</span> руб./час. (если общая сумма работ
								до&#160;5&#160;000&#160;руб).</li>
						</ul>

						<h3 class="mb-5" style="font-size: 1.125rem;">Технологии, необходимые для технической поддержки сайта, в
							которых я хорошо разбираюсь:</h3>
						<div class="row">
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">01</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">HTML5;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">02</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">CSS3;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">03</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">SASS;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">04</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">BEM (методология);</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">05</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">Bootstrap 5;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">06</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">JavaScript;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">07</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">jQuery;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">08</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">PHP 7;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">09</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">ООП;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row">
									<div class="col-3 col-md-3">
										<div class="support-service-number">10</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">MySQL;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row pb-3">
									<div class="col-3 col-md-3">
										<div class="support-service-number">11</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">WordPress;</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 pb-5">
								<div class="row pb-3">
									<div class="col-3 col-md-3">
										<div class="support-service-number">12</div>
									</div>
									<div class="col-9 col-md-7">
										<p class="card-text">WooCommerce.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Site support oreder -->
		<section id="site-support-order">
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-5 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/site-support-order-img.jpg"
							class="w-100 mb-5 mb-md-0">
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-10 col-md-5" style="position: relative;">
						<div class="order-line"></div>
						<p>Не нашли нужную услугу? Свяжитесь со мной любым удобным для Вас способом. Я обязательно Вам отвечу на
							Ваши вопросы.</p>
						<p id="order-button-3" class="mb-0" onmouseover="hovOrderButtonMouseover('order-arrow-3');"
							onmouseout="hovOrderButtonMouseout('order-arrow-3');" style="cursor: pointer; font-weight: 400;"
							data-bs-toggle="modal" data-bs-target="#modalOrder">Оставить заявку на консультацию<img
								src="<?php echo get_template_directory_uri(); ?>/img/ico/long-arrow-right.svg" id="order-arrow-3"
								class="ml-2" style="position: relative; left: 0; transition: .35s;"></p>
					</div>
				</div>
			</div>
		</section>
		<!-- END SITE SUPPORT PORTFOLIO -->


		<!-- ABOUT ME -->
		<div id="sp-about"></div>
		<section id="about-section" class="pb-5">
			<div class="container px-md-0 py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2>Обо мне</h2>
					</div>
				</div>
			</div>
			<div class="container px-md-0">
				<div class="row align-items-center">
					<div class="col-6 offset-3 col-md-4 offset-md-1 pb-5 pb-md-0 text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/about-img.jpg" class="w-100">
					</div>
					<div class="col-md-5 offset-md-1">
						<p style="font-size: 18px; line-height: 28px;">Всем привет! Меня зовут Роман. С 2016 года я занимаюсь
							созданием, продвижением и поддержкой сайтов. Мои клиенты - это небольшие компании и индивидуальные
							предприниматели с ограниченными рекламными бюджетами, поэтому я делаю не дорогие, но качественных сайты и
							интернет магазины, а также занимаюсь их поддержкой и продвижением. Все мои сайты сделаны с адаптивным
							дизайном, который удобно смотреть с любого устройства, а средняя стоимость их создания варьируется от 5
							000 до 15 000 рублей.</p>
						<p style="font-size: 18px; line-height: 28px;">Если Вас интересует создание недорогого, качественного сайта
							в кратчайшие сроки или продвижение такого сайта — свяжитесь со мной любым удобным для Вас способом.
							Уверен, что я могу принести пользу Вашему бизнесу!
						<p>
					</div>
				</div>
			</div>
		</section>
		<!-- END ABOUT ME -->


		<!-- ADVANTAGES -->
		<div id="sp-advantages"></div>
		<section id="advantages-section" class="py-5">
			<div class="container px-md-0 py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2 class="text-light">Мои преимущества</h2>
					</div>
				</div>
			</div>
			<div class="container px-md-0">
				<div class="row">
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">01</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">У меня одни из самых низких цен на создание сайтов в Москве и Московской области —
									от 5 000 рублей за сайт с уникальным и адаптивным дизайном.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">02</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Я всегда на связи. Очень часто даже вне рабочее время. Я готов встретиться с Вами
									лично в любом районе Москвы или подъехать к Вам в офис.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">03</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Опыт работы в сфере создания и продвижения сайтов с 2016 года. В моем опыте есть
									решения сложных, нестандартных и объемных задач, например таких, как интеграция сайта с 1С, CRM,
									сервисами оплаты (Сбербанк, Альфа банк) и доставки (СДЭК, Почта России, Деловые линии), подключение
									интернет магазина к Яндекс.Маркету.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">04</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Вам не придется обращаться к нескольким специалистам, потому что я знаю все
									необходимые технологии для качественного создания, поддержки и продвижения сайтов и интернет магазинов
									(HTML 5, CSS 3, Sass, Bootstrap 5, JavaScript, jQuery, PHP 7, WordPress, WooCommerce, Yandex Direct,
									Google Ads, SEO и др).</p>
							</div>
						</div>
					</div>

					<!--
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">01</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Опыт работы в сфере создания сайтов с 2016 года. Опыт работы в сфере маркетинга и продаж с 2008 года.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">02</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Я всегда на связи. Очень часто даже вне рабочее время. Даже если я не успеваю что-то сделать по срокам, я не пропадаю, а беру трубку и честно объясняю, как обстоят дела на текущий момент.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">03</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Знание полного стека технологий для быстрого и качественного создания и успешного продвижения сайта (HTML 5, CSS 3, Sass, Bootstrap 5, JavaScript, jQuery, PHP 7, WordPress, Woocommerce, Yandex Direct, Google Ads, SEO и др.). Опыт в интеграции онлайн оплаты, с сервисами доставки, с CRM.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-5 pb-5">
						<div class="row">
							<div class="col-3 col-md-2">
								<div class="support-service-number">04</div>
							</div>
							<div class="col-9 col-md-8">
								<p class="card-text">Имею возможность решения сложных, не стандартных и объемных задач. Если у меня нет возможности решить поставленную задачу, я всегда могу перепоручить задачу или часть задачи своим коллегам из любых сфер веб разработки</p>
							</div>
						</div>
					</div>
					-->

				</div>
			</div>
		</section>
		<!-- END ADVANTAGES -->


		<!-- PROCESS -->
		<div id="sp-process"></div>
		<section id="site-process-section" class="py-5">
			<div class="container px-md-0 py-5" style="overflow: hidden;">
				<div class="row">
					<div class="col">
						<div class="title-line mb-3"></div>
						<h2>Как я работаю</h2>
					</div>
				</div>
			</div>
			<div class="container px-md-0">
				<div class="row justify-content-center">
					<div class="col-md-4 pb-5">
						<div class="card mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">01</div>
								<p class="card-text mt-2">Вы связываетесь со мной любым удобным для Вас способом. Объясняете, какой сайт
									Вы хотите. Договариваемся по цене и срокам. При необходимости возможно встретиться лично.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">02</div>
								<p class="card-text mt-2">Я изучаю сферу Вашего бизнеса. Смотрю сайты Ваших коллег и конкурентов. Создаю
									новый уникальный дизайн, подчеркивая все преимущества Вашего бизнеса.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">03</div>
								<p class="card-text mt-2">Верстаю страницы сайта. Добавляю эффекты. Устанавливаю систему управления
									сайтом. Переношу на хостинг. Запускаю и проверяю работу сайта.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">04</div>
								<p class="card-text mt-2">Настраиваю контекстную рекламу. Добавляю в справочники, каталоги по смыслу, в
									другие источники. Оптимизирую код. Исследую результаты. Веду работу по улучшению результатов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 pb-5">
						<div class="card w-100 mt-5 mt-md-3">
							<div class="card-body">
								<div class="promotion-service-number">05</div>
								<p class="card-text mt-2">При необходимости настраиваю интеграцию с CRM, c сервисами доставки,
									настраиваю онлайн оплату.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END PROCESS -->
	</main>


	<!-- FOOTER -->
	<div id="contacts-sp"></div>
	<footer class="footer">
		<div class="container pt-5 pb-3 d-none d-xl-block">
			<div class="row align-items-center">
				<div class="col-xl-3">
					<a href="#">
						<a class="navbar-brand" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					</a>
				</div>
				<div class="col-xl-6">
					<ul class="footer-menu nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.html" data-target="main-page">Главная</a>
						</li>
						<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-target="services-dropdown">
									Услуги
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#" data-target="service-web">создание сайтов</a></li>
									<li><a class="dropdown-item" href="#" data-target="service-promotion">продвижение сайтов</a></li>
									<li><a class="dropdown-item" href="#" data-target="service-support">поддержка сайтов</a></li>
									<li><a class="dropdown-item" href="kitchen.html" data-target="service-kitchen">клиенты на корпусную мебель</a></li>
								</ul>
							</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/blog/'); ?>" data-target="blog-page">Блог</a>
						</li>
						<li class="nav-item">
							<a class="nav-link last" href="#contacts-sp" data-target="contacts-page">Контакты</a>
						</li>
					</ul>
				</div>
				<div class="col-xl-3 text-end">
					<a href="tel:‪89307878068" class="contacts-phone fw-semibold">‪
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" class="me-2"
							style="position: relative; bottom: 1px;">+7 <span class="color-red">(930)</span> 78-78-0-68‬
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col py-5">
					<ul class="nav justify-content-center align-items-center">
						<li class="nav-item me-1 me-lg-2">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>гор. Москва,<br>ул. Митинская, д. 43</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a class="nav-link" href="#">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Без выходных<br>с 9:00 до 21:00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a href="mailto:vasilyev-r@mail.ru" class="nav-link">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>vasilyev-r@mail.ru</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item me-1 me-lg-2">
							<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Обратный звонок</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link ico-button px-2" href="https://wa.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button px-3" href="https://t.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container d-xl-none">
			<div class="row">
				<div class="col pt-5 pb-0 pb-xl-5">
					<a href="#">
						<a class="navbar-brand" href="https://site100.ru">site<span class="text-danger">100</span>.ru</a>
					</a>
					<ul class="ps-0 pt-3 pb-2 list-unstyled">
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 pb-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>гор. Москва, ул. Митинская, д. 43</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 py-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" class="pt-1">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Пн-Вс, с 9:00 до 21:00</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="mailto:vasilyev-r@mail.ru" class="nav-link ps-0 py-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>vasilyev-r@mail.ru</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 pt-1" data-bs-toggle="modal" data-bs-target="#callbackModal">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Обратный звонок</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link ps-0 pt-1">
								<div style="display: flex;" class="align-items-center">
									<div class="nav-li-float-left">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/calculator.svg">
									</div>
									<div class="nav-li-float-right link-item">
										<span>Рассчитать стоимость</span>
									</div>
									<div style="clear: both;"></div>
								</div>
							</a>
						</li>
					</ul>
					<a href="tel:‪89307878068" class="contacts-phone">
						<div style="display: flex;" class="align-items-center">
							<div class="nav-li-float-left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg"
									style="position: relative; bottom: 1px;">
							</div>
							<div class="nav-li-float-right phone-link">
								+7 <span>(930)</span> 78-78-0-68
							</div>
							<div style="clear: both;"></div>
						</div>
					</a>
					<ul class="nav pt-4 pb-3">
						<li class="nav-item">
							<a class="nav-link ico-button ps-0 pe-2" href="https://wa.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg">
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button px-2" href="https://t.me/79307878068" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg">
							</a>
						</li>
					</ul>
					<div class="row">
						<div class="col-6">
							<ul class="nav flex-column">
								<li class="nav-item dropdown">
									<a class="nav-link ps-0 active" aria-current="page" href="<?php echo site_url('/'); ?>">Главная</a>
								</li>
								<li class="nav-item">
									<a class="nav-link ps-0" href="<?php echo site_url('/blog/'); ?>">Блог</a>
								</li>
							</ul>
						</div>
						<div class="col-6">
							<ul class="nav flex-column">
								<!--li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle arrow-element" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Услуги
										</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="#">создание сайтов</a></li>
											<li><a class="dropdown-item" href="#">продвижение сайтов</a></li>
											<li><a class="dropdown-item" href="#">поддержка сайтов</a></li>
											<li><a class="dropdown-item" href="https://site100.ru/wp-content/themes/site100-theme/%D0%BF%D0%BE%D1%80%D1%82%D1%84%D0%BE%D0%BB%D0%B8%D0%BE/2024/gaziza/2-g/kitchen.html">клиенты на корпусную мебель</a></li>
										</ul>
									</li-->
								<li class="nav-item">
									<a class="nav-link last" href="#contacts-sp">Контакты</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr class="footer-hr" style="border: none; background-color: #7D7D7D; height: 1px">
		<div class="footer-bottom-block container">
			<p class="footer-bottom-text text-start text-sm-center mb-0">Создание, продвижение и поддержка сайтов: <a
					href="https://site100.ru">site100.ru</a></p>
		</div>

	</footer>


	</section>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const menuItems = document.querySelectorAll('.nav-link[data-target]');


			function setActiveMenuItem() {
				// Получаем путь к текущей странице
				const currentPath = window.location.pathname;

				// Удаляем класс active у всех элементов меню
				//   menuItems.forEach(el => {
				//     el.classList.remove('active');
				//     if (el.parentElement.classList.contains('dropdown')) {
				//         el.classList.remove('active');
				//     }
				//   });

				// Ищем пункт меню, data-target которого соответствует текущему пути
				menuItems.forEach(item => {
					const target = item.getAttribute('data-target');
					if (currentPath.startsWith(target)) {
						document.querySelectorAll(`[data-target="${target}"]`).forEach(el => {
							el.classList.add('active');
							if (el.parentElement.classList.contains('dropdown')) {
								el.classList.add('active');
							}
						});
					}
				});
			}

			// Изначально устанавливаем активный пункт
			setActiveMenuItem();

			// Слушаем событие popstate (для кнопок назад/вперед)
			window.addEventListener('popstate', setActiveMenuItem);


		});
	</script>

	<script>
		let prev = document.getElementById('carousel-sites-create-control-prev');
		let next = document.getElementById('carousel-sites-create-control-next');
		let item_1 = document.getElementById('carousel-item-1');
		let item_2 = document.getElementById('carousel-item-2');
		let item_3 = document.getElementById('carousel-item-3');

		if (item_1.classList.contains('active') == true) {
			prev.classList.add("disabled");
		}

		function setNextService() {

			if (item_1.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");

			} else if (item_2.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.add("disabled");

			} else if (item_3.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");
			}
		}

		function setPrevService() {

			if (item_1.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");

			} else if (item_2.classList.contains('active') == true) {
				prev.classList.add("disabled");
				next.classList.remove("disabled");

			} else if (item_3.classList.contains('active') == true) {
				prev.classList.remove("disabled");
				next.classList.remove("disabled");
			}
		}
	</script>

	<!--
		<div class="row justify-content-center">
			<div class="col my-3">
				<form method="post" action="mails/mail_2.php">
					<div class="input-group">
						<input id="phone_mask_2" name="tel" type="text" class="form-control phone_mask_2" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" required>
						<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		-->


	<!-- Callback Modal -->
	<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="callbackModalLabel">Заказать звонок</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="https://site100.ru/wp-content/themes/site100-theme/mails/callback-mail.php">
						<p><input type="text" name="name" class="form-control" placeholder="Имя"></p>
						<p><input type="text" id="phone_mask_1" name="tel" class="form-control phone_mask_1" required></p>
						<button type="submit" class="btn btn-danger" style="width: 100%;">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div> <!-- /Modal callback -->


	<!-- Modal order -->
	<div class="modal fade" id="modalOrder" tabindex="-1" aria-labelledby="modalOrderLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalOrderLabel">Заявка на консультацию</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form method="post" action="https://site100.ru/wp-content/themes/site100-theme/mails/mail_2.php">
						<p><input type="text" name="name" class="form-control" placeholder="Имя"></p>
						<p><input type="text" id="phone_mask_2" name="tel" class="form-control phone_mask_2" required></p>
						<button type="submit" class="btn btn-danger" style="width: 100%;">Оставить заявку</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Messengers 2 --
		<div class="messengers-2" style="position: fixed; width: 70px; height: 70px; bottom: 80px; right: 0;">
			<div id="messengers-2-button" class="rounded-start" onclick="clickMessengers2Button();">
			
			</div>
			<div id="messenger-1" class="rounded-circle">
				<a href="whatsapp://send?phone=+79307878068"><img src="https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp.png"></a>
			</div>
			<div id="messenger-2" class="rounded-circle">
				<a href="tg://resolve?domain=vasilyevr"><img src="https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/telegram.png"></a>
			</div>
		</div>
		
		<script>
			function clickMessengers2Button() {
				var mes1Right = document.getElementById('messenger-1').style.right;
				var mes2Right = document.getElementById('messenger-2').style.right;
				if ( mes1Right == "0px" || mes1Right == 0 ) {
					document.getElementById('messenger-1').style.right = "80px";
					document.getElementById('messenger-2').style.right = "160px";
					document.getElementById('messengers-2-button').style.background = "url(https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/close-icon.png) center";
					document.getElementById('messengers-2-button').style.backgroundSize = "contain";
				} else {
					document.getElementById('messenger-1').style.right = "0px";
					document.getElementById('messenger-2').style.right = "0px";
					document.getElementById('messengers-2-button').style.background = "url(https://site100.ru/wp-content/themes/site100-theme/<?php echo get_template_directory_uri(); ?>/img/ico/messenger.png) center";
					document.getElementById('messengers-2-button').style.backgroundSize = "contain";
				}
			}
		</script>
		

		<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->

	<!-- For phone mask -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"
		type="text/javascript"></script>

	<!-- Messengers button JS -->
	<script src="https://site100.ru/wp-content/themes/site100-theme/js/messengers-button.js"></script>

	<!-- For second option -->
	<script>
		$.mask.definitions['9'] = false;
		$.mask.definitions['_'] = "[0-9]";
		document.getElementById('phone_mask_1').placeholder = "+7(___)___-__-__";
		$(".phone_mask_1").mask("+7(___)___-__-__");

		$.mask.definitions['9'] = false;
		$.mask.definitions['_'] = "[0-9]";
		document.getElementById('phone_mask_2').placeholder = "+7(___)___-__-__";
		$(".phone_mask_2").mask("+7(___)___-__-__");
	</script>

	<script>
		/* Убираем сообщение об успешной отправки */
		function f1() {
			document.getElementById('background-msg').style.display = 'none';
			document.getElementById('message').style.display = 'none';
		}
	</script>

	<script>
		window.addEventListener('scroll', function () {
			const menu = document.querySelector('.fixed-menu');
			const trigger = document.getElementById('site-create-section');
			const toAppear = trigger.getBoundingClientRect().top;
			const windowWidth = window.innerWidth;

			if (windowWidth >= 992) {
				if (toAppear <= 0) {
					menu.classList.add('show');
					menu.style.zIndex = 1000;
				} else {
					menu.classList.remove('show');
					menu.classList.add('menu-z')
				}
			}
		});

	</script>


	<!-- Site create portfolio carousel -->
	<!--script>
			let port_prev = document.getElementById('carousel-sites-create-portfolio-control-prev');
			let port_next = document.getElementById('carousel-sites-create-portfolio-control-next');
			let port_item_1 = document.getElementById('portfolio-carousel-item-1');
			let port_item_2 = document.getElementById('portfolio-carousel-item-2');
			let port_item_3 = document.getElementById('portfolio-carousel-item-3');
			let port_item_4 = document.getElementById('portfolio-carousel-item-4');
			let port_item_5 = document.getElementById('portfolio-carousel-item-5');
			let port_item_6 = document.getElementById('portfolio-carousel-item-6');
			let port_item_7 = document.getElementById('portfolio-carousel-item-7');
			let port_item_8 = document.getElementById('portfolio-carousel-item-8');
			let port_item_9 = document.getElementById('portfolio-carousel-item-9');
			let port_item_10 = document.getElementById('portfolio-carousel-item-10');
			
			if ( item_1.classList.contains('active') == true ) {
				port_prev.classList.add("disabled");
			}
			
			function setNextPortfolio() {
				
				if ( port_item_1.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_2.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_3.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_4.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_5.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_6.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_7.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_8.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_9.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.add("disabled");
				
				} else if ( port_item_10.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				}
			}
			
			function setPrevPortfolio() {
				
				if ( port_item_1.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_2.classList.contains('active') == true ) {
					port_prev.classList.add("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_3.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_4.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_5.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_6.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_7.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_8.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
					
				} else if ( port_item_9.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				
				} else if ( port_item_10.classList.contains('active') == true ) {
					port_prev.classList.remove("disabled");
					port_next.classList.remove("disabled");
				}
			}
		</script-->

	<!-- Order button response -->
	<script>
		function hovOrderButtonMouseover(paramOrderArrow) {
			let orderArrow = paramOrderArrow;
			document.getElementById(orderArrow).style.left = '15px';
		}

		function hovOrderButtonMouseout(paramOrderArrow) {
			let orderArrow = paramOrderArrow;
			document.getElementById(orderArrow).style.left = '0';
		}
	</script>
</body>

</html>