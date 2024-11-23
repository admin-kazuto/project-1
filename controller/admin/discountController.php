<?php

class DiscountController
{
    public $discountModel;

    function __construct()
    {
        $this->discountModel = new discountModel();
    }
    function listDiscount()
    {
        $alldiscounts = $this->discountModel->getAllDiscount();
        require_once 'views/admin/listdiscount.php';
    }
    function insertdiscount()
    {
        require_once 'views/admin/insertdiscount.php';
        if (isset($_POST['btn_insert'])) {
            $discount_code = $_POST['discount_code'];
            $discount_value = $_POST['discount_value'];
            $minimum_order = $_POST['minimum_order'];
            $valid_from = $_POST['valid_from'];
            $valid_to = $_POST['valid_to'];
            $status = $_POST['status'];
            if ($this->discountModel->addDiscount($discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)) {
                header('location:?act=listdiscount');
            } else {
                echo "Lỗi";
            }
        }
    }

    public function updatediscount($id)
    {
        $onediscount = $this->discountModel->findDiscountById($id);
        require_once 'views/admin/updatediscount.php';
        if (isset($_POST['btn_update'])) {
            $discount_code = $_POST['discount_code'];
            $discount_value = $_POST['discount_value'];
            $minimum_order = $_POST['minimum_order'];
            $valid_from = $_POST['valid_from'];
            $valid_to = $_POST['valid_to'];
            $status = $_POST['status'];
            if ($this->discountModel->updateDiscount($id, $discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)) {
                header('location:?act=listdiscount');
            } else {
                echo "Lỗi";
            }
        }
    }

    public function deleteDiscount($id)
    {
        $this->discountModel->deleteDiscount($id);
        header('location:?act=listdiscount');
    }
}
