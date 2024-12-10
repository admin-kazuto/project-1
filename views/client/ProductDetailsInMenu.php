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
                                    </div>
                                </div>
                                <div class="offset-top-45">
                                    <div class="group-sm">
                                        <div class="stepper-type-1">
                                            <input name="quantity" class="form-control" type="number" data-zeros="true" value="1" min="1" max="20" readonly="">
                                        </div><button type="submit" class="text-top btn btn-burnt-sienna btn-shape-circle" name="btn_buy"><span>Buy</span></button>
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
        <?php require_once 'component/client/footer.php' ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Java script-->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>

    </script>
</body>

</html>