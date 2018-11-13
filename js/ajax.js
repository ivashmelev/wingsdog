

array=document.querySelectorAll(".open");
for(i=0; i<array.length; i++){
    console.log(array[i].innerText);
}

$(function(){
    $('.links-1 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_1[index].innerText});
    });

    $('.links-2 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_2[index].innerText});
    });

    $('.links-3 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_3[index].innerText});
    });

    $('.links-4 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_4[index].innerText});
    });

    $('.links-5 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_5[index].innerText});
    });

    $('.links-6 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_6[index].innerText});
    });

    $('.links-7 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_7[index].innerText});
    });

    $('.links-8 li').click(function(){
        index=$(this).index();
        $('.output-fields').load('output.php', {'name':array_links_8[index].innerText});
    });
});


function showLinks(id){

    links_1=document.getElementsByClassName("links-1")[0];
    links_2=document.getElementsByClassName("links-2")[0];
    links_3=document.getElementsByClassName("links-3")[0];
    links_4=document.getElementsByClassName("links-4")[0];
    links_5=document.getElementsByClassName("links-5")[0];
    links_6=document.getElementsByClassName("links-6")[0];
    links_7=document.getElementsByClassName("links-7")[0];
    links_8=document.getElementsByClassName("links-8")[0];
    
    switch(id){
        case "links-1":
            links_1.style.display="block";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_1=document.querySelectorAll(".links-1 li");
        break;

        case "links-2":
            links_1.style.display="none";
            links_2.style.display="block";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_2=document.querySelectorAll(".links-2 li");
        break;

        case "links-3":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="block";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_3=document.querySelectorAll(".links-3 li");
        break;

        case "links-4":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="block";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_4=document.querySelectorAll(".links-4 li");
        break;

        case "links-5":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="block";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_5=document.querySelectorAll(".links-5 li");
        break;

        case "links-6":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="block";
            links_7.style.display="none";
            links_8.style.display="none";
            array_links_6=document.querySelectorAll(".links-6 li");
        break;

        case "links-7":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="block";
            links_8.style.display="none";
            array_links_7=document.querySelectorAll(".links-7 li");
        break;

        case "links-8":
            links_1.style.display="none";
            links_2.style.display="none";
            links_3.style.display="none";
            links_4.style.display="none";
            links_5.style.display="none";
            links_6.style.display="none";
            links_7.style.display="none";
            links_8.style.display="block";
            array_links_8=document.querySelectorAll(".links-8 li");
        break;
    }
}
$(document).ready(function(){
    $('.change-email').click(function(){
        $('.form-change-email').toggleClass("open");        
    });

    $('.form-change-email').submit(function(event){
        event.preventDefault();
        $.post('admin_panel.php', {'new-email':$('#new-email').val()});
        alert("Отправлено письмо");
    });
});

