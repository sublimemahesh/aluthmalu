<div class="tm-heroslider-area bg-grey">
                <div class="tm-heroslider-slider">
                    <?php
                    $SLIDER = new Slider(NULL);
                    foreach ($SLIDER->all() as $slider) {
                        ?>
                        <!-- Heroslider Item -->
                        <div class="tm-heroslider">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-md-8 order-2 order-md-1">
                                        <div class="tm-heroslider-contentwrapper">
                                            <div class="tm-heroslider-content">
                                                <h1><?php echo $slider['title']; ?></h1>
                                                <p><?php echo $slider['description'] ?></p>
                                                <a href="about.php" class="tm-button">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-4 order-1 order-md-2">
                                        <div class="tm-heroslider-image">
                                            <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="heroslider image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--// Heroslider Item -->
                    <?php } ?>
                  

                </div>

                <div class="tm-heroslider-pagination">
                    <svg viewBox="0 0 33.83098862 33.83098862" xmlns="http://www.w3.org/2000/svg">
                    <circle class="radialbg" cx="16.9" cy="16.9" r="15.9"></circle>
                    <circle class="radialactive" cx="16.9" cy="16.9" r="15.9" stroke-dasharray="33.333333333333336 100">
                    </circle>
                    </svg>
                    <div class="slides-numbers">
                        <span class="active">1</span>/<span class="total"></span>
                    </div>
                </div>

            </div>