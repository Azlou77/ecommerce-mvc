 <div class="sidebar-filter mt-50">
            <div class="top-filter-head">Product Filters</div>
            <div class="common-filter">
                <div class="head">Color</div>
                    <form id="colorForm">
                        <ul>
                            <?php foreach ($tab_colors as $colors): ?>
                               
                                <li class="filter-list">
                                    
                                    <input type="radio" name="color" id="color_<?php echo $colors['color']; ?>" value="<?php echo $colors['color']; ?>">
                                    <label>
                                        
                                        <a href="<?php echo $productsByColor['category_name'] . '/' . 
                                            'color' . '=' . $colors['color']; ?>">
                                            <?php echo $colors['color']; ?>
                                        </a>
                                    
                                    </label>
                                 
                                </li>
                                
                            <?php endforeach; ?>
                        </ul>
                    </form>
            </div>
</div>
