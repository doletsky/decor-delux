<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetPageProperty("title", "Decor-delux.com - дистрибьютор обоев и краски класса люкс ");
//$APPLICATION->SetTitle("Интернет-магазин обоев и краски");
?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>ВсяОтделка.ру - интернет-гипермаркет отделочных материлов</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <link href="http://192.168.0.101/local/templates/new-decor-delux/css/main.css?10" rel="stylesheet">
    </head>

    <body>
    <header>
        <section class="dd-header-top">
            <div id="toggleMenu">
                <img src="/local/templates/new-decor-delux/images/menu.svg">
            </div>

            <a class="dd-header-top__logo navbar-brand" href="/main.blade.php">
                <img class="img-fluid" src="/local/templates/new-decor-delux/images/logo.png">
            </a>
            <div class="dd-header-top__info d-none d-sm-block">
                <img class="dd-header-top__info-icon-call" src="/local/templates/new-decor-delux/images/phone.png">
                <span class="dd-header-top__info-phone">(495) 555-55-55</span>
                <img class="dd-header-top__info-icon-geo" src="/local/templates/new-decor-delux/images/geo.png">
                <span class="dd-header-top__info-city">Москва</span>
            </div>
            <div class="dd-header-top__tools">
                <input class="form-control dd-header-top__tools-text-search d-none d-sm-block" type="search" aria-label="Search">
                <a class="dd-header-top__tools-search" href="">
                    <img src="/local/templates/new-decor-delux/images/search.png">
                </a>
                <a class="dd-header-top__tools-enter" href="">
                    <img src="/local/templates/new-decor-delux/images/enter.png">
                </a>
                <a class="dd-header-top__tools-cart" href="">
                    <img src="/local/templates/new-decor-delux/images/cart.png">
                </a>
            </div>

        </section>
        <nav class="dd-menu navbar navbar-expand-sm container-fluid">
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/category.blade.php">Обои</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category.blade.php">Краски</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category.blade.php">Лепнина</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category.blade.php">Текстиль</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/actions.blade.php">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts.blade.php">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partners.blade.php">Партнерам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/partners.blade.php">Дизайнерам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts.blade.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="dd-gallery container-fluid">
        <div class="dd-gallery__list row">
            <a class="dd-gallery__item _oboi col-12 col-sm-3 col-lg-3">
                <div class="dd-gallery__item-title">Обои</div>
            </a>
            <a class="dd-gallery__item _kraski col-12 col-sm-3 col-lg-3">
                <div class="dd-gallery__item-title">Краски</div>
            </a>
            <a class="dd-gallery__item _lepnina col-12 col-sm-3 col-lg-3">
                <div class="dd-gallery__item-title">Лепнина</div>
            </a>
            <a class="dd-gallery__item _textil col-12 col-sm-3 col-lg-3">
                <div class="dd-gallery__item-title">Текстиль</div>
            </a>
        </div>
    </section>


    <section class="dd-article">
        <div class="container">
            <div class="dd-article__slider row">
                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article1.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article2.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article3.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article1.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article2.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>

                <div class="dd-article__slide">
                    <a class="dd-article__item" style="background-image: url('/local/templates/new-decor-delux/images/example/article3.jpg')" href="/collection.blade.php">
                        <div class="dd-article__item-title">
                            <div class="dd-article__item-date">
                                <span class="dd-article__item-date-num">25</span>
                                <span class="dd-article__item-date-month">февраля</span>
                            </div>
                            <div class="dd-article__item-text">
                                HEADLINE GOES HERE HEADLINE GOES HERE
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="dd-brands container">
        <h2>НАШИ БРЕНДЫ</h2>
        <div class="dd-brands-slider">
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo1.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo2.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo3.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo4.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo5.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo6.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo7.png">
            </div>
            <div class="dd-brands-slider__item">
                <img src="/local/templates/new-decor-delux/images/example/brand/brand-logo1.png">
            </div>
        </div>
    </section>

    <section class="container">

        <div class="row m-row js-slider-2">
            <div class="dd-card col-sm-4 col-6">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/brand1.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">-35%</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>

            <div class="dd-card col-sm-4 col-6">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/brand2.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">-35%</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>

            <div class="dd-card col-sm-4 col-6">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/brand3.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">-35%</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="dd-new">
            <h2>Новинки</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            </p>
        </div>
        <div class="row m-row js-slider-2">
            <div class="dd-card col-sm-4 col-xs-12">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/new1.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">Обои</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>

            <div class="dd-card col-sm-4 col-xs-12">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/new2.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">Обои</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>

            <div class="dd-card col-sm-4 col-xs-12">
                <a class="dd-card__wrap" href="/brand.blade.php">
                    <img class="dd-card__img img-fluid" src="/local/templates/new-decor-delux/images/example/new3.jpg">
                    <div class="dd-card__footer">
                        <div class="dd-card__name">Обои</div>
                        <div class="dd-card__title">LOREM IPSUM DOLOR</div>
                        <div class="dd-card__subtitle">Бренд - бренд 1 | Коллекция - коллекция №</div>
                    </div>
                </a>
            </div>
        </div>
    </section>



    <footer class="dd-footer container">
        <div class="dd-footer__wrap">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <ul class="dd-footer__menu list-unstyled">
                        <li>
                            <a href="/contacts.blade.php">О компании</a>
                        </li>
                        <li>
                            <a href="/brand.blade.php">Бренды</a>
                        </li>
                        <li>
                            <a href="/contacts.blade.php">ОБРАТНАЯ СВЯЗЬ</a>
                        </li>
                        <li>
                            <a href="/contacts.blade.php">КОНТАКТЫ</a>
                        </li>
                        <li>
                            <a href="">ДИЗАЙНЕРАМ</a>
                        </li>
                        <li>
                            <a href="/partners.blade.php">ДИЛЕРАМ</a>
                        </li>
                        <li>
                            <a href="/partners.blade.php">КОРПОРАТИВНЫМ КЛИЕНТАМ</a>
                        </li>
                        <li>
                            <a href="/actions.blade.php">АКЦИИ И СПЕЦПРЕДЛОЖЕНИЯ</a>
                        </li>
                        <li>
                            <a href="/sitemap.blade.php">КАРТА САЙТА</a>
                        </li>
                    </ul>
                </div>
                <div class="d-none d-lg-block col-sm-4">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Acabd6280e34890eb655a2550008d600d4c7822a1526ca8abbaca13442788284a&amp;width=100%&amp;height=315&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
                <div class="dd-footer__forms col-12 col-sm-4">
                    <form class="dd-callback form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control-plaintext" value="">
                            <button type="submit" class="btn btn-primary">Заказать звонок</button>
                        </div>
                    </form>

                    <div class="dd-footer__address">
                        МОСКВА,<br>
                        НАБЕРЕЖНАЯ АК. ТУПОЛЕВА 15 СТР 2,<br>
                        БЦ ТУПОЛЕВ ПЛАЗА
                    </div>

                    <div class="dd-footer__subscribe">
                        <div class="dd-footer__subscribe-title">
                            <img src="/local/templates/new-decor-delux/images/subscribe.png">
                            <span class="dd-footer__subscribe-title-text">подписывайтесь<br>на наши новости</span>
                        </div>
                        <form class="form-inline">
                            <div class="form-group">
                                <input type="text" class="form-control-plaintext" value="">
                                <button type="submit" class="btn btn-primary">Подписаться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="/local/templates/new-decor-delux/js/bundle.js?10"></script>

    </body>
    </html>
<?
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>