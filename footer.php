<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                             <?php
                             $footer = get_field('footer_about', 'option');
                             $footer_connected = get_field('footer_connected', 'option');
                             ?>
                            <div class="footer-logo">
                            <a href="<?php echo site_url();?>"><img
                                        src="<?php echo $footer['footer_logo']['url'];?>"
                                        alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer['footer_description'] ?></p>
                               </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <?php foreach( $footer['social_links'] as $foo):?>
                                <a href="<?php echo $foo['link'] ?>"><i class="<?php echo $foo['icon']?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <?php dynamic_sidebar('footer-menu-sidebar'); ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Services</h4>
                               <ul>
                               <?php
                                $args = array(
                                    'post_type' => 'OurServices',
                                    'posts_per_page' => 7,
                                );
                                $query = new WP_Query($args);
                                while($query->have_posts() ) {
                                    $query->the_post();?>
                                   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                   <?php } wp_reset_postdata(); ?>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Get in Touch</h4>
                               <ul>
                                <li><a href="tel:"><?php echo $footer_connected['phone']?></a></li>
                                <li><a href="mailto:"> <?php echo $footer_connected['email']?></a></li>
                                <li><a href="#"><?php echo $footer_connected['location']?></a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <?php echo get_field('copyright', 'options'); ?>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<?php wp_footer(); ?>
        
    </body>
</html>