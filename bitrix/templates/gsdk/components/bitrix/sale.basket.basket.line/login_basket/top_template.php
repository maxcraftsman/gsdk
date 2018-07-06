<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
* @global array $arParams
* @global CUser $USER
* @global CMain $APPLICATION
* @global string $cartId
*/
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>
<?if ($USER->IsAuthorized()):
	$name = trim($USER->GetFullName());
	if (! $name)
	$name = trim($USER->GetLogin());
	if (strlen($name) > 15)
	$name = substr($name, 0, 12).'...';
	?>
	<li><a href="<?=$arParams['PATH_TO_PROFILE']?>"><span class="icon-person"></span><?=htmlspecialcharsbx($name)?></a></li>
	<li><a href="?logout=yes"><?=GetMessage('TSB1_LOGOUT')?></a></li>
	<?else:
		$arParamsToDelete = array(
			"login",
			"login_form",
			"logout",
			"register",
			"forgot_password",
			"change_password",
			"confirm_registration",
			"confirm_code",
			"confirm_user_id",
			"logout_butt",
			"auth_service_id",
			"clear_cache"
		);

		$currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
		if ($arParams['AJAX'] == 'N')
		{
			?><script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
		}
		else
		{
			$currentUrl = '#CURRENT_URL#';
		}
		?>
		<li>
			<a href="<?=$arParams['PATH_TO_AUTHORIZE']?>?login=yes&backurl=<?=$currentUrl; ?>">Личный кабинет</a>
		</li>
		<?endif?>
		<?endif?>
		<?
		if (!$arResult["DISABLE_USE_BASKET"]){?>
			<li class="line"><a href="<?= $arParams['PATH_TO_BASKET'] ?>"><span class="icon-card"></span><?= GetMessage('TSB1_CART') ?> <?
		}if (!$compositeStub){
			if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
			{
				echo $arResult['NUM_PRODUCTS'].' '.$arResult['PRODUCT(S)'];
			}
			if ($arParams['SHOW_TOTAL_PRICE'] == 'Y'):?>
			<br <? if ($arParams['POSITION_FIXED'] == 'Y'): ?>class="hidden-xs"<?endif ?>/>
			<span>
				<?= GetMessage('TSB1_TOTAL_PRICE') ?>
				<? if ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'):?>
				<strong><?= $arResult['TOTAL_PRICE'] ?></strong>
				<?endif ?>
			</span>
			<?endif;?>
			</a></li>
		<?}
		if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>
		<div style="padding-top: 4px;">
			<span class="icon_info"></span>
			<a href="<?=$arParams['PATH_TO_PERSONAL']?>"><?=GetMessage('TSB1_PERSONAL')?></a>
		</div>
		<?endif?>
