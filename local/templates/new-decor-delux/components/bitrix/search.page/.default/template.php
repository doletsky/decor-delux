<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
<section class="dd-catalog container">
    <div class="row">
        <div class="dd-catalog__list col-12 col-sm-10">
    <form action="" method="get">
        <input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
        &nbsp;<input type="submit" value="<?=GetMessage("SEARCH_GO")?>" />
        <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
    </form>
        </div>
    </div>

    <div class="row">
        <div class="dd-catalog__list col-12 col-sm-12">
            <div class="dd-catalog__list-wrap row">
            <?foreach($arResult["SEARCH"] as $arItem):?>
            <div class="dd-catalog__list-item col-6 col-sm-3">
                <a class="dd-catalog__list-item-link" href="<?echo $arItem["URL_WO_PARAMS"]?>">
                    <img class="img-fluid" src="<?echo $arItem["IMG"]?>">
                    <div class="dd-catalog__list-item-footer">
                        <div class="dd-catalog__list-item-title"><?echo $arItem["TITLE_FORMATED"]?></div>
                        <?/*?>
                        <div class="dd-catalog__list-item-info">
                            Бренд - Decor Deluxe International
                            <span>Артикул № 11111111</span>
                        </div>
                        <div class="dd-catalog__list-item-price">1250 руб</div>
                        <?*/?>
                    </div>
                </a>
            </div>
            <?endforeach;?>
            </div>
                <p>
                    <?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
                </p>
        </div>
    </div>
</section>

