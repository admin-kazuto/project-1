<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mã Giảm Giá</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-block: 30px;
        }

        form {
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
            width: 600px;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="datetime-local"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 0;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="datetime-local"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 0;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <?php require_once "component/admin/header.php" ?>
            <?php require_once "component/admin/sidebar.php" ?>
            <main class="app-main">
                <div>
                    <h3>Thêm Mã Giảm Giá</h3>
                    <form method="post" onsubmit="return validateDiscountForm()">
                        <div>
                            <label for="discount_code">Mã Giảm Giá:</label>
                            <input type="text" id="discount_code" name="discount_code">
                            <div class="error-message" id="error-discount_code" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <label for="discount_value">Phần Trăm Giảm Giá (%):</label>
                            <input type="number" id="discount_value" name="discount_value" min="1" max="100">
                            <div class="error-message" id="error-discount_value" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <label for="minimum_order">Giá Trị Tối Thiểu Đơn Hàng:</label>
                            <input type="number" id="minimum_order" name="minimum_order" min="0">
                            <div class="error-message" id="error-minimum_order" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <label for="valid_from">Ngày Bắt Đầu:</label>
                            <input type="datetime-local" id="valid_from" name="valid_from">
                            <div class="error-message" id="error-valid_from" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <label for="valid_to">Ngày Hết Hạn:</label>
                            <input type="datetime-local" id="valid_to" name="valid_to">
                            <div class="error-message" id="error-valid_to" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <label for="status">Trạng Thái:</label>
                            <select id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                            <div class="error-message" id="error-status" style="color: red; margin-top: 5px;"></div>
                        </div>

                        <div>
                            <button type="submit" name="btn_insert">Thêm</button>
                        </div>

                        <div style="margin-top: 20px">
                            <a href="?act=listdiscount" style="color: #007bff; text-decoration: none;">&lt; Quay lại danh sách</a>
                        </div>
                    </form>

                </div>
                <?php require_once "component/admin/footer.php" ?>
        </div>
        <?php require_once "component/admin/scripts.php" ?>
    </body>
    <script>
        function validateDiscountForm() {
            const discountCode = document.getElementById('discount_code').value.trim();
            const discountValue = document.getElementById('discount_value').value.trim();
            const minimumOrder = document.getElementById('minimum_order').value.trim();
            const validFrom = document.getElementById('valid_from').value;
            const validTo = document.getElementById('valid_to').value;
            const status = document.getElementById('status').value;

            let isValid = true;

            document.querySelectorAll('.error-message').forEach(el => (el.textContent = ''));

            if (discountCode === '') {
                document.getElementById('error-discount_code').textContent = 'Vui lòng nhập mã giảm giá.';
                isValid = false;
            }

            if (discountValue === '') {
                document.getElementById('error-discount_value').textContent = 'Vui lòng nhập phần trăm giảm giá.';
                isValid = false;
            } else if (discountValue < 1 || discountValue > 100) {
                document.getElementById('error-discount_value').textContent = 'Phần trăm giảm giá phải từ 1 đến 100.';
                isValid = false;
            }

            if (minimumOrder === '') {
                document.getElementById('error-minimum_order').textContent = 'Vui lòng nhập giá trị tối thiểu của đơn hàng.';
                isValid = false;
            } else if (minimumOrder < 0) {
                document.getElementById('error-minimum_order').textContent = 'Giá trị tối thiểu phải lớn hơn hoặc bằng 0.';
                isValid = false;
            }

            if (validFrom === '') {
                document.getElementById('error-valid_from').textContent = 'Vui lòng chọn ngày bắt đầu.';
                isValid = false;
            }

            if (validTo === '') {
                document.getElementById('error-valid_to').textContent = 'Vui lòng chọn ngày hết hạn.';
                isValid = false;
            } else if (validFrom && validTo && new Date(validTo) <= new Date(validFrom)) {
                document.getElementById('error-valid_to').textContent = 'Ngày hết hạn phải sau ngày bắt đầu.';
                isValid = false;
            }

            if (status === '') {
                document.getElementById('error-status').textContent = 'Vui lòng chọn trạng thái.';
                isValid = false;
            }

            return isValid;
        }
    </script>
    <script src="assets/js/adminlite.js"></script>

</html>