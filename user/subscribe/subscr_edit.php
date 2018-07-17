<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("subscribe");
?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form",
	".default",
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"USE_PERSONALIZATION" => "Y",
		"SHOW_HIDDEN" => "N",
		"PAGE" => "#SITE_DIR#user/subscribe/subscr_edit.php",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
