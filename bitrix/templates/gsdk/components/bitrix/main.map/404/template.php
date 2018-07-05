<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)
	return;
?>
<div class="er404">
	<img src="<?=SITE_TEMPLATE_PATH?>/images/404.png" alt="">
	<span>Такой директории несуществует. Вернитесь на <a class="link" href="/">главную страницу</a>.</span>
</div>
<style>
	.breadcrumb {
		display: none;
	}
</style>
