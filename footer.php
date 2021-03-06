<?php
$ABOUT_PAGE = new Page(1);
?>

<div class="tm-footer">
    <div class="tm-footer-toparea tm-padding-section" data-bgimage="assets/images/footer-area-bg.jpg" data-black-overlay="8">
        <div class="container">
            <div class="widgets widgets-footer row">

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-info">
                        <a class="widget-info-logo" href="./">
                            <img src="assets/images/aluthmalu-logo-footer.png" alt="white logo" style="width: 200px;"></a>
                        <p><?php echo substr($ABOUT_PAGE->description, 0, 250) ?>
                        </p>
                        <ul>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-skype-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-contact">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul>
                            <li>
                                <i class="ion-ios-telephone-outline"></i>
                                <p><a href="tel:+18009156270">1 (800) 915 6270</a></p>
                                <p><a href="tel:+18009156271">1 (800) 915 6271</a></p>
                            </li>
                            <li>
                                <i class="ion-ios-email-outline"></i>
                                <p><a href="mailto:">support@aluthmalu.lk</a></p>
                                <p><a href="#:">Skype: aluthmalu.lk</a></p>
                            </li>
                            <li>
                                <i class="ion-ios-location-outline"></i>
                                <p>2726 Avenue Papineau Montreal, QC, Canada</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-twitterfeed">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul>
                            <li><h6><a href="./"><i class="ion-ios-arrow-right"></i> Home</a></h6></li>
                            <li><h6><a href="service.php"><i class="ion-ios-arrow-right"></i> Our Services</a></h6></li>
                            <li><h6><a href="about.php"><i class="ion-ios-arrow-right"></i> About Us</a></h6></li>
                            <li><h6><a href="contact.php"><i class="ion-ios-arrow-right"></i> Contact Us</a></h6></li>
                            <li><h6><a href="order-form.php"><i class="ion-ios-arrow-right"></i> Oder Products</a></h6></li>
                        </ul>
                    </div>
                </div>
                <!--// Single Widget -->

                <!-- Single Widget -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-widget widget-twitterfeed">
                        <h4 class="widget-title">Our Services</h4>

                        <?php
                        $SERVICE = new Service(NULL);
                        foreach ($SERVICE->all()as $key => $service) {
                            if ($key < 7) {
                                ?>
                                <ul>
                                    <li><h6><a href="view-service.php?id=<?php echo $service['id'] ?>"><i class="ion-android-star"></i> <?php echo $service['title']; ?></a></h6></li>
                                </ul>
                                <?php
                            }
                        }
                        ?>


                    </div>
                </div>
                <!--// Single Widget -->

            </div>
        </div>
    </div>

    <div class="tm-footer-bottomarea bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="tm-footer-copyright">

                        © 2020, All Rights Reserved :  <a href="#">Aluthmalu.lk</a></p>
                </div>
                <div class="col-md-5">
                    <div class="tm-footer-payment">
                        <p class="tm-footer-copyright">Website By : <a href="#">Synotec Holdings (Pvt.) Ltd.</a> ©  2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>