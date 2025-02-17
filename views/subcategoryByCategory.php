<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php foreach ($tab_categories as $category) : ?>
                <li class="main-nav-list">
                    <a href="#"><?php echo $category['category_name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div id="sub-category" style="background-color:powderblue; margin-top: 20px;">
            <div class="head">Browse Subcategories for <?php echo $categoryName; ?></div>
            <ul class="main-subcategories">
                <?php foreach ($tab_subcategoriesByCategory as $subCategory) : ?>
                    <li class="main-nav-list">
                        <?php echo $subCategory['subcategory_name']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>