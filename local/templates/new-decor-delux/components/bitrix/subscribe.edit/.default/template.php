<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?/*?>
<div class="subscribe-edit">
<?

foreach($arResult["MESSAGE"] as $itemID=>$itemValue)
	echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"OK"));
foreach($arResult["ERROR"] as $itemID=>$itemValue)
	echo ShowMessage(array("MESSAGE"=>$itemValue, "TYPE"=>"ERROR"));

//whether to show the forms
if($arResult["ID"] == 0 && empty($_REQUEST["action"]) || CSubscription::IsAuthorized($arResult["ID"]))
{
	//show confirmation form
	if($arResult["ID"]>0 && $arResult["SUBSCRIPTION"]["CONFIRMED"] <> "Y")
	{
		include("confirmation.php");
	}
	//show current authorization section
	if($USER->IsAuthorized() && ($arResult["ID"] == 0 || $arResult["SUBSCRIPTION"]["USER_ID"] == 0))
	{
		include("authorization.php");
	}
	//show authorization section for new subscription
	if($arResult["ID"]==0 && !$USER->IsAuthorized())
	{
		if($arResult["ALLOW_ANONYMOUS"]=="N" || ($arResult["ALLOW_ANONYMOUS"]=="Y" && $arResult["SHOW_AUTH_LINKS"]=="Y"))
		{
			include("authorization_new.php");
		}
	}
	//setting section
	include("setting.php");
	//status and unsubscription/activation section
	if($arResult["ID"]>0)
	{
		include("status.php");
	}
	?>
	<p><span class="starrequired">*</span><?echo GetMessage("subscr_req")?></p>
	<?
}
else
{
	//subscription authorization form
	include("authorization_full.php");
}
?>
</div>
<?*/?>
<pre><?print_r($arResult)?></pre>

<div class="dd-footer__subscribe-title">
    <img src="/local/templates/new-decor-delux/images/subscribe.png">
    <span class="dd-footer__subscribe-title-text">подписывайтесь<br>на наши новости</span>
</div>
<form class="form-inline" action="<?=$arResult["FORM_ACTION"]?>" method="post">
    <div class="form-group">
        <input type="hidden" name="RUB_ID[]" id="sf_RUB_ID_1" value="1" />
        <input type="hidden" name="Save" value="Добавить" />
        <input type="hidden" name="PostAction" value="Add" />
        <input type="hidden" name="sessid" value="<?=bitrix_sessid_get()?>" />
        <input type="hidden" name="ID">
        <input id="subscribe" type="text" name="EMAIL" class="form-control-plaintext" value="">
        <button type="submit" class="btn btn-primary">Подписаться</button>
    </div>
</form>
