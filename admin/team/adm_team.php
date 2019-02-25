<?php
session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ../auth.php");
// }
require_once ("../query_mysql.php");
require_once ("include_team.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/lib/bootstrap-4.0.0-dist/css/bootstrap.min.css"><!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="adm_team.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../lib/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <title>Инструктора</title>
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
                                    <div class="btn-add" id="btn-add-<?php echo $id[0];?>"></div>
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
<!-- Генерация команды -->
<div id="accordion"></div>
<div class="block-news"></div>
<!--<div class="card">-->
<!--    <div class="card-header" id="heading10">-->
<!--    <h5 class="mb-0">-->
<!--    <button class="btn btn-link adm-element-head" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">-->
<!--        Header-->
<!--    </button>-->
<!--    <span class="adm-path-text">date</span><span class="adm-path-text">/</span><span class="adm-path-text">text</span>-->
<!--    </h5>-->
<!--    </div>-->
<!--
<!--    <div id="collapseOne" class="collapse" aria-labelledby="heading10" data-parent="#accordion">-->
<!--        <div class="card-body">-->
<!--            <div class="container-fluid">-->
<!--                <div class="element-news">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-4">-->
<!--                            <form method="POST" action="add_.php">-->
<!--                                <div class="form-group">-->
<!--                                    <label for="InputHeader1">Заголовок</label>-->
<!--                                    <input type="text" class="form-control" name="header" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ." required>-->
<!--                                    <div class="valid-feedback">Good!</div>-->
<!--                                    <div class="invalid-feedback">Bad!</div>-->
<!--                                </div>-->
<!--                                <div class="form-group col-lg-6" style="padding-left: 0px;">-->
<!--                                    <label for="InputDate1">Дата</label>-->
<!--                                    <input type="date" name="date" class="form-control" id="InputDate1" placeholder="Password" required>-->
<!--                                    <div class="valid-feedback">Good!</div>-->
<!--                                    <div class="invalid-feedback">Bad!</div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label for="InputImg">Изображение</label>-->
<!--                                    <div class="input-group">-->
<!--                                        <div class="custom-file">-->
<!--                                            <input type="file" class="custom-file-input" name="img" id="InputImg" required>-->
<!--                                            <label class="custom-file-label" for="inputGroupFile04">Выберите файл. . .</label>-->
<!--                                            <div class="valid-feedback">Good!</div>-->
<!--                                            <div class="invalid-feedback">Bad!</div>-->
<!--                                        </div>-->
<!--                                        <div class="input-group-append">-->
<!--                                            <button class="btn btn-outline-secondary" style="margin-left:0px;" type="button">Загрузить</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <label for="InputText1">Текст</label>-->
<!--                                    <textarea class="form-control" name="text" id="InputText1" rows="9" placeholder="Введите текст. . ." required></textarea>-->
<!--                                    <div class="valid-feedback">Good!</div>-->
<!--                                    <div class="invalid-feedback">Bad!</div>-->
<!--                                </div>-->
<!--                                <button type="submit" class="btn btn-primary" style="margin-left:0px;">-->
<!--                                    <div class="btn-ok"></div>-->
<!--                                </button>-->
<!--                                <button type="button" class="btn btn-danger">-->
<!--                                    <div class="btn-del"></div>-->
<!--                                </button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->



<script>
    function genTeam(id=0, count=0, header='Header', img='img', text='text'){
        for(i=0; i<count; i++){
            block_team=$(".block-news");
            content='<div id="accordion-'+id[i]+'"> <div class="card"> <div class="card-header" id="heading'+i+'"> <h5 class="mb-0"> <button class="btn btn-link adm-element-head" data-toggle="collapse" data-target="#collapse'+i+'" aria-expanded="false" aria-controls="collapseOne">'+header[i]+' </button> <span class="adm-path-text">/</span> <span class="adm-path-text">'+text[i]+'</span> </h5> </div> <div id="collapse'+i+'" class="collapse" aria-labelledby="heading'+i+'" data-parent="#accordion"> <div class="card-body"> <div class="container-fluid"> <div class="element-team"> <div class="row"> <div class="col-lg-4"> <h2 class="adm-head-h2">'+header[i]+'</h2> <img style=" max-width: 100%; height: 200px; border: 2px solid black; text-align: center;" src="../../img/team/'+img[i]+'"></img> </div> <div class="col-lg-4"> <p class="adm-text-p">'+text[i]+'</p> </div> <div class="col-lg-4"> <button type="button" class="btn btn-danger btn-right"> <div class="btn-del" id="btn-del-news-'+id[i]+'"></div> </button> <button type="button" class="btn btn-primary btn-right"> <div class="btn-edit" id="btn-edit-'+id[i]+'"></div> </button> </div> </div> </div> </div> </div> </div> </div> </div>';
            block_team.append(content);
        }
        console.log(count, header);
    }

    function clickClose(){
        location.reload();
    }
</script>

<?php echo  "<script> genTeam($data_id ,$count_rows, $data_header, $data_img, $data_text); console.log($('textarea').text());</script>"?>
</body>
</html>