        <!-- Start Portfolio Section -->
        <section id="portfolio" class="portfolio section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center ">
                            <span class="subtitle">Visit my portfolio and keep your feedback</span>
                            <h2 class="title">My Portfolio</h2>
                        </div>
                    </div>
                </div>

                <div class="row g-4 g-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 mt-2 mt-lg-3">
                    <?php
                    query_posts('post_type=portfolio&post_status=publish&posts_per_page=3&order=ASC&paged=' .
                        get_query_var('post'));

                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <!-- Start Single Portfolio -->
                            <div class="col ">
                                <div class="post-card shade_box">
                                    <div class="inner">
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
                            </div>
                            <!-- End Single Portfolio -->
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
                <div class="d-flex align-items-center justify-content-center mt-5">
                    <a class="btn btn_primary shade_box" href="/portfolio">All Portfolio</a>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->