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
?>

<div class="dd-footer__subscribe-title">
    <img src="/local/templates/new-decor-delux/images/subscribe.png">
    <span class="dd-footer__subscribe-title-text">подписывайтесь<br>на наши новости</span>
</div>
<form id="sf" class="form-inline" action="<?=$arResult["FORM_ACTION"]?>" method="post">
    <div class="form-group">
        <input type="hidden" name="sf_RUB_ID[]" id="sf_RUB_ID_1" value="1" />
        <input id="subscribe" type="email" name="sf_EMAIL" class="form-control-plaintext" value="">
        <button type="submit" class="btn btn-primary">Подписаться</button>
    </div>
</form>
