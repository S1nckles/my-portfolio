<?php

// Enqueue styles and scripts

function my_custom_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/js/burger-menu.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');


// add nav menu
function register_my_menu() {
    register_nav_menu('header-menu', 'Menu');
}
add_action('init', 'register_my_menu');