<?php
include './class/include.php';
?>

<!DOCTYPE html>

<html lang="zxx">


    <head>
        
        
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        
        <title>Aluthmalu.lk || Contact Us</title>
        
        
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
                            <h2>Contact With Us</h2>
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
                        <h2 class="white">Contact With Us</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Contact With Us</li>
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
                            <div class="col-lg-8">
                                <div class="tm-contact">
                                    <h2>Send us a message</h2>
                                    <form id="tm-contactform" action="http://thememarch.com/demo/html/malic/malic/assets/php/mailer.php"
                                          class="tm-contact-forminner tm-form" method="POST">
                                        <div class="tm-form-inner">
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-name">Full Name</label>
                                                <input type="text" id="contact-form-name" placeholder="Your name here"
                                                       name="name" required>
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-email">Email</label>
                                                <input type="email" id="contact-form-email"
                                                       placeholder="malicfishing@gmail.com" name="email" required>
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-phone">Phone</label>
                                                <input type="text" id="contact-form-phone"
                                                       placeholder="Your phone number here" name="phone" required>
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <label for="contact-form-subject">Subject</label>
                                                <input type="text" id="contact-form-subject" placeholder="Your subjert"
                                                       name="subject">
                                            </div>
                                            <div class="tm-form-field">
                                                <label for="contact-form-message">Message</label>
                                                <textarea cols="30" rows="5" id="contact-form-message"
                                                          placeholder="Write your message" name="message"></textarea>
                                            </div>
                                            <div class="tm-form-field">
                                                <button type="submit" class="tm-button tm-button-block">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messages"></p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tm-contact-blocks mt-30-reverse">
                                    <div class="tm-contact-block text-center mt-30">
                                        <i class="ion-ios-telephone-outline"></i>
                                        <h6>Contact Us</h6>
                                        <p>Phone : <a href="tel:+18009156270">1-800-915-6270</a></p>
                                        <p>Email: <a href="mailto:malicfishing@gmail.com">malicfishing@gmail.com</a></p>
                                        <p>Fax : 1-866-535-1747</p>
                                    </div>

                                    <div class="tm-contact-block text-center mt-30">
                                        <i class="ion-ios-location-outline"></i>
                                        <h6>Our location</h6>
                                        <p>7415 Transcanadienne, Suite 100
                                            St. Laurent, Quebec, Canada
                                            H45T 1Z22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Contact Area -->

                <!-- Google Map -->
                <div id="google-map" class="google-map"></div>
                <!--// Google Map -->

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