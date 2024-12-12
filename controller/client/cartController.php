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
        $getOrderID = $this->cartController->getOrderID($user_id);
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
            $order_id = $this->cartController->getOrderID($user_id);
            $order_id = $order_id['order_id'];
            $quantity = $_POST['quantity'];
            $variation_id = $_POST['variation_id'];
            $product_id = $_POST['product_id'];
            $unit_price = $_POST['unit_pride'];
            if ($this->cartController->insertUserOrder($user_id, $total)) {
                if($this->cartController->insertOrderDetail($order_id, $product_id, $variation_id, $quantity, $unit_price,$total)){
                    echo "<script>alert('Đã đặt hàng thành công'); window.location.href='?act=/';</script>";
                    return $this->cartController->deleteAllCart($user_id);
                }
            }

        }
    }

    public function getCartTotal($user_id)
    {
        $total = $this->cartController->getCartTotal($user_id);
        return $total;
    }
}
