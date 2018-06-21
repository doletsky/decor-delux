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


<div class="col-12 col-sm-3">
    <div class="dd-subscribe">
        <div class="dd-subscribe__title">
            <img src="/local/templates/new-decor-delux/images/subscribe-blue.png">
            <span class="dd-subscribe__title-text">подписаться<br>на наши новости</span>
        </div>
        <form id="sf" class="form" action="<?=$arResult["FORM_ACTION"]?>" method="post">
            <div class="form-group">
                <input type="hidden" name="sf_RUB_ID[]" id="sf_RUB_ID_1" value="1" />
                <input id="subscribe" type="text" name="sf_EMAIL" class="form-control-plaintext" value="">
                <button type="submit" class="btn btn-primary">Подписаться</button>
            </div>
        </form>
    </div>
</div>
<?/*?>
<div class="col-12 col-sm-3">
    <div class="dd-subscribe">
        <div class="dd-subscribe__title">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/subscribe-blue.png">
            <span class="dd-subscribe__title-text">подписаться<br>на наши новости</span>
        </div>
        <form class="form">
            <div class="form-group">
                <input type="text" class="form-control-plaintext" value="email">
                <button type="submit" class="btn btn-primary">Подписаться</button>
            </div>
        </form>
    </div>
</div><?*/?>