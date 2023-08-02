<?php 
    // search Template file

    get_header(); ?>

    <!-- Start Main Content -->
    <main>
        <!-- Start Blog Section -->
        <section id="blog" class="blog section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center ">
                            <span class="subtitle">Search result for</span>
                            <h2 class="title"><?php printf(__('%s', 'textdomain'), get_search_query()); ?></h2>
                        </div>
                    </div>
                </div>

                <!-- archive post -->
                <?php get_template_part('template-parts/archive_posts'); ?>

                <!-- pagination -->
                <?php get_template_part('template-parts/pagination'); ?>
            </div>
        </section>
        <!-- End Blog Section -->   

    </main>
    <!-- End Main Content -->

<?php get_footer(); ?>