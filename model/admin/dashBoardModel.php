<?php 

class dashBoardModel{
    public $dashboardModel;
    public function __construct()
    {
        $this->dashboardModel = connectDB();
    }

    public function getQuantityOrder(){
        $sql = "SELECT COUNT(order_id) as total FROM userorder";
        return $this->dashboardModel->query($sql)->fetch();
    }

    public function getQuantityProduct(){
        $sql = "SELECT COUNT(product_id) as total FROM product";
        return $this->dashboardModel->query($sql)->fetch();
    }

    public function getQuantityUser(){
        $sql = "SELECT COUNT(user_id) as total FROM account where role = 'user'";
        return $this->dashboardModel->query($sql)->fetch();
    }

    public function getTotalCategory(){
        $sql = "SELECT COUNT(category_id) as total FROM category";
        return $this->dashboardModel->query($sql)->fetch();
    }
    
}

?>