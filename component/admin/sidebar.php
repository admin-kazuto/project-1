<!--begin::Sidebar-->
<?php
if ($_SESSION['role'] != 'admin') {
  $_SESSION['message'] = 'Bạn không có quyền truy cập vào trang này. Vui lòng đăng nhập với tài khoản quản trị.';
  header('location:?act=login');
}
?>

<aside
  style="background-color: #202b39"
  class="app-sidebar shadow"
  data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="?act=administration" class="brand-link">
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
          <a href="?act=administration" class="nav-link">
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
              <a href="?act=listcategory" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?act=addcategory" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Thêm danh mục</p>
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
              <a href="?act=listproduct" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Product list</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?act=addproduct" class="nav-link">
                <i class="nav-icon bi bi-circle"></i><p>Add new product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?act=listvariation" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Variation list</p>
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
              <a href="?act=listdiscount" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Discount list</p>
              </a>
            </li>

          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?act=insertdiscount" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Add new discount code</p>
              </a>
            </li>

          </ul>
        </li>
        <li class="nav-item">
          <a href="?act=listorder" class="nav-link">
            <i class="nav-icon bi bi-file-earmark-text-fill"></i>
            <p>
              Order
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?act=listorder" class="nav-link">
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

