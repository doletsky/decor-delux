<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE HTML>
<html>
<head>
    <title>ВсяОтделка.ру - интернет-гипермаркет отделочных материлов</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <link href="./local/templates/new-decor-delux/css/main.css?10" rel="stylesheet">
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
            <img class="dd-header-top__info-icon-geo" src="/local/templates/new-decor-delux/images/geo.png">
            <span class="dd-header-top__info-city">Москва</span>
        </div>
        <div class="dd-header-top__tools">
            <?$APPLICATION->IncludeComponent("bitrix:search.form","in_header",Array(
                    "USE_SUGGEST" => "N",
                    "PAGE" => "/search/"
                )
            );?>
            <a class="dd-header-top__tools-enter" href="">
                <img src="/local/templates/new-decor-delux/images/enter.png">
            </a>
            <a class="dd-header-top__tools-cart" href="">
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

<section class="dd-gallery container-fluid">
    <div class="dd-gallery__list row">
        <a class="dd-gallery__item _oboi col-12 col-sm-3 col-lg-3">
            <div class="dd-gallery__item-title">Обои</div>
        </a>
        <a class="dd-gallery__item _kraski col-12 col-sm-3 col-lg-3">
            <div class="dd-gallery__item-title">Краски</div>
        </a>
        <a class="dd-gallery__item _lepnina col-12 col-sm-3 col-lg-3">
            <div class="dd-gallery__item-title">Лепнина</div>
        </a>
        <a class="dd-gallery__item _textil col-12 col-sm-3 col-lg-3">
            <div class="dd-gallery__item-title">Текстиль</div>
        </a>
    </div>
</section>

