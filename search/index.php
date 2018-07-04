<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск картриджа");
?>
<div class="content">
		<div class="page-title">
			Найти картридж
			<p>Если вам известна модель принтера, воспользуйтесь поиском, указав Производителя и Модель устройства.
				Если нет — используйте подбор по шагам.</p>
			</div>
			<form action="#">
				<div class="search-block">
					<div class="simple">
						<input type="text" class="simple-input" placeholder="Укажите производителя и модель устройства (Например HP A86)">
					</div>
					<!--div class="advanced">
						<div class="selects">
							<select id="select-brend" placeholder="Выберите бренд">
								<option value="">Выберите бренд</option>
								<option value="1">Бренд</option>
								<option value="2">Бренд</option>
								<option value="3">Бренд</option>
								<option value="4">Бренд</option>
							</select>
							<select id="select-seria" placeholder="Выберите серию">
								<option value="">Выберите серию</option>
								<option value="1">Бренд</option>
								<option value="2">Бренд</option>
								<option value="3">Бренд</option>
								<option value="4">Бренд</option>
							</select>
							<select id="select-model" placeholder="Выберите модель">
								<option value="">Выберите модель</option>
								<option value="1">Бренд</option>
								<option value="2">Бренд</option>
								<option value="3">Бренд</option>
								<option value="4">Бренд</option>
							</select>
						</div>
						<div class="search-button">
							<a class="sml-btn" href="#">Упрощенный поиск</a>
						</div>
					</div-->
					<div class="submit-block">
						<a href="#">Найти</a>
						<a class="mobile-btn" href="#">Найти картридж</a>
					</div>
				</div>
				<div class="step one" id="searchChoices">
					<div class="step-title modifi-title">
						<a href="#0" data-state="cur" class="search-step s-brend">
							Производитель
						</a>
						<span>&#8594;</span>
						<a href="#1" class="search-step s-device">
							Устройство
						</a>
						<span>&#8594;</span>
						<a href="#2" class="search-step s-type">
							Тип
						</a>
						<span>&#8594;</span>
						<a href="#3" class="search-step s-model">
							Модель
						</a>
					</div>
					<div class="step-content">
						<div class="brend-content">
							<div class="brend-title">
								Выберите устройство
							</div>
							<div class="owl-carousel owl-theme" id="searchSteps">
								<div class="step-item brend-list" data-hash="0">
									<div class="brend-item"><a href="#1" data-name="alficio">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/1.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1" data-name="brother">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/2.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1" data-name="Canon">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/3.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1" data-name="Epson">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/4.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1" data-name="HP">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/5.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1" data-name="Kyocera">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/6.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/7.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/8.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/9.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/10.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/11.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/12.png" 7alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/13.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/14.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/15.png" alt="">
									</a></div>
									<div class="brend-item"><a href="#1">
										<div class="brend-mast"></div>
										<img src="<?=SITE_TEMPLATE_PATH?>/images/brends/16.png" alt="">
									</a></div>
								</div>
								<div class="step-item device-list selectDevice" data-hash="1">
									<a href="#2" class="device-item">
										<img class="device-img" src="<?=SITE_TEMPLATE_PATH?>/images/icon-print.png">
										<div class="device-name">Принтер</div>
										<div class="device-text">Предназначен для перевода текста или графики на бумагу малыми тиражами</div>
									</a>
									<a href="#2" class="device-item">
										<img class="device-img" src="<?=SITE_TEMPLATE_PATH?>/images/icon-mfu.png">
										<div class="device-name">МФУ</div>
										<div class="device-text">Копировальный аппарат с дополнительными функциями принтера, сканера, факсимильного устройства</div>
									</a>
								</div>
								<div class="step-item device-list selectType" data-hash="2">
									<a href="#3" class="device-item">
										<img class="device-img" src="<?=SITE_TEMPLATE_PATH?>/images/water.png">
										<div class="device-name">Струйный</div>
										<div class="device-text">Тот, который засыхает</div>
									</a>
									<a href="#3"class="device-item">
										<img class="device-img" src="<?=SITE_TEMPLATE_PATH?>/images/laser.png">
										<div class="device-name">Лазерный</div>
										<div class="device-text">Большие прямоугольные картриджи
										</div>
									</a>
								</div>
								<div class="step-item device-list models-list" data-hash="3">
									<div class="device-item">
										<ul>
											<li><span>Stylus Photo RX600</span></li>
											<li><span>Stylus Photo RX620</span></li>
											<li><span>Stylus CX5200</span></li>
											<li><span>Stylus CX6400</span></li>
											<li><span>Stylus CX5400</span></li>
										</ul>
									</div>
									<div class="device-item">
										<ul>
											<li><span>Stylus CX4300</span></li>
											<li><span>Stylus CX8300</span></li>
											<li><span>Stylus CX7300</span></li>
											<li><a href="#">Stylus Photo RX690</a></li>
											<li><a href="#">Stylus CX9300F</a></li>
										</ul>
									</div>
									<div class="device-item">
										<ul>
											<li><a href="#">Stylus TX200</a></li>
											<li><a href="#">Stylus TX209</a></li>
											<li><a href="#">Stylus TX409</a></li>
											<li><a href="#">Stylus TX106</a></li>
											<li><a href="#">Stylus TX410</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="step result animated flipInX" id="searchResult">
					<div class="count">
						<div class="count-item">
							<div class="count-image"><img src="<?=SITE_TEMPLATE_PATH?>/images/tovar.png" alt=""></div>
							<div class="count-name">Картридж Brother TN-2135<span>Черный, 1200 страниц</span></div>
							<div class="f-right">
								<a href="#" class="btn-refill">Заправить на <span>500 руб.</span></a>
								<a href="#" class="btn-price">Купить <span>1 200 руб.</span></a>
							</div>
						</div>
						<div class="count-item">
							<div class="count-image"><img src="<?=SITE_TEMPLATE_PATH?>/images/tovar.png" alt=""></div>
							<div class="count-name">Картридж Brother TN-2135<span>Черный, 1200 страниц</span></div>
							<div class="f-right">
								<a href="#" class="btn-refill">Заправить на <span>500 руб.</span></a>
							</div>
						</div>
						<div class="count-item">
							<div class="count-image"><img src="<?=SITE_TEMPLATE_PATH?>/images/tovar.png" alt=""></div>
							<div class="count-name">Картридж Brother TN-2135<span>Черный, 1200 страниц</span></div>
							<div class="f-right">
								<a href="#" class="btn-price">Купить <span>1 200 руб.</span></a>
							</div>
						</div>
						<div class="count-item">
							<div class="count-image"><img src="<?=SITE_TEMPLATE_PATH?>/images/tovar.png" alt=""></div>
							<div class="count-name">Картридж Brother TN-2135<span>Черный, 1200 страниц</span></div>
							<div class="f-right">
								<a href="#" class="btn-preord">Предзаказ</a>
							</div>
						</div>
					</div>
				</div>

			</form>
		</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>