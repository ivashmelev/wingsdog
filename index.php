<?php
require_once("connection.php");
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка".mysqli_error($link));
$select_contacts = mysqli_query($link, "SELECT * from contacts") or die("Error".mysqli_error($link));
$row = mysqli_fetch_array($select_contacts);
$name = json_encode($row["name"]);
$phone = json_encode($row["phone"]);
$mail = json_encode($row["mail"]);
$addres = json_encode($row["addres"]);
$img = $row["img"];
$select_hide = mysqli_query($link, "SELECT * from hide_page") or die("Error".mysqli_error($link));
$arr_hide = array();
$i=0;
while($row_hide = mysqli_fetch_array($select_hide)){
    $arr_hide[$row_hide["page"]]=$row_hide["status"];
    $arr_hide[$i]=$row_hide["status"];
    $i++;
}
$arr_hide = json_encode($arr_hide);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="lib/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYM34wyhKd80QdTH8Ren4q-1-4N6SKuI"></script>
    <!-- &callback=initMap -->
    <script src="js/script.js"></script>
    <script src="js/map.js"></script>
    <script src="js/menu.js"></script>
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"> </script>
    <link rel="stylesheet" href="css/style.css"  type="text/css">
    <link rel="stylesheet" href="css/adaptiv.css"  type="text/css">
    <link rel="stylesheet" href="css/menu.css"  type="text/css">
    <link rel="stylesheet" href="css/index.css"  type="text/css">
    <title>Крылатый Пёс</title>
</head>
<script>
        function writeContacts(name, phone, mail, addres){
            console.log(1);
            localStorage.setItem("name", name);
            localStorage.setItem("phone", phone);
            localStorage.setItem("mail", mail);
            localStorage.setItem("addres", addres);            
        }
    </script>
    <?php
        echo "<script>  writeContacts($name, $phone, $mail, $addres);</script>";
    ?>
<body>
    <div class="wrapper">
        <div class="header" style="background-image: url(<?php echo $row["img"];?>);">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="header__background">
                            <div class="row">
                                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-3">
                                    <div class="header__logo">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-8 col-sm-9">
                                    <div class="header__text">
                                        <p class="head-text storage_name" style="white-space: pre-wrap;"><?php echo $row["name"];?></p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                </div> -->
                                <div class="col">
                                    <div class="header__text text_phone">
                                        <p class="head-text storage_phone" id="">тел. <?php echo $row["phone"];?></p>
                                        <p class="head-text storage_mail" id="">e-mail: <?php echo $row["mail"];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu">
                            <nav class="menu-links">
                                <div class="menu-item "><a href="index.php" class="menu-links-item ">Главная</a></div>
                                <div class="menu-item "><a href="news.php" class="menu-links-item ">Мероприятия</a></div>
                                <div class="menu-item "><a href="team.php" class="menu-links-item ">Инструктора</a></div>
                                <div class="menu-item "><a href="attainment.php" class="menu-links-item ">Достижения</a></div>
                                <div class="menu-item "><a href="over-exposure.php" class="menu-links-item ">Передержка</a></div>
                                <div class="menu-item "><a href="photo.php" class="menu-links-item ">Фотоальбом</a></div>
                                <div class="menu-item "><a href="contacts.php" class="menu-links-item ">Контакты</a></div>
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
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="head-h2" style="text-align: center">О кинологической площадке</h2>
                    </div>
                </div>
                <div class="content-text">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-md-8 ">
                            <div class="text-photo" id="main_img1">
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-8 order-lg-first">
                            <p class="text-p">Наша площадка начала свою деятельность в августе 2017 года. 
Местонахождение: Нижегородская область, поселок Большое Козино. 
Площадка оборудована всеми необходимыми снарядами, для подготовки к нормативам, 
имеет ограждение, подъездные пути, туалет.</p>
                        </div>
                    </div>
                </div>
                <div class="content-text">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-md-8">
                            <div class="text-photo" id="main_img2">

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-8">
                            <p class="text-p">Основные направления деятельности:
- Проведение кинологических мероприятий 
- Дрессировка собак по разным дисциплинам 
- Передержка собак</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-back">
            <div class="content-back-txt">
                <div class="margin-text mt-up">
                    <p class="text-back">Тренировка собак</p>
                </div>
                <div class="margin-text mt-down">
                    <p class="text-back">В экстримальных условиях</p>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="head-h2" style="text-align: center">Мероприятия и дрессировка</h2>
                    </div>
                </div>
                <div class="content-text">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-md-8 ">
                            <div class="text-photo" id="main_img4">
                                
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-8 order-lg-first">
                            <p class="text-p">
 - соревнования
 - выставки
 - семинары 
 - тренинги</p>
                        </div>
                    </div>
                </div>
                <div class="content-text">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-3 col-md-8">
                            <div class="text-photo" id="main_img3">

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-8">
                            <p class="text-p">- общий курс дрессировки (ОКД) 
- защитно-караульная служба (ЗКС) 
- международный стандарт BH(собака-компаньон) 
- международный вид спорта мондьоринг (послушание+защита+прыжки) 
- курс «Управляемая собака» 
- защита хозяина (собака-телохранитель) 
- охрана территории 
- коррекция нежелательного поведения собак 
- игровые виды спорта</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="foot">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="footer-text">
                                        <p class="head-text">
                                            © НРОО КК "Крылатый Пёс"
                                        </p>
                                    </div>
                                </div>
                                <div class="social">
                                    <img src="img/vk.png" alt="vk.com">
                                </div>
                            </div>                                
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="footer-text">
                                        <p class="head-text" style="text-align: right;">
                                            Разработка сайта - YouTale
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="container-fluid">
    <form>
        <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="search-form">Поиск по договору или клиенту</label>
                <div class="input-group">
                    <input type="search" class="form-control" id="search-form">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-danger">X</button>
                    </div>
                </div>
            </div> -->
    <script>
        function hidePage(arr_hide){
            arrMenu = Array.from($(".menu-links-item"));
            if(arr_hide["Мероприятия"]=="false"){$(arrMenu[1]).parent().css({display:"none"}); localStorage.setItem("Мероприятия", "false");}
            if(arr_hide["Инструктора"]=="false"){$(arrMenu[2]).parent().css({display:"none"}); localStorage.setItem("Инструктора", "false");}
            if(arr_hide["Достижение"]=="false"){$(arrMenu[3]).parent().css({display:"none"}); localStorage.setItem("Достижение", "false");}
            if(arr_hide["Передержка"]=="false"){$(arrMenu[4]).parent().css({display:"none"}); localStorage.setItem("Передержка", "false");}
            if(arr_hide["Фотоальбом"]=="false"){$(arrMenu[5]).parent().css({display:"none"}); localStorage.setItem("Фотоальбом", "false");}
            if(arr_hide["Контакты"]=="false"){$(arrMenu[6]).parent().css({display:"none"}); localStorage.setItem("Контакты", "false");}
        }
    </script>
    <?php echo "<script> hidePage($arr_hide); </script>"; 
    echo "<script> localStorage.setItem('mainImg', '$img');</script>";?>
</body>
</html>
