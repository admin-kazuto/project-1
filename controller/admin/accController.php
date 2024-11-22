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
        require_once 'views/client/login.php';
        if (isset($_POST['btn_login'])) {
            if ($this->accModel->checkLogin($_POST['username_login'], $_POST['password_login']) > 0) {
                $_SESSION['username'] = $_POST['username_login'];
                $_SESSION['role'] = $this->accModel->checkRole($_POST['username_login']);
                header('location:?act=home');
            } else {
                $_SESSION['message'] = 'Vui lòng nhập đúng tài khoản và mật khẩu';
                header('location:?act=login');
            }
        }

        if (isset($_POST['btn_register'])) {
            $email = $_POST['email_register'];
            $username = $_POST['username_register'];
            $phone = $_POST['phone_register'];


            if ($this->accModel->checkEmail($email) > 1) {
                header('location:?act=login');
                $_SESSION['message_register'] = 'Email đã đã tồn tại';
            } else
            if ($this->accModel->checkUsername($username) > 1) {
                header('location:?act=login');
                $_SESSION['message_register'] = 'Tên tài khoản đã tồn tại';
            } else
            if ($this->accModel->checkPhone($phone) > 1) {
                header('location:?act=login');
                $_SESSION['message_register'] = 'Số điện thoại đã tồn tại';
            } else {
                $password = sha1($_POST['password_register']);
                $adress = $_POST['adress_register'];
                $name = $_POST['name_register'];
                $role = 'user';
                if ($this->accModel->insertAccount($name, $username, $password, $adress, $phone, $email, $role)) {
                    $_SESSION['message'] = 'Đăng kí thành công vui lòng đăng nhập lại';
                    header("location:?act=login#undefined1");
                } else {
                    echo "lỗi";
                }
            }
        }
    }
    function logout()
    {
        unset($_SESSION['username']);
        unset($_SESSION['role']);
        header("Location:./");
    }
    function listAccount()
    {
        $allAccount = $this->accModel->getAllAccount();
        require_once 'views/admin/listAccount.php';
    }
    function insertAccount()
    {
        require_once 'views/admin/insertAccount.php';
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


    function forgotPass()
    {
        require_once 'send_email.php';
        // require_once 'views/admin/forgotPass.php';
        require_once 'views/client/forgotPass.php';
        if (isset($_POST['btn_getotp'])) {
            $email = $_POST['email_getotp'];
            $user_id = $this->accModel->getuserID($email);
            if ($this->accModel->checkEmail($email) > 0) {
                $existingToken = $this->accModel->tokenExists($user_id);
                $_SESSION['email'] = $email;
                $otp = rand(100000, 999999);
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $expiry = date("Y-m-d H:i:s", strtotime("+10 minutes"));
                $count = $this->accModel->getCount($user_id);
                if ($count < 3) {
                    $message = "Mã OTP của bạn để đặt lại mật khẩu là: $otp";
                    $this->accModel->createOrUpdateResetToken($user_id, $otp, $expiry, $existingToken);
                    if (sendResetEmail($email, $message)) {
                        $_SESSION['message_email'] = "Mã OTP đã được gửi đến email của bạn. Vui lòng kiểm tra email.";
                        header('location:?act=forgotpass');
                    } else {
                        $_SESSION['message_email'] = "Có lỗi khi gửi email. Vui lòng thử lại sau.";
                        header("location:?act=forgotpass");
                    }
                } elseif ($count >= 3) {
                    $_SESSION['message_email'] = "Vui lòng chờ 20 phút để gửi lại OTP lại";
                    header("location:?act=forgotpass");
                }
            } else {
                $_SESSION['message_email'] = "Email không tồn tại trong hệ thống.";
                header("location:?act=forgotpass");
            }
        }


        if (isset($_POST['btn_submit'])) {
            $token = $_POST['otp'];
            $email = $_SESSION['email'];
            $password = $_POST['password'];
            $user_id = $this->accModel->getuserID($email);
            if ($this->accModel->checkToken($token) > 0) {
                if ($this->accModel->changePass($email, $password)) {
                    $this->accModel->deleteToken($user_id);
                    unset($_SESSION['email']);
                    $_SESSION['message'] = "Mật khẩu mới đã được cập nhật. Vui lòng đăng nhập lại.";
                    header("location:?act=login#undefined1");
                } else {
                    $_SESSION['message_reset'] = "Đã xảy ra lỗi khi cập nhật mật khẩu. Vui lòng thử lại.";
                    header("location:?act=forgotpass");
                }
            } else {
                $_SESSION['message_reset'] = "Mã OTP không hợp lệ hoặc đã hết hạn. Vui lòng kiểm tra lại.";
                header("location:?act=forgotpass");
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
