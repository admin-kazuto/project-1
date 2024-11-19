<?php
require_once 'models/homeModel.php';
class homeController
{
    public $homeModel;
    function __construct()
    {
        $this->homeModel = new homeModel();
    }
    function home()
    {
        $product = $this->homeModel->allProduct();
        $top4product = $this->homeModel->top4Product();
        $dienthoai = $this->homeModel->dienthoai();
        $maytinh = $this->homeModel->maytinh();
        $tivi = $this->homeModel->tivi();
        require_once 'views/home.php';
    }
    function detailPro($id)
    {
        $productOne = $this->homeModel->findProductById($id);
        require_once 'views/detailProduct.php';
    }
}
