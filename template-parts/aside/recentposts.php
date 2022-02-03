<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    <?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
    );
    $query = new WP_Query($args);
    while($query->have_posts()){
        $query->the_post();
    ?>
    <div class="media post_item">
        <img src="<?php the_post_thumbnail_url(80 * 80); ?>" alt="post">
        <div class="media-body">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p><?php the_date('M j, Y');?></p>
        </div>
    </div>
    <?php } wp_reset_postdata();?>
</aside>
