<?php require_once ("admin/query_mysql.php"); require_once ("admin/feedback/include_feedback.php");?>
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
    <title>Передержка</title>
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
        <div class="content-over-exposure">
            <div class="container-fluid">
                <div class="over-exposure-block">
                    <div class="over-exposure">
                        <div class="row justify-content-center">
                            <!-- <div class="col-xl-3 col-lg-4 col-md-8">
                                <div style="background-image: url('img/<?echo $data_img[$i];?>'); background-size: cover;" class="team-photo"></div>
                            </div> -->
                            <div class="col-xl-12 col-lg-12 col-md-8">
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                    <p class="text-p" align="center" style="margin: 40px;">ПЕРЕДЕРЖКА СОБАК
в вольерах и помещении.
<br>Основные правила передачи: собака старше 3-х месяцев должна быть:
<br>-вакцинирована не ранее, чем за 21 день и не позднее, чем за 1 год до принятия на передержку;
<br>-дегельминтизирована не менее, чем за 10 дней;
<br>-обработана от эктопаразитов не ранее 3-х дней.
<br>Доставка до места передержки
(при необходимости).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <h2 class="head-h2" align="center" style="margin-bottom: 50px;">Отзывы клиентов</h2>
                                <div class="out-feedback-block">
                                    <div class="inner-feedback-block">
                                        <!-- <div class="element-feedback">
                                            <p class="head-h2">Head</p>
                                            <p class="text-p">content</p>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-feedback">
                                    <button class="form-block-submit" id="button-feedback">Оставить отзыв</button>
                                    <!-- <form action="over-exposure.php" method="POST" style="margin-left:0 auto;">
                                        <label class="text-p" for="name">Имя</label>
                                        <br>
                                        <input class="form-block-input" type="text" name="name" id="name">
                                        <br>
                                        <label class="text-p" for="feed_mail">Почта</label>
                                        <br>
                                        <input class="form-block-input" type="email" name="feed_mail" id="feed_mail">
                                        <br>
                                        <label class="text-p" for="mess">Сообщение</label>
                                        <br>
                                        <textarea class="form-block-input" rows="6" type="text" name="mess" id="mess"></textarea>
                                        <br>
                                        <br>
                                        <input type="submit" class="form-block-submit" name="submit" value="Отправить">
                                    </form> -->
                                </div>
                            </div>
                        <!-- <div class="row justify-content-center"> -->
                            <!-- <div class="col-xl-6 col-lg-6 col-md-8"> -->
                            <!-- </div> -->
                        <!-- </div> -->
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <h2 class="head-h2" align="center" style="margin-bottom: 50px;">Запись на передержку</h2>
                                        <form align="center" action="over-exposure.php" method="POST" style="margin-left:0 auto;">
                                            <label class="text-p" for="species">Порода</label>
                                            <br>
                                            <input class="form-block-input" type="text" name="species" id="species">
                                            <br>
                                            <label class="text-p" for="ages">Возраст</label>
                                            <br>
                                            <input class="form-block-input" type="number" name="ages" id="ages">
                                            <br>
                                            <label class="text-p" for="monicker">Кличка</label>
                                            <br>
                                            <input class="form-block-input" type="text" name="monicker" id="monicker">
                                            <br>
                                            <label class="text-p" for="time_exposure">Период передержки</label>
                                            <br>
                                            <input class="form-block-input" type="text" name="time_exposure" id="time_exposure">
                                            <br>
                                            <input class="form-block-checkbox" type="checkbox" name="is_training" id="is_training">
                                            <span class="checkbox-custom"></span>
                                            <label class="text-p" style="margin: 25px 0px 25px 0px;" for="is_training">Нужна дрессировка?</label>
                                            <script> $(".checkbox-custom").click(function(){
                                                if($(".form-block-checkbox").prop("checked")){
                                                    $(".form-block-checkbox").prop("checked", false);
                                                }
                                                else{
                                                    $(".form-block-checkbox").prop("checked", true);
                                                }});</script>
                                            <br>
                                            <label class="text-p" for="type_training">Вид дрессировки</label>
                                            <br>
                                            <input class="form-block-input" type="text" name="type_training" id="type_training">
                                            <br>
                                            <label class="text-p" for="info_dog">Важная информация о собаке</label>
                                            <br>
                                            <textarea class="form-block-input" rows="6" name="info_dog" id="info_dog"></textarea>   
                                            <br>
                                            <input type="submit" class="form-block-submit" name="submit" value="Записать на передержку">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        function genFeedback(count=0, name='Name', date="-", text='text'){
            for(i=0; i<count; i++){
                block_feedback=$(".inner-feedback-block");
                content='<div class="element-feedback"> <p class="head-h2" style="font-size:24px;">'+name[i]+' <span class="text-p" style="font-size:14px; "><i>Запись: </i>'+date[i]+'</span> </p><p class="text-p" style="font-size:18px;">'+text[i]+'</p> </div>';
                // $(".content-news").append('<div class="news-block"></div>');
                block_feedback.append(content);
                // block_news.append(content);
            }
        console.log(count, header, img, text);
    }
    </script>
    <?php echo  "<script> genFeedback($count_rows, $data_name, $data_date, $data_text);</script>"?>
</body>
</html>