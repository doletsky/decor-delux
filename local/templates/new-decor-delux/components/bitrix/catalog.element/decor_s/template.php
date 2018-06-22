<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
    <div class="row">
        <div class="dd-profile__slider col-12 col-sm-6">
            <h3 class="d-block d-sm-none"><?=$arResult['NAME']?></h3>
            <div class="dd-profile__slider-main">
                <img class="img-fluid" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>">
                <?if(isset($arResult["GALLERY_PATH"])):?>
                    <?foreach ($arResult["GALLERY_PATH"] as $src):?>
                            <img class="img-fluid" src="<?=$src?>">
                    <?endforeach;?>
                <?endif?>
            </div>
            <?/*?>
            <div class="dd-profile__slider-nav">
                <div class="dd-profile__slider-nav-item">
                    <img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>">
                </div>
                <?if(isset($arResult["GALLERY_PATH"])):?>
                    <?foreach ($arResult["GALLERY_PATH"] as $src):?>
                        <div class="dd-profile__slider-nav-item">
                            <img src="<?=$src?>">
                        </div>
                    <?endforeach;?>
                <?endif?>
            </div>
            <?*/?>
        </div>
        <div class="dd-profile__info col-12 col-sm-6">
            <h3 class="d-none d-sm-block"><?=$arResult['NAME']?></h3>
            <?/*?>
            <div class="dd-profile__info-brief">
                <span>Бренд - <?=$arResult["BRAND_NAME"]?></span>
                <span>Коллекция - <?=$arResult["COLLECTION_NAME"]?></span>
                <span>Артикул № <?=$arResult["ARTNUMBER_VALUE"]?></span>
            </div>
            <?*/?>
            <div class="dd-profile__info-buy">
                <div class="dd-profile__info-buy-price"><?=substr($arResult["CATALOG_PRICE_1"], 0 , -3)?> Р</div>
                <div class="dd-profile__info-buy-count">
                    <div class="dd-profile__info-buy-count-btn _minus">&minus;</div>
                    <input type="text" class="dd-profile__info-buy-count-value" id="quantity" value="100">
                    <div class="dd-profile__info-buy-count-btn _plus">+</div>
                </div>
                <button class="dd-profile__info-buy-btn">
                    <span class="d-none d-sm-block" id="buy-action" data-id="<?=$arResult["ID"]?>">Купить</span>
                    <img class="d-block d-sm-none" src="<?=SITE_TEMPLATE_PATH?>/images/profile-cart.png">
                </button>
            </div>
            <div class="dd-profile__info-social">
                <a class="share_vk" href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-vk.png">
                </a>
                <a href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-instagram.png">
                </a>
                <a class="share_fb" href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-fb.png">
                </a>
            </div>
            <?/*?>
            <div class="dd-profile__info-variant">
                <div class="dd-profile__info-variant-title">Другие цвета</div>
                <?if(isset($arResult["OTHER_COLORS"])):?>
                <div class="dd-profile__info-variant-slider row">
                    <?foreach ($arResult["OTHER_COLORS"] as $col):?>
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <a href="<?=$col["url"]?>" ><img src="<?=$col["pic"]?>"></a>
                        </div>
                    </div>
                        <?endforeach;?>
                </div>
                <?endif?>
            </div>
            <?*/?>
            <div class="dd-profile__info-desc">
                <div class="dd-profile__info-desc-title">ПОДРОБНЕЕ</div>
                <p class="dd-profile__info-desc-text"><?=$arResult["DETAIL_TEXT"]?></p>
                <?/*?>
                <table class="dd-profile__info-desc-params">
                    <?foreach ($arResult["SMART_FILTER"] as $sm_prop):?>
                        <?if(strlen($sm_prop["VALUE"])>0):?>
                    <tr>
                        <th><?=$sm_prop["NAME"]?></th>
                        <td><?=$sm_prop["VALUE"]?></td>
                    </tr>
                            <?endif;?>
                    <?endforeach;?>
                </table>
                <?*/?>
            </div>
        </div>
    </div>

<?/*?>
    <div class="dd-profile__products">
        <div class="dd-profile__products-title">
            Рекомендуем также
        </div>
        <div class="dd-catalog__list-wrap row">
            <?if(is_array($arResult["ASSOCIATED"])): $count=4;?>
<?foreach ($arResult["ASSOCIATED"] as $elem): if($count<=0) break;?>
            <div class="dd-catalog__list-item col-6 col-sm-3">
                <a class="dd-catalog__list-item-link" href="<?=$elem["url"]?>">
                    <img class="img-fluid" src="<?=$elem["pic"]?>" style="height: 296px;">
                    <div class="dd-catalog__list-item-footer">
                        <div class="dd-catalog__list-item-title"><?=$elem["name"]?></div>
                        <div class="dd-catalog__list-item-info">
                            Бренд - <?=$elem["brand"]?>
                            <span>Артикул № <?=$elem["artnumber"]?></span>
                        </div>
                        <div class="dd-catalog__list-item-price"><?=$elem["price"]?> руб</div>
                    </div>
                </a>
            </div>
                    <?$count--;?>
<?endforeach;?>
            <?endif?>
        </div>
    </div>
<?*/
