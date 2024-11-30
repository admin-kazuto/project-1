<?php 
    class CartModel{
        public $cartModel;
        public function __construct(){
            $this -> cartModel = connectDB();
        }

        public function addToCart($user_id,$product_id,$variation_id,$quantity){
            return $this->cartModel->query("INSERT INTO `cart`(`user_id`, `product_id`, `variation_id`, `quantity`) VALUES ($user_id,$product_id,$variation_id,$quantity)")->execute();
        }

        public function getUserId($userName){
            return $this->cartModel->query("SELECT user_id FROM account WHERE username = '$userName'")->fetchColumn();
        }


        public function getCart($user_id){
            return $this->cartModel->query("SELECT * FROM cart WHERE user_id = $user_id")->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
?>