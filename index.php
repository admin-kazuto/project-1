<?php

session_start();
ob_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

require_once("config/conn.php");

require_once("model/admin/model.php");
require_once("model/admin/product.php");
require_once("model/admin/category.php");

require_once("controller/admin/controller.php");
require_once("controller/admin/categoryController.php");
require_once("controller/admin/productController.php");

$controller = new controller();


$act = $_GET['act'] ?? '/';
if ($act === "/") {
    $controller->home();
}
if ($act === "list-product") {
    (new productController)->list();
}
if ($act === "list-category") {
    (new categoryController)->list();
}
if ($act === "add-product") {
    (new productController)->add();
}
if ($act === "store-product") {
    (new productController)->store();
}
if ($act === "delete-category") {
    (new categoryController)->delete();
}
if($act === "delete-product"){
    (new productController)->deleteproduct();
}
if($act=== "edit-product"){
    (new productController)->editProduct();
}
if($act=== "update-product"){
    (new productController)->updateProduct();
}
if ($act === "") {
    echo "Khong co san pham";
}
