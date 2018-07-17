<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;


if (strlen($arParams["MAIN_CHAIN_NAME"]) > 0){
	$APPLICATION->AddChainItem(htmlspecialcharsbx($arParams["MAIN_CHAIN_NAME"]), $arResult['SEF_FOLDER']);
}

$theme = Bitrix\Main\Config\Option::get("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);

$availablePages = array();
if ($arParams['SHOW_PRIVATE_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_PRIVATE'],
		"name" => Loc::getMessage("SPS_PERSONAL_PAGE_NAME"),
		"icon" => '<i class="fa fa-user-secret"></i>',
		"desc" => 'В этом разделе Вы можете при желании добавить новые данные о себе, изменить телефон и другие параметры'
	);
}
if ($arParams['SHOW_ORDER_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ORDERS'],
		"name" => Loc::getMessage("SPS_ORDER_PAGE_NAME"),
		"icon" => '<i class="fa fa-calculator"></i>',
		"desc" => 'В этом разделе Вы можете отследить текущие заказы'
	);
}

if ($arParams['SHOW_ACCOUNT_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ACCOUNT'],
		"name" => Loc::getMessage("SPS_ACCOUNT_PAGE_NAME"),
		"icon" => '<i class="fa fa-credit-card"></i>',
		"desc" => 'test desc8'
	);
}

if ($arParams['SHOW_ORDER_PAGE'] === 'Y'){

	$delimeter = ($arParams['SEF_MODE'] === 'Y') ? "?" : "&";
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_ORDERS'].$delimeter."filter_history=Y",
		"name" => Loc::getMessage("SPS_ORDER_PAGE_HISTORY"),
		"icon" => '<i class="fa fa-list-alt"></i>',
		"desc" => 'В этом разделе Вы можете всю историю сделанных и отмененных заказов'
	);
}

if ($arParams['SHOW_PROFILE_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_PROFILE'],
		"name" => Loc::getMessage("SPS_PROFILE_PAGE_NAME"),
		"icon" => '<i class="fa fa-list-ol"></i>',
		"desc" => 'В	этом разделе Вы можете управлять профилями заказов'
	);
}

if ($arParams['SHOW_BASKET_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arParams['PATH_TO_BASKET'],
		"name" => Loc::getMessage("SPS_BASKET_PAGE_NAME"),
		"icon" => '<i class="fa fa-shopping-cart"></i>',
		"desc" => 'test desc4'
	);
}

if ($arParams['SHOW_SUBSCRIBE_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arResult['PATH_TO_SUBSCRIBE'],
		"name" => Loc::getMessage("SPS_SUBSCRIBE_PAGE_NAME"),
		"icon" => '<i class="fa fa-envelope"></i>',
		"desc" => 'В	этом разделе Вы можете настроить подписки'
	);
}

if ($arParams['SHOW_CONTACT_PAGE'] === 'Y'){
	$availablePages[] = array(
		"path" => $arParams['PATH_TO_CONTACT'],
		"name" => Loc::getMessage("SPS_CONTACT_PAGE_NAME"),
		"icon" => '<i class="fa fa-info-circle"></i>',
		"desc" => 'test desc2'
	);
}

$customPagesList = CUtil::JsObjectToPhp($arParams['~CUSTOM_PAGES']);
if ($customPagesList){
	foreach ($customPagesList as $page){
		$availablePages[] = array(
			"path" => $page[0],
			"name" => $page[1],
			"icon" => (strlen($page[2])) ? '<i class="fa '.htmlspecialcharsbx($page[2]).'"></i>' : "",
			"desc" => 'test desc'
		);
	}
}

if (empty($availablePages))
{
	ShowError(Loc::getMessage("SPS_ERROR_NOT_CHOSEN_ELEMENT"));
}
else
{
	?>
		<style>
		.block-left-menu, .block-left-mobile {
			display: none;
		}
		</style>
		<div class="block-right-content personal-page-content">
			<?foreach ($availablePages as $blockElement){?>
				<div class="personal-item">
					<a href="<?=htmlspecialcharsbx($blockElement['path'])?>">
						<span class="sale-personal-section-index-block-ico">
							<?=$blockElement['icon']?>
						</span>
					</a>
					<div class="personal-page_desc">
						<a href="<?=htmlspecialcharsbx($blockElement['path'])?>">
							<?=htmlspecialcharsbx($blockElement['name'])?>

						</a>
						<p><?=htmlspecialcharsbx($blockElement['desc'])?></p>
					</div>
				</div>
				<?}?>
			</div>
		<?
	}
	?>
