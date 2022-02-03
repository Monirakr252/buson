<?php
/**
 * Template Name: Services
*/
get_header(); ?>

    <main>

        <!-- slider Area Start-->
        <?php get_template_part('template-parts/sections/section', 'breadcrumbs'); ?>
        <!-- slider Area End-->

        <!-- services Area Start-->
        <?php get_template_part('template-parts/sections/section', 'services'); ?>
        <!-- services Area End-->
        

        <!-- Recent Area Start -->
        <?php get_template_part('template-parts/sections/section', 'recentnews'); ?>
        <!-- Recent Area End-->

    </main>
<?php
get_footer();
?>