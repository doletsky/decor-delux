<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>
    <section class="container">
        <h2>Корзина</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"decor",
	array(
		"ACTION_VARIABLE" => "basketAction",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AUTO_CALCULATION" => "Y",
		"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "PROPERTY_brand",
			2 => "PROPERTY_collection",
			3 => "PROPERTY_ARTNUMBER",
			4 => "PROPS",
			5 => "DELETE",
			6 => "PRICE",
			7 => "QUANTITY",
			8 => "SUM",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"CORRECT_RATIO" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"OFFERS_PROPS" => array(""),
		"PATH_TO_ORDER" => "/basket/",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"QUANTITY_FLOAT" => "N",
		"SET_TITLE" => "Y",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N"
	),
	false
);?>
        <div class="row">
        <div class="col-12 col-sm-6">
            <div class="dd-subscribe _feedback">
                <div class="dd-subscribe__title">
                    <span class="dd-subscribe__title-text">Оформить заказ</span>
                </div>
                <form id="form-send-order" class="form">
                    <div class="form-group">
                        <input id="name" type="text" class="form-control-plaintext" value="Имя">
                        <input id="email" type="text" class="form-control-plaintext" value="email">
                        <input id="phone" type="text" class="form-control-plaintext" value="телефон">
                        <button type="button" id="send-order" class="btn btn-primary">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>