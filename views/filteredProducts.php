<!-- start filtered product Area -->
<section class="section_gap">
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Filtered Products</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (!empty($products)) : ?>
                    <?php foreach ($products as $product) : ?>
                        <!-- single product -->
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="./uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['image']); ?>">
                                <div class="product-details">
                                    <h6><?php echo $product['product_name']; ?></h6>
                                    <div class="price">
                                        <h6 style="font-size: 16px;"><?php echo $product['price']; ?></h6>
                                        <h6 class="l-through">$210.00</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="<?php echo $product['product_name']; ?>" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">add to bag</p>
                                        </a>
                                        <a href="<?php echo $product['product_name']; ?>" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">view more</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No products available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- end filtered product Area -->
