<?php 
// require ("connection.php");
require_once ("admin/query_mysql.php");
require_once ("admin/news/include_news.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="lib/bootstrap-4.0.0-dist/css/bootstrap.min.css"><!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/style.css"  type="text/css">
    <link rel="stylesheet" href="css/adaptiv.css"  type="text/css">
    <link rel="stylesheet" href="css/menu.css"  type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/news.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/script.js"></script>
    <title>Мероприятия</title>
</head>
<body>
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
                                    <p class="head-text storage_name" id="" style="white-space: pre-wrap;"></p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3">
                            </div> -->
                            <div class="col">
                                <div class="header__text text_phone">
                                    <p class="head-text storage_phone" id=""></p>
                                    <p class="head-text storage_mail" id=""></p>
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
    <div class="block-news">
        <div class="container-fluid">
            <div class="content-news">
                <h1 class="empty" style="text-align: center; color: #b1abab61; margin: 25%; font-family:'Rewi'; ">На данный момент нет мероприятий</h1>
                <!-- start -->
                
                <!-- end -->
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
    <script>
        function genNews(count=0, header='Header', date='date', img='img', text='text', href=""){
            if(count!=0){$(".empty").hide();}
            for(i=0; i<count; i++){
                block_news=$(".content-news");
                if(href[i]){
                    content='<div class="news-block"><div class="row"><div class="col-xl-6"><h2 class="head-h2">'+header[i]+'</h2></div></div><div class="row"><div class="col-xl-6"><p class="text-p text-p-news">'+date[i]+'</p></div></div><div class="row"><div class="col-xl-6"><img class="news-image" src="img/news/'+img[i]+'"></div><div class="col-xl-6"><div class="news-block-text"><p class="text-p">'+text[i]+'</p><a href='+href[i]+'>Посмотреть фото</a></div></div</div></div><hr>';                
                }
                else{
                    content='<div class="news-block"><div class="row"><div class="col-xl-6"><h2 class="head-h2">'+header[i]+'</h2></div></div><div class="row"><div class="col-xl-6"><p class="text-p text-p-news">'+date[i]+'</p></div></div><div class="row"><div class="col-xl-6"><img class="news-image" src="img/news/'+img[i]+'"></div><div class="col-xl-6"><div class="news-block-text"><p class="text-p">'+text[i]+'</p></div></div</div></div><hr>';
                }
                // $(".content-news").append('<div class="news-block"></div>');
                block_news.append(content);
                // block_news.append(content);
								// if(href==""){
									// }
            }
                     
            replaceForHead();
        console.log(count, header, date, img, text);
    }

    function replaceForHead(){
            let text;
            let arr_text=[]; 
            arr_text=Array.from($(".text-p"));
            console.log($(arr_text[1]).text());

            for(i=0; i<arr_text.length; i++){
                while($(arr_text[i]).text().indexOf("<br>")!=-1){
                    new_text=$(arr_text[i]).text();//.//replace("-n-");
                    $(arr_text[i]).html("<p>"+new_text+"</p>");
                    console.log(false);
                }
            }
				}
			
    </script>

		<?php 
            $href = $data_href;
		echo  "<script> genNews($count_rows, $data_header, $data_date, $data_img, $data_text, $href);</script>"?>
</body>
</html>
