<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Woocommerce Lab
 */
?>

<?php if( is_active_sidebar( 'woocommerce-lab-sidebar-1' ) ): ?>
	<aside class="col-lg-3 col-md-4 col-12 h-100">
		<?php dynamic_sidebar( 'woocommerce-lab-sidebar-1' ); ?>
	</aside>
<?php endif;