<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục</title>
    <?php require_once "component/admin/link.php" ?>

</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2>Quản lý danh mục</h2>
                    <a href="?act=addcategory"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="fas fa-plus"></i> Thêm danh mục
                        </button></a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered" style="text-align:center">
                        <thead class="table-dark">
                            <tr>
                                <th>Mã</th>
                                <th>Danh mục</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $category) : ?>
                                <tr>
                                    <td><?= $category['category_id'] ?></td>
                                    <td><?= $category['category_name'] ?></td>
                                    <td>
                                        <a href="index.php?act=editcategory&category_id=<?= $category['category_id'] ?>"><button type="button" class="btn btn-success">Sửa</button></a>
                                        <a href="index.php?act=deletecategory&category_id=<?= $category['category_id']  ?>"><button type="button" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')">Xóa</button></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <?php require_once "component/admin/scripts.php" ?>
                    <script src="assets/js/adminlite.js"></script>

</body>

</html>