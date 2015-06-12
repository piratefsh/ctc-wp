<?php
    // Setup
function ctc_setup(){
        // Add menus
    register_nav_menus(array(
        'primary' => 'Primary',
        ));
}
add_action( 'after_setup_theme', 'ctc_setup' );

    // Custom Post Types
function create_post_type($type, $name, $singular_name, $public, $archive, $slug){
    register_post_type($type,
        array(
            'labels' => array(
                'name'          => __($name),
                'singular_name' => __($singular_name),
                ),
            'taxonomies' => array('category'),
            'public'      => $public,
            'has_archive' => $archive,
            'hierarchical' => true,
            'menu' => null,
            'supports' => array('title', 'editor'),
            'rewrite' => array(
                'slug' => $slug,
                'with_front' => false
                ),
            'query_var' => true
            ));
    flush_rewrite_rules();
}

function create_post_types_all(){
    create_post_type('event', 'Events', 'event', true, true, 'event');
}

add_action('init', 'create_post_types_all');

    // Generic get posts of type function
function get_posts_of_type($type, $num, $category = ""){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => $type, 
        'posts_per_page' => $num, 
        'order' => 'DSC', 
        'paged' => $paged, 
        'category_name' => $category);

    $loop = new WP_Query($args);
    return $loop;
}
    // Generic get posts of type function
function get_posts_of_type_query($type, $num, $category = ""){
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => $type, 
        'posts_per_page' => $num, 
        'order' => 'DSC', 
        'paged' => $paged, 
        'category_name' => $category);
    $loop = new WP_Query($args);
    query_posts($args);
}

function get_listing_pagination(){
    $args = array(
        'prev_text'    => __('&lt;'),
        'next_text'    => __('&gt;'));
    echo paginate_links($args);
}

    // Shortcodes
function events_featured_sc($attr) {
    ob_start();
    include('partials/events/featured.php');
    $partial = ob_get_contents();
    ob_end_clean();
    return $partial;
}
function testimonials_sc($attr) {
    ob_start();
    include('partials/testimonials.php');
    $partial = ob_get_contents();
    ob_end_clean();
    return $partial;
}

function register_shortcodes() {
    add_shortcode('events-featured', 'events_featured_sc');
    add_shortcode('testimonials', 'testimonials_sc');
}

add_action('init', 'register_shortcodes');

// Simplefields
function get_sf_field($prefix, $field){
    $next = simple_fields_fieldgroup($prefix);
    if($next){
        $value = $next[$prefix . '_' . $field];
        if($field == 'image'){
            return $value['url'];
        }
        else if ($field == 'link'){
            $url = $value? $value['permalink'] : '';
            return $url;
        }
        else{
            return $value;
        }
    }
}

function has_event_sessions(){
    return simple_fields_fieldgroup('event_session');
}

function get_event_sessions(){
    $values = simple_fields_fieldgroup('event_session');
    return $values;
}

function get_testimonials(){
    $values = simple_fields_fieldgroup('testimonial');
    return $values;
}


?>