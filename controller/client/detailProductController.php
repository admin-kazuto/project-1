<?php
class DetailProductController
{
    public $detailProductController;
    public function __construct()
    {
        $this->detailProductController = new detailProductModel();
    }

    public function ProductDetailsInMenu($id)
    {
        $product = $this->detailProductController->getProductById($id);
        $priceVariation = $this->detailProductController->getAllPriceAndVariationName($id);


        require_once('views/client/ProductDetailsInMenu.php');
        $user_id = $this->detailProductController->getUserId($_SESSION['username']);
        if (isset($_POST['btn_buy'])) {
            if ($user_id) {
                $product_id = $_POST['product_id'];
                $variation_id = $_POST['variation_id'];
                $quantity = $_POST['quantity'];
                $unit_price = $_POST['price'];
                if ($this->detailProductController->addToCart($user_id, $product_id, $variation_id, $quantity, $unit_price)) {
                    header('location:?act=cart');
                } else {
                    echo "Lỗi to đầu";
                }
            }
        }
    }
}
