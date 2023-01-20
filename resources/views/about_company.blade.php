
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copy Star</title>
    <link rel="stylesheet/less" type="text/css" href="css/style.less" />
    <script src="js/less@4.js"></script>
    <link rel="shortcut icon" href="img/favicon.png" sizes="512x512" type="image/x-icon">
</head>
<header>
    <div class="container">
        <div class="menus">
            <a href="about_company" class="menu-button button-about">О нас
                <img src="img/logo.png" alt="" class="company-logo">
            </a>
            <a href="catalog" class="menu-button">Каталог</a>
            <a href="location" class="menu-button">Где нас найти?</a>
        </div>

        <div class='auth-buttons'>
                <a href='login' class='menu-button button-login auth'>Вход</a>
                <a href='register' class='menu-button button-register auth'>Регистрация</a>
            </div>
        <button class="nav-trigger">
            <span></span>
        </button>

    </div>
</header>
<content>
    <div class="about-page">
        <div class="container">
            <div class="quiz-wrapper">
                <div class="quiz">
                    <div class="hide">
                        <svg viewBox="0 0 50 50">
                            <path class="st1" d="M5,5c13.33,13.33,26.67,26.67,40,40" />
                            <path class="st1" d="M45,5C31.67,18.33,18.33,31.67,5,45" />
                        </svg>
                    </div>
                    <p>Тест о компании</p>
                    <form class="standard-form">
                        <!-- Form making by JS -->
                    </form>
                </div>
                <div class="quiz-result">
                    <p>Результаты теста</p>
                    <p class="result-text"></p>
                </div>
            </div>
            <div class="about">
                <img src="img/logo.png" alt="">
                <p class="title">Copy Star</p>
                <div>
                    <p>Компания CopyStar основана Иваном Ивановичем в 2004 году. Компания специализируется на производстве копировального оборудования. Главный офис находится в Москве.</p>
                </div>
                <a class="show-quiz"></a>
            </div>
    
            <div class="slider">
                <div class="slider-arrow left">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 460">
                        <polyline class="st0" points="10.95,10.16 120.95,230.16 10.95,450.16 " />
                    </svg>
                </div>
                <div class="slider-content">
                    <p>Новинки компании</p>
                    <div class="slider-line">
    
                        <div class='catalog-item' data-id='29'>
                            <div class='item-left'>
                                <span>МФУ HP LaserJet Pro M227sdn (G3Q74A)</span>
                                <p>МФУ (принтер/сканер/копир), лазерная черно-белая печать, A4, двусторонняя печать, планшетный/протяжный сканер, ЖК панель, сетевой (Ethernet), AirPrint</p>
                                <a href='product'>Страница товара</a>
                                <span>34500 р.</span>
                            </div>
                            <div class='item-right'>
                                <img src='img/media/mfu1.jpg'>
                            </div>
                        </div><div class='catalog-item' data-id='11'>
                            <div class='item-left'>
                                <span>Сканер Avision</span>
                                <p>Нет описания</p>
                                <a href='product'>Страница товара</a>
                                <span>10000 р.</span>
                            </div>
                            <div class='item-right'>
                                <img src='img/media/scaner2.jpg'>
                            </div>
                        </div><div class='catalog-item' data-id='7'>
                            <div class='item-left'>
                                <span>МФУ Brother DCP-L2500DR</span>
                                <p>МФУ (принтер/сканер/копир), лазерная черно-белая печать, A4, двусторонняя печать, планшетный сканер, ЖК панель</p>
                                <a href='product'>Страница товара</a>
                                <span>34290 р.</span>
                            </div>
                            <div class='item-right'>
                                <img src='img/media/mfu2.jpg'>
                            </div>
                        </div><div class='catalog-item' data-id='8'>
                            <div class='item-left'>
                                <span>Принтер Epson L1800</span>
                                <p>принтер, струйная цветная печать, A3, печать фотографий</p>
                                <a href='product'>Страница товара</a>
                                <span>8000 р.</span>
                            </div>
                            <div class='item-right'>
                                <img src='img/media/printer1.jpg'>
                            </div>
                        </div><div class='catalog-item' data-id='9'>
                            <div class='item-left'>
                                <span>Принтер Canon PIXMA G1411</span>
                                <p>принтер, лазерная печать, A4, печать фотографий</p>
                                <a href='product'>Страница товара</a>
                                <span>7500 р.</span>
                            </div>
                            <div class='item-right'>
                                <img src='img/media/printer2.jpg'>
                            </div>
                        </div>                    </div>
                </div>
                <div class="slider-arrow right">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 460">
                        <polyline class="st0" points="10.95,10.16 120.95,230.16 10.95,450.16 " />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</content>

<footer>
    <div class="container">
        <div class="navmenu">

            <div class="navmenu-group">
                <h6 class="navmenu-title">
                    Компания
                </h6>
                <ul class="navmenu-submenu">
                    <li class="navmenu-link"><a href="about_company">О Компании</a></li>
                    <li class="navmenu-link"><a href="location">Расположение</a></li>
                </ul>
            </div>

            <div class="navmenu-group">
                <h6 class="navmenu-title">
                    Контакты
                </h6>
                <ul class="navmenu-submenu">
                    <li class="navmenu-link"><a href="tel:8-800-11-01-123">Телефон: 8-800-11-01-123</a></li>
                    <li class="navmenu-link"><p>Адрес: Котовск, улица Посконкина, 2А</p></li>
                </ul>
            </div>

        </div>
        <div class="copyright">
            <p>@ 2004-2023 Компания CopyStar. Администрация Сайта не несет ответственности за размещаемые Пользователями материалы (в т.ч. информацию и изображения), их содержание и качество.</p>
        </div>


    </div>
</footer>
<script src="js/about_page.js"></script>
