$(document).ready(function(){
    block_news=$(".add-block");
    for(i=0; i<66; i++){
        
    }
});




    // $("#button-feedback").click(function(){
    //     console.log("go");
    //     $(".out-feedback-block").html('<form action="admin/feedback/add_feedback.php" method="POST" style="margin-left:0 auto;"> <label class="text-p" for="name">Имя</label> <br> <input class="form-block-input" type="text" name="name" id="name"> <br> <label class="text-p" for="feed_mail">Почта</label> <br> <input class="form-block-input" type="email" name="feed_mail" id="feed_mail"> <br> <label class="text-p" for="mess">Сообщение</label> <br> <textarea class="form-block-input" rows="6" type="text" name="mess" id="mess"></textarea> <br> <br> <input type="submit" class="form-block-submit" name="submit" value="Отправить"> </form>');
    //     $(this).hide();
    // });
    $(".out-feedback-block").html('<form action="admin/feedback/add_feedback.php" method="POST" style="margin-left:0 auto;"> <label class="text-p" for="name">Имя</label> <br> <input class="form-block-input" type="text" name="name" id="name"> <br> <label class="text-p" for="feed_mail">Почта</label> <br> <input class="form-block-input" type="email" name="feed_mail" id="feed_mail"> <br> <label class="text-p" for="mess">Сообщение</label> <br> <textarea class="form-block-input" rows="6" type="text" name="mess" id="mess"></textarea> <br> <br> <input type="submit" class="form-block-submit" name="submit" value="Отправить"> </form>');


    block_news=$(".content-news");
                content='<div class="news-block"><div class="row"><div class="col-xl-6"><h2 class="head-h2">'+header[i]+'</h2></div></div><div class="row"><div class="col-xl-6"><p class="text-p text-p-news">'+date[i]+'</p></div></div><div class="row"><div class="col-xl-6"><img class="news-image" src="img/'+img[i]+'"></div><div class="col-xl-6"><div class="news-block-text"><p class="text-p">'+text[i]+'</p></div></div</div></div>';
                // $(".content-news").append('<div class="news-block"></div>');
                block_news.append(content);






'<div class="col-lg-3 col-md-6 col-sm-6"><div class="action-block"><h5 class="action-block-name">'+header[i]+'</h5><div class="action-block-text"><i>'+undertext[i]+'</i><div class="br"></div><div class="col-md-12"><b>Тариф</b><hr><p>'+column_rate[i]+'</p></div><div class="col-md-12"><b>Размер платы за услуги правового и технического характера (УПТХ)</b><hr><p>'+column_sizepay[i]+'</p></div><hr></div><p class="action-block-button">Подробнее</p></div></div>'