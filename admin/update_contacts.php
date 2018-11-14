<?php
require_once ("connection.php");
$link = mysqli_connect($host, $user, $password, $database);
$adm_company = strip_tags(($_POST["adm_company"]));
$adm_phone = strip_tags(htmlentities($_POST["adm_phone"]));
$adm_email = strip_tags(htmlentities($_POST["adm_email"]));
$adm_addres = strip_tags(htmlentities($_POST["adm_addres"]));
$adm_time_work = strip_tags($_POST["adm_time_work"]);
$adm_time_half = strip_tags($_POST["adm_time_half"]);
$adm_weekend = strip_tags($_POST["adm_weekend"]);
// $adm_img = strip_tags($_POST["adm_image"]);
$path = "../img/";
$ext = array_pop(explode('.', $_FILES["adm_image"]["name"]));
$new_name = "mainimg.$ext";
$full_path=$path.$new_name;
if($_FILES['img']['error']==0){
  if(move_uploaded_file($_FILES['adm_image']['tmp_name'], $full_path)){
    $add = mysqli_query($link, "UPDATE contacts SET img = '$full_path'");
  }
}
$hide_news = $_POST["hide_news"];
$hide_team = $_POST["hide_team"];
$hide_attainment = $_POST["hide_attainment"];
$hide_over_exposure = $_POST["hide_over_exposure"];
$hide_photo = $_POST["hide_photo"];
$hide_contacts = $_POST["hide_contacts"];
$hide = array($hide_news, $hide_team, $hide_attainment, $hide_over_exposure, $hide_photo, $hide_contacts);
$update_contacts = mysqli_query($link, "UPDATE contacts SET
                                       name='$adm_company', 
                                       phone='$adm_phone', 
                                       mail='$adm_email', 
                                       addres='$adm_addres', 
                                       time_work='$adm_time_work', 
                                       time_half='$adm_time_half', 
                                       weekend='$adm_weekend'");
for($i=0; $i<count($hide); $i++){
  if($hide[$i]==""){
    $hide[$i]="true";
  }
  $update_hide = mysqli_query($link, "UPDATE hide_page SET status='$hide[$i]' WHERE number='$i'");
}
// print_r($hide);
header("Location: panel.php");
?>