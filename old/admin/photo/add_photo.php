<?
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../admin/auth.php");
// }
require_once ("../query_mysql.php");

$id=strip_tags(htmlentities($_POST['id']));
$albom=strip_tags(htmlentities($_POST['albom']));
$header=strip_tags(htmlentities($_POST['header']));
// $date=strip_tags(htmlentities($_POST['date']));
// $img=strip_tags(htmlentities($_POST['img']));
$text=strip_tags(htmlentities($_POST['text']));

// $date;
// $date=explode("-", $date);
// $date="$date[2].$date[1].$date[0]";

$path="../../img/album-$id/";
$time = time();
$ext=array_pop(explode('.', $_FILES['img']['name']));
$new_name="img-$time.$ext";
$full_path=$path.$new_name;

if($_FILES['img']['error']==0){
    if(move_uploaded_file($_FILES['img']['tmp_name'], $full_path)){
        $add=queryMySQL("INSERT INTO photo VALUES(NULL, '$id', '$new_name', '$full_path')");
    }
}
header("Location: adm_photo.php?id=$id&albom=$albom");
?>