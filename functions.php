<!-- Load CSS -->
<?php
function load__css()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'load__css');



// Load JS
function load__js()
{
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load__js');
