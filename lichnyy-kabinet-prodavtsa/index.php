<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?$APPLICATION->IncludeComponent(
	"bitrix:forum.user.profile.view", 
	".default", 
	array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"DATE_FORMAT" => "d.m.Y",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"FID_RANGE" => array(
		),
		"RATING_ID" => "",
		"RATING_TYPE" => "",
		"SEND_ICQ" => "A",
		"SEND_MAIL" => "E",
		"SET_NAVIGATION" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_RATING" => "",
		"UID" => $_REQUEST["UID"],
		"URL_TEMPLATES_MESSAGE" => "message.php?FID=#FID#&TID=#TID#&MID=#MID#",
		"URL_TEMPLATES_MESSAGE_SEND" => "message_send.php?TYPE=#TYPE#&UID=#UID#",
		"URL_TEMPLATES_PM_EDIT" => "pm_edit.php",
		"URL_TEMPLATES_PM_LIST" => "pm_list.php",
		"URL_TEMPLATES_PROFILE" => "profile.php?UID=#UID#",
		"URL_TEMPLATES_READ" => "read.php?FID=#FID#&TID=#TID#",
		"URL_TEMPLATES_SUBSCR_LIST" => "subscr_list.php",
		"URL_TEMPLATES_USER_LIST" => "user_list.php",
		"URL_TEMPLATES_USER_POST" => "user_post.php?UID=#UID#&mode=#mode#",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>