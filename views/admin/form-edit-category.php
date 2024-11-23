<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="mx-auto p-2" style="width: 1000px;">
        <h1 class="text-center">Cập nhật danh mục</h1>
        <form action="index.php?act=update-category" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="category_id" value="<?= $category['category_id']  ?>">
            </div>
            <div class="form-floating mb-3">
                <p>Tên danh mục</p>
                <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $category ['category_name'] ?>">
            </div>
           
            <br>
          
            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning">Cập nhật danh mục</button>
            </div>
        </form>
    </div>
</body>

</html>