<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("HomeSpace &mdash; Colorlib Website Template");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    ".default",
    array(
        "COMPONENT_TEMPLATE" => ".default",
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/input/slider1.php",
        "EDIT_TEMPLATE" => ""
    ),
    false
);?>
<div class="py-5">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/input/info1.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>

            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/input/info2.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
            <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "COMPONENT_TEMPLATE" => ".default",
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/input/info3.php",
                        "EDIT_TEMPLATE" => ""
                    ),
                    false
                );?>
            </div>
        </div>
    </div>
</div>
<div class="site-section site-section-sm bg-light">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/input/homes.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
</div>

<div class="site-section">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/input/services.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
</div>

<div class="site-section bg-light">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/input/blog.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
</div>

<div class="site-section">
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/input/agents.php",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>