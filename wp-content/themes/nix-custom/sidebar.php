<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Categories</h4>
        <p><?php $categories = get_categories();
        foreach($categories as $category) {
           echo '<div class="categories-sidebar-div"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
        } ?></p>
    </div>
    <div class="sidebar-module sidebar-module-inset">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ol>
    </div>
    <div class="sidebar-module sidebar-module-inset">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->