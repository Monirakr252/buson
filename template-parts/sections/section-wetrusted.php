<div class="we-trusted-area trusted-padding">
    <div class="container">
    <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 1,
        );
        $query = new WP_Query($args);
        while($query->have_posts()) {
            $query->the_post();?>
        <div class="row d-flex align-items-end">
            <div class="col-xl-7 col-lg-7">
                <div class="trusted-img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="trusted-caption">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();?>
                    <a href="<?php if( get_field('button_link') ): ?>
                                    <?php the_field('button_link'); ?>
                                <?php endif; ?>" class="btn trusted-btn">
                    <?php if( get_field('button_name') ): ?>
                        <?php the_field('button_name'); ?>
                    <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php } wp_reset_postdata();?>
    
</div>