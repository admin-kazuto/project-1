<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Menu</title>
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
    require_once 'component/client/header.php';
    ?>
    <!-- Page Content-->
    <main class="page-content">
      <!-- Breadcrumbs & Page title-->
      <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
        <div class="container">
          <div class="row g-0">
            <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
              <p class="h3 text-white">Menu</p>
              <ul class="breadcrumbs-custom offset-top-10">
                <li><a href="index.html">Home</a></li>
                <li class="active">Menu</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section-50 section-sm-100">
        <div class="container isotope-wrap">
          <div class="row justify-content-sm-center">
            <div class="col-xs-12">
              <div class="col-box">
                <ul class="isotope-filters-responsive">
                  <li>
                    <p>Choose your category:</p>
                  </li>
                  <li class="block-top-level">
                    <!-- Isotope Filters-->
                    <button class="isotope-filters-toggle btn btn-primary-lighter btn-shape-circle" data-custom-toggle="#isotope-1" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                    <div class="isotope-filters isotope-filters-buttons" id="isotope-1">
                      <ul class="inline-list">
                        <li><a class="btn-shape-circle btn active" data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Burgers</a></li>
                        <li><a class="btn-shape-circle btn" data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">TOASTS</a></li>
                        <li><a class="btn-shape-circle btn" data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Pizzas</a></li>
                        <li><a class="btn-shape-circle btn" data-isotope-filter="Category 4" data-isotope-group="gallery" href="#">Salads</a></li>
                        <li><a class="btn-shape-circle btn" data-isotope-filter="Category 5" data-isotope-group="gallery" href="#">Drinks</a></li>

                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 offset-top-40">
              <!-- Isotope Content-->
              <div class="row isotope isotope-menu" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                <?php foreach ($AllHamburgers as $hamburger) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 1">
                    <div class="thumbnail-menu-modern">
                      <figure><img class="img-responsive" src="assets/images/<?= $hamburger['product_image'] ?>" alt="" width="310" height="260">
                      </figure>
                      <div class="caption">
                        <h5><a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $hamburger['product_id'] ?>"><?= $hamburger['product_name'] ?></a></h5>
                        <p class="text-italic"><?= $hamburger['description'] ?></p>
                        <p class="price"><?= $hamburger['price'] ?></p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="?act=ProductDetailsInMenu&id=<?= $hamburger['product_id'] ?>">Order Online</a>
                      </div>
                    </div>
                  </div>
                <?php }  ?>
                <!--toasts-->
                <?php foreach ($AllToasts as $toasts) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 2">
                    <div class="thumbnail-menu-modern">
                      <figure><img class="img-responsive" src="assets/images/<?= $toasts['product_image'] ?>" alt="" width="310" height="260">
                      </figure>
                      <div class="caption">
                        <h5><a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $toast['product_id'] ?>"><?= $toasts['product_name'] ?></a></h5>
                        <p class="text-italic"><?= $toasts['description'] ?></p>
                        <p class="price"><?= $toasts['price'] ?></p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="?act=ProductDetailsInMenu&id=<?= $toasts['product_id'] ?>">Order Online</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--pizza-->
                <?php foreach ($AllPizzas as $pizza) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 3">
                    <div class="thumbnail-menu-modern">
                      <figure><img class="img-responsive" src="assets/images/<?= $pizza['product_image'] ?>" alt="" width="310" height="260">
                      </figure>
                      <div class="caption">
                        <h5><a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $pizza['product_id'] ?>"><?= $pizza['product_name'] ?></a></h5>
                        <p class="text-italic"><?= $pizza['description'] ?></p>
                        <p class="price"><?= $pizza['price'] ?></p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="?act=ProductDetailsInMenu&id=<?= $pizza['product_id'] ?>">Order Online</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--salads-->
                <?php foreach ($AllSalads as $salads) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 4">
                    <div class="thumbnail-menu-modern">
                      <figure><img class="img-responsive" src="assets/images/<?= $salads['product_image'] ?>" alt="" width="310" height="260">
                      </figure>
                      <div class="caption">
                        <h5><a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $salads['product_id'] ?>"><?= $salads['product_name'] ?></a></h5>
                        <p class="text-italic"><?= $salads['description'] ?></p>
                        <p class="price"><?= $salads['price'] ?></p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="?act=ProductDetailsInMenu&id=<?= $salads['product_id'] ?>">Order Online</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--drinks-->
                <?php foreach ($AllDrinks as $drinks) { ?>
                  <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 5">
                    <div class="thumbnail-menu-modern">
                      <figure><img class="img-responsive" src="assets/images/<?= $drinks['product_image'] ?>" alt="" width="310" height="260">
                      </figure>
                      <div class="caption">
                        <h5><a class="link link-default" href="?act=ProductDetailsInMenu&id=<?= $drinks['product_id'] ?>"><?= $drinks['product_name'] ?></a></h5>
                        <p class="text-italic"><?= $drinks['description'] ?></p>
                        <p class="price"><?= $drinks['price'] ?></p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="?act=ProductDetailsInMenu&id=<?= $drinks['product_id'] ?>">Order Online</a>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <!--deserts-->
                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 6">
                  <div class="thumbnail-menu-modern">
                    <figure><img class="img-responsive" src="assets/images/deserts-1-310x260.png" alt="" width="310" height="260">
                    </figure>
                    <div class="caption">
                      <h5><a class="link link-default" href="menu-single.html">French macaroons</a></h5>
                      <p class="text-italic">French macaroons are thin, flavorful meringue cookies that are sandwiched together with some kind of filling.</p>
                      <p class="price">12.50</p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="shop-single.html">Order Online</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 6">
                  <div class="thumbnail-menu-modern">
                    <figure><img class="img-responsive" src="assets/images/deserts-2-310x260.png" alt="" width="310" height="260">
                    </figure>
                    <div class="caption">
                      <h5><a class="link link-default" href="menu-single.html">Blueberry muffins</a></h5>
                      <p class="text-italic">Big Blueberry muffins with a crusty sugar topping. The blueberries and the sweet batter are fabulous and taste amazing.</p>
                      <p class="price">10.90</p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="shop-single.html">Order Online</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 6">
                  <div class="thumbnail-menu-modern">
                    <figure><img class="img-responsive" src="assets/images/deserts-3-310x260.png" alt="" width="310" height="260">
                    </figure>
                    <div class="caption">
                      <h5><a class="link link-default" href="menu-single.html">Donuts</a></h5>
                      <p class="text-italic">Homemade and filled with a delightful vanilla cream pudding and topped with sweet white icing, these donuts will delight you.</p>
                      <p class="price">13.90</p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="shop-single.html">Order Online</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 6">
                  <div class="thumbnail-menu-modern">
                    <figure><img class="img-responsive" src="assets/images/deserts-4-310x260.png" alt="" width="310" height="260">
                    </figure>
                    <div class="caption">
                      <h5><a class="link link-default" href="menu-single.html">Ice Cream</a></h5>
                      <p class="text-italic">Our premium sweet-cream, classic vanilla ice cream is pure pleasure. Perfect for sundaes, with a slice of cake, or just heavenly when flying solo.</p>
                      <p class="price">17.97</p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="shop-single.html">Order Online</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 isotope-item" data-filter="Category 6">
                  <div class="thumbnail-menu-modern">
                    <figure><img class="img-responsive" src="assets/images/deserts-5-310x260.png" alt="" width="310" height="260">
                    </figure>
                    <div class="caption">
                      <h5><a class="link link-default" href="menu-single.html">Pancakes</a></h5>
                      <p class="text-italic">Get the deliciousness of this all-American dish—in half the time. Enjoy the unforgettable taste of our pancakes!</p>
                      <p class="price">25.00</p><a class="btn btn-shape-circle btn-burnt-sienna offset-top-15" href="shop-single.html">Order Online</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-top-50 text-center divider-custom">
            <div><a class="btn btn-md btn-shape-circle btn-primary-lighter" href="#">download full menu</a></div>
          </div>
        </div>
      </section>
      <section>
        <section class="parallax-container parallax-light" data-parallax-img="assets/images/parallax-02.jpg">
          <div class="parallax-content">
            <div class="container section-80 section-sm-130">
              <div class="row justify-content-xs-center align-items-lg-end">
                <div class="col-md-9">
                  <div class="group-sm">
                    <h3 class="text-baseline">Fast Delivery</h3>
                    <div class="group-sm offset-top-15 offset-lg-top-0">
                      <hr class="hr divider-xs bg-primary-lighter text-top veil reveal-lg-inline-block">
                      <p class="big offset-lg-top-0 text-top">Enjoy our free, fast, and reliable delivery service.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3"><a class="btn btn-shape-circle btn-white-outline btn-min-width-md" href="shop-single.html">order online</a></div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>
    <!-- Page Footer-->
    <?php require_once 'component/client/footer.php' ?>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="assets/js/core.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>