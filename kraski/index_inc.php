<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
$pic=CIBlock::GetArrayByID("10", "PICTURE");
$src=CFile::GetPath($pic);
?>
<section class="dd-gallery container-fluid _category">
    <div class="dd-gallery__item" style="background-image: url('<?=$src ?>')">
        <div class="dd-gallery__item-wrap container">
            <div class="dd-gallery__item-title">Краски</div>
        </div>
    </div>
</section>