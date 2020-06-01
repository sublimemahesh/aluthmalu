<?php
include './class/include.php';
$PRODUCT_TYPE = new Product(NULL);
$PRODUCTS = $PRODUCT_TYPE->allProductsByType(3);
?>

<!DOCTYPE html>
<html lang="zxx">



    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || Sea Foods</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="assets/images/favicon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- CSS FILES HERE -->
        <!-- inject:css -->
        <link rel="stylesheet" href="assets/css/vendors/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- endinject -->
    </head>

    <body>

        <!-- Preloader -->
        <div class="tm-preloader">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="tm-preloader-logo">
                            <img src="assets/images/aluthmalu-logo.png" alt="logo">
                            <br/>
                            <h2>www.aluthmalu.lk</h2>
                        </div>
                        <span class="tm-preloader-progress"></span>
                    </div>
                </div>
            </div>
            <button class="tm-button tm-button-small">Cancel Preloader</button>
        </div>
        <!--// Preloader -->

        <!-- Wrapper -->
        <div id="wrapper" class="wrapper">

            <!-- Header -->
            <?php include './header.php'; ?>
            <!--// Header -->

            <!-- Breadcrumb Area -->
            <div class="tm-breadcrumb-area tm-padding-section bg-grey" data-bgimage="assets/images/breadcrumb-bg.jpg"
                 data-white-overlay="2">
                <div class="container">
                    <div class="tm-breadcrumb">
                        <h2 class="white">Sea Foods</h2>
                        <ul>
                            <li><a href="./" class="white">Home</a></li>
                            <li>Products</li>
                            <li>Sea Foods</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->


            <!-- Page Content -->
            <main class="page-content">

                <!-- Products Area -->
                <div id="tm-shop-area" class="tm-section tm-products-area tm-padding-section bg-white">
                    <div class="container">
                        <div class="row">
                            <?php
                            foreach ($PRODUCTS as $products) {
                                ?>
                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="tm-pricebox text-center">
                                        <div class="tm-product text-center tm-scrollanim">
                                            <div class="tm-product-topside">
                                                <img src="upload/product-type/product/<?php echo $products['image_name']; ?>" alt="product image">
                                                <ul class="tm-product-actions">
                                                    <li><a href="view-product.php?id=<?php echo $products['id']; ?>" class="tm-readmore">View More</a></li>

                                                </ul>
                                            </div>
                                            <div class="tm-product-bottomside" style="background-color: #98d4ec">
                                                <h6 class="tm-product-title"><a href="view-product.php?id=<?php echo $products['id']; ?>"><?php echo $products['name']; ?></a></h6>
                                                <span class="tm-product-price" style="color: red">Rs. <?php echo $products['price']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Single Product -->
                                <?php
                            }
                            ?>


                        </div>
                    </div>
                </div>
                <!--// Products Area -->


            </main>
            <!--// Page Content -->

            <!-- Footer -->
            <?php include './footer.php'; ?>
            <!--// Footer -->

            <!-- Product Quickview -->
            <div class="tm-product-quickview" id="tm-product-quickview">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-12">
                            <div class="tm-product-quickview-inner">
                                <!-- Product Details -->
                                <div class="tm-prodetails">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="tm-prodetails-images">
                                                <div class="tm-prodetails-largeimages">
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-1.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-2.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-3.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-1.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-2.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-largeimage">
                                                        <img src="assets/images/products/product-image-3.jpg"
                                                             alt="product image">
                                                    </div>
                                                </div>
                                                <div class="tm-prodetails-thumbnails">
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-1.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-2.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-3.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-1.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-2.jpg"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-thumb-3.jpg"
                                                             alt="product image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="tm-prodetails-content">
                                                <h4 class="tm-prodetails-title">Fishing Reel</h4>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i class="ion-android-star"></i></span>
                                                    <span class="is-active"><i class="ion-android-star"></i></span>
                                                    <span class="is-active"><i class="ion-android-star"></i></span>
                                                    <span class="is-active"><i class="ion-android-star"></i></span>
                                                    <span><i class="ion-android-star"></i></span>
                                                </div>
                                                <div class="tm-prodetails-price">
                                                    <span><del>$75.99</del> $59.99</span>
                                                </div>
                                                <ul class="tm-prodetails-infos">
                                                    <li>Catagory: <a href="shop.html">Fishing equipments</a></li>
                                                    <li>Tags: <a href="shop.html">fishing woobler</a>, <a
                                                            href="shop.html">fising hook</a>, <a href="shop.html">fishing
                                                            reels</a></li>
                                                    <li>Product ID: 100</li>
                                                    <li>Available: <span class="color-theme">In stock</span></li>
                                                </ul>
                                                <div class="tm-prodetails-paras">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mi
                                                        dolor, malesuada id metus a, mattis eleifend elit. Nullam pharetra
                                                        consequat ex in dapibus. Vestibulum ante ipsum primis in faucibus
                                                        orciluctus et ultrices posuere cubilia Curae.</p>
                                                </div>
                                                <div class="tm-prodetails-quantitycart">
                                                    <div class="tm-quantitybox">
                                                        <input type="text" value="1">
                                                    </div>
                                                    <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                                </div>

                                                <div class="tm-prodetails-share">
                                                    <h6>Share :</h6>
                                                    <ul>
                                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a>
                                                        </li>
                                                        <li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Product Details -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Product Quickview -->

            <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

        </div>
        <!--// Wrapper -->

        <!-- JS FILES HERE -->
        <!-- inject:js -->
        <script src="assets/js/vendors/plugins.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- endinject -->
    </body>


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:14 GMT -->
</html>