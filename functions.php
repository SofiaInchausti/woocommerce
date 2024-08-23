<?php

/**
 * The main template file
 * 
 * This is the most generic template file in Wordpress theme 
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matched a query.
 * E.g., it puts together the home page when o home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package Woocommerce 
 */

 function woocommerce_scripts(){
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . 'inc/bootstrap.min.js', array('jquery'), '4.3.4', true);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . 'inc/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('woocommerce', get_stylesheet_uri(), array(), filemtime(get_template_directory('/style.css')), 'all');
 }
 add_action('wp_enqueue_scripts', 'woocommerce_scripts');

 function woocommerce_config(){
    register_nav_menus(
        array(
            'woocommerce_main_menu' => "main_menu",
            'woocommerce_footer_menu' => 'woocommerce_footer_menu'

        )
        );
    
 }
 add_action('after_setup_theme', 'woocommerce_config', 0);