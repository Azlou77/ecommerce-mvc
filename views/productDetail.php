<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>
<body>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                    <?php foreach($product as $oneProduct) : ?>
                    <div class="col-md-6">
                        <img class="card-img-top mb-5 mb-md-0" src="../public/assets/img/sartoriale/<?php echo $oneProduct['img'] . '.jpg'; ?>">
                    </div>
                    <div class="col-md-6">
                        <div class="small mb-1"><?php echo ($oneProduct['product_name']); ?></div>
                        <h1 class="display-5 fw-bolder"><?php echo ($oneProduct['product_name']); ?></h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">$<?php echo ($oneProduct['price']); ?></span>
                        </div>
                    
                    </div>
              <?php endforeach ?>
            </div>
        </div>
    </section>
</body>
</html>
