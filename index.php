<?php 

session_start();
ob_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

require_once("config/config.php");

require_once "model/category.php";
require_once "model/product.php";
require_once "model/descount.php";

require_once "controllers/productController.php";
require_once "controllers/categoryController.php";
$act = $_GET['act'] ?? '/';

switch ($act){
    case "list-product":
        (new productController)->list();
        break;
    case "list-category":
        (new categoryController)->list();
        break;
    case "add-product":
        (new productController)->add();
        break;
    case "store-product":
        (new productController)->store();
        break;
    case "descount-product":
        (new productController)->descount();
        break;
    default:
        echo"Khong co san pham";
}



?>