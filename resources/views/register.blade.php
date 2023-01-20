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
                <p class="title">Регистрация нового клиента</p>
                <div class="form-wrapper">
                    <form action="assets/php/register_handler.php" method="post" id="form">
                        <div class="standard-form">
                            <div>
                                <label for="name">Имя: </label>
                                <input minlength="1" maxlength="32" required type="text" name="name" id="name">
                            </div>
                            <div>
                                <label for="surname">Фамилия: </label>
                                <input minlength="1" maxlength="32" required type="text" name="surname" id="surname">
                            </div>
                            <div>
                                <label for="patronymic">Отчество: </label>
                                <input minlength="1" maxlength="32" type="text" name="patronymic" id="patronymic">
                            </div>
                            <div>
                                <label for="login">Логин: </label>
                                <input minlength="3" maxlength="16" required type="text" name="login" id="login">
                            </div>
                            <div>
                                <label for="email">Email: </label>
                                <input minlength="3" maxlength="64" required type="email" name="email" id="email">
                            </div>
                            <div>
                                <label for="password">Пароль:</label>
                                <input minlength="6" maxlength="32" required type="password" name="password" id="password">
                            </div>
                            <div>
                                <label for="password_repeat">Повтор пароля:</label>
                                <input minlength="6" maxlength="32" required type="password" name="password_repeat" id="password_repeat">
                            </div>
                            <div class="buttons">
                                <p class="error-message">Пароли не совпадают</p>
                                <input type="submit" class="submit" value="Зарегистрироваться">
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