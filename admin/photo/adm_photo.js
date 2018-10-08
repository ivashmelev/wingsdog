$(document).ready(function(){
  $(".btn-success").click(function(){
    $(".content").prepend(addForm());
  });
});