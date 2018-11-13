<?
session_start();
error_reporting( E_ERROR );

require_once ("connection.php");
require_once ("mail.php");
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query_select_mail="SELECT * FROM mail";
$result_select_mail=mysqli_query($link, $query_select_mail) or die("Error".mysqli_error($link));
$mail=mysqli_fetch_row($result_select_mail);

// echo $_SESSION['limit'];
if(isset($_SESSION['userid'])){
    header('Location: /admin/admin_panel.php');
}

if ($_SESSION['limit']>10){
    header('Location: /admin/error.php');
}
else{
    $_SESSION['limit']++;
}
// echo $_SESSION['limit'];
//  echo strval($_SESSION['token']);
$_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(10));
if(isset($_GET['request_true'])){

}
else{
    $_SESSION['change_pass']=bin2hex(openssl_random_pseudo_bytes(10));
}
// $_SESSION['change_pass']=1;
$domain = $_SERVER['HTTP_HOST'];

function generatePassword($lenght=8){
    $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $num_chars=strlen($chars);
    $string='';
    for ($i=0; $i<$lenght; $i++){
        $string.=substr($chars, rand(1, $num_chars)-1,1);
    }
    return $string;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="auth.css">
    <title>Авторизация</title>
</head>
<body>
    <form action="/admin/auth.php" method="POST">
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Password" name="pass">
        <input type="submit" value="Go!" name="submit">
    </form>
    <a class="link" href="<? echo '/admin/auth_form.php?request=1';?>">Забыли пароль?</a>

</body>
</html>
<?
if ($_GET['request']==1) {
    echo "<script>alert('На почту отправлено письмо.');</script>";

    $change_pass=$_SESSION['change_pass'];
    $content="Если вы не запрашивали смену пароля, то проигнорируйте это письмо.
    \nЕсли это были вы то пройдите по ссылке:
    \n$domain/admin/auth_form.php?request_true=$change_pass";
    smtpmail('Нотариус', "$mail[0]", 'Запрос на изменение пароля', $content);
    
    // mail("$mail[0], ishmelev@1ditis.ru", "Запрос на изменение пароля",

}

if ($_GET['request_true']==$_SESSION['change_pass']){
    echo "<script>alert('На почту отправлен новый пароль.');</script>";
    $pass_gen=generatePassword();
    $content="Ваш новый пароль - $pass_gen";
    smtpmail('Нотариус', "$mail[0]", 'Новый пароль сайта', $content);
    
    // mail("ishmelev@1ditis.ru", "Новый пароль сайта ".$domain,
    require_once ('connection.php');
    $link = mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link, 'utf8');
    $query_update="UPDATE user SET pass=MD5('$pass_gen')";
    mysqli_query($link, $query_update) or die("Ошибка " . mysqli_error($link));
    mysqli_close($link);
}
?>