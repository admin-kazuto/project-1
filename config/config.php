<?php 

function connectDB(){
    $host = "mysql:host=localhost;dbname=KTK;charset=utf8";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO($host, $user, $pass);
    } catch (PDOException $e) {
        echo "lỗi".$e->getMessage();
    }
}

?>