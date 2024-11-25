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
                        <h2>Quản lý sản phẩm</h2>
                        <a href="?act=addproduct"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Thêm sản phẩm
                            </button></a>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="text-align:center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" style="width: 10%">Mã</th>
                                    <th scope="col" style="width: 10%">Tên</th>
                                    <th scope="col" style="width: 10%">Mô tả</th>
                                    <th scope="col" style="width: 10%">Ảnh</th>
                                    <th scope="col" style="width: 10%">Trạng thái</th>
                                    <th scope="col" style="width: 10%">Số lượng</th>
                                    <th scope="col" style="width: 10%">Danh mục</th>
                                    <th scope="col" style="width: 10%">Chức Năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $product) : ?>
                                    <tr>
                                        <td><?= $product['product_id'] ?></td>
                                        <td><?= $product['product_name'] ?></td>
                                        <td><?= $product['description'] ?></td>
                                        <td><img src="assets/images/<?= $product['product_image'] ?>" height="100" width="100"></td>
                                        <td><?= $product['product_status'] ?></td>
                                        <td><?= $product['product_totalQuantity'] ?></td>
                                        <td class="text-center"><?= $product['category_name'] ?></td>
                                        <td>
                                            <a href="index.php?act=deleteproduct&product_id=<?= $product['product_id']  ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">Xóa</button></a>
                                            <a href="index.php?act=editproduct&product_id=<?= $product['product_id']  ?>"><button type="button" class="btn btn-success">Sửa</button></a>
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