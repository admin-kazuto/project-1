<?php

class MenuModel
{
    public $MenuModel;

    public function __construct()
    {
        $this->MenuModel = connectDB();
    }

    public function getAllHamburgers()
    {
        return $this->MenuModel->query("SELECT product.product_id,product.product_name,product.description,product.product_image,product_variation.price as price FROM product JOIN category on product.category_id = category.category_id JOIN product_variation on product.product_id = product_variation.variation_id WHERE category.category_id = 2;")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPizzas()
    {
        return $this->MenuModel->query("SELECT product.product_id,product.product_name,product.description,product.product_image,product_variation.price as price FROM product JOIN category on product.category_id = category.category_id JOIN product_variation on product.product_id = product_variation.variation_id WHERE category.category_id = 1;")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllToasts()
    {
        return $this->MenuModel->query("SELECT product.product_id,product.product_name,product.description,product.product_image,product_variation.price as price FROM product JOIN category on product.category_id = category.category_id JOIN product_variation on product.product_id = product_variation.variation_id WHERE category.category_id = 3 ;")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSalads()
    {
        return $this->MenuModel->query("SELECT product.product_id,product.product_name,product.description,product.product_image,product_variation.price as price FROM product JOIN category on product.category_id = category.category_id JOIN product_variation on product.product_id = product_variation.variation_id WHERE category.category_id = 4 ;")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllDrinks()
    {
        return $this->MenuModel->query("SELECT product.product_id,product.product_name,product.description,product.product_image,product_variation.price as price FROM product JOIN category on product.category_id = category.category_id JOIN product_variation on product.product_id = product_variation.variation_id WHERE category.category_id = 5 ;")->fetchAll(PDO::FETCH_ASSOC);
    }
}
