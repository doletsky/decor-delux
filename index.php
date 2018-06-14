<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Decor-delux.com - дистрибьютор обоев и краски класса люкс ");
$APPLICATION->SetTitle("Интернет-магазин обоев и краски");
?>



    <section class="dd-article">
        <?$APPLICATION->IncludeComponent("bitrix:news.list","news_main",Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "services",
                "IBLOCK_ID" => "8",
                "NEWS_COUNT" => "8",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array(),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );?>
    </section>

    <section class="dd-brands container">
        <h2>НАШИ БРЕНДЫ</h2>
        <div class="dd-brands-slider">
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo1.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo2.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo3.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo4.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo5.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo6.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo7.png">
                </a>
            </div>
            <div class="dd-brands-slider__item">
                <a href="#">
                    <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo1.png">
                </a>
            </div>
        </div>
    </section>

    <section class="container">
        <?$APPLICATION->IncludeComponent("bitrix:news.list","akzii_main",Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "services",
                "IBLOCK_ID" => "11",
                "NEWS_COUNT" => "3",
                "SORT_BY1" => "ID",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => Array("ID"),
                "PROPERTY_CODE" => Array(),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "Y",
                "CACHE_GROUPS" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "",
                "PAGER_DESC_NUMBERING" => "Y",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "PAGER_BASE_LINK_ENABLE" => "Y",
                "SET_STATUS_404" => "Y",
                "SHOW_404" => "Y",
                "MESSAGE_404" => "",
                "PAGER_BASE_LINK" => "",
                "PAGER_PARAMS_NAME" => "arrPager",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => ""
            )
        );?>
    </section>

    <section class="container">
        <div class="dd-new">
            <h2>Новинки</h2>
            <p>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."local/include/new_product_text_main.php"), false);?>
            </p>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:news.line","",Array(
                "IBLOCK_TYPE" => "catalog",
                "IBLOCKS" => Array("2", "10", "12", "13"),
                "NEWS_COUNT" => "3",
                "FIELD_CODE" => Array("ID", "CODE", "IBLOCK_NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_PICTURE"),
                "SORT_BY1" => "RAND",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "DETAIL_URL" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "RAND_NUMBER" => rand(1, 20), //в кеш 20 случайных наборов
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "300",
                "CACHE_GROUPS" => "Y"
            )
        );?>
    </section>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>


