<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/input/about.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">

                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/input/footerNav.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>

            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/input/followu.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>

        </div>
        <div class="row pt-5 mt-5 text-center">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/input/copyright.php",
                    "EDIT_TEMPLATE" => ""
                ),
                false
            );?>

        </div>
    </div>
</footer>

</div>

<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-3.3.1.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-migrate-3.0.1.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery-ui.js.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/popper.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/bootstrap.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/owl.carousel.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/mediaelement-and-player.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery.stellar.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery.countdown.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/jquery.magnific-popup.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/bootstrap-datepicker.min.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/aos.js'); ?>
<?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH .'/js/main.js'); ?>


</body>
</html>