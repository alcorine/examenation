<?php

add_theme_support('post-thumbnails');
/**
 *  Style and script
 **/

function add_style_script () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/style/bootstrap.min.css' );
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts/stylesheet.css');
    echo "<link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>";
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js');
    wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');


}

add_action( 'wp_enqueue_scripts' , 'add_style_script' );

/**
 * Register menu
 **/
register_nav_menus(array(
    'main_menu' => 'Главное меню'
));



register_sidebar(array(
	'name' => 'Виджеты сайдбара',
	'id' => 'sidebar',
	'description' => 'Размещение виджетов сайдбара',
	'before_widget' => '<article class="sidebar-block">',
	'after_widget' => '</article>'
));

?>