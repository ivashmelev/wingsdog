$(function(){
    loc=document.title;
    switch(loc){
        case "Главная": $("a:nth-child(1)").addClass("underline");
            break;
        case "Мероприятия": $("a:nth-child(2)").addClass("underline");
            break;
        case "Фотоальбом": $("a:nth-child(3)").addClass("underline");
            break;
        case "Инструктора": $("a:nth-child(4)").addClass("underline");
            break;
        case "Контакты": $("a:nth-child(5)").addClass("underline");
            break;
    }

    // $("#accordion").keydown(function(event){
    //     if(event.keyCode == 13){
    //         console.log(event.keyCode);
    //         textArea=document.getElementById("InputText1");
    //         textArea.value += '<br>';
    //     }
    // });
    // function genNews(count=0){
    //     for(i=0; i<count; i++){
    //         block_news=$("body");
    //         content='<div id="accordion"> <div class="card"> <div class="card-header" id="heading'+i+`"> <h5 class="mb-0"> <button class="btn btn-link adm-element-head" data-toggle="collapse" data-target="#collapse'+i+`" aria-expanded="false" aria-controls="collapseOne"> Header </button> <span class="adm-path-text">date</span><span class="adm-path-text">/</span><span class="adm-path-text">text</span> </h5> </div> <div id="collapse'+i+`" class="collapse" aria-labelledby="heading'+i+`" data-parent="#accordion"> <div class="card-body"> <div class="container-fluid"> <div class="element-news"> <div class="row"> <div class="col-lg-4"> <h2 class="adm-head-h2">Header</h2> <p class="adm-subtext">date</p> <div style="width: 100px; height: 100px; border: 2px solid black; text-align: center;">IMG</div> </div> <div class="col-lg-4"> <p class="adm-text-p">text</p> </div> <div class="col-lg-4"> <button type="button" class="btn btn-danger btn-right"> <div class="btn-del"></div> </button> <button type="button" class="btn btn-primary btn-right"> <div class="btn-edit"></div> </button> <button type="button" class="btn btn-success btn-right"> <div class="btn-add"></div> </button> </div> </div> </div> </div> </div> </div> </div> </div>';
    //         block_news.append(content);
    //     }
    //     console.log(count);
    // }

    $(".adm-element-head").click(function(){
        head=$(this).text();
        text=$($(this).siblings(".adm-path-text")[1]).text();
        localStorage.setItem("head", head);
        localStorage.setItem("text", text);
    });

    function clickEdit(id=0, url, header='header', date='date', img='img', text='text'){
        content=`<div class="card-body">
        <div class="container-fluid">
          <div class="element-news">
            <div class="row">
              <div class="col-lg-8 col-xl-8">
                <form method="POST" action="`+url+`" enctype="multipart/form-data">
                  <div class="form-group"> <label for="InputHeader1">Заголовок</label> <input type="hidden" name="id" value="`+id+`"><input type="text" class="form-control" name="header" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ." value='`+localStorage.getItem("head")+`'
                      required>
                    <div class="valid-feedback">Good!</div>
                    <div class="invalid-feedback">Bad!</div>
                  </div>
                  
                  <div class="form-group"> <label for="InputImg">Изображение</label>
                    <div class="input-group">
                      <div class="custom-file"> <input type="file" class="custom-file-input" name="img" id="InputImg" required> <label class="custom-file-label" for="inputGroupFile04">Выберите файл. . .</label>
                        <div class="valid-feedback">Good!</div>
                        <div class="invalid-feedback">Bad!</div>
                      </div>
                      <div class="input-group-append"> <button class="btn btn-outline-secondary" style="margin-left:0px;" type="button">Загрузить</button> </div>
                    </div>
                  </div>
                  
                  <div class="form-group"> <label for="InputText1">Текст</label>
                    <div class="col-lg-8 col-xl-8">
                      <textarea class="form-control" name="text" id="textarea" rows="9" placeholder="Введите текст. . ." required>'`+localStorage.getItem("text")+`'</textarea></div>
                      <script>
                        var editor = CKEDITOR.replace('textarea',{height: 250});
                      </script>
                    <div class="valid-feedback">Good!</div>
                    <div class="invalid-feedback">Bad!</div>
                  </div> <button type="submit" class="btn btn-primary" style="margin-left:0px;"> <div class="btn-ok"></div> </button> <button type="button" id="btn-close-edit" class="btn btn-danger" onclick="clickClose()" )> <div class="btn-del" ></div> </button>            </form>
              </div>
            </div>
          </div>
        </div>
      </div>`;
        return content;
    }

    function clickAdd(id=0, url, header='header', date='date', img='img', text='text'){
        content=`<div class="card-body">
        <div class="container-fluid">
          <div class="element-news">
            <div class="row">
              <div class="col-lg-8 col-xl-8">
                <form method="POST" action="`+url+`" enctype="multipart/form-data">
                  <div class="form-group"> <label for="InputHeader1">Заголовок</label> <input type="hidden" name="id" value="`+id+`"><input type="text" class="form-control" name="header" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ."  required>
                    <div class="valid-feedback">Good!</div>
                    <div class="invalid-feedback">Bad!</div>
                  </div>
                  
                  <div class="form-group"> <label for="InputImg">Изображение</label>
                    <div class="input-group">
                      <div class="custom-file"> <input type="file" class="custom-file-input" name="img" id="InputImg" required> <label class="custom-file-label" for="inputGroupFile04">Выберите файл. . .</label>
                        <div class="valid-feedback">Good!</div>
                        <div class="invalid-feedback">Bad!</div>
                      </div>
                      <div class="input-group-append"> <button class="btn btn-outline-secondary" style="margin-left:0px;" type="button">Загрузить</button> </div>
                    </div>
                  </div>
                  
                  <div class="form-group"> <label for="InputText1">Текст</label>
                    <div class="col-lg-8 col-xl-8">
                      <textarea class="form-control" name="text" id="textarea" rows="9" placeholder="Введите текст. . ." required></textarea></div>
                      <script>
                        var editor = CKEDITOR.replace('textarea',{height: 250});
                      </script>
                    <div class="valid-feedback">Good!</div>
                    <div class="invalid-feedback">Bad!</div>
                  </div> <button type="submit" class="btn btn-primary" style="margin-left:0px;"> <div class="btn-ok"></div> </button> <button type="button" id="btn-close-edit" class="btn btn-danger" onclick="clickClose()" )> <div class="btn-del" ></div> </button>            </form>
              </div>
            </div>
          </div>
        </div>
      </div>`;
        return content;
    }

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

    $(".btn-edit").click(function(){
        id=$(this).prop("id");
        num=id.split("-");
        localStorage.setItem("id", parseInt(num[num.length-1]));
        $(".card").addClass("disabled");
        $("#accordion-"+num[num.length-1]+"").append(clickEdit(localStorage.getItem("id"), "update_attainment.php"));
        formatPanel();
    });

    $(".btn-add").click(function(){
        if(!$("*").is("#InputHeader1")){
            id=$(this).prop("id");
            num=id.split("-");
            localStorage.setItem("id", Number(num[num.length-1])+1);
            console.log(num[num.length-1]);
            $("#accordion").append(clickAdd(localStorage.getItem('id'), "add_attainment.php"));
            formatPanel();
        }
    });


    $(".btn-del").click(function(){
        id=$(this).prop("id");
        num=id.split("-");
        localStorage.setItem("id", parseInt(num[num.length-1]));
        location.href="../attainment/delete_attainment.php?id="+localStorage.getItem('id')+"&img=img-"+localStorage.getItem('id');
    });

    $(".btn-back").click(function(){
        history.back();
    });

    $(".btn-exit").click(function(){
        location.href="../exit.php";
    });

    function getSelectionText() {
        var txt = '';
        if (txt = window.getSelection) { // Не IE, используем метод getSelection
          txt = window.getSelection().toString();
        } else { // IE, используем объект selection
          txt = document.selection.createRange().text;
        }
        return txt;
      }
    




});