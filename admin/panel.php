<?php
//Панель администратора
// session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ./auth.php");
// }
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
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <script src="news/adm_news.js"></script> -->
    <title>Панель администратора</title>
</head>
<body>
<div class="container-fluid">
        <div class="menu">
            <div class="row">
                <div class="col-lg-6">
                    <a class="menu-a" href="/index.php">Главная</a>
                    <a class="menu-a" href="/news.php">Мероприятия</a>
                    <a class="menu-a" href="/team.php" >Инструктора</a>
                    <a class="menu-a" href="/attainment.php">Достижения</a>
                    <a class="menu-a" href="/over-exposure.php">Передержка</a>
                    <a class="menu-a" href="/photo.php">Фотоальбом</a>
                    <a class="menu-a" href="/contacts.php">Контакты</a>
                </div>
                <div class="col-lg-6">
                    <button type="button" class="btn btn-danger btn-right">
                        <div class="btn-exit"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="functional">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="news">
                            <h5><a href="news/adm_news.php">Мероприятия</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news">
                        <h5><a href="team/adm_team.php">Инструктора</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news">
                        <h5><a href="attainment/adm_attainment.php">Достижения</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>