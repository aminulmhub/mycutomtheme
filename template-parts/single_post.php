<?php if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <!-- Start Single blog -->
        <div class="col-12 ">
            <div class="post-card shade_box">
                <div class="post-card__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post-card__content">
                    <div class="post-card__info">
                        <?php the_category(); ?>
                    </div>
                    <a class="post-card__title" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                <div class="post-card__description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- End Single blog -->
<?php
    endwhile;
else :
    _e('No Post Found!');
endif;
?>