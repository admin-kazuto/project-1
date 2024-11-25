<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 0 auto;
        }

        form div {
            margin-bottom: 15px;
        }

        form p {
            margin: 0;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
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

        h1 {
            text-align: center;
            color: #333;
            margin-block: 30px;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <h1>Cập nhật danh mục</h1>
            <form action="index.php?act=update-category" method="post" enctype="multipart/form-data" onsubmit="return validateCategoryForm()">
                <div>
                    <input type="hidden" name="category_id" value="<?= $category['category_id']  ?>">
                </div>
                <div>
                    <p>Tên danh mục</p>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $category['category_name'] ?>">
                    <div class="error-message" id="error-category_name" style="color: red; margin-top: 5px;"></div>
                </div>
                <div>
                    <button type="submit">Cập nhật danh mục</button>
                </div>
                <div>
                    <div style="margin-top: 20px">
                        <a href="?act=listcategory" style="color: #007bff; text-decoration: none;">&lt; Quay lại danh sách</a>
                    </div>
                </div>
            </form>
        </main>
        <?php require_once "component/admin/footer.php" ?>
    </div>
    <?php require_once "component/admin/scripts.php" ?>
    <script>
        function validateCategoryForm() {
            const categoryName = document.getElementById('category_name').value.trim();
            const errorCategoryName = document.getElementById('error-category_name');

            errorCategoryName.textContent = '';

            if (categoryName === '') {
                errorCategoryName.textContent = 'Vui lòng nhập tên danh mục.';
                return false;
            }

            return true;
        }
    </script>
</body>

</html>