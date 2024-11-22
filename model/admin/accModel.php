<?php
class accModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connectDB();
    }
    function checkLogin($username, $password)
    {
        $password = sha1($password);
        $sql = "select * from account where username='$username' and password='$password'";
        return $this->conn->query($sql)->rowCount();
    }
    function getAllAccount()
    {
        $sql = "select * from account";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function insertAccount($name, $username, $password, $adress, $phone, $email, $role)
    {
        $sql = "insert into account values(null, '$name', '$username','$password', '$adress','$phone','$email', CURRENT_TIMESTAMP, 'Mở', '$role')";
        $stsm = $this->conn->prepare($sql);
        return $stsm->execute();
    }
    function checkEmail($email)
    {
        $sql = "SELECT * FROM account WHERE email = '$email'";
        return $this->conn->query($sql)->rowCount();
    }
    function checkUsername($username)
    {
        $sql = "SELECT * FROM account WHERE username = '$username'";
        return $this->conn->query($sql)->rowCount();
    }
    function checkPhone($phone)
    {
        $sql = "SELECT * FROM account WHERE phone = '$phone'";
        return $this->conn->query($sql)->rowCount();
    }
    function findAccountById($id)
    {
        $sql = "select * from account where  user_id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function deleteAccount($id)
    {
        $sql = "delete from account where user_id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function banAccount($id)
    {
        $sql = "update account set status='Khóa' where user_id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function unbanAccount($id)
    {
        $sql = "update account set status='Mở' where user_id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function checkStatus($id)
    {
        $sql = "select status from account where user_id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    function changePass($email, $password)
    {
        $password = sha1($password);
        $sql = "UPDATE `account` SET `password`='$password' WHERE email = '$email'";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function deleteToken($user_id)
    {
        $sql = "delete from reset_account where user_id = $user_id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function checkToken($token)
    {
        $sql = "SELECT * FROM reset_account WHERE reset_token = '$token' AND reset_expiry > NOW()";
        return $this->conn->query($sql)->rowCount();
    }
    function tokenExists($user_id)
    {
        $sql = "SELECT reset_token, email_send_count FROM reset_account WHERE user_id = $user_id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function getCount($user_id)
    {
        $sql = "SELECT `email_send_count` FROM `reset_account` WHERE user_id=$user_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
    function createOrUpdateResetToken($user_id, $otp, $expiry, $existingToken)
    {
        if ($existingToken) {
            $sql = "UPDATE reset_account SET reset_token = '$otp', reset_expiry = '$expiry', email_send_count = email_send_count + 1 where user_id='$user_id'";
        } else {
            $sql = "INSERT INTO reset_account values ('$user_id', '$otp', '$expiry', 1)";
        }
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function getuserID($email)
    {
        $sql = "SELECT user_id FROM account WHERE email = '$email'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
    function checkRole($username)
    {
        $sql = "SELECT role FROM account WHERE username = '$username'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}
