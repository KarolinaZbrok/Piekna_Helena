
<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function cl_scripts(){

    //Add scripts
    wp_enqueue_script("bootstrap1", get_stylesheet_directory_uri() . '/js/bootstrap.min.js', ['jquery'], null, true);


    wp_enqueue_script("main", get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], null, true);



    //Add bootstrap styles
    wp_enqueue_style('bootstrap2', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

    //Add styles
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/main.css', null, null, 'all');


}

add_action('wp_enqueue_scripts', 'cl_scripts');

