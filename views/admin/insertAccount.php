<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản</title>
    <?php require_once "component/admin/link.php" ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-block: 30px;
        }

        form {
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 0;
            box-shadow: none;
            width: 600px;
            margin: 0 auto;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
        }

        .form-column {
            width: 48%;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 0;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 0;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <?php require_once "component/admin/header.php" ?>
        <?php require_once "component/admin/sidebar.php" ?>
        <main class="app-main">
            <div>
                <h1>Thêm tài khoản</h1>
                <form action="" method="post" onsubmit="return validateForm()">
                    <div class="form-row">
                        <div class="form-column">
                            <label for="name">Họ và tên:</label>
                            <input type="text" id="name" name="name">
                            <div id="nameError" class="error"></div>

                            <label for="username">Tên tài khoản:</label>
                            <input type="text" id="username" name="username">
                            <div id="usernameError" class="error"></div>

                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password">
                            <div id="passwordError" class="error"></div>
                        </div>
                        <div class="form-column">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                            <div id="emailError" class="error"></div>

                            <label for="adress">Địa chỉ:</label>
                            <input type="text" id="adress" name="adress">
                            <div id="addressError" class="error"></div>

                            <label for="phone">Số điện thoại:</label>
                            <input type="number" id="phone" name="phone">
                            <div id="phoneError" class="error"></div>
                        </div>
                    </div>

                    <label for="role">Quyền hạn:</label>
                    <select id="role" name="role">
                        <option value="admin">Admin</option>
                        <option value="shipper">Shipper</option>
                        <option value="user">User </option>
                    </select>
                    <br><br>
                    <?php
                    if (isset($_SESSION['message_insertaccount'])) {
                        echo '<div style="color:red">' . $_SESSION['message_insertaccount'] . '</div>';
                        unset($_SESSION['message_insertaccount']);
                    }
                    ?>
                    <button type="submit" name="btn_insert">Thêm tài khoản</button>
                    <div style="margin-top: 20px">
                        <a href="?act=listaccount" style="color: #007bff; text-decoration: none;">&lt; Quay lại danh sách</a>
                    </div>

                </form>
            </div>
            <script>
                function validateForm() {
                    const name = document.getElementById("name").value.trim();
                    const username = document.getElementById("username").value.trim();
                    const password = document.getElementById("password").value;
                    const email = document.getElementById("email").value.trim();
                    const address = document.getElementById("adress").value.trim();
                    const phone = document.getElementById("phone").value.trim();

                    const nameError = document.getElementById("nameError");
                    const usernameError = document.getElementById("usernameError");
                    const passwordError = document.getElementById("passwordError");
                    const emailError = document.getElementById("emailError");
                    const addressError = document.getElementById("addressError");
                    const phoneError = document.getElementById("phoneError");

                    nameError.textContent = "";
                    usernameError.textContent = "";
                    passwordError.textContent = "";
                    emailError.textContent = "";
                    addressError.textContent = "";
                    phoneError.textContent = "";

                    let isValid = true;

                    if (!name) {
                        nameError.textContent = "Họ và tên không được để trống.";
                        isValid = false;
                    }

                    if (!username || username.length < 3) {
                        usernameError.textContent = "Tên tài khoản phải có ít nhất 3 ký tự.";
                        isValid = false;
                    }

                    if (!password || password.length < 6) {
                        passwordError.textContent = "Mật khẩu phải có ít nhất 6 ký tự.";
                        isValid = false;
                    }

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!email || !emailRegex.test(email)) {
                        emailError.textContent = "Email không hợp lệ.";
                        isValid = false;
                    }

                    if (!address) {
                        addressError.textContent = "Địa chỉ không được để trống.";
                        isValid = false;
                    }

                    const phoneRegex = /^[0-9]{10,11}$/;
                    if (!phone || !phoneRegex.test(phone)) {
                        phoneError.textContent = "Số điện thoại phải là số và có 10-11 chữ số.";
                        isValid = false;
                    }

                    return isValid;
                }
            </script>
        </main>
        <?php require_once "component/admin/footer.php" ?>
    </div>
    <?php require_once "component/admin/scripts.php" ?>
    <script src="assets/js/adminlite.js"></script>
</body>

</html>