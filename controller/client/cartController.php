<?php
class CartController
{
    public $cartController;
    public function __construct()
    {
        $this->cartController = new CartModel();
    }

    public function cart()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $this->cartController->getUserId($_SESSION['username']);
            if ($user_id){
                $product_id = $_POST['product_id'];
                $variation_id = $_POST['variation_id'];
                $quantity = $_POST['quantity'];
                if ($this->cartController->addToCart($user_id, $product_id, $variation_id, $quantity)) {
                    header("location: index.php?act=cart");
                } else {
                    echo "Lỗi to đầu";
                }
            } 
        }

        require_once('views/client/cart.php');
    }
}
