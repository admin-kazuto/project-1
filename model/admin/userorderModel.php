<?php
class userorderModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    function getAlluserorder()
    {
        $sql = "SELECT u.*, a.username
            FROM userorder u
            LEFT JOIN account a ON u.user_id = a.user_id";
        return $this->conn->query($sql)->fetchAll();
    }
    function getUserorderById($order_id)
    {
        $sql = "SELECT u.*, a.username
            FROM userorder u
            LEFT JOIN account a ON u.user_id = a.user_id
            WHERE u.order_id = '$order_id'";
        return $this->conn->query($sql)->fetchAll();
    }
    function getOrderDetail($order_id)
    {
        $sql = "SELECT 
                ud.*, 
                p.product_name, 
                pv.variation_name
            FROM 
                userorder_details ud
            LEFT JOIN 
                product p ON ud.product_id = p.product_id
            LEFT JOIN 
                product_variation pv ON ud.variation_id = pv.variation_id
            WHERE 
            ud.order_id = '$order_id'";
        return $this->conn->query($sql)->fetchAll();
    }
    function updateStatus($id, $status)
    {
        $sql = "UPDATE `userorder` SET `order_status` = '$status' WHERE `order_id` = $id";
        $this->conn->query($sql);
    }

}
