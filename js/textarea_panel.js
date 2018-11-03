$(document).ready(function(){
  console.log("st sc");
  function formatPanel(){
    $(".btn.custom").click(function(){
      id = $(this).prop("id");
      console.log(id);
      let textarea = document.getElementById("textarea");
      let len = textarea.value.length,
      start = textarea.selectionStart,
      end = textarea.selectionEnd,
      sel = textarea.value.substring(start, end);
      switch(id){
        case "bold":  replace = '<b>' + sel + '</b>';
        break;
        case "italics":  replace = '<i>' + sel + '</i>';
        break;
        case "underline":  replace = '<u>' + sel + '</u>';
        break;
        case "left":  replace = '<left>' + sel + '</left>';
        break;
        case "center":  replace = '<center>' + sel + '</center>';
        break;
        case "right":  replace = '<right>' + sel + '</right>';
        break;
        case "justify": replace = '<justify>' + sel + '</justify>';
        break;
      }
      textarea.value = textarea.value.substring(0,start) + replace + textarea.value.substring(end,len);
    });
  }
});