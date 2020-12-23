<?php

function carollina_custom_posttype_gallery() {
    $labels = array(
        'name' => _x('Galleries', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Gallery', 'Post type singular name', 'textdomain'),
        'menu_name' => _x('Galleries', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Gallery', 'Add New on Toolbar', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Gallery', 'textdomain'),
        'new_item' => __('New Gallery', 'textdomain'),
        'edit_item' => __('Edit Gallery', 'textdomain'),
        'view_item' => __('View Gallery', 'textdomain'),
        'all_items' => __('All Galleries', 'textdomain'),
        'search_items' => __('Search Galleries', 'textdomain'),
        'parent_item_colon' => __('Parent Galleries:', 'textdomain'),
        'not_found' => __('No galleries found.', 'textdomain'),
        'not_found_in_trash' => __('No galleries found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'gallery'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('gallery', $args);
}

add_action('init', 'carollina_custom_posttype_gallery');

function carollina_custom_posttype_deals() {
    $labels = array(
        'name' => _x('Deals', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Deal', 'Post type singular name', 'textdomain'),
        'menu_name' => _x('Deals', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Deal', 'Add New on Toolbar', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Deal', 'textdomain'),
        'new_item' => __('New Deal', 'textdomain'),
        'edit_item' => __('Edit Deal', 'textdomain'),
        'view_item' => __('View Deal', 'textdomain'),
        'all_items' => __('All Deals', 'textdomain'),
        'search_items' => __('Search Deals', 'textdomain'),
        'parent_item_colon' => __('Parent Deals:', 'textdomain'),
        'not_found' => __('No deals found.', 'textdomain'),
        'not_found_in_trash' => __('No deals found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'deals'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('deals', $args);
}

add_action('init', 'carollina_custom_posttype_deals');

function carollina_custom_posttype_testimonials() {
    $labels = array(
        'name' => _x('Testimonials', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Testimonial', 'Post type singular name', 'textdomain'),
        'menu_name' => _x('Testimonials', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Testimonial', 'textdomain'),
        'new_item' => __('New Testimonial', 'textdomain'),
        'edit_item' => __('Edit Testimonial', 'textdomain'),
        'view_item' => __('View Testimonial', 'textdomain'),
        'all_items' => __('All Testimonials', 'textdomain'),
        'search_items' => __('Search Testimonials', 'textdomain'),
        'parent_item_colon' => __('Parent Testimonials:', 'textdomain'),
        'not_found' => __('No testimonials found.', 'textdomain'),
        'not_found_in_trash' => __('No testimonials found in Trash.', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('testimonials', $args);
}

add_action('init', 'carollina_custom_posttype_testimonials');