<?php

/**
 * загружаемые стиля и скрипты
**/
function load_style_script() {
        wp_enqueue_style('style', get_template_directory_uri().'/style.css');

}

/**
* загружаем стиля и скрипты
**/
    add_action("wp_enqueue_scripts", 'load_style_script');

/**
* добавляем шрифты
**/

function wpb_add_google_fonts() {
    echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" media="screen">';
}

add_action( 'genesis_meta', 'wpb_add_google_fonts', 5);


/**
* поддержка миниатюр
**/
add_theme_support('post-thumbnails');


/**
*   Menu
**/

register_nav_menu('menu', 'Меню');


/**
* sidebar
 **/

register_sidebar(array(
    'name' => 'Виджеты сайдбара',
    'id' => 'sidebar',
    'description' => 'Размещение виджетов сайдбара',
    'before_widget' => '<article class="sidebar-block">',
    'after_widget' => '</article>'
));


?>