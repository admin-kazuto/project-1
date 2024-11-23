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
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function findDiscountbyID($id)
    {
        $sql = "SELECT * FROM discount WHERE discount_id = '$id'";
        return $this->conn->query($sql)->fetch();
    }
    // Hàm thêm discount
    function addDiscount($discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)
    {
        $query = "INSERT INTO discount (discount_code, discount_value, minimum_order, valid_from, valid_to, status, created_at)
                  VALUES ('$discount_code', $discount_value, $minimum_order, '$valid_from', '$valid_to', '$status', NOW())";
        return $this->conn->query($query);
    }

    // Hàm sửa discount
    function updateDiscount($discount_id, $discount_code, $discount_value, $minimum_order, $valid_from, $valid_to, $status)
    {
        $query = "UPDATE discount
                  SET discount_code = '$discount_code', discount_value = $discount_value, minimum_order = $minimum_order,
                      valid_from = '$valid_from', valid_to = '$valid_to', status = '$status'
                  WHERE discount_id = $discount_id";
        return $this->conn->query($query);
    }

    // Hàm xóa discount
    function deleteDiscount($discount_id)
    {
        $query = "DELETE FROM discount WHERE discount_id = $discount_id";
        return $this->conn->query($query);
    }
}
