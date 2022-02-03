<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
    <?php
        if(have_posts()):
            while(have_posts()):
                the_post();
        ?>
        <?php get_template_part( 'template-parts/post/blog', 'content' ); ?>
        <?php
        endwhile;
        endif;
        ?>

        <?php get_template_part('template-parts/post/blog', 'pagination'); ?>
    </div>
</div>