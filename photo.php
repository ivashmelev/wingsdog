<?php
require_once ("admin/query_mysql.php");
require_once ("connection.php");

$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));

$query_albom = mysqli_query($link, "SELECT * FROM albom") or die("Error".mysqli_error($link));
$query_photo = mysqli_query($link, "SELECT * FROM photo") or die("Error".mysqli_error($link));

$data_albom_id=array();
$data_albom_name=array();
$data_albom_text=array();
$data_photo_id=array();
$data_photo_name=array();
$data_photo_path=array();

$count_albom_rows=mysqli_num_rows($query_albom);
$count_albom_fields=mysqli_num_fields($query_albom);
$count_photo_rows=mysqli_num_rows($query_photo);
$count_photo_fields=mysqli_num_fields($query_photo);

while ($row_albom = mysqli_fetch_array($query_albom)){
  array_push($data_albom_id, $row_albom["id"]);
  array_push($data_albom_name, $row_albom["name"]);
  array_push($data_albom_text, $row_albom['text']);
}

while ($row_photo = mysqli_fetch_array($query_photo)){
    array_push($data_photo_id, $row_photo["id"]);
    array_push($data_photo_name, $row_photo["name"]);
    array_push($data_photo_path, $row_photo['path']);
}

$data_albom_id=json_encode($data_albom_id);
$data_albom_name=json_encode($data_albom_name);
$data_albom_text=json_encode($data_albom_text);
$data_photo_id=json_encode($data_photo_id);
$data_photo_name=json_encode($data_photo_name);
$data_photo_path=json_encode($data_photo_path);

// $count_albom = ceil($count_albom_rows/2);
$count_albom = $count_albom_rows;


?>
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
                                <div class="col-lg-6 col-md-8 col-sm-9">
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
        <!-- <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
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
        </div> -->
        <div class="carousel-photo">
            <div class="carousel_content">
                <!-- <div class="carousel_content-photo">
                    <img src="img/img1.jpg" alt="">
                </div>-->
            </div>
            <div class="carousel_button-close" id="button-close"></div>
            <div class="carousel_button button-left" id="button-left"></div>
            <div class="carousel_button button-right" id="button-right"></div>
        </div>

        <div class="content-photo">
            <div class="container-fluid">
                <div class="photo-galary">
                    <!-- <div class="block-photo"> -->
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="photo" id="album-1">
                                    <img src="new/img/img1.jpg" alt="">
                                    <div class="context">Альбом</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="photo" id="album-2">
                                    <img src="new/img/img2.jpg" alt="">
                                    <div class="context">Альбом</div>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div> -->
                    <!-- <div class="block-photo"> -->
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="photo" id="album-3">
                                    <img src="new/img/img3.jpg" alt="">
                                    <div class="context">Альбом</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="photo" id="album-4">
                                    <img src="new/img/img4.jpg" alt="">
                                    <div class="context">Альбом</div>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div> -->
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
        function genPhoto(countAlbom, dataAlbomId, dataAlbomName, dataAlbomText, preview){

            let photoGalary = $(".photo-galary");
            console.log(countAlbom);
            for(i=0; i<countAlbom; i++){
                content=`<div class="col-lg-6">
                                    <div class="photo" id="`+dataAlbomId[i]+`">
                                        <img src="img/album-`+dataAlbomId[i]+`/`+preview[dataAlbomId[i][0]]+`" alt="">
                                        <div class="context">
                                            <b>`+dataAlbomName[i]+`</b>
                                            <p style="font-size:11px;"><i>`+dataAlbomText[i]+`</i></p>
                                        </div>
                                    </div>
                                </div>`;
                $(photoGalary).append("<div class='row' id=row-"+i+"></div>");
                if(i%2==0){
                    $("#row-"+i).append(content);
                }else{
                    j=i-1;
                    $("#row-"+j).append(content);
                }
            }
        }
    </script>
</body>
</html>
<?php
    echo "<script>
    let dataAlbomName = $data_albom_name;
    let dataPhotoPath = $data_photo_path;
    let dataAlbomId = $data_albom_id;
    </script>";
    
    $data_albom_id = json_decode($data_albom_id);
    $mass = array();
    for($i=0; $i<count($data_albom_name); $i++){
        $mass[$data_albom_id[$i]]=scandir("img/album-$data_albom_id[$i]");
        $mass[$data_albom_id[$i]]=array_slice($mass[$data_albom_id[$i]], 2);
    }

    $mass = json_encode($mass);
    $data_albom_id=json_encode($data_albom_id);

    echo "<script> 
    let dataPhotoName = $mass;
    genPhoto($count_albom, $data_albom_id, $data_albom_name, $data_albom_text, $mass); 
    </script>";
    ?>