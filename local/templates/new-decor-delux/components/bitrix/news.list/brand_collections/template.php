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

<h2>Коллекции</h2>
<div class="row">
    <?foreach($arResult["COLLECTION"] as $arItem):?>
    <div class="col-12 col-sm-4">
        <a class="dd-collect__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
            <img class="img-fluid" src="<?=$arItem["PIC"]?>">
            <div class="dd-collect__item-title">
                <?=$arItem["NAME"]?>
                <div class="dd-collect__item-count"><?=$arItem["count"]?> ОБОЕВ</div>
            </div>
        </a>
    </div>
    <?endforeach;?>
</div>