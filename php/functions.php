<?php
/**
 * styledstore functions and definitions.
 *
 *
 * @package Tanya
 */

if ( ! function_exists( 'rain_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
    function rain_setup() {

        // add scripts and stylesheets
        //
        function enqueue_styles() {
            wp_enqueue_style( 'style', get_stylesheet_uri());
            wp_register_script( 'main-script', get_template_directory_uri() . '/dist/js/script.js', array('jquery'), '02.07.18', true );
            wp_enqueue_script( 'main-script' );

        }
        add_action('wp_enqueue_scripts', 'enqueue_styles');


        // Register new thumb
        add_image_size('product', 405, 610, true);
        add_image_size('product-content-img', 335, 483, true);
        add_image_size('product-min', 89, 134, true);
        add_image_size('small', 20, 20, true);

        //
        //delete wordpress autoformatting
        //

        remove_filter( 'the_content', 'wpautop' ); // remove autoformatting in complete posts
        remove_filter( 'the_excerpt', 'wpautop' ); // remove autoformatting in short posts
        remove_filter('comment_text', 'wpautop'); // remove autoformatting in reviews

        //
        // Remove emoji
        //
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_print_styles', 'print_emoji_styles');

        // Remove dns-prefetch
        // Windows Live Writer
        // Remove edite from www
        // remove shotlink
        //
        remove_action( 'wp_head', 'wp_resource_hints', 2);
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'rsd_link' );
        remove_action('wp_head', 'wp_shortlink_wp_head');
        //
        // remove jQuery migrate
        //

        function isa_remove_jquery_migrate( &$scripts) {
            if(!is_admin()) {
                $scripts->remove( 'jquery');
                $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
            }
        }
        add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

        //
        // Remove default menu items
        //

        function remove_default_menus() {
            remove_menu_page( 'edit.php' );                   //Posts
            remove_menu_page( 'edit-comments.php' );          //Comments
            remove_menu_page( 'tools.php' );                  //Tools
        }
        add_action('admin_menu','remove_default_menus');

        //
        // Hide version wordpress
        //

        function true_remove_wp_version_wp_head_feed() {
            return '';
        }

        add_filter('the_generator', 'true_remove_wp_version_wp_head_feed');

        //
        // Disablel admin bar on frontend
        //

        show_admin_bar(false);


        //
        //	remove default editor from pages end posts
        //

        add_action( 'init', 'my_remove_post_type_support', 10 );
        function my_remove_post_type_support() {
            remove_post_type_support( 'page', 'editor' );
        }


    }

endif; // rain_setup



//
// add menu support
//

add_action( 'after_setup_theme', 'rain_setup' );

add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'main-menu' => 'Maine heading menu',
        'footer-nav' => 'Menu in footer'
    ) );
});

//
// remove all scripts from head, body. Add scripts to footer
//

function footer_enqueue_scripts(){
    remove_action('wp_head','wp_print_scripts');
    remove_action('wp_head','wp_print_head_scripts',9);
    remove_action('wp_head','wp_enqueue_scripts',1);
    add_action('wp_footer','wp_print_scripts',5);
    add_action('wp_footer','wp_enqueue_scripts',5);
    add_action('wp_footer','wp_print_head_scripts',5);
}
add_action('after_setup_theme','footer_enqueue_scripts');

//
// deregister all styles link and adding it to style.css
//

function remove_styles() {
    wp_deregister_style('contact-form-7');
    wp_deregister_style('wordfenceAJAXcss');
    wp_deregister_style('style');
}

//
// remove default script oembed
//
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
//
// add options item to wp menu
//

add_action ('wp_enqueue_scripts','remove_styles',100);
if( function_exists('acf_add_options_page') ) {

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Настройки темы',
        'menu_title'	=> 'Theme settings',
        'menu_slug' 	=> 'well-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Buttons',
        'menu_title' 	=> 'Text buttons',
        'parent_slug' 	=> $parent['menu_slug'],
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Контактная информация',
        'menu_title' 	=> 'Contact info',
        'parent_slug' 	=> $parent['menu_slug'],
    ));


}
?>