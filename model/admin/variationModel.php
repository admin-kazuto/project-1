<?php
class variationModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    function getAllVariation()
    {
        $sql = "SELECT pv.*, p.product_name
            FROM product_variation pv
            LEFT JOIN product p ON pv.product_id = p.product_id";
        return $this->conn->query($sql)->fetchAll();
    }
    function getAllProducts()
    {
        $sql = "SELECT product_id, product_name FROM product";
        return $this->conn->query($sql)->fetchAll();
    }
    function insertVariation($product_id, $variation_name, $price, $status, $variation_quantity, $discount_id)
    {
        if (empty($discount_id)) {
            $sql = "INSERT INTO `product_variation` ( `product_id`, `variation_name`, `price`, `status`, `variation_quantity`) 
        VALUES ('$product_id','$variation_name','$price','$status','$variation_quantity')";
        } else {
            $sql = "INSERT INTO `product_variation` ( `product_id`, `variation_name`, `price`, `status`, `variation_quantity`, `discount_id`) 
        VALUES ('$product_id','$variation_name','$price','$status','$variation_quantity','$discount_id')";
        }
        return $this->conn->query($sql);
    }
    function updateVariation($variation_id, $product_id, $variation_name, $price, $status, $variation_quantity, $discount_id)
    {
        if (empty($discount_id)) {
            $sql = "UPDATE `product_variation` 
                    SET `product_id` = '$product_id', `variation_name` = '$variation_name', `price` = '$price', 
                        `status` = '$status', `variation_quantity` = '$variation_quantity', `discount_id` = NULL 
                    WHERE `variation_id` = '$variation_id'
                    ";
        } else {
            $sql = "UPDATE `product_variation` 
                    SET `product_id` = '$product_id', `variation_name` = '$variation_name', `price` = '$price', 
                        `status` = '$status', `variation_quantity` = '$variation_quantity', `discount_id` = '$discount_id' 
                    WHERE `variation_id` = '$variation_id'";
        }
        return $this->conn->query($sql);
    }
    function findVariationbyID($id)
    {
        $sql = "SELECT * FROM product_variation join product on product.product_id = product_variation.product_id WHERE variation_id = '$id'";
        return $this->conn->query($sql)->fetch();
    }
    function deleteVariation($id)
    {
        $sql = "DELETE FROM product_variation WHERE variation_id = '$id'";
        return $this->conn->query($sql);
    }
}
