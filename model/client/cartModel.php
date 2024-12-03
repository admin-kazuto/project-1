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
        $stmt = $this->cartModel->prepare("
            SELECT SUM(pv.price * c.quantity) AS total
            FROM cart c
            JOIN product_variation pv ON pv.variation_id = c.product_id
            WHERE c.user_id = ?
        ");
        $stmt->execute([$user_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}
