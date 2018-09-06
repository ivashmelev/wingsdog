<?php
$query=queryMySQL("SELECT * FROM feedback ORDER BY id DESC");
$count_rows=mysqli_num_rows($query);
$count_fields=mysqli_num_fields($query);

$data_id=array();
$data_name=array();
// $data_img=array();
$data_text=array();
while ($row = mysqli_fetch_array($query)) {
    array_push($data_id, $row["id"]);
    array_push($data_name, $row["name"]);
    // array_push($data_img, $row['img']);
    array_push($data_text, $row['text']);
}

$data_id=json_encode($data_id);
$data_name=json_encode($data_name);
// $data_img=json_encode($data_img);
$data_text=json_encode($data_text);

mysqli_free_result($query);
?>