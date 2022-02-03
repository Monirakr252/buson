<?php
/**
 * Template Name: Home
*/
get_header();
?>

    <main>
        <!-- slider Area Start-->
        <?php get_template_part('template-parts/sections/section', 'sliders'); ?>
        <!-- slider Area End-->
        
        <!-- We Trusted Start-->
        <?php get_template_part('template-parts/sections/section', 'wetrusted'); ?>
        <!-- We Trusted End-->
        
        <!-- services Area Start-->
        <?php get_template_part('template-parts/sections/section', 'services'); ?>
        <!-- services Area End-->
        
        <!-- Request Back Start -->
        <?php get_template_part('template-parts/sections/section', 'requestback'); ?>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <?php get_template_part('template-parts/sections/section', 'completecases'); ?>
        <!-- Completed Cases end -->
        
        <!-- Team-profile Start -->
        <?php get_template_part('template-parts/sections/section', 'teams'); ?>
        <!-- Team-profile End-->
        
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