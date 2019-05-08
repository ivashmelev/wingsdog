<?php
session_start();
require_once ("send_mail.php");
if($_SESSION['limit']<10){ //Защита от случайного захода на страницу
    header("Location: ../../auth.php");
}
if($_GET['token']==$_SESSION['token']){ //Разблокировка страницы по полученному в письме токену
    session_destroy();
    header("Location: ./auth.php");
}

$send_to=$_SESSION['mail'];
$mail_header="Message head";
$mail_content="Message content ".$_SESSION['token'];

if($_SESSION['limit_send']){ //Проперка на лими отпраки
    smtpmail("Крылатый пес",$send_to, $mail_header, $mail_content);
    $_SESSION['limit_send']=false;
}
echo $_SESSION['limit'];
?>
<h1>over limit</h1>
