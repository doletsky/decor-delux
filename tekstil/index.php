<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обои");

?>
    <section class="dd-breadcrumbs container">
        <a class="dd-breadcrumbs__link" href="">Главная</a>
        &nbsp>&nbsp
        <a class="dd-breadcrumbs__link" href="">Категория</a>
        &nbsp>&nbsp
        <span class="dd-breadcrumbs__link">Страница</span>
    </section>
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

    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.section",
        "list_s",
        Array(
            "ACTION_VARIABLE" => "action",
            "ADD_PICT_PROP" => "MORE_PHOTO",
            "ADD_PROPERTIES_TO_BASKET" => "Y",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_TO_BASKET_ACTION" => "ADD",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BACKGROUND_IMAGE" => "",
            "BASKET_URL" => "/basket/",
            "BRAND_PROPERTY" => "BRAND_REF",
            "BROWSER_TITLE" => "",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "N",
            "COMPATIBLE_MODE" => "Y",
            "CONVERT_CURRENCY" => "Y",
            "CURRENCY_ID" => "RUB",
            "CUSTOM_FILTER" => "",
            "DATA_LAYER_NAME" => "dataLayer",
            "DETAIL_URL" => "",
            "DISABLE_INIT_JS_IN_COMPONENT" => "Y",
            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_SORT_FIELD2" => "sort",
            "ELEMENT_SORT_FIELD" => $SORT_FIELD,
            "ELEMENT_SORT_ORDER" => $SORT_ORDER,
            "ELEMENT_SORT_ORDER2" => "desc",
            "ENLARGE_PRODUCT" => "PROP",
            "ENLARGE_PROP" => "NEWPRODUCT",
            "FILTER_NAME" => "arrFilter",
            "HIDE_NOT_AVAILABLE" => "N",
            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
            "IBLOCK_ID" => "13",
            "IBLOCK_TYPE" => "catalog",
            "INCLUDE_SUBSECTIONS" => "Y",
            "LABEL_PROP" => array("NEWPRODUCT"),
            "LABEL_PROP_MOBILE" => array(),
            "LABEL_PROP_POSITION" => "top-left",
            "LAZY_LOAD" => "Y",
            "LINE_ELEMENT_COUNT" => "1",
            "LOAD_ON_SCROLL" => "N",
            "MESSAGE_404" => "",
            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
            "MESS_BTN_BUY" => "Купить",
            "MESS_BTN_DETAIL" => "Подробнее",
            "MESS_BTN_LAZY_LOAD" => "Показать ещё",
            "MESS_BTN_SUBSCRIBE" => "Подписаться",
            "MESS_NOT_AVAILABLE" => "Нет в наличии",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "OFFERS_CART_PROPERTIES" => array(),
            "OFFERS_FIELD_CODE" => array("",""),
            "OFFERS_LIMIT" => "5",
            "OFFERS_PROPERTY_CODE" => array(),
            "OFFERS_SORT_FIELD2" => "sort",
            "OFFERS_SORT_FIELD" => "id",
            "OFFERS_SORT_ORDER" => "asc",
            "OFFERS_SORT_ORDER2" => "asc",
            "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
            "OFFER_TREE_PROPS" => array("COLOR_REF","SIZES_SHOES","SIZES_CLOTHES"),
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Товары",
            "PAGE_ELEMENT_COUNT" => $PAGE_ELEMENT_COUNT,
            "PARTIAL_PRODUCT_PROPERTIES" => "N",
            "PRICE_CODE" => array("BASE"),
            "PRICE_VAT_INCLUDE" => "Y",
            "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
            "PRODUCT_DISPLAY_MODE" => "Y",
            "PRODUCT_ID_VARIABLE" => "id",
            "PRODUCT_PROPERTIES" => array(),
            "PRODUCT_PROPS_VARIABLE" => "prop",
            "PRODUCT_QUANTITY_VARIABLE" => "",
            "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':true}]",
            "PRODUCT_SUBSCRIPTION" => "Y",
            "PROPERTY_CODE" => array("brand", "ARTNUMBER", "collection"),
            "PROPERTY_CODE_MOBILE" => array(),
            "RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
            "RCM_TYPE" => "personal",
            "SECTION_CODE" => $SECTION,
            "SECTION_ID" => "",
            "SECTION_ID_VARIABLE" => "SECTION_ID",
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("",""),
            "SEF_MODE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SHOW_ALL_WO_SECTION" => "Y",
            "SHOW_CLOSE_POPUP" => "N",
            "SHOW_DISCOUNT_PERCENT" => "Y",
            "SHOW_FROM_SECTION" => "N",
            "SHOW_MAX_QUANTITY" => "N",
            "SHOW_OLD_PRICE" => "N",
            "SHOW_PRICE_COUNT" => "1",
            "SHOW_SLIDER" => "Y",
            "SLIDER_INTERVAL" => "3000",
            "SLIDER_PROGRESS" => "N",
            "TEMPLATE_THEME" => "blue",
            "USE_ENHANCED_ECOMMERCE" => "Y",
            "USE_MAIN_ELEMENT_SECTION" => "N",
            "USE_PRICE_COUNT" => "N",
            "USE_PRODUCT_QUANTITY" => "N"
        )
    );?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>