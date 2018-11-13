<?php
require_once ("connection.php");
$adm_company = strip_tags(htmlentities($_POST["adm_company"]));
$adm_phone = strip_tags(htmlentities($_POST["adm_phone"]));
$adm_email = strip_tags(htmlentities($_POST["adm_email"]));
$adm_addres = strip_tags(htmlentities($_POST["adm_addres"]));
$hide_news = $_POST["hide_news"];
$hide_team = $_POST["hide_team"];
$hide_attainment = $_POST["hide_attainment"];
$hide_over_exposure = $_POST["hide_over_exposure"];
$hide_photo = $_POST["hide_photo"];
$hide_contacts = $_POST["hide_contacts"];
$hide = array($hide_news, $hide_team, $hide_attainment, $hide_over_exposure, $hide_photo, $hide_contacts);
$link = mysqli_connect($host, $user, $password, $database);
$update_contacts = mysqli_query($link, "UPDATE contacts SET name='$adm_company', phone='$adm_phone', mail='$adm_email', addres='$adm_addres'");
for($i=0; $i<count($hide); $i++){
  if($hide[$i]==""){
    $hide[$i]="true";
  }
  $update_hide = mysqli_query($link, "UPDATE hide_page SET status='$hide[$i]' WHERE number='$i'");
}
// print_r($hide);
header("Location: panel.php");
?>