<?php
include './class/include.php';
$id = $_GET['id'];
$PRODUCT = new Product($id);

$TYPE = $PRODUCT->product_type;
$PRODUCT_TYPE2 = new ProductType($PRODUCT->product_type);
?>


<!DOCTYPE html>
<html lang="zxx">


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/product-details-leftsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:26 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || View Products</title>
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
                            <h2>Our Products</h2>
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
                        <h2 class="white"><?php echo $PRODUCT->name ?></h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Products</li>
                            <li><?php echo $PRODUCT->name ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->


            <!-- Page Content -->
            <main class="page-content">

                <!-- Products Area -->
                <div class="tm-products-area tm-section tm-padding-section bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-12 order-1 order-lg-2">
                                <!-- Product Details -->
                                <div class="tm-prodetails">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="tm-prodetails-images">
                                                <div class="tm-prodetails-largeimages">
                                                    <div class="tm-prodetails-largeimage">
                                                        <a data-fancybox="tm-prodetails-imagegallery"
                                                           href="upload/product-type/product/<?php echo $PRODUCT->image_name ?>"
                                                           data-caption="Product Zoom Image 1">
                                                            <img src="upload/product-type/product/<?php echo $PRODUCT->image_name ?>"
                                                                 alt="product image">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="tm-prodetails-content">
                                                <h4 class="tm-prodetails-title"><?php echo $PRODUCT->name ?></h4>

                                                <div class="tm-prodetails-price">
                                                    <span>Rs. <?php echo $PRODUCT->price ?></span>
                                                </div>


                                                <ul class="tm-prodetails-infos">

                                                    <li><b>Product Type</b> &nbsp;: &nbsp;<?php echo $PRODUCT_TYPE2->name ?></li>
                                                    <li><b>Unit</b> &nbsp;: &nbsp;<?php echo $PRODUCT->unit ?></li>

                                                    <?php
                                                    if ($PRODUCT->in_stock == 0) {
                                                        ?>
                                                        <li><b>Available</b> &nbsp;: &nbsp;<span class="color-theme"> Not In stock</h6></span></li>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <li><b>Available</b> &nbsp;: &nbsp; <span class="color-theme"> In stock</h6></span></li>
                                                    <?php }
                                                    ?>

                                                </ul>


                                                <div class="tm-prodetails-paras">
                                                    <div class="tm-prodetails-quantitycart">
                                                        <div class="tm-quantitybox">
                                                            <input type="text" value="1">
                                                        </div>
                                                        <a href="order-form.php" class="tm-button tm-button-dark">Add To Cart</a>
                                                    </div>  
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--// Product Details -->

                                <!-- Product Details Description & Review -->
                                <div class="tm-prodetails-desreview tm-padding-section-sm-top">
                                    <ul class="nav tm-tabgroup2" id="prodetails" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="prodetails-area1-tab" data-toggle="tab"
                                               href="#prodetails-area1" role="tab" aria-controls="prodetails-area1"
                                               aria-selected="true">Description</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="prodetails-content">
                                        <div class="tab-pane fade show active" id="prodetails-area1" role="tabpanel"
                                             aria-labelledby="prodetails-area1-tab">
                                            <div class="tm-prodetails-description">

                                                <p><?php echo $PRODUCT->description ?></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--// Product Details Description & Review -->



                            </div>
                            <div class="col-lg-3 col-12 order-2 order-lg-1">
                                <div class="widgets widgets-blog">

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


                                    <!-- Single Widget -->
                                    <div class="single-widget widget-categories">
                                        <h6 class="widget-title">Our Services</h6>
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






                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Products Area -->



            </main>
            <!--// Page Content -->

            <!-- Footer -->
            <?php include './footer.php'; ?>
            <!--// Footer -->


            <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

        </div>
        <!--// Wrapper -->

        <!-- JS FILES HERE -->
        <!-- inject:js -->
        <script src="assets/js/vendors/plugins.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- endinject -->
    </body>


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/product-details-leftsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:26 GMT -->
</html>