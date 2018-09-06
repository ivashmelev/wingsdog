<?php
require_once ("../query_mysql.php");

$name=strip_tags(htmlentities($_POST['name']));
$feed_mail=strip_tags(htmlentities($_POST['feed_mail']));
// $img=strip_tags(htmlentities($_POST['img']));
$mess=strip_tags(htmlentities($_POST['mess']));


$add=queryMySQL("INSERT INTO feedback VALUES(NULL, '$name', '$mess', '$feed_mail')");
header("Location: ../../over-exposure.php");
?>