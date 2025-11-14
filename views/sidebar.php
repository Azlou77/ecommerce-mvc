<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php foreach ($tab_categories as $category): ?>
                <li class="main-nav-list">
                    <a data-toggle="collapse" href="/<?php echo $category['category_name']; ?>" aria-expanded="false"
                        aria-controls="<?php echo $category['category_name']; ?>">
                        <span class="lnr lnr-arrow-right"></span>
                        <?php echo $category['category_name']; ?>
                    </a>

                    <ul id="category<?php echo $category['id_category']; ?>" data-toggle="collapse"
                        aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                        <?php foreach ($tab_subcategories as $subCategory): ?>
                            <?php if ($subCategory['cat'] == $category['id_category']): ?>
                                <li class="main-nav-list child">
                                    <a href="/<?php echo $category['category_name'] . '/' . $subCategory['subcategory_name']; ?>">
                                        <?php echo $subCategory['subcategory_name']; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>

       
        <div class="sidebar-filter mt-50">
            <div class="top-filter-head">Product Filters</div>
            <div class="common-filter">
                <div class="head">Color</div>
                <form id="colorForm">
                    <ul>
                        <?php foreach ($tab_colors as $colors) : ?>
                        <li class="filter-list">
                            <input type="radio">
                            <label>
                                <a href="/<?php echo $colors['category_name'] . '?' . 'color' . '=' .
                             $colors['color']; ?>">
                             </a><?php echo $colors['color']; ?>
                             </label>
                        </li>
                    </ul>
                </form>
            </div>
              </div>    
        <?php endforeach; ?>
    </div>
</div>
