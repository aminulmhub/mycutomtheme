<?php

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