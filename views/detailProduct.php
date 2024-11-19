<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- <link rel="stylesheet" href="css.css" /> -->
</head>

<body>
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
    <img width="100%" height="400" class="" src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_1920x533/https://cdn.tgdd.vn/2024/03/banner/AirPods-Pro-2-2880-800-1920x533-1.jpg" />
    <h2 class="title">Chi tiết sản phẩm</h2>
    <div style="display: flex; justify-content: center; ">
        <img width="40%" height="40%" src="assets/images/<?= $productOne['pro_img'] ?>" alt="">
        <div>
            <h1 style="color: white"><?= $productOne['pro_name'] ?></h1>
            <div style="font-size: 25px; color: white; margin-top:5px;">
                <strong>
                    <?= number_format($productOne['price']) ?>₫ <strike>25.690.000₫</strike>
                </strong>
            </div>

            <div class="box-promo">
                <span>Khuyến mãi </span>
                <small>Giá và khuyến mãi dự kiến áp dụng đến 23:00 | 31/05</small>
                <div class="content-promo">
                    <p>
                        <i></i>
                        <b>Thu cũ Đổi mới: Giảm đến 2 triệu (Tuỳ model máy cũ, Không kèm
                            thanh toán qua cổng online, mua kèm)
                            <a href=""> Xem chi tiết</a></b>
                    </p>
                    <p>
                        <i></i>
                        <b>Hoàn tiền nếu ở đâu rẻ hơn (Trong vòng 7 ngày; chỉ áp dụng tại
                            siêu thị) <a href=""> Xem chi tiết</a></b>
                    </p>
                </div>
            </div>

            <div class="buy-sp">
                <input class="btn-buy" type="submit" value="Mua ngay" />
            </div>
            <ul class="policy">
                <li>
                    <span> Chi tiết bộ sản phẩm gồm:
                        <?= $productOne['detail'] ?>

                    </span>
                </li>
                <li>
                    <span>
                        Hư gì đổi nấy <b>12 tháng</b> tại 3260 siêu thị trên toàn quốc
                        <a href=""> Xem chi tiết chính sách bảo hành, đổi trả </a>
                    </span>
                </li>
                <li>
                    <span> Bảo hành chính hãng 1 năm </span>
                </li>
                <li>
                    <span> Giao hàng nhanh toàn quốc <a href="">Xem chi tiết</a> </span>
                </li>
                <li>
                    <span>
                        Tổng đài: <a href="tel:1900969642">1900.9696.42</a> (7:30 - 22:00)
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <footer class="footer" style="clear: both; margin-top:40px">
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

</body>

</html>