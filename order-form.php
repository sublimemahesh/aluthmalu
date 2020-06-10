<!DOCTYPE html>

<?php
include './class/include.php';
?>


<html lang="zxx">



    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Aluthmalu.lk || Order Product</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" href="assets/images/favicon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css"/>
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
                            <h2>Oder Your Products</h2>
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
                        <h2 class="white">Order Product</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Order Product</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--// Breadcrumb Area -->


            <!-- Page Content -->
            <main class="page-content">

                <!-- Contact Area -->
                <div class="tm-contact-area tm-section tm-padding-section bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tm-contact">
                                    <h4>Products Details</h4>
                                    <form id="form-data" action="http://thememarch.com/demo/html/malic/malic/assets/php/mailer.php"
                                          class="tm-contact-forminner tm-form" method="POST">

                                        <!-- Collapse buttons -->


                                        <?php
                                        $PRODUCT_TYPES = $PRODUCT_TYPE->all();
                                        foreach ($PRODUCT_TYPES as $product_type) {
                                            ?>
                                            <div class="col-md-12 pb-30">
                                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapse<?php echo $product_type['id']; ?>"
                                                        aria-expanded="false" aria-controls="multiCollapse<?php echo $product_type['id']; ?>" style="width: 100%"><?php echo $product_type['name']; ?></button>
                                                <div class="col">
                                                    <div class="collapse multi-collapse" id="multiCollapse<?php echo $product_type['id']; ?>">
                                                        <div class="card card-body">

                                                            <!-- Shopping Cart Table -->
                                                            <div class="tm-cart-table table-responsive">
                                                                <table class="table table-bordered mb-0 table-primary">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="tm-cart-col-productname" scope="col">Product</th>
                                                                            <th class="tm-cart-col-price" scope="col">Price (per kg)</th>
                                                                            <th class="tm-cart-col-quantity" scope="col">Quantity (kg)</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $PRODUCT_OBJ = new Product(NULL);
                                                                        $PRODUCT = $PRODUCT_OBJ->allProductsByType($product_type['id']);
                                                                        foreach ($PRODUCT as $product) {
                                                                            ?>

                                                                            <tr>
                                                                                
                                                                                <td>
                                                                                    <input type="text" name="product_name" id="product_name" value="<?php echo $product['name'] ?>" style="border:none" disabled="">
                                                                                </td>


                                                                                <td class="tm-cart-price">
                                                                                    <input type="text" name="product_price" id="product_price" value="<?php echo $product['price'] ?>"   style="border:none" disabled="">
                                                                                </td>


                                                                                <td>
                                                                                    <div class="tm-quantitybox">

                                                                                        <input type="text" id="value" value="0" name="product_qty[]" disabled="" style="border:white 1px solid">
                                                                                    </div>
                                                                                </td>

                                                                            </tr>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!--// Shopping Cart Table -->


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        
                                        
                                        <h4>Your Personal Details</h4>
                                        
                                        <div class="tm-form-inner">
                                            
                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <input type="text" id="name" placeholder="Enter Your Full Name"
                                                       name="name" required>
                                            </div>



                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <input type="text" id="address" placeholder="Enter Your Address"
                                                       name="address" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <input type="text" id="city" placeholder="Enter Your City"
                                                       name="city" required>
                                            </div>


                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <input type="text" id="phone"
                                                       placeholder="Enter Your Phone Number" name="phone" required>
                                            </div>

                                            <div class="col-md-12 tm-form-field">
                                                <input type="email" id="email"
                                                       placeholder="Enter Your Email" name="email" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field">
                                                <input id="order_now" type="submit" class="tm-button tm-button-block" value="Order Now" style="width:12%;background-color:#007bff;color:white">
                                                <input name="create" type="text" class="tm-button tm-button-block hidden" >

                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messages"></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--// Contact Area -->


            </main>
            <!--// Page Content -->

            <!-- Footer -->
            <?php include './footer.php'; ?>
            <!--// Footer -->


            <button id="back-top-top"><i class="ion-arrow-up-c"></i></button>

        </div>
        <!--// Wrapper -->

        <!-- JS FILES HERE -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDd_Sv9-p-I6bebrAMpmZBQvalqBE5Ds"></script>
        <script src="assets/js/mapjs/google-map.js"></script>

        <!-- inject:js -->
        <script src="assets/js/vendors/plugins.min.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- endinject -->

        <!--order form-->
        <script src="assets/js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/order-form.js" type="text/javascript"></script>

    </body>



</html>