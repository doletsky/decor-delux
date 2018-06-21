<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();



if (!is_array($arResult["arMap"]) || count($arResult["arMap"]) < 1)

	return;
?>
    <section class="dd-sitemap container">
        <div class="row">
<?


$arRootNode = Array();

foreach($arResult["arMap"] as $index => $arItem)

{
    if($arItem["LEVEL"]==0){
        if($index!=0){
            ?>
                </ul>
            </div>
            <?
        }
        ?>
                    <div class="dd-sitemap__col col-6 col-sm-2">
                        <ul class="list-unstyled">
                            <li>
                                <a class="dd-sitemap__head" href="<?=$arItem["FULL_PATH"]?>"><?=$arItem["NAME"]?></a>
                            </li>
        <?
    }else{
        ?>
            <li>
                <a class="dd-sitemap__item" href="<?=$arItem["FULL_PATH"]?>"><?=$arItem["NAME"]?></a>
            </li>
        <?
        }
}

?>
                </ul>
            </div>
        </div>
    </section>
