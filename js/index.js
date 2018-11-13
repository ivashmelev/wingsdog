$(document).ready(function(){
    
    $(".load-picker").delay(800).load('appoitment.php');

    $('.button-close').click(function(){
        $(".data-picker-menu").slideUp();
        // $(".data-picker-menu").delay(800).load('appoitment.php');
    });

    $('#call').click(function(){
        $(".data-picker-menu").slideDown();
    });

    $("#call").on('click', function(e){
        s = e.currentTarget;
    });


    arr_button=Array.from($('.action-block-text'));
    arr_block=Array.from($('.action-block'));
    arr_block_1=Array.from($('.action-block-1'));
    arr_block_2=Array.from($('.action-block-2'));
    arr_block_3=Array.from($('.action-block-3'));
    arr_block_4=Array.from($('.action-block-4'));
    arr_block_5=Array.from($('.action-block-5'));


    elem=$("action-block-text");
    // console.log(arr_button);
    

    $(".action-block").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index]).slideToggle().toggleClass("show");
        $(arr_block[index]).toggleClass("white");
        
    });

    $(".action-block-1").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index+3]).slideToggle().toggleClass("show");
        $(arr_block_1[index]).toggleClass("white");
    });

    $(".action-block-2").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index+6]).slideToggle().toggleClass("show");
        $(arr_block_2[index]).toggleClass("white");
    });

    $(".action-block-3").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index+9]).slideToggle().toggleClass("show");
        $(arr_block_3[index]).toggleClass("white");
    });

    $(".action-block-4").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index+12]).slideToggle().toggleClass("show");
        $(arr_block_4[index]).toggleClass("white");
    });

    $(".action-block-5").click('.action-block-button', function(e){
        index=$(this).parent().index();
        // console.log($('.action-block-text:nth-child('+index+')'));
        $(arr_button[index+15]).slideToggle().toggleClass("show");
        $(arr_block_5[index]).toggleClass("white");
    });

    $('.menu').click(function(){
        if($('.menu-links').width()<=1045){
            if($(this).hasClass("menu")){
                $(this).removeClass("menu");
                $(this).addClass("menu-state-open");
            }
            else{
                $(this).addClass("menu");
                $(this).removeClass("menu-state-open");
            }
        }
        // if(screen.width)

        
    });

});


function Con(){
    // console.log('click');
}