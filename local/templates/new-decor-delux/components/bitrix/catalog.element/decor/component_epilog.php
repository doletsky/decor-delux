<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule("iblock");
$res_b = CIBlockElement::GetList(Array("SORT"=>"ASC"), array("IBLOCK_ID"=>5, "CODE"=>$_REQUEST["brand"]));
if($ar_fields_b = $res_b->GetNext())
{
    $APPLICATION->AddChainItem($ar_fields_b["NAME"], "/oboi/".$_REQUEST["brand"]."/");
}
$res_c = CIBlockElement::GetList(Array("SORT"=>"ASC"), array("IBLOCK_ID"=>9, "CODE"=>$_REQUEST["collection"]));
if($ar_fields_c = $res_c->GetNext()) {
    $APPLICATION->AddChainItem($ar_fields_c["NAME"], "/oboi/" . $_REQUEST["brand"] . "/" . $_REQUEST["collection"] . "/");
}
$APPLICATION->AddChainItem($arResult["NAME"], "");