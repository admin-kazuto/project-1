
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


    function view($view, $data = [])
    {
        extract($data);
        include_once "views/$view.php";
    }

    ?>