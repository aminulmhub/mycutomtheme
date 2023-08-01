<?php
/* 
* Default Theme Functions
*/

// theme title
add_theme_support('title-tag');

// post-thumbnails
add_theme_support('post-thumbnails', array('page', 'post'));

// page navigation
function page_navigation(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(99999999, '%#%', get_pagenum_link(99999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1) echo '
        <div class="page_navigation">';
        if($total == 1 && $max > 1) $pages = '<p class= "pages"> Page ' . $current . '<span> of </span>' . $max . '</p>';
        echo $pages . paginate_links($args);
    if($max > 1) echo ' 
        </div>';
    
};