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
        $user_id = $this->cartController->getUserId($_SESSION['username']);
        $cart  = $this->cartController->getCart($user_id);
        $total = $this->cartController->getCartTotal($user_id);
        $totalQuantityProduct = $this->cartController->getQuantityProduct($user_id);
        require_once('views/client/cart.php');
        if (isset($_POST['remove'])) {
            $cart_id = $_POST['cart_id'];
            $stmt = $this->cartController->deleteCart($cart_id);
            if ($stmt) {
                header('Location:?act=cart');
                exit();
            } else {
                echo "lỗi to đầu";
            }
        }

        if (isset($_POST['btn_checkout'])) {
            $user_id = $_POST['user_id'];
            $total = $_POST['total'];
            // if ($this->cartController->insertUserOrder($user_id, $total)) {
            //     echo "<script>alert('Thanh toán thành công')</Script>";
            //     header('Location:?act=/');
            //     return $this->cartController->deleteAllCart($user_id);
            // }

            if ($this->cartController->insertUserOrder($user_id, $total)) {
                echo "<script>alert('Thanh toán thành công'); window.location.href='?act=/';</script>";
                exit();
            }
        }
    }

    public function getCartTotal($user_id)
    {
        $total = $this->cartController->getCartTotal($user_id);
        return $total;
    }
}
