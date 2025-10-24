<!-- start banner Area -->
<section class="banner">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div>

                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1 style="margin-top:50px;">Peaky Blinders New <br>Collection!</h1>
                                <p style="font-size:1.25em;">Adoptez l'élégance intemporelle et l'attitude audacieuse des Peaky Blinders avec nos costumes sur mesure. Exprimez votre style avec distinction et laissez une impression inoubliable.</p>

                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="assets/img/sartoriale/peaky-blinders-banner.jpeg" alt="">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->




<!-- start product Area -->
<section class="section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($tab_latestProducts as $latestProducts) : ?>
                    <!-- single product -->
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="assets/img/sartoriale/<?php echo $latestProducts['img'] . '.jpg'; ?>" alt="">
                            <div class="product-details">
                                <h6><?php echo $latestProducts['product_name']; ?></h6>
                                <div class="price">
                                    <h6 style="font-size: 16px;"><?php echo $latestProducts['price']; ?>$</h6>

                                </div>
                                <div class="prd-bottom">
                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- end product Area -->