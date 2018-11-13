<?
error_reporting( E_ERROR );
require_once ("connection.php");
require_once ("mail.php");
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query_select_mail="SELECT * FROM mail";
$result_select_mail=mysqli_query($link, $query_select_mail) or die("Error".mysqli_error($link));
$mail=mysqli_fetch_row($result_select_mail);
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
$bool=true;
$domain = $_SERVER['HTTP_HOST'];
$token=strval($_SESSION['token']);
// echo $token;
if ($_SESSION['sendmail']<1){
    $content="На сайте с ip адреса.$ip. был превышен лимит авторизации.
    \nДля доступа к авторизации сайта пройдите по ссылке:
    \n$domain/admin/error.php?access=$token";
    smtpmail('Нотариус', "$mail[0]", 'Превышен лимит авторизации', $content);

    // mail("$mail[0], ishmelev@1ditis.ru", "Превышен лимит авторизации", 
    $_SESSION['sendmail']=2;
}
if($_GET['access']==$token){
    $_SESSION['limit']=0;
    $_SESSION['sendmail']=0;
    $token = bin2hex(openssl_random_pseudo_bytes(10));
    // session_destroy();
    header("Location: /admin/admin_panel.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="margin: 10% auto; text-align: center; font-size: 100px; font-family:'Roboto';">Access denied!<h1>
</body>
</html>