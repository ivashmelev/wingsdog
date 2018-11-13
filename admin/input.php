<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/input.js"></script>
    <script src="../js/admin_pages.js"></script>
    <link rel="stylesheet" href="../css/input.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="forma" id="box">
        <div class="but-collect">
            <div class="but" id="TR">
                TR
            </div>
            <div class="but" id="SS">
                SS
            </div>
            <div class="but" id="OS">
                OS
            </div>
            <div class="but" id="PT">
                PT
            </div>
            <div class="but" id="GG">
                GG
            </div>
            <div class="but" id="I">
                I
            </div>
        </div>
        <form class="page-form" action="" method="POST">
            <textarea rows="7" cols="40" name="text_new" id="focus-input"></textarea>
            <!-- <input type="text" id="focus-input" name="text_new"> -->
            <input type="submit" id="focus-button" value="Изменить">
            <input type="hidden" id="focus-hidden" name="text_page">
            <input type="hidden" id="focus-font" name="font">
        </form>
    </div>
</body>
</html>