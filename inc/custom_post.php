<?php
// Custom post type function

function custom_post(){
    register_post_type('feature',
        array(
            'labels' => array(
                'name' => ('Features'),
                'singular_name' => ('Feature'),
                'add_new' => ('Add new feature'),
                'add_new_item' => ('Add new feature'),
                'edit_item' => ('Edit feature'),
                'new_item' => ('New feature'),
                'view_item' => ('View feature'),
                'not_found' => ('You don\'t add any feature, please add.'),
            ),

            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'service'),
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
}

add_action('init', 'custom_post');