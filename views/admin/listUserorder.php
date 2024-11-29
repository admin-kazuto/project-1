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
                                <th scope="col" style="width: 15%">Ngày đặt hàng</th>
                                <th scope="col" style="width: 15%">Trạng thái </th>
                                <th scope="col" style="width: 20%">Tổng giá trị</th>
                                <th scope="col" style="width: 20%">Cập nhật trạng thái</th>
                                <th scope="col" style="width: 20%">Chi tiết đơn hàng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($alluserorder as $key => $rows) {
                            ?>

                                <tr>
                                    <td><?= $rows['order_id'] ?></td>
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
                                    <!-- <td><a href="?act="><button class="btn btn-primary">Sửa</button></a></td> -->
                                    <td>
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal">Sửa</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#orderDetailModal">Xem Chi Tiết</button>
                                        <div class="modal fade" id="orderDetailModal" tabindex="-1" aria-labelledby="orderDetailModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="orderDetailModalLabel">Chi Tiết Đơn Hàng</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row order-detail-section">
                                                            <div class="col-md-6">
                                                                <h6>Thông Tin Đơn Hàng</h6>
                                                                <p><strong>Ngày Đặt Hàng:</strong> <?= $rows['order_date'] ?></p>
                                                                <p><strong>Trạng Thái:</strong> <?php
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
                                                                                                ?></p>
                                                                <p><strong>Tổng Giá Trị:</strong> <?= $rows['order_totalAmount'] ?></p>
                                                                <p><strong>Mã Giảm Giá:</strong> <?= $rows['discount_id'] ?></p>
                                                                <p><strong>Số Tiền Giảm:</strong> <?= $rows['discount_amount'] ?></p>
                                                                <p><strong>Phương Thức Thanh Toán:</strong><?= $rows['payment_method'] ?></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h6>Thông Tin Người Nhận</h6>
                                                                <p><strong>Tên Tài Khoản:</strong> <?= $rows['username'] ?></p>
                                                                <p><strong>Tên Người Nhận:</strong> <?= $rows['order_name'] ?></p>
                                                                <p><strong>Số Điện Thoại:</strong> <?= $rows['order_phoneNumber'] ?></p>
                                                                <p><strong>Địa Chỉ:</strong> <?= $rows['order_address'] ?></p>
                                                            </div>
                                                        </div>

                                                        <h6 class="mt-3">Danh Sách Sản Phẩm</h6>
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tên Sản Phẩm</th>
                                                                        <th>Size</th>
                                                                        <th>Số Lượng</th>
                                                                        <th>Đơn Giá</th>
                                                                        <th>Thành Tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    foreach ($orderDetails as $key => $rows2) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?= $rows2['product_name'] ?></td>
                                                                            <td><?= $rows2['variation_name'] ?></td>
                                                                            <td><?= $rows2['quantity'] ?></td>
                                                                            <td><?= $rows2['unit_price'] ?></td>
                                                                            <td><?= $rows2['order_price'] ?></td>
                                                                        </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        <?php
                                                                    }
                                                                }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Cập nhật trạng thái</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input type="number" name="order_id" value="<?= $rows['order_id'] ?>" hidden>
                            <div>
                                <label for="status">Trạng thái:</label> <br>
                                <select name="status" id="status" class="form-select">
                                    <?php
                                    $statuses = [
                                        'pending' => 'Đang chờ',
                                        'processing' => 'Đang xử lý',
                                        'completed' => 'Hoàn thành',
                                        'canceled' => 'Hủy bỏ'
                                    ];
                                    foreach ($statuses as $key => $value) {
                                        if ($key === $rows["order_status"]) {
                                            echo "<option value='$key' selected>$value</option>";
                                        } else {
                                            echo "<option value='$key'>$value</option>";
                                        }
                                    }
                                    ?>
                            </div>
                            </select>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->

        <?php require_once "component/admin/scripts.php" ?>
</body>

</html>