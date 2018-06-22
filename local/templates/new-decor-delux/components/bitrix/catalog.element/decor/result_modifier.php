<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$arResult["BRAND_NAME"]=$arResult["DISPLAY_PROPERTIES"]["brand"]["LINK_ELEMENT_VALUE"][$arResult["DISPLAY_PROPERTIES"]["brand"]["VALUE"]]["NAME"];
$arResult["COLLECTION_NAME"]=$arResult["DISPLAY_PROPERTIES"]["collection"]["LINK_ELEMENT_VALUE"][$arResult["DISPLAY_PROPERTIES"]["collection"]["VALUE"]]["NAME"];
$arResult["ARTNUMBER_VALUE"]=$arResult["DISPLAY_PROPERTIES"]["ARTNUMBER"]["VALUE"];
if(is_array($arResult["PROPERTIES"]["GALLERY"]["VALUE"])){
    foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $fid){
        $arResult["GALLERY_PATH"][]=CFile::GetPath($fid);
    }
}
if(is_array($arResult["DISPLAY_PROPERTIES"]["OTHER_COLORS"]["LINK_ELEMENT_VALUE"])){
    foreach ($arResult["DISPLAY_PROPERTIES"]["OTHER_COLORS"]["LINK_ELEMENT_VALUE"] as $i=>$eid){
        $arFilter = Array(
            "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
            "ACTIVE"=>"Y",
            "ID"=>$i
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, array("ID", "IBLOCK_ID", "PROPERTY_BRAND.CODE", "PROPERTY_COLLECTION.CODE"));
        $ar_fields = $res->GetNext();
        $detailPageUrl=str_replace("#brand#", $ar_fields["PROPERTY_BRAND_CODE"], $eid["DETAIL_PAGE_URL"]);
        $detailPageUrl=str_replace("#collection#", $ar_fields["PROPERTY_COLLECTION_CODE"], $detailPageUrl);
        $arResult["OTHER_COLORS"][]=array(
            "url"=>$detailPageUrl,
            "pic"=>CFile::GetPath($eid["DETAIL_PICTURE"])

        );
    }
}
if(is_array($arResult["DISPLAY_PROPERTIES"]["ASSOCIATED"]["LINK_ELEMENT_VALUE"])){
    foreach ($arResult["DISPLAY_PROPERTIES"]["ASSOCIATED"]["LINK_ELEMENT_VALUE"] as $i=>$eid){
        $arFilter = Array(
            "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
            "ACTIVE"=>"Y",
            "ID"=>$i
        );
        $arAsFilter=array(
            "ID",
            "IBLOCK_ID",
            "NAME",
            "PROPERTY_BRAND.CODE",
            "PROPERTY_BRAND.NAME",
            "PROPERTY_COLLECTION.CODE",
            "PROPERTY_ARTNUMBER",
            "CATALOG_GROUP_1"
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arAsFilter);
        $ar_fields = $res->GetNext();
        $detailPageUrl=str_replace("#brand#", $ar_fields["PROPERTY_BRAND_CODE"], $eid["DETAIL_PAGE_URL"]);
        $detailPageUrl=str_replace("#collection#", $ar_fields["PROPERTY_COLLECTION_CODE"], $detailPageUrl);
        $arResult["ASSOCIATED"][]=array(
            "url"=>$detailPageUrl,
            "pic"=>CFile::GetPath($eid["DETAIL_PICTURE"]),
            "name"=>$ar_fields["NAME"],
            "brand"=>$ar_fields["PROPERTY_BRAND_NAME"],
            "artnumber"=>$ar_fields["PROPERTY_ARTNUMBER_VALUE"],
            "price"=>substr($ar_fields["CATALOG_PRICE_1"], 0, -3)
        );
    }
}
$arNotSmFilter=array(
    $arResult["PROPERTIES"]["brand"]["ID"],
    $arResult["PROPERTIES"]["collection"]["ID"]
);
$arSmFilter=CIBlockSectionPropertyLink::GetArray(2,0, false);
foreach ($arSmFilter as $i => $prop){
    if($prop["SMART_FILTER"]=="Y" && !in_array($i, $arNotSmFilter))$arResult["SMART_FILTER"][$i]=array();
}
foreach ($arResult["PROPERTIES"] as $props){
    if(is_array($arResult["SMART_FILTER"][$props["ID"]])){
        $arResult["SMART_FILTER"][$props["ID"]]["NAME"]=$props["NAME"];
        $arResult["SMART_FILTER"][$props["ID"]]["VALUE"]=$props["VALUE"];
        $arResult["SMART_FILTER"][$props["ID"]]["PROPERTY_TYPE"]=$props["PROPERTY_TYPE"];
    }
}
$cp = $this->__component; // объект компонента

if (is_object($cp))
{
    if(is_array($arResult["DETAIL_PICTURE"])){
        $cp->arResult['og_image'] = 'http://'.$_SERVER['HTTP_HOST'].$arResult["DETAIL_PICTURE"]["SRC"];
    }else{
        $cp->arResult['og_image'] = 'http://'.$_SERVER['HTTP_HOST'].$arResult["PREVIEW_PICTURE"]["SRC"];
    }
    // сохраним их в копии arResult, с которой работает шаблон
    $cp->SetResultCacheKeys(array('og_image'));
    $arResult['og_image'] = $cp->arResult['og_image'];
}