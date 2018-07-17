<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
//***********************************
//setting section
//***********************************
?>
<form action="<?=$arResult["FORM_ACTION"]?>" method="post">
	<?echo bitrix_sessid_post();?>
	<?echo GetMessage("subscr_title_settings")?><br />

	<div class="subs-block">
		<?echo GetMessage("subscr_email")?>*:<br />
		<input class="emailsub" type="email" name="EMAIL" value="<?=$arResult["SUBSCRIPTION"]["EMAIL"]!=""?$arResult["SUBSCRIPTION"]["EMAIL"]:$arResult["REQUEST"]["EMAIL"];?>" maxlength="255" required/>
	</div>
	<div class="subs-block">
		<label><?echo GetMessage("subscr_fmt")?>: </label>
		<div class="radio-subs-block">
			<input id="mailform1" type="radio" name="FORMAT" value="text"<?if($arResult["SUBSCRIPTION"]["FORMAT"] == "text") echo " checked"?> />
			<label for="mailform1"><?echo GetMessage("subscr_text")?></label>
		</div>
		<div class="radio-subs-block">
			<input id="mailform2" type="radio" name="FORMAT" value="html"<?if($arResult["SUBSCRIPTION"]["FORMAT"] == "html") echo " checked"?> />
			<label for="mailform2">HTML</label>
		</div>
	</div>
	<div class="subs-block">
		<label><?echo GetMessage("subscr_rub")?>*: </label>
		<?foreach($arResult["RUBRICS"] as $itemID => $itemValue):?>
		<div class="check-subs-block">
			<input type="checkbox" id="<?=$itemValue["ID"]?>" name="RUB_ID[]" value="<?=$itemValue["ID"]?>"<?if($itemValue["CHECKED"]) echo " checked"?> />
			<label for="<?=$itemValue["ID"]?>"><?=$itemValue["NAME"]?></label>
		</div>
		<?endforeach;?></p>
	</div>
	<input type="hidden" name="PostAction" value="<?echo ($arResult["ID"]>0? "Update":"Add")?>" />
	<input type="hidden" name="ID" value="<?echo $arResult["SUBSCRIPTION"]["ID"];?>" />
	<?if($_REQUEST["register"] == "YES"):?>
	<input type="hidden" name="register" value="YES" />
	<?endif;?>
	<?if($_REQUEST["authorize"]=="YES"):?>
	<input type="hidden" name="authorize" value="YES" />
	<?endif;?>
	<div class="subs-block">
		<p><?echo GetMessage("subscr_settings_note1")?></p>
		<p><?echo GetMessage("subscr_settings_note2")?></p>
		<input class="btn-order btn-order-1" type="submit" name="Save" value="<?echo ($arResult["ID"] > 0? GetMessage("subscr_upd"):GetMessage("subscr_add"))?>" />
		<input class="btn-order btn-order-1" type="reset" value="<?echo GetMessage("subscr_reset")?>" name="reset" />
	</div>
</form>
