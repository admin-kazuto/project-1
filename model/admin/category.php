<?php
class category
{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function all()
    {

        $sql = "SELECT * FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function delete($category_id)
    {
        $sql = "DELETE FROM category WHERE category_id = $category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function insertCategory($data)
    {
        $sql = "INSERT INTO category(category_name) VALUES (:category_name)";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute($data);
            echo "Product inserted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getCategoryById($category_id)
    {
        $sql = "SELECT * FROM category WHERE category_id = :category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Lấy thông tin sản phẩm theo ID
    }
    public function updateCategory($data){
        $sql = "UPDATE category 
                SET category_name = :category_name WHERE category_id = :category_id ";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute($data);
            return true;
        } catch (PDOException $e) {
            echo "Error updating category: " . $e->getMessage();
            return false;
        }
    }
}
