<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php foreach ($tab_categories as $category): ?>
                <li class="main-nav-list">
                    <a data-toggle="collapse" href="<?php echo $category['category_name']; ?>" aria-expanded="false"
                        aria-controls="<?php echo $category['category_name']; ?>">
                        <span class="lnr lnr-arrow-right"></span>
                        <?php echo $category['category_name']; ?>
                    </a>

                    <ul id="category<?php echo $category['id_category']; ?>" data-toggle="collapse"
                        aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                        <?php foreach ($tab_subcategories as $subCategory): ?>
                            <?php if ($subCategory['cat'] == $category['id_category']): ?>
                                <li class="main-nav-list child">
                                    <a href="<?php echo $category['category_name'] . '/' . $subCategory['subcategory_name']; ?>">
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
                <form id="colorForm" method="GET">
                    <ul>
                        <li class="filter-list">
                            <input type="radio" id="black" name="color" value="black"
                                onchange="setFormColorAction(this)">
                            <label for="black">Black</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="blue" name="color" value="blue" onchange="setFormColorAction(this)">
                            <label for="blue">Blue</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="grey" name="color" value="grey" onchange="setFormColorAction(this)">
                            <label for="grey">Grey</label>
                        </li>

                    </ul>
                </form>
            </div>

            <script>
                function setFormColorAction(element) {
                    var color = element.value;
                    window.location.href = 'index.php?url=productFilteredByColor&color=' + color;
                }
            </script>



            <div class="common-filter">
                <div class="head">Price range</div>
                <form id="priceRangeForm" method="GET">
                    <ul>
                        <li class="filter-list">
                            <input type="radio" name="priceRange" value="0-50" id="range1"
                                onchange="setFormPriceRangeAction(this)">
                            <label for="range1">0-50</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" name="priceRange" value="50-300" id="range2"
                                onchange="setFormPriceRangeAction(this)">
                            <label for="range2">50-300</label>
                        </li>
                        <!-- Add more price ranges here if needed -->
                    </ul>
                </form>
            </div>

            <script>
                function setFormPriceRangeAction(element) {
                    var priceRange = element.value;
                    window.location.href = 'index.php?url=productFilteredByPriceRange&priceRange=' + priceRange;
                }
            </script>


        </div>
    </div>
</div>
