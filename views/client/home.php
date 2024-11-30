<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Home</title>
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
  <?php var_dump($_SESSION) ?>
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
    <!-- Page Header-->
    <?php
    require_once 'component/client/header.php'
    ?>
    <!-- Page Content-->
    <main class="page-content">
      <!-- Swiper variant 3-->
      <section class="bg-gray-darker">
        <div class="swiper-variant-1">
          <div
            class="swiper-container swiper-slider"
            data-slide-effect="fade"
            data-min-height="600px">
            <div class="swiper-wrapper">
              <div
                class="swiper-slide"
                data-slide-bg="assets/images/home-slide-1-1920x800.jpg">
                <div class="swiper-slide-caption text-center">
                  <div class="container">
                    <div class="row align-items-sm-center">
                      <div class="col-sm-6 col-md-5 col-lg-4 text-uppercase">
                        <div class="group-sm">
                          <div
                            class="label-swiper h4 text-italic text-white"
                            data-caption-animate="fadeInLeftSm"
                            data-caption-delay="200">
                            <span>new</span><span>menu</span>
                          </div>
                          <h1
                            class="text-italic text-white"
                            data-caption-animate="fadeInRightSm"
                            data-caption-delay="100">
                            Pizza
                          </h1>
                        </div>
                        <h3
                          class="text-primary-lighter offset-top-5"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="600">
                          with seafood
                        </h3>
                        <a
                          class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-20"
                          href="#"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="800">order online</a>
                      </div>
                      <div
                        class="col-sm-6 col-md-7 col-lg-8 text-lg-end veil reveal-sm-inline-block">
                        <div style="position: relative; z-index: 2">
                          <div
                            data-caption-animate="fadeInLeftSm"
                            data-caption-delay="1500">
                            <img
                              class="img-caption-5 img-responsive veil reveal-lg-inline-block"
                              src="assets/images/slide-caption-image-6-100x118.png"
                              alt=""
                              width="100"
                              height="118" />
                          </div>
                          <div
                            data-caption-animate="fadeInRotate"
                            data-caption-delay="100">
                            <img
                              class="img-responsive reveal-inline-block"
                              src="assets/images/slide-caption-image-1-599x596.png"
                              alt=""
                              width="599"
                              height="596" />
                          </div>
                        </div>
                        <div
                          class="img-caption-1"
                          data-caption-animate="fadeInRightSm"
                          data-caption-delay="600">
                          <img
                            class="img-responsive veil reveal-lg-inline-block"
                            src="assets/images/slide-caption-image-2-346x336.png"
                            alt=""
                            width="346"
                            height="336" />
                        </div>
                        <div
                          class="img-caption-2"
                          data-caption-animate="fadeInRightSm"
                          data-caption-delay="900">
                          <img
                            class="img-responsive veil reveal-lg-inline-block"
                            src="assets/images/slide-caption-image-3-228x310.png"
                            alt=""
                            width="228"
                            height="310" />
                        </div>
                        <div
                          class="img-caption-3"
                          data-caption-animate="fadeInLeftSm"
                          data-caption-delay="800">
                          <img
                            class="img-responsive veil reveal-lg-inline-block"
                            src="assets/images/slide-caption-image-4-179x213.png"
                            alt=""
                            width="179"
                            height="213" />
                        </div>
                        <div
                          class="img-caption-4"
                          data-caption-animate="fadeInLeftSm"
                          data-caption-delay="1000">
                          <img
                            class="img-responsive veil reveal-lg-inline-block"
                            src="assets/images/slide-caption-image-5-522x343.png"
                            alt=""
                            width="522"
                            height="343" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-slide-bg="assets/images/home-slide-2-1920x800.jpg">
                <div class="swiper-slide-caption slide-caption-2 text-center">
                  <div class="container">
                    <div class="row align-items-sm-center">
                      <div class="col-sm-6 col-md-5 col-lg-4">
                        <h5
                          class="text-italic font-secondary text-white"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="100">
                          From Our Chef
                        </h5>
                        <h2
                          class="text-uppercase text-white offset-top-0"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="400">
                          Meet the
                        </h2>
                        <h1
                          class="text-white offset-top-0"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="700">
                          legend
                        </h1>
                        <h4
                          class="text-primary-lighter offset-top-10"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="1000">
                          California Burger
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="swiper-slide"
                data-slide-bg="assets/images/home-slide-3-1920x800.jpg">
                <div class="swiper-slide-caption text-uppercase text-center">
                  <div class="container">
                    <div class="row align-items-sm-center">
                      <div class="col-sm-6 col-md-5 col-lg-4">
                        <div
                          class="label-swiper label-swiper-var-2"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="100">
                          <h4 class="text-italic">hot stuff</h4>
                        </div>
                        <h1
                          class="small text-white"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="400">
                          Mexican
                        </h1>
                        <h3
                          class="text-primary-lighter offset-top-0"
                          data-caption-animate="fadeInUpSmall"
                          data-caption-delay="700">
                          Burger
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Swiper Navigation-->
            <div class="swiper-pagination-wrap">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="swiper-pagination"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-50 section-sm-100">
        <div class="container-wide">
          <div class="row justify-content-xs-center">
            <div class="col-sm-6 col-md-4 view-animate zoomInSmall delay-04">
              <a class="thumbnail-variant-3" href="?act=menu"><img
                  class="img-responsive"
                  src="assets/images/index-01-566x401.jpg"
                  alt=""
                  width="566"
                  height="401" />
                <div class="caption text-center">
                  <h3 class="text-italic">For Vegans</h3>
                  <p class="big">Burger + French Fries + Drink</p>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 view-animate zoomInSmall delay-06">
              <a class="thumbnail-variant-3" href="?act=menu"><img
                  class="img-responsive"
                  src="assets/images/index-02-566x401.jpg"
                  alt=""
                  width="566"
                  height="401" />
                <div class="caption text-center">
                  <h3 class="text-italic">Order Online</h3>
                  <p class="big">Available Every Day 9 AM - 11 PM</p>
                </div>
              </a>
            </div>
            <div
              class="col-sm-6 col-md-4 offset-sm-top-30 offset-md-top-0 view-animate zoomInSmall delay-02">
              <a class="thumbnail-variant-3" href="?act=menu"><img
                  class="img-responsive"
                  src="assets/images/index-03-566x401.jpg"
                  alt=""
                  width="566"
                  height="401" />
                <div class="caption text-center">
                  <h3 class="text-italic">Cake Specials</h3>
                  <p class="big">Every Friday Only $0.99</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section
        class="section-50 section-sm-top-80 section-sm-bottom-100 bg-gray-lighter">
        <h3>Our Menu</h3>
        <div
          class="responsive-tabs responsive-tabs-button responsive-tabs-horizontal responsive-tabs-carousel offset-top-40">
          <ul class="resp-tabs-list">
            <li>Burgers</li>
            <li>Toasts</li>
            <li>Pizzas</li>
            <li>Salads</li>
            <li>Drinks</li>
          </ul>
          <div class="resp-tabs-container text-start">
            <!--hamburger-->
            <div>
              <!-- Slick Carousel-->
              <div
                class="slick-slider slick-tab-centered"
                data-arrows="true"
                data-loop="true"
                data-dots="false"
                data-swipe="true"
                data-items="1"
                data-xs-items="1"
                data-sm-items="2"
                data-md-items="3"
                data-lg-items="3"
                data-xl-items="5"
                data-center-mode="true"
                data-center-padding="10">
                <?php
                if (!empty($AllHamburgers)) {

                  foreach ($AllHamburgers as $Hamburger) {
                    
                ?>
                    <div class="item">
                      <div class="thumbnail-menu-modern">
                        <figure>
                          <img
                            class="img-responsive"
                            src="assets/images/<?= $Hamburger['product_image'] ?>"
                            alt=""
                            width="310"
                            height="260" />
                        </figure>
                        <div class="caption">
                          <h5>
                    
                            <a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $Hamburger['product_id'] ?>"><?= $Hamburger['product_name'] ?></a>
                          </h5>
                          <p class="text-italic">
                            <?= $Hamburger['description'] ?>
                          </p>
                          <p class="price"><?= $Hamburger['price'] ?></p>
                          <a
                            class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                            href="?act=ProductDetailsInMenu&id=<?= $Hamburger['product_id'] ?>">Order Online</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php
                } else {
                  echo 'No hamburgers found.';
                }
                ?>

              </div>
            </div>
            <!--Toasts-->
            <div>
              <!-- Slick Carousel-->
              <div
                class="slick-slider slick-tab-centered"
                data-arrows="true"
                data-loop="true"
                data-dots="false"
                data-swipe="true"
                data-items="1"
                data-xs-items="1"
                data-sm-items="2"
                data-md-items="3"
                data-lg-items="3"
                data-xl-items="5"
                data-center-mode="true"
                data-center-padding="10">

                <?php if (!empty($AllToasts)) {
                  foreach ($AllToasts as $Toast) { ?>

                    <div class="item">
                      <div class="thumbnail-menu-modern">
                        <figure>
                          <img
                            class="img-responsive"
                            src="assets/images/<?= $Toast['product_image'] ?>"
                            alt=""
                            width="310"
                            height="260" />
                        </figure>
                        <div class="caption">
                          <h5>
                            <a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $Toast['product_id'] ?>"><?= $Toast['product_name'] ?></a>
                          </h5>
                          <p class="text-italic">
                            <?= $Toast['description'] ?>
                          </p>
                          <p class="price"><?= $Toast['price'] ?></p>
                          <a
                            class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                            href="?act=ProductDetailsInMenu&id=<?= $Toast['product_id'] ?>">Order Online</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else {
                  echo 'No Toasts found.';
                } ?>
              </div>
            </div>
            <!--Pizzas-->
            <div>
              <!-- Slick Carousel-->
              <div
                class="slick-slider slick-tab-centered"
                data-arrows="true"
                data-loop="true"
                data-dots="false"
                data-swipe="true"
                data-items="1"
                data-xs-items="1"
                data-sm-items="2"
                data-md-items="3"
                data-lg-items="3"
                data-xl-items="5"
                data-center-mode="true"
                data-center-padding="10">
                <?php
                if (!empty($AllPizzas)) {
                  foreach ($AllPizzas as $Pizza) { ?>
                    <div class="item">
                      <div class="thumbnail-menu-modern">
                        <figure>
                          <img
                            class="img-responsive"
                            src="assets/images/<?= $Pizza['product_image'] ?>"
                            alt=""
                            width="310"
                            height="260" />
                        </figure>
                        <div class="caption">
                          <h5>
                            <a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $Pizza['product_id'] ?>"><?= $Pizza['product_name'] ?></a>
                          </h5>
                          <p class="text-italic">
                            <?= $Pizza['description'] ?>
                          </p>
                          <p class="price"><?= $Pizza['price'] ?></p>
                          <a
                            class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                            href="?act=ProductDetailsInMenu&id=<?= $Pizza['product_id'] ?>">Order Online</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else {
                  echo 'No Pizzas found.';
                } ?>
              </div>
            </div>
            <!--Salads-->
            <div>
              <!-- Slick Carousel-->
              <div
                class="slick-slider slick-tab-centered"
                data-arrows="true"
                data-loop="true"
                data-dots="false"
                data-swipe="true"
                data-items="1"
                data-xs-items="1"
                data-sm-items="2"
                data-md-items="3"
                data-lg-items="3"
                data-xl-items="5"
                data-center-mode="true"
                data-center-padding="10">
                <?php if (!empty($AllSalads)) {
                  foreach ($AllSalads as $Salad) { ?>
                    <div class="item">
                      <div class="thumbnail-menu-modern">
                        <figure>
                          <img
                            class="img-responsive"
                            src="assets/images/<?= $Salad['product_image'] ?>"
                            alt=""
                            width="248"
                            height="208" />
                        </figure>
                        <div class="caption">
                          <h5>
                            <a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $Salad['product_id'] ?>">Buffalo Bleu</a>
                          </h5>
                          <p class="text-italic">
                            <?= $Salad['description'] ?>
                          </p>
                          <p class="price"><?= $Salad['price'] ?></p>
                          <a
                            class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                            href="?act=ProductDetailsInMenu&id=<?= $Salad['product_id'] ?>">Order Online</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else {
                  echo 'No Salads found.';
                } ?>
              </div>
            </div>
            <!--Drinks-->
            <div>
              <!-- Slick Carousel-->
              <div
                class="slick-slider slick-tab-centered"
                data-arrows="true"
                data-loop="true"
                data-dots="false"
                data-swipe="true"
                data-items="1"
                data-xs-items="1"
                data-sm-items="2"
                data-md-items="3"
                data-lg-items="3"
                data-xl-items="5"
                data-center-mode="true"
                data-center-padding="10">
                <?php if (!empty($AllDrinks)) {
                  foreach ($AllDrinks as $Drink) { ?>
                    <div class="item">
                      <div class="thumbnail-menu-modern">
                        <figure>
                          <img
                            class="img-responsive"
                            src="assets/images/<?= $Drink['product_image'] ?>"
                            alt=""
                            width="248"
                            height="208" />
                        </figure>
                        <div class="caption">
                          <h5>
                            <a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $Drink['product_id'] ?>"><?= $Drink['product_name'] ?></a>
                          </h5>
                          <p class="text-italic">
                            <?= $Drink['description'] ?>
                          </p>
                          <p class="price"><?= $Drink['price'] ?></p>
                          <a
                            class="btn btn-shape-circle btn-burnt-sienna offset-top-15"
                            href="?act=ProductDetailsInMenu&id=<?= $Drink['product_id'] ?>">Order Online</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                <?php } else {
                  echo 'No Drinks found.';
                } ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!--banner-->
      <section class="bg-image-5">
        <section
          class="parallax-container parallax-light"
          data-parallax-img="assets/images/parallax-03.png">
          <div class="parallax-content">
            <div
              class="container section-80 section-sm-top-140 section-sm-bottom-150 text-center">
              <div class="row justify-content-xs-center">
                <div class="col-sm-10 col-lg-6">
                  <h4 class="text-italic divider-custom-small-primary">
                    Free Delivery
                  </h4>
                  <h2
                    class="text-uppercase text-italic offset-top-10 offset-sm-top-0">
                    Sandwich Day
                  </h2>
                  <div class="label-price offset-top-10">
                    <div
                      class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left">
                        <h1 class="text-accent">
                          3<sup class="h3 text-accent">99</sup>
                        </h1>
                      </div>
                      <div class="unit-body">
                        <ul class="big text-start">
                          <li>Sandwich</li>
                          <li>Salad</li>
                          <li>Drink</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <a
                    class="btn btn-burnt-sienna btn-md btn-shape-circle offset-top-15"
                    href="menu-classic.html">order online</a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--services-->
      <section class="section-50 section-sm-130">
        <div class="container">
          <div class="row justify-content-xs-center">
            <div
              class="col-sm-6 col-md-3 view-animate fadeInUpBigger delay-04">
              <!-- Box icon-->
              <article class="box-icon box-icon-variant-1">
                <div class="icon-wrap">
                  <span
                    class="icon icon-lg text-base thin-icon-time icon-xl"></span>
                </div>
                <div class="box-icon-header">
                  <h5>Fast Delivery</h5>
                </div>
                <hr class="divider-xs bg-accent" />
                <p>
                  Everything you order at QuickFood will be quickly delivered
                  to your door.
                </p>
              </article>
            </div>
            <div
              class="col-sm-6 col-md-3 offset-top-50 offset-sm-top-0 view-animate fadeInUpBigger delay-08">
              <!-- Box icon-->
              <article class="box-icon box-icon-variant-1">
                <div class="icon-wrap">
                  <span
                    class="icon icon-lg text-base restaurant-icon-17 icon-xxl"></span>
                </div>
                <div class="box-icon-header">
                  <h5>fresh food</h5>
                </div>
                <hr class="divider-xs bg-accent" />
                <p>
                  We use only the best ingredients to cook the tasty fresh
                  food for you.
                </p>
              </article>
            </div>
            <div
              class="col-sm-6 col-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-04">
              <!-- Box icon-->
              <article class="box-icon box-icon-variant-1">
                <div class="icon-wrap">
                  <span
                    class="icon icon-lg text-base restaurant-icon-23 icon-xxl"></span>
                </div>
                <div class="box-icon-header">
                  <h5>experienced chefs</h5>
                </div>
                <hr class="divider-xs bg-accent" />
                <p>
                  Our staff consists of chefs and cooks with years of
                  experience.
                </p>
              </article>
            </div>
            <div
              class="col-sm-6 col-md-3 offset-top-50 offset-md-top-0 view-animate fadeInUpBigger delay-06">
              <!-- Box icon-->
              <article class="box-icon box-icon-variant-1">
                <div class="icon-wrap">
                  <span
                    class="icon icon-lg text-base restaurant-icon-22 icon-xxl"></span>
                </div>
                <div class="box-icon-header">
                  <h5>a variety of dishes</h5>
                </div>
                <hr class="divider-xs bg-accent" />
                <p>
                  In our menu you’ll find a wide variety of dishes, desserts,
                  and drinks.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!--section gallery-->
      <section>
        <div class="row g-0" data-lightgallery="group">
          <div class="col-xs-6 col-md-3">
            <a
              class="thumbnail-gallery"
              data-lightgallery="item"
              href="assets/images/index-gallery-1-1200x800_original.jpg"><img
                src="assets/images/index-gallery-1-480x394.jpg"
                alt=""
                width="480"
                height="394" /></a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a
              class="thumbnail-gallery"
              data-lightgallery="item"
              href="assets/images/index-gallery-2-1200x800_original.jpg"><img
                src="assets/images/index-gallery-2-480x394.jpg"
                alt=""
                width="480"
                height="394" /></a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a
              class="thumbnail-gallery"
              data-lightgallery="item"
              href="assets/images/index-gallery-3-1200x800_original.jpg"><img
                src="assets/images/index-gallery-3-480x394.jpg"
                alt=""
                width="480"
                height="394" /></a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a
              class="thumbnail-gallery"
              data-lightgallery="item"
              href="assets/images/index-gallery-4-1200x800_original.jpg"><img
                src="assets/images/index-gallery-4-480x394.jpg"
                alt=""
                width="480"
                height="394" /></a>
          </div>
        </div>
      </section>
      <!--Google Map-->
      <section>
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div
          class="google-map-container">
          <!-- <div class="google-map"></div> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.472351647697!2d105.7469268!3d21.0379635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1svi!2s!4v1732119777305!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
    </main>
    <!-- Page Footer -->
    <?php require_once 'component/client/footer.php' ?>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Java script-->
  <script src="assets/js/core.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>