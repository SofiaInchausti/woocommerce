<?php

/**
 * Woocommerce lab function and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Woocommerce Lab
 */

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
* Customizer additions.
*/
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts and styles.
 */
function woocommerce_lab_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '5.3.3', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_enqueue_style('woocommerce', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');

     	// Flexslider Javascript and CSS files
	wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );
}
add_action('wp_enqueue_scripts', 'woocommerce_lab_scripts');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function woocommerce_lab_config()
{
    register_nav_menus(
        array(
            'woocommerce_main_menu' => "woocommerce_main_menu",
            'woocommerce_footer_menu' => 'woocommerce_footer_menu'

        )
    );
    // This theme is WooCommerce compatible, so we're adding support to WooCommerce
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 1
        )
    ));
    add_theme_support('wc-prodcut-gallery-zoom');
    add_theme_support('wc-prodcut-gallery-lightbox');
    add_theme_support('wc-prodcut-gallery-slider');

    add_theme_support( 'custom-logo', array (
        'height' => 85,
        'width'  => 160,
        'flex-height' => true,
        'flex-width' => true,
    ));

    add_image_size('woocommerce-lab-slicer', 1320, 800, array(
        'center, center'
    ));

    if (! isset($content_width)) {
        $content_width = 600;
    }
}
add_action('after_setup_theme', 'woocommerce_lab_config', 0);

/**
 * If WooCommerce is active, we want to enqueue a file
 * with a couple of template overrides
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}
