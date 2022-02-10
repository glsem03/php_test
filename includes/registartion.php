<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_conf = $_POST['password_conf'];
$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email'");

//проверка наличи почты и совпадение пароля
if(mysqli_num_rows($check_user) > 0)
{
    $_SESSION['message'] = "Введенная почта уже зарегистрирована";
    header('Location: ../reg.php');
}
elseif($password === $password_conf) 
{
    $password = md5($password);
    mysqli_query($connection, "INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES (NULL, '$login', '$password', '$email') ");
    $_SESSION['message'] = "Регистрация прошла успешно!";
    header('Location: ../index.php');
}
else
{
    $_SESSION['message'] = "Пароли не совпадают";
    header('Location: ../reg.php');
}
?>
