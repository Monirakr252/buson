<?php
get_header();
?>

    <!-- slider Area Start-->
     <?php get_template_part('template-parts/sections/section','breadcrumbs'); ?>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
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
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        
                        <!--Start search-->
                        <?php get_template_part('template-parts/aside/search'); ?>
                        <!--End search-->

                        <!--Start Categories-->
                        <?php get_template_part('template-parts/aside/category'); ?>
                        <!--End Categories-->

                        <!--Start recntposts-->
                        <?php get_template_part('template-parts/aside/recentposts'); ?>
                        <!--End recntposts-->

                        <!--Start tagcloud-->
                        <?php get_template_part('template-parts/aside/tagcloud'); ?>
                        <!--End tagcloud-->
                        
                        <!--Start instagram-->
                        <?php get_template_part('template-parts/aside/instagram'); ?>
                        <!--End instagram-->
                        
                        <!--Start newsletter-->
                        <?php get_template_part('template-parts/aside/newsletter'); ?>
                        <!--End newsletter-->
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php
get_footer();
?>