$(document).ready(function(){
//     for(i=0; i<4; i++){
//         $(".photo-galary").append('<div class="block-photo"></div>');
//     }
//     $(".block-photo").html('<div class="row"><div class="col-xl-6"><div class="photo"><img src="/img/news1.jpg" alt=""></div></div><div class="col-xl-6"><div class="photo"><img src="/img/news1.jpg" alt=""></div></div></div>');});

    $(".photo").click(function(){
        $(".carousel").toggleClass("carousel-open");
        // $(".wrapper-carousel").toggleClass("carousel-open");
        $(".photo").css({display:"none"});
    });
    $(".wrapper-carousel").click(function(){
        $(".photo").css({display:"block"});
        $(".carousel").removeClass("carousel-open");
        console.log(this);
    });
});