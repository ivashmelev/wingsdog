<?
require_once ("../query_mysql.php");
// require_once ("include_news.php");
// require_once ("../connection.php");
// require_once ("update_news.php");
$id=strip_tags(htmlentities($_POST['id']));
$header=strip_tags(htmlentities($_POST['header']));
$date=strip_tags(htmlentities($_POST['date']));
$img=strip_tags(htmlentities($_POST['img']));
$text=strip_tags(htmlentities($_POST['text']));

$update=queryMySQL("UPDATE news SET id='$id', header='$header', date='$date', img='$img', text='$text' WHERE id='$id'");

// $link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
// mysqli_set_charset($link, 'utf8');
// $update="UPDATE news SET id='$id', header='$header', date='$date', img='$img', text='$text' WHERE id='$id'";
// $send_mysql=mysqli_query($link, $update) or die("Error".mysqli_error($link));
?>