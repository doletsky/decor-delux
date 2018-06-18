<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<section class="dd-news _page container">
    <div class="row">
    <?$APPLICATION->IncludeComponent("bitrix:news.detail","news_page",Array(
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "USE_SHARE" => "Y",
            "SHARE_HIDE" => "N",
            "SHARE_TEMPLATE" => "",
            "SHARE_HANDLERS" => array(),
            "SHARE_SHORTEN_URL_LOGIN" => "",
            "SHARE_SHORTEN_URL_KEY" => "",
            "AJAX_MODE" => "N",
            "IBLOCK_TYPE" => "services",
            "IBLOCK_ID" => "8",
            "ELEMENT_ID" => "",
            "ELEMENT_CODE" => $_REQUEST["item"],
            "CHECK_DATES" => "Y",
            "FIELD_CODE" => Array("ID", "PREVIEW_PICTURE"),
            "PROPERTY_CODE" => Array(""),
            "IBLOCK_URL" => "",
            "DETAIL_URL" => "",
            "SET_TITLE" => "Y",
            "SET_CANONICAL_URL" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "BROWSER_TITLE" => "-",
            "SET_META_KEYWORDS" => "Y",
            "META_KEYWORDS" => "-",
            "SET_META_DESCRIPTION" => "Y",
            "META_DESCRIPTION" => "-",
            "SET_STATUS_404" => "Y",
            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "ADD_ELEMENT_CHAIN" => "Y",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "USE_PERMISSIONS" => "N",
            "GROUP_PERMISSIONS" => Array(),
            "CACHE_TYPE" => "N",
            "CACHE_TIME" => "3600",
            "CACHE_GROUPS" => "Y",
            "DISPLAY_TOP_PAGER" => "Y",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Страница",
            "PAGER_TEMPLATE" => "",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",
            "STRICT_SECTION_CHECK" => "Y",
            "PAGER_BASE_LINK" => "",
            "PAGER_PARAMS_NAME" => "arrPager",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N"
        )
    );?>
        <div class="col-12 col-sm-3">
            <div class="dd-subscribe">
                <div class="dd-subscribe__title">
                    <img src="<?=$path ?>public/images/subscribe-blue.png">
                    <span class="dd-subscribe__title-text">подписаться<br>на наши новости</span>
                </div>
                <form class="form">
                    <div class="form-group">
                        <input type="text" class="form-control-plaintext" value="email">
                        <button type="submit" class="btn btn-primary">Подписаться</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
