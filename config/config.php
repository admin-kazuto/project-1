<?php 

function connectDB(){
    $host = "mysql:host=localhost;dbname=KTK;charset=utf8";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO(dsn: $host, username: $user, password: $pass);
    } catch (PDOException $e) {
        echo "lỗi".$e->getMessage();
    }
}

?>