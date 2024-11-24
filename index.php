<?php

session_start();
ob_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

// Các file cần thiết
require_once("config/conn.php");
require_once("model/admin/model.php");
require_once("model/admin/product.php");
require_once("model/admin/category.php");
require_once("model/admin/accModel.php");
require_once("model/admin/discountModel.php");

require_once("controller/admin/discountController.php");
require_once("controller/admin/controller.php");
require_once("controller/admin/categoryController.php");
require_once("controller/admin/productController.php");
require_once("controller/admin/accController.php");
require_once("controller/admin/dashboardController.php");

// Lấy hành động từ URL
$act = $_GET['act'] ?? '/';

// Xử lý các hành động bằng match
match ($act) {
    //Home
    '/' => (new dashboardController())->home(),
    // Quản lý product
    'listproduct' => (new productController())->list(),
    'listcategory' => (new categoryController())->list(),
    'addproduct' => (new productController())->add(),
    'store-product' => (new productController())->storeProduct(),
    'deleteproduct' => (new productController())->deleteProduct(),
    'editproduct' => (new productController())->editProduct(),
    'updateproduct' => (new productController())->updateProduct(),
    // Quản lý category
    'listcategory' => (new categoryController())->list(),
    'deletecategory' => (new categoryController())->deleteCategory(),
    'addcategory' => (new categoryController())->add(),
    'store-category'=>(new categoryController())->storeCategory(),
    'editcategory'=>(new categoryController())->editCategory(),
    'update-category'=>(new categoryController())->updateCategory(),
    //
    'administration' => (new dashboardController())->dashboard(),
    'home' => (new dashboardController())->home(),
    // Đăng nhập
    'login' => (new accController())->login(),
    'logout' => (new accController())->logout(),
    'forgotpass' => (new accController())->forgotPass(),
    'register' => (new accController())->login(),
    'listaccount' => (new accController())->listAccount(),
    'insertaccount' => (new accController())->insertAccount(),
    'deleteaccount' => (new accController())->deleteAccount($_GET['id']),
    'banAccount' => (new accController())->banAccount($_GET['id']),
    'unbanAccount' => (new accController())->unbanAccount($_GET['id']),
    'listdiscount' => (new DiscountController())->listDiscount(),
    'insertdiscount' => (new DiscountController())->insertdiscount(),
    'updatediscount' => (new DiscountController())->updatediscount($_GET['id']),
    'deletediscount' => (new DiscountController())->deletediscount($_GET['id']),
    
    default => print "Không có hành động nào được xử lý.",
};
