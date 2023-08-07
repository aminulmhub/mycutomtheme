<?php
// Custom post type function

function custom_post(){
    // feature
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

    // portfolio
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => ('Portfolios'),
                'singular_name' => ('Portfolio'),
                'add_new' => ('Add new portfolio'),
                'add_new_item' => ('Add new portfolio'),
                'edit_item' => ('Edit portfolio'),
                'new_item' => ('New portfolio'),
                'view_item' => ('View portfolio'),
                'not_found' => ('You don\'t add any portfolio, please add.'),
            ),

            'menu_icon' => 'dashicons-portfolio',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 6,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'taxonomies' => array ('category'),
            'rewrite' => array('slag' => 'portfolio'),
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
}

add_action('init', 'custom_post');

// query post
function query_post_type($query){
    if(is_category()){
        $post_type = get_query_var('post_type');
        if($post_type){
            $post_type = $post_type;
        } else{
            $post_type = array('post', 'portfolio');
            $query -> set('post_type', $post_type);
            
            return $query;
        }
    }
}

add_filter('pre_get_posts', 'query_post_type');