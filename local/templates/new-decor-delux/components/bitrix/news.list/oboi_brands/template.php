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
<h2>Бренды</h2>
<div class="dd-brands-list row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="col-4 col-sm-2">
        <div class="dd-brands-list__item">
            <a href="#">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            </a>
        </div>
    </div>
    <?endforeach;?>
</div>