<?php
session_start();
//if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//    header("Location: ./auth.php");
//}

    // $query=queryMySQL("SELECT * FROM news ORDER BY id DESC");
    require_once ("connection.php");
    $link = mysqli_connect($host, $user, $password, $database);

    $query = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC");
    $query_options = mysqli_query($link, "SELECT name FROM albom");

    $count_rows=mysqli_num_rows($query);
    $count_fields=mysqli_num_fields($query);

    $data_options = array();
    $data_id=array();
    $data_header=array();
    $data_date=array();
    $data_img=array();
    $data_text=array();
    $data_href=array();

    while($row = mysqli_fetch_array($query_options)){
        array_push($data_options, $row['name']);
    }

    print_r($data_options);
    $count_options = count($data_options);

    while ($row = mysqli_fetch_array($query)) {
        array_push($data_id, $row["id"]);
        array_push($data_header, $row["header"]);
        array_push($data_date, $row['date']);
        array_push($data_img, $row['img']);
        array_push($data_text, $row['text']);
        array_push($data_href, $row['href_albom']);
    }

    $data_id=json_encode($data_id);
    $data_header=json_encode($data_header);
    $data_date=json_encode($data_date);
    $data_img=json_encode($data_img);
    $data_text=json_encode($data_text);
    // $data_href=json_encode($data_href);

    $data_options = json_encode($data_options);

    mysqli_free_result($query);
?>