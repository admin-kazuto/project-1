<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>User Profile</title>
    <meta name="format-detection" content="telephone=no" />
    <meta
        name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <!-- Stylesheets-->
    <link
        rel="stylesheet"
        type="text/css"
        href="//fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/fonts.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
        .container-fluid {
            padding-top: 30px;
            width: 1240px;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .order-management-header {
            color: #333;
            margin-bottom: 25px;
            text-align: center;
            margin-top: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .filter-section {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .order-card {
            background-color: #f1f1f1;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }



        .order-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pagination {
            margin-top: 20px;
        }


        .order-detail-section {
            width: 100%;
            margin: auto;
            background-color: #f1f3f5;
            border-radius: 8px;
            margin-block: 35px;
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <!-- Page-->
    <div class="page text-center">
        <?php
        require_once 'component/client/header.php'
        ?>
        <main class="page-content">
            <div style="width: 1024px; height: 824px; position: relative;">

                <div style="width: 233px; height: 72px; left: 118px; top: 32px; position: absolute">
                    <div style="left: 0px; top: 0px; position: absolute; color: #3E435D; font-size: 24px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Welcome, <?= $userprofile['username'] ?></div>
                    <div style="left: 0px; top: 48px; position: absolute; color: #ADA7A7; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?php echo date('d F Y'); ?></div>
                </div>
                <img style="width: 1282px; height: 100px; left: 118px; top: 136px; position: absolute" src="assets/images/c49569c230bae5019749505e1a535070.jpg" />
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<div style="color:red;left: 670px ; top: 235px; position: absolute">' . $_SESSION['message'] . '</div>';
                    unset($_SESSION['message']);
                }
                ?>
                <div>
                    <img style="width: 100px; height: 100px; left: 150px; top: 268px; position: absolute; border-radius: 9999px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
            border: 4px solid #fff; " src="assets/images/avatar.jpg" />
                    <div style="width: 198px; height: 60px; left: 274px; top: 288px; position: absolute">
                        <div style="left: 0px; top: 0px; position: absolute; color: black; font-size: 20px; font-family: Poppins; font-weight: 500; word-wrap: break-word"><?= $userprofile['Name'] ?></div>
                        <div style="left: 0px; top: 36px; position: absolute; opacity: 0.50; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['email'] ?></div>
                    </div>
                    <div style="width: 190px; left: 1210px; top: 296px; position: absolute">
                        <button style="width: 190px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateprofileModal">Sửa thông tin</button>
                    </div>
                    <div style="width: 180px; left: 1020px; top: 296px; position: absolute">
                        <button style="width: 180px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updatepassModal">Đổi mật khẩu</button>
                    </div>

                </div>
                <div>
                    <div style="left: 150px; top: 400px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Full Name</div>
                    <div style="width: 593px; height: 52px; left: 150px; top: 436px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 170px; top: 450px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['Name'] ?></div>
                </div>
                <div>
                    <div style="left: 150px; top: 512px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Adress</div>
                    <div style="width: 593px; height: 52px; left: 150px; top: 548px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 170px; top: 562px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['adress'] ?></div>
                </div>
                <div>
                    <div style="left: 150px; top: 624px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Vai trò</div>
                    <div style="width: 593px; height: 52px; left: 150px; top: 660px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 170px; top: 674px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?php
                                                                                                                                                                                            if ($userprofile['role'] === 'admin') {
                                                                                                                                                                                                echo 'Quản trị viên';
                                                                                                                                                                                            } else {
                                                                                                                                                                                                echo 'Người dùng';
                                                                                                                                                                                            } ?></div>
                </div>
                <div>
                    <div style="left: 775px; top: 400px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Username</div>
                    <div style="width: 593px; height: 52px; left: 775px; top: 436px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 795px; top: 450px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['username'] ?></div>
                </div>
                <div>
                    <div style="left: 775px; top: 512px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Phone</div>
                    <div style="width: 593px; height: 52px; left: 775px; top: 548px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 795px; top: 562px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['phone'] ?></div>
                </div>
                <div>
                    <div style="left: 775px; top: 624px; position: absolute; opacity: 0.80; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Create at</div>
                    <div style="width: 593px; height: 52px; left: 775px; top: 660px; position: absolute; background: #F9F9F9; border-radius: 8px"></div>
                    <div style="left: 795px; top: 674px; position: absolute; opacity: 0.40; color: black; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word"><?= $userprofile['created_at'] ?></div>
                </div>

        </main>
        <div class="container-fluid">

            <h3 class="order-management-header">Lịch sử đặt hàng</h3>
            <?php

            foreach ($data as $key => $rows) {
            ?>
                <div class="order-card">
                    <div class="card-body">
                        <div class="order-details">
                            <div>
                                <strong>Mã Đơn: #<?= $rows['order_id'] ?></strong>
                            </div>
                            <div>
                                Ngày Đặt: <?= $rows['order_date'] ?>
                            </div>
                            <div>
                                <?php
                                if ($rows['order_status'] === 'pending') {
                                    echo '<span class="badge bg-warning">Đang chờ</span>';
                                } elseif ($rows['order_status'] === 'processing') {
                                    echo '<span class="badge bg-primary">Đang xử lý</span>';
                                } elseif ($rows['order_status'] === 'completed') {
                                    echo '<span class="badge bg-success">Hoàn thành</span>';
                                } elseif ($rows['order_status'] === 'canceled') {
                                    echo '<span class="badge bg-danger">Hủy bỏ</span>';
                                } else {
                                    echo '<span class="badge bg-secondary">Không xác định</span>';
                                }
                                ?>
                            </div>
                            <div>
                                Tổng Giá: <?= $rows['order_totalAmount'] ?>
                            </div>
                            <?php
                            if ($rows['order_status'] === 'processing' || $rows['order_status'] === 'pending') {
                            ?>
                                <div>
                                    <a href="?act=cancelorder&id=<?= $rows['order_id'] ?>"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này không?')">Hủy đơn</button></a>
                                </div>
                            <?php } ?>
                            <div>
                                <a href="?act=detail&id=<?= $rows['order_id'] ?>"><button class="btn btn-primary">
                                        Xem Chi Tiết
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php require_once 'component/client/footer.php' ?>

        <!-- ChagePass Modal -->

        <script>
            function validatechangepassForm() {
                const currentPassword = document.getElementById("currentPassword").value.trim();
                const newPassword = document.getElementById("newPassword").value.trim();
                const confirmPassword = document.getElementById("confirmPassword").value.trim();

                const currentPasswordError = document.getElementById("currentPasswordError");
                const newPasswordError = document.getElementById("newPasswordError");
                const confirmPasswordError = document.getElementById("confirmPasswordError");

                currentPasswordError.textContent = "";
                newPasswordError.textContent = "";
                confirmPasswordError.textContent = "";

                let isValid = true;

                if (currentPassword === "") {
                    currentPasswordError.textContent = "Vui lòng nhập mật khẩu hiện tại.";
                    isValid = false;
                }

                if (newPassword === "") {
                    newPasswordError.textContent = "Vui lòng nhập mật khẩu mới.";
                    isValid = false;
                } else if (newPassword.length < 6) {
                    newPasswordError.textContent = "Mật khẩu mới phải chứa ít nhất 6 ký tự.";
                    isValid = false;
                }

                if (confirmPassword === "") {
                    confirmPasswordError.textContent = "Vui lòng xác nhận mật khẩu mới.";
                    isValid = false;
                } else if (confirmPassword !== newPassword) {
                    confirmPasswordError.textContent = "Xác nhận mật khẩu không khớp với mật khẩu mới.";
                    isValid = false;
                }

                return isValid;
            }

            function validateForm() {
                document.getElementById("fullNameError").innerHTML = "";
                document.getElementById("addressError").innerHTML = "";
                document.getElementById("phoneError").innerHTML = "";

                const fullName = document.getElementById("fullName").value;
                const address = document.getElementById("address").value;
                const phone = document.getElementById("phone").value;

                let valid = true;

                if (fullName.trim() === "") {
                    document.getElementById("fullNameError").innerHTML = "Họ và tên không được để trống.";
                    valid = false;
                }

                if (address.trim() === "") {
                    document.getElementById("addressError").innerHTML = "Địa chỉ không được để trống.";
                    valid = false;
                }

                const phonePattern = /^[0-9]{10}$/;
                if (!phone.match(phonePattern)) {
                    document.getElementById("phoneError").innerHTML = "Số điện thoại phải gồm 10 chữ số.";
                    valid = false;
                }

                return valid;
            }
        </script>
        <!-- Page Footer-->
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>
<div class="modal fade" id="updatepassModal" tabindex="-1" aria-labelledby="updatepassModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatepassModalLabel">Đổi mật khẩu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" onsubmit=" return validatechangepassForm()">
                    <div class="form-group">
                        <label for="currentPassword">Mật khẩu hiện tại</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                        <div id="currentPasswordError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="form-group">
                        <label for="newPassword">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword">
                        <div id="newPasswordError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="form-group">
                        <label for="confirmPassword">Xác nhận mật khẩu mới</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        <div id="confirmPasswordError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btn_submit">Cập nhật</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="updateprofileModal" tabindex="-1" aria-labelledby="updateprofileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateprofileModalLabel">Sửa thông tin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" onsubmit="return validateForm()">
                    <input type="text" name="username" hidden value="<?= $userprofile['username'] ?>">
                    <div class="form-group">
                        <label for="fullName">Họ và tên</label>
                        <input type="text" class="form-control" id="fullName" name="fullName">
                        <div id="fullNameError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address">
                        <div id="addressError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}">
                        <div id="phoneError" class="error-message" style="color: red;"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" name="btn_update">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>