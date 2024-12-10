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

    public function getCart($user_id){
        return $this->cartModel->query("SELECT * FROM cart JOIN product ON product.product_id = cart.product_id JOIN product_variation ON product_variation.product_id = product.product_id WHERE cart.user_id = '$user_id';")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCartTotal($user_id) {
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
