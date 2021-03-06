<?
error_reporting( E_ERROR );
session_start();
if (!isset($_SESSION['userid'])){
    header('Location: /admin/auth_form.php');
}
$domain=$_SERVER['HTTP_HOST'];
if(isset($_GET['token'])){

}
else{
    $_SESSION['token']=bin2hex(openssl_random_pseudo_bytes(10));
}

$token=$_SESSION['token'];
require_once ("connection.php");
require_once ("mail.php");
$link=mysqli_connect($host, $user, $password, $database) or die("Error".mysqli_error($link));
mysqli_set_charset($link, 'utf8');
$query_select_mail="SELECT * FROM mail";
$result_select_mail=mysqli_query($link, $query_select_mail) or die("Error".mysqli_error($link));
$mail=mysqli_fetch_row($result_select_mail);
$new_email=$_POST['new-email'];


if(isset($new_email)){
    $content="Если вы не отправляли запрос, то кто-то получил доступ к панели администратора, смените пароль!\n
    Для смены почты пройдите по ссылкe -$domain/admin/admin_panel.php?token=$token";
    smtpmail('Нотариус', "$mail[0]", 'Запрос на смену почты сайта', $content);

    // mail("$mail[0], ishmelev@1ditis.ru", "Запрос на смену почты сайта".$domain, 

        $query_update="UPDATE mail SET new_mail='$new_email'";
        $result_update=mysqli_query($link, $query_update) or die("Error".mysqli_error($link));
}
if($_GET['token']==$_SESSION['token']){
    echo "<script>alert('Почта обновлена!');</script>";
    $query_update="UPDATE mail SET mail='$mail[1]'";
    $result_update=mysqli_query($link, $query_update) or die("Error".mysqli_error($link));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin_panel.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="../js/ajax.js" ></script>
    <script src="../js/rates.js"></script>
    <title>Панель администратора</title>
</head>
<body>
    <div class="wrapper">
        
        <div class="nav-menu">
            <nav>
                <a class="nav-menu__link" href="/admin/_page_index.php">Главная</a>
                <a class="nav-menu__link" href="/admin/_page_notary_actions.php">Нотариальные действия</a>
                <a class="nav-menu__link" href="/admin/_page_rates.php">Тарифы</a>
                <a class="nav-menu__link" href="/admin/_page_contacts.php">Контакты</a>
                <a class="nav-menu__link change-email" href="#">Почта</a>
                <a class="nav-menu__link" href="/admin/exit.php">Выход</a>
            </nav>
        </div>
        <form class="form-change-email">
            <input type="email" value="mail@mail.ru" id='new-email'name="new-email" placeholder="Введите новый email">
            <input type="hidden" name="change-email-token">
            <input type="submit" value=">">
        </form>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3">
                    <nav>
                        <ul>
                            <li id="li-1" onclick="showLinks('links-1')">Договора, соглашения, сделки</li>
                            <li id="li-2" onclick="showLinks('links-2')">Завещание</li>
                            <li id="li-3" onclick="showLinks('links-3')">Доверенность</li>
                            <li id="li-4" onclick="showLinks('links-4')">Депозит нотариуса</li>
                            <li id="li-5" onclick="showLinks('links-5')">Копии документов (выписки из них)</li>
                            <li id="li-6" onclick="showLinks('links-6')">Свидетельствование подлинности подписи</li>
                            <li id="li-7" onclick="showLinks('links-7')">Наследство</li>
                            <li id="li-8" onclick="showLinks('links-8')">Иные нотариальные действия</li>
                        </ul>
                    </nav>
                </div>
                <!-- <script>s=$('.open').text(); if(s==''){console.log('undefined');}console.log(s);</script> -->
                <div class="col-xl-3">
                    <div class="output-links">
                        <div class="links-1">
                            <li>Удостоверение сделок, предметом которых является отчуждение недвижимого имущества (когда нотариальная форма обязательна)</li>
                            <li>Удостоверение сделок, предметом которых является отчуждение недвижимого имущества (когда нотариальная форма не обязательна)</li>
                            <li>Удостоверение договоров ренты и пожизненного содержания с иждивением</li>
                            <li>Удостоверение соглашения о разделе общего имущества, нажитого супругами в браке</li>
                            <li>Удостоверение договоров купли-продажи доли (части доли) в уставном капитале общества с ограниченной ответственностью</li>
                            <li>Удостоверение договоров залога доли (части доли) в уставном капитале общества с ограниченной ответственностью</li>
                            <li>Удостоверение прочих договоров, предмет которых подлежит оценке, если такое удостоверение обязательно</li>
                            <li>Удостоверение прочих договоров, предмет которых полежит оценке</li>
                            <li>Удостоверение договоров дарения, за исключением договоров дарения недвижимого имущества (когда не требуется обязательная нотариальная форма)</li>
                            <li>Удостоверение договора дарения, за исключением договоров дарения недвижимого имущества (когда требуется обязательная нотариальная форма)</li>
                            <li>Удостоверение договоров уступки требования:</li>
                            <li>Удостоверение договоров финансовой аренды (лизинга) воздушных, речных и морских судов</li>
                            <li>Удостоверение соглашения об уплате алиментов</li>
                            <li>Удостоверение брачного договора</li>
                            <li>Удостоверение соглашения о разделе общего имущества, нажитого супругами в период брака</li>
                            <li>Удостоверение договора по оформлению в долевую собственность родителей и детей жилого помещения, приобретенного с использованием средств материнского капитала</li>
                            <li>Удостоверение договора поручительства</li>
                            <li>Удостоверение соглашения о внесении изменений в договор</li>
                            <li>Удостоверение соглашения о расторжении договора</li>
                            <li>Удостоверение сделок, предмет которых не подлежит оценке</li>
                        </div>

                        <div class="links-2">
                            <li>Удостоверение завещания</li>
                            <li>Принятие закрытого завещания</li>
                            <li>Вскрытие конверта с закрытым завещанием и оглашение закрытого завещания</li>
                            <li>Распоряжение об отмене завещания</li>
                        </div>

                        <div class="links-3">
                            <li>Удостоверение Доверенностей на право пользования и (или) распоряжение автотранспортными средствами</li>
                            <li>Удостоверение Доверенностей на право пользования и (или) распоряжения имуществом</li>
                            <li>Удостоверение доверенностей, выдаваемых в порядке передоверия (с любыми полномочиями)</li>
                            <li>Удостоверение прочих доверенностей, требующих нотариальную форму</li>
                            <li>Распоряжение об отмене доверенности</li>
                        </div>

                        <div class="links-4">
                            <li>Принятие в депозит денежных сумм или ценных бумаг (если такое принятие на депозит обязательно в соответствии с законодательством Российской Федерации)</li>
                            <li>Принятие в депозит денежных сумм или ценных бумаг (если такое принятие на депозит не обязательно в соответствии с законодательством Российской Федерации)</li>
                            <li>Принятие в депозит нотариуса, удостоверившего сделку, денежных сумм в целях исполнения обязательств по такой сделке</li>
                        </div>

                        <div class="links-5">
                            <li>Свидетельствование верности копий документов</li>
                            <li>Удостоверение копий учредительных документов организаций</li>
                        </div>

                        <div class="links-6">
                            <li>Свидетельствование подлинности подписи</li>
                            <li>Свидетельствование подлинности подписи на решение единственного участника хозяйственного общества</li>
                            <li>Свидетельствование подлинности подписи на заявлениях об отказе от преимущественного права покупки доли в уставном капитале ООО</li>
                        </div>

                         <div class="links-7">
                            <li>Выдача свидетельства о праве на наследство по закону и по завещанию</li>
                            <li>Принятие мер по охране наследственного имущества</li>
                            <li>Учреждение доверительного управления наследственным имуществом</li>
                            <li>Выдача свидетельства о праве собственности на долю в общей собственности супругов в случае смерти одного из супругов</li>
                        </div>

                        <div class="links-8">
                            <li>Выдача дубликатов документов</li>
                            <li>Принятие на хранение документов</li>
                            <li>Принятие на хранение документов. Cвидетельствование верности перевода документа с одного языка на другой (сделанного нотариусом)</li>
                            <li>Совершение исполнительной надписи</li>
                            <li>Совершение исполнительной надписи об обращении взыскания на заложенное имущество</li>
                            <li>Совершение протеста векселя в неплатеже, неакцепте и не датировании акцепта, удостоверение неоплаты чека</li>
                            <li>Удостоверение решения органа управления юридического лица</li>
                            <li>Регистрация уведомления о залоге движимого имущества (уведомление представлено в бумажном виде)</li>
                            <li>Выдача выписки из реестра уведомлений о залоге движимого имущества</li>
                            <li>Удостоверение равнозначности электронного документа представленному документу на бумажном носителе</li>
                            <li>Удостоверение равнозначности документа на бумажном носителе представленному электронному документу</li>
                            <li>Удостоверение тождественности собственноручной подписи инвалида по зрению с факсимильным воспроизведением его собственноручной подписи</li>
                            <li>Обеспечения доказательств, в том числе осмотр интернет-сайта</li>
                            <li>Представление документов на государственную регистрацию прав на недвижимое имущество и сделок с ним (в т.ч. в электронной форме)</li>
                            <li>Представление документов на государственную регистрацию юридических лиц и индивидуальных предпринимателей</li>
                            <li>Передача сведений, которые содержатся в заявлениях физических лиц и юридических лиц, в Единый федеральный реестр сведений о банкротстве, а также в Единый федеральный реестр сведений о фактах деятельности юридических лиц</li>
                            <li>Размер платы за услуги правового и технического характера (УПТХ)</li>
                            <li>Удостоверение оферты о продаже доли в уставном капитале Общества (ст. 21 Закона об ООО)</li>
                            <li>Удостоверение оферты о продаже доли в уставном капитале Общества (ст. 21 Закона об ООО)</li>
                            <li>Удостоверение согласия супруга на заключение сделки по распоряжению имуществом</li>
                            <li>Удостоверение согласия законных представителей, опекунов, попечителей на выезд несовершеннолетних детей за границу</li>
                            <li>Совершение прочих нотариальных действий</li>
                            <li>Удостоверение заявления о выходе участника из Общества (ст. 26 Закона об ООО)</li>
                            <li>Внесение сведений в реестр списков участников ООО ЕИС нотариата (ст. 103.11 Основ законодательства Российской Федерации о нотариате))</li>
                            <li>Выдача выписки из реестра списков участников ООО ЕИС нотариата (ст. 102.11 Основ законодательства Российской Федерации о нотариате)</li>
                            <li>Услуги по совершению нотариальных действий вне помещения нотариальной конторы</li>
                        <div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="output-fields"></div>
        </div>
    </div>    
    
</body>
</html>