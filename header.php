<div class="tm-header tm-header-sticky">

    <div class="tm-header-toparea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12">
                    <ul class="tm-header-info"> 
                        <li><a href="tel:111111111111111"><i class="ion-ios-telephone"></i>: +94 11 123 4567</a></li>
                        <li><a href="mailto:info@aluthmalu.lk"><i class="ion-android-mail"></i> :info@aluthmalu.lk</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12">
                    <ul class="tm-header-icons">
                        <li><a ><i class="ion-android-map"></i>: Kandy Road, Kadawatha.</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-header-bottomarea">
        <div class="container">
            <div class="tm-header-inner">
                <a href="./" class="tm-header-logo">
                    <img src="assets/images/aluthmalu-logo.png" alt="malic" style="width: 150px;">
                </a>
                <nav class="tm-header-nav">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li class="tm-header-nav-dropdown">
                            <a href="#">Products</a>
                            
                                <ul>
                                    <?php
                            foreach (ProductType::all() as $product_type) {
                                ?>
                                    <li><a href="products.php?type=<?php echo $product_type['id']; ?>"><?php echo $product_type['name']; ?></a></li>                                   
                                <?php } ?>
                                </ul>
                           
                        </li>
                        <li><a href="service.php">Services</a></li>
                        <li><a href="about.php">About Us</a></li>


                        <li><a href="contact.php">Contact Us</a></li>
                        <button style="border-radius: 50px;"><li><a href="order-form.php">
                                    <img src="assets/images/shopping-cart.png" alt=""/> ORDER NOW
                                </a></button></li></button

                    </ul>
                </nav> 
                <div class="tm-mobilenav"></div>
            </div>
        </div>
    </div>

</div>