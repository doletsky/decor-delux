<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
global $USER;
use Bitrix\Main,
    Bitrix\Main\Loader,
    Bitrix\Main\Config\Option,
    Bitrix\Sale,
    Bitrix\Sale\Order,
    Bitrix\Main\Application,
    Bitrix\Sale\DiscountCouponsManager;

if (!Loader::IncludeModule('sale')) die();
$request = Application::getInstance()->getContext()->getRequest();
global $USER, $APPLICATION;

$siteId = \Bitrix\Main\Context::getCurrent()->getSite();
$user = new CUser;
$arFields = Array(
    "NAME"              => $_POST["name"],
    "EMAIL"             => $_POST["email"],
    "LOGIN"             => $_POST["email"],
    "PERSONAL_PHONE"    => $_POST["phone"],
    "LID"               => "s1",
    "ACTIVE"            => "Y",
    "PASSWORD"          => "123456",
    "CONFIRM_PASSWORD"  => "123456"
);

$ID = $user->Add($arFields);
if (intval($ID) > 0)
    echo "Пользователь успешно добавлен.";
else
    echo $user->LAST_ERROR;
$registeredUserID = $ID; // или тут присваиваем идентификатор анонимного пользователя

$order = Order::create($siteId, $registeredUserID);
$order->setPersonTypeId(1); // ИД типа пользователя

$basket = Sale\Basket::loadItemsForFUser(\CSaleBasket::GetBasketUserID(),
    Bitrix\Main\Context::getCurrent()->getSite())->getOrderableItems();

$order->setBasket($basket);

$shipmentCollection = $order->getShipmentCollection();
$shipment = $shipmentCollection->createItem();

$shipment->setFields(array(
    'DELIVERY_ID' => 1,
    'DELIVERY_NAME' => 'Самовывоз',
    'CURRENCY' => $order->getCurrency()
));
$shipmentItemCollection = $shipment->getShipmentItemCollection();

foreach ($order->getBasket() as $item)
{
    $shipmentItem = $shipmentItemCollection->createItem($item);
    $shipmentItem->setQuantity($item->getQuantity());
}

$paymentCollection = $order->getPaymentCollection();
$extPayment = $paymentCollection->createItem();
$extPayment->setFields(array(
    'PAY_SYSTEM_ID' => 2,
    'PAY_SYSTEM_NAME' => 'Наличные',
    'SUM' => $order->getPrice()
));

$order->doFinalAction(true);
$propertyCollection = $order->getPropertyCollection();

foreach ($propertyCollection->getGroups() as $group)
{
    foreach ($propertyCollection->getGroupProperties($group['ID']) as $property)
    {
        $p = $property->getProperty();
        if( $p["CODE"] == "CONTACT_PERSON")
            $property->setValue("VASYA");
    }
}
//$currencyCode = CurrencyManager::getBaseCurrency();
//$order->setField('CURRENCY', $currencyCode);
$order->setField('COMMENTS', 'Заказ оформлен через АПИ. ' );
$r = $order->save();
$orderId = $order->GetId();
if(!$r->isSuccess()){
    if ($ex = $APPLICATION->GetException())
        echo $aaaa = $ex->GetString();

    // либо объекты ошибок с доп данными
    print_r($r->getErrors());
    // либо только сообщения
    print_r($r->getErrorMessages());

    // так же в заказе могут быть предупреждения, которые не являются причиной остановки процесса сохранения заказа, но мы их сохраняем в маркировки
    print_r($r->getWarnings());
    print_r($r->getWarningMessages());
    echo "Ошибка оформления";
} else {
    echo "Ваш заказ " . $orderId . " оформлен";
}