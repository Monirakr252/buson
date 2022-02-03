<?php
/**
*Template Name: About
*/
get_header();
?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/sections/section', 'breadcrumbs'); ?>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/sections/section', 'wetrusted'); ?>
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part('template-parts/sections/section', 'testimonials'); ?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/sections/section', 'recentnews'); ?>
        <!-- Recent Area End-->

    </main>
<?php
get_footer();
?>