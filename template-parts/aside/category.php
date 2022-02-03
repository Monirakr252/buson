<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Category</h4>
    <ul class="list cat-list">
        <?php
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );
        foreach ($categories as $category):
        ?>
        <li>
            <a href="<?php echo $category->slug ?>" class="d-flex">
                <p><?php echo $category->name ?></p>
                <p><?php echo " (". $category->category_count .")" ?></p>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</aside>