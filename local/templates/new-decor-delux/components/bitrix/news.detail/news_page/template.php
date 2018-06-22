<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>

<div class="col-12 col-sm-9">
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <img class="img-fluid d-block d-sm-none" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
    <?else:?>
    <img class="img-fluid d-block d-sm-none" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>">
    <?endif;?>
    <h3><?echo $arResult["NAME"];?></h3>
    <div class="dd-news__info">
        <span class="dd-news__info-date"><?echo $arResult["DISPLAY_ACTIVE_FROM"];?></span>
        <div class="dd-social">
            <a class="dd-social__item _vk" href=""></a>
            <a class="dd-social__item _instagram" href=""></a>
            <a class="dd-social__item _facebook" href=""></a>
            <a class="dd-social__item _pinterest" href=""></a>
        </div>
    </div>
    <?if(is_array($arResult["DETAIL_PICTURE"])):?>
        <img class="img-fluid d-none d-sm-block" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">
    <?else:?>
        <img class="img-fluid d-none d-sm-block" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>">
    <?endif?>
    <?echo $arResult["DETAIL_TEXT"];?>

</div>