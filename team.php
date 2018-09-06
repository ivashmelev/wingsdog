<? require_once ("admin/query_mysql.php"); require_once ("admin/team/include_team.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
    <link rel="stylesheet" href="css/team.css"  type="text/css">
    <title>Команда</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="header__background">
                            <div class="row">
                                <div class="col-xl-1 col-lg-2 col-md-2 col-sm-3">
                                    <div class="header__logo">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-9">
                                    <div class="header__text">
                                        <p class="head-text">Нижегородская региональная общественная организация <br>кинологический клуб "Крылатый Пёс"</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                </div> -->
                                <div class="col">
                                    <div class="header__text text_phone">
                                        <p class="head-text">тел.&nbsp;8&nbsp;(831)&nbsp;298&nbsp;14&nbsp;88</p>
                                        <p class="head-text">e-mail: info@mysite.ru</p>
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
                                <div class="menu-item "><a href="team.php" class="menu-links-item ">Команда</a></div>
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
        <div class="content-team">
            <div class="container-fluid">
                <div class="team-block">
                    <!-- <div class="person">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-8">
                                <div style="background-image: url('img/<?echo $data_img[$i];?>'); background-size: cover;" class="team-photo"></div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <h2 class="head-h2"><?=$data_header[$i];?></h2>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                    <p class="text-p"><?=$data_text[$i];?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="person">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-8">
                                <div class="team-photo">

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <h2 class="head-h2">Лукашина Светлана Евгеньевна</h2>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                    <p class="text-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laborum id earum sint, quod, praesentium maxime magni dolores corrupti ut obcaecati placeat. Deleniti commodi debitis hic quo, eum sequi! Officia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="person">
                        <div class="row justify-content-center">
                            <div class="col-xl-3 col-lg-4 col-md-8">
                                <div class="team-photo">

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <h2 class="head-h2">Лепилина Юлия Юрьевна</h2>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                    <p class="text-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laborum id earum sint, quod, praesentium maxime magni dolores corrupti ut obcaecati placeat. Deleniti commodi debitis hic quo, eum sequi! Officia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>     -->
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
                                            © НКО "Крылатый Пёс"
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
    <script>
        function genTeam(count=0, header='Header', img='img', text='text'){
            for(i=0; i<count; i++){
                block_team=$(".team-block");
                content='<div class="person"> <div class="row justify-content-center"> <div class="col-xl-3 col-lg-4 col-md-8"> <div style="background-image: url(img/'+img[i]+'); background-size: cover;" class="team-photo"></div> </div> <div class="col-xl-6 col-lg-6 col-md-8"> <div class="row justify-content-center"> <div class="col-lg-12"> <h2 class="head-h2">'+header[i]+'</h2> </div> </div> <div class="row justify-content-center"> <div class="col-lg-12"> <p class="text-p">'+text[i]+'</p> </div> </div> </div> </div> </div>';
                // $(".content-news").append('<div class="news-block"></div>');
                block_team.append(content);
                // block_news.append(content);
            }
        console.log(count, header, img, text);
    }
    </script>
    <?echo  "<script> genTeam($count_rows, $data_header, $data_img, $data_text);</script>"?>
</body>
</html>
