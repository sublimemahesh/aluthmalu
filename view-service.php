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