<?
session_start();

require_once ("../connection.php");
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$id=strip_tags(htmlentities($_POST['id']));
$albom=strip_tags(htmlentities($_POST['albom']));
$header=strip_tags(htmlentities($_POST['header']));

$text=strip_tags(htmlentities($_POST['text']));

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

header("Location: adm_photo.php?id=$id&albom=$albom");
?>