<?
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../admin/auth.php");
// }
// require_once ("../query_mysql.php");
require_once ("../connection.php");
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$id=strip_tags(htmlentities($_POST['id']));
$albom=strip_tags(htmlentities($_POST['albom']));
$header=strip_tags(htmlentities($_POST['header']));
// $date=strip_tags(htmlentities($_POST['date']));
// $img=strip_tags(htmlentities($_POST['img']));
$text=strip_tags(htmlentities($_POST['text']));

// $date;
// $date=explode("-", $date);
// $date="$date[2].$date[1].$date[0]";
// echo "<pre>";
// print_r($_FILES);
// print_r(count($_FILES));
// echo "</pre>";
$img_mass = $_FILES['img']['name'];
$path="../../img/album-$id/";
$time = time();
for($i=0; $i<count($img_mass); $i++){
    $ext=array_pop(explode('.', $img_mass[$i]));
    $new_name="img-$time-$i.$ext";
    $full_path=$path.$new_name;
    // if($_FILES['img']['error']==0){
        if(move_uploaded_file($_FILES['img']['tmp_name'][$i], $full_path)){
            $add=mysqli_query($link, "INSERT INTO photo VALUES(NULL, '$id', '$new_name', '$full_path')");
        }
    // }
    else{
        // echo "error";
    }
}
mysqli_close($link);
// for($i=0; $i<count($_FILE)
header("Location: adm_photo.php?id=$id&albom=$albom");
?>