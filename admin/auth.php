<?php
//Страница авторизации
// if(session_id() == '') {
// }
session_start();
// $_SESSION['auth']=false;
if($_SESSION['auth']==true){
    header('Location: panel.php');
}
require_once ("send_mail.php");
//session_start();
$login=strip_tags(htmlentities($_POST['login']));
$password=strip_tags(htmlentities($_POST['password']));
$_SESSION['send_token_password']=bin2hex(openssl_random_pseudo_bytes(10));
if(isset($_SESSION['token_password'])){

}
else{
    $_SESSION['token_password']=bin2hex(openssl_random_pseudo_bytes(10));
}

    

function queryMySQL($query){ //Метод отправки запроса в MySQL
    require_once ("connection.php");
    $link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link, 'utf8');
    $send_mysql=mysqli_query($link, $query) or die("Error".mysqli_error($link));
    $result=mysqli_fetch_array($send_mysql);
    return $result;
}

$answer=queryMySQL("SELECT * FROM auth");
$_SESSION['mail']=$answer['mail'];

if($answer['login']==$login && $answer['password']==md5($password)){ //Проверка на валидность пары логин-пароль
    $_SESSION['auth']=true;
    $_SESSION['limit']=0;
    header('Location: ./panel.php');
}
else{
    $_SESSION['auth']=false;
    $_SESSION['limit']++;
    header('Location: ');
}

if($_SESSION['limit']>10){ //Проверка на количество попыток авторизации
    $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(10)); //Формирование токена для разблокировки
    $_SESSION['limit_send']=true; //Лимит отправки писем
    header('Location: ./ban.php'); 
}

if(isset($_GET['send_token_password'])){
    
    $send_to=$answer['mail'];
    $mail_header="Message head";
    $mail_content="Message token password [token_password]".$_SESSION['token_password'];
    smtpmail("Крылатый пес", $send_to, $mail_header, $mail_content);
    header("Location: ./auth.php");
}

if($_GET['token_password']==$_SESSION['token_password']){
    $_SESSION['registration']=true;
    header("Location: ./registration.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    <form action="auth.php" method="POST">
        <p></p>
        <p>Логин</p>
        <input type="text" name="login">
        <br>
        <p>Пароль</p>
        <input type="password" name="password">
        <br>
        <a href=<?php echo "?send_token_password=".bin2hex(openssl_random_pseudo_bytes(10));?>>Change password</a>
        <br>
        <input type="submit">
    </form>
</body>
</html>