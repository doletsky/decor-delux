<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
    <title>ВсяОтделка.ру - интернет-гипермаркет отделочных материлов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta property="og:url"           content="<?=$APPLICATION->GetCurUri()?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?=$APPLICATION->ShowTitle()?>" />
    <meta property="og:description"   content="<?$APPLICATION->ShowProperty("description")?>" />
    <link href="<?=SITE_TEMPLATE_PATH?>/css/main.css?10" rel="stylesheet">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.css" rel="stylesheet">
    <?$APPLICATION->ShowHead();?>
</head>

<body>
<header>
    <section class="dd-header-top">
        <div id="toggleMenu">
            <img src="/local/templates/new-decor-delux/images/menu.svg">
        </div>

        <a class="dd-header-top__logo navbar-brand" href="/">
            <img class="img-fluid" src="/local/templates/new-decor-delux/images/logo.png">
        </a>
        <div class="dd-header-top__info d-none d-sm-block">
            <img class="dd-header-top__info-icon-call" src="/local/templates/new-decor-delux/images/phone.png">
            <span class="dd-header-top__info-phone"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."local/include/phone.php"), false);?></span>
        </div>
        <div class="dd-header-top__tools">
            <?$APPLICATION->IncludeComponent("bitrix:search.form","in_header",Array(
                    "USE_SUGGEST" => "N",
                    "PAGE" => "/search/"
                )
            );?>
            <a class="dd-header-top__tools-cart" href="/basket/">
                <img src="/local/templates/new-decor-delux/images/cart.png">
            </a>
        </div>

    </section>
    <?$APPLICATION->IncludeComponent("bitrix:menu","in_header",Array(
            "ROOT_MENU_TYPE" => "top",
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "top",
            "USE_EXT" => "N",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
        )
    );?>
</header>


    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => ""
        )
    );?>
<?if($APPLICATION->GetCurDir()!="/"):?>
<section class="dd-breadcrumbs container">
    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",Array(
            "START_FROM" => "0",
            "PATH" => "",
            "SITE_ID" => "s1"
        )
    );?>
</section>
<?endif?>
