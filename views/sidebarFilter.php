<div class="sidebar-filter mt-50">
    <div class="top-filter-head">Product Filters</div>
    <div class="common-filter">
        <div class="head">Color</div>
        <form id="colorForm" method="GET">
            <ul>
                <?php   
                $color = isset($_GET['color']) ? (array)$_GET['color'] : [];
                foreach ($tab_colors as $colors): 
                $isChecked = in_array($colors['color_name'], $color) ? 'checked' : '';
                ?>

                <li class="filter-list">
                    <input type="checkbox" 
                           name="color[]" 
                           id="<?php echo $colors['id_color']; ?>" 
                           value="<?php echo $colors['color_name']; ?>"
                           <?php echo $isChecked; ?> >
                           
                    <label for="color_<?php echo $colors['color_name']; ?>">
                        <?php echo $colors['color_name']; ?>
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
         
            var history = window.location.pathname.split('/');
            var category = history[1];
            
            checkboxes.forEach((checkbox) => {
                colors.push(checkbox.id);
            });
            var colorParam = colors.join(',');
            var newUrl = '/' + category + '?color=' + colorParam;
            window.location.href =
                newUrl;

        }
        </script>

    </div>
</div>
