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
});