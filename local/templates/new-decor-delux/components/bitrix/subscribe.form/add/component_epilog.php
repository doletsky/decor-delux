<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
if(count($_REQUEST["sf_RUB_ID"])>0 && isset($_REQUEST["sf_EMAIL"]) && isset($_REQUEST["AJAX"])){
    CModule::IncludeModule("subscribe");
    $subscr = CSubscription::GetList(
        array("ID"=>"ASC"),
        array(
            "RUBRIC"=>array("ID"=>$_REQUEST["sf_RUB_ID"][0]),
            "EMAIL"=>$_REQUEST["sf_EMAIL"]
        )
    );
    if($subscr_arr = $subscr->GetNext()){
        //уже подписан
        $mess="Вы уже подписаны на эту рассылку";
    }else{
        //еще не подписан
        $arFields = Array(
            "USER_ID" => false,
            "FORMAT" => "text",
            "EMAIL" => $_REQUEST["sf_EMAIL"],
            "ACTIVE" => "Y",
            "RUB_ID" => $_REQUEST["sf_RUB_ID"],
            "SEND_CONFIRM" => "N",
            "CONFIRMED" => "Y"
        );
        $subscr = new CSubscription;

        $ID = $subscr->Add($arFields);
        $mess="Вы успешно подписались на наши новости";
    }
    echo $mess;
}
?>

