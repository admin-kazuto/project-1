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
}
