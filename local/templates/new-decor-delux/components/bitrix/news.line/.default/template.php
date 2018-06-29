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
    <div class="dd-card col-md-4 col-xs-12">
        <a class="dd-card__wrap" href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
            <div class="dd-card__img"><img class="dd-card__img img-fluid" src="<?if(isset($arItem["PREVIEW_PICTURE"]["SRC"])) echo $arItem["PREVIEW_PICTURE"]["SRC"]; else echo $arItem["DETAIL_PICTURE"]["SRC"];?>"></div>
            <div class="dd-card__footer">
                <div class="dd-card__name"><?echo $arItem["IBLOCK_NAME"]?></div>
                <div class="dd-card__title"><?echo $arItem["NAME"]?></div>
                <div class="dd-card__subtitle"><?echo $arItem["PREVIEW_TEXT"]?></div>
            </div>
        </a>
    </div>
    <?endforeach;?>
</div>