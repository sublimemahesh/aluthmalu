<!DOCTYPE html>
<?php
include './class/include.php';
?>
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


        <!-- Contact Form-->
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>


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
                            <li>Contact</li>
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

                                    <div class="form-row">

                                        <div class="form-group col-md-6">
                                            <input type="text" id="txtFullName" placeholder="Enter Your Full Name" name="name" required>
                                            <div class="row">
                                                <span id="spanFullName"></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-6">
                                            <input type="text" id="txtPhone" placeholder="Enter Your Phone Number" name="phone" required>
                                            <div class="row">
                                                <span class="row" id="spanPhone"></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <input type="email" id="txtEmail" placeholder="Enter Your Email" name="email" required>
                                            <div class="row">
                                                <span id="spanEmail"></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <textarea cols="30" rows="5" id="txtMessage" placeholder="Write Your Message" name="message"></textarea>
                                            <div class="row">
                                                <span id="spanMessage"></span>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-5" style="margin-top: 28px">

                                            <input type="text" name="captchacode" placeholder="Security Code"  class="form-group" id="captchacode" >

                                            <div class="vc-cd-12 vc-od-12">
                                                <span id="capspan" ></span> 
                                            </div>

                                        </div>


                                        <div class="form-group col-md-3" style="margin-top: 28px">
                                            <?php include './contact-form/captchacode-widget.php'; ?>

                                        </div>


                                        <div class="form-group col-md-6">
                                            <button id="btnSubmit" type="submit" class="tm-button tm-button-block" value="Submit Form">Send Message</button>
                                        </div>


                                        <div class="vc-cd-12 vc-od-2">
                                            <img src="./contact-form/img/checking.gif"   alt="checking" id="checking"/>
                                        </div>


                                    </div>


                                    <div class="col-sm-12">
                                        <div id="dismessage" align="center"></div>
                                    </div>


                                </div>


                            </div>


                            <!-- Contact Details -->
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
                <div id="google-map" class="google-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7169017267956!2d80.21371001307674!3d6.033534895630315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173ab164cc223%3A0x26f35b51c49d6d1d!2sSynotec%20Holdings%20Pvt.%20Ltd!5e0!3m2!1sen!2slk!4v1591701703939!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
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


        <!-- Contact Form-->
        <script src="contact-form/scripts.js" type="text/javascript"></script>


    </body>



</html>