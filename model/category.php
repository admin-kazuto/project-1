<?php
class category{

    public $conn = null;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function all(){

    $sql = "SELECT * FROM category";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

    }
}