<?php
function queryMySQL($query){ //Метод отправки запроса в MySQL
    require_once ("connection.php");
    $link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link, 'utf8');
    $send_mysql=mysqli_query($link, $query) or die("Error".mysqli_error($link));
    // $result=mysqli_fetch_object($send_mysql);
    mysqli_close($link);
    return $send_mysql;
    // mysqli_free_result($send_mysql);
}
?>