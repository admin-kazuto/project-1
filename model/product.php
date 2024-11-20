<?php
class product{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function all(){
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data){
        $sql = "INSERT INTO product(product_name, description, product_price, product_image, product_status, product_quantity, category_id, discount_id) 
                VALUE (:product_name, :description, :product_price, :product_image, :product_status, :product_quantity, :category_id, :discount_id) ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
}
