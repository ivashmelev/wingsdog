<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfYM34wyhKd80QdTH8Ren4q-1-4N6SKuI"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- &callback=initMap -->
    <script src="js/script.js"></script>
    <script src="js/map.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/photo.js"></script>
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"> </script>
    <link rel="stylesheet" href="css/style.css"  type="text/css">
    <link rel="stylesheet" href="css/adaptiv.css"  type="text/css">
    <link rel="stylesheet" href="css/menu.css"  type="text/css">
    <title>Фотоальбом</title>
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
                                <div class="menu-item "><a href="photo.php" class="menu-links-item ">Фотоальбом</a></div>
                                <div class="menu-item "><a href="team.php" class="menu-links-item ">Команда</a></div>
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
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-close">
                    <label class="carousel-label"></label>
                    <label class="carousel-label"></label>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/news1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/news1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/news1.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <div class="content-photo">
            <div class="container-fluid">
                <div class="photo-galary">
                    <div class="block-photo">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-photo">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-photo">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="photo">
                                    <img src="/img/news1.jpg" alt="">
                                </div>
                            </div>
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
                                            © НКО "Крылатый Пёс"
                                        </p>
                                    </div>
                                </div>
                                <div class="social">
                                    <img src="/img/vk.png" alt="vk.com">
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