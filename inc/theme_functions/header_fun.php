<?php

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