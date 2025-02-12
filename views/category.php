<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php foreach ($tab_categories as $category) : ?>
                <li class="main-nav-list">
                    <a href="<?php echo $category['id_category']; ?>">
                        <span class="lnr lnr-arrow-right"></span><?php echo $category['category_name']; ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</div>