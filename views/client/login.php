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
                  <li>Login</li>
                  <li>Registration</li>
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
                    <form class="rd-mailform form-register text-center offset-top-20" method="post" onsubmit="return validateloginForm()">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-username">Username:</label>
                        <input class="form-control" type="text" id="username_login" name="username_login">
                      </div>
                      <div id="error-username_login" style="color: red; margin-top: 10px;"></div>
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="contact-password">Password:</label>
                        <input class="form-control" type="password" id="password_login" name="password_login">
                      </div>
                      <div id="error-password_login" style="color: red; margin-top: 10px;"></div>
                      <a href="?act=forgotpass">Quên mật khẩu</a>
                      <?php
                      if (isset($_SESSION['message'])) {
                        echo '<div style="color:red">' . $_SESSION['message'] . '</div>';
                        unset($_SESSION['message']);
                      }
                      ?>
                      <div class="offset-top-50">
                        <button class="btn btn-primary-lighter btn-fullwidth btn-shadow" type="submit" name="btn_login">Đăng nhập</button>
                      </div>
                    </form>

                  </div>
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
                    <form class="rd-mailform form-register text-center offset-top-20" method="post" onsubmit="return validateregisterForm()">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="name_register">Họ và tên</label>
                        <input class="form-control" type="text" id="name_register" name="name_register" />
                        <div class="error-message" id="error-name" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="username_register">Username</label>
                        <input class="form-control" type="text" id="username_register" name="username_register" />
                        <div class="error-message" id="error-username" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="email_register">E-mail</label>
                        <input class="form-control" type="email" id="email_register" name="email_register" />
                        <div class="error-message" id="error-email" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="password_register">Password</label>
                        <input class="form-control" type="password" id="password_register" name="password_register" />
                        <div class="error-message" id="error-password" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="confirm_password_register">Confirm Password</label>
                        <input class="form-control" type="password" id="confirm_password_register" name="confirm_password_register" />
                        <div class="error-message" id="error-confirm-password" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="adress_register">Address</label>
                        <input class="form-control" type="text" id="adress_register" name="adress_register" />
                        <div class="error-message" id="error-address" style="color: red;margin-top: 10px;"></div>
                      </div>

                      <div class="form-group">
                        <label class="form-label form-label-outside" for="phone_register">Phone Number</label>
                        <input class="form-control" type="number" id="phone_register" name="phone_register" />
                        <div class="error-message" id="error-phone" style="color: red;margin-top: 10px;"></div>
                      </div>
                      <?php
                      if (isset($_SESSION['message_register'])) {
                        echo '<div style="color:red">' . $_SESSION['message_register'] . '</div>';
                        unset($_SESSION['message_register']); // Xóa thông báo sau khi hiển thị
                      }
                      ?>
                      <div class="offset-top-50">
                        <button class="btn btn-primary-lighter btn-fullwidth btn-shadow" type="submit" name="btn_register">Register</button>
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
    function validateloginForm() {
      const username = document.getElementById('username_login').value.trim();
      const password = document.getElementById('password_login').value.trim();
      const errorMessage = document.getElementById('error-username_login');
      const errorMessage1 = document.getElementById('error-password_login');

      errorMessage.textContent = '';
      errorMessage1.textContent = '';

      if (username === '') {
        errorMessage.textContent = 'Vui lòng nhập tên đăng nhập.';
        return false;
      }

      if (password === '') {
        errorMessage1.textContent = 'Vui lòng nhập mật khẩu.';
        return false;
      }

      if (password.length < 6) {
        errorMessage1.textContent = 'Mật khẩu phải có ít nhất 6 ký tự.';
        return false;
      }
      return true;
    }

    function validateregisterForm() {
      // Lấy giá trị các trường nhập liệu
      const name = document.getElementById('name_register').value.trim();
      const username = document.getElementById('username_register').value.trim();
      const email = document.getElementById('email_register').value.trim();
      const password = document.getElementById('password_register').value.trim();
      const confirmPassword = document.getElementById('confirm_password_register').value.trim();
      const address = document.getElementById('adress_register').value.trim();
      const phone = document.getElementById('phone_register').value.trim();

      // Xóa thông báo lỗi cũ
      document.querySelectorAll('.error-message').forEach((el) => (el.textContent = ''));

      // Biến trạng thái để kiểm tra tính hợp lệ
      let isValid = true;

      // Kiểm tra từng trường
      if (name === '') {
        document.getElementById('error-name').textContent = 'Vui lòng nhập họ và tên.';
        isValid = false;
      }

      if (username === '') {
        document.getElementById('error-username').textContent = 'Vui lòng nhập tên đăng nhập.';
        isValid = false;
      }

      if (email === '') {
        document.getElementById('error-email').textContent = 'Vui lòng nhập email.';
        isValid = false;
      } else if (!/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById('error-email').textContent = 'Email không hợp lệ.';
        isValid = false;
      }

      if (password === '') {
        document.getElementById('error-password').textContent = 'Vui lòng nhập mật khẩu.';
        isValid = false;
      } else if (password.length < 6) {
        document.getElementById('error-password').textContent = 'Mật khẩu phải có ít nhất 6 ký tự.';
        isValid = false;
      }

      if (confirmPassword !== password) {
        document.getElementById('error-confirm-password').textContent = 'Mật khẩu xác nhận không khớp.';
        isValid = false;
      }

      if (address === '') {
        document.getElementById('error-address').textContent = 'Vui lòng nhập địa chỉ.';
        isValid = false;
      }

      if (phone === '') {
        document.getElementById('error-phone').textContent = 'Vui lòng nhập số điện thoại.';
        isValid = false;
      } else if (!/^\d{10,11}$/.test(phone)) {
        document.getElementById('error-phone').textContent = 'Số điện thoại không hợp lệ.';
        isValid = false;
      }

      // Trả về trạng thái hợp lệ
      return isValid;
    }
  </script>
</body>

</html>