<?php 

session_start();
ob_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");

require_once("config/conn.php");

require_once("model/admin/model.php");
require_once("controller/admin/controller.php");

$controller = new controller();


$act = $_GET['act'] ?? '/';
if($act === "/"){
    $controller -> home();
}



?>