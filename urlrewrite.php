<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/oboi/(.*)/(.*)/product_(.*)/(.*)#",
        "RULE" => "brand=\$1&collection=\$2&item=\$3",
        "ID" => "",
        "PATH" => "/oboi/detail.php",
    ),
	array(
		"CONDITION" => "#^/oboi/(.*)/#",
		"RULE" => "params=\$1",
		"ID" => "",
		"PATH" => "/oboi/index.php",
	),
    array(
        "CONDITION" => "#^/oboi/(.*)/(.*)#",
        "RULE" => "brand=\$1",
        "ID" => "",
        "PATH" => "/oboi/index.php",
    ),
    array(
        "CONDITION" => "#^/lepnina/(.*)/(.*)/product_(.*)#",
        "RULE" => "section=\$1&item=\$2",
        "ID" => "",
        "PATH" => "/lepnina/detail.php",
    ),
    array(
        "CONDITION" => "#^/lepnina/(.*)/(.*)#",
        "RULE" => "section=\$1",
        "ID" => "",
        "PATH" => "/lepnina/index.php",
    ),
    array(
        "CONDITION" => "#^/tekstil/(.*)/(.*)/(.*)#",
        "RULE" => "section=\$1&item=\$2",
        "ID" => "",
        "PATH" => "/tekstil/detail.php",
    ),
    array(
        "CONDITION" => "#^/tekstil/(.*)/(.*)#",
        "RULE" => "section=\$1",
        "ID" => "",
        "PATH" => "/tekstil/index.php",
    ),
    array(
        "CONDITION" => "#^/novosti/(.*)/(.*)#",
        "RULE" => "item=\$1",
        "ID" => "",
        "PATH" => "/novosti/detail.php",
    ),
    array(
        "CONDITION" => "#^/kraski/(.*)/(.*)/(.*)#",
        "RULE" => "section=\$1&item=\$2",
        "ID" => "",
        "PATH" => "/kraski/detail.php",
    ),
    array(
        "CONDITION" => "#^/kraski/(.*)/(.*)#",
        "RULE" => "section=\$1",
        "ID" => "",
        "PATH" => "/kraski/index.php",
    )
);

?>