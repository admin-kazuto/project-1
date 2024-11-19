<?php
class categoryModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    function getAllCategory()
    {
        $sql = "select * from category";
        return $this->conn->query($sql);
    }
    function insertCategory($name, $des)
    {
        $sql = "insert into category value(null,'$name','$des')";
        $stsm = $this->conn->prepare($sql);
        return $stsm->execute();
    }
    function findCategoryById($id)
    {
        $sql = "select * from category where cate_id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function updateCategory($id, $name, $des)
    {
        $sql = "update category set cate_name='$name',cate_description='$des' where cate_id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function deleteCategory($id)
    {
        $sql = "delete from category where cate_id=$id";
        $stmt = $this->conn->prepare($sql);
        echo "<script>alert('Xóa danh mục thành công')</script>";
        return $stmt->execute();
    }
}
