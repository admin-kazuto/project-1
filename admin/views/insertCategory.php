<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .wrapper1 {
            max-width: 600px;
            margin: 20px;
            margin-left: 560px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php require_once 'views/components/navbar.php'; ?>
    <div class="wrapper1">
        <h1>Thêm danh mục</h1>
        <form action="?act=insertcategory" method="post">
            <label for="cate_name">Tên danh mục:</label>
            <input type="text" id="cate_name" name="cate_name" required>
            <br>
            <label for="cate_description">Mô tả danh mục:</label>
            <textarea id="cate_description" name="cate_description" required></textarea>
            <br>
            <button type="submit" name="btn_insert">Thêm danh mục</button>
        </form>
    </div>
</body>

</html>