<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
</head>

<body>
    <form action="" method="post">
        <div>
            <label for="email">Email của bạn:</label> <br>
            <input type="email" id="email" name="email"><button name="btn_getotp">Gửi mã OTP</button>
        </div>
        <div>
            <label for="otp">Nhập mã OTP:</label> <br>
            <input type="text" id="otp" name="otp">
        </div>
        <div>
            <label for="password">Mật khẩu mới:</label> <br>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <label for="confirm_password">Xác nhận mật khẩu:</label> <br>
            <input type="password" id="confirm_password" name="confirm_password">
        </div>
        <br>
        <button type="submit" name="btn_submit">Đặt lại mật khẩu</button>
    </form>
</body>

</html>