<?php
if( ! function_exists( 'inc_comments' ) ):
function inc_comments($comment, $args, $depth) {
  $the_zero_reply = '';
  $the_zero_reply_end = '';
  if($depth>1){
    $the_zero_reply = '<div class="comments-area"><div class="comment-list">';
    $the_zero_reply_end = '</div></div>';

  }
?>
<div class="comments-area">
<div class="comment-list" id="comment-id<?php comment_ID() ?>">

    <?php $the_zero_reply; ?>  

    <?php if ($comment->comment_approved == '0') : ?>
    <em><?php esc_html_e('Your comment is awaiting moderation.','buson') ?></em>
    <br />
    <?php endif; ?>
    <div class="single-comment justify-content-between d-flex">
    <div class="user justify-content-between d-flex">
        <div class="thumb">
        <?php echo get_avatar(get_the_author_meta('ID'));?>
        </div>
        <div class="desc">
            <p class="comment">
            <?php comment_text() ?>
            </p>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                <h5>
                    <?php echo get_comment_author(); ?>
                </h5>
                <p class="date"><?php echo get_comment_date('M j, Y h:i a'); ?></p>
                </div>
                <div class="reply-btn">
                <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<i class="btn-reply text-uppercase">reply</i>'))) ?>
                </div>
            </div>
        </div>
    </div>
    </div>

      <?php $the_zero_reply_end; ?>

    </div>
</div>
<?php
}
endif;

