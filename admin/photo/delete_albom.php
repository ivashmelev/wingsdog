<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../auth.php");
// }

require_once ("../connection.php");
echo($id);
$id=strip_tags(htmlentities(($_GET['id'])));
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
$arr_photo_name = array();


// $query_albom = mysqli_query($link, "SELECT * FROM albom") or die("Error".mysqli_error($link));
// $query_albom = mysqli_query($link, "SELECT * FROM photo") or die("Error".mysqli_error($link));
$query_select_photo = mysqli_query($link, "SELECT * FROM photo WHERE albom_id='$id'");
$query_del_photo = mysqli_query($link, "DELETE FROM photo WHERE albom_id='$id'") or die("Error".mysqli_error($link));
$query_del_albom = mysqli_query($link, "DELETE FROM albom WHERE id='$id'") or die("Error".mysqli_error($link));

while($row = mysqli_fetch_array($query_select_photo)){
  array_push($arr_photo_name, $row["path"]);
}

for($i=0; $i<count($arr_photo_name); $i++){
  unlink($arr_photo_name[$i]);
}

rmdir("../../img/album-$id");



header("Location: index.php");

?>