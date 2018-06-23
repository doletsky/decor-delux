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
<pre><?print_r($arResult)?></pre>
    <button class="dd-catalog__toggle-filter d-block d-sm-none">Параметры поиска</button>
    <section class="dd-catalog__filter">
        <div class="dd-catalog__filter-header d-none d-sm-block">Параметры поиска</div>
        <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
        <?php
        //not prices
        foreach($arResult["ITEMS"] as $key=>$arItem) {
            if (
                empty($arItem["VALUES"])
                || isset($arItem["PRICE"])
            )
                continue;

            if (
                $arItem["DISPLAY_TYPE"] == "A"
                && (
                    $arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
                )
            )
                continue;
?>
        <div class="dd-catalog__filter-item" >
            <div class="dd-catalog__filter-item-head">
                <?=$arItem["NAME"]?>
            </div>
            <ul class="dd-catalog__filter-item-body list-unstyled">
                <?foreach($arItem["VALUES"] as $val => $ar):?>
                    <li class="dd-catalog__filter-item-link">
                        <input type="checkbox" id="<? echo $ar["CONTROL_ID"] ?>" value="<? echo $ar["HTML_VALUE"] ?>" name="<? echo $ar["CONTROL_NAME"] ?>" <? echo $ar["CHECKED"]? 'checked="checked"': '' ?>>
                        <label data-role="label_<?=$ar["CONTROL_ID"]?>" for="<? echo $ar["CONTROL_ID"] ?>"><?=$ar["VALUE"];?>
                            <?if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):?>
                                <span class="_count"data-role="count_<?=$ar["CONTROL_ID"]?>">(<? echo $ar["ELEMENT_COUNT"]; ?>)</span>
                            <?endif;?>
                        </label>
                    </li>
                <?endforeach;?>
            </ul>
        </div>
            <?
        }
        ?>
            <div class="dd-catalog__filter-header d-none d-sm-block">
                        <input style="border:  0;font-size:  80%;line-height: 2em;cursor: pointer"
                                type="submit"
                                id="set_filter"
                                name="set_filter"
                                value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"
                        />
            </div>
            <div class="dd-catalog__filter-header d-none d-sm-block">
                        <input style="border:  0;font-size:  80%;line-height: 2em;cursor: pointer"
                                type="submit"
                                id="del_filter"
                                name="del_filter"
                                value="<?=GetMessage("CT_BCSF_DEL_FILTER")?>"
                        />
                        <div class="bx-filter-popup-result <?if ($arParams["FILTER_VIEW_MODE"] == "VERTICAL") echo $arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
                            <?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
                            <span class="arrow"></span>
                            <br/>
                            <a href="<?echo $arResult["FILTER_URL"]?>" target=""><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
                        </div>
            </div>
        <div class="clb"></div>
        </form>
