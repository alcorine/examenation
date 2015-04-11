<?php

    add_theme_support('post-thumbnails');
/**
 *  Style and script
**/

function add_style_script () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/style/bootstrap.min.css' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/style/owl.carousel.css' );
    wp_enqueue_style('owl.transition', get_template_directory_uri() . '/style/owl.transition.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/stylesheet.css');
    echo "<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>";
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('media', get_template_directory_uri() . '/style/media.css');
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');


}

    add_action( 'wp_enqueue_scripts' , 'add_style_script' );

/**
 * Register menu
**/
    register_nav_menus(array(
        'main_menu' => 'Main Menu'
    ));


/**
 * Post type for slider
**/
function slider_post_type() {

    $labels = array(
        'name'                => _x( 'slider', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Slider Images', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Slider', 'text_domain' ),
        'name_admin_bar'      => __( 'Post Type', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
        'all_items'           => __( 'All Images', 'text_domain' ),
        'add_new_item'        => __( 'Add New Images', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'new_item'            => __( 'New Images', 'text_domain' ),
        'edit_item'           => __( 'Edit Image', 'text_domain' ),
        'update_item'         => __( 'Update Image', 'text_domain' ),
        'view_item'           => __( 'View Image', 'text_domain' ),
        'search_items'        => __( 'Search Image', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'slider', 'text_domain' ),
        'description'         => __( 'Slider', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail', 'editor' ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 8,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_post_type');


// Register Custom Post Type
function services_post_type() {

    $labels = array(
        'name'                => _x( 'Services', 'Services General Name', 'text_domain' ),
        'singular_name'       => _x( 'Service Post', 'Service Post Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Services', 'text_domain' ),
        'all_items'           => __( 'All Service Items', 'text_domain' ),
        'add_new_item'        => __( 'Add New Item', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'new_item'            => __( 'New Item', 'text_domain' ),
        'edit_item'           => __( 'Edit Item', 'text_domain' ),
        'update_item'         => __( 'Update Item', 'text_domain' ),
        'view_item'           => __( 'View Item', 'text_domain' ),
        'search_items'        => __( 'Search Item', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'services', 'text_domain' ),
        'description'         => __( '1st screen', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array('thumbnail', 'editor', 'title', 'custom-fields' ),
        'taxonomies'          => array('category', 'post_tag'  ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'services', $args );

}

// Hook into the 'init' action
add_action( 'init', 'services_post_type');