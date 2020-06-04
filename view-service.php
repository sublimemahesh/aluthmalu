<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$SERVICE = new Service($id);

?>


<!DOCTYPE html>
<html lang="zxx">


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:16 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || Service Details</title>
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
                        <h2 class="white"><?php echo $SERVICE->title ?></h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="service.php">Our Services</a></li>
                            <li><?php echo $SERVICE->title ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->


            <!-- Page Content -->
            <main class="page-content">

                <!-- Service Details Area -->
                <div class="tm-section tm-service-details-area tm-padding-section bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="tm-service-details clearfix">
                                    <img class="mb-4" src="upload/service/<?php echo $SERVICE->image_name?>" alt="service image">
                                    <h4><?php echo $SERVICE->title ?></h4>
                                    <p><?php echo $SERVICE->description ?></p>                                  
                                </div>
                            </div>
                          
                            
                            <div class="col-lg-4">
                            <div class="widgets widgets-blog">

                                <!-- Single Widget -->
                                <div class="single-widget widget-categories">
                                    <h6 class="widget-title">Other Services</h6>
                                        <?php
                                    $SERVICE = new Service(NULL);
                                    foreach ($SERVICE->all()as $key => $service) {
                                        if ($key < 7) {
                                            ?>
                                    <ul>
                                        <li><a class="is-active" href="view-service.php?id=<?php echo $service['id'] ?>">
                                                    <?php echo $service['title']; ?>
                                                </a></li>
                                        
                                    </ul>
                                    
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <!--// Single Widget -->

                                
                                   <!-- Single Widget -->
                                    <div class="single-widget widget-popularproduct">
                                        <h6 class="widget-title">Our Products</h6>
                                        <ul>
                                             <?php foreach (ProductType::all() as $product_type) { ?>
                                            <li>
                                                <a href="products.php?type=<?php echo $product_type['id'] ?>" class="widget-popularproduct-image">
                                                    <img src="upload/product-type/<?php echo $product_type['image_name']; ?>"
                                                         alt="product thumbnail">
                                                </a>
                                                <div class="widget-popularproduct-content">
                                                    <h6><a href="products.php?type=<?php echo $product_type['id'] ?>"><?php echo $product_type['name']; ?></a></h6>

                                                </div>
                                            </li>
                                             <?php } ?>
                                        </ul>
                                    </div>
                                    <!--// Single Widget -->
                                

                            </div>
                        </div>
                            
                            
                        </div>
                    </div>
                </div>
                <!--// Service Details Area -->



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
                                        <div class="col-lg-6 col-md-6 col-sm-10 col-12">
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
                                                        <img src="assets/images/products/product-image-1-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-2-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-3-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-1-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-2-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                    <div class="tm-prodetails-thumbnail">
                                                        <img src="assets/images/products/product-image-3-thumb.html"
                                                             alt="product image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="tm-prodetails-content">
                                                <h4 class="tm-prodetails-title">Cosmetic compact powder</h4>
                                                <div class="tm-ratingbox">
                                                    <span class="is-active"><i class="ti ti-star"></i></span>
                                                    <span class="is-active"><i class="ti ti-star"></i></span>
                                                    <span class="is-active"><i class="ti ti-star"></i></span>
                                                    <span class="is-active"><i class="ti ti-star"></i></span>
                                                    <span><i class="ti ti-star"></i></span>
                                                </div>
                                                <p class="tm-prodetails-availability">Availalbe: <span>In Stock</span></p>
                                                <div class="tm-prodetails-price">
                                                    <span><del>$75.99</del> $59.99</span>
                                                </div>
                                                <p>Enim illo perspiciatis molestias. Quaerat labor iosam aut amet dolor.
                                                    Dolor impedit occaecati qui et aut excepturi libero.</p>
                                                <div class="tm-prodetails-quantitycart">
                                                    <div class="tm-quantitybox">
                                                        <input type="text" value="1">
                                                    </div>
                                                    <a href="#" class="tm-button tm-button-dark">Add To Cart</a>
                                                </div>

                                                <div class="tm-prodetails-categories">
                                                    <h6>Categories :</h6>
                                                    <ul>
                                                        <li><a href="shop.html">Cosmetics</a></li>
                                                        <li><a href="shop.html">Makeup</a></li>
                                                    </ul>
                                                </div>

                                                <div class="tm-prodetails-tags">
                                                    <h6>Tags :</h6>
                                                    <ul>
                                                        <li><a href="shop.html">Brush</a></li>
                                                        <li><a href="shop.html">Face</a></li>
                                                        <li><a href="shop.html">Makeup</a></li>
                                                    </ul>
                                                </div>

                                                <div class="tm-prodetails-share">
                                                    <h6>Share :</h6>
                                                    <ul>
                                                        <li><a href="#"><i class="ti ti-facebook"></i></a></li>
                                                        <li><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                                        <li><a href="#"><i class="ti ti-pinterest"></i></a></li>
                                                        <li><a href="#"><i class="ti ti-linkedin"></i></a></li>
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


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/service-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:23 GMT -->
</html>