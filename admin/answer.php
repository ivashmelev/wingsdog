<?
error_reporting( E_ERROR );

echo $_POST['name_rate'];
require_once ("connection.php");
session_start();

$name=$_POST['name'];
$undertext=$_POST['undertext'];
$rate=$_POST['rate'];
$column_rate=$_POST['column_rate'];
$column_sizepay=$_POST['column_sizepay'];

if(isset($text_new)){
    echo "true";
}
else{
    echo "false";
}

$link = mysqli_connect($host, $user, $password, $database)
            or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query_update="UPDATE rates SET undertext='$undertext', column_rate='$column_rate', column_sizepay='$column_sizepay' WHERE name='$rate'";
$result = mysqli_query($link, $query_update) or die("Ошибка " . mysqli_error($link));
mysqli_close($link);
// header('Location: /admin/admin_panel.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Answer</title>
</head>
<body>
    
</body>
</html>