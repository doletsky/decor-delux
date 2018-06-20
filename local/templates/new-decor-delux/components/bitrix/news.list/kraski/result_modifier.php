<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$SectList = CIBlockSection::GetList(array(), array("IBLOCK_ID"=>$arResult["ID"],"ACTIVE"=>"Y") ,false, array("ID","IBLOCK_ID","CODE","NAME","SECTION_PAGE_URL"));
while ($SectListGet = $SectList->GetNext())
{
    $arResult["SECTION"][]=$SectListGet;
}