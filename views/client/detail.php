<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Site Title-->
    <title>Chi tiết đơn hàng</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
        name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
        rel="stylesheet"
        type="text/css"
        href="//fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .order-detail-section {
            margin: 20px 0;
            padding: 20px;
            border: 1px solid #f0f0f0;
            border-radius: 8px;
            background-color: #fafafa;
        }

        h5 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 15px;
        }

        strong {
            font-weight: bold;
        }

        .col-md-6 {
            padding: 10px;
        }

        .badge {
            font-size: 0.9em;
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 12px;
        }

        .bg-warning {
            background-color: #ffc107 !important;
        }

        .bg-primary {
            background-color: #007bff !important;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        .bg-secondary {
            background-color: #6c757d !important;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .table th,
        .table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #f8f9fa;
            color: #495057;
            font-weight: bold;
        }

        .table td {
            font-size: 0.9em;
            color: #333;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #f1f1f1;
        }

        .mt-3 {
            margin-top: 20px;
        }

        p {
            margin: 5px 0;
            line-height: 1.6;
        }

        h5 {
            color: #007bff;
        }
    </style>
</head>

<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<!-- Page-->
<div class="page text-center">
    <?php
    require_once 'component/client/header.php'
    ?>

    <main class="page-content">

        <div style="width:1024px; margin:auto; text-align:center;">
            <a href="?act=userprofile">
                <button class="btn btn-primary" style="display:block; margin-bottom: 20px;">Quay lại</button>
            </a>
            <p>
                <strong>
                    <h4 style="font-family:'Times New Roman', Times, serif; text-align:center;">Chi Tiết Đơn Hàng</h4>
                </strong>
            </p>
        </div>

        <div class="container mt-5" style="margin-bottom:20px">
            <!-- Order Details Section -->
            <div class="row order-detail-section">
                <?php foreach ($userorder as $key => $rows) { ?>
                    <div class="col-md-6">
                        <p>
                            <strong>
                                <h5>Thông Tin Đơn Hàng</h5>
                            </strong>
                        </p>
                        <p><strong>Ngày Đặt Hàng:</strong> <?= $rows['order_date'] ?></p>
                        <p><strong>Trạng Thái:</strong>
                            <?php
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
                            ?>
                        </p>
                        <p><strong>Tổng Giá Trị:</strong> <?= $rows['order_totalAmount'] ?></p>
                        <p><strong>Mã Giảm Giá:</strong> <?= $rows['discount_id'] ?></p>
                        <p><strong>Số Tiền Giảm:</strong> <?= $rows['discount_amount'] ?></p>
                        <p><strong>Phương Thức Thanh Toán:</strong> <?= $rows['payment_method'] ?></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>
                                <h5>Thông Tin Người Nhận</h5>
                            </strong></p>
                        <p><strong>Tên Tài Khoản:</strong> <?= $rows['username'] ?></p>
                        <p><strong>Tên Người Nhận:</strong> <?= $rows['order_name'] ?></p>
                        <p><strong>Số Điện Thoại:</strong> <?= $rows['order_phoneNumber'] ?></p>
                        <p><strong>Địa Chỉ:</strong> <?= $rows['order_address'] ?></p>
                    </div>
            </div>
        <?php } ?>
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
                    foreach ($orderdetail as $key => $rows2) {
                    ?>
                        <tr>
                            <td><?= $rows2['product_name'] ?></td>
                            <td><?= $rows2['variation_name'] ?></td>
                            <td><?= $rows2['quantity'] ?></td>
                            <td><?= $rows2['unit_price'] ?></td>
                            <td><?= $rows2['order_price'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
</div>

</main>
<?php require_once "component/client/footer.php" ?>
<div class="snackbars" id="form-output-global"></div>
<!-- Java script-->
<script src="assets/js/core.min.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>