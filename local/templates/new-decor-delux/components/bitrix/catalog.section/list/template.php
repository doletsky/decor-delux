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

    <div class="dd-catalog__list col-12 col-sm-10">
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
                        <div class="dd-catalog__list-item-info">
                            Бренд - <?=$arElement["DISPLAY_PROPERTIES"]["brand"]["LINK_ELEMENT_VALUE"][$arElement["DISPLAY_PROPERTIES"]["brand"]["VALUE"]]["NAME"]?>
                            <span>Артикул № <?=$arElement["DISPLAY_PROPERTIES"]["ARTNUMBER"]["DISPLAY_VALUE"]?></span>
                        </div>
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

<?/*?>
<div class="catalog-section">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<table class="data-table" cellspacing="0" cellpadding="0" border="0" width="100%">
	<thead>
	<tr>
		<td><?=GetMessage("CATALOG_TITLE")?></td>
		<?if(count($arResult["ITEMS"]) > 0):
			foreach($arResult["ITEMS"][0]["DISPLAY_PROPERTIES"] as $arProperty):?>
				<td><?=$arProperty["NAME"]?></td>
			<?endforeach;
		endif;?>
		<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
			<td><?=$arPrice["TITLE"]?></td>
		<?endforeach?>
		<?if(count($arResult["PRICES"]) > 0):?>
			<td>&nbsp;</td>
		<?endif?>
	</tr>
	</thead>
	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>
	<tr id="<?=$this->GetEditAreaId($arElement['ID']);?>">
		<td>
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
			<?if(count($arElement["SECTION"]["PATH"])>0):?>
				<br />
				<?foreach($arElement["SECTION"]["PATH"] as $arPath):?>
					/ <a href="<?=$arPath["SECTION_PAGE_URL"]?>"><?=$arPath["NAME"]?></a>
				<?endforeach?>
			<?endif?>
		</td>
		<?foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
		<td>
			<?if(is_array($arProperty["DISPLAY_VALUE"]))
				echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			elseif($arProperty["DISPLAY_VALUE"] === false)
				echo "&nbsp;";
			else
				echo $arProperty["DISPLAY_VALUE"];?>
		</td>
		<?endforeach?>
		<?foreach($arResult["PRICES"] as $code=>$arPrice):?>
		<td>
			<?if($arPrice = $arElement["PRICES"][$code]):?>
				<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
					<s><?=$arPrice["PRINT_VALUE"]?></s><br /><span class="catalog-price"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?></span>
				<?else:?>
					<span class="catalog-price"><?=$arPrice["PRINT_VALUE"]?></span>
				<?endif?>
			<?else:?>
				&nbsp;
			<?endif;?>
		</td>
		<?endforeach;?>
		<?if(count($arResult["PRICES"]) > 0):?>
		<td>
			<?if($arElement["CAN_BUY"]):?>
				<noindex>
				<a href="<?echo $arElement["BUY_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_BUY")?></a>
				&nbsp;<a href="<?echo $arElement["ADD_URL"]?>" rel="nofollow"><?echo GetMessage("CATALOG_ADD")?></a>
				</noindex>
			<?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
				<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
				<?$APPLICATION->IncludeComponent("bitrix:sale.notice.product", ".default", array(
							"NOTIFY_ID" => $arElement['ID'],
							"NOTIFY_URL" => htmlspecialcharsback($arElement["SUBSCRIBE_URL"]),
							"NOTIFY_USE_CAPTHA" => "N"
							),
							$component
						);?>
			<?endif?>&nbsp;
		</td>
		<?endif;?>
	</tr>
	<?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
</div>
<?*/?>