<?php

function genPhoto(){
  require_once ("admin/query_mysql.php");

  $query_photo = queryMySQL("SELECT * FROM photo");

  $data_photo_id=array();
  $data_photo_name=array();
  $data_photo_path=array();
  $data_photo=array();

  $count_photo_rows=mysqli_num_rows($query_photo);
  $count_photo_fields=mysqli_num_fields($query_photo);

  while ($row_photo = mysqli_fetch_array($query_photo)){
      array_push($data_photo_id, $row_photo["id"]);
      array_push($data_photo_name, $row_photo["name"]);
      array_push($data_photo_path, $row_photo['path']);
  }

  
  $data_photo_id=json_encode($data_photo_id);
  $data_photo_name=json_encode($data_photo_name);
  $data_photo_path=json_encode($data_photo_path);
  
  array_push($data_photo, $data_photo_id);
  array_push($data_photo, $data_photo_name);
  array_push($data_photo, $data_photo_path);

  return $data_photo;
}
print_r(genPhoto());
?>