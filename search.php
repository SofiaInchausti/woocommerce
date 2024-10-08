<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Woocommerce Lab
 */

 get_header();
 ?>
		 <div class="content-area">
			 <main>
				 <div class="container">
					 <div class="row">
 
						 <h1><?php _e( 'Search results for', 'woocommerce-lab' ); ?>: <?php echo get_search_query(); ?></h1>
 
						 <?php 
 
						 get_search_form();
 
							 // If there are any posts
							 if( have_posts() ):
 
								 // Load posts loop
								 while( have_posts() ): the_post();
									 get_template_part( 'template-parts/content', 'search' );
								 endwhile;
 
								 // We're using numeric page navigation here.
								 the_posts_pagination( array(
									 'prev_text'		=> __( 'Previous', 'woocommerce-lab' ),
									 'next_text'		=> __( 'Next', 'woocommerce-lab' ),
								 ));
								 
							 else:
						 ?>
							 <p><?php _e( 'There are no results for your query.', 'woocommerce-lab' ); ?></p>
						 <?php endif; ?>
					 </div>
				 </div>
			 </main>
		 </div>
 <?php get_footer(); ?>