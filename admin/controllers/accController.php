<?php
class accController
{
    public $accModel;
    function __construct()
    {
        $this->accModel = new accModel();
    }
    function login()
    {
        require_once 'views/login.php';
        if (isset($_POST['btn_login'])) {
            if ($this->accModel->checkLogin($_POST['username'], $_POST['password']) > 0) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['role'] = $this->accModel->checkRole($_POST['username']);
                header("Location:?act=home");
            } else {
                echo "<script>alert('Không đăng nhập thành công!') </script>";
            }
        }
    }
    function logout()
    {
        unset($_SESSION['username']);
        header("Location:./");
    }
    function listAccount()
    {
        $allAccount = $this->accModel->getAllAccount();
        require_once 'views/listAccount.php';
    }
    function insertAccount()
    {
        require_once 'views/insertAccount.php';
        if (isset($_POST['btn_insert'])) {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            if ($this->accModel->checkEmail($email) > 1) {
                echo "<script>alert('Email đã tồn tại!') </script>";
            } else
            if ($this->accModel->checkUsername($username) > 1) {
                echo "<script>alert('Username đã tồn tại!') </script>";
            } else
            if ($this->accModel->checkPhone($phone) > 1) {
                echo "<script>alert('Số điện thoại đã tồn tại!') </script>";
            } else {

                $name = $_POST['name'];
                $password = sha1($_POST['password']);
                $adress = $_POST['adress'];
                $role = $_POST['role'];
                if ($this->accModel->insertAccount($name, $username, $password, $adress, $phone, $email, $role)) {
                    header("location:?act=listaccount");
                } else {
                    echo "lỗi";
                }
            }
        }
    }
    function register()
    {
        require_once 'views/register.php';
        if (isset($_POST['btn_register'])) {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            if ($this->accModel->checkEmail($email) > 1) {
                echo "<script>alert('Email đã tồn tại!') </script>";
            } else
            if ($this->accModel->checkUsername($username) > 1) {
                echo "<script>alert('Username đã tồn tại!') </script>";
            } else
            if ($this->accModel->checkPhone($phone) > 1) {
                echo "<script>alert('Số điện thoại đã tồn tại!') </script>";
            } else {

                $name = $_POST['name'];
                $password = sha1($_POST['password']);
                $adress = $_POST['adress'];
                $role = 'user';
                if ($this->accModel->insertAccount($name, $username, $password, $adress, $phone, $email, $role)) {
                    header("location:?act=listaccount");
                } else {
                    echo "lỗi";
                }
            }
        }
    }

    function forgotPass()
    {
        require_once 'send_email.php';
        require_once 'views/forgotPass.php';
        if (isset($_POST['btn_getotp'])) {
            $email = $_POST['email'];
            $user_id = (int)$this->accModel->getuserID($email);
            if ($this->accModel->checkEmail($email) > 0) {
                $existingToken = $this->accModel->tokenExists($user_id);
                $_SESSION['email'] = $email;
                $otp = rand(100000, 999999);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $expiry = date("Y-m-d H:i:s", strtotime("+10 minutes"));
                $count = (int)$this->accModel->getCount($user_id);
                if ($count < 3) {
                    $message = "Mã OTP của bạn để đặt lại mật khẩu là: $otp";
                    $this->accModel->createOrUpdateResetToken($user_id, $otp, $expiry, $existingToken);
                    if (sendResetEmail($email, $message)) {
                        echo "Mã OTP đã được gửi đến email của bạn. Vui lòng kiểm tra email.";
                    } else {
                        echo "Có lỗi khi gửi email. Vui lòng thử lại sau.";
                    }
                } elseif ($count >= 3) {
                    echo "Vui lòng chờ 20 phút để gửi lại OTP lại";
                }
            } else {
                echo "Email không tồn tại trong hệ thống.";
            }
        }
        if (isset($_POST['btn_submit'])) {
            $token = $_POST['otp'];
            $email = $_SESSION['email'];
            $password = $_POST['password'];
            $user_id = (int)$this->accModel->getuserID($email);
            $confirm_password = $_POST['confirm_password'];

            if ($password && $confirm_password && $password === $confirm_password) {
                if (!empty($token)) {
                    if ($this->accModel->checkToken($token) > 0) {
                        if ($this->accModel->changePass($email, $password)) {
                            $this->accModel->deleteToken($user_id);
                            unset($_SESSION['email']);
                            echo "Mật khẩu mới đã được cập nhật. Vui lòng đăng nhập lại.";
                        } else {
                            echo "Đã xảy ra lỗi khi cập nhật mật khẩu. Vui lòng thử lại.";
                        }
                    } else {
                        echo "Mã OTP không hợp lệ hoặc đã hết hạn. Vui lòng kiểm tra lại.";
                    }
                } else {
                    echo "Mã OTP không được để trống.";
                }
            } else {
                echo "Mật khẩu xác nhận không trùng khớp hoặc không hợp lệ.";
            }
        }
    }
    function deleteAccount($id)
    {
        $this->accModel->deleteAccount($id);

        header("Location: ?act=listaccount");
    }
    function banAccount($id)
    {
        $this->accModel->banAccount($id);

        header("Location: ?act=listaccount");
    }
    function unbanAccount($id)
    {
        $this->accModel->unbanAccount($id);

        header("Location: ?act=listaccount");
    }
}
