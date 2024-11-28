<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí đơn hàng</title>
    <?php require_once "component/admin/link.php" ?>
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
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 1%">ID</th>
                                <th scope="col" style="width: 10%">Tên sản phẩm</th>
                                <th scope="col" style="width: 7%">Trạng thái </th>
                                <th scope="col" style="width: 7%">Số lượng</th>
                                <th scope="col" style="width: 8%">ID giảm giá</th>
                                <th scope="col" style="width: 10%">Số tiền giảm giá</th>
                                <th scope="col" style="width: 10%">Phương thức thanh toán</th>
                                <!-- <th scope="col" style="width: 10%">ID Shipper</th> -->
                                <!-- <th scope="col" style="width: 10%">Trạng thái Ship</th> -->
                                <th scope="col" style="width: 10%">Tên tài khoản</th>
                                <th scope="col" style="width: 10%">Tên người đặt</th>
                                <th scope="col" style="width: 10%">Số người đặt</th>
                                <th scope="col" style="width: 10%">Địa chỉ người đặt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($alluserorder as $key => $rows) {
                            ?>
                                <tr>
                                    <td><?= $rows['order_id'] ?></td>
                                    <td><?= $rows['order_date'] ?></td>
                                    <td><?= $rows['order_status'] ?></td>
                                    <td><?= $rows['order_totalAmount'] ?></td>
                                    <td><?= $rows['discount_id'] ?></td>
                                    <td><?= $rows['discount_amount'] ?></td>
                                    <td><?= $rows['payment_method'] ?></td>
                                    <td><?= $rows['username'] ?></td>
                                    <td><?= $rows['order_name'] ?></td>
                                    <td><?= $rows['order_phoneNumber'] ?></td>
                                    <td><?= $rows['order_address'] ?></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

    </div>
    <?php require_once "component/admin/scripts.php" ?>
</body>

</html>