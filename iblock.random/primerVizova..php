<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<h1>Случайные элементы</h1>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...
</p>
<?php
$APPLICATION->IncludeComponent(
    "my:iblock.random",
    "",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "Y",
        "ELEMENT_COUNT" => "4",
        "ELEMENT_URL" => "#SITE_DIR#/#IBLOCK_CODE#/item/id/#ELEMENT_ID#/",
        "IBLOCK_ID" => "5",
        "IBLOCK_TYPE" => "content"
    )
);
?>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore...
</p>