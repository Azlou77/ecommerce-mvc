
   
        <div class="head">Browse Categories</div>
            <ul class="main-categories">
                <?php foreach ($tab_categories as $category): ?>
                    <li class="main-nav-list">
                        <a data-toggle="collapse" href="/<?php echo $category['category_name']; ?>" aria-expanded="false"
                            aria-controls="<?php echo $category['category_name']; ?>">
                            <span class="lnr lnr-arrow-right"></span>
                            <?php echo $category['category_name']; ?>
                        </a>

                        <ul id="category<?php echo $category['id_category']; ?>" data-toggle="collapse" aria-expanded="false"
                            aria-controls="category<?php echo $category['id_category']; ?>">
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
 
      
