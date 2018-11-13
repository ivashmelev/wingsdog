<?
error_reporting( E_ERROR );

session_start();
if (!isset($_SESSION['userid'])){
    header('Location: /admin/auth_form.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Тарифы</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/rates.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="../js/index.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7tBkCda7HIre5BYo2IaX4U5l8QCzrj9o&callback=initMap"></script>    
    <script src="../js/map.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../js/rates.js"></script>
    <script src="../js/appoitment.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/admin_pages.js"></script>

</head>
<?

require_once ("connection.php");

$link = mysqli_connect($host, $user, $password, $database)
            or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');

$text_new=$_POST['text_new'];
$text_page=$_POST['text_page'];
$font=$_POST['font'];

if($font!=""){
    $query_update_font="UPDATE font SET font_name='$font'";
    $result_update_font=mysqli_query($link, $query_update_font) or die("Ошибка " . mysqli_error($link));
}


$query_update_page_rates="UPDATE page_rates SET text='$text_new' WHERE text='$text_page'";
$query_select_page_rates_all="SELECT * FROM page_rates";
$query_select_page_rates="SELECT * FROM page_rates WHERE text='$text_page'";
$query_select_font="SELECT font_name FROM font";

$result_update=mysqli_query($link, $query_update_page_rates) or die("Ошибка " . mysqli_error($link));

$result_select_all=mysqli_query($link, $query_select_page_rates_all) or die("Ошибка " . mysqli_error($link));
$result_select=mysqli_query($link, $query_select_page_rates) or die("Ошибка " . mysqli_error($link));
$result_select_font=mysqli_query($link, $query_select_font) or die("Ошибка " . mysqli_error($link));




$data_text=array();
$data_font=array();



while(($font_result=mysqli_fetch_array($result_select_font))==!false){
    array_push($data_font, $font_result['font_name']);
}

while(($row=mysqli_fetch_array($result_select_all))==!false){
    array_push($data_text, $row['text']);
}
// $query_select_font="SELECT font_name FROM font";
// $result_select_font=mysqli_query($link, $query_select_font) or die("Ошибка " . mysqli_error($link));
// $font_result=mysqli_fetch_row($result_select_font);
// echo $name=$_POST['name']."here";
$query_select="SELECT * FROM rates";
$result = mysqli_query($link, $query_select) or die("Ошибка " . mysqli_error($link));
$data_undertext=array();
$data_column_rate=array();
$data_column_sizepay=array();

// $query_select_page_rates_all="SELECT * FROM page_rates";
// $result_select_all=mysqli_query($link, $query_select_page_rates_all);
// $data_text=array();
// while(($row_page_rates=mysqli_fetch_array($result_select_all))){
    // array_push($data_text, $row_page_rates['text']);
// }

while(($row = mysqli_fetch_array($result))==!false){
   array_push($data_undertext, $row['undertext']);
   array_push($data_column_rate, $row['column_rate']);
   array_push($data_column_sizepay, $row['column_sizepay']);
}


?>

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
                    <h1 align="right" class="rewrite" style="color:white"> <? echo $data_text[2];?></h1>
                    <h3 align="right" class="rewrite" style="color:white"> <? echo $data_text[3];?></h3>
                    <h3 align="right" class="rewrite" style="color:white"> <? echo $data_text[4];?></h3>
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
                            <h1 class="rewrite"><? echo $data_text[5]; ?></h1>
                            <br>
                            <p class="rewrite"><? echo $data_text[6]; ?></p></div>
                    </div>
                
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="time-board">                                                                                                                

                            <div class="row justify-content-center">
                                <div class="col-md-2 ">
                                    <img src="img/appoitment.png" alt="Расписание">
                                </div>
                            </div>
                            <p>Понедельник-Четверг:</p>
                            <p>10:00-18:00</p>
                            <p>Суббота, воскресенье - выходные дни</p>
                        
                            <div class="row">
                                <button id="call">Запись на прием</button>
                            </div>
                        </div>
                        </div> -->
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
                <div class="row justify-content-center">
                        <div class="col-md-9">
                                <div class="rate-menu">
                            <div class="row align-items-center">
                                    <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Договора, соглашения, сделки</p></a></div>
                                <div class="col-md-4 justify-content-center"><a href="#ref-rates"><p onclick="showRate(this)">Завещание</p></a></div>                    
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Доверенность</p></a></div>
                            </div>
                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Депозит нотариуса</p></a></div>
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Копии документов (выписки из них)</p></a></div>
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Свидетельствование подлинности подписи</p></a></div>                    
                           </div>
                            <br>
                            <br>
                            <div class="row align-items-center">
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Наследство</p></a></div>
                                <div class="col-md-4"><a href="#ref-rates"><p onclick="showRate(this)">Иные нотариальные действия</p></a></div><a name="ref-rates"></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <br>
                    <br>
                    <br>
                <div class="row">
                    <div class="container-fluid" >
                            <div class="col-md-10" >
                        <div class="bring"></div>
                        <div class="checkbox">
                            <input class="check" id="rate-1" type="checkbox" name="" value="Налоги">
                            <label for="rate-1">Удостоверение сделок, предметом которых является отчуждение недвижимого имущества (когда нотариальная форма обязательна)</label>
                            <div class="open"><i><? echo $data_undertext[0]; ?></i>
                                <div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p><? echo $data_column_rate[0]; ?></p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p><? echo $data_column_sizepay[0]; ?></p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="checkbox">
                                <input class="check" id="rate-2" type="checkbox" name="" value="Налоги">
                                <label for="rate-2">Удостоверение сделок, предметом которых является отчуждение недвижимого имущества (когда нотариальная форма не обязательна)</label>
                                <div class="open"><i><? echo $data_undertext[1]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p><? echo $data_column_rate[1]; ?>
                                                    
                                                </p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p><? echo $data_column_sizepay[1]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        <div class="checkbox">
                            <input class="check" id="rate-3" type="checkbox" name="" value="Налоги">
                            <label for="rate-3">Удостоверение договоров ренты и пожизненного содержания с иждивением</label>
                            <div class="open"><i></i>
                                <!-- <hr> --><div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p><? echo $data_column_rate[2]; ?>
                                            </p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p><? echo $data_column_sizepay[2]; ?></p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>    

                        <div class="checkbox">
                            <input class="check" id="rate-4" type="checkbox" name="" value="Налоги">
                            <label for="rate-4">Удостоверение соглашения о разделе общего имущества, нажитого супругами в браке</label>
                            <div class="open"><i></i>
                                <!-- <hr> --><div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p><? echo $data_column_rate[3]; ?>
                                            </p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p><? echo $data_column_sizepay[3]; ?></p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="checkbox">
                            <input class="check" id="rate-5" type="checkbox" name="" value="Налоги">
                            <label for="rate-5">Удостоверение договоров купли-продажи доли (части доли) в уставном капитале общества с ограниченной ответственностью</label>
                            <div class="open"><i><? echo $data_undertext[4]; ?>
                                    </i>
                                <!-- <hr> --><div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p><? echo $data_column_rate[4]; ?>
                                            </p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p><? echo $data_column_sizepay[4]; ?>
                                            </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="checkbox">
                            <input class="check" id="rate-6" type="checkbox" name="" value="Налоги">
                            <label for="rate-6">Удостоверение договоров залога доли (части доли) в уставном капитале общества с ограниченной ответственностью </label>
                            <div class="open"><i><? echo $data_undertext[5]; ?>
                                    </i>
                                <!-- <hr> --><div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p><? echo $data_column_rate[5]; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p><? echo $data_column_sizepay[5]; ?>
                                            </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="checkbox">
                                <input class="check" id="rate-7" type="checkbox" name="" value="Налоги">
                                <label for="rate-7">Удостоверение прочих договоров, предмет которых подлежит оценке, если такое удостоверение обязательно </label>
                                <div class="open"><i> <? echo $data_undertext[6]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p><? echo $data_column_rate[6]; ?>

                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p><? echo $data_column_sizepay[6]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                        <div class="checkbox">
                                <input class="check" id="rate-8" type="checkbox" name="" value="Налоги">
                                <label for="rate-8">Удостоверение прочих договоров, предмет которых полежит оценке </label>
                                <div class="open"><i>  <? echo $data_undertext[7]; ?>
                                        
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p><? echo $data_column_rate[7]; ?>
                                            </p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p><? echo $data_column_sizepay[7]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-9" type="checkbox" name="" value="Налоги">
                                    <label for="rate-9">Удостоверение договоров дарения, за исключением договоров дарения недвижимого имущества  (когда не требуется обязательная нотариальная форма)</label>
                                    <div class="open"><i><? echo $data_undertext[8]; ?>
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p><? echo $data_column_rate[8]; ?>
                                                        
                                                </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[8]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-10" type="checkbox" name="" value="Налоги">
                                    <label for="rate-10">Удостоверение  договора дарения, за исключением договоров дарения недвижимого имущества (когда требуется обязательная нотариальная форма)
                                        </label>
                                    <div class="open"><i><? echo $data_undertext[9]; ?>
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p><? echo $data_column_rate[9]; ?>
                                                        
                                                </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[9]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                        <div class="checkbox">
                                    <input class="check" id="rate-12" type="checkbox" name="" value="Налоги">
                                    <label for="rate-12">Удостоверение договоров уступки требования: 
                                        </label>
                                    <div class="open"><i><? echo $data_undertext[10]; ?>
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p><? echo $data_column_rate[10]; ?>
                                                </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[10]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-13" type="checkbox" name="" value="Налоги">
                                        <label for="rate-13">Удостоверение договоров финансовой аренды (лизинга) воздушных, речных и морских судов
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p><? echo $data_column_rate[11]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[11]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-14" type="checkbox" name="" value="Налоги">
                                        <label for="rate-14">Удостоверение соглашения об уплате алиментов 
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[12]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[12]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-15" type="checkbox" name="" value="Налоги">
                                        <label for="rate-15">Удостоверение брачного договора
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[13]; ?> 
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[13]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-16" type="checkbox" name="" value="Налоги">
                                        <label for="rate-16">Удостоверение соглашения о разделе общего имущества, нажитого супругами в период брака
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[14]; ?> 
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[14]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-17" type="checkbox" name="" value="Налоги">
                                        <label for="rate-17">Удостоверение договора по оформлению в долевую собственность родителей и детей жилого помещения, приобретенного с использованием средств материнского капитала
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[15]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[15]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                            <div class="checkbox">
                                        <input class="check" id="rate-18" type="checkbox" name="" value="Налоги">
                                        <label for="rate-18">Удостоверение договора поручительства
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[16]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[16]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-19" type="checkbox" name="" value="Налоги">
                                        <label for="rate-19">Удостоверение соглашения о внесении изменений в договор
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> 200 рублей
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b><? echo $data_column_rate[17]; ?> </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[17]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-20" type="checkbox" name="" value="Налоги">
                                        <label for="rate-20">Удостоверение соглашения о расторжении договора
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[18]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[18]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            

                            <div class="checkbox">
                                        <input class="check" id="rate-21" type="checkbox" name="" value="Налоги">
                                        <label for="rate-21">Удостоверение сделок, предмет которых не подлежит оценке
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p><? echo $data_column_rate[19]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[19]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                           <div class="checkbox">
                                        <input class="check" id="rate-22" type="checkbox" name="" value="Налоги">
                                        <label for="rate-22">Удостоверение завещания
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[20]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[20]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                            <div class="checkbox">
                                        <input class="check" id="rate-23" type="checkbox" name="" value="Налоги">
                                        <label for="rate-23">Принятие закрытого завещания 
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[21]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[21]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-24" type="checkbox" name="" value="Налоги">
                                        <label for="rate-24">Вскрытие конверта с закрытым завещанием и оглашение закрытого завещания

                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[22]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[22]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                        

                                <div class="checkbox">
                                        <input class="check" id="rate-26" type="checkbox" name="" value="Налоги">
                                        <label for="rate-26">Распоряжение об отмене завещания 

                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[23]; ?>
                                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[23]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-27" type="checkbox" name="" value="Налоги">
                                        <label for="rate-27">Удостоверение Доверенностей на право пользования и (или) распоряжение автотранспортными средствами
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[24]; ?> </p>                                             
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[24]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-28" type="checkbox" name="" value="Налоги">
                                        <label for="rate-28">Удостоверение Доверенностей на право пользования и (или) распоряжения имуществом
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[25]; ?></p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[25]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-29" type="checkbox" name="" value="Налоги">
                                        <label for="rate-29">Удостоверение доверенностей, выдаваемых в порядке передоверия (с любыми полномочиями)
                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[26]; ?>                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[26]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                             <div class="checkbox">
                                        <input class="check" id="rate-30" type="checkbox" name="" value="Налоги">
                                        <label for="rate-30">Удостоверение прочих доверенностей, требующих нотариальную форму

                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p>  <? echo $data_column_rate[27]; ?>                                    </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[27]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                            <div class="checkbox">
                                        <input class="check" id="rate-31" type="checkbox" name="" value="Налоги">
                                        <label for="rate-31">Распоряжение об отмене доверенности 

                                            </label>
                                        <div class="open"><i>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[28]; ?>                                       </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[28]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                        <div class="checkbox">
                            <input class="check" id="rate-32" type="checkbox" name="" value="Налоги">
                            <label for="rate-32">Принятие в депозит денежных сумм или ценных бумаг (если
                                    такое принятие на депозит обязательно в соответствии с
                                    законодательством Российской Федерации)

                                </label>
                            <div class="open"><i><? echo $data_undertext[29]; ?>
                                    </i>
                                <!-- <hr> --><div class="br"></div>
                                <div class="row ">
                                    <div class="col-md-4">
                                        <b>Тариф</b>
                                        <hr>
                                        <p>  <? echo $data_column_rate[29]; ?></p>
                                    </div>
                                    <div class="col-md-8">
                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                        <hr>
                                        <p> <? echo $data_column_sizepay[29]; ?>
                                            </p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="checkbox">
                                <input class="check" id="rate-33" type="checkbox" name="" value="Налоги">
                                <label for="rate-33">Принятие в депозит денежных сумм или ценных бумаг (если
                                        такое принятие на депозит не обязательно в соответствии с
                                        законодательством Российской Федерации)
    
                                    </label>
                                <div class="open"><i>
                                <? echo $data_undertext[30]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p><? echo $data_column_rate[30]; ?></p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p> <? echo $data_column_sizepay[30]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                             <div class="checkbox">
                                <input class="check" id="rate-34" type="checkbox" name="" value="Налоги">
                                <label for="rate-34">Принятие в депозит нотариуса, удостоверившего сделку,
                                        денежных сумм в целях исполнения обязательств по такой
                                        сделке
    
                                    </label>
                                <div class="open"><i>
                                <? echo $data_undertext[31]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p>  <? echo $data_column_rate[31]; ?></p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p> <? echo $data_column_sizepay[31]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                        <div class="checkbox">
                                <input class="check" id="rate-35" type="checkbox" name="" value="Налоги">
                                <label for="rate-35">Свидетельствование верности копий документов
    
                                    </label>
                                <div class="open"><i><? echo $data_undertext[32]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p> <? echo $data_column_rate[32]; ?></p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p> <? echo $data_column_sizepay[32]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-36" type="checkbox" name="" value="Налоги">
                                    <label for="rate-36">Удостоверение копий учредительных документов организаций
        
                                        </label>
                                    <div class="open"><i>
                                    <? echo $data_undertext[33]; ?>
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[33]; ?></p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p> <? echo $data_column_sizepay[33]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-37" type="checkbox" name="" value="Налоги">
                                    <label for="rate-37">Свидетельствование подлинности подписи
        
                                        </label>
                                    <div class="open"><i>
                                    <? echo $data_undertext[34]; ?>
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[34]; ?></p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p> <? echo $data_column_sizepay[34]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-38" type="checkbox" name="" value="Налоги">
                                        <label for="rate-38">Свидетельствование подлинности подписи на решение
                                                единственного участника хозяйственного общества
            
                                            </label>
                                        <div class="open"><i>
                                        <? echo $data_undertext[35]; ?>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[35]; ?></p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[35]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                            

                            <div class="checkbox">
                                        <input class="check" id="rate-39" type="checkbox" name="" value="Налоги">
                                        <label for="rate-39">Свидетельствование подлинности подписи на заявлениях об
                                                отказе от преимущественного права покупки доли в уставном
                                                капитале ООО
            
                                            </label>
                                        <div class="open"><i>
                                        <? echo $data_undertext[36]; ?>
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[36]; ?></p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p> <? echo $data_column_sizepay[36]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                        
                        <div class="checkbox">
                                <input class="check" id="rate-40" type="checkbox" name="" value="Налоги">
                                <label for="rate-40">Выдача свидетельства о праве на наследство по закону и по
                                        завещанию
    
                                    </label>
                                <div class="open"><i>
                                <? echo $data_undertext[37]; ?>
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p> <? echo $data_column_rate[37]; ?>
                                                </p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p> <? echo $data_column_rate[37]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-41" type="checkbox" name="" value="Налоги">
                                    <label for="rate-41">Принятие мер по охране наследственного имущества
        
                                        </label>
                                    <div class="open"><i>
                                           
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[38]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[38]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-42" type="checkbox" name="" value="Налоги">
                                    <label for="rate-42">Учреждение доверительного управления наследственным
                                            имуществом
        
                                        </label>
                                    <div class="open"><i>
                                           
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[39]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[39]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-43" type="checkbox" name="" value="Налоги">
                                    <label for="rate-43">Выдача свидетельства о праве собственности на долю в общей
                                            собственности супругов в случае смерти одного из супругов
        
                                        </label>
                                    <div class="open"><i>
                                           
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[40]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[40]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                        <div class="checkbox">
                                <input class="check" id="rate-44" type="checkbox" name="" value="Налоги">
                                <label for="rate-44">Выдача дубликатов документов
    
                                    </label>
                                <div class="open"><i>
                                        
                                        </i>
                                    <!-- <hr> --><div class="br"></div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <b>Тариф</b>
                                            <hr>
                                            <p> <? echo $data_column_rate[41]; ?>
                                                </p>
                                        </div>
                                        <div class="col-md-8">
                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                            <hr>
                                            <p><? echo $data_column_sizepay[41]; ?>
                                                </p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="checkbox">
                                    <input class="check" id="rate-45" type="checkbox" name="" value="Налоги">
                                    <label for="rate-45">Принятие на хранение документов
        
                                        </label>
                                    <div class="open"><i>
                                            
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[42]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[42]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <input class="check" id="rate-46" type="checkbox" name="" value="Налоги">
                                    <label for="rate-46">Принятие на хранение документов. Cвидетельствование верности перевода документа с одного
                                            языка на другой (сделанного нотариусом)
        
                                        </label>
                                    <div class="open"><i>
                                            
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[43]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[43]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <input class="check" id="rate-47" type="checkbox" name="" value="Налоги">
                                    <label for="rate-47">Совершение исполнительной надписи
        
                                        </label>
                                    <div class="open"><i>
                                            
                                            </i>
                                        <!-- <hr> --><div class="br"></div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <b>Тариф</b>
                                                <hr>
                                                <p> <? echo $data_column_rate[44]; ?>
                                                    </p>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                <hr>
                                                <p><? echo $data_column_sizepay[44]; ?>
                                                    </p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-48" type="checkbox" name="" value="Налоги">
                                        <label for="rate-48">Совершение исполнительной надписи об обращении взыскания
                                                на заложенное имущество
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[45]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[45]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-49" type="checkbox" name="" value="Налоги">
                                        <label for="rate-49">Совершение протеста векселя в неплатеже, неакцепте и не
                                                датировании акцепта, удостоверение неоплаты чека
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p><? echo $data_column_rate[46]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[46]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                <div class="checkbox">
                                        <input class="check" id="rate-50" type="checkbox" name="" value="Налоги">
                                        <label for="rate-50">Удостоверение решения органа управления юридического лица
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[47]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[47]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-51" type="checkbox" name="" value="Налоги">
                                        <label for="rate-51">Регистрация уведомления о залоге движимого имущества
                                                (уведомление представлено в бумажном виде)
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[48]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[48]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-52" type="checkbox" name="" value="Налоги">
                                        <label for="rate-52">Выдача выписки из реестра уведомлений о залоге движимого
                                                имущества
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[49]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[49]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-53" type="checkbox" name="" value="Налоги">
                                        <label for="rate-53">Удостоверение равнозначности электронного документа
                                                представленному документу на бумажном носителе
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[50]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[50]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                     <div class="checkbox">
                                        <input class="check" id="rate-54" type="checkbox" name="" value="Налоги">
                                        <label for="rate-54">Удостоверение равнозначности документа на бумажном носителе
                                                представленному электронному документу
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[51]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[51]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-55" type="checkbox" name="" value="Налоги">
                                        <label for="rate-55">Удостоверение тождественности собственноручной подписи
                                                инвалида по зрению с факсимильным воспроизведением его
                                                собственноручной подписи
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[52]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[52]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-56" type="checkbox" name="" value="Налоги">
                                        <label for="rate-56">Обеспечения доказательств, в том числе осмотр интернет-сайта
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[53]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[53]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                        <input class="check" id="rate-57" type="checkbox" name="" value="Налоги">
                                        <label for="rate-57">Представление документов на государственную регистрацию
                                                прав на недвижимое имущество и сделок с ним (в т.ч. в
                                                электронной форме)
            
                                            </label>
                                        <div class="open"><i>
                                                
                                                </i>
                                            <!-- <hr> --><div class="br"></div>
                                            <div class="row ">
                                                <div class="col-md-4">
                                                    <b>Тариф</b>
                                                    <hr>
                                                    <p> <? echo $data_column_rate[54]; ?>
                                                        </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                    <hr>
                                                    <p><? echo $data_column_sizepay[54]; ?>
                                                        </p>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="checkbox">
                                            <input class="check" id="rate-58" type="checkbox" name="" value="Налоги">
                                            <label for="rate-58">Представление документов на государственную регистрацию
                                                    юридических лиц и индивидуальных предпринимателей
                
                                                </label>
                                            <div class="open"><i>
                                                    
                                                    </i>
                                                <!-- <hr> --><div class="br"></div>
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <b>Тариф</b>
                                                        <hr>
                                                        <p> <? echo $data_column_rate[55]; ?>
                                                            </p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                        <hr>
                                                        <p><? echo $data_column_sizepay[55]; ?>
                                                            </p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                    <div class="checkbox">
                                            <input class="check" id="rate-59" type="checkbox" name="" value="Налоги">
                                            <label for="rate-59">Передача сведений, которые содержатся в заявлениях
                                                    физических лиц и юридических лиц, в Единый федеральный
                                                    реестр сведений о банкротстве, а также в Единый федеральный
                                                    реестр сведений о фактах деятельности юридических лиц
                
                                                </label>
                                            <div class="open"><i>
                                                    
                                                    </i>
                                                <!-- <hr> --><div class="br"></div>
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <b>Тариф</b>
                                                        <hr>
                                                        <p> <? echo $data_column_rate[56]; ?>
                                                            </p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                        <hr>
                                                        <p><? echo $data_column_sizepay[56]; ?>
                                                            </p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                 <div class="checkbox">
                                            <input class="check" id="rate-60" type="checkbox" name="" value="Налоги">
                                            <label for="rate-60">Удостоверение оферты о продаже доли в уставном капитале
                                                    Общества (ст. 21 Закона об ООО)
                
                                                </label>
                                            <div class="open"><i>
                                                    
                                                    </i>
                                                <!-- <hr> --><div class="br"></div>
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <b>Тариф</b>
                                                        <hr>
                                                        <p> <? echo $data_column_rate[57]; ?>
                                                            </p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                        <hr>
                                                        <p><? echo $data_column_sizepay[57]; ?>
                                                            </p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                <div class="checkbox">
                                            <input class="check" id="rate-61" type="checkbox" name="" value="Налоги">
                                            <label for="rate-61">Удостоверение оферты о продаже доли в уставном капитале
                                                    Общества (ст. 21 Закона об ООО)
                
                                                </label>
                                            <div class="open"><i>
                                                    
                                                    </i>
                                                <!-- <hr> --><div class="br"></div>
                                                <div class="row ">
                                                    <div class="col-md-4">
                                                        <b>Тариф</b>
                                                        <hr>
                                                        <p> <? echo $data_column_rate[58]; ?>
                                                            </p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                        <hr>
                                                        <p><? echo $data_column_sizepay[58]; ?>
                                                            </p>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="checkbox">
                                                <input class="check" id="rate-62" type="checkbox" name="" value="Налоги">
                                                <label for="rate-62">Удостоверение согласия супруга на заключение сделки по
                                                распоряжению имуществом
                    
                                                    </label>
                                                <div class="open"><i>
                                                        
                                                        </i>
                                                    <!-- <hr> --><div class="br"></div>
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <b>Тариф</b>
                                                            <hr>
                                                            <p> <? echo $data_column_rate[59]; ?>
                                                                </p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                            <hr>
                                                            <p><? echo $data_column_sizepay[59]; ?>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                    <div class="checkbox">
                                                <input class="check" id="rate-63" type="checkbox" name="" value="Налоги">
                                                <label for="rate-63"> Удостоверение согласия законных представителей, опекунов,
                                                        попечителей на выезд несовершеннолетних детей за границу
                    
                                                    </label>
                                                <div class="open"><i>
                                                        
                                                        </i>
                                                    <!-- <hr> --><div class="br"></div>
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <b>Тариф</b>
                                                            <hr>
                                                            <p> <? echo $data_column_rate[60]; ?>
                                                                </p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                            <hr>
                                                            <p><? echo $data_column_sizepay[60]; ?>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                    <div class="checkbox">
                                                <input class="check" id="rate-64" type="checkbox" name="" value="Налоги">
                                                <label for="rate-64">Совершение прочих нотариальных действий
                    
                                                    </label>
                                                <div class="open"><i>
                                                        
                                                        </i>
                                                    <!-- <hr> --><div class="br"></div>
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <b>Тариф</b>
                                                            <hr>
                                                            <p> <? echo $data_column_rate[61]; ?>
                                                                </p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                            <hr>
                                                            <p><? echo $data_column_sizepay[61]; ?>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="checkbox">
                                                <input class="check" id="rate-65" type="checkbox" name="" value="Налоги">
                                                <label for="rate-65">Удостоверение заявления о выходе участника из Общества (ст.
                                                        26 Закона об ООО)
                    
                                                    </label>
                                                <div class="open"><i>
                                                        
                                                        </i>
                                                    <!-- <hr> --><div class="br"></div>
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <b>Тариф</b>
                                                            <hr>
                                                            <p> <? echo $data_column_rate[62]; ?>
                                                                </p>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                            <hr>
                                                            <p><? echo $data_column_sizepay[62]; ?>
                                                                </p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="checkbox">
                                                    <input class="check" id="rate-66" type="checkbox" name="" value="Налоги">
                                                    <label for="rate-66">Внесение сведений в реестр списков участников ООО ЕИС
                                                            нотариата (ст. 103.11 Основ законодательства Российской
                                                            Федерации о нотариате))
                        
                                                        </label>
                                                    <div class="open"><i>
                                                            
                                                            </i>
                                                        <!-- <hr> --><div class="br"></div>
                                                        <div class="row ">
                                                            <div class="col-md-4">
                                                                <b>Тариф</b>
                                                                <hr>
                                                                <p> <? echo $data_column_rate[63]; ?>
                                                                    </p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                                <hr>
                                                                <p><? echo $data_column_sizepay[63]; ?>
                                                                    </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="checkbox">
                                                    <input class="check" id="rate-67" type="checkbox" name="" value="Налоги">
                                                    <label for="rate-67">Выдача выписки из реестра списков участников ООО ЕИС
                                                            нотариата (ст. 102.11 Основ законодательства Российской
                                                            Федерации о нотариате)
                        
                                                        </label>
                                                    <div class="open"><i>
                                                            
                                                            </i>
                                                        <!-- <hr> --><div class="br"></div>
                                                        <div class="row ">
                                                            <div class="col-md-4">
                                                                <b>Тариф</b>
                                                                <hr>
                                                                <p> <? echo $data_column_rate[64]; ?>
                                                                    </p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                                <hr>
                                                                <p><? echo $data_column_sizepay[64]; ?>
                                                                    </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="checkbox">
                                                    <input class="check" id="rate-68" type="checkbox" name="" value="Налоги">
                                                    <label for="rate-68">Услуги по совершению нотариальных действий вне помещения
                                                            нотариальной конторы
                        
                                                        </label>
                                                    <div class="open"><i>
                                                    <? echo $data_undertext[65]; ?>
                                                            </i>
                                                        <!-- <hr> --><div class="br"></div>
                                                        <div class="row ">
                                                            <div class="col-md-4">
                                                                <b>Тариф</b>
                                                                <hr>
                                                                <p> <? echo $data_column_rate[65]; ?>
                                                                    </p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <b>Размер платы за услуги правового и технического характера (УПТХ) </b>
                                                                <hr>
                                                                <p><? echo $data_column_sizepay[65]; ?>
                                                                    </p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>


                                    


                    </div>
                        
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p><b class="rewrite"><? echo $data_text[7]; ?></b></p>
                        <ol>
                            <li>
                                <u class="rewrite"><? echo $data_text[8]; ?></u>
                                <ul>
                                    <li class="rewrite"><? echo $data_text[9]; ?></li>
                                    <li class="rewrite"><? echo $data_text[10]; ?></li>
                                    <li class="rewrite"><? echo $data_text[11]; ?></li>
                                    <li class="rewrite"><? echo $data_text[12]; ?></li>
                                    <li class="rewrite"><? echo $data_text[13]; ?></li>
                                </ul>
                            </li>
                            <li>
                                <u class="rewrite"><? echo $data_text[14]; ?></u>
                            </li>
                            <li>
                                <u class="rewrite"><? echo $data_text[15]; ?></u>
                                <ul>
                                    <li class="rewrite"><? echo $data_text[16]; ?></li>
                                    <li class="rewrite"><? echo $data_text[17]; ?></li>
                                    <li class="rewrite"><? echo $data_text[18]; ?></li>                                    
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            
        </div>
    </div>
        <br>
        <!-- Карта -->
            <div class="col-md-12">
        <div class="row">
                <div class="map"></div>
            </div>
        </div>
                    <!-- Футер -->
        
        <div class="footer">
            
        </div>
    <script> onLoad() </script>
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
            </div>
</body>
</html>
