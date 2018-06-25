<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (isset($arParams["TEMPLATE_THEME"]) && !empty($arParams["TEMPLATE_THEME"]))
{
	$arAvailableThemes = array();
	$dir = trim(preg_replace("'[\\\\/]+'", "/", dirname(__FILE__)."/themes/"));
	if (is_dir($dir) && $directory = opendir($dir))
	{
		while (($file = readdir($directory)) !== false)
		{
			if ($file != "." && $file != ".." && is_dir($dir.$file))
				$arAvailableThemes[] = $file;
		}
		closedir($directory);
	}

	if ($arParams["TEMPLATE_THEME"] == "site")
	{
		$solution = COption::GetOptionString("main", "wizard_solution", "", SITE_ID);
		if ($solution == "eshop")
		{
			$templateId = COption::GetOptionString("main", "wizard_template_id", "eshop_bootstrap", SITE_ID);
			$templateId = (preg_match("/^eshop_adapt/", $templateId)) ? "eshop_adapt" : $templateId;
			$theme = COption::GetOptionString("main", "wizard_".$templateId."_theme_id", "blue", SITE_ID);
			$arParams["TEMPLATE_THEME"] = (in_array($theme, $arAvailableThemes)) ? $theme : "blue";
		}
	}
	else
	{
		$arParams["TEMPLATE_THEME"] = (in_array($arParams["TEMPLATE_THEME"], $arAvailableThemes)) ? $arParams["TEMPLATE_THEME"] : "blue";
	}
}
else
{
	$arParams["TEMPLATE_THEME"] = "blue";
}

$arParams["FILTER_VIEW_MODE"] = (isset($arParams["FILTER_VIEW_MODE"]) && toUpper($arParams["FILTER_VIEW_MODE"]) == "HORIZONTAL") ? "HORIZONTAL" : "VERTICAL";
$arParams["POPUP_POSITION"] = (isset($arParams["POPUP_POSITION"]) && in_array($arParams["POPUP_POSITION"], array("left", "right"))) ? $arParams["POPUP_POSITION"] : "left";

$arTrParams = array("replace_other"=>"-");
$arDecSmFilter=array();
foreach ($arResult["ITEMS"] as $iid=>$item){
    if(count($item["VALUES"])>0){
        foreach ($item["VALUES"] as $vid=>$val){
            if(preg_match("/[а-яА-ЯЁё]/iu", $val["UPPER"])){
                $control_code = Cutil::translit($val["UPPER"],"ru", $arTrParams);
            }
            else{
                $control_code = strtolower(str_replace("+", "~",(str_replace(" ", "_",$val["UPPER"]))));
            }
            $arResult["ITEMS"][$iid]["VALUES"][$vid]["CONTROL_CODE"]=$control_code;
            $arDecSmFilter[$control_code]=array("NAME"=>"=PROPERTY_".$iid, "VALUE"=>$vid, "IID"=>$iid);
        }
    }
}
global $arrFilter;
if(isset($_REQUEST["params"])){
    $_REQUEST["params"]=explode("?",$_REQUEST["params"])[0];
    $arSmParam=explode("/",$_REQUEST["params"]);
    $arResult["SM_PARAM"]=$arSmParam;
    foreach ($arSmParam as $par){
        $arrFilter[$arDecSmFilter[$par]["NAME"]]=$arDecSmFilter[$par]["VALUE"];
        $arResult["ITEMS"][$arDecSmFilter[$par]["IID"]]["VALUES"][$arDecSmFilter[$par]["VALUE"]]["CHECKED"]=1;
    }
}
