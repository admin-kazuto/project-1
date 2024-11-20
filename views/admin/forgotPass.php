<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form {
            width: 450px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: inline-block;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-container button {
            width: auto;
            background-color: #28a745;
        }

        .btn-container button:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="" method="post">
            <h2>Quên mật khẩu</h2>
            <div>
                <label for="email">Email của bạn:</label> <br>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="btn-container">
                <button name="btn_getotp">Gửi mã OTP</button>
            </div>
        </form>
        <form action="" method="post">
            <div>
                <label for="otp">Nhập mã OTP:</label> <br>
                <input type="text" id="otp" name="otp" required>
            </div>
            <div>
                <label for="password">Mật khẩu mới:</label> <br>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="confirm_password">Xác nhận mật khẩu:</label> <br>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="error-message" id="error-message">Mật khẩu không khớp!</div>
            <br>
            <button type="submit" name="btn_submit">Đặt lại mật khẩu</button>
        </form>
    </div>

    <script>
    </script>
</body>

</html>