<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Этикетки для мамы</title>
    <script src="js/html2canvas.js"></script>
  </head>
  <body>
    <div class="fluid-container px-4">
        
      <div class="row justify-content-center g-5">
        <div class="col-4">
          <form action="/addNewProduct" method="post">
            <br>
            <a href="/" class="btn btn-secondary">< НАЗАД К СПИСКУ</a>
            <br>
            <br>

            <div class="mb-2">
              <label for="productName" class="form-label"><b>Наименование Продукта (Заголовок этикетки)</b></label>
              <input type="text" class="form-control form-control-lg" name="product_name" value="" id="productName">
            </div>
            
            <div class="row">
              <div class="col-6">
                <div class="mb-2">
                  <label for="capacity" class="form-label"><b>Объем</b></label>
                  <input type="text" class="form-control" name="capacity" value="" id="capacity">
                </div>
              </div>
                
              <div class="col-6">
                <div class="form-label"><b>Форма этикетки:</b></div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input value="круг" type="radio" class="btn-check" name="label_form" id="label_form_circle" autocomplete="off">
                  <label class="btn btn-outline-primary" for="label_form_circle">Круг</label>
                  <input value="прямоугольник" type="radio" class="btn-check" name="label_form" id="label_form_square" autocomplete="off">
                  <label class="btn btn-outline-primary" for="label_form_square">Прямоугольник</label>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-6">
                <b>Ширина:</b> 
                <div class="input-group">
                  <input type="text" class="form-control" name="label_width" aria-label="Ширина этикетки" value="">
                  <span class="input-group-text">мм</span>
                </div>
              </div>
                
              <div class="col-6">
                <b>Высота:</b>
                <div class="input-group">
                  <input type="text" class="form-control" name="label_height" aria-label="Высота этикетки" value="">
                  <span class="input-group-text">мм</span>
                </div>
              </div>
            </div>

            <div class="mb-2">
              <label for="productSubtitle" class="form-label"><b>Подзаголовок (если надо)</b></label>
              <input type="text" class="form-control" name="product_subtitle" value="" id="productSubtitle">
            </div>

            <div class="mb-2">
              <label for="compound" class="form-label"><b>Состав</b></label>
              <textarea class="form-control" name="compound" id="compound" rows="5"></textarea>
            </div>

            <div class="mb-2">
              <label for="instruction" class="form-label"><b>Применение</b></label>
              <textarea class="form-control" name="instruction" id="instruction" rows="5"></textarea>
            </div>
            
            <div class="row mb-2">
              <div class="col-6">
                <div class="mb-2">
                  <label for="create_date" class="form-label"><b>Дата выпуска</b></label>
                  <input type="text" class="form-control" name="create_date" value="" id="create_date">
                </div>
              </div>
                
              <div class="col-6">
                <div class="mb-2">
                  <label for="sell_by" class="form-label"><b>Годен до</b></label>
                  <input type="text" class="form-control" name="sell_by" value="" id="sell_by">
                </div>
              </div>
            </div>

            <div class="mb-2">
              <label for="storage_condition" class="form-label"><b>Условия хранения</b></label>
              <input type="text" class="form-control" name="storage_condition" value="" id="storage_condition">
            </div>
            <hr>
            <div class="mb-3">
              <input type="hidden" name="id" value="">
              <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
          </form>
        </div>
      </div>
    </div>   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script>
      var circle = document.querySelector('.circle-label-text');
      var square = document.querySelector('.square-label-text');
      var fontSize = 2; //mm

      window.setFontSize = function(label, fontSize) {
        label.style.fontSize = fontSize+"em";
        if (isOverflowed(label)) setTimeout(function() {
          var newFontSize = fontSize - 0.01;
          setFontSize(label, newFontSize) 
        }, 1);
      }
      
      setFontSize(circle, fontSize);
      setFontSize(square, fontSize);

      function isOverflowed(el) {
        return el.scrollWidth > el.offsetWidth ||
          el.scrollHeight > el.offsetHeight;
      }


      


    // document.getElementById("btn_convert").addEventListener("click", function() {
    //   html2canvas(document.getElementById("paper-a4"),
    //   {
    //     allowTaint: true,
    //     useCORS: true
    //   }).then(function (canvas) {
    //     var anchorTag = document.createElement("a");
    //     document.body.appendChild(anchorTag);
    //     document.getElementById("previewImg").appendChild(canvas);
    //     anchorTag.download = "filename.jpg";
    //     anchorTag.href = canvas.toDataURL();
    //     anchorTag.target = '_blank';
    //     anchorTag.click();
    //   });
    // });
  </script>
  </body>
</html>