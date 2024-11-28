<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí biến thể</title>
    <?php require_once "component/admin/link.php" ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Quản lí biến thể</h2>
                    <a href="?act=insertvariation"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="fas fa-plus"></i> Thêm biến thể
                        </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 1%">ID</th>
                                <th scope="col" style="width: 15%">Tên sản phẩm</th>
                                <th scope="col" style="width: 15%">Size </th>
                                <th scope="col" style="width: 15%">Giá</th>
                                <th scope="col" style="width: 15%">Trạng thái</th>
                                <th scope="col" style="width: 15%">Số lượng</th>
                                <th scope="col" style="width: 10%">Mã giảm giá</th>
                                <th scope="col" style="width: 10%">Sửa</th>
                                <th scope="col" style="width: 10%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($allVariations as $key => $rows) {
                            ?>
                                <tr>
                                    <td><?= $rows['variation_id'] ?></td>
                                    <td><?= $rows['product_name'] ?></td>
                                    <td><?= $rows['variation_name'] ?></td>
                                    <td><?= $rows['price'] ?></td>
                                    <td><?= $rows['status'] ?></td>
                                    <td><?= $rows['variation_quantity'] ?></td>
                                    <td><?= $rows['discount_id'] ?></td>
                                    <td>
                                        <a href="?act=updatevariation&id=<?= $rows['variation_id'] ?>">
                                            <button class="btn btn-primary">Sửa</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="?act=deletevariation&id=<?= $rows['variation_id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa biến thể này?')">
                                            <button class="btn btn-danger">Xóa</button>
                                        </a>
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

    </div>
    <?php require_once "component/admin/scripts.php" ?>
</body>

</html>