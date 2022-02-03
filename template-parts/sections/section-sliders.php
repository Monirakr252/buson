<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <?php
        $args = array(
            'post_type' => 'sliders',
            'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        while($query->have_posts()) {
            $query->the_post();?>
        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url();?>')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="hero__caption">
                        <?php if( get_field('subheading') ): ?>
                            <p><?php the_field('subheading'); ?></p>
                        <?php endif; ?>
                            <h1><?php the_title(); ?></h1>
                            <!-- Hero-btn -->
                            <div class="hero__btn">
                                <a href="<?php if( get_field('button_link') ): ?>
                                    <?php the_field('button_link'); ?>
                                <?php endif; ?>" class="btn hero-btn">
                                <?php if( get_field('button_name') ): ?>
                                    <?php the_field('button_name'); ?>
                                <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } wp_reset_postdata();
        ?>
    </div>
</div>