<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CEvent::Send("REQUEST_CALLBACK", "s1",
    array(
    "CALLBACK_PHONE"=>$_REQUEST["phone"]
));