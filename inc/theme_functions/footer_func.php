<?php

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