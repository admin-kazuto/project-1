<<<<<<< HEAD
<?php 

function connectDB()
{
    $host = "mysql:host=localhost;dbname=ktk;charset=utf8";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO($host, $user, $pass);
        return $conn;
    } catch (PDOException $e) {
        echo "lỗi kết nối " . $e->getMessage();
    }
}


function view($view, $data = []){
    extract($data);
    include_once "views/$view.php";
}

?>
=======
<?php
function connectDB()
{
    $host = "mysql:host=localhost;dbname=ktk;charset=utf8";
    $user = 'root';
    $pass = '';
    try {
        $conn = new PDO($host, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
>>>>>>> Khoa
