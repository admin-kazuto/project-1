<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .wrapper1 {
            max-width: 1200px;
            margin-left: 270px;
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

        table {
            width: 1200px;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td a button {
            background-color: #28a745;
            margin-right: 5px;
        }

        td a button:hover {
            background-color: #218838;
        }

        td a button:nth-child(2) {
            background-color: #dc3545;
        }

        td a button:nth-child(2):hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <?php require_once 'views/components/navbar.php'; ?>
    <div class="wrapper1">
        <h1>Quản Trị Danh Mục Sản Phẩm</h1>
        <p><a href="?act=insertcategory"><button>Thêm danh mục</button></a></p>
        <div>
            <table class="category">
                <tr>
                    <th>Mã DM</th>
                    <th>Tên DM</th>
                    <th>Mô tả DM</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php
                foreach ($allCategory as $key => $rows) {
                ?>
                    <tr>
                        <td><?= $rows['cate_id'] ?></td>
                        <td><?= $rows['cate_name'] ?></td>
                        <td><?= $rows['cate_description'] ?></td>
                        <td><a href="?act=updatecategory&id=<?= $rows['cate_id'] ?>"><button>Sửa</button></a></td>
                        <td><a href="?act=deletecategory&id=<?= $rows['cate_id'] ?>"><button>Xóa</button></a></td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>
</body>

</html>