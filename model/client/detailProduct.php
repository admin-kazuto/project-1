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
        return $this->detailProductModel->query("SELECT product.product_id, product.product_name, product.description, product.product_image, product.category_id, product_variation.variation_id, product_variation.variation_name, product_variation.price FROM product JOIN product_variation ON product.product_id = product_variation.product_id WHERE product.product_id = $id")->fetch();
    }

    public function getAllPriceAndVariationName($id){
        return $this->detailProductModel->query("SELECT variation_id,price ,variation_name FROM product_variation WHERE product_variation.product_id = $id")->fetchAll();
    }
}
