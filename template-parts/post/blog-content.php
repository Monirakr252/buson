<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <a href="#" class="blog_item_date">
            <h3><?php echo get_the_date('j');?></h3>
            <p><?php echo get_the_date('M'); ?></p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <?php the_excerpt(); ?>
        <ul class="blog-info-link">
            <li><i class="fa fa-user"></i>
            <?php the_category(', '); ?>
            </li>
            <li>
                <a href="<?php the_permalink(); ?>"><i class="fa fa-comments"></i>
                <?php $comment_count = get_comments_number($post->ID);
                echo $comment_count .($comment_count === '0' ? ' comment' : ' comments'); ?></a>
            </li>
        </ul>
    </div>
</article>


