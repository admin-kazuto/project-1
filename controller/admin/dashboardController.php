<?php
class dashboardController
{
    public $productModel;
    function __construct() {}
    function dashboard()
    {
        // $allProduct = $this->productModel->getAllProduct();
        require_once '../../views/admin/dashboard.php';
    }
}
