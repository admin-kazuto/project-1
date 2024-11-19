<?php
session_start();
ob_start();
require_once '../commons/function.php';
require_once 'controllers/dashboardController.php';
require_once 'controllers/productController.php';
require_once 'controllers/accController.php';
require_once 'controllers/categoryController.php';
require_once 'models/accModel.php';
require_once 'models/productModel.php';
require_once 'models/categoryModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => (new accController())->login(),
    'logout' => (new accController())->logout(),
    'home' => (new dashboardController())->dashboard(),
    'listproduct' => (new productController())->listProduct(),
    'insertproduct' => (new productController())->insertProduct(),
    'updateproduct' => (new productController())->updateProduct($_GET['id']),
    'deleteproduct' => (new productController())->deleteProduct($_GET['id']),
    'listcategory' => (new categoryController())->listCategory(),
    'insertcategory' => (new categoryController())->insertCategory(),
    'updatecategory' => (new categoryController())->updateCategory($_GET['id']),
    'deletecategory' => (new categoryController())->deleteCategory($_GET['id']),
    'listaccount' => (new accController())->listAccount(),
    'insertaccount' => (new accController())->insertAccount(),
    'deleteaccount' => (new accController())->deleteAccount($_GET['id']),
    'banAccount' => (new accController())->banAccount($_GET['id']),
    'unbanAccount' => (new accController())->unbanAccount($_GET['id']),
    'forgotPass' => (new accController())->forgotPass(),
    'register' => (new accController())->register(),
};
