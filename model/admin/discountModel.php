<?php
class DiscountModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
    function getAllDiscount()
    {
        $sql = "SELECT * FROM discount";
        return $this->conn->query($sql)->fetchAll();
    }
    function findDiscountbyID($id)
    {
        $sql = "SELECT * FROM discount WHERE discount_id = '$id'";
        return $this->conn->query($sql)->fetch();
    }
    // Hàm thêm discount
    function addDiscount($discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)
    {
        $sql = "INSERT INTO discount (discount_code, discount_value, minimum_order, valid_from, valid_to, status, created_at)
                  VALUES ('$discount_code', $discount_value, $minimum_order, '$valid_from', '$valid_to', '$status', NOW())";
        return $this->conn->query($sql);
    }

    // Hàm sửa discount
    function updateDiscount($discount_id, $discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)
    {
        $sql = "UPDATE discount
                  SET discount_code = '$discount_code', discount_value = $discount_value, minimum_order = $minimum_order,
                      valid_from = '$valid_from', valid_to = '$valid_to', status = '$status'
                  WHERE discount_id = $discount_id";
        return $this->conn->query($sql);
    }

    // Hàm xóa discount
    function deleteDiscount($discount_id)
    {
        $sql = "DELETE FROM discount WHERE discount_id = $discount_id";
        return $this->conn->query($sql);
    }
}
