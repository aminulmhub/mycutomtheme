
<?php 
    // Main Template file

    get_header(); ?>

    <!-- Start Main Content -->
    <main>
        <!-- Hero -->
        <?php get_template_part('template-parts/hero'); ?>

        <!-- Feature -->
        <?php get_template_part('template-parts/feature'); ?>

        <!-- Portfolio -->
        <?php get_template_part('template-parts/portfolio'); ?>

    </main>
    <!-- End Main Content -->

<?php get_footer(); ?>


