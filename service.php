<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="zxx">


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:14 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || Service</title>
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
                            <h2>Our Services</h2>
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
                        <h2 class="white">Our Services</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Services</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->


            <!-- Page Content -->
            <main class="page-content">

                <!-- Latest Blogs Area -->

                <div id="tm-news-area" class="tm-section tm-blog-area tm-padding-section-bottom bg-white pt-30 pb-30">
                    <div class="container">

                        <div class="row">
                            <?php
                            $SERVICE = new Service(NULL);
                            foreach ($SERVICE->all() as $service) {
                                ?>
                                <!-- Blog Single Item -->
                                <div class="col-lg-4 pt-30">
                                    <div class="tm-blog tm-scrollanim">
                                        <div class="tm-blog-topside">
                                            <div class="tm-blog-thumb">
                                                <a href="view-service.php?id=<?php echo $service['id'] ?>">
                                                <img src="upload/service/<?php echo $service['image_name']?>" alt="blog image">
                                                </a>
                                            </div>
                                             <a href="view-service.php?id=<?php echo $service['id'] ?>" class="tm-blog-metahighlight tm-readmore"> <?php echo $service['title'] ?></a>
                                        </div>

                                    </div>
                                </div>
                                <!--// Blog Single Item -->
                            <?php } ?>
                      

                        </div>
                    </div>
                </div>
                <!--// Latest Blogs Area -->

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


    <!-- Mirrored from thememarch.com/demo/html/malic/malic/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 May 2020 01:35:16 GMT -->
</html>