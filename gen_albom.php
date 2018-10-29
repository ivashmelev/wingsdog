<?php
function genAlbom(){
  require_once ("admin/query_mysql.php");
  $query_albom = queryMySQL("SELECT * FROM albom");
  
  $data_albom_id=array();
  $data_albom_name=array();
  $data_albom_text=array();
  $data_albom=array();

  $count_albom_rows=mysqli_num_rows($query_albom);
  $count_albom_fields=mysqli_num_fields($query_albom);
  
  while ($row_albom = mysqli_fetch_array($query_albom)){
    array_push($data_albom_id, $row_albom["id"]);
    array_push($data_albom_name, $row_albom["name"]);
    array_push($data_albom_text, $row_albom['text']);
  }
  
  $data_albom_id=json_encode($data_albom_id);
  $data_albom_name=json_encode($data_albom_name);
  $data_albom_text=json_encode($data_albom_path);

  array_push($data_albom, $data_albom_id);
  array_push($data_albom, $data_albom_name);
  array_push($data_albom, $data_albom_text);
  
  return $data_albom;

}

$_COOKIE['albom']=$data_albom;

?>