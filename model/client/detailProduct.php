<?php
class detailProductModel
{
    public $detailProductModel;
    public function __construct()
    {
        $this->detailProductModel = connectDB();
    }

    public function getProductById($id)
    {
        return $this->detailProductModel->query("SELECT * FROM product WHERE product_id = $id")->fetch();
    }
}
