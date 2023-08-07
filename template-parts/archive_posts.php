<div class="row g-4 g-lg-5 mt-4 mt-lg-5">

    <?php if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <!-- Start Single blog -->
            <div class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 ">
                <div class="post-card shade_box">
                    <a class="post-card__thumbnail" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <div class="post-card__content">
                        <div class="post-card__info">
                            <?php the_category(); ?>
                        </div>
                        <a class="post-card__title" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
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
</div>