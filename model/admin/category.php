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
    public function delete($category_id){
        $sql = "DELETE FROM category WHERE category_id = $category_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}