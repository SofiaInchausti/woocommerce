<?php
function woocommerce_wc_modify()
{
    /**
     * Template Overrides for WooCommerce pages
     *
     * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
     *
     * @package Woocommerce Lab
     */
    add_action('woocommerce_before_main_content', 'woocommerce_lab_open_container_row', 5);
    function woocommerce_lab_open_container_row()
    {
        echo '<div class="container shop-content"><div class="row">';
    }

    add_action('woocommerce_after_main_content', 'woocommerce_lab_close_container_row', 5);
    function woocommerce_lab_close_container_row()
    {
        echo '</div></div>';
    }

    /** 
     * Remove the main WC sidebar from its original position
     * We'll be including it somewhere else later on
     */

    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

    if (is_shop()) {

        add_action('woocommerce_before_main_content', 'woocommerce_lab_add_sidebar_tags', 6);
        function woocommerce_lab_add_sidebar_tags()
        {
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

        // Put the main WC sidebar back, but using other action hook and on a different position
        add_action('woocommerce_before_main_content', 'woocommerce_get_sidebar', 7);

        add_action('woocommerce_before_main_content', 'woocommerce_close_sidebar_tags', 8);
        function woocommerce_close_sidebar_tags()
        {
            echo '</div>';
        }

        // Modify HTML tags on a shop page. We also want Bootstrap-like markup here (.primary div)
        add_action('woocommerce_before_main_content', 'woocommerce_lab_add_shop_tags', 9);
        function woocommerce_lab_add_shop_tags()
        {
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        }

        add_action('woocommerce_after_main_content', 'woocommerce_lab_close_shop_tags', 4);
        function woocommerce_lab_close_shop_tags()
        {
            echo '</div>';
        }

        add_action('woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);
    }
}
add_action('wp', 'woocommerce_wc_modify');
