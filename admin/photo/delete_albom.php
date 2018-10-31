<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../auth.php");
// }

require_once ("../connection.php");
echo($id);
$id=strip_tags(htmlentities(($_GET['id'])));
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));



// $query_albom = mysqli_query($link, "SELECT * FROM albom") or die("Error".mysqli_error($link));
// $query_albom = mysqli_query($link, "SELECT * FROM photo") or die("Error".mysqli_error($link));
$query_del_photo = mysqli_query($link, "DELETE FROM photo WHERE albom_id='$id'") or die("Error".mysqli_error($link));
$query_del_albom = mysqli_query($link, "DELETE FROM albom WHERE id='$id'") or die("Error".mysqli_error($link));




header("Location: index.php");

?>