<?php get_header( ) ?>

<!-- slider Area Start-->
<?php get_template_part('template-parts/sections/section', 'breadcrumbs'); ?>
<!-- slider Area End-->

<div class="container">
    <div class="row py-5">
        <div class="col-lg-12">
            <div class="page-not-found text-center">
                <h3>Sorry, Nothing found here!</h3>
                <a href="<?php echo site_url();?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer( ) ?>