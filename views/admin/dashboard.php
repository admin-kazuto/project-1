<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<?php require_once "component/admin/link.php" ?>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">

    <?php require_once "component/admin/header.php" ?>

    <?php require_once "component/admin/sidebar.php" ?>
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Dashboard
                </li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <!--begin::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 1-->
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3>150</h3>
                  <p>Orders</p>
                </div>
                <svg
                  class="small-box-icon"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
                </svg>
                <a
                  href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 1-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 2-->
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>150</h3>
                  <p>Total Products</p>
                </div>
                <svg
                  class="small-box-icon"
                  version="1.0"
                  xmlns="http://www.w3.org/2000/svg"
                  width="70"
                  height="70"
                  viewBox="0 0 512.000000 512.000000"
                  preserveAspectRatio="xMidYMid meet">

                  <g
                    transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000"
                    stroke="none"
                    opacity="0.3">
                    <path
                      d="M587 5026 c-94 -34 -159 -104 -184 -198 -7 -29 -13 -98 -13 -154 l0
                        -101 -75 -5 c-94 -6 -155 -40 -200 -112 -44 -72 -44 -170 0 -242 45 -72 106
                        -106 200 -112 l75 -5 0 -208 0 -209 -62 0 c-70 0 -147 -30 -185 -71 -33 -36
                        -63 -109 -63 -155 0 -132 99 -232 243 -242 l67 -5 0 -208 0 -209 -67 0 c-84 0
                        -137 -23 -184 -79 -79 -92 -78 -214 3 -305 44 -51 92 -73 182 -82 l66 -7 0
                        -202 0 -202 -67 -5 c-144 -10 -243 -109 -243 -242 0 -48 37 -131 71 -163 42
                        -39 109 -63 177 -63 l62 0 0 -209 0 -208 -75 -5 c-94 -6 -155 -40 -200 -112
                        -26 -43 -30 -59 -30 -121 0 -62 4 -78 30 -121 45 -71 106 -106 199 -112 l74
                        -4 4 -127 c5 -137 16 -175 67 -240 16 -20 53 -50 83 -67 l53 -29 1740 -3
                        c1976 -3 1809 -10 1900 81 74 75 85 113 85 309 l0 158 113 0 c100 0 119 3 158
                        23 27 15 52 38 66 63 22 38 23 48 23 302 0 295 -3 310 -68 360 -33 26 -42 27
                        -164 30 l-129 4 3 121 3 122 187 5 c204 5 213 8 262 74 20 26 21 43 24 302 3
                        263 2 276 -18 312 -12 21 -37 49 -57 62 -35 24 -44 25 -220 28 l-183 4 0 119
                        0 119 218 0 c247 0 276 7 328 76 l29 37 3 261 c4 295 -1 325 -66 374 l-35 27
                        -239 3 -238 3 0 124 0 124 308 3 c306 3 307 3 341 27 65 47 71 75 71 362 0
                        248 -1 257 -23 299 -16 30 -37 51 -67 67 -42 22 -50 23 -337 23 l-293 0 0 158
                        c0 195 -11 234 -85 309 -91 90 75 83 -1884 83 -1426 -1 -1733 -3 -1764 -14z
                        m583 -2466 l0 -2340 -262 0 c-231 0 -267 2 -298 18 -58 29 -74 70 -79 200 l-3
                        112 60 0 c150 0 256 97 256 235 0 138 -106 235 -255 235 l-59 0 2 208 3 207
                        75 5 c125 9 201 69 230 180 27 102 -27 213 -129 265 -18 9 -67 19 -107 22
                        l-74 6 2 206 3 206 82 5 c70 5 88 10 125 36 23 16 56 51 72 78 26 41 30 58 30
                        116 0 58 -4 75 -30 116 -16 27 -49 62 -72 78 -37 26 -55 31 -125 36 l-82 5 -3
                        206 -2 206 74 6 c40 3 89 13 107 22 102 52 156 163 129 265 -29 110 -107 171
                        -230 180 l-75 5 -3 208 -2 207 59 0 c149 0 255 97 255 235 0 138 -106 235
                        -256 235 l-60 0 3 113 c5 129 21 170 79 199 31 16 67 18 298 18 l262 0 0
                        -2340z m2928 2326 c15 -8 38 -26 52 -41 l25 -27 0 -2258 0 -2258 -25 -27 c-55
                        -59 40 -55 -1460 -55 l-1380 0 0 2340 0 2340 1380 0 c1167 0 1385 -2 1408 -14z
                        m-3443 -468 c27 -12 55 -54 55 -83 0 -30 -29 -72 -58 -84 -20 -9 -84 -11 -205
                        -9 -155 3 -177 5 -196 22 -45 40 -34 126 19 153 34 17 348 18 385 1z m4240
                        -318 l0 -245 -287 -3 -288 -2 0 90 0 90 99 0 c96 0 100 1 120 26 27 35 26 59
                        -4 89 -22 23 -32 25 -120 25 l-95 0 0 90 0 90 288 -2 287 -3 0 -245z m-4234
                        -570 c28 -16 51 -67 44 -99 -3 -16 -17 -39 -31 -52 -25 -23 -32 -24 -196 -27
                        -188 -4 -220 3 -243 49 -23 43 -18 77 14 110 l29 29 182 0 c105 0 189 -4 201
                        -10z m4097 -449 c2 -164 -1 -238 -9 -247 -9 -11 -55 -14 -220 -14 l-209 0 0
                        89 0 89 35 6 c81 16 75 136 -7 136 l-28 0 0 90 0 90 218 -2 217 -3 3 -234z
                        m-4081 -455 c39 -34 39 -98 0 -132 -28 -23 -32 -24 -217 -24 l-188 0 -26 31
                        c-33 39 -33 79 0 118 l26 31 188 0 c185 0 189 -1 217 -24z m3971 -334 c9 -7
                        12 -63 10 -248 l-3 -239 -167 -3 -168 -2 0 250 0 250 158 0 c86 0 163 -4 170
                        -8z m-3974 -551 c14 -13 28 -36 31 -52 7 -32 -16 -83 -44 -99 -12 -6 -96 -10
                        -201 -10 l-182 0 -29 29 c-32 32 -37 70 -15 110 26 47 48 51 238 48 170 -2
                        177 -3 202 -26z m3861 -721 l0 -245 -107 -3 -108 -3 0 91 0 90 34 0 c46 0 86
                        33 86 71 0 42 -31 69 -80 69 l-40 0 0 90 0 91 108 -3 107 -3 0 -245z m-3880
                        -152 c27 -12 55 -54 55 -83 0 -30 -29 -72 -58 -84 -20 -9 -84 -11 -205 -9
                        -155 3 -177 5 -196 22 -45 40 -34 126 19 153 34 17 348 18 385 1z" />
                  </g>
                </svg>

                <a
                  href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 2-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 3-->
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>44</h3>
                  <p>Users</p>
                </div>
                <svg
                  class="small-box-icon"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                </svg>
                <a
                  href="#"
                  class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 3-->
            </div>
            <!--end::Col-->
            <div class="col-lg-3 col-6">
              <!--begin::Small Box Widget 4-->
              <div class="small-box text-bg-danger">
                <div class="inner">
                  <h3>5</h3>
                  <p>category</p>
                </div>
                <svg
                  class="small-box-icon"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                  aria-hidden="true">
                  <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                  <path
                    clip-rule="evenodd"
                    fill-rule="evenodd"
                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                </svg>
                <a
                  href="#"
                  class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                  More info <i class="bi bi-link-45deg"></i>
                </a>
              </div>
              <!--end::Small Box Widget 4-->
            </div>
            <!--end::Col-->
          </div>
          <!--end::Row-->
          <!--begin::Row-->

          <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <?php require_once "component/admin/footer.php" ?>
    <!--end::Footer-->
  </div>
  <?php require_once "component/admin/scripts.php" ?>
  <script src="assets/js/adminlite.js"></script>
</body>

</html>