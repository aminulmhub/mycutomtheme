<div>
    <?php if ('page_navigation') {
        page_navigation();
    } else { ?>
        <?php next_post_link(); ?>
        <?php previous_post_link(); ?>
    <?php } ?>
</div>