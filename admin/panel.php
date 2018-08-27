<?
//Панель администратора
session_start();
if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
    header("Location: ./auth.php");
}
?>
<h1>true</h1