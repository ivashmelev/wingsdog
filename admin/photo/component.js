function addAlbom(){
  let content = `
  <div class="col-lg-4">
    <form method="POST" action="add_albom.php">
      <div class="form-group">
          <label for="InputHeader1">Название альбома</label>
          <input type="text" class="form-control" name="name" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ." required>
          <div class="valid-feedback">Good!</div>
          <div class="invalid-feedback">Bad!</div>
      </div>
      
      <div class="form-group">
          <label for="InputText1">Текст</label>
          <textarea class="form-control" name="text" id="InputText1" rows="9" placeholder="Введите текст. . ." required></textarea>
          <div class="valid-feedback">Good!</div>
          <div class="invalid-feedback">Bad!</div>
      </div>
      <button type="submit" class="btn btn-primary" style="margin-left:0px;">
          <div class="btn-ok"></div>
      </button>
      <button type="button" class="btn btn-danger">
          <div class="btn-del"></div>
      </button>
    </form>
</div>`;
return content;
}

function addPhoto(){
    console.log(location.search);
    let id = location.search.split("&");
    id = id[0].split("=");
    id = id[1];
    let albom = location.search.split("&");
    albom = albom[1].split("=");
    albom = albom[1];
    console.log(id);
    console.log(albom);
    let content = `
    <div class="custom-file">
        <form method="POST" enctype="multipart/form-data" action="add_photo.php">    
            <input type="file" class="custom-file-input" id="customFile" name="img" multiple accept="image/*,image/jpeg">
            <input type="hidden" name="id" value="`+id+`">
            <input type="hidden" name="albom" value="`+albom+`">
            <label class="custom-file-label" for="customFile">Выберите файл</label>
            <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-left:0;">
                <div class="btn-ok"></div>
            </button>
        </form>
    </div>`;
    return content;
}