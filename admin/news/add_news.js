$(function(){
    // function genNews(count=0){
    //     for(i=0; i<count; i++){
    //         block_news=$("body");
    //         content='<div id="accordion"> <div class="card"> <div class="card-header" id="heading'+i+'"> <h5 class="mb-0"> <button class="btn btn-link adm-element-head" data-toggle="collapse" data-target="#collapse'+i+'" aria-expanded="false" aria-controls="collapseOne"> Header </button> <span class="adm-path-text">date</span><span class="adm-path-text">/</span><span class="adm-path-text">text</span> </h5> </div> <div id="collapse'+i+'" class="collapse" aria-labelledby="heading'+i+'" data-parent="#accordion"> <div class="card-body"> <div class="container-fluid"> <div class="element-news"> <div class="row"> <div class="col-lg-4"> <h2 class="adm-head-h2">Header</h2> <p class="adm-subtext">date</p> <div style="width: 100px; height: 100px; border: 2px solid black; text-align: center;">IMG</div> </div> <div class="col-lg-4"> <p class="adm-text-p">text</p> </div> <div class="col-lg-4"> <button type="button" class="btn btn-danger btn-right"> <div class="btn-del"></div> </button> <button type="button" class="btn btn-primary btn-right"> <div class="btn-edit"></div> </button> <button type="button" class="btn btn-success btn-right"> <div class="btn-add"></div> </button> </div> </div> </div> </div> </div> </div> </div> </div>';
    //         block_news.append(content);
    //     }
    //     console.log(count);
    // }   

    function clickEdit(id=0, header='header', date='date', img='img', text='text'){
        content='<div id="collapseOne" class="collapse show" aria-labelledby="heading10" data-parent="#accordion"> <div class="card-body"> <div class="container-fluid"> <div class="element-news"> <div class="row"> <div class="col-lg-4"> <form method="POST" action="update_news.php"> <div class="form-group"> <label for="InputHeader1">Заголовок</label> <input type="text" class="form-control" name="header" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ." required> <div class="valid-feedback">Good!</div> <div class="invalid-feedback">Bad!</div> </div> <div class="form-group col-lg-6" style="padding-left: 0px;"> <label for="InputDate1">Дата</label> <input type="date" name="date" class="form-control" id="InputDate1" placeholder="Password" required> <div class="valid-feedback">Good!</div> <div class="invalid-feedback">Bad!</div> </div> <div class="form-group"> <label for="InputImg">Изображение</label> <div class="input-group"> <div class="custom-file"> <input type="file" class="custom-file-input" name="img" id="InputImg" required> <label class="custom-file-label" for="inputGroupFile04">Выберите файл. . .</label> <div class="valid-feedback">Good!</div> <div class="invalid-feedback">Bad!</div> </div> <div class="input-group-append"> <button class="btn btn-outline-secondary" style="margin-left:0px;" type="button">Загрузить</button> </div> </div> </div> <div class="form-group"> <label for="InputText1">Текст</label> <textarea class="form-control" name="text" id="InputText1" rows="9" placeholder="Введите текст. . ." required></textarea> <input type="hidden" name="id" value='+id+'<div class="valid-feedback">Good!</div> <div class="invalid-feedback">Bad!</div> </div> <button type="submit" class="btn btn-primary" style="margin-left:0px;"> <div class="btn-ok"></div> </button> <button type="button" class="btn btn-danger"> <div class="btn-del"></div> </button>  </div> </div> </div> </div> </div> </div></form>';
        return content;
    }

    $(".btn-edit").click(function(){
        id=$(this).prop("id");
        num=Array.from(id);
        num=num.pop();
        $(".card").addClass("disabled");
        $("#accordion-"+num+"").html(clickEdit());
    });
});