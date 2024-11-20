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
        <h1 class="text-center">Thêm sản phẩm</h1>
        <form action="index.php?act=list-product" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <p>Tên sản phẩm</p>
                <input type="text" class="form-control" id="product_name" placeholder="" name="product_name">
            </div>
            <div class="form-floating">
                <p>Mô tả sản phẩm</p>
                <textarea class="form-control" id="description" placeholder="" name="description"></textarea>
            </div>
            <br>
            <div class="form-floating mb-3">
                <p>Giá sản phẩm</p>
                <input type="number" class="form-control" id="product_price" placeholder="" name="product_price">
            </div>
            <br>
            <div class="form-floating">
                <p>Ảnh sản phẩm</p>
                <input type="text" class="form-control" id="product_image" placeholder="" name="product_image">
                <br>
                <input type="file" name="product_image">
            </div>
            <br>
            <div class="form-floating">
                <p>Trạng thái</p>
                <select class="form-select" name="product_status">
                    <option>available</option>
                    <option>unavailable</option>
                    <option>delete</option>
                </select>
            </div>
            <br>
            <div class="form-floating mb-3">
                <p>Số lượng sản phẩm</p>
                <input type="number" class="form-control" id="product_quantity" placeholder="" name="product_quantity">
            </div>
            <div class="form-floating">
                <p>Danh mục</p>
                <select class="form-select" name="category_id">
                    <?php foreach ($category as $categorys) : ?>
                        <option value="<?= $categorys["category_id"]  ?>">
                            <?= $categorys["category_name"]  ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <br>
            <div class="form-floating">
                <p>Mã giảm giá</p>
                <select class="form-select" name="descount_id">
                        <?php foreach($descount as $descounts) : ?>
                            <option value="<?= $descounts["descount_id"]?>"><?= $descounts["descount_name"] ?></option>
                        <?php endforeach ?>
                </select>
            </div>
            <br>
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-warning"><a href="index.php?act=store-product">Thêm sản phẩm</a></button>
            </div>
        </form>
    </div>
</body>

</html>