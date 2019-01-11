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
);?>
<style>
#alx_feed_back_FID1.alx_feed_back, #afbf_err_FID1.alx-feedb-error {
	padding: 0 30px 30px;
	width: 100% !important;
}
</style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
