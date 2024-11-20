<?php 

function connectDB(){
    $host = "mysql:host=localhost;dbname=KTK;charset=utf8";
    $user = "root";
    $pass = "";
    try {
        $conn = new PDO(dsn: $host, username: $user, password: $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "lỗi".$e->getMessage();
    }
}
function dd($data){
    echo"<pre>";
    var_dump($data);
    die;
}

function view($view, $data = []){
    extract($data);
    include_once "views/$view.php";
}

?>