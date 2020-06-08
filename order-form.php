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
                            <div class="col-md--12">
                                <div class="tm-contact">
                                    <h2>Order Now</h2>
                                    <form id="tm-contactform" action="http://thememarch.com/demo/html/malic/malic/assets/php/mailer.php"
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
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="tm-cart-col-image" scope="col">Image</th>
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
                                                                                <a href="product-details.html" class="tm-cart-productimage">
                                                                                    <img src="upload/product-type/product/<?php echo $product['image_name'] ?>"
                                                                                         alt="product image">
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                <a href="product-details.html" class="tm-cart-productname"><?php echo $product['name'] ?></a>
                                                                            </td>

                                                                            <td class="tm-cart-price">Rs. <?php echo $product['price'] ?></td>

                                                                            <td>
                                                                                <div class="tm-quantitybox">
                                                                                    <input type="text" value="0">
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
                                        <div class="tm-form-inner">

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Select Your Product</label>
                                                <select>
                                                    <option>Prawns</option>
                                                    <option>Fish</option>
                                                    <option>Dry Fish</option>
                                                    <option>Cuttle Fish</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Quantity</label>
                                                <input type="text" id="contact-form-name" placeholder="Your Quantity here"
                                                       name="quantity" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Amount</label>
                                                <input type="text" id="contact-form-name" placeholder="Your Amount (Rs) here"
                                                       name="amount" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Name</label>
                                                <input type="text" id="contact-form-name" placeholder="Your name here"
                                                       name="fname" required>
                                            </div>



                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Address</label>
                                                <input type="text" id="contact-form-name" placeholder="Your address here"
                                                       name="address" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">City</label>
                                                <input type="text" id="contact-form-name" placeholder="Your city here"
                                                       name="city" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-email">Email</label>
                                                <input type="email" id="contact-form-email"
                                                       placeholder="malicfishing@gmail.com" name="email" required>
                                            </div>
                                            <div class="col-md-6 tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-phone">Phone</label>
                                                <input type="text" id="contact-form-phone"
                                                       placeholder="Your phone number here" name="phone" required>
                                            </div>

                                            <div class="col-md-6 tm-form-field">
                                                <button type="submit" class="tm-button tm-button-block">Oder Now</button>
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
    </body>



</html>