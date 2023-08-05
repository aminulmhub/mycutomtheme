        <!-- Start Feature Section -->
        <section id="features" class="feature section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center text-sm-start ">
                            <span class="subtitle">Features</span>
                            <h2 class="title">What I Do</h2>
                        </div>
                    </div>
                </div>

                <div class="row g-4 g-xl-5 row-cols-1 row-cols-md-2 row-cols-xl-3 mt-2 mt-lg-3">
                    <?php
                        query_posts('post_type=feature&post_status=publish&posts_per_page=6&order=DSC&paged=' .
                        get_query_var('post'));

                        if(have_posts()):
                            while(have_posts()): the_post();
                    ?>
                    <!-- Start Single Service -->
                    <div     class="col ">
                        <div class="feature_item shade_box">
                            <div class="inner">
                                <div class="icon">
                                    <?php echo the_post_thumbnail(); ?>
                                </div>
                                <div class="content">
                                    <h4 class="title"><?php the_title(); ?></h4>
                                    <p class="description"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End SIngle Service -->
                    <?php
                            endwhile;
                        endif;   
                    ?>
                    
                </div>
            </div>
        </section>
        <!-- End Feature Section -->