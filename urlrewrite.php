<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/oboi/(.*)/(.*)/(.*)/(.*)#",
        "RULE" => "brand=\$1&collection=\$2&item=\$3",
        "ID" => "",
        "PATH" => "/oboi/detail.php",
    ),
	array(
		"CONDITION" => "#^/oboi/(.*)/(.*)/(.*)#",
		"RULE" => "brand=\$1&collection=\$2",
		"ID" => "",
		"PATH" => "/oboi/index.php",
	),
    array(
        "CONDITION" => "#^/oboi/(.*)/(.*)#",
        "RULE" => "brand=\$1",
        "ID" => "",
        "PATH" => "/oboi/index.php",
    )
);

?>