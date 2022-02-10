<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE (`login` = '$login' OR `email` = '$login') AND `password`='$password'");
//проверка наличия пользователя в базе данных
if(mysqli_num_rows($check_user) > 0)
{
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = ["id" => $user['id'], "login"=> $user['login'], "password"=>$user['password'], "email"=>$user['email']];
    $_SESSION['message'] = "Вы успешно авторизировались!";
    header('Location: ../index.php');
}
else 
{
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: ../index.php');
}
?>