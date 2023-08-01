<div class="row g-4 g-lg-5 mt-4 mt-lg-5">

    <?php if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <!-- Start Single blog -->
            <div class="col-lg-6 col-xl-4 mt--30 col-md-6 col-sm-12 col-12 ">
                <div class="blog_item shade_box" data-bs-toggle="modal" data-bs-target="#exampleModalCenters">
                    <div class="inner">
                        <div class="thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="content">
                            <div class="category-info">
                                <div class="category-list">
                                    <?php the_category(); ?>
                                </div>
                            </div>
                            <h4 class="title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </h4>
                        </div>
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