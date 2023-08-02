<?php
// Widget register

function theme_widget_register(){
    register_sidebar(array(
        'name' => __('Main Widget', 'textdomain'),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'theme_widget_register');