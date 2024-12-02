<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí đơn hàng</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        .container-fluid {
            padding-top: 30px;
        }

        .order-management-header {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
            font-weight: bold;
        }

        .filter-section {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .order-card {
            background-color: #ffffff;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .order-card:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .order-card .card-body {
            padding: 15px;
        }

        .order-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pagination {
            margin-top: 20px;
        }

        .modal-lg {
            max-width: 900px;
        }

        .order-detail-section {
            background-color: #f1f3f5;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .order-details {
                flex-direction: column;
                align-items: flex-start;
            }

            .order-details>* {
                margin-bottom: 10px;
            }
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
                    <h2>Quản lí đơn hàng</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 10%">ID</th>
                                <th scope="col" style="width: 15%">Tài khoản</th>
                                <th scope="col" style="width: 15%">Ngày đặt </th>
                                <th scope="col" style="width: 20%">Trạng thái</th>
                                <th scope="col" style="width: 20%">Tổng giá trị</th>
                                <th scope="col" style="width: 20%">Chi tiết đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($alluserorder as $key => $rows) {
                            ?>

                                <tr>
                                    <td><?= $rows['order_id'] ?></td>
                                    <td><?= $rows['username'] ?></td>
                                    <td><?= $rows['order_date'] ?></td>
                                    <td><?php
                                        if ($rows['order_status'] === 'pending') {
                                            echo '<span class="badge bg-warning">Đang chờ</span>';
                                        } elseif ($rows['order_status'] === 'processing') {
                                            echo '<span class="badge bg-primary">Đang xử lý</span>';
                                        } elseif ($rows['order_status'] === 'completed') {
                                            echo '<span class="badge bg-success">Hoàn thành</span>';
                                        } elseif ($rows['order_status'] === 'canceled') {
                                            echo '<span class="badge bg-danger">Hủy bỏ</span>';
                                        } else {
                                            echo '<span class="badge bg-secondary">Không xác định</span>';
                                        }
                                        ?></td>
                                    <td><?= $rows['order_totalAmount'] ?></td>

                                    <td>
                                        <a href="?act=orderdetail&id=<?= $rows['order_id'] ?>"><button class="btn btn-success">Xem Chi Tiết</button></a>

                                    </td>
                                </tr>
                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
        <?php require_once "component/admin/footer.php" ?>




        <?php require_once "component/admin/scripts.php" ?>
</body>

</html>