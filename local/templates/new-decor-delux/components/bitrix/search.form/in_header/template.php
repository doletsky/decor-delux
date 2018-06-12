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
$this->setFrameMode(true);?>
<form id="search_form" action="<?=$arResult["FORM_ACTION"]?>">
<input class="form-control dd-header-top__tools-text-search d-none d-sm-block" type="search" aria-label="Search">
<input name="s" type="hidden" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" />
</form>
<a class="dd-header-top__tools-search" href="#" onclick="$('#search_form').submit();return false;">
    <img src="/local/templates/new-decor-delux/images/search.png">
</a>