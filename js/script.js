$(function(){
    loc=document.title;
    menu_links=Array.from($(".menu-links-item"));
    switch(loc){
        case "Крылатый Пёс": $(menu_links[0]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Мероприятия": $(menu_links[1]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Команда": $(menu_links[2]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Достижения": $(menu_links[3]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Передержка": $(menu_links[4]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Фотоальбом": $(menu_links[5]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Контакты": $(menu_links[6]).css({color:"#002a56", backgroundColor: "white"});
        break;
    }

    $("#button-feedback").click(function(){
        console.log("go");
        $(".out-feedback-block").html('<form action="admin/feedback/add_feedback.php" method="POST" style="margin-left:0 auto;"> <label class="text-p" for="name">Имя</label> <br> <input class="form-block-input" type="text" name="name" id="name"> <br> <label class="text-p" for="feed_mail">Почта</label> <br> <input class="form-block-input" type="email" name="feed_mail" id="feed_mail"> <br> <label class="text-p" for="mess">Сообщение</label> <br> <textarea class="form-block-input" rows="6" type="text" name="mess" id="mess"></textarea> <br> <br> <input type="submit" class="form-block-submit" name="submit" value="Отправить"> </form>');
        $(this).hide();
    });
});
function showMenu(){
    menu= document.getElementById('menu');
    if (menu.className == "menu"){
        menu.className = 'menu-state-open';
    }
    else {
        menu.className = 'menu';
    }

}


