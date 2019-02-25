<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../admin/auth.php");
// }
require_once ("../query_mysql.php");

$id=strip_tags(htmlentities($_POST['id']));
$header=strip_tags(htmlentities($_POST['header']));
$date=strip_tags(htmlentities($_POST['date']));
$select=strip_tags(htmlentities($_POST['select']));
// $img=strip_tags(htmlentities($_POST['img']));
// $text=strip_tags(htmlentities($_POST['text']));
// $text=strip_tags($_POST['text'], "<b><i><u><left><center><right><justify>");
$text=$_POST['text'];

$date;
$date=explode("-", $date);
$date="$date[2].$date[1].$date[0]";

$path="../../img/news/";
$ext=array_pop(explode('.', $_FILES['img']['name']));
$new_name="img-$id.$ext";
$full_path=$path.$new_name;

if($_FILES['img']['error']==0){
    if(move_uploaded_file($_FILES['img']['tmp_name'], $full_path)){
        $add=queryMySQL("INSERT INTO news VALUES('$id', '$header', '$date', '$new_name', '$text', '$select')");
    }
}
header("Location: adm_news.php");
?>