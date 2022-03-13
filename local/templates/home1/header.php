<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">

    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/fonts/icomoon/style.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/bootstrap.min.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/magnific-popup.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/jquery-ui.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/owl.carousel.min.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/owl.theme.default.min.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/bootstrap-datepicker.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/mediaelementplayer.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/animate.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/fl-bigmug-line.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/fonts/flaticon/font/flaticon.css");?>
    <?  $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/aos.css");?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH ."/css/style.css");?>

</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-6">
                    <p class="mb-0">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/input/phonenum.php",
                                    "EDIT_TEMPLATE" => ""
                                ),
                                false
                            );?>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/input/email.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?>
                    </p>
                </div>
                <div class="col-6 col-md-6 text-right">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/input/socimage.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
            </div>
        </div>

    </div>
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-8 col-md-8 col-lg-4">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/input/logo.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>
                <div class="col-4 col-md-4 col-lg-8">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/input/nav.php",
                            "EDIT_TEMPLATE" => ""
                        ),
                        false
                    );?>
                </div>


            </div>
        </div>
    </div>
</div>