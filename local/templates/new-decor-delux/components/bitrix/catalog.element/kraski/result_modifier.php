<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();
$arResult["ARTNUMBER_VALUE"]=$arResult["DISPLAY_PROPERTIES"]["ARTNUMBER"]["VALUE"];
if(is_array($arResult["PROPERTIES"]["GALLERY"]["VALUE"])){
    foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $fid){
        $arResult["GALLERY_PATH"][]=CFile::GetPath($fid);
    }
}
if(is_array($arResult["DISPLAY_PROPERTIES"]["COMPANION"]["LINK_ELEMENT_VALUE"])){
    foreach ($arResult["DISPLAY_PROPERTIES"]["COMPANION"]["LINK_ELEMENT_VALUE"] as $i=>$eid){
        $arFilter = Array(
            "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
            "ACTIVE"=>"Y",
            "ID"=>$i
        );
        $arAsFilter=array(
            "ID",
            "IBLOCK_ID",
            "NAME",
            "CATALOG_GROUP_1"
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arAsFilter);
        $ar_fields = $res->GetNext();
        $arResult["COMPANION"][]=array(
            "url"=>$eid["DETAIL_PAGE_URL"],
            "pic"=>CFile::GetPath($eid["DETAIL_PICTURE"]),
            "name"=>$ar_fields["NAME"],
            "price"=>substr($ar_fields["CATALOG_PRICE_1"], 0, -3)
        );
    }
}
$arResult["PAL_9"]=array(
    $arResult["SORT"]-130=>array(),
    $arResult["SORT"]-120=>array(),
    $arResult["SORT"]-110=>array(),
    $arResult["SORT"]-10=>array(),
    $arResult["SORT"]=>array(),
    $arResult["SORT"]+10=>array(),
    $arResult["SORT"]+110=>array(),
    $arResult["SORT"]+120=>array(),
    $arResult["SORT"]+130=>array()
);
$arPFilter = Array(
    "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
    "ACTIVE"=>"Y"
);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arPFilter);
while($ar_fields = $res->GetNext()){
    $arResult["PALITRA"][]=array(
        "CODE"=>$ar_fields["CODE"],
        "SORT"=>$ar_fields["SORT"],
        "DETAIL_PAGE_URL"=>$ar_fields["DETAIL_PAGE_URL"],
        "IMG"=>CFile::GetPath($ar_fields["DETAIL_PICTURE"])
    );
    if(is_array($arResult["PAL_9"][$ar_fields["SORT"]])){
        $arResult["PAL_9"][$ar_fields["SORT"]]=array(
            "CODE"=>$ar_fields["CODE"],
            "SORT"=>$ar_fields["SORT"],
            "DETAIL_PAGE_URL"=>$ar_fields["DETAIL_PAGE_URL"],
            "IMG"=>CFile::GetPath($ar_fields["DETAIL_PICTURE"]),
            "NAME"=>$ar_fields["NAME"]
        );
    }
}
