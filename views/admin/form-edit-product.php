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
        <form action="index.php?act=update-product" method="post" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?= $product['product_id']; ?>">
            </div>
            <div class="form-floating mb-3">
                <p>Tên sản phẩm</p>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $product['product_name']; ?>">
            </div>
            <div class="form-floating">
                <p>Mô tả sản phẩm</p>
                <textarea class="form-control" id="description" style="height: 100px" name="description"><?= $product['description']; ?></textarea>
            </div>
            <br>
            <div class="form-floating mb-3">
                <p>Giá sản phẩm</p>
                <input type="number" class="form-control" id="product_price" name="product_price" value="<?= $product['product_price']; ?>">
            </div>
            <br>
            <div class="form-floating">
                <p>Ảnh sản phẩm</p>
                <input type="text" class="form-control" id="product_image" name="product_image" value="<?= $product['product_image']; ?>">
            </div>
            <br>
            <div class="form-floating">
                <p>Trạng thái</p>
                <select class="form-select" size="3" aria-label="Size 3 select example" name="product_status">
                    <option value="available" <?= $product['product_status'] == 'available' ? 'selected' : ''; ?>>Available</option>
                    <option value="unavailable" <?= $product['product_status'] == 'unavailable' ? 'selected' : ''; ?>>Unavailable</option>
                    <option value="Delete" <?= $product['product_status'] == 'available' ? 'selected' : ''; ?>>Delete</option>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $product_status = $_POST['product_status'] ?? 'unavailable'; // Mặc định là 'unavailable' nếu không có giá trị
                        echo "Product Status: " . htmlspecialchars($product_status);
                    }
                    ?>
                </select>
            </div>
            <br>
            <div class="form-floating mb-3">
                <p>Số lượng sản phẩm</p>
                <input type="number" class="form-control" id="product_quantity" name="product_quantity" value="<?= $product['product_quantity']; ?>">
            </div>
            <div class="form-floating">
                <p>Danh mục</p>
                <select class="form-select" name="category_id">
                    <?php foreach ($category as $categorys) : ?>
                        <option value="<?= $categorys["category_id"]  ?>" <?= ($categorys["category_id"] == $product["category_id"]) ? 'selected' : '' ?>>
                            <?= $categorys["category_name"]  ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <br>

            <br>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning">Cập nhật sản phẩm</button>
            </div>
        </form>
    </div>
</body>

</html>