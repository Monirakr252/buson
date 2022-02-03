<?php
    global $wp_query;
    $big =  9999999999;

    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_text' => '<i class="ti-angle-left"></i>',
        'next_text' => '<i class="ti-angle-right"></i>',
        'type' => 'array',
    ));

    if(is_array($pages)):
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
?>

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <?php foreach ($pages as $page): ?>
            <li><?php echo $page; ?></li>
        <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>