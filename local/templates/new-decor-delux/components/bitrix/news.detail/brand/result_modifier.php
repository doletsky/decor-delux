<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//для смартфильтра на старнице oboi/index.php
$arPId=array(
  "5"=>"5", //iblock_id=>ibllock_2_prop_id
  "9"=>"54"
);
$_GET["SF_PROP_ID"]=$arPId[$arResult["IBLOCK_ID"]];
$_GET["SF_PROP_VAL"]=abs(crc32($arResult["ID"]));