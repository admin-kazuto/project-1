<?php 
    class descount{

        public $conn = null;
        public function __construct()
        {
            $this-> conn == connectDB();
        }
        public function all(){
            $sql = "SELECT*FROM descount";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>