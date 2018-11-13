function onLoad(){
// var ratecount=68;
var ratecount= document.getElementsByClassName("list-block");


for(i=0; i<ratecount.length; i++){
    document.getElementsByClassName("list-block")[i].style.display="none";
    
}

}

function showRate(value){
    value=value.innerText;
        console.log(value);
        var rate1=false, rate2=false, rate3=false, rate4=false, rate5=false, rate6=false,
        rate7=false, rate8=false;    
        switch(value){

            
            case "Договора, соглашения, сделки": 
                rate1=true;
                if (rate1){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=0; i<20; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                        rate1=false;
                    }
                }                
            break;
    
            case "Завещание":
                rate2=true;
                if(rate2){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=20; i<24; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                        rate2=false;
                    }
                }
                
            break;
    
            case "Доверенность":
                rate3=true;
                if (rate3){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=24; i<29; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate3=false;
                }
            break;
                
    
            case "Депозит нотариуса":
                rate4=true;
                if (rate4){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=29; i<32; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate4=false;
                }
            break;
    
            case "Копии документов (выписки из них)":
                rate5=true;
                if (rate5){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=32; i<34; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate5=false;
                }
            break;
    
            case "Свидетельствование подлинности подписи":
                rate6=true;
                if (rate6){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=34; i<37; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate6=false;
                }
            break;
    
            case "Наследство":
                rate7=true;
                if (rate7){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=37; i<41; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate7=false;
                }
            break;
    
            case "Иные нотариальные действия":
                rate8=true;
                if (rate8){
                    for(i=0; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="none";
                    }
                    for(i=41; i<66; i++){
                        document.getElementsByClassName("list-block")[i].style.display="block";
                    }
                    rate8=false;
                }
            break;
        }
    }