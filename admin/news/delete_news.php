<?php
session_start();
if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
    header("Location: ../auth.php");
}
require_once ("../query_mysql.php");


$id=strip_tags(htmlentities(($_GET['id'])));
$img=strip_tags(htmlentities(($_GET['img'])));
// $name_img=queryMySQL("SELECT img FROM news ORDER BY id DESC");
// $name_img=mysqli_fetch_array($name_img);
// print_r($name_img);
// echo $path="../../img/$img";

// if(file_exists()){

// }

$delete=queryMySQL("DELETE FROM news WHERE id='$id'");

header("Location: adm_news.php");

?>