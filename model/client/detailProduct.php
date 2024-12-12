<?php
class detailProductModel
{
    public $detailProductModel;
    public function __construct()
    {
        $this->detailProductModel = connectDB();
    }

    public function getProductById($id)
    {
        return $this->detailProductModel->query("SELECT product.product_id, product.product_name, product.description, product.product_image, product.category_id, product_variation.variation_id, product_variation.variation_name, product_variation.price FROM product JOIN product_variation ON product.product_id = product_variation.product_id WHERE product.product_id = $id")->fetch();
    }

    public function getAllPriceAndVariationName($id)
    {
        return $this->detailProductModel->query("SELECT variation_id,price ,variation_name FROM product_variation WHERE product_variation.product_id = $id")->fetchAll();
    }


    // public function addToCart($user_id, $product_id, $variation_id, $quantity, $unit_price)
    // {
    //     $check = $this->detailProductModel->query("
    //  SELECT * FROM cart 
    //  WHERE variation_id = $variation_id 
    //  AND user_id = $user_id 
    //  AND product_id = $product_id 
    //  AND unit_price = $unit_price")->fetchAll();
    //     if ($check) {
    //         // Lấy số lượng hiện tại của sản phẩm trong giỏ hàng
    //         $current_quantity = $this->detailProductModel->query("
    //          SELECT quantity FROM cart 
    //          WHERE variation_id = $variation_id 
    //          AND user_id = $user_id 
    //          AND product_id = $product_id 
    //          AND unit_price = $unit_price
    //      ")->fetch();

    //         $current_quantity_result = $current_quantity['quantity'];
    //         $new_quantity = intval($current_quantity_result) + intval($quantity);

    //         // Cập nhật số lượng sản phẩm trong giỏ hàng
    //         return $this->detailProductModel->query("
    //          UPDATE cart 
    //          SET quantity = $new_quantity 
    //          WHERE user_id = $user_id 
    //          AND product_id = $product_id 
    //          AND variation_id = $variation_id 
    //          AND unit_price = $unit_price
    //      ")->execute();
    //     } else {
    //         // Thêm sản phẩm mới vào giỏ hàng
    //         return $this->detailProductModel->query("
    //          INSERT INTO cart (user_id, product_id, variation_id, quantity, unit_price) 
    //          VALUES ($user_id, $product_id, $variation_id, $quantity, $unit_price)
    //      ")->execute();
    //     }
    // }


    public function addToCart($user_id, $product_id, $variation_id, $quantity, $unit_price)
    {
        // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng
        $checkQuery = $this->detailProductModel->prepare("
            SELECT quantity 
            FROM cart 
            WHERE user_id = :user_id 
            AND product_id = :product_id 
            AND variation_id = :variation_id 
            AND unit_price = :unit_price
        ");
        $checkQuery->execute([
            ':user_id' => $user_id,
            ':product_id' => $product_id,
            ':variation_id' => $variation_id,
            ':unit_price' => $unit_price,
        ]);
    
        $existingCart = $checkQuery->fetch();
    
        if ($existingCart) {
            // Nếu đã tồn tại, cập nhật số lượng
            $newQuantity = intval($existingCart['quantity']) + intval($quantity);
            $updateQuery = $this->detailProductModel->prepare("
                UPDATE cart 
                SET quantity = :quantity 
                WHERE user_id = :user_id 
                AND product_id = :product_id 
                AND variation_id = :variation_id 
                AND unit_price = :unit_price
            ");
            return $updateQuery->execute([
                ':quantity' => $newQuantity,
                ':user_id' => $user_id,
                ':product_id' => $product_id,
                ':variation_id' => $variation_id,
                ':unit_price' => $unit_price,
            ]);
        } else {
            // Nếu chưa tồn tại, thêm mới
            $insertQuery = $this->detailProductModel->prepare("
                INSERT INTO cart (user_id, product_id, variation_id, quantity, unit_price) 
                VALUES (:user_id, :product_id, :variation_id, :quantity, :unit_price)
            ");
            return $insertQuery->execute([
                ':user_id' => $user_id,
                ':product_id' => $product_id,
                ':variation_id' => $variation_id,
                ':quantity' => $quantity,
                ':unit_price' => $unit_price,
            ]);
        }
    }

    public function getUserId($userName)
    {
        return $this->detailProductModel->query("SELECT user_id FROM account WHERE username = '$userName'")->fetchColumn();
    }

    public function getCartByVariationId($variation_id)
    {
        return $this->detailProductModel->query("SELECT * FROM cart WHERE variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getCart($user_id, $variation_id)
    {
        return $this->detailProductModel->query("SELECT * FROM cart JOIN product ON cart.product_id = product.product_id JOIN product_variation ON product_variation.product_id = product.product_id WHERE cart.user_id = $user_id AND product_variation.variation_id = $variation_id")->fetchAll(PDO::FETCH_ASSOC);
    }
}
