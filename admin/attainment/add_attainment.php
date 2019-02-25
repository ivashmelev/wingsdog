<?php
// session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../admin/auth.php");
// }
require_once ("../query_mysql.php");

$id=strip_tags(htmlentities($_POST['id']));
$header=strip_tags(htmlentities($_POST['header']));
// $img=strip_tags(htmlentities($_POST['img']));
// $text=strip_tags(htmlentities($_POST['text']));
$text=$_POST['text'];
$date;
$date=explode("-", $date);
$date="$date[2].$date[1].$date[0]";

$path="../../img/attainment/";
$ext=array_pop(explode('.', $_FILES['img']['name']));
$new_name="img-$id.$ext";
$full_path=$path.$new_name;

if($_FILES['img']['error']==0){
    if(move_uploaded_file($_FILES['img']['tmp_name'], $full_path)){
        $add=queryMySQL("INSERT INTO attainment VALUES('$id', '$header', '$new_name', '$text')");
    }
}
header("Location: adm_attainment.php");
?>