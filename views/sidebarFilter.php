<div class="sidebar-filter mt-50">
    <div class="top-filter-head">Product Filters</div>
    <div class="common-filter">
        <div class="head">Color</div>
        <form id="colorForm">
            <ul>
                <?php   

                $selected_colors = isset($_GET['color']) ? (array)$_GET['color'] : [];

                foreach ($tab_colors as $color): 
                $isChecked = in_array($color['color_name'], $selected_colors) ? 'checked' : '';
                ?>

                <li class="filter-list">
                    <input type="checkbox" 
                           name="color[]" 
                           id="color_<?php echo $color['id_color']; ?>" 
                           value="<?php echo $color['color_name']; ?>"
                           <?php echo $isChecked; ?> >
                           
                    <label for="color_<?php echo $color['color_name']; ?>">
                        <?php echo $color['color_name']; ?>
                    </label>
                </li>
                <?php endforeach; ?>
            </ul>
            <!-- Bouton pour appliquer les filtres -->
            <button type="button" onclick="setFormColorAction()" style="margin-top: 10px;">
                Appliquer
            </button>
        </form>

        <script>
            function setFormColorAction() {
            
            var checkboxes = document.querySelectorAll('input[name="color[]"]:checked');
            var colors = [];
            
            checkboxes.forEach(function(checkbox) {
                colors.push(checkbox.value);
            });
            
            
            var url = '/<?php echo $category['category_name']; ?>';
            if (colors.length > 0) {
                url += '?color=' + colors.join('&color=');
            }
            
            window.location.href = url;
        }
        </script>

        

    </div>
</div>
