<?
AddEventHandler("main", "OnAfterUserAuthorize", 'openCatalogAfterAuth');
function openCatalogAfterAuth($arUser) {
     LocalRedirect('/');
}
?>
