<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Đăng nhập quản trị</h1>
        <b>Tên đăng nhập</b><input type="text" name="username" id="username"> <br>
        <b>Mật khẩu</b><input type="password" name="password" id="password"> <br>
        <a href="?act=forgotPass">Quên mật khẩu</a>
        <br> <br>
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<div style="color:red">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị
    }
    ?>
</body>

</html>