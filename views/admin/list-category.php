<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
    </header>
    <h1 class="text-center">Quản lý danh mục</h1>
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>Mã</th>
            <th>Danh mục</th>
            <th>Chức Năng</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $category) : ?>
            <tr>
                <td><?= $category['category_id'] ?></td>
                <td><?= $category['category_name'] ?></td>
                <td>
                <button type="button" class="btn btn-success">Sửa</button>
                <a href="index.php?act=delete-category&$category_id=<?= $category['category_id']  ?>"><button type="button" class="btn btn-success">Xoa</button></a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
