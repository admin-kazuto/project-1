<?php
class dashboardController
{

    public $dashboardController;
    function __construct()
    {
        $this->dashboardController = new dashboardModel();
    }
    function dashboard()
    {
        $totalOrder = $this->dashboardController->getQuantityOrder();
        $totalProduct = $this->dashboardController->getQuantityProduct();
        $totalUser = $this->dashboardController->getQuantityUser();
        $totalCategory = $this->dashboardController->getTotalCategory(); 
        require_once 'views/admin/dashboard.php';
    }
    function home()
    {
        require_once 'views/client/home.php';
    }
}
