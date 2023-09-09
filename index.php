<?php
// error_reporting(error_reporting() & ~E_NOTICE);
date_default_timezone_set('Asia/Calcutta');
mb_internal_encoding("UTF-8");
phpinfo();



// $_root_path = $_SERVER["DOCUMENT_ROOT"].'/';
// $_prerequest = '/';
// $_http_host = 'http://'.$_SERVER['HTTP_HOST'].$_prerequest;

// require $_root_path.'app/db/Db.class.php';
// require $_root_path.'app/logs.php';
// require $_root_path.'app/model.php';

// // tools

// function convert_multi_array($glue, $arr) {
//   for ($i=0; $i<count($arr); $i++) {
//     if (@is_array($arr[$i])) 
//       $arr[$i] = implode_all ($glue, $arr[$i]);
//   }            
//   return implode($glue, $arr);
// }

// // start
// session_start();
// $_provider = new Provider();
// $log = new Logs();

// $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
// $_request = $_SERVER['REQUEST_URI'];

// switch ($uri_parts[0]) {
//   case $_prerequest.'' :
//   case $_prerequest.'/' :
//   case $_prerequest.'home' :
//     $data = $_provider->getLabels();
//     require $_root_path.'app/views/home.php';
//     break;

//   case $_prerequest.'product' :
//     $data = $_provider->getLabelById($_GET['id']);
//     require $_root_path.'app/views/product.php';
//     break;

//   case $_prerequest.'updateProduct' :
//     $_provider->updateProduct($_POST);
//     header('location: /product?id='.$_POST['id']);
//     exit();

//   case $_prerequest.'addNewProduct' :
//     // print_r($_POST);
//     $_provider->addNewProduct($_POST);
//     header('location: /');
//     exit();
//     break;

//   case $_prerequest.'newProduct' :
//     // $_provider->updateProduct($_POST);
//     require $_root_path.'app/views/new_product.php';
//     break;

//   default :
//     require $_root_path.'app/views/404.php';
//     break;
// }