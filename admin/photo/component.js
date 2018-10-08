function addForm(){
  let content = `
  <div class="col-lg-4">
    <form method="POST" action="add_photo.php">
      <div class="form-group">
          <label for="InputHeader1">Название альбома</label>
          <input type="text" class="form-control" name="header" id="InputHeader1" aria-describedby="headerHelp" placeholder="Введите заголовок. . ." required>
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