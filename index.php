<?php
include './class/include.php';

$ABOUT_PAGE = new Page(1);
?>


<!DOCTYPE html>
<html lang="zxx">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Aluthmalu.lk</title>

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



            <!-- Heroslider Area -->
            <?php include './slider.php'; ?>
            <!--// Heroslider Area -->



            <!-- Page Content -->
            <main class="page-content">



                <!-- About Area -->
                <section id="tm-about-area" style="background: radial-gradient(#e4fcff, transparent); padding-top: 20px; "class="tm-section tm-about-area tm-padding-section-bottom bg-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12 order-2 order-lg-1">
                                <div class="tm-about-content tm-scrollanim">
                                    <h3>About AluthMalu.LK</h3>
                                    <h6>Excepteur sint occaecat cupidatat non proident</h6>
                                    <p><?php echo $ABOUT_PAGE->description ?>
                                    </p> 
                                    <ul class="stylish-list-color">
                                        <li><i class="ion-android-checkmark-circle"></i> Scale, flexibility and a wide range of fish products experience.</li>
                                        <li><i class="ion-android-checkmark-circle"></i> Obtaining quality products from major production areas.</li>
                                        <li><i class="ion-android-checkmark-circle"></i> Customers and suppliers to their requirement efficiently and cost effectively.</li>
                                    </ul>
                                    <a href="about.php" class="tm-button">Read more</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 col-12 order-1 order-lg-2">
                                <div class="tm-about-image tm-scrollanim">
                                    <img src="assets/images/about-image.png" alt="about image">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--// About Area -->



                <!-- Product Type Area -->
                <div id="tm-service-area" class="tm-section tm-service-area tm-padding-section-bottom bg-white pt-30">
                    <div class="container"> 
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                                <div class="tm-sectiontitle text-center">
                                    <h2>Our Products</h2>
                                    <span class="tm-sectiontitle-divider">
                                        <img src="assets/images/icons/icon-divider-img.png" alt="section divider">
                                    </span>
                                    <p>Lorem Ipsum is a latin placeholder text commonly used to fulfill certain areas of
                                        your website or app where content is not the main concern of the developer.</p>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-30-reverse"> 

                            <!-- Single Service -->
                            <div class="col-lg-4 col-md-6 col-12 mt-30">
                                <div class="tm-service text-center tm-scrollanim">
                                    <div class="tm-service-inner">
                                        <div class="tm-service-frontside" data-bgimage="assets/images/service-image-1.jpg">
                                            <h6>Sea Food</h6>
                                        </div>
                                        <div class="tm-service-backside">
                                            <h6><a href="seafood.php">Sea Food</a></h6>
                                            <a href="seafood.php"><p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p></a>
                                            <a href="seafood.php" class="tm-readmore">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <!-- Single Service -->
                            <div class="col-lg-4 col-md-6 col-12 mt-30">
                                <div class="tm-service text-center tm-scrollanim">
                                    <div class="tm-service-inner">
                                        <div class="tm-service-frontside" data-bgimage="assets/images/service-image-2.jpg">
                                            <h6>Fresh Fish</h6>
                                        </div>
                                        <div class="tm-service-backside">
                                            <h6><a href="fish.php">Fresh Fish</a></h6>
                                            <a href="fish.php"><p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p></a>
                                            <a href="fish.php" class="tm-readmore">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <!-- Single Service -->
                            <div class="col-lg-4 col-md-6 col-12 mt-30">
                                <div class="tm-service text-center tm-scrollanim">
                                    <div class="tm-service-inner">
                                        <div class="tm-service-frontside" data-bgimage="assets/images/service-image-3.jpg">
                                            <h6>Dry Fish</h6>
                                        </div>
                                        <div class="tm-service-backside">
                                            <h6><a href="dry-fish.php">Dry Fish</a></h6>
                                            <a href="dry-fish.php"><p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p></a>
                                            <a href="dry-fish.php" class="tm-readmore">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--// Product Type Area -->



                <!-- Service Area -->              
                <div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section-bottom pt-30" data-bgimage="assets/images/offer-area-bg.jpg" style='background-image: url("assets/images/offer-area-bg.jpg");'>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                                <div class="tm-sectiontitle text-center">
                                    <h2 class="white">Our Services</h2>
                                    <span class="tm-sectiontitle-divider">
                                        <img src="assets/images/icons/icon-divider-img.png" alt="section divider">
                                    </span>
                                    <p class="white">Lorem Ipsum is a latin placeholder text commonly used to fulfill certain areas of
                                        your website or app where content is not the main concern of the developer.</p>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <?php
                            $SERVICE = new Service(NULL);
                            foreach ($SERVICE->all() as $key => $service) {
                                if ($key < 6) {
                                    ?>
                                    <!-- Blog Single Item -->
                                    <div class="col-lg-4 pt-30">
                                        <div class="tm-blog tm-scrollanim">
                                            <div class="tm-blog-topside">
                                                <div class="tm-blog-thumb">
                                                    <a href="view-service.php?id=<?php echo $service['id'] ?>"><img src="upload/service/<?php echo $service['image_name'] ?>" alt="blog image" alt="blog image"></a>
                                                </div>
                                                <a href="view-service.php?id=<?php echo $service['id'] ?>" class="tm-blog-metahighlight tm-readmore"> <?php echo $service['title'] ?></a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--// Blog Single Item -->
                                    <?php
                                }
                            }
                            ?>

                            <div class="col-md-4" width="100%"></div>
                            <div class="col-md-4 text-center pt-30">
                                <a href="service.php" class="tm-button text-center">Read more</a>
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-md-4" width="100%"></div>

                        </div>
                    </div>
                </div>
                <!--// Service Area -->



                <!-- Testimonial Area -->
                <div class="tm-section tm-testimonial-area tm-padding-section-bottom bg-white bg-pattern-transparent pt-30">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-8 col-md-9 col-12">
                                <div class="tm-sectiontitle text-center">
                                    <h2>Feedback From our Clients</h2>
                                    <span class="tm-sectiontitle-divider">
                                        <img src="assets/images/icons/icon-divider-img.png" alt="section divider">
                                    </span>
                                    <p>Lorem Ipsum is a latin placeholder text commonly used to fulfill certain areas of
                                        your website or app where content is not the main concern of the developer.</p>
                                </div>
                            </div>
                        </div>


                        <div class="row tm-testimonial-slider">
                            <?php
                            $COMMENT = new Comments(NULL);
                            foreach ($COMMENT->activeComments() as $comment) {
                                ?>
                                <!-- Single Testimonial -->
                                <div class="col-lg-6">
                                    <div class="tm-testimonial tm-scrollanim">
                                        <div class="tm-testimonial-top">
                                            <div class="tm-testimonial-author">
                                                <div class="tm-testimonial-image">
                                                    <img src="upload/comments/<?php echo $comment['image_name']; ?>" alt="author image">
                                                </div>
                                                <div class="tm-testimonial-authorcontent">
                                                    <h6><?php echo $comment['name']; ?></h6>
                                                    <p><?php echo $comment['country']; ?></p>
                                                </div>
                                            </div>
                                            <div class="tm-testimonial-ratings">
                                                <span class="active"><i class="ion-android-star"></i></span>
                                                <span class="active"><i class="ion-android-star"></i></span>
                                                <span class="active"><i class="ion-android-star"></i></span>
                                                <span class="active"><i class="ion-android-star"></i></span>
                                                <span class="active"><i class="ion-android-star"></i></span>
                                            </div>
                                        </div>
                                        <p><?php echo $comment['comment']; ?></p>
                                    </div>
                                </div>
                                <!--// Single Testimonial -->

                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <!--// Testimonial Area -->



                <!-- Brand Logos -->
                <div class="tm-section tm-brandlogo-area tm-padding-section bg-white">
                    <div class="container">
                        <div class="tm-brandlogo-slider">

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-1.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-2.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-3.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-4.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-5.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-1.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-2.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-3.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-4.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                            <!-- Brang Logo Single -->
                            <div class="tm-brandlogo">
                                <a href="#">
                                    <img src="assets/images/brand-logo-5.png" alt="brand-logo">
                                </a>
                            </div>
                            <!--// Brang Logo Single -->

                        </div>
                    </div>
                </div>
                <!--// Brand Logos --> 



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



</html>