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


?>