<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$arBColl=array();
$arFilter = Array(
    "IBLOCK_ID"=>2,
    "ACTIVE"=>"Y"
);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, Array("ID", "IBLOCK_ID", "PROPERTY_BRAND.NAME", "PROPERTY_BRAND.CODE", "PROPERTY_COLLECTION.NAME", "PROPERTY_COLLECTION.CODE" ));
while($ar_fields = $res->GetNext())
{
    if(!isset($arBColl[$ar_fields["PROPERTY_BRAND_CODE"]])){
        $arBColl[$ar_fields["PROPERTY_BRAND_CODE"]]=array(
            "URL"=>"/oboi/".$ar_fields["PROPERTY_BRAND_CODE"]."/",
            "NAME"=>$ar_fields["PROPERTY_BRAND_NAME"],
            "COLLECTION"=>array(
                $ar_fields["PROPERTY_COLLECTION_CODE"]=>array(
                    "URL"=>"/oboi/".$ar_fields["PROPERTY_BRAND_CODE"]."/".$ar_fields["PROPERTY_COLLECTION_CODE"]."/",
                    "NAME"=>$ar_fields["PROPERTY_COLLECTION_NAME"]
                )
            )
        );
    }else{
        if(!isset($arBColl[$ar_fields["PROPERTY_BRAND_CODE"]]["COLLECTION"][$ar_fields["PROPERTY_COLLECTION_CODE"]])){
            $arBColl[$ar_fields["PROPERTY_BRAND_CODE"]]["COLLECTION"][$ar_fields["PROPERTY_COLLECTION_CODE"]]=array(
                "URL"=>"/oboi/".$ar_fields["PROPERTY_BRAND_CODE"]."/".$ar_fields["PROPERTY_COLLECTION_CODE"]."/",
                "NAME"=>$ar_fields["PROPERTY_COLLECTION_NAME"]
            );
        }
    }

}
$arBrandML=array();
$arCOllML=array();

foreach ($arBColl as $brand){
    $arBrandML[]=Array(
        $brand["NAME"],
        $brand["URL"],
        Array(),
        Array(),
        ""
    );
    if(isset($brand["COLLECTION"])){
        foreach ($brand["COLLECTION"] as $coll){
            $arCOllML[]=Array(
                $coll["NAME"],
                $coll["URL"],
                Array(),
                Array(),
                ""
            );
        }

    }
}
$aMenuLinks = array_merge($arBrandML, $arCOllML);
?>