<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <!-- Site Title-->
  <title>Cart Page</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link
    rel="stylesheet"
    type="text/css"
    href="//fonts.googleapis.com/css?family=Changa+One:400,400i%7CGrand+Hotel%7CLato:300,400,400italic,700" />
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/fonts.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
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
    <header class="page-head">
      <!-- RD Navbar-->
      <?php
      require_once 'component/client/header.php'
      ?>
    </header>
    <!-- Page Content-->
    <main class="page-content">
      <!-- Breadcrumbs & Page title-->
      <section class="text-center section-34 section-sm-60 section-md-top-100 section-md-bottom-105 bg-image bg-image-breadcrumbs">
        <div class="container">
          <div class="row g-0">
            <div class="col-xs-12 col-xl-preffix-1 col-xl-11">
              <p class="h3 text-white">Cart Page</p>
              <ul class="breadcrumbs-custom offset-top-10">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Cart Page</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section-50 section-sm-100">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h4 class="text-start font-default"><?= $totalQuantityProduct['total'] ?> Items in your cart</h4>
              <div class="table-responsive offset-top-10">
                <table class="table table-shopping-cart">
                  <tbody>


                    <?php

                    foreach ($cart as $key => $value) {
                    ?>
                      <tr>
                        <td style="width: 150px">

                          <div class="form-group stepper-type-2">
                            <div style="font-size: 15px; font-weight: bold" class="">Quantity: <?= $value['quantity'] ?></div>
                          </div>

                        </td>
                        <td>
                          <div class="form-group stepper-type-2">
                            <input style="text-align: center" class="form-control text-bold" type="text" data-zeros="true" value="<?= $value['variation_name'] ?>" readonly>
                          </div>
                        </td>
                        <td style="width: 1px">
                          <div class="inset-left-20">

                            <div class="product-image"><img src="assets/images/<?= $value['product_image'] ?>" width="130" height="130" alt=""></div>
                          </div>
                        </td>
                        <td style="min-width: 340px;">
                          <div class="inset-left-30 text-start"><span class="product-brand text-italic"></span>
                            <div class="h5 text-sbold offset-top-0"><a class="link-default" href="shop-single.html"><?= $value['product_name'] ?></a></div>
                          </div>
                        </td>
                        <td>
                          <div class="inset-left-20"><span name="unit_price" class="h5 text-sbold">$<?= $value['unit_price'] ?></span></div>
                        </td>
                        <td>
                          <form method="post" menctype="multipart/form-data">
                            <div class="inset-left-20">
                              <input type="hidden" name="cart_id" value="<?= $value['cart_id'] ?>">
                              <button name="remove" style="border: none; background-color: transparent" class="icon icon-sm mdi mdi-window-close link-gray-lightest">
                              </button>
                            </div>
                          </form>
                        </td>

                      
                      </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>

              <form action=" " method="post" enctype="emultipart/form-data" class="offset-top-35 text-end">

                <input type="hidden" name="user_id" value="<?php echo " $user_id" ?>">
                <input type="hidden" name="total" value="<?php $totalOrder = 0;
                                                          foreach ($total as $value) {
                                                            $totalOrder += $value['total'];
                                                          }
                                                          echo "$totalOrder"; ?>">

                
                <div class="h4 font-default text-bold">
                  <div class="inset-right-5 text-gray-light"> <?php
                                                              $totalOrder = 0;
                                                              foreach ($total as $value) {
                                                                $totalOrder += $value['total'];
                                                              }
                                                              echo "Total: $totalOrder";
                                                              ?> </div>
                </div><button type="submit" name="btn_checkout" class="btn btn-icon btn-icon-left btn-burnt-sienna btn-shape-circle offset-top-35" href="#"><span class="icon icon-xs mdi mdi-cart-outline"></span><span>Proceed to checkout</span></button>
              </form>
            </div>


          </div>
        </div>
      </section>
    </main>
    <!-- Page Footers-->
    <?php require_once 'component/client/footer.php' ?>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Java script-->
  <script src="assets/js/core.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>

</html>