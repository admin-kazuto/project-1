<?php

class productController
{

    public function list()
    {
        $data = (new product)->all();
        view('admin/list-product', ['data' => $data]);
    }

    public function add()
    {
        $category = (new category)->all();
        view('admin/form-add-product', ['category' => $category]);
    }

    public function storeProduct()
    {
        // Lọc dữ liệu từ $_POST
        $product_image = $_FILES['product_image']['name'];
        $tmp = $_FILES['product_image']['tmp_name'];
        move_uploaded_file($tmp, 'assets/images/' . $product_image);
        $data = [
            ':product_name' => $_POST['product_name'] ?? null,
            ':description' => $_POST['description'] ?? null,
            ':product_image' => $product_image ?? null,
            ':product_status' => $_POST['product_status'] ?? null,
            ':product_totalQuantity' => $_POST['product_totalQuantity'] ?? null,
            ':category_id' => $_POST['category_id'] ?? null,
        ];

        // Kiểm tra giá trị bắt buộc
        if (empty($data[':product_name'])) {
            echo "Product name and price are required!";
            return;
        }

        // Gọi hàm insertProduct
        try {
            (new product)->insertProduct($data);
            header("location: index.php?act=listproduct");
            die;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function deleteproduct()
    {
        // Kiểm tra xem product_id có tồn tại và hợp lệ không
        if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
            $product_id = intval($_GET['product_id']); // Đảm bảo product_id là số nguyên
            $productModel = new Product();

            try {
                $productModel->deleteProduct($product_id); // Gọi hàm xóa trong model
                header("location:?act=listproduct");
                exit(); // Dừng script sau chuyển hướng
            } catch (PDOException $e) {
                // Nếu có lỗi, hiển thị thông báo (hoặc ghi log lỗi)
                echo "Error deleting product: " . $e->getMessage();
            }
        } else {
            echo "Invalid product ID."; // Thông báo lỗi nếu product_id không hợp lệ
        }
    }
    public function editProduct()
    {
        $category = (new category)->all();
        $product_id = $_GET['product_id'];
        $productModel = new Product();

        // Lấy sản phẩm cần chỉnh sửa (giả sử bạn đã có hàm getProductById)
        $product = $productModel->getProductById($product_id);

        // Hiển thị form chỉnh sửa
        view('admin/form-edit-product', ['product' => $product, 'category' => $category]);
    }

    public function updateProduct()
    {
        if (empty($_FILES['product_image']['name'])) {
            $data = [
                ':product_id' => $_POST['product_id'],
                ':product_name' => $_POST['product_name'],
                ':description' => $_POST['description'],
                ':product_status' => $_POST['product_status'],
                ':product_totalQuantity' => $_POST['product_totalQuantity'],
                ':category_id' => $_POST['category_id']
            ];
        } else {
            $product_image = $_FILES['product_image']['name'];
            $tmp = $_FILES['product_image']['tmp_name'];
            move_uploaded_file($tmp, 'assets/images/' . $product_image);
            $data = [
                ':product_id' => $_POST['product_id'],
                ':product_name' => $_POST['product_name'],
                ':description' => $_POST['description'],
                ':product_image' => $product_image,
                ':product_status' => $_POST['product_status'],
                ':product_totalQuantity' => $_POST['product_totalQuantity'],
                ':category_id' => $_POST['category_id']
            ];
        }


        $productModel = new Product();
        $result = $productModel->updateProduct($data);

        if ($result) {
            header("location:?act=listproduct");
        } else {
            echo "Error updating product.";
        }
    }
}
