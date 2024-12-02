<?php

class userprofileModel
{
    public $conn;
    public function __construct()
    {
        $this->conn =  connectDB();
    }
    function userprofile($username)
    {
        $sql = "SELECT * FROM account where username = '$username'";
        return $this->conn->query($sql)->fetch();
    }
    function checkcurrentPass($username, $password)
    {
        $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
        return $this->conn->query($sql)->rowCount();
    }
    function changepass($username, $newpassword)
    {
        $sql = "UPDATE account SET password = '$newpassword' WHERE username = '$username'";
        return $this->conn->query($sql)->execute();
    }
    function orderhistory($user_id)
    {
        $sql = "SELECT u.*, a.username
            FROM userorder u
            LEFT JOIN account a ON u.user_id = a.user_id
            WHERE u.user_id = '$user_id'";
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
    function updateprofile($username, $fullname, $address, $phone)
    {
        $sql = "UPDATE account SET Name = '$fullname', adress = '$address', phone = '$phone' WHERE username = '$username'";
        return $this->conn->query($sql)->execute();
    }
    function getUserorderById($order_id)
    {
        $sql = "SELECT u.*, a.username
            FROM userorder u
            LEFT JOIN account a ON u.user_id = a.user_id
            WHERE u.order_id = '$order_id'";
        return $this->conn->query($sql)->fetchAll();
    }
    function getidbyusername($username)
    {
        $sql = "SELECT user_id FROM account WHERE username = '$username'";
        return $this->conn->query($sql)->fetchColumn();
    }
    function cancelorder($order_id)
    {
        $sql = "UPDATE userorder SET order_status = 'canceled' WHERE order_id = '$order_id'";
        return $this->conn->query($sql);
    }
}
