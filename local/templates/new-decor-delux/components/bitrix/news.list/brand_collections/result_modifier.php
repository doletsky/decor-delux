<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult["COLLECTION"]=array();
foreach($arResult["ITEMS"] as $arItem){
    $colId=$arItem["DISPLAY_PROPERTIES"]["collection"]["VALUE"];
    $col=$arItem["DISPLAY_PROPERTIES"]["collection"]["LINK_ELEMENT_VALUE"][$colId];
    if(isset($arResult["COLLECTION"][$colId])){
        $arResult["COLLECTION"][$colId]["count"]++;
    }else{
        $arResult["COLLECTION"][$colId]=$col;
        $arResult["COLLECTION"][$colId]["count"]=1;
        if($col["PREVIEW_PICTURE"]>0)$arResult["COLLECTION"][$colId]["PIC"]=CFile::GetPath($col["PREVIEW_PICTURE"]);
    }
}
