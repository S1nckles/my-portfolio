<?php add_theme_support('post-thumbnails'); ?>

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

// Add Project Post Type

function register_projects_post_type() {
    register_post_type('project', [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add new project',
            'add_new_item' => 'New project',
            'edit_item' => 'Edit project',
            'new_item' => 'New project',
            'view_item' => 'View project',
        ],
        'public' => true,
        'has_archive' => false,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'menu_icon' => 'dashicons-portfolio'
    ]);
}

add_action('init', 'register_projects_post_type');


// Add Experience Post Type
function register_experience_post_type() {
    register_post_type('experience', [
        'labels' => [
            'name' => 'Experiences',
            'singular_name' => 'Experience Entry',
            'add_new' => 'Add Experience',
            'add_new_item' => 'Add New Experience',
            'edit_item' => 'Edit Experience',
            'new_item' => 'New Experience',
            'view_item' => 'View Experience',
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => ['title', 'editor', 'custom-fields'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_experience_post_type');
