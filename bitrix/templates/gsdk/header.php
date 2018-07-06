<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
die();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle(false)?></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/menu.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.theme.default.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/animate.css", true);
	?>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body >
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
	<div class="menu-overlay hidden"></div>

	<header>
		<div class="container">
			<a href="/" class="logo"></a>

			<nav class="menu">
				<ul class="main-menu">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
					false
				);?>
			</ul>
			<ul class="add-menu">
				<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "login_basket", Array(
					"PATH_TO_BASKET" => SITE_DIR."personal/cart/",	// Страница корзины
					"PATH_TO_PERSONAL" => SITE_DIR."personal/",	// Страница персонального раздела
					"SHOW_PERSONAL_LINK" => "N",	// Отображать персональный раздел
					"SHOW_NUM_PRODUCTS" => "Y",	// Показывать количество товаров
					"SHOW_TOTAL_PRICE" => "Y",	// Показывать общую сумму по товарам
					"SHOW_PRODUCTS" => "N",	// Показывать список товаров
					"POSITION_FIXED" => "N",	// Отображать корзину поверх шаблона
					"SHOW_AUTHOR" => "Y",	// Добавить возможность авторизации
					"PATH_TO_REGISTER" => SITE_DIR."login/",	// Страница регистрации
					"PATH_TO_PROFILE" => SITE_DIR."personal/",	// Страница профиля
				),
				false
			);?>
		</ul>
	</nav>
	<div class="menu-button">
		<a href="#" class="nav-toggle"><span class="fa fa-bars"></span></a>
	</div>
</div>

<nav class="menu-mobile" role="navigation">
	<ul class="add-menu">
		<li class="line"><a href="#"><span class="icon-card"></span>В корзине 0 товаров</a></li>
		<li><a href="#"><span class="icon-person"></span>Личный кабинет</a></li>
	</ul>
	<ul>
		<li><a href="#">О нас</a></li>
		<li><a href="#">Контакты</a></li>
		<li><a href="#">Акции</a></li>
	</ul>
</nav>
</header>
<?if($APPLICATION->GetCurPage(false) !== '/'){?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb",
		"template1",
		Array(
			"PATH" => "",
			"SITE_ID" => "s1",
			"START_FROM" => "0"
			)
		);?>
		<?}?>
		<div class="container">
