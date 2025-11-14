
    <!-- Start Banner Area -->
    <section class="banner organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shop products</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
    <div class="container">
        <div class="row">
            
       	<div class="col-xl-3 col-lg-4 col-md-5">
			 <div class="sidebar-categories">
				<?php include 'sidebar.php' ?>
                <?php include 'sidebarFilter.php' ?>
			 </div>
		</div>  
            <div class="col-xl-9 col-lg-8 col-md-7">
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="1">Default sorting</option>
                        </select>
                    </div>
                    <div class="sorting mr-auto">
                        <select>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Start Best Seller -->
                <section class="lattest-product-area pb-40 category-list">
                    <div class="row">
                        <!-- single product -->
                        <?php foreach ($tab_productsBySubCategory as $productsBySubCategory) : ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <?php if (($productsBySubCategory['cat'] == 2)): ?>
                                        <img class="img-fluid" src="../assets/img/sartoriale/<?php echo
                                            $productsBySubCategory['img'] . '.jpg'; ?>" style="width:350px;  height:250px;" alt=""> 
                                    <?php else: ?>
                                        <img class="img-fluid" src="../assets/img/sartoriale/<?php echo
                                            $productsBySubCategory['img'] . '.jpg'; ?>" style="width:350px;  height:200px;" alt=""> 
                                     <?php endif; ?>
                                    <div class="product-details">
                                        <h6><?php echo $productsBySubCategory['product_name'] ?></h6>
                                        <div class="price">
                                            <h6 style="font-size:16px;">$<?php echo $productsBySubCategory['price']; ?></h6>
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="<?php echo $productsBySubCategory['subcategory_name']; ?>" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">add to bag</p>
                                            </a>
                                            <a href="<?php echo $productsBySubCategory['subcategory_name']; ?>" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
                <!-- End Best Seller -->
                <!-- Start Filter Bar -->
                <div class="filter-bar d-flex flex-wrap align-items-center">
                    <div class="sorting mr-auto">
                        <select>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>
                    <div class="pagination">
                        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                        <a href="#">6</a>
                        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!-- End Filter Bar -->
            </div>
        </div>
    </div>
