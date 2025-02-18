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
                <div class="head">Brands</div>
                <form action="#">
                    <ul>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                    </ul>
                </form>
            </div>
            <div class="common-filter">
                <div class="head">Color</div>
                <form action="#">
                    <ul>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Blue
                                <span>(29)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Marron
                                <span>(19)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                        <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Grey<span>(19)</span></label></li>
                    </ul>
                </form>
            </div>
            <div class="common-filter">
                <div class="head">Price</div>
                <div class="price-range-area">
                    <div id="price-range"></div>
                    <div class="value-wrapper d-flex">
                        <div class="price">Price:</div>
                        <span>$</span>
                        <div id="lower-value"></div>
                        <div class="to">to</div>
                        <span>$</span>
                        <div id="upper-value"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>