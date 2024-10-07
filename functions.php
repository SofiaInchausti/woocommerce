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

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
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
            'woocommerce_main_menu' => __( 'Woocommerce Main Menu', 'woocommerce-lab' ),
            'woocommerce_footer_menu' =>  __( 'Woocommerce Footer Menu', 'woocommerce-lab' ),'woocommerce_footer_menu'

        )
    );
	$textdomain = 'woocommerce-lab';
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/' );
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );
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

	add_theme_support('automatic-feed-links');

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
    add_theme_support( 'title-tag' );		
}
add_action('after_setup_theme', 'woocommerce_lab_config', 0);

/**
 * If WooCommerce is active, we want to enqueue a file
 * with a couple of template overrides
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/wc-modifications.php';
}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_lab_woocommerce_header_add_to_cart_fragment' );

function woocommerce_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.items'] = ob_get_clean();
	return $fragments;
}


/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'woocommerce_lab_sidebars' );
function woocommerce_lab_sidebars(){
	register_sidebar( array(
		'name'			=> __( 'Woocommerce Lab Main Sidebar', 'woocommerce-lab' ),
		'id'			=> 'woocommerce-lab-sidebar-1',
		'description'	=> __( 'Drag and drop your widgets here', 'woocommerce-lab' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> __( 'Sidebar Shop', 'woocommerce-lab' ),
		'id'			=> 'woocommerce-lab-sidebar-shop',
		'description'	=> __( 'Drag and drop your WooCommerce widgets here', 'woocommerce-lab' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );	
	register_sidebar( array(
		'name'			=> __( 'Footer Sidebar 1', 'woocommerce-lab' ),
		'id'			=> 'woocommerce-lab-sidebar-footer1',
		'description'	=> __( 'Drag and drop your widgets here', 'woocommerce-lab' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> __( 'Footer Sidebar 2', 'woocommerce-lab' ),
		'id'			=> 'woocommerce-lab-sidebar-footer2',
		'description'	=> __( 'Drag and drop your widgets here', 'woocommerce-lab' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> __( 'Footer Sidebar 3', 'woocommerce-lab' ),
		'id'			=> 'woocommerce-lab-sidebar-footer3',
		'description'	=> __( 'Drag and drop your widgets here', 'woocommerce-lab' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );			
}