<?php
//Панель администратора
// session_start();
// if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
//     header("Location: ./auth.php");
// }
require_once("connection.php");
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка".mysqli_error($link));
$select_contacts = mysqli_query($link, "SELECT * from contacts") or die("Error".mysqli_error($link));
$row = mysqli_fetch_array($select_contacts);
print_r($row);
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
    <link rel="stylesheet" href="../css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/menu.js"></script>

    <!-- <script src="news/adm_news.js"></script>  -->
    <title>Панель администратора</title>
</head>
<body>
<div class="block-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu">
                            <nav class="menu-links">
                                <div class="menu-item "><a href="panel.php" class="menu-links-item ">Панель</a></div>
                                <div class="menu-item "><a href="news/adm_news.php" class="menu-links-item ">Мероприятия</a></div>
                                <div class="menu-item "><a href="team/adm_team.php" class="menu-links-item ">Инструктора</a></div>
                                <div class="menu-item "><a href="attainment/adm_attainment.php" class="menu-links-item ">Достижения</a></div>
                                <div class="menu-item "><a href="photo/index.php" class="menu-links-item ">Фотоальбом</a></div>
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
    <div class="functional">
        <div class="menu-admin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="admin-contacts">
                            <h2 class="adm-head-h2">Контакты</h2>
                            <p class="adm-text-p">Отредактировать контакты</p>
                            <hr>
                            <form class="admin-form" action="update_contacts.php" method="POST">
                                <label class="adm-text-p" for="name_company">Название организации</label><br>
                                <input type="text" class="form-control" id="name_company" name="name_company">
                                
                                <label class="adm-text-p" for="adm_phone">Телефон</label><br>
                                <input type="text" class="form-control" id="adm_phone" name="adm_phone">

                                <label class="adm-text-p" for="adm_email">Mail</label><br>
                                <input type="email" class="form-control" id="adm_email" name="adm_email">

                                <label class="adm-text-p" for="adm_addres">Адрес</label><br>
                                <input type="email" class="form-control" id="adm_addres" name="adm_addres">
                            <!-- </form> -->
                            <hr style="margin-top: 40px;">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="admin-hide">
                            <h2 class="adm-head-h2">Скрыть страницы</h2>
                            <p class="adm-text-p">Выберите страницы, которые нужно скрыть</p>
                            <hr>
                            <div class="block-page">
                                <!-- <form class="admin-form" action="update_contacts.php" method="POST"> -->
                                    <div>
                                        <input type="checkbox" name="hide_news" id="hide_news" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_news">Мероприятия</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="hide_team" id="hide_team" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_team">Инструктора</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="hide_attainment" id="hide_attainment" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_attainment">Достижение</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="hide_over-exposure" id="hide_over-exposure" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_over-exposure">Передержка</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="hide_photo" id="hide_photo" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_photo">Фотоальбом</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="hide_contacts" id="hide_contacts" class="form-check-input"><br>
                                        <label class="adm-text-p strike" for="hide_contacts">Контакты</label>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <input class="btn admin-btn" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>