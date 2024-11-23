<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí giảm giá</title>
    <?php require_once "component/admin/link.php" ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Quản lí giảm giá</h2>
                    <a href="?act=insertdiscount"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="fas fa-plus"></i> Thêm mã
                        </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 1%">ID</th>
                                <th scope="col" style="width: 15%">Mã</th>
                                <th scope="col" style="width: 15%">Giá trị giảm </th>
                                <th scope="col" style="width: 15%">Đơn tối thiểu</th>
                                <th scope="col" style="width: 15%">Bắt đầu</th>
                                <th scope="col" style="width: 15%">Kết thúc</th>
                                <th scope="col" style="width: 10%">Trạng thái</th>
                                <th scope="col" style="width: 10%">Sửa</th>
                                <th scope="col" style="width: 10%">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($alldiscounts as $key => $rows) {
                            ?>
                                <tr>
                                    <td><?= $rows['discount_id'] ?></td>
                                    <td><?= $rows['discount_code'] ?></td>
                                    <td><?= $rows['discount_value'] ?></td>
                                    <td><?= $rows['minimum_order'] ?></td>
                                    <td><?= $rows['valid_from'] ?></td>
                                    <td><?= $rows['valid_to'] ?></td>
                                    <td><?= $rows['status'] ?></td>
                                    <td>
                                        <a href="?act=updatediscount&id=<?= $rows['discount_id'] ?>">
                                            <button class="btn btn-primary">Sửa</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="?act=deletediscount&id=<?= $rows['discount_id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa mã giảm giá này?')">
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