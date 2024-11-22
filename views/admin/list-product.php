<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <?php require_once "component/admin/link.php" ?>
</head>

<body>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <?php require_once "component/admin/header.php" ?>
            <?php require_once "component/admin/sidebar.php" ?>
            <main class="app-main">
                <div class="container mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2>Quản lý tài khoản</h2>
                        <a href="?act=addproduct"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Thêm sản phẩm
                            </button></a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="text-align:center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="width: 10%">Mã</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    <th>giá</th>
                                    <th>Ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Số lượng</th>
                                    <th>ID danh muc</th>
                                    <th>ID mã giảm giá</th>
                                    <th>Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $product) : ?>
                                    <tr>
                                        <td><?= $product['product_id'] ?></td>
                                        <td><?= $product['product_name'] ?></td>
                                        <td><?= $product['description'] ?></td>
                                        <td><?= $product['product_price'] ?></td>
                                        <td><img src="<?= $product['product_image'] ?>" height="100" width="100"></td>
                                        <td><?= $product['product_status'] ?></td>
                                        <td><?= $product['product_quantity'] ?></td>
                                        <td class="text-center"><?= $product['category_id'] ?></td>
                                        <td><?= $product['discount_id'] ?></td>
                                        <td>
                                            <a href="index.php?act=delete-product&product_id=<?= $product['product_id']  ?>"><button type="button" class="btn btn-success">Xóa</button></a>
                                            <a href="index.php?act=edit-product&product_id=<?= $product['product_id']  ?>"><button type="button" class="btn btn-danger">Sửa</button></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
            </main>
        </div
            <?php require_once "component/admin/scripts.php" ?>>
    </body>

</html>