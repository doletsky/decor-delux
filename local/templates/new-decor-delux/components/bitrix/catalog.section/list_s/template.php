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
$this->setFrameMode(true);?>
<section class="dd-collect container">
    <?if(isset($_REQUEST["section"])):?>
        <h2><?=$arResult["SECTION"][$_REQUEST["section"]]["NAME"]?></h2>
    <?else:?>
<h2>Разделы</h2>
<div class="row">
    <?foreach ($arResult["SECTION"] as $sec):?>
    <div class="col-12 col-sm-4">
        <a class="dd-collect__item" href="<?=$sec["SECTION_PAGE_URL"]?>">
            <img class="img-fluid" src="<?=$sec["PICTURE_SRC"]?>">
            <div class="dd-collect__item-title">
                <?=$sec["NAME"]?>
                <div class="dd-collect__item-count"><?=$sec["COUNT"]?> элементов</div>
            </div>
        </a>
    </div>
 <?endforeach;?>
</div>
    <?endif?>
</section>

    <section class="container">
    <div class="row">
    <div class="dd-catalog__list col-12 col-sm-12">
        <div class="dd-catalog__list-tools">
            <div class="dd-catalog__list-tools-left">
                <span>СОРТИРОВАТЬ ПО</span>
                <select class="dd-catalog__list-sort">
                    <option value="name_asc" <?if($_GET['c_sort']=='name_asc') echo "selected";?>>По названию</option>
                    <option value="price_asc"<?if($_GET['c_sort']=='price_asc') echo "selected";?>>Цена по возрастанию</option>
                    <option value="price_desc"<?if($_GET['c_sort']=='price_desc') echo "selected";?>>Цена по убыванию</option>
                </select>
                <?/*?>
                <a href="">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/catalog-grid.png">
                </a>
                <a href="">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/catalog-row.png">
                </a>
<?*/?>
            </div>
            <div class="dd-catalog__list-page d-none d-sm-block">
                <span>1-16 до 100 | показывать по</span>
                <select class="dd-catalog__list-page-count">
                    <option value="16" <?if($_GET['c_num_page']==16) echo "selected";?>>16</option>
                    <option value="24"<?if($_GET['c_num_page']==24) echo "selected";?>>24</option>
                    <option value="32"<?if($_GET['c_num_page']==32) echo "selected";?>>32</option>
                </select>
            </div>
        </div>
        <div class="dd-catalog__list-wrap row">
<?foreach($arResult["ITEMS"] as $arElement):?>
            <div class="dd-catalog__list-item col-6 col-sm-3">
                <a class="dd-catalog__list-item-link" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
                    <img class="img-fluid" style="height: 220px" src="<?if(isset($arElement["PREVIEW_PICTURE"]["SRC"])) echo $arElement["PREVIEW_PICTURE"]["SRC"]; else echo $arElement["DETAIL_PICTURE"]["SRC"];?>">
                    <div class="dd-catalog__list-item-footer">
                        <div class="dd-catalog__list-item-title"><?=$arElement["NAME"]?></div>
                        <?/*?><div class="dd-catalog__list-item-info">
                            Бренд - <?=$arElement["DISPLAY_PROPERTIES"]["brand"]["LINK_ELEMENT_VALUE"][$arElement["DISPLAY_PROPERTIES"]["brand"]["VALUE"]]["NAME"]?>
                            <span>Артикул № <?=$arElement["DISPLAY_PROPERTIES"]["ARTNUMBER"]["DISPLAY_VALUE"]?></span>
                        </div><?*/?>
                        <div class="dd-catalog__list-item-price"><?=$arElement["PRICES"]["BASE"]["PRINT_VALUE"]?></div>
                    </div>
                </a>
            </div>
<?endforeach;?>
            <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                <p><?=$arResult["NAV_STRING"]?></p>
            <?endif?>
        </div>

        <button class="dd-catalog__show-more d-block d-sm-none">Показать все</button>
    </div>
    </div>
    </section>