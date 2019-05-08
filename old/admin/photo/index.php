<?php
session_start();
require_once ("../query_mysql.php"); 
require_once ("include_albom.php");
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
              <div class="card" style="width: 18rem;">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                    <button type="button" class="btn btn-danger">
                        <div class="btn-del"></div>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <script>
          function genAlbom(id=0, count=0, name="", text=""){
            for(i=0; i<count; i++){
              block_albom = $("#content");
              content = `<div class="col-xl-3 col-lg-4 col-md-6">
                          <div class="card" style="width: 18rem;">
                              <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                  <button type="button" class="btn btn-danger">
                                      <div class="btn-del" id="btn-del-`+id[i]+`"></div>
                                  </button>
                                </div>
                            <div class="card-body" id="`+id[i]+`">
                              <h5 class="card-title">`+name[i]+`</h5>
                              <p class="card-text">`+text[i]+`</p>
                              <a style="text-align: center;" href="adm_photo.php?id=`+id[i]+`&albom=`+name[i]+`" class="btn btn-primary">Просмотреть</a>
                            </div>
                          </div>
                        </div>`;
              block_albom.append(content);
            }
          }
        </script>

        <?php echo "<script> genAlbom($data_id, $count_rows, $data_name, $data_text); </script>";?>
    </div>