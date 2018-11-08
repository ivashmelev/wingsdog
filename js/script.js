$(document).ready(function(){
    // $(window).scroll(function(){
    //     $(".text-p, .text-photo").css({opacity:1});
    // });
    console.log(1);
    $(".text-p").animate({opacity:1}, 1000);


    loc=document.title;
    menu_links=Array.from($(".menu-links-item"));
    switch(loc){
        case "Крылатый Пёс": $(menu_links[0]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Мероприятия": $(menu_links[1]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Инструктора": $(menu_links[2]).css({color:"#002a56", backgroundColor: "white"});
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

    
    
    // console.log(text);
    // console.log(text.indexOf("|findme|"));

    // if(text.indexOf("|findme|")==0){
    //     new_text=text.replace("|findme|", "<111>");
    //     console.log(true);
    //     console.log(new_text);
    //     $(".head-text").text(new_text);
    // }
    // else{
    //     console.log(false);
    // }
    // if($("right").children("b").length >0 ){
    //     console.log("it is b");
    // }
    
    
    $("right").replaceWith(function(){
        if($(this).children("b").length>0){
            return `<p class="text-p" style="opacity:1; font-weight: bold;" align="right">`+$(this).text()+`</p>`;
        }
        else if($(this).children("i").length>0){
            return `<p class="text-p" style="opacity:1; font-style: italic;" align="right">`+$(this).text()+`</p>`;
        }
        else if($(this).children("u").length>0){
            return `<p class="text-p" style="opacity:1; text-decoration: underline;" align="right">`+$(this).text()+`</p>`;
        }
        else{
            return `<p class="text-p" style="opacity:1;" align="right">`+$(this).text()+`</p>`;
        }
    });
    $("center").replaceWith(function(){
        if($(this).children("b").length>0){
            return `<p class="text-p" style="opacity:1; font-weight: bold;" align="center">`+$(this).text()+`</p>`;
        }
        else if($(this).children("i").length>0){
            return `<p class="text-p" style="opacity:1; font-style: italic;" align="center">`+$(this).text()+`</p>`;
        }
        else if($(this).children("u").length>0){
            return `<p class="text-p" style="opacity:1; text-decoration: underline;" align="center">`+$(this).text()+`</p>`;
        }
        else{
            return `<p class="text-p" style="opacity:1;" align="center">`+$(this).text()+`</p>`;
        }
    });
    $("left").replaceWith(function(){
        if($(this).children("b").length>0){
            return `<p class="text-p" style="opacity:1; font-weight: bold;" align="left">`+$(this).text()+`</p>`;
        }
        else if($(this).children("i").length>0){
            return `<p class="text-p" style="opacity:1; font-style: italic;" align="left">`+$(this).text()+`</p>`;
        }
        else if($(this).children("u").length>0){
            return `<p class="text-p" style="opacity:1; text-decoration: underline;" align="left">`+$(this).text()+`</p>`;
        }
        else{
            return `<p class="text-p" style="opacity:1;" align="left">`+$(this).text()+`</p>`;
        }
    });
    $("justify").replaceWith(function(){
        if($(this).children("b").length>0){
            return `<p class="text-p" style="opacity:1; font-weight: bold;" align="justify">`+$(this).text()+`</p>`;
        }
        else if($(this).children("i").length>0){
            return `<p class="text-p" style="opacity:1; font-style: italic;" align="justify">`+$(this).text()+`</p>`;
        }
        else if($(this).children("u").length>0){
            return `<p class="text-p" style="opacity:1; text-decoration: underline;" align="justify">`+$(this).text()+`</p>`;
        }
        else{
            return `<p class="text-p" style="opacity:1;" align="justify">`+$(this).text()+`</p>`;
        }
    });

    $(".storage_name").text(localStorage.getItem("name"));
    $(".storage_phone").text(localStorage.getItem("phone"));
    $(".storage_mail").text(localStorage.getItem("mail"));
    $(".storage_addres").text(localStorage.getItem("addres"));

    // $("#adm_company").val(localStorage.getItem("name"));
    // $("#adm_phone").val(localStorage.getItem("phone"));
    // $("#adm_email").val(localStorage.getItem("mail"));
    // $("#adm_addres").val(localStorage.getItem("addres"));
    function hideOther(){
        if(location.pathname!="/admin/panel.php"){
            localStorage.remove();
            arrMenu = Array.from($(".menu-links-item"));
            if(localStorage["Мероприятия"]=="false"){$(arrMenu[1]).parent().css({display:"none"});}
            if(localStorage["Инструктора"]=="false"){$(arrMenu[2]).parent().css({display:"none"});}
            if(localStorage["Достижение"]=="false"){$(arrMenu[3]).parent().css({display:"none"});}
            if(localStorage["Передержка"]=="false"){$(arrMenu[4]).parent().css({display:"none"});}
            if(localStorage["Фотоальбом"]=="false"){$(arrMenu[5]).parent().css({display:"none"});}
            if(localStorage["Контакты"]=="false"){$(arrMenu[6]).parent().css({display:"none"});}
        }
    }
    hideOther();

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



