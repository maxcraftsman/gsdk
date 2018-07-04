<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list", 
	"template1", 
	array(
		"BLOCK_ID" => "2",
		"DETAIL_URL" => "",
		"COMPONENT_TEMPLATE" => "template1"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>