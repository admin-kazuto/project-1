<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Login/Register</title>
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
            <!-- Breadcrumbs & Page title-->
            <section
                class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
                            <p class="h3 text-white">Login/Register</p>
                            <ul class="breadcrumbs-custom offset-top-10">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Login/Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Buttons-->
            <section class="bg-white text-center section-50 section-sm-100">
                <div class="container">
                    <div class="row justify-content-xs-center">
                        <div class="col-sm-8 col-lg-6">
                            <div
                                class="responsive-tabs responsive-tabs-modern responsive-tabs-modern-mod-1 responsive-tabs-horizontal">
                                <ul class="resp-tabs-list">
                                    <li><a href="?act=login">Login</a></li>
                                    <li><a href="?act=login">Registration</a></li>
                                </ul>
                                <div class="resp-tabs-container">
                                    <div>
                                        <div class="group-sm">
                                            <a
                                                class="btn btn-facebook btn-icon btn-icon-left"
                                                href="#"><span class="icon icon-xs fa-facebook"></span><span>Facebook</span></a><a
                                                class="btn btn-twitter btn-icon btn-icon-left"
                                                href="#"><span class="icon icon-xs fa-twitter"></span><span>Twitter</span></a>
                                            <a
                                                class="btn btn-google-plus btn-icon btn-icon-left"
                                                href="#"><span class="icon icon-xs fa-google-plus"></span><span>Google +</span></a>
                                        </div>
                                        <div class="divider-custom offset-top-30">
                                            <p class="small text-uppercase">Or</p>
                                        </div>
                                        <!-- RD Mailform-->
                                        <form class="rd-mailform form-register text-center offset-top-20" method="post" onsubmit="return validateEmailForm()">
                                            <div class=" form-group">
                                                <label class="form-label form-label-outside" for="contact-email">Your Email</label>
                                                <input class="form-control" type="email" id="email_getotp" name="email_getotp" />
                                                <div class="error-message" id="error-email_getotp" style="color: red;margin-top: 10px;"></div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['message_email'])) {
                                                echo '<div style="color:red">' . $_SESSION['message_email'] . '</div>';
                                                unset($_SESSION['message_email']);
                                            }
                                            ?>
                                            <div class="offset-top-10">
                                                <button class="btn btn-primary-lighter btn-fullwidth btn-shadow" type="submit" name="btn_getotp">Send OTP</button>
                                            </div>
                                        </form>

                                        <form class="rd-mailform form-register text-center offset-top-20" method="post" onsubmit="return validateresetForm()">
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="otp">Enter OTP code</label><br>
                                                <input class="form-control" type="number" id="otp" name="otp" style="background-color: #f5f5f5;" />
                                                <div class="error-message" id="error-otp" style="color: red;margin-top: 10px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="password">New Password</label>
                                                <input class="form-control" type="password" id="password" name="password" />
                                                <div class="error-message" id="error-password" style="color: red;margin-top: 10px;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label form-label-outside" for="confirm_password">Confirm Password</label>
                                                <input class="form-control" type="password" id="confirm_password" name="confirm_password" />
                                                <div class="error-message" id="error-confirm_password" style="color: red;margin-top: 10px;"></div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['message_reset'])) {
                                                echo '<div style="color:red">' . $_SESSION['message_reset'] . '</div>';
                                                unset($_SESSION['message_reset']);
                                            }
                                            ?>
                                            <div class="offset-top-50">
                                                <button class="btn btn-primary-lighter btn-fullwidth btn-shadow" name="btn_submit">Reset password</button>
                                            </div>
                                        </form>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Page Footer-->
        <?php require_once 'component/client/footer.php' ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        function validateEmailForm() {
            // Lấy giá trị email từ input
            const email = document.getElementById('email_getotp').value.trim();

            // Lấy div thông báo lỗi
            const errorEmail = document.getElementById('error-email_getotp');

            // Xóa thông báo lỗi cũ
            errorEmail.textContent = '';

            // Kiểm tra email không được để trống
            if (email === '') {
                errorEmail.textContent = 'Vui lòng nhập địa chỉ email.';
                return false;
            }

            // Kiểm tra định dạng email hợp lệ
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errorEmail.textContent = 'Email không hợp lệ.';
                return false;
            }

            // Nếu hợp lệ, trả về true để form được gửi
            return true;
        }

        function validateresetForm() {
            const otp = document.getElementById('otp').value.trim();
            const password = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirm_password').value.trim();

            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach((el) => (el.textContent = ''));

            let isValid = true;

            // Validate OTP field
            if (otp === '') {
                document.getElementById('error-otp').textContent = 'Please enter the OTP code.';
                isValid = false;
            }

            // Validate password field
            if (password === '') {
                document.getElementById('error-password').textContent = 'Please enter a new password.';
                isValid = false;
            } else if (password.length < 6) {
                document.getElementById('error-password').textContent = 'Password must be at least 6 characters long.';
                isValid = false;
            }

            // Validate confirm password field
            if (confirmPassword === '') {
                document.getElementById('error-confirm_password').textContent = 'Please confirm your password.';
                isValid = false;
            } else if (confirmPassword !== password) {
                document.getElementById('error-confirm_password').textContent = 'Passwords do not match.';
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>