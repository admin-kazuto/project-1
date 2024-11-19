<?php
class dashboardController
{
    public $productModel;
    function __construct()
    {
        $this->productModel = new productModel();
    }
    function dashboard()
    {
        $allProduct = $this->productModel->getAllProduct();
        require_once 'views/dashboard.php';
    }
}
