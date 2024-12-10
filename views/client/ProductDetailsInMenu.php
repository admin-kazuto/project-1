<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Single Product</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
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
        <!-- Page Content-->
        <main class="page-content">
            <!-- Breadcrumbs & Page title-->
            <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
                            <p class="h3 text-white">Single Product</p>
                            <ul class="breadcrumbs-custom offset-top-10">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Single Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-50 section-sm-100">
                <div class="container">
                    <form action="" method="post" >
                        <div class="row justify-content-xs-center">
                            <div class="col-sm-6 text-lg-start">
                                <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                                <!-- Slick Carousel-->
                                <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="false" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                                    <div class="item"><img class="img-responsive reveal-inline-block" src="assets/images/<?= $product['product_image'] ?>" alt="" width="542" height="448">
                                    </div>
                                </div>
                                <div class="slick-slider slick-slider-single-item align-center" id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="3" data-xs-items="3" data-sm-items="3" data-md-items="4" data-lg-items="5" data-slide-to-scroll="1">
                                    <div class="item">
                                        <div><img src="assets/images/<?= $product['product_image'] ?>" alt="" width="84" height="69">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5 text-sm-start offset-top-60 offset-sm-top-0">
                                <div class="reveal-xs-flex justify-content-xs-center align-content-xs-center justify-content-sm-start">
                                    <p style="line-height: 1.02778;font-size: 36px;font-weight: 700;color:black" name="product_name" class="font-default"><?= $product['product_name'] ?></p>
                                    <div class="inset-xs-left-50 offset-top-0">
                                        <div class="team-member-position team-member-position-burnt-sienna"><span class="big text-italic text-middle">Hot</span></div>
                                    </div>
                                </div>
                                <div class="offset-top-15">
                                    <p>Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes</p>
                                </div>
                                <div class="offset-top-15">
                                    <!-- <div class="group-sm"><a class="link-zoom" href="#"><img src="assets/images/<?= $product['product_image'] ?>" alt="" width="57" height="21"></a><a class="link-zoom" href="#"><img src="images/shop-single-02-52x21.png" alt="" width="52" height="21"></a><a class="link-zoom" href="#"><img src="assets/images/<?= $product['product_image'] ?>" alt="" width="54" height="21"></a></div> -->
                                </div>
                                <hr class="offset-top-30 veil reveal-sm-block">
                                <div class="offset-top-30">
                                    <div class="responsive-tabs responsive-tabs-shop responsive-tabs-horizontal">
                                        <ul class="resp-tabs-list">
                                            <?php
                                            foreach ($priceVariation as $price) {
                                                echo "<li>
                                                <span  class='price'> <input type='hidden' name='price' value='" . $price['price'] . "' >" . number_format($price['price']) . "</span>
                                                <span class='icon icon-circle'><input type='hidden' name='variation_id' value=' " . $price['variation_id'] . "'> " . $price['variation_name'] . "</span>
                                                </li>";
                                            }
                                            ?>
                                        </ul>

                                        <!-- <div class="resp-tabs-container">
                                            <div>
                                                <div class="progress-linear" data-to="30">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">energy value</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-primary" style="width: 30%;"></div><span class="progress-text">360kcal</span><span class="text-bold progress-value">30</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="39">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">proteins</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-burnt-sienna" style="width: 39%;"></div><span class="progress-text">24g</span><span class="text-bold progress-value">39</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="15">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">carbohydrates</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-silver-tree" style="width: 15%;"></div><span class="progress-text">40g</span><span class="text-bold progress-value">15</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="progress-linear" data-to="43">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">energy value</p>

                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-primary" style="width: 43%;"></div><span class="progress-text">510kcal</span><span class="text-bold progress-value">43</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="59">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">proteins</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-burnt-sienna" style="width: 59%;"></div><span class="progress-text">44g</span><span class="text-bold progress-value">59</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="20">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">carbohydrates</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-silver-tree" style="width: 20%;"></div><span class="progress-text">50g</span><span class="text-bold progress-value">20</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="progress-linear" data-to="43">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">energy value</p>

                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-primary" style="width: 43%;"></div><span class="progress-text">510kcal</span><span class="text-bold progress-value">43</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="59">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">proteins</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-burnt-sienna" style="width: 59%;"></div><span class="progress-text">44g</span><span class="text-bold progress-value">59</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="20">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">carbohydrates</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-silver-tree" style="width: 20%;"></div><span class="progress-text">50g</span><span class="text-bold progress-value">20</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="progress-linear" data-to="43">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">energy value</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-primary" style="width: 43%;"></div><span class="progress-text">510kcal</span><span class="text-bold progress-value">43</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="59">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">proteins</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-burnt-sienna" style="width: 59%;"></div><span class="progress-text">44g</span><span class="text-bold progress-value">59</span>
                                                    </div>
                                                </div>
                                                <div class="progress-linear" data-to="20">
                                                    <div class="progress-header clearfix">
                                                        <div class="text-start">
                                                            <p class="text-uppercase">carbohydrates</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar-linear-wrap offset-top-5">
                                                        <div class="progress-bar-linear bg-silver-tree" style="width: 20%;"></div><span class="progress-text">50g</span><span class="text-bold progress-value">20</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="offset-top-45">
                                    <div class="group-sm">
                                        <div class="stepper-type-1">
                                            <input name="quantity" class="form-control" type="number" data-zeros="true" value="1" min="1" max="20" readonly="">
                                        </div><button type="submit" class="text-top btn btn-burnt-sienna btn-shape-circle"><span>Buy</span></button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </section>
            <section class="text-start">
                <div class="responsive-tabs responsive-tabs-horizontal responsive-tabs-horizontal-background">
                    <ul class="resp-tabs-list container">
                        <li>Description</li>
                        <li>Delivery</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <div>
                            <p class="text-base"><?= $product['description'] ?></p>
                            <div class="unit unit-horizontal unit-spacing-xs offset-top-20">
                                <div class="unit-left">
                                    <p class="h6">Ingredients:</p>
                                </div>
                                <div class="unit-body">
                                    <p>Turkey / Alfalfa / Lettuce / Chicken Beef / Tomatoes</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="text-base">Here you can read some details about a nifty little lifecycle of your order's journey from the time you place your order to your new treasures arriving at your doorstep. At first, you choose the product you like. Then you put into your shopping cart and pass the checkout process in a few clicks. Our store offers several payment and delivery methods, so after placing your order, you'll have an opportunity to choose which one is the most convenient for you.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Page Footers-->
        <footer class="page-foot text-sm-start">
            <section class="bg-gray-darker section-top-55 section-bottom-60">
                <div class="container">
                    <div class="row border-start-cell">
                        <div class="col-sm-6 col-md-3 col-lg-4"><a class="brand brand-inverse" href="index.html">
                                <svg x="0px" y="0px" width="157px" height="41px" viewBox="0 0 157 41">
                                    <text transform="matrix(1 0 0 1 1.144409e-004 32)" fill="#2C2D2F" font-family="'Grand Hotel'" font-size="45.22">QuickFood</text>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#EB5453" d="M43.743,2.954c2.606,0,4.719,2.091,4.719,4.672  c0,2.58-2.113,4.672-4.719,4.672c-2.606,0-4.719-2.091-4.719-4.672C39.024,5.045,41.137,2.954,43.743,2.954z"></path>
                                </svg></a>
                            <ul class="list-unstyled contact-info offset-top-5">
                                <li>
                                    <div class="unit unit-horizontal unit-top unit-spacing-xxs">
                                        <div class="unit-left"><span class="text-white">Address:</span></div>
                                        <div class="unit-body text-start text-gray-light">
                                            <p>267 Park Avenue New York, NY 90210</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-horizontal unit-top unit-spacing-xxs">
                                        <div class="unit-left"><span class="text-white">Email:</span></div>
                                        <div class="unit-body"><a class="link-gray-light" href="mailto:#">info@demolink.org</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 offset-top-50 offset-sm-top-0">
                            <h4 class="text-uppercase">Our menu</h4>
                            <ul class="list-tags offset-top-15">
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">burgers</a></li>
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">pizzas</a></li>
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">toasts</a></li>
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">Salads</a></li>
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">drinks</a></li>
                                <li class="text-gray-light"><a class="link-gray-light" href="menu-single.html">desserts</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-10 col-lg-5 offset-top-50 offset-md-top-0 col-md-6">
                            <h4 class="text-uppercase">newsletter</h4>
                            <div class="offset-top-20">
                                <form class="rd-mailform form-subscribe form-inline-flex-xs" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Your Email" type="email" name="email" data-constraints="@Required @Email">
                                    </div>
                                    <button name="btn_addtocard" class="btn btn-burnt-sienna btn-shape-circle" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-20 bg-white">
                <div class="container">
                    <div class="row justify-content-xs-center justify-content-sm-between">
                        <div class="col-sm-5 offset-top-26 text-md-start">
                            <p class="copyright">
                                QuickFood
                                &nbsp;©&nbsp;<span class="copyright-year"></span>&nbsp;<br class="veil-sm"><a href="privacy.html">Privacy Policy</a>
                            </p>
                        </div>
                        <div class="col-sm-4 offset-top-30 offset-sm-top-0 text-md-end">
                            <ul class="list-inline list-inline-sizing-1">
                                <li><a class="link-silver-light" href="#"><span class="icon icon-xs fa-instagram"></span></a></li>
                                <li><a class="link-silver-light" href="#"><span class="icon icon-xs fa-facebook"></span></a></li>
                                <li><a class="link-silver-light" href="#"><span class="icon icon-xs fa-twitter"></span></a></li>
                                <li><a class="link-silver-light" href="#"><span class="icon icon-xs fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script><!-- End Google Tag Manager -->
</body>

</html>