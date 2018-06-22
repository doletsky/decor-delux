<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;

$cp = $this->__component; // объект компонента

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