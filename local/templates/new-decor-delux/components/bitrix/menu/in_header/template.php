<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<?if (!empty($arResult)):?>
<nav class="dd-menu navbar navbar-expand-sm container-fluid">
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav m-auto">
        <?
        foreach($arResult as $arItem):
            ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?endforeach?>
        </ul>
    </div>
</nav>
<?endif?>

