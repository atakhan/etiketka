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
    <div id="paper-a4" class="visually-hidden">
      <a href="/" class="btn btn-danger no-print" id="print_cancel">
        отменить печать
      </a>
      
    </div>
    <div class="fluid-container px-4" id="main">
        
      <div class="row justify-content-center g-5">
        <div class="col-4">
          <form action="/updateProduct" method="post">
            <br>
            <div class="row">
              <div class="col-4">
                <a href="/" class="btn btn-secondary">< НАЗАД К СПИСКУ</a>
              </div>              
            </div>
            <br>
            <br>

            <div class="mb-2">
              <label for="productName" class="form-label"><b>Наименование Продукта (Заголовок этикетки)</b></label>
              <input type="text" class="form-control form-control-lg" name="product_name" value="<?=htmlspecialchars($data['product_name'])?>" id="productName">
            </div>

            <div class="row">
              <div class="col-6">
                <div class="mb-2">
                  <label for="capacity" class="form-label"><b>Объем</b></label>
                  <input type="text" class="form-control" name="capacity" value="<?=htmlspecialchars($data['capacity'])?>" id="capacity">
                </div>
              </div>
                
              <div class="col-6">
                <div class="form-label"><b>Форма этикетки:</b></div>
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                  <input value="круг" type="radio" class="btn-check" name="label_form" id="label_form_circle" autocomplete="off" <?=$data['label_form']=='круг' ? 'checked' : ''?>>
                  <label class="btn btn-outline-primary" for="label_form_circle">Круг</label>
                  <input value="прямоугольник" type="radio" class="btn-check" name="label_form" id="label_form_square" autocomplete="off" <?=$data['label_form']=='прямоугольник' ? 'checked' : ''?>>
                  <label class="btn btn-outline-primary" for="label_form_square">Прямоугольник</label>
                </div>
              </div>
            </div>

            <div class="row mb-2">
              <div class="col-6">
                <b>Ширина:</b> 
                <div class="input-group">
                  <input type="text" class="form-control" name="label_width" aria-label="Ширина этикетки" value="<?=$data['label_width']?>">
                  <span class="input-group-text">мм</span>
                </div>
              </div>
                
              <div class="col-6">
                <b>Высота:</b>
                <div class="input-group">
                  <input type="text" class="form-control" name="label_height" aria-label="Высота этикетки" value="<?=$data['label_height']?>">
                  <span class="input-group-text">мм</span>
                </div>
              </div>
            </div>

            <div class="mb-2">
              <label for="productSubtitle" class="form-label"><b>Подзаголовок (если надо)</b></label>
              <input type="text" class="form-control" name="product_subtitle" value="<?=htmlspecialchars($data['product_subtitle'])?>" id="productSubtitle">
            </div>

            <div class="mb-2">
              <label for="compound" class="form-label"><b>Состав</b></label>
              <textarea class="form-control" name="compound" id="compound" rows="5"><?=htmlspecialchars($data['compound'])?></textarea>
            </div>

            <div class="mb-2">
              <label for="instruction" class="form-label"><b>Применение</b></label>
              <textarea class="form-control" name="instruction" id="instruction" rows="5"><?=htmlspecialchars($data['instruction'])?></textarea>
            </div>
            
            <div class="row mb-2">
              <div class="col-6">
                <div class="mb-2">
                  <label for="create_date" class="form-label"><b>Дата выпуска</b></label>
                  <input type="text" class="form-control" name="create_date" value="<?=htmlspecialchars($data['create_date'])?>" id="create_date">
                </div>
              </div>
                
              <div class="col-6">
                <div class="mb-2">
                  <label for="sell_by" class="form-label"><b>Годен до</b></label>
                  <input type="text" class="form-control" name="sell_by" value="<?=htmlspecialchars($data['sell_by'])?>" id="sell_by">
                </div>
              </div>
            </div>

            <div class="mb-2">
              <label for="storage_condition" class="form-label"><b>Условия хранения</b></label>
              <input type="text" class="form-control" name="storage_condition" value="<?=htmlspecialchars($data['storage_condition'])?>" id="storage_condition">
            </div>
            <hr>
            <div class="mb-3">
              <input type="hidden" name="id" value="<?=$_GET['id']?>">
              <div class="d-grid gap-2 col-4 mx-auto">
                <button type="submit" class="btn btn-primary">Сохранить</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-8">
          <div id="preview">
            <!-- circle label -->
            <div class="label-wrapper label-circle-wrapper <?=$data['label_form']!='круг' ? 'visually-hidden' : '';?>" style="width:<?=$data['label_width']?>mm; height:<?=$data['label_height']?>mm;">
              <div class="circle-label-text">
                <p style="line-height: 1.1em;">
                  <?=$data['product_name'] ? '<span style="font-size: 1.8em; font-weight: bold;">'.$data["product_name"].'</span><br>' : ''?>
                  <?=$data['capacity'] ? '<span style="font-size: 1.2em; font-weight: bold; line-height: 1.6em;">'.$data["capacity"].'</span><br>' : ''?>
                  <?=$data['product_subtitle'] ? '<span style="font-size: 1.2em;">'.$data["product_subtitle"].'</span><br>' : ''?>
                  <?=$data['compound'] ? '<span style="font-size: 1em;"><b>Состав: </b>'.$data["compound"].'</span><br>' : ''?>
                  <?=$data['instruction'] ? '<span style="font-size: 1em;"><b>Применение: </b>'.$data["instruction"].'</span><br>' : ''?>
                  <?=$data['create_date'] ? '<span style="font-size: 1em;"><b>Дата выпуска: </b>'.$data["create_date"].'</span><br>' : ''?>
                  <?=$data['sell_by'] ? '<span style="font-size: 1em;"><b>Годен до: </b>'.$data["sell_by"].'</span><br>' : ''?>
                  <?=$data['storage_condition'] ? '<span style="font-size: 0.9em;"><i>'.$data["storage_condition"].'</i></span>' : ''?>
                </p>
              </div>
            </div>
            <!-- square label -->
            <div class="label-wrapper label-square-wrapper <?=$data['label_form']!='прямоугольник' ? 'visually-hidden' : '';?>" style="width:<?=$data['label_width']?>mm; height:<?=$data['label_height']?>mm;">
              <div class="square-label-text">
                <p style="line-height: 1.1em;">
                  <?=$data['product_name'] ? '<span style="font-size: 1.8em; font-weight: bold;">'.$data["product_name"].'</span><br>' : ''?>
                  <?=$data['capacity'] ? '<span style="font-size: 1.2em; font-weight: bold; line-height: 1.6em;">'.$data["capacity"].'</span><br>' : ''?>
                  <?=$data['product_subtitle'] ? '<span style="font-size: 1.2em;">'.$data["product_subtitle"].'</span><br>' : ''?>
                  <?=$data['compound'] ? '<span style="font-size: 1em;"><b>Состав: </b>'.$data["compound"].'</span><br>' : ''?>
                  <?=$data['instruction'] ? '<span style="font-size: 1em;"><b>Применение: </b>'.$data["instruction"].'</span><br>' : ''?>
                  <?=$data['create_date'] ? '<span style="font-size: 1em;"><b>Дата выпуска: </b>'.$data["create_date"].'</span><br>' : ''?>
                  <?=$data['sell_by'] ? '<span style="font-size: 1em;"><b>Годен до: </b>'.$data["sell_by"].'</span><br>' : ''?>
                  <?=$data['storage_condition'] ? '<span style="font-size: 0.9em;"><i>'.$data["storage_condition"].'</i></span>' : ''?>
                </p>
              </div>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
              <button class="btn btn-success" id="gotoPrintBtn">Перейти к печати этой этикетки</button>
            </div>
          </div>
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

      function hasClass(element, className) {
        return (' ' + element.className + ' ').indexOf(' ' + className+ ' ') > -1;
      }

      document.getElementById("gotoPrintBtn").addEventListener("click", function() {
        var elements = document.getElementsByClassName('label-wrapper');
        var paper = document.getElementById('paper-a4');
        var main = document.getElementById('main');
        paper.classList.remove("visually-hidden");
        
        for (const element of elements) {
          if(!hasClass(element, 'visually-hidden')) {
            
            var labelPositionInfo = element.getBoundingClientRect();
            var label_width = labelPositionInfo.width;
            var label_height = labelPositionInfo.height;

            var paperPositionInfo = paper.getBoundingClientRect();
            var paper_width = paperPositionInfo.width;
            var paper_height = paperPositionInfo.height;

            var horizontal_count = Math.floor(paper_width/label_width);
            var vertical_count = Math.floor(paper_height/(label_height));

            for (var i = horizontal_count-1; i >= 0; i--) {
              for (var j = vertical_count-1; j >= 0; j--) {
                console.log(i);
                setTimeout(function() {
                  var clone = element.cloneNode(true);
                  clone.id = "label_clone_id_"+i+'-'+j;
                  paper.appendChild(clone);
                }, 1);
              }
            }
            alert('go to print');

            console.log('paper width: '+ paper_width);
            console.log('paper height: '+ paper_height);
            console.log('horizontal count: '+ horizontal_count);
            console.log('vertical count: '+ vertical_count);
            paper.classList.remove("visually-hidden");
          }
        }

        main.classList.add("visually-hidden");
      });


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