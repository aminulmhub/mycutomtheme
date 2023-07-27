<?php
/* 
* Theme Functions
*/

// theme title
add_theme_support('title-tag');

// theme style and js call
function theme_css_js()
{
    // default css
    wp_enqueue_style('style', get_stylesheet_uri());
    // bootstrap css
    wp_register_style('bootstrap_style', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), '5.3.0');
    wp_enqueue_style('bootstrap_style');
    // icon
    wp_register_style('fontawesome_icon', get_template_directory_uri() . '/assets/icons/fontawesome-6.3.0/css/all.min.css', array(), '6.3.0');
    wp_enqueue_style('fontawesome_icon');
    // theme css
    wp_register_style('main_style', get_template_directory_uri() . "/assets/css/main.css", filemtime(get_template_directory() . "/assets/css/main.css"), '1.0.0', 'all');
    wp_enqueue_style('main_style');

    // default jquery
    wp_enqueue_script('jquery');
    // bootstrap js
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . "/assets/vendors/bootstrap/js/bootstrap.bundle.min.js", array(), "5.3.0", 'true');
    wp_enqueue_script('main_js', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0.0", 'true');
}

add_action("wp_enqueue_scripts", 'theme_css_js');


// theme functions
function custom_theme_customizer($wp_customize){
    $wp_customize->add_section('header_area', array(
        'title' => __('Header', 'aminulislam'),
        'description' => 'Change header content'
    ));
    // section setting
    $wp_customize->add_setting('header_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/logo/logo-dark.png'
    ));
    $wp_customize->add_setting('short_bio', array(
        'default' => 'Portfolio short description'
    ));
    // section control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label' => 'Upload logo',
        'section' => 'header_area',
        'setting' => 'header_logo'
    )));
    $wp_customize->add_control('short_bio', array(
        'label' => 'Short bio',
        'section' => 'header_area',
        'setting' => 'short_bio'
    ));
}

add_action('customize_register', 'custom_theme_customizer');
