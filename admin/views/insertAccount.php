<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .wrapper1 {
            max-width: 600px;
            margin: 20px;
            margin-left: 560px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php
    // require_once 'views/components/navbar.php'; 
    ?>
    <div class="wrapper1">
        <h1> Thêm tài khoản</h1>
        <form action="?act=insertaccount" method="post">
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
            <label for="role">Quyền hạn</label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="shipper">Shipper</option>
                <option value="user">User</option>
            </select>
            <br>
            <button type="submit" name="btn_insert">Thêm tài khoản</button>
        </form>
    </div>
</body>

</html>