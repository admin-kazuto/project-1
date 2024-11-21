<?php
session_start();
ob_start();
require_once '../../config/conn.php';
require_once '../../controller/admin/accController.php';
require_once '../../controller/admin/dashboardController.php';
require_once '../../model/admin/accModel.php';

$act = $_GET['act'] ?? '/';
match ($act) {
    'administration' => (new dashboardController())->dashboard(),
    'login' => (new accController())->login(),
    'logout' => (new accController())->logout(),
    '/' => (new dashboardController())->dashboard(),
    'listaccount' => (new accController())->listAccount(),
    'insertaccount' => (new accController())->insertAccount(),
    'deleteaccount' => (new accController())->deleteAccount($_GET['id']),
    'banAccount' => (new accController())->banAccount($_GET['id']),
    'unbanAccount' => (new accController())->unbanAccount($_GET['id']),
    'forgotPass' => (new accController())->forgotPass(),
    'register' => (new accController())->register(),
};
