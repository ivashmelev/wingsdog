$(document).ready(function(){

    $(".menu-icon").click(function(){
        console.log($(this));
        $(".menu-icon, .block-menu").toggleClass("open");
        $(".menu-item").toggleClass("show");
        $(".menu-links-item").toggleClass("show");
    });
});