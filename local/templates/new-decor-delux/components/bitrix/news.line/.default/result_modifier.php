<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Make all properties present in order
//to prevent html table corruption
foreach($arResult["ITEMS"] as $key => $arElement)
{
    if($arElement["IBLOCK_ID"]==2) {
        $arFilter = Array(
            "IBLOCK_ID" => 2,
            "ACTIVE" => "Y"
        );
        $res = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, false, Array("ID", "IBLOCK_ID", "PROPERTY_BRAND.CODE", "PROPERTY_COLLECTION.CODE"));
        $ar_fields = $res->GetNext();
        $arElement["DETAIL_PAGE_URL"] = str_replace("#brand#", $ar_fields["PROPERTY_BRAND_CODE"], $arElement["DETAIL_PAGE_URL"]);
        $arResult["ITEMS"][$key]["DETAIL_PAGE_URL"] = str_replace("#collection#", $ar_fields["PROPERTY_COLLECTION_CODE"], $arElement["DETAIL_PAGE_URL"]);
    }
}
?>