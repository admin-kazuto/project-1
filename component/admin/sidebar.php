<!--begin::Sidebar-->
<?php
if ($_SESSION['role'] != 'admin') {
  // Lưu thông báo vào session
  $_SESSION['message'] = 'Bạn không có quyền truy cập vào trang này. Vui lòng đăng nhập với tài khoản quản trị.';

  // Chuyển hướng đến trang đăng nhập
  header('location:?act=login');
  exit(); // Đảm bảo không có mã nào khác được thực thi sau khi chuyển hướng
}
?>

<aside
  style="background-color: #fccb56"
  class="app-sidebar shadow"
  data-bs-theme="light">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.php" class="brand-link">
      <!--begin::Brand Image-->
      <!-- <img
              src="../../dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            /> -->
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Admin Page</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false">
        <li class="active nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
              Category
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./widgets/cards.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Product category</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-clipboard-fill"></i>
            <p>
              Products
              <!-- <span class="nav-badge badge text-bg-secondary me-3"
                      >6</span
                    > -->
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./layout/logo-switch.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Product list</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./layout/layout-rtl.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add new product</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-person-fill"></i>
            <p>
              Accounts
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?act=listaccount" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Danh sách tài khoản</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="./UI/icons.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Users</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="?act=insertaccount" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Thêm tài khoản</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-ticket"></i>
            <!-- <i class=" bi bi-pencil-square"></i> -->
            <p>
              Discount
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./forms/general.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Discount list</p>
              </a>
            </li>

          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./forms/general.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add new discount code</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-file-earmark-text-fill"></i>
            <p>
              Order
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./tables/simple.html" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Oder detail</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->