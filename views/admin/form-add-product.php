<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        /* Toàn bộ form */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Tiêu đề */
        h1 {
            text-align: center;
            margin-block: 20px;
            color: #333;
        }

        /* Các ô nhập liệu và textarea */
        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        /* Nút bấm */
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }


        /* Nhãn */
        p {
            margin: 0 0 5px;
            font-size: 14px;
            color: #555;
        }

        /* Tùy chỉnh danh sách thả xuống */
        select {
            height: 40px;
        }

        /* Định dạng khối chứa từng trường */
        div {
            margin-bottom: 15px;
        }
    </style>

    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div>
                <h1>Thêm sản phẩm</h1>
                <form action="?act=storeproduct" method="post" enctype="multipart/form-data" onsubmit="return validateProductForm()">
                    <div>
                        <p>Tên sản phẩm</p>
                        <input type="text" id="product_name" name="product_name">
                        <div class="error-message" id="error-product_name" style="color: red; margin-top: 5px;"></div>
                    </div>

                    <div>
                        <p>Mô tả sản phẩm</p>
                        <textarea id="description" style="height: 100px" name="description"></textarea>
                        <div class="error-message" id="error-description" style="color: red; margin-top: 5px;"></div>
                    </div>
                    <br>

                    <div>
                        <p>Ảnh sản phẩm</p>
                        <input type="file" id="product_image" name="product_image">
                        <div class="error-message" id="error-product_image" style="color: red; margin-top: 5px;"></div>
                    </div>
                    <br>

                    <div>
                        <p>Trạng thái</p>
                        <select id="product_status" name="product_status">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                            <option value="delete">Delete</option>
                        </select>
                        <div class="error-message" id="error-product_status" style="color: red; margin-top: 5px;"></div>
                    </div>
                    <br>

                    <div>
                        <p>Số lượng sản phẩm</p>
                        <input type="number" id="product_totalQuantity" name="product_totalQuantity" min="1">
                        <div class="error-message" id="error-product_totalQuantity" style="color: red; margin-top: 5px;"></div>
                    </div>

                    <div>
                        <p>Danh mục</p>
                        <select id="category_id" name="category_id">
                            <?php foreach ($category as $categorys) : ?>
                                <option value="<?= $categorys["category_id"]  ?>">
                                    <?= $categorys["category_name"]  ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <div class="error-message" id="error-category_id" style="color: red; margin-top: 5px;"></div>
                    </div>
                    <br>
                    <br>

                    <div>
                        <button type="submit">Thêm sản phẩm</button>
                    </div>
                    <div style="margin-top: 20px">
                        <a href="?act=listproduct" style="color: #007bff; text-decoration: none;">&lt; Quay lại danh sách</a>
                    </div>
                </form>
            </div>


        </main>
        <?php require_once "component/admin/footer.php" ?>
    </div>
    <?php require_once "component/admin/scripts.php" ?>
    <script>
        function validateProductForm() {
            const productName = document.getElementById('product_name').value.trim();
            const description = document.getElementById('description').value.trim();
            const productImage = document.getElementById('product_image').value.trim();
            const productStatus = document.getElementById('product_status').value.trim();
            const productTotalQuantity = document.getElementById('product_totalQuantity').value.trim();
            const categoryId = document.getElementById('category_id').value.trim();

            let isValid = true;

            document.querySelectorAll('.error-message').forEach(el => (el.textContent = ''));

            if (productName === '') {
                document.getElementById('error-product_name').textContent = 'Vui lòng nhập tên sản phẩm.';
                isValid = false;
            }

            if (description === '') {
                document.getElementById('error-description').textContent = 'Vui lòng nhập mô tả sản phẩm.';
                isValid = false;
            }

            if (productImage === '') {
                document.getElementById('error-product_image').textContent = 'Vui lòng chọn một ảnh sản phẩm.';
                isValid = false;
            }

            if (productStatus === '') {
                document.getElementById('error-product_status').textContent = 'Vui lòng chọn trạng thái sản phẩm.';
                isValid = false;
            }

            if (productTotalQuantity === '') {
                document.getElementById('error-product_totalQuantity').textContent = 'Vui lòng nhập số lượng sản phẩm.';
                isValid = false;
            } else if (productTotalQuantity <= 0) {
                document.getElementById('error-product_totalQuantity').textContent = 'Số lượng sản phẩm phải lớn hơn 0.';
                isValid = false;
            }

            if (categoryId === '') {
                document.getElementById('error-category_id').textContent = 'Vui lòng chọn danh mục sản phẩm.';
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>