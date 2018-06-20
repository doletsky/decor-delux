<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
    <section class="dd-profile _paint container">
        <div class="row">
            <div class="dd-profile__slider col-12 col-sm-5">
                <h3 class="d-block d-sm-none"><?=$arResult['NAME']?></h3>
                <div class="dd-profile__slider-main">
                    <img class="img-fluid" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>">
                    <?if(isset($arResult["GALLERY_PATH"])):?>
                        <?foreach ($arResult["GALLERY_PATH"] as $src):?>
                            <img class="img-fluid" src="<?=$src?>">
                        <?endforeach;?>
                    <?endif?>
                </div>
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
            </div>
            <div class="dd-profile__info col-12 col-sm-7">
                <h3 class="d-none d-sm-block"><?=$arResult['NAME']?></h3>
                <p>
                    <?=$arResult["DETAIL_TEXT"]?>
                </p>
                <div class="row">
                    <div class="col-12 col-sm-8">
                        <div class="dd-profile__info-paint row">
                            <? foreach($arResult["PAL_9"] as $pal9) { ?>
                                <div class="col-4">
                                    <a href="<?=$pal9["DETAIL_PAGE_URL"]?>" ><div class="dd-profile__info-paint-item" style='background-image: url("<?=$pal9["IMG"]?>")'></div></a>
                                    <div class="dd-profile__info-paint-title"><?=$pal9["NAME"]?></div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="dd-collection__list row">
                            <? foreach ($arResult["PALITRA"] as $pal): ?>
                                <div class="col-1"><a href="<?=$pal["DETAIL_PAGE_URL"]?>" ><div id="<?=$pal['SORT']?>" class="dd-collection__list-item" style='background-image: url("<?=$pal["IMG"]?>")'></div></a></div>
                            <? endforeach; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="dd-profile__info-buy _vertical">
                            <div class="dd-profile__info-volume">
                                <label>Объем банки</label>
                                <select>
                                    <option>Выбрать</option>
                                    <option>1 л</option>
                                    <option>2 л</option>
                                    <option>3 л</option>
                                </select>
                            </div>

                            <div class="d-none d-sm-block">
                                <label>Количество</label>
                                <div class="dd-profile__info-buy-count">
                                    <div class="dd-profile__info-buy-count-btn _minus">&minus;</div>
                                    <input type="text" class="dd-profile__info-buy-count-value" value="100">
                                    <div class="dd-profile__info-buy-count-btn _plus">+</div>
                                </div>
                                <div class="dd-profile__info-buy-price">1250 Р</div>
                                <button class="dd-profile__info-buy-btn">
                                    <span class="d-none d-sm-block">Купить</span>
                                    <img class="d-block d-sm-none" src="<?=$path ?>public/images/profile-cart.png">
                                </button>
                            </div>
                        </div>

                        <div class="dd-profile__info-buy _hidden">
                            <div class="dd-profile__info-buy-price">1250 Р</div>
                            <div class="dd-profile__info-buy-count">
                                <div class="dd-profile__info-buy-count-btn _minus">&minus;</div>
                                <input type="text" class="dd-profile__info-buy-count-value" value="100">
                                <div class="dd-profile__info-buy-count-btn _plus">+</div>
                            </div>
                            <button class="dd-profile__info-buy-btn">
                                <span class="d-none d-sm-block">Купить</span>
                                <img class="d-block d-sm-none" src="<?=$path ?>public/images/profile-cart.png">
                            </button>
                        </div>

                        <div class="dd-profile__info-social">
                            <a href="">
                                <img class="img-fluid" src="<?=$path ?>public/images/social-vk.png">
                            </a>
                            <a href="">
                                <img class="img-fluid" src="<?=$path ?>public/images/social-instagram.png">
                            </a>
                            <a href="">
                                <img class="img-fluid" src="<?=$path ?>public/images/social-fb.png">
                            </a>
                            <a class="d-none d-sm-block" href="">
                                <img class="img-fluid" src="<?=$path ?>public/images/social-pinterest.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dd-profile__products">
            <div class="dd-profile__products-title">
                ЦВЕТА - КОМПАНЬОНЫ
            </div>
            <div class="dd-catalog__list-wrap row">
                <?if(is_array($arResult["COMPANION"])): $count=4;?>
                    <?foreach ($arResult["COMPANION"] as $elem): if($count<=0) break;?>
                        <div class="dd-catalog__list-item col-6 col-sm-3">
                            <a class="dd-catalog__list-item-link" href="<?=$elem["url"]?>">
                                <img class="img-fluid" src="<?=$elem["pic"]?>" style="height: 296px;">
                                <div class="dd-catalog__list-item-footer">
                                    <div class="dd-catalog__list-item-title"><?=$elem["name"]?></div>
                                    <div class="dd-catalog__list-item-price"><?=$elem["price"]?> руб</div>
                                </div>
                            </a>
                        </div>
                        <?$count--;?>
                    <?endforeach;?>
                <?endif?>
            </div>
        </div>
    </section>
