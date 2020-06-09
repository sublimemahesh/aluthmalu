<?php
include './class/include.php';

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    $PRODUCT_TYPE = new ProductType($type);
    $PRODUCT_OBJ = new Product(NULL);
    $PRODUCTS = $PRODUCT_OBJ->allProductsByType($type);
   
}

?>

<!DOCTYPE html>
<html lang="zxx">



    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || Products</title>
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
                        <h2 class="white"><?php echo $PRODUCT_TYPE->name ?></h2>
                        <ul>
                            <li><a href="./" class="white">Home</a></li>
                            <li>Products</li>
                            <li><?php echo $PRODUCT_TYPE->name ?></li>
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
                            foreach ($PRODUCTS as $product) {
                                ?>
                                <!-- Single Product -->
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 pb-30">
                                    <div class="tm-pricebox text-center">
                                        
                                        <div class="tm-product text-center tm-scrollanim">
                                            <a href="view-product.php?id=<?php echo $product['id']; ?>">
                                            <div class="tm-product-topside">
                                                <img src="upload/product-type/product/<?php echo $product['image_name']; ?>" alt="product image">
                                                <ul class="tm-product-actions">
                                                    <li class="tm-readmore" id="yellow">View More</li>

                                                </ul>
                                            </div>
                                            <div class="tm-product-bottomside" id="product">
                                                <h6 class="tm-product-title" id="black"><?php echo $product['name']; ?></h6>
                                                <span class="tm-product-price" id="white"><b>Rs. <?php echo $product['price']; ?></b></span>
                                            </div>
                                         </a>
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