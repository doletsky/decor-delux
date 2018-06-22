<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
if(isset($arResult["og_image"])){
    $APPLICATION->AddHeadString('<meta property="og:image" content="'.$arResult["og_image"].'">');
}
?>

