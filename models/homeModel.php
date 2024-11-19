<?php
class homeModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function allProduct()
    {
        $sql = "select * from products order by pro_id desc";
        return $this->conn->query($sql);
    }
    function top4Product()
    {
        $sql = "select * from products order by pro_id desc limit 4";
        return $this->conn->query($sql);
    }
    function findProductById($id)
    {
        $sql = "select * from products where pro_id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function dienthoai()
    {
        $sql = "select * from products where cate_id='1' order by pro_id desc limit 4";
        return $this->conn->query($sql);
    }
    function maytinh()
    {
        $sql = "select * from products where cate_id='2' order by pro_id desc limit 4";
        return $this->conn->query($sql);
    }
    function tivi()
    {
        $sql = "select * from products where cate_id='3' order by pro_id desc limit 4";
        return $this->conn->query($sql);
    }
}
