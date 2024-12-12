<?php
class CartModel
{
    public $cartModel;
    public function __construct()
    {
        $this->cartModel = connectDB();
    }

    public function getUserId($userName)
    {
        return $this->cartModel->query("SELECT user_id FROM account WHERE username = '$userName'")->fetchColumn();
    }

    public function getCart($user_id)
    {
        return $this->cartModel->query("SELECT cart.*, product.*, product_variation.price, product_variation.variation_name
        FROM cart 
        JOIN product ON product.product_id = cart.product_id 
        JOIN product_variation ON product_variation.variation_id = cart.variation_id 
        WHERE cart.user_id = '$user_id'")->fetchAll(PDO::FETCH_ASSOC);
    }


    // public function calculateTotal($user_id){
    //     return $this -> cartModel->query("SELECT SUM(product_variation.price * cart.quantity) as total FROM cart JOIN product_variation ON product_variation.variation_id = cart.product_id WHERE cart.user_id = '$user_id';")->fetchColumn();
    // }
    public function getCartTotal($user_id)
    {
        $query = "
        SELECT 
            cart.product_id, 
            product_variation.price, 
            cart.quantity, 
            (product_variation.price * cart.quantity) AS total 
        FROM cart 
        JOIN product_variation ON cart.variation_id = product_variation.variation_id 
        JOIN product ON product_variation.product_id = product.product_id 
        WHERE cart.user_id = $user_id;
    ";
        // Gọi prepare từ PDO object
        $stmt = $this->cartModel->prepare($query);
        // Thực thi câu truy vấn
        $stmt->execute();
        // Trả về tất cả kết quả
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function UpdateQuantity($quantity)
    {
        return $this->cartModel->query("UPDATE cart SET quantity = '$quantity'")->execute();
    }

    public function deleteCart($cart_id)
    {
        return $this->cartModel->query("DELETE FROM cart WHERE cart_id = $cart_id")->execute();
    }

    public function deleteAllCart($user_id){
        return $this->cartModel->query("DELETE FROM cart WHERE user_id = $user_id")->execute();
    }

    public function getQuantityProduct($user_id)
    {
        return $this->cartModel->query("SELECT count(cart_id) as total FROM cart where user_id = $user_id")->fetch();
    }

    public function insertUserOrder($user_id, $total)
    {
        return $this->cartModel->query("INSERT INTO userorder ( order_status, order_totalAmount, discount_id, discount_amount, payment_method, user_id, order_name, order_phoneNumber, order_address)
        VALUES (
            
            'pending', 
            $total,  
            NULL,  
           0,  
            'COD',  
            $user_id,  
            null, 
            null, 
        null  
        )")->execute();
    }

    public function getOrderID($user_id){
        return $this->cartModel->query("SELECT order_id FROM userorder WHERE user_id = $user_id")->fetch();
    }


    public function insertOrderDetail($order_id, $product_id, $variation_id, $quantity, $unit_price,$total){
        return $this->cartModel->query("INSERT INTO userorder_details (order_id, product_id, variation_id, quantity, unit_price,order_price)
        VALUES ($order_id, $product_id, $variation_id, $quantity, $unit_price,$total)")->execute();
    }
    
}
