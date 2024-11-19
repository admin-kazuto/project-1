<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }

        .wrapper1 {
            max-width: 600px;
            margin: 20px;
            margin-left: 560px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .insert {
            display: flex;
            flex-direction: column;
        }

        .insert p {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .insert input[type="text"],
        .insert input[type="file"],
        .insert select {
            width: 600px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .insert select {
            appearance: none;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php require_once 'views/components/navbar.php'; ?>
    <div class="wrapper1">
        <h2>Thêm sản phẩm mới</h2>
        <form action="" method="post" enctype="multipart/form-data" class="insert">
            <p>Tên sản phẩm</p><input type="text" name="name" id="">
            <p>Ảnh sản phẩm</p><input type="file" name="img" id="">
            <p>Giá sản phẩm</p><input type="text" name="price" id="">
            <p>Chi tiết sản phẩm</p><input type="text" name="detail" id="">
            <p>Danh mục sản phẩm</p>
            <select name="cate" id="">
                <?php
                foreach ($cateName as $values) {
                    echo "<option value='" . $values["cate_id"] . "'>" . $values["cate_name"] . "</option>";
                }
                ?>
            </select> <br>
            <input type="submit" name="btn_insert" value="Thêm sản phẩm" class="btn" id="">
        </form>
    </div>
</body>

</html>