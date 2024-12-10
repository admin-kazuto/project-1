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

    
    public function addToCart($user_id, $product_id, $variation_id, $quantity, $unit_price)
    {
        // // Kiểm tra dữ liệu đầu vào (nếu bạn không sử dụng PDO chuẩn bị)
        // $user_id = intval($user_id);
        // $product_id = intval($product_id);
        // $variation_id = intval($variation_id);
        // $quantity = intval($quantity);
        // $unit_price = floatval($unit_price); // Nếu giá có thể là số thực
    
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $sqlCheck = "
            SELECT quantity 
            FROM cart 
            WHERE user_id = $user_id 
            AND product_id = $product_id 
            AND variation_id = $variation_id 
            AND unit_price = $unit_price
        ";
        $result = $this->detailProductModel->query($sqlCheck)->fetch();
    
        if ($result) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $newQuantity = $result['quantity'] + $quantity;
            $sqlUpdate = "
                UPDATE cart 
                SET quantity = $newQuantity 
                WHERE user_id = $user_id 
                AND product_id = $product_id 
                AND variation_id = $variation_id 
                AND unit_price = $unit_price
            ";
            return $this->detailProductModel->query($sqlUpdate)->execute();
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            $sqlInsert = "
                INSERT INTO cart (user_id, product_id, variation_id, quantity, unit_price) 
                VALUES ($user_id, $product_id, $variation_id, $quantity, $unit_price)
            ";
            return $this->detailProductModel->query($sqlInsert)->execute();
        }
    }
    
    
    
    public function getUserId($userName)
    {
        return $this->detailProductModel->query("SELECT user_id FROM account WHERE username = '$userName'")->fetchColumn();
    }

    public function getCartByVariationId($variation_id){
        return $this->detailProductModel->query("SELECT * FROM cart WHERE variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCart($user_id,$variation_id)
    {
        return $this->detailProductModel->query("SELECT * FROM cart JOIN product ON cart.product_id = product.product_id JOIN product_variation ON product_variation.product_id = product.product_id WHERE cart.user_id = $user_id AND product_variation.variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }
}
