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
$arResult["PAL_9"]=array();
$arPFilter = Array(
    "IBLOCK_ID"=>$arResult["IBLOCK_ID"],
    "ACTIVE"=>"Y"
);
$i=0;
$res = CIBlockElement::GetList(Array($arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],$arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"]), $arPFilter);
while($ar_fields = $res->GetNext()){
    $arResult["PALITRA"][$i]=array(
        "ID"=>$ar_fields["ID"],
        "CODE"=>$ar_fields["CODE"],
        "SORT"=>$ar_fields["SORT"],
        "DETAIL_PAGE_URL"=>$ar_fields["DETAIL_PAGE_URL"],
        "IMG"=>CFile::GetPath($ar_fields["DETAIL_PICTURE"]),
        "NAME"=>$ar_fields["NAME"],
        "BORDER_CLASS"=>""
    );
    if($arResult["ID"]==$ar_fields["ID"])$iID=$i;
    $i++;
}

if($iID<=11){
    $iID+=12;
}
if($iID>=108){
    $iID-=12;
}
$fl=round(12*($iID*100/1200-floor($iID*100/1200)));
if($fl==0){
    $iID++;
}
$flag=0;
if($fl==11){
    $iID=$iID-1;
    $flag=1;
}
$arID=array($iID-13,$iID-12,$iID-11,$iID-1,$iID,$iID+1,$iID+11,$iID+12,$iID+13);
$arBorderClass=array("border-t border-l","border-t", "border-t border-r","border-l","", "border-r", "border-b border-l", "border-b", "border-r border-b");
foreach ($arID as $j=>$id){
    if(isset($arResult["PALITRA"][$id])){
        $arResult["PAL_9"][]=$arResult["PALITRA"][$id];
        $arResult["PALITRA"][$id]["BORDER_CLASS"]=$arBorderClass[$j];
    }

}
$arResult["log"]=array("fl"=>$fl, "flag"=>$flag, "if"=>(($fl-11)<0), "arId"=>$arID);

$arOffers=array();
foreach ($arResult["OFFERS"] as $offer){
    $arOffers["o_type"][$offer["PROPERTIES"]["O_TYPE"]["VALUE_ENUM_ID"]]["VAL"] = $offer["PROPERTIES"]["O_TYPE"]["VALUE"];
    $arOffers["o_type"][$offer["PROPERTIES"]["O_TYPE"]["VALUE_ENUM_ID"]]["ITEM_ID"][] = $offer["ID"];
    $arOffers["o_size"][$offer["PROPERTIES"]["O_SIZE"]["VALUE_ENUM_ID"]]["VAL"] = $offer["PROPERTIES"]["O_SIZE"]["VALUE"];
    $arOffers["o_size"][$offer["PROPERTIES"]["O_SIZE"]["VALUE_ENUM_ID"]]["ITEM_ID"][] = $offer["ID"];
    $arOffers["o_price"].='data-price-item_'.$offer["ID"].'="'.substr($offer["CATALOG_PRICE_1"],0,-3).'" ';
}
$arResult["SM_OFFERS"]=$arOffers;
$cp = $this->__component;
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