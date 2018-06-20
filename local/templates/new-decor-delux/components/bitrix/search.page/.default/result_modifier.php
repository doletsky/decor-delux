<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */
CModule::IncludeModule("iblock");
foreach ($arResult["SEARCH"] as $key => $item){
    if($item["MODULE_ID"] == "iblock"){
        $arFilter = Array(
            "ID"=>$item["ITEM_ID"]
        );
        $res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, Array("ID", "IBLOCK_ID", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_BRAND.CODE", "PROPERTY_COLLECTION.CODE"));
        if($ar_fields = $res->GetNext())
        {
            $arResult["SEARCH"][$key]["ar_field"]=$ar_fields;
            if(strlen($ar_fields["PREVIEW_PICTURE"])>0) $arResult["SEARCH"][$key]["IMG"]=CFile::GetPath($ar_fields["PREVIEW_PICTURE"]);
            elseif (strlen($ar_fields["DETAIL_PICTURE"])>0) $arResult["SEARCH"][$key]["IMG"]=CFile::GetPath($ar_fields["DETAIL_PICTURE"]);
            if(substr_count($item["URL_WO_PARAMS"],"#brand#" )>0){
                $item["URL_WO_PARAMS"]=str_replace("#brand#", $ar_fields["PROPERTY_BRAND_CODE"], $item["URL_WO_PARAMS"]);
                $arResult["SEARCH"][$key]["URL_WO_PARAMS"]=str_replace("#collection#", $ar_fields["PROPERTY_COLLECTION_CODE"], $item["URL_WO_PARAMS"]);
            }
        }
    }
}
