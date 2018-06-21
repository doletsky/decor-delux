<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$arBColl=array();
$arFilter = Array(
    "IBLOCK_ID"=>12,
    "ACTIVE"=>"Y"
);
$res = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter);
while($arSec = $res->GetNext())
{

    $aMenuLinks[] = Array(
        $arSec["NAME"],
        $arSec["SECTION_PAGE_URL"],
        Array(),
        Array(),
        ""
    );

}
?>