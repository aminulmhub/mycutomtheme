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
                        query_posts('post_type=portfolio&post_status=publish&posts_per_page=6&order=DSC&paged=' .
                        get_query_var('post'));

                        if(have_posts()):
                            while(have_posts()): the_post();
                    ?>
                    <!-- Start Single Portfolio -->
                    <div class="col ">
                        <div class="portfolio_item shade_box" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <!-- <img class="img-fluid" src="assets/images/portfolio/portfolio-01.jpg" alt="Personal Portfolio Images"> -->
                                        <?php echo the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
            </div>
        </section>
        <!-- End Portfolio Section -->