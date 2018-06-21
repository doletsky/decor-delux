<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Краски");

?>
            <?
            $SECTION="";if(isset($_REQUEST["section"]))$SECTION=$_REQUEST["section"];
            $SORT_ORDER='asc';
            $SORT_FIELD='id';
            if(isset($_GET["c_sort"])){
                $SORT_FIELD=str_replace('price','CATALOG_PRICE_1',explode("_",$_GET["c_sort"])[0]);
                $SORT_ORDER=explode("_",$_GET["c_sort"])[1];
            }
            $PAGE_ELEMENT_COUNT=16;
            if(isset($_GET["c_num_page"])){
                $PAGE_ELEMENT_COUNT=$_GET["c_num_page"];
            }
            ?>
<section class="dd-collection">
    <div class="container">
        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "col",
                "EDIT_TEMPLATE" => ""
            )
        );?>
    </div>
</section>
<?
    if(isset($_REQUEST["section"])){
        global $arrFilter;
        $arrFilter=array(
            "SECTION_CODE" => $_REQUEST["section"]
        );
    }

    ?>
        <?$APPLICATION->IncludeComponent("bitrix:news.list","kraski",Array(
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_MODE" => "N",
                "IBLOCK_TYPE" => "catalog",
                "IBLOCK_ID" => "10",
                "NEWS_COUNT" => "10000",
                "SORT_BY2" => "ID",
                "SORT_ORDER1" => "ASC",
                "SORT_BY1" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "arrFilter",
                "FIELD_CODE" => Array("PREVIEW_PICTURE", "DETAIL_PICTURE"),
                "PROPERTY_CODE" => Array("brand","collection"),
                "CHECK_DATES" => "N",
                "DETAIL_URL" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "Y",
                "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "3600",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
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
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>