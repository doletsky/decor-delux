<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");

?>
    <section class="dd-news container">
        <h2 class="d-none d-sm-block">Новости</h2>
        <div class="row">
            <?$APPLICATION->IncludeComponent("bitrix:news.list","news",Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "services",
                    "IBLOCK_ID" => "8",
                    "NEWS_COUNT" => "3",
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
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "N",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "N",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
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

            <?$APPLICATION->IncludeComponent("bitrix:subscribe.form","add",Array(
                    "USE_PERSONALIZATION" => "Y",
                    "PAGE" => "/",
                    "SHOW_HIDDEN" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600"
                )
            );?>

        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>