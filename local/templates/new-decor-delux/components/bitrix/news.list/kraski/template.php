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

<section class="dd-collection">
    <div class="container">
        <div class="dd-collection__desc row">
            <?foreach($arResult["SECTION"] as $arSec):?>
                <?if(isset($_REQUEST["section"])){
                    if($_REQUEST["section"]==$arSec["CODE"])$title=$arSec["NAME"];
                }?>
                <div class="col-12 col-sm-4">
                    <a class="dd-collect__item" href="<?=$arSec["SECTION_PAGE_URL"] ?>" style="height: 50px">
                        <div class="dd-collect__item-title">
                            <?=$arSec["NAME"] ?>
                        </div>
                    </a>
                </div>
            <?endforeach;?>
        </div>
        <?if(isset($_REQUEST["section"])):?><h2><?=$title?></h2><?endif?>
    </div>
</section>

<section class="dd-collection container">
<div class="dd-collection__list row">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="col-1"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" >
                <div class="dd-collection__list-item" style='background-image: url("<?=$arItem["DETAIL_PICTURE"]["SRC"]?>")'></div>
            </a></div>
    <?endforeach;?>
</div>
</section>