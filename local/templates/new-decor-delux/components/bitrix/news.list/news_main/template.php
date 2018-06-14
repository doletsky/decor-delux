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
<div class="container">
    <div class="dd-article__slider row">
<?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="dd-article__slide">
            <a class="dd-article__item" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <div class="dd-article__item-title">
                    <div class="dd-article__item-date">
                        <span class="dd-article__item-date-num"><?=substr($arItem["DISPLAY_ACTIVE_FROM"], 0, 2)?></span>
                        <span class="dd-article__item-date-month"><?=strtolower( FormatDate("F", MakeTimeStamp($arItem["DISPLAY_ACTIVE_FROM"])))?></span>
                    </div>
                    <div class="dd-article__item-text">
                        <?=$arItem["NAME"]?>
                    </div>
                </div>
            </a>
        </div>
<?endforeach;?>
    </div>
</div>