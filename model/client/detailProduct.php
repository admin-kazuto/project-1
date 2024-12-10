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

    public function getAllPriceAndVariationName($id)
    {
        return $this->detailProductModel->query("SELECT variation_id,price ,variation_name FROM product_variation WHERE product_variation.product_id = $id")->fetchAll();
    }


    public function addToCart($user_id, $product_id, $variation_id, $quantity, $unit_price)
    {
        // Kiểm tra xem sản phẩm với các điều kiện cụ thể đã có trong giỏ hàng chưa
        $check = $this->detailProductModel->query("
            SELECT * FROM cart 
            WHERE variation_id = $variation_id 
            AND user_id = $user_id 
            AND product_id = $product_id 
            AND unit_price = $unit_price
        ")->fetchAll();

        if ($check) {
            // Lấy số lượng hiện tại của sản phẩm trong giỏ hàng
            $current_quantity = $this->detailProductModel->query("
                SELECT quantity FROM cart 
                WHERE variation_id = $variation_id 
                AND user_id = $user_id 
                AND product_id = $product_id 
                AND unit_price = $unit_price
            ")->fetch();

            $current_quantity_result = $current_quantity['quantity'];
            $new_quantity = intval($current_quantity_result) + intval($quantity);

            // Cập nhật số lượng sản phẩm trong giỏ hàng
            return $this->detailProductModel->query("
                UPDATE cart 
                SET quantity = $new_quantity 
                WHERE user_id = $user_id 
                AND product_id = $product_id 
                AND variation_id = $variation_id 
                AND unit_price = $unit_price
            ")->execute();
        } else {
            // Thêm sản phẩm mới vào giỏ hàng
            return $this->detailProductModel->query("
                INSERT INTO cart (user_id, product_id, variation_id, quantity, unit_price) 
                VALUES ($user_id, $product_id, $variation_id, $quantity, $unit_price)
            ")->execute();
        }
    }


    public function getUserId($userName)
    {
        return $this->detailProductModel->query("SELECT user_id FROM account WHERE username = '$userName'")->fetchColumn();
    }

    public function getCartByVariationId($variation_id)
    {
        return $this->detailProductModel->query("SELECT * FROM cart WHERE variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCart($user_id, $variation_id)
    {
        return $this->detailProductModel->query("SELECT * FROM cart JOIN product ON cart.product_id = product.product_id JOIN product_variation ON product_variation.product_id = product.product_id WHERE cart.user_id = $user_id AND product_variation.variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }
}