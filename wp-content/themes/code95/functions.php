<?php

if (!function_exists('code95_setup')) :

    function code95_setup()
    {

        add_theme_support('title-tag');


        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => __('Primary', 'code95'),

            )
        );
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );
    }
endif;
add_action('after_setup_theme', 'code95_setup');
function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('news', 'Post Type General Name', 'twentytwenty'),
        'singular_name'       => _x('News', 'Post Type Singular Name', 'twentytwenty'),
        'menu_name'           => __('news', 'twentytwenty'),
        'parent_item_colon'   => __('Parent Movie', 'twentytwenty'),
        'all_items'           => __('All news', 'twentytwenty'),
        'view_item'           => __('View Movie', 'twentytwenty'),
        'add_new_item'        => __('Add New Movie', 'twentytwenty'),
        'add_new'             => __('Add New', 'twentytwenty'),
        'edit_item'           => __('Edit Movie', 'twentytwenty'),
        'update_item'         => __('Update Movie', 'twentytwenty'),
        'search_items'        => __('Search Movie', 'twentytwenty'),
        'not_found'           => __('Not Found', 'twentytwenty'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentytwenty'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('news'),
        'description'         => __('Movie news and reviews'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        //'taxonomies'          => array( 'Categories' ),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        //'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('news', $args);
}
add_action('init', 'custom_post_type');

if (!function_exists('create_news_taxonomies')) {

    function create_news_taxonomies()
    {
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x('News Category', 'taxonomy general name'),
            'singular_name'     => _x('Category', 'taxonomy singular name'),
            'search_items'      => __('Search Categories'),
            'all_items'         => __('All Categories'),
            'parent_item'       => __('Parent Category'),
            'parent_item_colon' => __('Parent Category:'),
            'edit_item'         => __('Edit Category'),
            'update_item'       => __('Update Category'),
            'add_new_item'      => __('Add New Category'),
            'new_item_name'     => __('New Category Name'),
            'menu_name'         => __('Category'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'Category'),
        );

        register_taxonomy('news_category', array('news'), $args);
    }
}
add_action('init', 'create_news_taxonomies');

function code95_scripts()
{


    wp_enqueue_style('code95-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('code95-owl-style', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('code95-owl-theme-style', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('code95-normlize-style', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('code95-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    wp_enqueue_script('code95-jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', [], '1.01', true);
    wp_enqueue_script('code95-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', [], '1.01', true);
    wp_enqueue_script('code95-owl-script', get_template_directory_uri() . '/js/owl.carousel.min.js', [], '1.01', true);
    wp_enqueue_script('code95-script', get_template_directory_uri() . '/js/main.js', [], '1.01', true);
}
add_action('wp_enqueue_scripts', 'code95_scripts');
