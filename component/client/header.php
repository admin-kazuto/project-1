<header class="page-head">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap rd-navbar-minimal">
        <nav
            class="rd-navbar"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-static"
            data-stick-up-clone="false"
            data-md-stick-up-offset="100px"
            data-lg-stick-up-offset="100px">
            <div class="container container-fluid">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button
                            class="rd-navbar-toggle"
                            data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                            <span></span>
                        </button>
                        <!-- RD Navbar Brand--><a
                            class="rd-navbar-brand brand"
                            href="?act=/">
                            <div class="brand-logo">
                                <svg
                                    x="0px"
                                    y="0px"
                                    width="157px"
                                    height="41px"
                                    viewBox="0 0 157 41">
                                    <text
                                        transform="matrix(1 0 0 1 1.144409e-004 32)"
                                        fill="#2C2D2F"
                                        font-family="'Grand Hotel'"
                                        font-size="45.22">
                                        KTKFood
                                    </text>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        fill="#EB5453"
                                        d="M43.743,2.954c2.606,0,4.719,2.091,4.719,4.672  c0,2.58-2.113,4.672-4.719,4.672c-2.606,0-4.719-2.091-4.719-4.672C39.024,5.045,41.137,2.954,43.743,2.954z"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <!-- RD Navbar Nav-->
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li>
                                <a class="navbar-icon restaurant-icon-19" href="?act=menu">Menu</a>
                                <!-- RD Navbar Dropdown-->
                                <!--<ul class="rd-navbar-dropdown menu-img-wrap">
                                    <li class="menu-img">
                                        <a href="?act=menu"><img
                                                src="assets/images/menu-food-01.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>Pizzas</span></a>
                                    </li>
                                    <li class="menu-img">
                                        <a href="?act=menu"><img
                                                src="assets/images/menu-food-02.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>Burgers</span></a>
                                    </li>
                                    <li class="menu-img">
                                        <a href="?act=menu"><img
                                                src="assets/images/menu-food-03.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>Drinks</span></a>
                                    </li>
                                    <li class="menu-img">
                                        <a href="?act=menu"><img
                                                src="assets/images/menu-food-04.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>Toasts</span></a>
                                    </li>
                                    <li class="menu-img">
                                        <a href="?act=menu"><img
                                                src="assets/images/menu-food-05.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>Salads</span></a>
                                    </li>
                                    <!-- <li class="menu-img">
                                        <a href="menu.php"><img
                                                src="assets/images/menu-food-06.png"
                                                alt=""
                                                width="88"
                                                height="60" /><span>desserts</span></a>
                                    </li> -->
                                <!--</ul> -->
                            </li>
                            <li>
                                <a class="navbar-icon thin-icon-tag" href="blog.php">News</a>
                            </li>
                            <li>
                                <a class="navbar-icon thin-icon-camera" href="blog.php">Gallery</a>
                            </li>
                            <li>
                                <a class="navbar-icon thin-icon-user" href="?act=login">User</a>
                                <!-- RD Navbar Megamenu-->
                                <ul class="rd-navbar-megamenu">
                                    <li>
                                        <ul class="list-marked">
                                            <?php
                                            if (isset($_SESSION['role'])) {
                                                if ($_SESSION['role'] === 'admin') {
                                                    echo '<li><a href="?act=administration" style="font-size: 13px;">Quản trị</a></li>';
                                                }
                                                echo '<li><a href="?act=userprofile" style="font-size: 13px;">Thông tin</a></li>';
                                                echo '<li><a href="?act=logout" style="font-size: 13px;">Đăng xuất</a></li>';
                                            } else {
                                                echo '<li><a href="?act=login" style="font-size: 13px;">Đăng nhập</a></li>';
                                                echo '<li><a href="?act=register" style="font-size: 13px;">Đăng ký</a></li>';
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- RD Navbar Shop-->
                        <ul class="rd-navbar-shop list-inline">
                            <li>
                                <a
                                    class="unit unit-horizontal unit-middle unit-spacing-xxs link-default"
                                    href="tel:#">
                                    <div class="unit-left">
                                        <span
                                            class="icon icon-md icon-primary thin-icon-phone-call text-middle"></span>
                                    </div>
                                    <div class="unit-body">
                                        <address class="contact-info">
                                            <span class="text-bold big">+84 976 890 935</span>
                                        </address>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a
                                    class="unit unit-horizontal unit-middle unit-spacing-xxs link-gray-light"
                                    href="shop-cart.html">
                                    <div class="unit-left">
                                        <span
                                            class="icon icon-md icon-primary thin-icon-cart"></span>
                                    </div>
                                    <div class="unit-body">
                                        <span class="label-inline big">0</span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>