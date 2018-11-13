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

$query_update_page_notary_actions="UPDATE page_notary_actions SET text='$text_new' WHERE text='$text_page'";
$query_select_page_notary_actions_all="SELECT * FROM page_notary_actions";
$query_select_page_notary_actions="SELECT * FROM page_notary_actions WHERE text='$text_page'";
$query_select_font="SELECT font_name FROM font";

$result_update=mysqli_query($link, $query_update_page_notary_actions) or die("Ошибка " . mysqli_error($link));

$result_select_all=mysqli_query($link, $query_select_page_notary_actions_all) or die("Ошибка " . mysqli_error($link));
$result_select=mysqli_query($link, $query_select_page_notary_actions) or die("Ошибка " . mysqli_error($link));
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
    <title>Нотариальные действия</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/notary_actions.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="../js/index.js"></script>
    <script src="../js/adaptive.js" type="text/javascript"></script>
    <!-- <script src="/js/appoitment.js"></script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7tBkCda7HIre5BYo2IaX4U5l8QCzrj9o&callback=initMap"></script>    
    <script src="../js/map.js"></script>
    <script src="../js/appoitment.js"></script>
    <script src="../js/admin_pages.js"></script>
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
                    <h1 class="rewrite"  align="right" style="color:white"> <? echo $data_text[2];?></h1>
                    <h3 class="rewrite" align="right"  style="color:white"> <? echo $data_text[3];?></h3>
                    <h3 class="rewrite"  align="right" style="color:white"> <? echo $data_text[4];?></h3>
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
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <!-- Сферы деятельности -->
                    <div class="actions">
                        <h1><? echo $data_text[5]; ?></h1>
                        <p><? echo $data_text[6]; ?></p></div>
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                    
                </div>
                </div>
                <!-- <hr> -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[7];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[8];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block">
                        <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[9];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[10];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[11];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[12];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-1">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[13];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[14];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-1">
                        <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[15];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[16];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-1">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[17];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[18];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-2">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[19];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[20];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-2">
                        <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[21];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[22];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-2">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[23];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[24];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-3">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[25];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[26];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-3">
                        <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[27];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[28];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-3">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[29];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[30];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-4">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[31];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[32];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-4">
                        <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[33];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[34];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-4">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[35];?></h5>
                        <p class="action-block-text rewrite"><? echo $data_text[36];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="action-block-5">
                    <div class="action-block-img"><img src=""></div>
                        <h5 class="action-block-name rewrite"><? echo $data_text[37];?></h5>
                        <p class="action-block-text rewrite" ><? echo $data_text[38];?></p>
                        <p class="action-block-button">Подробнее</p>
                    </div>
                </div>
            </div>
            </div>
            <br>
        </div>
        
        </div>
        <br>
        <!-- Карта -->
                    <div class="map"></div>
            </div>
                    <!-- Футер -->
        <div class="footer">
            
        </div>
    
    <script>var map;
                var uluru = {lat:56.320284, lng: 43.9971629};
                map=new google.maps.Map(document.getElementsByClassName("map")[0], {
                    zoom: 17,
                    center: uluru,
                    mapTypeControlOptions:{
                        mapTypeIds:["roadmap","satellite", "hybrid", "terrain", "styled_map"]
                    }
                    
                });
                
                var marker = new google.maps.Marker({
                    position: uluru,
                    map:map
                });
            </script>
</body>
</html>
