<!-- <?php include (TEMPLATEPATH . '/searchform.php'); ?> -->

<div id="sidebar">
    <h4>Category</h4>
    <ul class="ul-cat">
        <?php wp_list_categories('show_count=1&title_li='); ?>
    </ul>
    <h4>Archives</h4>
    <ul class="ul-archives">
        <?php wp_get_archives('type=monthly'); ?>
    </ul>
</div>
<!--/sidebar -->