$(document).ready(function(){
  console.log(location.pathname);
  if(location.pathname=="/admin/photo/adm_photo.php"){
    $(".btn-success").click(function(){
      $(".content").prepend(addPhoto());
    });
  }else{
    $(".btn-success").click(function(){
      $(".content").prepend(addAlbom());
    });
  }

  $(".btn-edit").click(function(){
    let index = $(this).prop("id");
    index=index.split("-");
    index=index[2];
  });

  $(".btn-del").click(function(){
    let name=$(".card-title").text();
    let index = $(this).prop("id");
    index=index.split("-");
    id=index[2];
    let answer = confirm("Вы действительно хотите удалить этот альбом?");
    if(answer){
      window.location.href = `delete_albom.php?id=`+id+``;
    }else{
      window.location.reload();
    }
  });
});