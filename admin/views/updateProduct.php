<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sản phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .wrapper1 {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
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

        .insert img {
            display: block;
            margin-bottom: 10px;
        }

        .insert select {
            appearance: none;
            padding: 10px;
            background-color: #fff;
            background-image: linear-gradient(45deg, transparent 50%, #ccc 50%),
                linear-gradient(135deg, #ccc 50%, transparent 50%);
            background-position: calc(100% - 20px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px);
            background-size: 5px 5px, 5px 5px;
            background-repeat: no-repeat;
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
        <h2>Sửa sản phẩm mới</h2>
        <form action="" method="post" enctype="multipart/form-data" class="insert">
            <input type="hidden" name="id" value="<?= $oneProduct['pro_id'] ?>" name="" id="">
            <p>Tên sản phẩm</p><input type="text" name="name" id="" value="<?= $oneProduct['pro_name'] ?>">
            <p>Ảnh sản phẩm</p>
            <img src="../assets/images/<?= $oneProduct['pro_img'] ?>" alt="">
            <input type="file" name="img" id="">
            <p>Giá sản phẩm</p><input type="text" name="price" id="" value="<?= $oneProduct['price'] ?>">
            <p>Chi tiết sản phẩm</p><input type="text" name="detail" id="" value="<?= $oneProduct['detail'] ?>">
            <p>Danh mục sản phẩm</p>
            <select name="cate" id="">
                <?php
                echo "<option value='" . $oneProduct["cate_id"] . "'>" . $oneProduct["cate_name"] . "</option>";
                foreach ($cateName as $values) {
                    if ($values['cate_id'] == $oneProduct['cate_id']) {
                        continue;
                    } else {
                        echo "<option value='" . $values["cate_id"] . "'>" . $values["cate_name"] . "</option>";
                    }
                }
                ?>
            </select> <br>
            <input type="submit" name="btn_update" value="Sửa sản phẩm" class="btn" id="">
        </form>
    </div>
</body>

</html>