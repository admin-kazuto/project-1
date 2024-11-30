<?php
class DetailProductController
{
    public $detailProductController;
    public function __construct() {
        $this->detailProductController = new detailProductModel();
    }

    public function ProductDetailsInMenu($id) {
        $product = $this -> detailProductController -> getProductById($id);
        $priceVariation = $this -> detailProductController -> getAllPriceAndVariationName($id);
        require_once('views/client/ProductDetailsInMenu.php');
    }
}
