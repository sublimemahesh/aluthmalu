<?php
include './class/include.php';

$ABOUT_US_PAGE = new Page(2);
?>


<!DOCTYPE html>
<html lang="zxx">


    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">


        <title>Aluthmalu.lk || About Us</title>


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
                            <h2>Let's get to Know about Us</h2>
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
                        <h2 class="white">About Us</h2>
                        <ul>
                            <li ><a href="./" class="white">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->



            <!-- Page Content -->
            <main class="page-content">


                <!-- About Area -->
                <section id="tm-about-area" class="tm-section tm-about-area tm-padding-section bg-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12 order-2 order-lg-1">
                                <div class="tm-about-content">
                                    <h6 style="font-size: 45px;">Let's get to Know about Us</h6>
                                    <p><?php echo $ABOUT_US_PAGE->description ?></p>

                                    <ul class="stylish-list-color">

                                        <li>
                                            <i class="ion-android-checkmark-circle"></i>
                                            Scale, flexibility and a wide range of fish products experience.
                                        </li>

                                        <li>
                                            <i class="ion-android-checkmark-circle"></i> 
                                            Obtaining quality products from major production areas.
                                        </li>

                                        <li>
                                            <i class="ion-android-checkmark-circle"></i> 
                                            Customers and suppliers to their requirement efficiently and cost effectively.
                                        </li>

                                    </ul>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-8 col-12 order-1 order-lg-2">
                                <div class="tm-about-image">
                                    <img src="assets/images/about-image.png" alt="about image">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--// About Area -->


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



</html>