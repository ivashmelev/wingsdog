<?php
session_start();
// require_once ("../query_mysql.php");
require_once ("../connection.php");
// $id=strip_tags(htmlentities(($_GET['id'])));
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
$name=strip_tags(htmlentities($_POST['name']));
$text=strip_tags(htmlentities($_POST['text']));

$add=mysqli_query($link, "INSERT INTO albom VALUES(NULL, '$name', '$text')") or die("Error".mysqli_error($link));
$query_albom = mysqli_query($link, "SELECT * FROM albom ORDER BY id DESC") or die("Error".mysqli_error($link));
$row_albom = mysqli_fetch_array($query_albom);
$id = $row_albom["id"];
mkdir("../../img/album-$id");
header("Location: index.php");
?>