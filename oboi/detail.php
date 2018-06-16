<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<section class="dd-breadcrumbs container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:catalog.element",
        "",
        Array(
            "ACTION_VARIABLE" => "action",
            "ADD_DETAIL_TO_SLIDER" => "N",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_PICT_PROP" => "-",
            "ADD_PROPERTIES_TO_BASKET" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "ADD_TO_BASKET_ACTION" => array("BUY"),
            "ADD_TO_BASKET_ACTION_PRIMARY" => array("BUY"),
            "BACKGROUND_IMAGE" => "-",
            "BASKET_URL" => "/personal/basket.php",
            "BLOG_USE" => "N",
            "BRAND_PROPERTY" => "BRAND_REF",
            "BRAND_PROP_CODE" => array("BRAND_REF", ""),
            "BRAND_USE" => "N",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "N",
            "CHECK_SECTION_ID_VARIABLE" => "N",
            "COMPARE_PATH" => "",
            "COMPATIBLE_MODE" => "Y",
            "CONVERT_CURRENCY" => "Y",
            "CURRENCY_ID" => "RUB",
            "DATA_LAYER_NAME" => "dataLayer",
            "DETAIL_PICTURE_MODE" => array("POPUP", "MAGNIFIER"),
            "DETAIL_URL" => "",
            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
            "DISPLAY_COMPARE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PREVIEW_TEXT_MODE" => "E",
            "ELEMENT_CODE" => $_REQUEST["item"],
            "ELEMENT_ID" => "",
            "FB_USE" => "Y",
            "FILE_404" => "",
            "HIDE_NOT_AVAILABLE_OFFERS" => "N",
            "IBLOCK_ID" => "2",
            "IBLOCK_TYPE" => "catalog",
            "LABEL_PROP" => array("NEWPRODUCT"),
            "LABEL_PROP_MOBILE" => array(),
            "LABEL_PROP_POSITION" => "top-left",
            "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
            "LINK_IBLOCK_ID" => "",
            "LINK_IBLOCK_TYPE" => "",
            "LINK_PROPERTY_SID" => "",
            "MAIN_BLOCK_OFFERS_PROPERTY_CODE" => array("COLOR_REF"),
            "MAIN_BLOCK_PROPERTY_CODE" => array("MATERIAL"),
            "MESSAGE_404" => "",
            "MESS_BTN_ADD_TO_BASKET" => "В корзину",
            "MESS_BTN_BUY" => "Купить",
            "MESS_BTN_COMPARE" => "Сравнить",
            "MESS_BTN_SUBSCRIBE" => "Подписаться",
            "MESS_COMMENTS_TAB" => "Комментарии",
            "MESS_DESCRIPTION_TAB" => "Описание",
            "MESS_NOT_AVAILABLE" => "Нет в наличии",
            "MESS_PROPERTIES_TAB" => "Характеристики",
            "MESS_RELATIVE_QUANTITY_FEW" => "мало",
            "MESS_RELATIVE_QUANTITY_MANY" => "много",
            "MESS_SHOW_MAX_QUANTITY" => "Наличие",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "OFFERS_CART_PROPERTIES" => array("ARTNUMBER", "COLOR_REF", "SIZES_SHOES", "SIZES_CLOTHES"),
            "OFFERS_FIELD_CODE" => array("", ""),
            "OFFERS_LIMIT" => "0",
            "OFFERS_PROPERTY_CODE" => array("COLOR_REF", "SIZES_SHOES", "SIZES_CLOTHES", ""),
            "OFFERS_SORT_FIELD" => "sort",
            "OFFERS_SORT_FIELD2" => "id",
            "OFFERS_SORT_ORDER" => "asc",
            "OFFERS_SORT_ORDER2" => "desc",
            "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
            "OFFER_TREE_PROPS" => array("COLOR_REF", "SIZES_SHOES", "SIZES_CLOTHES"),
            "PARTIAL_PRODUCT_PROPERTIES" => "Y",
            "PRICE_CODE" => array("BASE"),
            "PRICE_VAT_INCLUDE" => "Y",
            "PRICE_VAT_SHOW_VALUE" => "N",
            "PRODUCT_ID_VARIABLE" => "id",
            "PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
            "PRODUCT_PAY_BLOCK_ORDER" => "rating,price,quantityLimit,quantity,buttons",
            "PRODUCT_PROPERTIES" => array("NEWPRODUCT", "SALELEADER", "MATERIAL"),
            "PRODUCT_PROPS_VARIABLE" => "prop",
            "PRODUCT_QUANTITY_VARIABLE" => "",
            "PRODUCT_SUBSCRIPTION" => "Y",
            "PROPERTY_CODE" => array("brand", "collection", "ARTNUMBER", "GALLERY", "OTHER_COLORS", "ASSOCIATED"),
            "RELATIVE_QUANTITY_FACTOR" => "5",
            "SECTION_CODE" => "",
            "SECTION_CODE_PATH" => "",
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_ID_VARIABLE" => "SECTION_ID",
            "SECTION_URL" => "",
            "SEF_MODE" => "N",
            "SEF_RULE" => "",
            "SET_BROWSER_TITLE" => "Y",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SET_VIEWED_IN_COMPONENT" => "N",
            "SHOW_404" => "N",
            "SHOW_CLOSE_POPUP" => "N",
            "SHOW_DEACTIVATED" => "N",
            "SHOW_DISCOUNT_PERCENT" => "Y",
            "SHOW_MAX_QUANTITY" => "M",
            "SHOW_OLD_PRICE" => "N",
            "SHOW_PRICE_COUNT" => "1",
            "SHOW_SLIDER" => "Y",
            "SLIDER_INTERVAL" => "5000",
            "SLIDER_PROGRESS" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "TEMPLATE_THEME" => "blue",
            "USE_COMMENTS" => "N",
            "USE_ELEMENT_COUNTER" => "Y",
            "USE_ENHANCED_ECOMMERCE" => "Y",
            "USE_GIFTS_DETAIL" => "Y",
            "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
            "USE_MAIN_ELEMENT_SECTION" => "N",
            "USE_PRICE_COUNT" => "N",
            "USE_PRODUCT_QUANTITY" => "Y",
            "USE_VOTE_RATING" => "Y",
            "VK_USE" => "Y",
            "VOTE_DISPLAY_AS_RATING" => "rating"
        )
    );?>
    <?/*?>
    <a class="dd-breadcrumbs__link" href="">Главная</a>
    &nbsp>&nbsp
    <a class="dd-breadcrumbs__link" href="">Категория</a>
    &nbsp>&nbsp
    <span class="dd-breadcrumbs__link">Страница</span>
</section>
<section class="dd-profile container">
    <div class="row">
        <div class="dd-profile__slider col-12 col-sm-6">
            <h3 class="d-block d-sm-none">Lorem ipsum dolor sit amet ipsum dolor sit amet</h3>
            <div class="dd-profile__slider-main">
                <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
            </div>
            <div class="dd-profile__slider-nav">
                <div class="dd-profile__slider-nav-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                </div>
                <div class="dd-profile__slider-nav-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                </div>
                <div class="dd-profile__slider-nav-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                </div>
                <div class="dd-profile__slider-nav-item">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                </div>
            </div>
        </div>
        <div class="dd-profile__info col-12 col-sm-6">
            <h3 class="d-none d-sm-block">НАИМЕНОВАНИЕ ТОВАРА</h3>
            <div class="dd-profile__info-brief">
                <span>Бренд - Lorem ipsum</span>
                <span>Коллекция - Lorem ipsum</span>
                <span>Артикул № 11111111</span>
            </div>
            <div class="dd-profile__info-buy">
                <div class="dd-profile__info-buy-price">1250 Р</div>
                <div class="dd-profile__info-buy-count">
                    <div class="dd-profile__info-buy-count-btn _minus">&minus;</div>
                    <input type="text" class="dd-profile__info-buy-count-value" value="100">
                    <div class="dd-profile__info-buy-count-btn _plus">+</div>
                </div>
                <button class="dd-profile__info-buy-btn">
                    <span class="d-none d-sm-block">Купить</span>
                    <img class="d-block d-sm-none" src="<?=SITE_TEMPLATE_PATH?>/images/profile-cart.png">
                </button>
            </div>
            <div class="dd-profile__info-social">
                <a href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-vk.png">
                </a>
                <a href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-instagram.png">
                </a>
                <a href="">
                    <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/images/social-fb.png">
                </a>
            </div>
            <div class="dd-profile__info-variant">
                <div class="dd-profile__info-variant-title">Другие цвета</div>
                <div class="dd-profile__info-variant-slider row">
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                        </div>
                    </div>
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                        </div>
                    </div>
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                        </div>
                    </div>
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                        </div>
                    </div>
                    <div class="dd-profile__info-variant-slider-item _active">
                        <div class="dd-profile__info-variant-slider-item-inner">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/example/profile.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="dd-profile__info-desc">
                <div class="dd-profile__info-desc-title">ПОДРОБНЕЕ</div>
                <p class="dd-profile__info-desc-text">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                </p>
                <table class="dd-profile__info-desc-params">
                    <tr>
                        <th>Бренд</th>
                        <td>DID</td>
                    </tr>
                    <tr>
                        <th>Коллекция</th>
                        <td>RELIEVO</td>
                    </tr>
                    <tr>
                        <th>Бренд</th>
                        <td>DID</td>
                    </tr>
                    <tr>
                        <th>Коллекция</th>
                        <td>RELIEVO</td>
                    </tr>
                    <tr>
                        <th>Бренд</th>
                        <td>DID</td>
                    </tr>
                    <tr>
                        <th>Коллекция</th>
                        <td>RELIEVO</td>
                    </tr>
                    <tr>
                        <th>Бренд</th>
                        <td>DID</td>
                    </tr>
                    <tr>
                        <th>Коллекция</th>
                        <td>RELIEVO</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="dd-profile__products">
        <div class="dd-profile__products-title">
            Рекомендуем также
        </div>
        <div class="dd-catalog__list-wrap row">
<!--            --><?// include '../src/templates/list-item.blade.php' ?>
<!--            --><?// include '../src/templates/list-item.blade.php' ?>
<!--            --><?// include '../src/templates/list-item.blade.php' ?>
<!--            --><?// include '../src/templates/list-item.blade.php' ?>
        </div>
    </div>
    <?*/?>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
