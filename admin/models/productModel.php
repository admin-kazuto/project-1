<?php
class productModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function getAllProduct()
    {
        $sql = "select * from products join category on products.cate_id=category.cate_id order by pro_id desc";
        return $this->conn->query($sql);
    }
    function insertProduct($name, $img, $price, $detail, $cate_id)
    {
        $sql = "insert into products value('$name','$img',$price,'$detail',$cate_id)";
        $stsm = $this->conn->prepare($sql);
        return $stsm->execute();
    }
    function findProductById($id)
    {
        $sql = "select * from products join category on products.cate_id=category.cate_id where pro_id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function getAllCategory()
    {
        $sql = "select * from category";
        return $this->conn->query($sql);
    }
    function updateProduct($id, $name, $img, $price, $detail, $cate_id)
    {
        if (empty($img)) {
            $sql = "update products set pro_name='$name',price=$price,detail='$detail',cate_id=$cate_id where pro_id=$id";
        } else {
            $sql = "update products set pro_name='$name',pro_img='$img',price=$price,detail='$detail',cate_id=$cate_id where pro_id=$id";
        }
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function deleteProduct($id)
    {
        $sql = "delete from products where pro_id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function checkCate()
    {
        $sql = "SELECT * FROM category";
        return $this->conn->query($sql);
    }
}
