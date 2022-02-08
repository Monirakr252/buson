<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/breadcumb.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>
                            <?php
                            $single_title = single_post_title();
                            $single_acrhive = single_cat_title();
                            if(is_archive()){
                                 echo $single_acrhive;
                                }else{
                                    echo $single_title;
                                }
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>