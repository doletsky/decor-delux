<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <footer class="dd-footer container">
        <div class="dd-footer__wrap">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <?$APPLICATION->IncludeComponent("bitrix:menu","in_footer",Array(
                            "ROOT_MENU_TYPE" => "bottom",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => ""
                        )
                    );?>
                </div>
                <div class="d-none d-lg-block col-sm-4">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.view",
                        "",
                        Array(
                            "CONTROLS" => array("SMALLZOOM","TYPECONTROL","SCALELINE"),
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.76214365533653;s:10:\"yandex_lon\";d:37.68107471163936;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.68107471163936;s:3:\"LAT\";d:55.76214365533653;s:4:\"TEXT\";s:0:\"\";}}}",
                            "MAP_HEIGHT" => "315",
                            "MAP_ID" => "",
                            "MAP_WIDTH" => "AUTO",
                            "OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING")
                        )
                    );?>
<!--                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acabd6280e34890eb655a2550008d600d4c7822a1526ca8abbaca13442788284a&amp;width=100%&amp;height=315&amp;lang=ru_RU&amp;scroll=true"></script>-->
                </div>
                <div class="dd-footer__forms col-12 col-sm-4">
                    <form class="dd-callback form-inline" style="margin-bottom: 1em;">
                        <div class="form-group">
                            <input id="phone" type="text" class="form-control-plaintext" value="">
                            <button type="submit" onclick="return false" class="btn btn-primary">Заказать звонок</button>
                        </div>
                    </form>

                    <div class="dd-footer__address">
                        МОСКВА,<br>
                        НАБЕРЕЖНАЯ АК. ТУПОЛЕВА 15 СТР 2,<br>
                        БЦ ТУПОЛЕВ ПЛАЗА
                    </div>

                    <div class="dd-footer__subscribe">
                        <?$APPLICATION->IncludeComponent("bitrix:subscribe.form","",Array(
                                "USE_PERSONALIZATION" => "Y",
                                "PAGE" => "/",
                                "SHOW_HIDDEN" => "Y",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "3600"
                            )
                        );?>
                    </div>

                </div>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="/local/templates/new-decor-delux/js/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/local/templates/new-decor-delux/js/jquery/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/local/templates/new-decor-delux/js/jquery/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/local/templates/new-decor-delux/js/slick.min.js"></script>
<script type="text/javascript" src="/local/templates/new-decor-delux/js/main.js"></script>
<script type="text/javascript" src="/local/templates/new-decor-delux/js/script.js"></script>


    </body>
    </html>
