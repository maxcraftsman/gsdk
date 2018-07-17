<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

if ($arParams['SHOW_SUBSCRIBE_PAGE'] !== 'Y')
{
	LocalRedirect($arParams['SEF_FOLDER']);
}

if (strlen($arParams["MAIN_CHAIN_NAME"]) > 0)
{
	$APPLICATION->AddChainItem(htmlspecialcharsbx($arParams["MAIN_CHAIN_NAME"]), $arResult['SEF_FOLDER']);
}?>
<div class="block-right-content">
<?$APPLICATION->AddChainItem(Loc::getMessage("SPS_CHAIN_SUBSCRIBE_NEW"));
$APPLICATION->IncludeComponent(
	"bitrix:subscribe.edit",
	"",
Array()
);?>
</div>
