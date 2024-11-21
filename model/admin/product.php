<?php
class product
{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function all()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insertProduct($data)
    {
        $sql = "INSERT INTO product(product_name, description, product_price, product_image, product_status, product_quantity, category_id, discount_id) 
        VALUES (:product_name, :description, :product_price, :product_image, :product_status, :product_quantity, :category_id, :discount_id)";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute($data);
            echo "Product inserted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function deleteProduct($product_id)
{
    $sql = "DELETE FROM product WHERE product_id = :product_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT); // Ràng buộc tham số
    $stmt->execute();
}

// UPDATE PRODUCT
public function getProductById($product_id)
{
    $sql = "SELECT * FROM product WHERE product_id = :product_id";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC); // Lấy thông tin sản phẩm theo ID
}

public function updateProduct($data)
    {
        $sql = "UPDATE product 
                SET product_name = :product_name, description = :description, product_price = :product_price, product_image = :product_image, product_status = :product_status, product_quantity = :product_quantity, category_id = :category_id 
                WHERE product_id = :product_id";

        $stmt = $this->conn->prepare($sql);

        try {
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            echo "Error updating product: " . $e->getMessage();
            return false;
        }
    }
}

