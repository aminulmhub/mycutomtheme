<?php
// Main Template file

get_header(); ?>

<!-- Start Main Content -->
<main>
    <section class="section-gap">
        <div class="container">
            <div class="row">
                <!-- page content -->
                <div class="col-lg-9">
                    <?php get_template_part('template-parts/single_post'); ?>
                </div>
                <!-- sidebar -->
                <div class="col-lg-3">
                    <aside class="sidebar">
                        <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End Main Content -->

<?php get_footer(); ?>