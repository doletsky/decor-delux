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
<div class="dd-brands__desc row">
    <div class="dd-brands__logo col-12 col-sm-4">
        <img class="img-fluid" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>">
    </div>
    <div class="col-12 col-sm-8">
        <?echo $arResult["DETAIL_TEXT"];?>
    </div>
</div>
<div class="separator"></div>