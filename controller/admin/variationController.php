<?php

class variationController
{
    public $variationModel;

    function __construct()
    {
        $this->variationModel = new variationModel();
    }
    function listVariation()
    {
        $allVariations = $this->variationModel->getAllVariation();
        require_once 'views/admin/listVariation.php';
    }
    function insertVariation()
    {
        $allProducts = $this->variationModel->getAllProducts();
        require_once 'views/admin/insertVariation.php';
        if (isset($_POST['btn_insert'])) {
            $product_id = $_POST['product_id'];
            $variation_name = $_POST['variation_name'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $variation_quantity = $_POST['variation_quantity'];
            $discount_id = $_POST['discount_id'];

            if ($this->variationModel->insertVariation($product_id, $variation_name, $price, $status, $variation_quantity, $discount_id)) {
                header('location:?act=listvariation');
            } else {
                echo "Lỗi";
            }
        }
    }
    function updateVariation($variation_id)
    {
        $oneVariation = $this->variationModel->findVariationbyID($variation_id);
        $allProducts = $this->variationModel->getAllProducts();
        require_once 'views/admin/updateVariation.php';
        if (isset($_POST['btn_update'])) {
            $product_id = $_POST['product_id'];
            $variation_name = $_POST['variation_name'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $variation_quantity = $_POST['variation_quantity'];
            $discount_id = $_POST['discount_id'];

            if ($this->variationModel->updateVariation($variation_id, $product_id, $variation_name, $price, $status, $variation_quantity, $discount_id)) {
                header('location:?act=listvariation');
            } else {
                echo "Lỗi";
            }
        }
    }
    function deleteVariation($variation_id)
    {
        if ($this->variationModel->deleteVariation($variation_id)) {
            echo "<script>
                alert('Xóa biến thể thành công');
                window.location.href = '?act=listvariation';
              </script>";
        } else {
            echo "<script>
                alert('Xóa biến thể thất bại');
              </script>";
        }
    }
}
