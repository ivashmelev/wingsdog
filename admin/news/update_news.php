<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../auth.php");
// }
require_once ("../query_mysql.php");
// require_once ("include_news.php");
// require_once ("../connection.php");
// require_once ("update_news.php");
$id=strip_tags(htmlentities($_POST['id']));
$header=strip_tags(htmlentities($_POST['header']));
$date=strip_tags(htmlentities($_POST['date']));
// $img=strip_tags(htmlentities($_POST['img']));
// $text=strip_tags(htmlentities($_POST['text']));
$text=strip_tags($_POST['text'], "<b><i><u><left><center><right><justify>");

$date;
$date=explode("-", $date);
$date="$date[2].$date[1].$date[0]";

$path="../../img/news/";
$ext=array_pop(explode('.', $_FILES['img']['name']));
$new_name="img-$id.$ext";
$full_path=$path.$new_name;

if($_FILES['img']['error']==0){
    if(move_uploaded_file($_FILES['img']['tmp_name'], $full_path)){
        $update=queryMySQL("UPDATE news SET id='$id', header='$header', date='$date', img='$new_name', text='$text' WHERE id='$id'");
    }
}


header("Location: adm_news.php");
?>