<?php
session_start();
ob_start();
require_once 'config/conn.php';
require_once 'controller/admin/accController.php';
require_once 'controller/admin/dashboardController.php';
require_once 'model/admin/accModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    'home' => (new dashboardController())->home(),
    'login' => (new accController())->login(),
    'logout' => (new accController())->logout(),
    '/' => (new dashboardController())->home(),
    'forgotPass' => (new accController())->forgotPass(),
    'register' => (new accController())->register(),
};
