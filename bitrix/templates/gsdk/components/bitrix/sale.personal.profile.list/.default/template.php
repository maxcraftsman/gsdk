<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

if(strlen($arResult["ERROR_MESSAGE"])>0)
{
	ShowError($arResult["ERROR_MESSAGE"]);
}
if(strlen($arResult["NAV_STRING"]) > 0)
{
	?>
	<p><?=$arResult["NAV_STRING"]?></p>
	<?
}

if (count($arResult["PROFILES"]))
{
	?>
	<span hidden>
		<?
		$dataColumns = array(
			"ID", "DATE_UPDATE", "NAME", "PERSON_TYPE_ID"
		);
		foreach ($dataColumns as $column)
		{
			?>
			<th>
				<?=Loc::getMessage("P_".$column)?>
				<a class="sale-personal-profile-list-arrow-up" href="<?=$arResult['URL']?>by=<?=$column?>&order=asc#nav_start">
					<i class="fa fa-chevron-up"></i>
				</a>
				<a class="sale-personal-profile-list-arrow-down" href="<?=$arResult['URL']?>by=<?=$column?>&order=desc#nav_start">
					<i class="fa fa-chevron-down"></i>
				</a>
			</th>
			<?
		}
		?>
		<th><?=Loc::getMessage("SALE_ACTION")?></th>
	</span>
	<?foreach($arResult["PROFILES"] as $val)
	{
		?>
		<div class="profile-block-item">
				<div class="profile-name">
						<?= $val["ID"] ?>. <?= $val["NAME"] ?>
				</div>
				<div class="profile-item">
						<p>Дата обновления: <?= $val["DATE_UPDATE"] ?></p>
						<p>Тип плательщика: <?= $val["PERSON_TYPE"]["NAME"] ?></p>
				</div>
				<div class="profile-intro">
						<a href="<?= $val["URL_TO_DETAIL"] ?>" title="<?= Loc::getMessage("SALE_DETAIL_DESCR") ?>" class="todd"><span class="fa fa-bars"></span><?= GetMessage("SALE_DETAIL") ?></a>
						<a href="javascript:if(confirm('<?= Loc::getMessage("STPPL_DELETE_CONFIRM") ?>')) window.location='<?= $val["URL_TO_DETELE"] ?>'" title="<?= Loc::getMessage("SALE_DELETE_DESCR") ?>" class="del"><span class="fa fa-times"></span><?= Loc::getMessage("SALE_DELETE") ?></a>
				</div>
		</div>
		<?
	}?>
	<?
	if(strlen($arResult["NAV_STRING"]) > 0)
	{
		?>
		<p><?=$arResult["NAV_STRING"]?></p>
		<?
	}
}
else
{
	?>
	<h3><?=Loc::getMessage("STPPL_EMPTY_PROFILE_LIST") ?></h3>
	<?
}
?>
