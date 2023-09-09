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
    <div class="fluid-container  px-4">
          <hr>
      <div class="row justify-content-center gx-5">
        <div class="col-6">
          <br>
          <br>
          <h1>Список продукции</h1>
          <br>
          <div class="list-group" style="font-size: 1.3em;">
            <?php 
              foreach ($data as $key => $value) {
            ?>
              <a href="/product?id=<?=$value['id']?>" class="list-group-item list-group-item-action"><?=$value['product_name'];?> &nbsp; - <?=$value['capacity'];?></a>
            <?php 
              }
            ?>
            <a href="/newProduct" class="list-group-item list-group-item-action text-success">+ Новая этикетка</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>