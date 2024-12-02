<?php

class userorderController
{
    public $userorderModel;

    function __construct()
    {
        $this->userorderModel = new userorderModel();
    }
    function listUserorder()
    {
        $alluserorder = $this->userorderModel->getAlluserorder();
        require_once 'views/admin/listUserorder.php';
    }
    function orderdetail($order_id)
    {
        $userorder = $this->userorderModel->getUserorderById($order_id);
        $orderdetail = $this->userorderModel->getOrderDetail($order_id);
        require_once 'views/admin/orderdetail.php';
        if (isset($_POST['btn_update'])) {
            $this->userorderModel->updateStatus($_POST['order_id'], $_POST['status']);
            header('location:#');
        }
    }
}
