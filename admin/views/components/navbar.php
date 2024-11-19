<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: block;

        }

        .menu {
            width: 250px;
            background-color: #333;
            height: 100vh;
            position: fixed;
            top: 0;
            flex-direction: column;
            padding-top: 20px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .menu ul li {
            width: 100%;
        }

        .menu ul li a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 15px 20px;
            transition: background-color 0.3s ease;
            width: 100%;

        }

        .menu ul li a:hover {
            background-color: #555;
        }

        .top-header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-align: right;
            position: fixed;
            top: 94%;
        }

        .top-header p {
            margin: 0;
        }

        .top-header a {
            color: #fff;
            text-decoration: none;
            padding: 7px 10px;
            border-radius: 5px;
            background-color: #0056b3;
            transition: background-color 0.3s ease;
        }

        .top-header a:hover {
            background-color: #003f7f;
        }
    </style>
</head>

<body>
    <nav class="menu">
        <ul>
            <li><a href="?act=home">Dashboard</a></li>
            <li><a href="?act=listcategory">Quản trị danh mục</a></li>
            <li><a href="?act=listproduct">Quản trị sản phẩm</a></li>
            <li><a href="?act=listaccount">Quản trị tài khoản</a></li>
        </ul>
        <header class="wrapper top-header">
            <p>Xin chào <?php
                        // if (isset($_SESSION['user'])) {
                        //     echo $_SESSION['user'];
                        // } else {
                        //     header("Location:./");
                        // }
                        ?> <a href="?act=logout">Đăng xuất</a></p>
        </header>
    </nav>
</body>

</html>