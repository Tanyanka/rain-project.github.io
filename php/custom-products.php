<?php
/*
    Plugin Name: Custom products posts
    Description: Simple implementation of a custom products posts into WordPress
    Author: Chagovskaya Tanya
    Version: 09.18
*/
/* Products*/
function custom_product_posts() {
    register_post_type( 'product-posts',
        array(
            'label'             => __('Продукция'),
            'public'            => true,
            'show_ui'           => true,
            'show_in_nav_menus' => false,
            'menu_position'     => 5,
            'hierarchical '     => true,
            'has_archive'       => true,
            'menu_icon'         => 'dashicons-cart',
            'rewrite'           => array(
                'slug'       => 'products',
                'with_front' => FALSE,
            ),
            'supports' => array(
                'title',
                'excerpt ',
                'custom-fields'
            )
        )
    );
}
add_action('init', 'custom_product_posts');
?>
