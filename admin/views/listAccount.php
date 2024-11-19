<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
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

        .ban button {
            background-color: red;
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
    <?php
    // require_once 'views/components/navbar.php'; 
    echo $_SESSION['role']['role'];
    ?>
    <div class="wrapper1">
        <h1>Quản Trị Tài khoản</h1>
        <p><a href="?act=insertaccount"><button>Thêm tài khoản</button></a></p>
        <div>
            <table class="account">
                <tr>
                    <th>Mã tài khoản</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Quyền hạn</th>
                    <th>Sửa trạng thái</th>
                    <th>Xóa</th>
                </tr>
                <?php
                // Đảm bảo $allAccount là mảng
                if (isset($allAccount) && is_array($allAccount)) {
                    foreach ($allAccount as $key => $rows) {
                ?>
                        <tr>
                            <td><?= $rows['user_id'] ?></td>
                            <td><?= $rows['username'] ?></td>
                            <td><?= $rows['email'] ?></td>
                            <td><?= $rows['phone'] ?></td>
                            <td><?= $rows['role'] ?></td>
                            <td><?php if ($rows['status'] == 'Mở') { ?>
                                    <a class="ban" href="?act=banAccount&id=<?= $rows['user_id'] ?>"><button>Đóng</button></a>
                                <?php } else { ?>
                                    <a href="?act=unbanAccount&id=<?= $rows['user_id'] ?>"><button>Mở</button></a>
                                <?php } ?>
                            </td>
                            <td><a href="?act=deleteaccount&id=<?= $rows['user_id'] ?>"><button>Xóa</button></a></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "Không có tài khoản nào.";
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>