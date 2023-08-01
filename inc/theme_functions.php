<?php

function custom_theme_customizer($wp_customize){
    // header //
    include_once('theme_functions/header_fun.php');

    // footer //
    include_once('theme_functions/footer_func.php');

    // social links //
    include_once('theme_functions/social_links.php');

    // banner //
    include_once('theme_functions/banner.php');


}

add_action('customize_register', 'custom_theme_customizer');