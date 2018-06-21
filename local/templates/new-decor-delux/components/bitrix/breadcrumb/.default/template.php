<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";
?>


<?
$strReturn = '';

foreach($arResult as $k => $item){
    if($item["LINK"] <> "" && $k<count($arResult)-1){
        $strReturn .='<a class="dd-breadcrumbs__link" href="'.$item['LINK'].'">'.$item['TITLE'].'</a>&nbsp>&nbsp';
    }else{
        $strReturn .='<span class="dd-breadcrumbs__link" href="'.$item['LINK'].'">'.$item['TITLE'].'</span>';
    }
}

return $strReturn;
?>

