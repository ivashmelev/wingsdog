$(document).ready(function(){

    $('#focus-input').focus(function(){
        console.log("fun");
        // $(".but-collect").css('left','30px');
        $(".but-collect").css('opacity','1');
        $('#focus-input').focus();
        
    });
});
    