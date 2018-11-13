$(document).ready(function(){

    var step=false;
    var url="";
    function redirect(){
        alert("good");
    }

    switch (document.title){
        case "Нотариус":
            url="_page_index.php";
        break;

        case "Нотариальные действия":
            url="_page_notary_actions.php";
        break;

        case "Тарифы":
            url="_page_rates.php";
        break;

        case "Контакты":
            url="_page_contacts.php";
        break;
    }

    if($('.rewrite').text()=="_"){
        console.log("empty");
        $('.rewrite').text('_');

    }

    arr_rewrite=Array.from($(".rewrite"));
    for(i=0; i<arr_rewrite.length; i++){
        if(arr_rewrite[i].innerText==""){
            arr_rewrite[i].innerText="/* пустая строка */";
        }
    }
    // console.log(arr_rewrite);
    // console.log("ready");
    // console.log(location.hostname+"/admin/redirect?url="+url);

    $('.rewrite').click(function(){
        
        if($('*').hasClass("in")){
            
            // console.log("Заполните данные");
        }
        else {
            text=$(this).text();
            // console.log(text1);
            // $(this).load("input.php");
            $(this).replaceWith("<div class='in'></div>");
            $('.in').load("input.php", function(){
                $('#focus-input').text(text);
                $('#focus-input').css("font-size", "20px");
                $('#focus-hidden').val(text);
                $('.page-form').attr("action", url);
                $('.but').click(function(e){
                    switch(e.target.id){
                        case 'TR': font='Times New Roman';
                        break;
                        case 'SS': font="sans-serif";
                        break;
                        case 'OS': font="Open Sans";
                        break;
                        case 'PT': font="PT_Serif";
                        break;
                        case 'GG': font="GalateaGothic";
                        break;
                        case 'I': font="Izvestija";
                        break;
                    }
                    $('#focus-font').val(font);

                });
                
            });
            
            $('.page-form').submit(function(event){
                    console.log(font);
                event.preventDefault();
                $.post(url, {'text_page':$('#focus-hidden').val(), 'text_new':$('.focus-input').val(), 'font':$('#focus-font').val(font)});
                
            });

            
        }       
        
    });

    $(".but").click(function(e){
        
       
    });

});
