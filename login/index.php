<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<?
	global $USER;
	if ($USER->IsAuthorized()==true){ LocalRedirect('/user');}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"gsdk-auth",
	array(
		"COMPONENT_TEMPLATE" => "gsdk-auth",
		"REGISTER_URL" => "/login/reg.php",
		"FORGOT_PASSWORD_URL" => "/login/restore.php",
		"PROFILE_URL" => "/user/",
		"SHOW_ERRORS" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
