<div class="request-back-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-8 mx-auto text-center">
                <?php
                $button_name = get_field('button_name');
                $button_link = get_field('button_link');
                $args = array(
                    'post_type' => 'Requests',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query($args);
                while( $query->have_posts() ) {
                    $query->the_post();?>
                <div class="request-content">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <a href="<?php if( get_field('button_link') ): ?>
                        <?php the_field('button_link'); ?>
                    <?php endif; ?>" class="btn trusted-btn">
                        <?php if( get_field('button_name') ): ?>
                            <?php the_field('button_name'); ?>
                        <?php endif; ?>
                    </a>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>