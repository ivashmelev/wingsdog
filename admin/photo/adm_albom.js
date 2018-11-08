$(document).ready(function(){
  console.log(location.pathname);
  if(location.pathname=="/admin/photo/adm_photo.php"){
    $(".btn-success").click(function(){
      if(!$("*").is(".custom-file")){
        $(".content").prepend(addPhoto());
      }
    });
  }else{
    $(".btn-success").click(function(){
      if(!$("*").is("#InputHeader1")){
        $(".content").prepend(addAlbom());
      }
    });
  }

  $(".btn-edit").click(function(){
    let index = $(this).prop("id");
    index=index.split("-");
    index=index[2];
  });
  $(".btn-del").click(function(){
    callback=location.pathname.split("/");
    callback=callback[3];
    let name=$(".card-title").text();
    let index = $(this).prop("id");
    index=index.split("-");
    id=index[2];
    if(callback=="index.php"){
      let answer = confirm("Вы действительно хотите удалить этот альбом?");
      if(answer){
        window.location.href = `delete_albom.php?id=`+id+``;
      }else{
        window.location.reload();
      }
    }
    else{
      let answer = confirm("Вы действительно хотите удалить это фото?");
      if(answer){
        window.location.href = `delete_photo.php?id=`+id+``;
      }else{
        window.location.reload();
      }
    }
    
  });
  $(".btn-back").click(function(){
    history.back();
  });
});