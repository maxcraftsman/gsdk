<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
?>
<div class="content">
  <div class="page-title">
    <?$APPLICATION->ShowTitle()?>
  </div>
  <div class="block-page">
    Text here...
  </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
