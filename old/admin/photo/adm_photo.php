<?php
session_start();
require_once ("../query_mysql.php"); 
require_once ("include_photo.php");
if($_GET["id"]!=null && $_GET["albom"]!=null){

}else{
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/photo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="component.js"></script>
    <script src="adm_albom.js"></script>
    <title>Фотоальбом</title>
</head>
<body>
<div class="block-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu">
                            <nav class="menu-links">
                                <div class="menu-item "><a href="../panel.php" class="menu-links-item ">Панель</a></div>
                                <div class="menu-item "><a href="../news/adm_news.php" class="menu-links-item ">Мероприятия</a></div>
                                <div class="menu-item "><a href="../team/adm_team.php" class="menu-links-item ">Инструктора</a></div>
                                <div class="menu-item "><a href="../attainment/adm_attainment.php" class="menu-links-item ">Достижения</a></div>
                                <div class="menu-item "><a href="../photo/index.php" class="menu-links-item ">Фотоальбом</a></div>
                                <!-- <div class="col-lg-6"> -->
                                <button type="button" class="btn btn-danger btn-right">
                                    <div class="btn-exit"></div>
                                </button>
                                <button type="button" class="btn btn-success btn-right">
                                    <?php $id=json_decode($data_id);?>
                                    <div class="btn-add" id="btn-add-<?echo $id[0];?>"></div>
                                </button>
                                <button type="button" class="btn btn-primary btn-right">
                                    <div class="btn-back"></div>
                                </button>
            <!-- </div> -->
                            </nav>
                            <div class="menu-icon">
                                <label></label>
                                <label></label>
                                <label></label>
                                <label></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
          <div class="row" id="content">
            <!-- <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="photo">
                <img src="../../img/img-5.jpg">
              </div>
            </div> -->
          </div>
        </div>
        <script>
            function genPhoto(id=0, count=0, path=""){
                for(i=0; i<count; i++){
                    block_photo = $("#content");
                    content = `<div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="photo-adm" id="photo-`+id[i]+`">
                                        <img src="`+path[i]+`">
                                    </div>
                                    <button type="button" class="btn btn-danger">
                                      <div class="btn-del" id="btn-del-`+id[i]+`"></div>
                                    </button>
                                </div>`;
                    block_photo.append(content);
                }
            }
        </script>

        <?php echo "<script> genPhoto($data_id, $count_rows, $data_path);</script>" ?>
    </div>