<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật biến thể</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-block: 30px;
        }

        form {
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: Arial, sans-serif;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        form input,
        form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        form button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        form button:hover {
            background-color: #0056b3;
        }

        form div {
            margin-bottom: 20px;
        }

        .error-message {
            color: red;

        }
    </style>
</head>

<body>

    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <?php require_once "component/admin/header.php" ?>
            <?php require_once "component/admin/sidebar.php" ?>
            <main class="app-main">
                <h3>Cập nhật biến thể</h3>
                <form action="" method="POST" onsubmit="validateForm()">
                    <div>
                        <label for="product_id">Product:</label>
                        <select id="product_id" name="product_id">
                            <?php
                            echo "<option value='" . $oneVariation["product_id"] . "'>" . $oneVariation["product_name"] . "</option>";
                            foreach ($allProducts as $key => $row) {
                                if ($row['product_id'] == $oneVariation['product_id']) {
                                    continue;
                                } else {
                                    echo "<option value='" . $row["product_id"] . "'>" . $row["product_name"] . "</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <div>
                        <label for="variation_name">Variation Name:</label>
                        <input type="text" id="variation_name" name="variation_name" maxlength="256" value="<?= $oneVariation['variation_name'] ?>">
                        <div id="error-variation_name" class="error-message"></div>
                    </div>

                    <div>
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" value="<?= $oneVariation['price'] ?>">
                        <div id="error-price" class="error-message"></div>
                    </div>

                    <div>
                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>

                    <div>
                        <label for="variation_quantity">Variation Quantity:</label>
                        <input type="number" id="variation_quantity" name="variation_quantity" value="<?= $oneVariation['variation_quantity'] ?>">
                        <div id="error-variation_quantity" class="error-message"></div>
                    </div>

                    <div>
                        <label for="discount_id">Discount ID:</label>
                        <input type="number" id="discount_id" name="discount_id" value="<?= $oneVariation['discount_id'] ?>">

                    </div>

                    <div>
                        <button type="submit" name="btn_update">Submit</button>
                    </div>
                </form>

                <?php require_once "component/admin/footer.php" ?>
        </div>
        <?php require_once "component/admin/scripts.php" ?>
    </body>
    <script>
        function validateForm() {
            const variationName = document.getElementById("variation_name").value.trim();
            const price = document.getElementById("price").value;
            const variationQuantity = document.getElementById("variation_quantity").value;

            const errorVariationName = document.getElementById("error-variation_name");
            const errorPrice = document.getElementById("error-price");
            const errorVariationQuantity = document.getElementById("error-variation_quantity");

            errorVariationName.textContent = "";
            errorPrice.textContent = "";
            errorVariationQuantity.textContent = "";

            let isValid = true;


            if (variationName === "") {
                errorVariationName.textContent = "Variation name cannot be empty.";
                isValid = false;
            }

            if (price === "") {
                errorPrice.textContent = "Price cannot be empty.";
                isValid = false;
            } else if (parseFloat(price) <= 0) {
                errorPrice.textContent = "Price must be greater than 0.";
                isValid = false;
            }

            if (variationQuantity === "") {
                errorVariationQuantity.textContent = "Variation quantity cannot be empty.";
                isValid = false;
            } else if (parseInt(variationQuantity) < 0) {
                errorVariationQuantity.textContent = "Variation quantity cannot be negative.";
                isValid = false;
            }

            return isValid;
        }
    </script>

</html>