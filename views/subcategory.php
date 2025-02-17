<div class="col-xl-3 col-lg-4 col-md-5">
    <div class="sidebar-categories">
        <div class="head">Browse Sub-Categories</div>
        <div id="sub-category"">
            <ul class=" main-subcategories">
            <?php foreach ($tab_subcategories as $subCategory) : ?>
                <li class="main-nav-list">
                    <?php echo $subCategory['subcategory_name']; ?>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>