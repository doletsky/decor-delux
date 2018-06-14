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
$this->setFrameMode(true);
?>
<div class="row m-row js-slider-2">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="dd-card col-sm-4 col-6">
        <a class="dd-card__wrap" href="#">
            <img class="dd-card__img img-fluid" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            <div class="dd-card__footer">
                <div class="dd-card__name">-35%</div>
                <div class="dd-card__title"><?=$arItem["NAME"]?></div>
                <div class="dd-card__subtitle"><?=$arItem["PREVIEW_TEXT"]?></div>
            </div>
        </a>
    </div>
    <?endforeach;?>
</div>