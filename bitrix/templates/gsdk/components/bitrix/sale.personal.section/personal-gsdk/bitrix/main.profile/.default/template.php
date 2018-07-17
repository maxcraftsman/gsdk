<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
die();
use Bitrix\Main\Localization\Loc;?>

	<?ShowError($arResult["strProfileError"]);
	if ($arResult['DATA_SAVED'] == 'Y'){
		ShowNote(Loc::getMessage('PROFILE_DATA_SAVED'));
	}?>
	<form class="" method="post" name="form1" action="<?=$APPLICATION->GetCurUri()?>" enctype="multipart/form-data" role="form" style="border: 1px solid #e5e8ef;padding: 0 30px;">
		<?=$arResult["BX_SESSION_CHECK"]?>
		<input type="hidden" name="ID" value="<?=$arResult["ID"]?>" />
		<input type="hidden" name="LOGIN" value="<?=$arResult["arUser"]["LOGIN"]?>" />
		<div class="block-page-title">
			<?
			if($arResult["ID"]>0)
			{
				if (strlen($arResult["arUser"]["TIMESTAMP_X"])>0)
				{
					?>
					<div class="col-sm-9 col-md-offset-3 small">
						<strong><?=Loc::getMessage('LAST_UPDATE')?></strong>
						<strong><?=$arResult["arUser"]["TIMESTAMP_X"]?></strong>
					</div>
					<?
				}

				if (strlen($arResult["arUser"]["LAST_LOGIN"])>0)
				{
					?>
					<div class="col-sm-9 col-md-offset-3 small">
						<strong><?=Loc::getMessage('LAST_LOGIN')?></strong>
						<strong><?=$arResult["arUser"]["LAST_LOGIN"]?></strong>
					</div>
					<?
				}
			}
			?>
		</div>
		<div class="block-page-content" id="user_div_reg">
			<div class="block-form">
				<?if (!in_array(LANGUAGE_ID,array('ru', 'ua'))){?>
					<div class="form-group">
						<label class="main-profile-form-label col-sm-12 col-md-3 text-md-right" for="main-profile-title"><?=Loc::getMessage('main_profile_title')?></label>
						<div class="col-sm-12">
							<input class="form-control" type="text" name="TITLE" maxlength="50" id="main-profile-title" value="<?=$arResult["arUser"]["TITLE"]?>" />
						</div>
					</div>
					<?}?>
				<div class="form-title">
					Введите данные вашей организации
				</div>
				<?=Loc::getMessage('NAME')?>
				<div class="input-block">
					<input class="input-text" type="text" name="NAME" maxlength="50" id="main-profile-name" value="<?=$arResult["arUser"]["NAME"]?>" />
				</div>
				<?=Loc::getMessage('LAST_NAME')?>
				<div class="input-block">
					<input class="input-text" type="text" name="LAST_NAME" maxlength="50" id="main-profile-last-name" value="<?=$arResult["arUser"]["LAST_NAME"]?>" />
				</div>
				<?=Loc::getMessage('SECOND_NAME')?>
				<div class="input-block">
					<input class="input-text" type="text" name="SECOND_NAME" maxlength="50" id="main-profile-second-name" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" />
				</div>
				<?=Loc::getMessage('EMAIL')?>
				<div class="input-block">
					<input class="input-text" type="text" name="EMAIL" maxlength="50" id="main-profile-email" value="<?=$arResult["arUser"]["EMAIL"]?>" />
				</div>
				<?if($arResult["arUser"]["EXTERNAL_AUTH_ID"] == ''){?>
				<div class="form-title">
					Сменить пароль
				</div>
				<span class="small-text"><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></span>
				<div class="bot-input-blocks">
					<div class="input-block-1">
						<input class="input-text bx-auth-input main-profile-password" type="password" name="NEW_PASSWORD" maxlength="50" id="main-profile-password" value="" autocomplete="off" placeholder="<?=mb_substr(Loc::getMessage('NEW_PASSWORD_REQ'),0,-1)?>" />
					</div>
					<div class="input-block-1">
						<input class="input-text" type="password" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" id="main-profile-password-confirm" autocomplete="off" placeholder="<?=mb_substr(Loc::getMessage('NEW_PASSWORD_CONFIRM'),0,-1)?>" />
					</div>
				</div>
				<?}?>
				<div class="input-submit">
					<input type="submit" name="save" class="form-submit" value="<?=(($arResult["ID"]>0) ? Loc::getMessage("MAIN_SAVE") : Loc::getMessage("MAIN_ADD"))?>">
					&nbsp;
					<input type="submit" class="form-submit"  name="reset" value="<?echo GetMessage("MAIN_RESET")?>">
				</div>
			</div>
		</div>
		<?
		if ($arResult["SOCSERV_ENABLED"])
		{
			$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
				"SHOW_PROFILES" => "Y",
				"ALLOW_DELETE" => "Y"
			),
			false
		);
	}
	?>
	</form>
