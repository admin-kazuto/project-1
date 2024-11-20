<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Quản lý danh sách sản phẩm</h1>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Mã</th>
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
        <?php foreach($data as $product) : ?>
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
                <button type="button" class="btn btn-success">Sửa</button>
                <button type="button" class="btn btn-danger">Xóa</button>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <div class="d-grid gap-2">
  <button class="btn btn-primary" type="button"><a href="index.php?act=add-product"><b>Thêm sản phẩm</b></a></button>
</div>
</body>
</html>
