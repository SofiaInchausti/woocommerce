<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Woocommerce Lab
 */

 get_header();
 ?>
 <div class="content-area">
	 <main>
		 <div class="container">
			 <div class="error-404">
				 <header>
					 <h1><?php esc_html_e( 'Page not found', 'woocommerce-lab' ); ?></h1>
					 <p><?php esc_html_e( 'Unfortunately, the page you tried to reach does not exist on this site', 'woocommerce-lab' ); ?></p>
				 </header>
				 <?php 
					 the_widget( 'WP_Widget_Recent_Posts', 
						 array(
							 'title'		=> esc_html__( 'Take a Look at Our Latest Posts', 'woocommerce-lab' ),
							 'number'	=> 3,
						 ) ); 
				 ?>
			 </div>
		 </div>
	 </main>
 </div>
 <?php get_footer(); ?>