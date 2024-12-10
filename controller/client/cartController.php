<?php
class CartController
{
    public $cartController;
    public function __construct()
    {
        $this->cartController = new CartModel();
    }

    public function cart() {
        $user_id = $this->cartController->getUserId($_SESSION['username']);
        $cart  = $this->cartController-> getCart($user_id);
        $total = $this->cartController->getCartTotal($user_id);
        require_once('views/client/cart.php');
    }

    public function getCartTotal($user_id) {
        $total = $this->cartController->getCartTotal($user_id);
        return $total;
    }
}
