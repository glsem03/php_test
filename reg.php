<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="content">
        <form action="/includes/registartion.php" method="post" class="auth-form">
            <label class="auth-form__label">Логин:</label>
            <input name="login" type="text" class="auth-form__input" placeholder="Введите ваш логин...">
            <label class="auth-form__label">Почта:</label>
            <input name="email" type="email" class="auth-form__input" placeholder="Введите вашу почту...">
            <label class="auth-form__label">Пароль:</label>
            <input name="password" type="password" class="auth-form__input" placeholder="Введите ваш пароль...">
            <label class="auth-form__label">Повтор пароля:</label>
            <input name="password_conf" type="password" class="auth-form__input" placeholder="Повторите ваш пароль...">
            <div class="auth-form__btns">
                <button type="submit" class="auth-form__button auth-form__button-big">Зарегистрироваться</button>
                <a href="/" class="auth-form__link">У меня уже есть аккаунт</a>
            </div>
            <div class="auth-form__message-error"><?php echo $_SESSION['message']; unset($_SESSION['message']);?></div>
        </form>
    </div>
</body>
</html>
