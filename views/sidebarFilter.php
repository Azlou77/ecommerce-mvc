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
                           id="<?php echo $color['id_color']; ?>" 
                           value="<?php echo $color['color_name']; ?>"
                           onchange="setFormColorAction(this)">
                           
                    <label for="color_<?php echo $color['color_name']; ?>">
                        <?php echo $color['color_name']; ?>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul>
        </form>

        <script>
                function setFormColorAction(element) {
                    var color = element.value;
                    window.location.href = '/<?php echo $category['category_name']; ?>?color=' + color;
                }
        </script>

        <div class="head">Size</div>
        <form id="sizeForm">
            <ul>
                <?php foreach ($tab_sizes as $size): ?>
                <li class="filter-list">
                    <input type="radio" 
                           name="size" 
                           id="<?php echo $size['id_size']; ?>" 
                           value="<?php echo $size['size_name']; ?>"
                           onchange="setFormSizeAction(this)">
                    <label for="size_<?php echo $size['size_name']; ?>">
                        <?php echo $size['size_name']; ?>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul>
        </form>

         <script>
                function setFormSizeAction(element) {
                    var size = element.value;
                    window.location.href = '/<?php echo $category['category_name']; ?>?size=' + size;
                }
        </script>

    </div>
</div>