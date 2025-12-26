<div class="sidebar-filter mt-50">
    <div class="top-filter-head">Product Filters</div>
    <div class="common-filter">
        <div class="head">Color</div>
        <form  id="colorForm" method="GET">
            <ul>
                <?php foreach ($tab_colors as $colors):  ?>
            
                <li class="filter-list">
                    <input type="checkbox" 
                           name="color[]" 
                           id="<?php echo $colors['id_color']; ?>" 
                           value="<?php echo $colors['color_name']; ?>"
                            >
                           
                    <label for="color_<?php echo $colors['color_name']; ?>">
                        <?php echo $colors['color_name']; ?>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul>
            <!-- Bouton pour appliquer les filtres -->
            <button type="button"  style="margin-top: 10px;">
                Appliquer
            </button>
        </form>

       

    </div>
</div>
