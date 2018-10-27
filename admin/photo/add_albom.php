<?php
session_start();

require_once ("../query_mysql.php");

$name=strip_tags(htmlentities($_POST['name']));
$text=strip_tags(htmlentities($_POST['text']));

$add=queryMySQL("INSERT INTO albom VALUES(NULL, '$name', '$text')");

mkdir("../../img/album-$name");

header("Location: index.php");
?>