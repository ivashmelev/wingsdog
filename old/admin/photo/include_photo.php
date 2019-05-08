<?php
session_start();
//if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//    header("Location: ./auth.php");
//}
    $id=strip_tags(htmlentities($_GET['id']));
    $query=queryMySQL("SELECT * FROM photo WHERE albom_id='$id' ORDER BY id DESC");
    $count_rows=mysqli_num_rows($query);
    $count_fields=mysqli_num_fields($query);

    $data_id=array();
    $data_name=array();
    $data_path=array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($data_id, $row["id"]);
        array_push($data_name, $row["name"]);
        array_push($data_path, $row['path']);
    }

    $data_id=json_encode($data_id);
    $data_name=json_encode($data_name);
    $data_path=json_encode($data_path);

    mysqli_free_result($query);
?>