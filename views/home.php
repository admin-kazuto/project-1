<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang chủ</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
</head>

<body>
  <header>
    <div class="menu">

      <ul>
        <li>
          <a href="./">
            <span>Trang chủ</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>iPhone</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>Mac</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>iPad</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>Watch</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>Tai nghe, Loa</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>Phụ kiện</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>TekZone</span>
          </a>
        </li>
        <li>
          <a href="">
            <span>TopCare</span>
          </a>
        </li>
      </ul>
    </div>
  </header>
  <div class="Sslider">
    <div class="list">
      <div class="items">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/04/banner/Upgrade-iPhone-2880-800--1--1920x533.png" alt="" />
      </div>
      <div class="items">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/04/banner/MacBook-chung-2880-800-1920x533.png" alt="" />
      </div>
      <div class="items">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/04/banner/AWSE-2880-800-1920x533.png" alt="" />
      </div>
      <div class="items">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/04/banner/AWSE-2880-800-1920x533.png" alt="" />
      </div>
      <div class="items">
        <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/04/banner/Airpods2-2880-800-1920x533.png" alt="" />
      </div>
    </div>
    <div class="buttonss">
      <button id="prev">
        < </button>
          <button id="next">></button>
    </div>
    <ul class="dotss">
      <li class="active"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <div>
    <h2 class="title">Sản phẩm mới nhất</h2>
    <div class="form">
      <?php
      foreach ($top4product as  $values) {
        if ($values['cate_id'] == 1) {
      ?>
          <div class="item-dienthoai">
            <div>
              <div>
                <img src="assets/images/<?= $values['pro_img'] ?>" alt="">
                <h3>
                  <a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><?= $values['pro_name'] ?></a>
                </h3>
                <h2><?= number_format($values['price']) ?></h2>
                <br>
                <button class="btn"><a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><b>Đặt hàng</b></a></button>
              </div>
            </div>
          </div>
        <?php
        } else {
        ?>
          <div class="item">
            <div>
              <div>
                <img src="assets/images/<?= $values['pro_img'] ?>" alt="">
                <h3>
                  <a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><?= $values['pro_name'] ?></a>
                </h3>
                <h2><?= number_format($values['price']) ?></h2>
                <br>
                <button class="btn"><a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><b>Đặt hàng</b></a></button>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <div>
    <h2 class="title">Điện thoại</h2>
    <div class="form">
      <?php
      foreach ($dienthoai as  $values) {
        if ($values['cate_id'] == 1) {
      ?>
          <div class="item-dienthoai">
            <div>

              <div>
                <img src="assets/images/<?= $values['pro_img'] ?>" alt="">
                <h3>
                  <a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><?= $values['pro_name'] ?></a>
                </h3>
                <h2><?= number_format($values['price']) ?></h2>
                <br>
                <button class="btn"><a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><b>Đặt hàng</b></a></button>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
  <h2 class="title">Máy tính</h2>
  <div class="form">
    <?php
    foreach ($maytinh as  $values) {
      if ($values['cate_id'] == 2) {
    ?>
        <div class="item">
          <div>

            <div>
              <img src="assets/images/<?= $values['pro_img'] ?>" alt="">
              <h3>
                <a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><?= $values['pro_name'] ?></a>
              </h3>
              <h2><?= number_format($values['price']) ?></h2>
              <br>
              <button class="btn"><a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><b>Đặt hàng</b></a></button>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
  //
  <h2 class="title">Tivi</h2>
  <div class="form">
    <?php
    foreach ($tivi as  $values) {
      if ($values['cate_id'] == 3) {
    ?>
        <div class="item">
          <div>

            <div>
              <img src="assets/images/<?= $values['pro_img'] ?>" alt="" width="100%">
              <h3>
                <a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><?= $values['pro_name'] ?></a>
              </h3>
              <h2><?= number_format($values['price']) ?></h2>
              <br>
              <button class="btn"><a href="?act=detailpro&id=<?= $values['pro_id'] ?>"><b>Đặt hàng</b></a></button>
            </div>
          </div>
        </div>
    <?php
      }
    }
    ?>
  </div>
  </div>

  <footer class="footer">
    <ul class="list-foot">
      <li>
        <span>Tổng đài</span>

        <a href="tel:1900969642">
          <span>Mua hàng:</span>
          <b>1900.9696.42</b>
          (7:30 - 22:00)
        </a>
        <a href="tel:1900969642">
          <span>Khiếu nại:</span>
          <b>1900.9868.43</b>
          (8:00 - 21:30)
        </a>
      </li>
      <li>
        <span>Hệ thống cửa hàng</span>
        <a href=""> Xem 97 cửa hàng </a>
        <a href=""> Nội quy cửa hàng </a>
        <a href=""> Chất lượng phục vụ </a>
        <a href=""> Chính sách bảo hành &amp; đổi trả </a>
      </li>
      <li>
        <span>Hỗ trợ khách hàng</span>
        <a href=""> Điều kiện giao dịch chung </a>
        <a href=""> Hướng dẫn mua hàng online </a>
        <a href=""> Chính sách giao hàng </a>
        <a href=""> Hướng dẫn thanh toán </a>
      </li>
      <li>
        <span>Về thương hiệu TopZone</span>

        <a href="" class="color-link"> Tích điểm Quà tặng VIP </a>
        <a href=""> Giới thiệu TopZone </a>
        <a href=""> Bán hàng doanh nghiệp </a>
        <a href=""> Chính sách xử lý dữ liệu cá nhân </a>
        <a href="">Xem bản mobile</a>
      </li>
      <li>
        <span>Trung tâm bảo hành TopCare</span>
        <a href=""> Giới thiệu TopCare </a>
      </li>
    </ul>
  </footer>
  <script>
    let slider = document.querySelector(".Sslider .list");
    let items = document.querySelectorAll(".Sslider .list .items");
    let next = document.getElementById("next");
    let prev = document.getElementById("prev");
    let dots = document.querySelectorAll(".Sslider .dotss li");

    let lengthItems = items.length - 1;
    let active = 0;
    next.onclick = function() {
      active = active + 1 <= lengthItems ? active + 1 : 0;
      reloadSlider();
    };
    prev.onclick = function() {
      active = active - 1 >= 0 ? active - 1 : lengthItems;
      reloadSlider();
    };
    let refreshInterval = setInterval(() => {
      next.click();
    }, 3000);

    function reloadSlider() {
      slider.style.left = -items[active].offsetLeft + "px";
      //
      let last_active_dot = document.querySelector(
        ".Sslider .dots li.active"
      );
      last_active_dot.classList.remove("active");
      dots[active].classList.add("active");

      clearInterval(refreshInterval);
      refreshInterval = setInterval(() => {
        next.click();
      }, 3000);
    }

    dots.forEach((li, key) => {
      li.addEventListener("click", () => {
        active = key;
        reloadSlider();
      });
    });
    window.onresize = function(event) {
      reloadSlider();
    };

    ////////////////////////////////////////////////////////////////////////
  </script>
</body>

</html>