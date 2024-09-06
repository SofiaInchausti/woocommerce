<?php
/**
 * The template for the sidebar containing the shop widget area
 *
 * @package Woocommerce Lab
 */
?>

<?php if( is_active_sidebar( 'woocommerce-lab-sidebar-shop' ) ): ?>
	<?php dynamic_sidebar( 'woocommerce-lab-sidebar-shop' ); ?>
<?php endif;