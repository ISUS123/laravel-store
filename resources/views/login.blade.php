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
    <div class="container">
            <div class="auth-box">
                <p class="title">Авторизация</p>
                <div class="form-wrapper">
                    <form action="" method="post" id="form">
                        <div class="standard-form">
                            <div>
                                <label for="login">Логин: </label>
                                <input minlength="3" maxlength="20" required type="text" name="login" id="login">
                            </div>
                            <div>
                                <label for="password">Пароль:</label>
                                <input minlength="3" maxlength="20" required type="password" name="password" id="password">
                            </div>
                            <div class="buttons">
                                <p class="error-message">Пароли не совпадают</p>
                                <input type="submit" class="submit" value="Войти">
                            </div>
                        </div>
                    </form>
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