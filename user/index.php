<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><?
global $USER;
if ($USER->IsAuthorized()==false){ LocalRedirect('/login');}
?>
<div class="content cabinet">
	<div class="page-title">
		 <?$APPLICATION->ShowTitle()?>
	</div>
	<div class="block-page ">
		<div class="block-page-content">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"gsdk-left-menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "gsdk-left-menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.section",
	"personal-gsdk",
	Array(
		"ACCOUNT_PAYMENT_ELIMINATED_PAY_SYSTEMS" => array(0=>"0",),
		"ACCOUNT_PAYMENT_SELL_CURRENCY" => "RUB",
		"ACCOUNT_PAYMENT_SELL_SHOW_FIXED_VALUES" => "Y",
		"ACCOUNT_PAYMENT_SELL_TOTAL" => array(0=>"100",1=>"200",2=>"500",3=>"1000",4=>"5000",5=>"",),
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_RIGHTS_PRIVATE" => "N",
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
		"COMPONENT_TEMPLATE" => "personal-gsdk",
		"CUSTOM_PAGES" => "",
		"CUSTOM_SELECT_PROPS" => array(),
		"MAIN_CHAIN_NAME" => "Мой кабинет",
		"NAV_TEMPLATE" => "",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"ORDER_DEFAULT_SORT" => "STATUS",
		"ORDER_HIDE_USER_INFO" => array(0=>"0",),
		"ORDER_HISTORIC_STATUSES" => array(0=>"F",),
		"ORDER_REFRESH_PRICES" => "N",
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(0=>"0",),
		"PATH_TO_BASKET" => "/user/cart/",
		"PATH_TO_CATALOG" => "/catalog/",
		"PATH_TO_CONTACT" => "/about/contacts/",
		"PATH_TO_PAYMENT" => "/user/order/payment/",
		"PROFILES_PER_PAGE" => "20",
		"PROP_1" => array(),
		"SAVE_IN_SESSION" => "Y",
		"SEF_FOLDER" => "/user/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("index"=>"index.php","orders"=>"orders/","account"=>"account/","subscribe"=>"subscribe/","profile"=>"profiles/","profile_detail"=>"profiles/#ID#","private"=>"private/","order_detail"=>"orders/#ID#","order_cancel"=>"cancel/#ID#",),
		"SEND_INFO_PRIVATE" => "N",
		"SET_TITLE" => "Y",
		"SHOW_ACCOUNT_COMPONENT" => "Y",
		"SHOW_ACCOUNT_PAGE" => "N",
		"SHOW_ACCOUNT_PAY_COMPONENT" => "Y",
		"SHOW_BASKET_PAGE" => "N",
		"SHOW_CONTACT_PAGE" => "N",
		"SHOW_ORDER_PAGE" => "Y",
		"SHOW_PRIVATE_PAGE" => "Y",
		"SHOW_PROFILE_PAGE" => "Y",
		"SHOW_SUBSCRIBE_PAGE" => "Y",
		"USE_AJAX_LOCATIONS_PROFILE" => "N"
	)
);?>
		</div>
	</div>
</div>
 &nbsp;<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>