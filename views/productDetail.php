<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <?php if ($product): ?>
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                         src="../assets/img/sartoriale/<?php echo $product['img'] . '.jpg'; ?>" 
                         alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: <?php echo $product['id_product']; ?></div>
                    <h1 class="display-5 fw-bolder"><?php echo htmlspecialchars($product['product_name']); ?></h1>
                    <div class="fs-5 mb-5">
                        <span>$<?php echo number_format($product['price'], 2); ?></span>
                    </div>
                    <p class="lead"><?php echo htmlspecialchars($product['description'] ?? ''); ?></p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-12">
                    <div class="alert alert-warning">Product not found</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>