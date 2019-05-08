<?php
session_start();
//if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//    header("Location: ./auth.php");
//}

    $query=queryMySQL("SELECT * FROM albom ORDER BY id DESC");
    $count_rows=mysqli_num_rows($query);
    $count_fields=mysqli_num_fields($query);

    $data_id=array();
    $data_name=array();
    $data_text=array();
    while ($row = mysqli_fetch_array($query)) {
        array_push($data_id, $row["id"]);
        array_push($data_name, $row["name"]);
        array_push($data_text, $row['text']);
    }

    $data_id=json_encode($data_id);
    $data_name=json_encode($data_name);
    $data_text=json_encode($data_text);

    mysqli_free_result($query);
?>