<?php
require_once ("../query_mysql.php");
// date_default_timezone_set('Europe/Moscow');
date_default_timezone_set('Etc/GMT-4');
$name=strip_tags(htmlentities($_POST['name']));
$feed_mail=strip_tags(htmlentities($_POST['feed_mail']));
// $img=strip_tags(htmlentities($_POST['img']));
$mess=strip_tags(htmlentities($_POST['mess']));
$date=date("d/m/Y в G:i");

echo $date;

$add=queryMySQL("INSERT INTO feedback VALUES(NULL, '$name', '$date', '$mess', '$feed_mail')");
header("Location: ../../over-exposure.php");
?>