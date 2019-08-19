<?php
if ( ! function_exists( 'gps_theme_setup' ) ) :

function gps_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'gps_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'gps_theme' ),
        'social'  => __( 'Social Links Menu', 'gps_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // gps_theme_setup

add_action( 'after_setup_theme', 'gps_theme_setup' );


if ( ! function_exists( 'gps_theme_init' ) ) :

function gps_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // gps_theme_setup

add_action( 'init', 'gps_theme_init' );


if ( ! function_exists( 'gps_theme_custom_image_sizes_names' ) ) :

function gps_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'gps_theme_custom_image_sizes_names' );
endif;// gps_theme_custom_image_sizes_names



if ( ! function_exists( 'gps_theme_widgets_init' ) ) :

function gps_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'gps_theme_widgets_init' );
endif;// gps_theme_widgets_init



if ( ! function_exists( 'gps_theme_customize_register' ) ) :

function gps_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'gps_theme_customize_register' );
endif;// gps_theme_customize_register


if ( ! function_exists( 'gps_theme_enqueue_scripts' ) ) :
    function gps_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'all' );
    wp_enqueue_script( 'all', 'https://use.fontawesome.com/releases/v5.3.1/js/all.js', false, null, false);

    wp_deregister_script( 'script' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/script.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'gps_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>