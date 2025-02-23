<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Categories</div>
        <ul class="main-categories">
            <?php foreach ($tab_categories as $category) : ?>
                <li class="main-nav-list">
                    <a data-toggle="collapse" href="#category<?php echo $category['id_category']; ?>" aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                        <span class="lnr lnr-arrow-right"></span>
                        <?php echo $category['category_name']; ?>
                    </a>

                    <ul class="collapse" id="category<?php echo $category['id_category']; ?>" data-toggle="collapse" aria-expanded="false" aria-controls="category<?php echo $category['id_category']; ?>">
                        <?php foreach ($tab_subcategories as $subCategory) : ?>
                            <?php if ($subCategory['cat'] == $category['id_category']) : ?>
                                <li class="main-nav-list child">
                                    <a href="<?php echo $subCategory['subcategory_name']; ?>">
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
                            <input type="radio" id="black" name="color" value="black" onchange="setFormAction(this)">
                            <label for="black">Black</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="blue" name="color" value="blue" onchange="setFormAction(this)">
                            <label for="blue">Blue</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="grey" name="color" value="grey" onchange="setFormAction(this)">
                            <label for="grey">Grey</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="red" name="color" value="red" onchange="setFormAction(this)">
                            <label for="red">Red</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" id="green" name="color" value="green" onchange="setFormAction(this)">
                            <label for="green">Green</label>
                        </li>
                    </ul>
                </form>
            </div>

            <script>
                function setFormAction(element) {
                    var color = element.value;
                    window.location.href = 'index.php?url=productFilteredByColor&color=' + color;
                }
            </script>



            <div class="common-filter">
                <div class="head">Price range</div>
                <form method="GET" action="index.php" onsubmit="this.action = 'index.php?action=productFilteredByPriceRange&priceRange=' + document.querySelector('input[name=priceRange]:checked').value;">
                    <ul>
                        <li class="filter-list">
                            <input type="radio" name="priceRange" value="0-50" id="range1">
                            <label for="range1">0-50</label>
                        </li>
                        <li class="filter-list">
                            <input type="radio" name="priceRange" value="50-300" id="range2">
                            <label for="range2">50-300</label>
                        </li>
                        <!-- Add more price ranges here if needed -->
                    </ul>
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>


    </div>

</div>