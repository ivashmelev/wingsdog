$.mask.definitions['n']='[0-9]';
$("#phone-b").mask("8 (nnn) nnn-nn-nn");
$("#phone-s").mask("8 (nnn) nnn-nn-nn");
$("#phone-p").mask("8 (nnn) nnn-nn-nn");

$(document).ready(function(){
 
    $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
    $('.scrollup').fadeIn();
    } else {
    $('.scrollup').fadeOut();
    }
    });
     
    $('.scrollup').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    // return false;
    });
     
    });

$( document ).ready(function() {

    $('#show-hidden').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        // var W = $('#bh-tips').innerHeight();
        var W = $('#bh-tips').innerHeight();
        var top = Y - (W/2) + 'px';
        var left = X  + 20 + 'px';
        $('#bh-tips').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('#show-hidden').mouseout (function(){
        // var id = $(this).data('tips');
        $('#bh-tips').css({
            display:"none"
        });
    });

    $('.focus-0').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 10 + 'px';
        // var id = $(this).data('tips');
        $('#tips-0').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-0').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-0').css({
            display:"none"
        });
    });

    $('.focus-1').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 10 + 'px';
        // var id = $(this).data('tips');
        $('#tips-1').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-1').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-1').css({
            display:"none"
        });
    });

    $('.focus-2').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 10 + 'px';
        // var id = $(this).data('tips');
        $('#tips-2').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-2').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-2').css({
            display:"none"
        });
    });

    $('.focus-3').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 10 + 'px';
        // var id = $(this).data('tips');
        $('#tips-3').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-3').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-3').css({
            display:"none"
        });
    });

    $('.focus-4').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 10 + 'px';
        // var id = $(this).data('tips');
        $('#tips-4').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-4').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-4').css({
            display:"none"
        });
    });

    $('.focus-5').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var top = Y  + 10 + 'px';
        var left = X  + 20 + 'px';
        // var id = $(this).data('tips');
        $('#tips-5').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-5').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-5').css({
            display:"none"
        });
    });

    $('.focus-6').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var W = $('#tips-6').innerHeight();
        var top = Y - (W/2) + 'px';
        var left = X  + 20 + 'px';
        // var id = $(this).data('tips');
        $('#tips-6').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-6').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-6').css({
            display:"none"
        });
    });

    $('.focus-7').mousemove(function(e){
        var X = e.pageX;
        var Y = e.pageY;
        var W = $('#tips-7').innerHeight();
        var top = Y - W + 'px';
        var left = X  + 20 + 'px';
        // var id = $(this).data('tips');
        $('#tips-7').css({
            display:"block",
            top: top,
            left: left,
        });
    });

    $('.focus-7').mouseout (function(){
        // var id = $(this).data('tips');
        $('#tips-7').css({
            display:"none"
        });
    });

    // $(function() {
    //     $('#show-hidden').click(function() {
    //         $(this).parent().find(".block-hidden").fadeToggle(200);
    //         $(this).toggleClass(".block-hidden");
    //     });
    // });	

    // $(function() {
    //     $('.content-mobile').click(function() {
    //         $(this).parent().find(".block-hidden").fadeToggle(200);
    //         // $(this).toggleClass("show-hidden-active");
    //     });
    // });
    // $(function() {
    //     $('.close-bh').click(function() {
    //         $(this).parent().parent().find(".block-hidden").fadeToggle(200);
    //         // $(this).toggleClass("show-hidden-active");
    //     });
    // });	

});

