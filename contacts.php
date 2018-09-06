<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYM34wyhKd80QdTH8Ren4q-1-4N6SKuI"></script>
    <!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYM34wyhKd80QdTH8Ren4q-1-4N6SKuI&callback=initMap">
  </script> -->
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
    <title>Контакты</title>
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
                                                <p class="head-text">Нижегородская региональная общественная организация кинологический клуб "Крылатый Пёс"</p>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="head-h2" style="text-align: center; margin: 50px;">Ждем на тренировку</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contacts-block">
                                <div class="container-fluid">
                                    <span class="text-p">п.Примерный,</span>
                                    <p class="text-p">Нижегородская область</p>
                                    <p class="text-p">info@primer.ru</p>
                                    <span class="text-p">Телефон: </span><span class="text-p">8 (831) 984 14 88</span>
                                    <br>
                                    <br>
                                    <p class="text-p">ЧАСЫ РАБОТЫ:</p>
                                    <span class="text-p">пн-пт: </span><span class="text-p">10:00-19:00</span>
                                    <br>
                                    <span class="text-p">сб:</span><span class="text-p">10:00-19:00</span>
                                    <br>
                                    <span class="text-p">вс: </span><span class="text-p">выходной</span>
                                </div>                        
                            </div>    
                        </div>
                        <div class="col-lg-6">
                            <div class="form-block">
                                <div class="container-fluid">
                                    <form action="contacts.php" method="POST">
                                        <label class="text-p" for="name">Имя</label>
                                        <br>
                                        <input class="form-block-input" type="text" name="name" id="name">
                                        <br>
                                        <label class="text-p" for="mail">E-mail</label>
                                        <br>
                                        <input class="form-block-input" type="email" name="mail" id="mail">
                                        <br>
                                        <label class="text-p" for="number">Контактный номер</label>
                                        <br>
                                        <input class="form-block-input" type="number" name="number" id="number">
                                        <br>
                                        <label class="text-p" for="comment">Комментарий</label>
                                        <br>
                                        <input class="form-block-input" type="text" name="comment" id="comment">
                                        <br>
                                        <input class="form-block-checkbox" type="checkbox" name="checkbox" id="checkbox">
                                        <span class="checkbox-custom"></span>
                                        <label class="text-p" style="font-size:18px; line-height: 20px;" for="checkbox">Согласен на обработку персональных данных</label>
                                        <script> $(".checkbox-custom").click(function(){
                                            if($(".form-block-checkbox").prop("checked")){
                                                $(".form-block-checkbox").prop("checked", false);
                                            }
                                            else{
                                                $(".form-block-checkbox").prop("checked", true);
                                            }});</script>
                                        <br>
                                        <input type="submit" class="form-block-submit" name="submit" value="Начать тренировку">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map" id="map">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">

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
</body>
</html>