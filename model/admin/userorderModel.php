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
}
