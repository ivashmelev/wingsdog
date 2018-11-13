<?
error_reporting( E_ERROR );

session_start();
if (!isset($_SESSION['userid'])){
    header('Location: /admin/auth_form.php');
}
require_once ('connection.php');
$link = mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$text_new=$_POST['text_new'];
$text_page=$_POST['text_page'];
$font=$_POST['font'];



if($font!=""){
    $query_update_font="UPDATE font SET font_name='$font'";
    $result_update_font=mysqli_query($link, $query_update_font) or die("Ошибка " . mysqli_error($link));
}


$query_update_page_contacts="UPDATE page_contacts SET text='$text_new' WHERE text='$text_page'";
$query_select_page_contacts_all="SELECT * FROM page_contacts";
$query_select_page_contacts="SELECT * FROM page_contacts WHERE text='$text_page'";
$query_select_font="SELECT font_name FROM font";

$result_update=mysqli_query($link, $query_update_page_contacts) or die("Ошибка " . mysqli_error($link));

$result_select_all=mysqli_query($link, $query_select_page_contacts_all) or die("Ошибка " . mysqli_error($link));
$result_select=mysqli_query($link, $query_select_page_contacts) or die("Ошибка " . mysqli_error($link));
$result_select_font=mysqli_query($link, $query_select_font) or die("Ошибка " . mysqli_error($link));




$data_text=array();
$data_font=array();



while(($font_result=mysqli_fetch_array($result_select_font))==!false){
    array_push($data_font, $font_result['font_name']);
}

while(($row=mysqli_fetch_array($result_select_all))==!false){
    array_push($data_text, $row['text']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Контакты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="../css/contacts.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <link rel="stylesheet" href="../css/appoitment.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="../js/index.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7tBkCda7HIre5BYo2IaX4U5l8QCzrj9o&callback=initMap"></script>
    <!-- <script src="../js/appoitment.js"></script> -->
    <script src="../js/map.js"></script>
    <script src="../js/admin_pages.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script > font_result="<? echo $data_font[0]; ?>"; $('*').css("font-family", "<? echo $data_font[0]; ?>"); console.log(font_result+" - font");</script>
<h1>Версия для редактирования</h1>
    <a class="link" href="exit.php">Выйти</a>
<div id="result"></div>
<div class="wrapper">
<div class="header">
        <div class="header-content">
            <div class="row">
                <div class="col-md-2">
                    <img src="../img/notary-logo2.png" alt="Нижегородская нотариальная">
                </div>
                <div class="col-md-4">
                    <p><b class="rewrite"><? echo $data_text[0]; ?></b></p>
                    <p><b class="rewrite"><? echo $data_text[1]; ?></b></p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h1 class="rewrite" align="right" style="color:white"> <? echo $data_text[2];?></h1>
                    <h3 class="rewrite" align="right" style="color:white"> <? echo $data_text[3];?></h3>
                    <h3 class="rewrite" align="right" style="color:white"> <? echo $data_text[4];?></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Навигационное меню -->
    <a id="start"></a>
    <div id="menu" class="menu">
        <nav class="menu-links">
                <a class="menu-links-item" href="/admin/_page_index.php">Главная</a>
                <a class="menu-links-item" href="/admin/_page_notary_actions.php">Нотариальные действия</a>
                <a class="menu-links-item" href="/admin/_page_rates.php">Тарифы</a>
                <a class="menu-links-item" href="/admin/_page_contacts.php">Контакты</a>
        </nav>

        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="data-picker-menu">
        <button class="button-close">X</button>
        <div class="load-picker"></div>
    </div>
    </div>
    <!-- Блок контента -->
    <div class="wrapper">
        <div class=content>
                <div class="container-fluid">
            
            <div class="row justify-content-center">
                <!-- Расписание -->
                <div class="col-md-9">
                        <br>
                    
                        <div class="contacts-list">
                                <div class="col-md-10">
                                        <h1 class="rewrite"><? echo $data_text[5]; ?></h1><br>
                                        <p class="rewrite"><b><? echo $data_text[6]; ?></b></p>
                                        <p class="rewrite"><b>Наш адрес:<? echo $data_text[7]; ?></a></b></p>
                                        <p class="rewrite"><b>Телефон: <? echo $data_text[8]; ?> | <? echo $data_text[9]; ?></b></p>
                                        <p class="rewrite"><b>Почта: <? echo $data_text[10]; ?> </b></p>
                                        <p><b>График работы</b></p>
                                        <p class="rewrite"><? echo $data_text[11]; ?></p>
                                        <p class="rewrite"><? echo $data_text[12]; ?></p>
                                        <p class="rewrite"><? echo $data_text[13]; ?></p>
                                <br>
                            </div>
                            </div>
                    
                </div>
                <div class="col-md-3 col-sm-6">
                    
                </div> 
            </div>
        </div>
        <!-- Наши контакты -->
            
            <!-- Запись на прием -->
            <div class="appoitment">
                
            </div>
        
            <!-- Карта -->
                <!-- <div class="col-md-10"> -->
                    <!-- <div class="row"> -->
                        <!-- <div class="col-md-12"> -->
                            <div class="map"></div>
                        <!-- </div> -->
                    <!-- </div> -->
                
            <!-- Футер -->
            <div class="footer"></div>
        </div>
</div>
</body>
</html>
