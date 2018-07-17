<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="block-left-menu">
	<ul>
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
			continue;
			?>
			<?if($arItem["SELECTED"]):?>
			<li class="selected"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
			<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

			<?endforeach?>
		</ul>
	</div>
	<div class="block-left-mobile">
		<div class="mobile-menu-title">
			<span class="fa fa-bars"></span>Личный кабинет
		</div>
		<ul class="mobile-menu menu-hidden">
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
				?>
				<?if($arItem["SELECTED"]):?>
				<li class="selected"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
				<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif?>

				<?endforeach?>
			</ul>
		</div>
		<?endif?>
