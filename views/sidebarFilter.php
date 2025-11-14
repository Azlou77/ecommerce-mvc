<div class="sidebar-filter mt-50">
    <div class="top-filter-head">Product Filters</div>
    <div class="common-filter">
        <div class="head">Color</div>
        <form id="colorForm">
            <ul>
                <?php foreach ($tab_colors as $color): ?>
                <li class="filter-list">
                    <input type="radio" 
                           name="color" 
                           id="color_<?php echo $color['id_color']; ?>" 
                           value="<?php echo $color['id_color']; ?>">
                    <label for="color_<?php echo $color['id_color']; ?>">
                        <a href="/<?php echo $category['category_name']; ?>?color=<?php echo $color['id_color']; ?>">
                            <?php echo $color['color_name']; ?>
                        </a>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul>
        </form>
    </div>
</div>