<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí tài khoản</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        button {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .delete button {
            background-color: #e74c3c;
        }

        .delete button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .unban button {
            background-color: #27ae60;
        }

        .unban button:hover {
            background-color: #1e8449;
            transform: scale(1.05);
        }

        .ban button {
            background-color: #f39c12;
        }

        .ban button:hover {
            background-color: #d35400;
            transform: scale(1.05);
        }

        button:disabled {
            background-color: #bdc3c7;
            cursor: not-allowed;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Quản lý tài khoản</h2>
                    <a href="?act=insertaccount"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="fas fa-plus"></i> Thêm tài khoản
                        </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 1%">ID</th>
                                <th scope="col" style="width: 20%">Tên tài khoản</th>
                                <th scope="col" style="width: 25%">Email</th>
                                <th scope="col" style="width: 20%">Số điện thoại</th>
                                <th scope="col" style="width: 10%">Vai trò</th>
                                <th scope="col" style="width: 10%">Sửa trạng thái</th>
                                <th scope="col" style="width: 10%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                        <td>
                                            <?php if ($rows['status'] == 'Mở') { ?>
                                                <a class="ban" href="?act=banAccount&id=<?= $rows['user_id'] ?>" onclick="return confirm('Bạn có chắc muốn khóa tài khoản này?')">
                                                    <button>Khóa</button>
                                                </a>
                                            <?php } else { ?>
                                                <a class="unban" href="?act=unbanAccount&id=<?= $rows['user_id'] ?>" onclick="return confirm('Bạn có chắc muốn mở khóa tài khoản này?')">
                                                    <button>Mở</button>
                                                </a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a class="delete" href="?act=deleteaccount&id=<?= $rows['user_id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa tài khoản này?')">
                                                <button>Xóa</button>
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "Không có tài khoản nào.";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

    </div>
    <?php require_once "component/admin/scripts.php" ?>
    <script src="assets/js/adminlite.js"></script>
</body>

</html>