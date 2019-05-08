<?php
session_start();
// if(!$_SESSION['registration']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ./auth.php");
// }

$login=strip_tags(htmlentities($_POST['login']));
$password=md5(strip_tags(htmlentities($_POST['password'])));
$mail=strip_tags(htmlentities($_POST['mail']));

function queryMySQL($query){ //Метод отправки запроса в MySQL
    require_once ("connection.php");
    $link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link, 'utf8');
    $send_mysql=mysqli_query($link, $query) or die("Error".mysqli_error($link));
    // $result=mysqli_fetch_array($send_mysql);
    // return $result;
}
if ($_POST['login']!="" && $_POST['password']!="" && $_POST['mail']!=""){

    queryMySQL("UPDATE auth SET login = '$login', password='$password', mail='$mail'");
    header("Location: ./auth.php");
}
else{
    echo "<script>alert('Заполните все поля!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <form action="registration.php" method="POST">
        <p></p>
        <p>Новый Логин</p>
        <input type="text" name="login">
        <br>
        <p>Новый Пароль</p>
        <input type="password" name="password">
        <br>
        <p>Новая Почта</p>
        <input type="email" name="mail">
        <br>
        <input type="submit">
    </form>
</body>
</html>