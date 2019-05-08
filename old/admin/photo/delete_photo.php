<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../auth.php");
// }

require_once ("../connection.php");
echo($id);
$id=strip_tags(htmlentities(($_GET['id'])));
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));

$query_select_photo = mysqli_query($link, "SELECT * FROM photo WHERE id='$id'");
$query_select_albom = mysqli_query($link, "SELECT * FROM albom WHERE ");
$row = mysqli_fetch_array($query_select_photo);
unlink($row["path"]);

$query_delete_photo = mysqli_query($link, "DELETE FROM photo WHERE id='$id'") or die("Error".mysqli_error($link));
$albom_id = $row["albom_id"];
header("Location: adm_photo.php?id=$albom_id&albom=$albom_id");

?>