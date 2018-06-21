<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
if(isset($_REQUEST["section"])){
    foreach($arResult["SECTION"] as $arSec){
        if($_REQUEST["section"]==$arSec["CODE"])$title= $APPLICATION->AddChainItem($arSec["NAME"], "/kraski/".$_REQUEST["section"]."/");
    }
}

