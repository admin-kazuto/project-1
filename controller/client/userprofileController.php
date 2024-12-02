<?php
class userprofileController
{
    public $userprofileModal;
    public function __construct()
    {
        $this->userprofileModal = new userprofileModel();
    }
    function userprofile()
    {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $userprofile = $this->userprofileModal->userprofile($username);
            $data = $this->userprofileModal->orderhistory($this->userprofileModal->getidbyusername($username));
            require_once 'views/client/userprofile.php';

            if (isset($_POST['btn_submit'])) {
                $currentPassword = sha1($_POST['currentPassword']);
                $newPassword = $_POST['newpassword'];

                if ($this->userprofileModal->checkcurrentPass($username, $currentPassword) > 0) {
                    $newPassword = sha1($newPassword);
                    $this->userprofileModal->changepass($username, $newPassword);
                    $_SESSION['message'] = 'Đổi mật khẩu thành công!';
                    header('Location: ?act=userprofile');
                    exit();
                } else {
                    $_SESSION['message'] = 'Mật khẩu hiện tại không đúng!';
                    header('Location: ?act=userprofile');
                    exit();
                }
            }
        } else {
            $_SESSION['message'] = 'Vui lòng đăng nhập tài khoản';
            header('Location: ?act=login');
            exit();
        }
        if (isset($_POST['btn_update'])) {
            $fullname = $_POST['fullName'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            if ($this->userprofileModal->updateprofile($username, $fullname, $address, $phone) > 0) {
                $_SESSION['message'] = 'Cập nhật thông tin thành công!';
                header('Location: ?act=userprofile');
            }
        }
    }
    function detail($order_id)
    {
        $userorder = $this->userprofileModal->getUserorderById($order_id);
        $orderdetail = $this->userprofileModal->getOrderDetail($order_id);
        require_once 'views/client/detail.php';
    }

    function cancelorder($order_id)
    {
        $this->userprofileModal->cancelorder($order_id);
        header('location:?act=userprofile');
    }
}
