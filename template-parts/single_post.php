<?php if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <!-- Start Single blog -->
        <div class="col-12 ">
            <div class="blog_item shade_box">
                <div class="inner">
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="content">
                        <div class="category-info">
                            <div class="category-list">
                                <?php the_category(); ?>
                            </div>
                        </div>
                        <h4 class="title">
                            <?php the_title(); ?>
                        </h4>
                    </div>
                    <div class="post_description">
                        <?php the_content(); ?>
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