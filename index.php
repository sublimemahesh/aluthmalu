<?php
include './class/include.php';

$ABOUT_PAGE = new Page(1);

$PRODUCT_TYPE = new ProductType($id);
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
                                    <h1>About AluthMalu.LK</h1>

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
                                    <p>aluthmalu.lk is the best online store for the fresh and frozen seafood products in several different
                                        categories.</p>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-30-reverse"> 

                            <?php foreach (ProductType::all() as $product_type) { ?>



                                <!-- Single Service -->
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="tm-service text-center tm-scrollanim">
                                        <div class="tm-service-inner">
                                            <div class="tm-service-frontside" data-bgimage="upload/product-type/<?php echo $product_type['image_name'] ?>">
                                                <h6><?php echo $product_type['name'] ?></h6>
                                            </div>
                                            <div class="tm-service-backside">
                                                <h6><a href="products.php?type=<?php echo $product_type['id'] ?>"><?php echo $product_type['name'] ?></a></h6>
                                                <a href="products.php?type=<?php echo $product_type['id'] ?>">
                                                    <p style="text-align: justify">
                                                        <?php echo substr($product_type['short_description'], 0, 200) ?>
                                                    </p></a>
                                                <a href="products.php?type=<?php echo $product_type['id'] ?>" class="tm-readmore">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            <?php } ?>    
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
                                    <p class="white">Enjoy the best service right to your door step cleaned, frozen fish, and ready to delivered it. All of
                                        our seafood is ensuring the healthiest, most delicious seafood you can find aluthmalu.lk.</p>
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
                                        <?php echo substr($comment['comment'],0,150); ?>
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