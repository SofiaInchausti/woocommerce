<?php

/**
 * Template for displaying search forms in Woocommerce Lab
 *
 * @package Woocommerce Lab
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'woocommerce-lab' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'woocommerce-lab' ); ?></span></button>
	<?php 
	// If WooCommerce is activated, we'll be searching among products, not posts
	if( class_exists( 'WooCommerce' )): ?>
		<input type="hidden" value="product" name="post_type" id="post_type">
	<?php endif; ?>
</form>