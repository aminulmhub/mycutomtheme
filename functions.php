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
    // main js
    wp_enqueue_script('main_js', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0.0", 'true');

}

add_action("wp_enqueue_scripts", 'theme_css_js');


// theme functions
function custom_theme_customizer($wp_customize){
    // HEADER //
    $wp_customize->add_section('header_area', array(
        'title' => __('Header Setting', 'textdomain'),
        'description' => 'Change header content'
    ));
    // logo
    $wp_customize->add_setting('header_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/logo/logo-dark.png'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
        'label' => 'Upload logo',
        'section' => 'header_area',
        'setting' => 'header_logo'
    )));
    // short bio
    $wp_customize->add_setting('short_bio', array(
        'default' => 'Portfolio short description'
    ));
    $wp_customize->add_control('short_bio', array(
        'label' => 'Short bio',
        'section' => 'header_area',
        'setting' => 'short_bio'
    ));
    // menu postion
    $wp_customize->add_setting('menu_position', array(
        'default' => 'right_menu'
    ));
    $wp_customize->add_control('menu_position', array(
        'label' => 'Change menu postion',
        'section' => 'header_area',
        'setting' => 'menu_position',
        'type' => 'radio',
        'choices' => array(
            'right_menu' => 'Right menu',
            'left_menu' => 'Left menu',
            // 'center_menu' => 'Center menu'
        ),
    ));


    // FOOTER //
    $wp_customize->add_section('footer_area', array(
        'title' => __('Footer Setting', 'textdomain'),
    ));
    // logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/logo/logo-vertical-dark.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label' => 'Change footer logo',
        'section' => 'footer_area',
        'setting' => 'footer_logo'
    )));
    // copywrite text
    $wp_customize->add_setting('copywrite_text', array(
        'default' => 'All rights reserved by'
    ));
    $wp_customize->add_control('copywrite_text', array(
        'label' => 'Change copywrite text',
        'section' => 'footer_area',
        'setting' => 'copywrite_text',
    ));
    // copywrite author
    $wp_customize->add_setting('copywrite_author', array(
        'default' => 'aminulfd'
    ));
    $wp_customize->add_control('copywrite_author', array(
        'label' => 'Change copywrite author',
        'section' => 'footer_area',
        'setting' => 'copywrite_author',
    ));
    // copywrite author url
    $wp_customize->add_setting('copywrite_author_url', array(
        'default' => 'https://aminulfd.netlify.app'
    ));
    $wp_customize->add_control('copywrite_author_url', array(
        'label' => 'Change copywrite author url',
        'section' => 'footer_area',
        'setting' => 'copywrite_author_url',
    ));


    // SOCIAL LINKS //
    $wp_customize->add_section('social_links', array(
        'title' => __('Social Settings', 'textdomain'),
        'description' => 'Add Social Links'
    ));
    // facebook
    $wp_customize->add_setting('facebook_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('facebook_link', array(
        'label' => 'Add Facebook Link',
        'section' => 'social_links',
        'setting' => 'facebook_link'
    ));
    // instagram
    $wp_customize->add_setting('instagram_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('instagram_link', array(
        'label' => 'Add Instagram Link',
        'section' => 'social_links',
        'setting' => 'instagram_link'
    ));
    // linkedin
    $wp_customize->add_setting('linkedin_link', array(
        'default' => '#'
    ));
    $wp_customize->add_control('linkedin_link', array(
        'label' => 'Add Linkedin Link',
        'section' => 'social_links',
        'setting' => 'linkedin_link'
    ));


    // BANNER //
    $wp_customize->add_section('banner_area', array(
        'title' => __('Banner Setting', 'textdomain'),
        'description' => 'Change Banner content'
    ));
    // portfolio user name
    $wp_customize->add_setting('portfolio_user', array(
        'default' => 'John Smith'
    ));
    $wp_customize->add_control('portfolio_user', array(
        'label' => 'Change portfolio user',
        'section' => 'banner_area',
        'setting' => 'portfolio_user'
    ));
    // portfolio user proffession
    $wp_customize->add_setting('portfolio_proffession', array(
        'default' => 'Frontend Developer'
    ));
    $wp_customize->add_control('portfolio_proffession', array(
        'label' => 'Change Proffession',
        'section' => 'banner_area',
        'setting' => 'portfolio_proffession'
    ));
    // portfolio user description
    $wp_customize->add_setting('portfolio_user_description', array(
        'default' => "I use animation as a third dimension by which to simplify experiences and kuiding thro each and every interaction. I'm not adding motion just to spruce things up, but doing it in ways that."
    ));
    $wp_customize->add_control('portfolio_user_description', array(
        'label' => 'Change portfolio user  description',
        'section' => 'banner_area',
        'setting' => 'portfolio_user_description'
    ));
    // banner image
    $wp_customize->add_setting('banner_img', array(
        'default' => get_bloginfo('template_directory') . '/assets/images/banner-01.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_img', array(
        'label' => 'Change banner image',
        'section' => 'banner_area',
        'setting' => 'banner_img'
    )));





}

add_action('customize_register', 'custom_theme_customizer');


// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'textdomain'));


// current year
function current_year() {
    return date('Y');
};
