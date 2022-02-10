<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="content">
        <form action="/includes/authorization.php" method="post" class="auth-form">
            <label class="auth-form__label">Логин:</label>
            <input name="login" type="login" class="auth-form__input" placeholder="Введите ваш логин или почту...">
            <label class="auth-form__label">Пароль:</label>
            <input name="password" type="password" class="auth-form__input" placeholder="Введите ваш пароль...">
            <div class="auth-form__btns">
                <button type="submit" class="auth-form__button">Войти</button>
                <a href="/reg.php" class="auth-form__link">Зарегистрироваться</a>
            </div>
            <?php
                //вывод сообщений
                if($_SESSION['message'] === "Регистрация прошла успешно!" | $_SESSION['message'] === "Вы успешно авторизировались!")
                    echo "<div class='auth-form__message-success'>".$_SESSION['message']."</div>";
                elseif($_SESSION['message'] === "Неверный логин или пароль")
                    echo "<div class='auth-form__message-error'>".$_SESSION['message']."</div>";
                unset($_SESSION['message']);
            ?>
        </form>
    </div>
</body>
</html>
