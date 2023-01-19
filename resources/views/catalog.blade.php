
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
<content class="align-top">
    <div class="catalog">
        <div class="container">
            <div class="catalog-menu">
                <p>Сортировка</p>
                <form action="assets/php/catalog_handler.php">
                    <select name="sort_type">
                        <option value="year">по году производства</option>
                        <option value="name">по наименованию</option>
                        <option value="price">по цене</option>
                    </select>
                    <select name="sort_order">
                        <option value="">по возрастанию</option>
                        <option value="desc">по убыванию</option>
                    </select>
                    <p>Категория</p>
                    <select name="item_category" size="4">
                        <option value="all" selected>Все категории</option>
                        <option value="laser">Лазерные принтеры</option>
                        <option value="spray">Струйные принтеры</option>
                        <option value="scaner">Сканеры</option>
                        <option value="mfu">МФУ</option>
                    </select>
                    <input type="submit" value="Применить" class="button">
                </form>
            </div>
    
            <div class="catalog-items">
                <div class="catalog-item">
                <div class="item-content">
                    <div class="item-name"><span>Сканер Avision FB5000</span><span>2008 г.</span></div>
                    <div class="item-picture"><a href="product"><img src="img/media/scaner1.jpg" alt="Сканер Avision FB5000"></a></div>
                    <div class="item-bottom">
                        <a href="product" class="item-page">Страница товара</a>
                        <a class="to-cart" data-id="10">5000 р.<div class="cart"></div></a>
                    </div>
                </div>
                </div>
                <div class="catalog-item">
                    <div class="item-content">
                        <div class="item-name"><span>Принтер Epson L1800</span><span>2012 г.</span></div>
                        <div class="item-picture"><a href="product"><img src="img/media/printer1.jpg" alt="Принтер Epson L1800"></a></div>
                        <div class="item-bottom">
                            <a href="product" class="item-page">Страница товара</a>
                            <a class="to-cart" data-id="8">8000 р.<div class="cart"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="error-wrapper">
    <div class="error">
        <p></p>
        <a class="button enter" href="login">Войти</a>
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
            <p>@ 2020-2022 Компания CopyStar. Администрация Сайта не несет ответственности за размещаемые Пользователями материалы (в т.ч. информацию и изображения), их содержание и качество.</p>
        </div>


    </div>
</footer>