$(function(){
    loc=document.title;
    menu_links=Array.from($(".menu-links-item"));
    switch(loc){
        case "Крылатый Пёс": $(menu_links[0]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Мероприятия": $(menu_links[1]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Команда": $(menu_links[2]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Достижения": $(menu_links[3]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Передержка": $(menu_links[4]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Фотоальбом": $(menu_links[5]).css({color:"#002a56", backgroundColor: "white"});
        break;
        case "Контакты": $(menu_links[5]).css({color:"#002a56", backgroundColor: "white"});
        break;
    }
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

// function changeBlock(e){
//     id = e;
//     blockMobile_b = document.getElementsByClassName('basic-form-mobile')[0];
//     block_b = document.getElementsByClassName('basic-form')[0];
//     txt_form_b = document.getElementById('tif_b');
//     blockMobile_s = document.getElementsByClassName('standart-form-mobile')[0];
//     block_s = document.getElementsByClassName('standart-form')[0];
//     txt_form_s = document.getElementById('tif_s');
//     blockMobile_p = document.getElementsByClassName('premium-form-mobile')[0];
//     block_p = document.getElementsByClassName('premium-form')[0];
//     txt_form_p = document.getElementById('tif_p');
//     switch(id){
//         case 'button-b': 
//             blockMobile_b.style.display = 'none';
//             block_b.style.display = 'block';
//             txt_form_b.style.display = 'block';
//         break;

//         case 'button-s': 
//             blockMobile_s.style.display = 'none';
//             block_s.style.display = 'block';
//             txt_form_s.style.display = 'block';
//         break;

//         case 'button-p': 
//             blockMobile_p.style.display = 'none';
//             block_p.style.display = 'block';
//             txt_form_p.style.display = 'block';
//         break;

//     }

//     if (id != 'button-b'){
//         // console.log(e);
//         blockMobile_b.style.display = "block";
//         block_b.style.display = "none";
//         txt_form_b.style.display = "none";
//     }

//     if (id !='button-s'){
//         // console.log(e);
//         blockMobile_s.style.display = "block";
//         block_s.style.display = "none";
//         txt_form_s.style.display = "none";
//     }

//     if (id != 'button-p'){
//         // console.log(e);
//         blockMobile_p.style.display = "block";
//         block_p.style.display = "none";
//         txt_form_p.style.display = "none";
//     }
//     // console.log(e);
// }

//     var opClose_1;
//     var opClose_2;
//     var opClose_3;
//     var opClose_4;
//     var opClose_5;

// function showAnswer(e){
//     id = e;
//     txt_ft_1 = document.getElementById('ft-1');
//     block_ft_1 = document.getElementsByClassName('open')[0];
//     txt_ft_2 = document.getElementById('ft-2');
//     block_ft_2 = document.getElementsByClassName('open')[1];
//     txt_ft_3 = document.getElementById('ft-3');
//     block_ft_3 = document.getElementsByClassName('open')[2];
//     txt_ft_4 = document.getElementById('ft-4');
//     block_ft_4 = document.getElementsByClassName('open')[3];
//     txt_ft_5 = document.getElementById('ft-5');
//     block_ft_5 = document.getElementsByClassName('open')[4];
    

//     switch(id){
//         case 'ft-1':
//         txt_ft_1.style.color = "#3293E6";
//         block_ft_1.style.display = "block";
//         if (opClose_1 == true){
//             id = 0;
//             opClose_1 = false;
//         }
//         else{
//             opClose_1 = true;
//         }
//         break;
//         case 'ft-2':
//         txt_ft_2.style.color = "#3293E6";
//         block_ft_2.style.display = "block";
//         if (opClose_2 == true){
//             id = 0;
//             opClose_2 = false;
//         }
//         else{
//             opClose_2 = true;
//         }
//         break;
//         case 'ft-3':
//         txt_ft_3.style.color = "#3293E6";
//         block_ft_3.style.display = "block";
//         if (opClose_3 == true){
//             id = 0;
//             opClose_3 = false;
//         }
//         else{
//             opClose_3 = true;
//         }
//         break;
//         case 'ft-4':
//         txt_ft_4.style.color = "#3293E6";
//         block_ft_4.style.display = "block";
//         if (opClose_4 == true){
//             id = 0;
//             opClose_4 = false;
//         }
//         else{
//             opClose_4 = true;
//         }
//         break;
//         case 'ft-5':
//         txt_ft_5.style.color = "#3293E6";
//         block_ft_5.style.display = "block";
//         if (opClose_5 == true){
//             id = 0;
//             opClose_5 = false;
//         }
//         else{
//             opClose_5 = true;
//         }
//         break;
//     }

//     if (id != 'ft-1'){
//         txt_ft_1.style.color = "#333333";
//         block_ft_1.style.display = "none";
//     }
//     if (id != 'ft-2'){
//         txt_ft_2.style.color = "#333333";
//         block_ft_2.style.display = "none";
//     }
//     if (id != 'ft-3'){
//         txt_ft_3.style.color = "#333333";
//         block_ft_3.style.display = "none";
//     }
//     if (id != 'ft-4'){
//         txt_ft_4.style.color = "#333333";
//         block_ft_4.style.display = "none";
//     }
//     if (id != 'ft-5'){
//         txt_ft_5.style.color = "#333333";
//         block_ft_5.style.display = "none";
//     }
//     }

    

//     function changeDate(e){
//         id = e;
//         txt_change_1 = document.getElementById('ad-1');
//         txt_change_2 = document.getElementById('ad-2');
//         txt_change_3 = document.getElementById('ad-3');
//         txt_change_4 = document.getElementById('ad-4');
//         month_change_1 = document.getElementById('date-1');
//         month_change_2 = document.getElementById('date-2');
//         month_change_3 = document.getElementById('date-3');
//         month_change_4 = document.getElementById('date-4');
//         year_change_1 = document.getElementById('year-1');
//         year_change_2 = document.getElementById('year-2');
//         year_change_3 = document.getElementById('year-3');
//         year_change_4 = document.getElementById('year-4');

//         switch(id){
//             case 'txt_1':
//                 month_change_1.style.color = "#3293E6";
//                 year_change_1.style.color = "#3293E6"
//                 txt_change_1.style.display = "block";    
//             break;
//             case 'txt_2':
//                 month_change_2.style.color = "#3293E6";
//                 year_change_2.style.color = "#3293E6"
//                 txt_change_2.style.display = "block";    
//             break;
//             case 'txt_3':
//                 month_change_3.style.color = "#3293E6";
//                 year_change_3.style.color = "#3293E6"
//                 txt_change_3.style.display = "block";    
//             break;
//             case 'txt_4':
//                 month_change_4.style.color = "#3293E6";
//                 year_change_4.style.color = "#3293E6"
//                 txt_change_4.style.display = "block";    
//             break;
//         }
//         if(id != "txt_1"){
//             month_change_1.style.color = "#333333";
//             year_change_1.style.color = "#333333";
//             txt_change_1.style.display = "none";
//         }
//         if(id != "txt_2"){
//             month_change_2.style.color = "#333333";
//             year_change_2.style.color = "#333333";
//             txt_change_2.style.display = "none";
//         }
//         if(id != "txt_3"){
//             month_change_3.style.color = "#333333";
//             year_change_3.style.color = "#333333";
//             txt_change_3.style.display = "none";
//         }
//         if(id != "txt_4"){
//             month_change_4.style.color = "#333333";
//             year_change_4.style.color = "#333333";
//             txt_change_4.style.display = "none";
//         }
//     }

