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
        $orderDetails = $this->userorderModel->getOrderDetails();
        require_once 'views/admin/listUserorder.php';
        if (isset($_POST['btn_update'])) {
            $this->userorderModel->updateStatus($_POST['order_id'], $_POST['status']);
            header('location:#');
        }
    }
}
