<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if ($_SERVER["REQUEST_METHOD"] != "POST")
    return;

if (!CModule::includeModule('sale') || !CModule::includeModule('catalog'))
    return;

global $USER, $APPLICATION;


echo Add2BasketByProductID($_POST["id"], $_POST["quantity"]);
if ($ex = $APPLICATION->GetException())
    echo '<br>'.$ex->GetString();