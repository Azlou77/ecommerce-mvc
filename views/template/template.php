<!DOCTYPE html>
<html>

<head>
  
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Peaky Blinders Shop</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../public/assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
    <!-- Start Header Area -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Logo -->
                <!-- <a class="navbar-brand logo_h" href="index.html">
                    <img src="img/logo.png" alt="">
                </a> -->

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation links -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>

                        <!-- Shop dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                                <li><a class="dropdown-item" href="product">All products</a></li>
                                <li><a class="dropdown-item" href="category">All categories</a></li>
                                <li><a class="dropdown-item" href="single-product">Product Checkout</a></li>
                                <li><a class="dropdown-item" href="cart.html">Shopping Cart</a></li>
                                <li><a class="dropdown-item" href="confirmation.html">Confirmation</a></li>
                            </ul>
                        </li>

                        <!-- Blog dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                <li><a class="dropdown-item" href="blog">Blog</a></li>
                                <li><a class="dropdown-item" href="single-blog.html">Blog Details</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header Area -->


    <?php echo $content; ?>
    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Découvrez l'élégance intemporelle et le style audacieux des Peaky Blinders dans notre boutique. Nos costumes sur mesure incarnent le charme et la sophistication des années 1920, parfaits pour affirmer votre caractère.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="../public/assets/img/i1.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i2.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i3.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i4.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i5.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i6.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i7.jpg" alt=""></li>
                            <li><img src="../public/assets/img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is
                    made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
</body>

</html>