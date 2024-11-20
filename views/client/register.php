<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản</title>
    <style>
    </style>
</head>

<body>
    <div class="wrapper1">
        <h1> Thêm tài khoản</h1>
        <form action="?act=register" method="post">
            <label for="name">Họ và tên:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="username">Tên tài khoản:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="adress">Địa chỉ:</label>
            <input type="text" id="adress" name="adress" required>
            <br>
            <label for="phone">Số điện thoại:</label>
            <input type="number" id="phone" name="phone" required>
            <br>
            <button type="submit" name="btn_register">Thêm tài khoản</button>
        </form>
    </div>
</body>

</html>