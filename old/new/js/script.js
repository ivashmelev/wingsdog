$(document).ready(function(){
    let slide = 0;
    let idImg = 0;
    let countImg = 0;
    let countPhoto = 0;

    function startCarousel(idImg, countImg){
        $(".carousel-photo").toggleClass("carousel-true");
        block_photo=$(".carousel_content");
        for(idImg; idImg<=countImg; idImg++){
            content='<div class="carousel_content-photo"><img src="/new/img/img'+idImg+'.jpg" alt=""></div>';
            block_photo.append(content);
            countPhoto = countPhoto + 1;
        }
    }

    $("#album-1").click(function(){
        startCarousel(1, 8);        
    });


    $("#album-2").click(function(){
        startCarousel(3, 4); 
    });

    $("#album-3").click(function(){
        startCarousel(6, 7); 
    });

    $("#album-4").click(function(){
        startCarousel(1, 4); 
    });


    $("#button-close").click(function(){
        $(".carousel_content").css("transform", "translate3d(0, 0, 0)");
        $(".carousel_content-photo").remove();
        $(".carousel-photo").toggleClass("carousel-true");
        slide = 0;
        countPhoto = 0;
    });


    $("#button-left").click(function(){
        slide = slide + 100;
        if(slide > 0){
            slide = -((countPhoto-1)*100);
        }
        $(".carousel_content").css("transform", "translate3d("+slide+"vw, 0, 0)");
    });
    $("#button-right").click(function(){
        slide = slide - 100;
        if(slide < -((countPhoto-1)*100)){
            slide = 0;
        }
        $(".carousel_content").css("transform", "translate3d("+slide+"vw, 0, 0)");
    });


});


block_news=$(".content-news");
content='<div class="news-block"><div class="row"><div class="col-xl-6"><h2 class="head-h2">'+header[i]+'</h2></div></div><div class="row"><div class="col-xl-6"><p class="text-p text-p-news">'+date[i]+'</p></div></div><div class="row"><div class="col-xl-6"><img class="news-image" src="img/'+img[i]+'"></div><div class="col-xl-6"><div class="news-block-text"><p class="text-p">'+text[i]+'</p></div></div</div></div>';
// $(".content-news").append('<div class="news-block"></div>');
block_news.append(content);