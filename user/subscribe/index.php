<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("subscribe");
?><?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.edit",
	"subscribe-gsdk",
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALLOW_ANONYMOUS" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"SET_TITLE" => "Y",
		"SHOW_AUTH_LINKS" => "Y",
		"SHOW_HIDDEN" => "N",
		"COMPONENT_TEMPLATE" => "subscribe-gsdk"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
