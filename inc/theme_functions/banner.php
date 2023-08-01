<?php

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