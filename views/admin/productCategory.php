<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "../../component/admin/link.php" ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "../../component/admin/header.php" ?>
        <?php require_once "../../component/admin/sidebar.php" ?>
        <main class="app-main">
        <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Quản lý danh mục</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i> Thêm danh mục
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" style="width: 10%">ID</th>
                        <th scope="col" style="width: 70%">Tên danh mục</th>
                        <th scope="col" style="width: 20%">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Điện thoại</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" title="Sửa">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger" onclick="if(confirm('Bạn có chắc muốn xóa?')) alert('Đã xóa!')" title="Xóa">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Laptop</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal" title="Sửa">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-danger" onclick="if(confirm('Bạn có chắc muốn xóa?')) alert('Đã xóa!')" title="Xóa">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Thêm -->
    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thêm danh mục mới</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" placeholder="Nhập tên danh mục">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Thêm</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sửa -->
    <div class="modal fade" id="editModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sửa danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" placeholder="Nhập tên danh mục">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </div>
    </div>
        </main>
        <?php require_once "../../component/admin/footer.php" ?>
    </div>
    <?php require_once "../../component/admin/scripts.php" ?>
</body>


</html>