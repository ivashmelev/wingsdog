<?
//Панель администратора
session_start();
if(!$_SESSION['auth']){ //Если не прошла авторизация, то переносит на форму авторизации
    header("Location: ./auth.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="icon" href=​img/favicon.ico type="image/x-icon" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Панель администратора</title>
</head>
<body>
    <div class="menu">
        <a href="/index.php">Главная</a>
        <a href="/news.php">Мероприятия</a>
        <a href="/photo.php">Фотоальбом</a>
        <a href="/team.php">Команда</a>
        <a href="/contacts.php">Контакты</a>
        <button type="button" class="btn btn-danger">Выход</button>
    </div>
    <div class="functional">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="news">
                            <h5><a href="news/add_news.php">Мероприятия</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>