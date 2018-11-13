<?
error_reporting( E_ERROR );

require_once ("connection.php");
session_start();
$name=$_POST['name'];

$link = mysqli_connect($host, $user, $password, $database)
            or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query_select="SELECT * FROM rates WHERE name='$name'";
$result = mysqli_query($link, $query_select) or die("Ошибка " . mysqli_error($link));
$row = mysqli_fetch_row($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/admin_panel.css" rel="stylesheet">
</head>
<body>
    <form id="bd_form" action="answer.php" method="POST">
        <br>
        <h4 type="text" id="rate-i-txt-1" name="rate"><b><?echo $name;  ?></b></h4>
        <br>
        <h4>Заметка</h4>
        <br>
        <input type="text" value="<?echo $row[3]?>" id="rate-i-txt-2" name="undertext" onkeydown="this.style.width = ((this.value.length + 1) * 8) + 'px';">
        <br>
        <h4>Тариф</h4>
        <br>
        <input type="text" value="<?echo $row[4];?>" id="rate-txt-1" class="text-area" name="column_rate" onkeydown="this.style.width = ((this.value.length + 1) * 8) + 'px';">
        <br>
        <h4>Размер платы за услуги правового и технического характера (УПТХ)</h3>
        <br>
        <input type="text" value="<? echo $row[5];?>" id="rate-txt-2" class="text-area" name="column_sizepay" onkeydown="this.style.width = ((this.value.length + 1) * 8) + 'px';">
        <br>
        <input type="submit" value="Ok!">
    </form>
    <script>
        $("#bd_form").submit(function(event){
            event.preventDefault();
                $.post('answer.php', {'rate':$('#rate-i-txt-1').val(), 'undertext':$('#rate-i-txt-2').val(),
                'column_rate':$('#rate-txt-1').val(), 'column_sizepay':$("#rate-txt-2").val()
                });
            });      
    </script>
</body>
</html>

