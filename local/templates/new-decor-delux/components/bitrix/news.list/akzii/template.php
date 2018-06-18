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

<div class="col-12 col-sm-9">
    <div class="dd-news__list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="dd-news__item row">
            <div class="col-12 col-sm-4">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            </div>
            <div class="col-12 col-sm-8">
                <h3><?=$arItem["NAME"]?></h3>
                <p>
                    <?=$arItem["PREVIEW_TEXT"]?>
                </p>
            </div>
            <div class="separator"></div>
        </div>
        <?endforeach;?>
    </div>

    <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <p><?=$arResult["NAV_STRING"]?></p>
    <?endif?>
</div>