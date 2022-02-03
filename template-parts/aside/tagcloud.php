<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <?php
    $tags = wp_tag_cloud([
        'number' => 10,
        'format' => 'array',
    ]);
    ?>
    <ul class="list">
        <?php foreach($tags as $tag): ?>
        <li>
        <?php echo $tag; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</aside>
