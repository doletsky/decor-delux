<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Make all properties present in order
//to prevent html table corruption
foreach($arResult["ITEMS"] as $key => $arElement)
{
	$arRes = array();
	foreach($arParams["PROPERTY_CODE"] as $pid)
	{
		$arRes[$pid] = CIBlockFormatProperties::GetDisplayValue($arElement, $arElement["PROPERTIES"][$pid], "catalog_out");
	}
	$arResult["ITEMS"][$key]["DISPLAY_PROPERTIES"] = $arRes;
	$brandCode=$arElement["DISPLAY_PROPERTIES"]["brand"]["LINK_ELEMENT_VALUE"][$arElement["DISPLAY_PROPERTIES"]["brand"]["VALUE"]]["CODE"];
    $collectionCode=$arElement["DISPLAY_PROPERTIES"]["collection"]["LINK_ELEMENT_VALUE"][$arElement["DISPLAY_PROPERTIES"]["collection"]["VALUE"]]["CODE"];
    $arElement["DETAIL_PAGE_URL"]=str_replace("#brand#", $brandCode, $arElement["DETAIL_PAGE_URL"]);
    $arResult["ITEMS"][$key]["DETAIL_PAGE_URL"]=str_replace("#collection#", $collectionCode, $arElement["DETAIL_PAGE_URL"]);
}
?>