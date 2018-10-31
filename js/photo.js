$(document).ready(function(){
    let slide = 0;
    let idImg = 0;
    let countImg = 0;
    let countPhoto = 0;

    function startCarousel(dataAlbomName, dataPhotoName){
        $(".carousel-photo").toggleClass("carousel-true");
        block_photo=$(".carousel_content");
        // for(i in dataAlbomName){
            for(j in dataPhotoName){
                content='<div class="carousel_content-photo"><img src="../../img/album-'+dataAlbomName+'/'+dataPhotoName[j]+'" alt="'+dataPhotoName[j]+'" onerror = "this.remove()"></div>';
                block_photo.append(content);
                countPhoto = countPhoto + 1;
            // }
        }
    }

    console.log(dataPhotoName);
    for(i in dataAlbomName){
        $("#"+dataAlbomName[i]).click(function(e){
            index=$(this).prop("id");
            console.log(index);
            console.log(dataPhotoName);
            startCarousel(index, dataPhotoName[index]);        
        });
    }


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