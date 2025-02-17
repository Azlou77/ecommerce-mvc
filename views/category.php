<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php if (isset($tab_categories) && is_array($tab_categories)) : ?>
                <?php foreach ($tab_categories as $category) : ?>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="#category<?php echo $category['id_category']; ?>" aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                            <span class="lnr lnr-arrow-right"></span>
                            <?php echo $category['category_name']; ?>
                        </a>

                        <?php if (isset($tab_subcategories) && is_array($tab_subcategories)) : ?>
                            <ul class="collapse" id="category<?php echo $category['id_category']; ?>" data-toggle="collapse" aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                                <?php foreach ($tab_subcategories as $subCategory) : ?>
                                    <?php if ($subCategory['cat'] == $category['id_category']) : ?>
                                        <li class="main-nav-list child">
                                            <a href="#"><?php echo $subCategory['subcategory_name']; ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>