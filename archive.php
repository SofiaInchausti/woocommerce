<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Woocommerce Lab
 */

 get_header();
 ?>
		 <div class="content-area">
			 <main>
				 <div class="container">
					 <div class="row">
						 <div class="col-lg-9 col-md-8 col-12">
						 <?php 
 
							 the_archive_title( '<h1 class="article-title">', '</h1>' );
 
							 // If there are any posts
							 if( have_posts() ):
 
								 // Load posts loop
								 while( have_posts() ): the_post();
									 get_template_part( 'template-parts/content', 'archive' );
								 endwhile;
 
								 // We're using numeric page navigation here.
								 the_posts_pagination( array(
									 'prev_text'		=> __( 'Previous', 'woocommerce-lab' ),
									 'next_text'		=> __( 'Next', 'woocommerce-lab' ),
								 ));
								 
							 else:
						 ?>
							 <p><?php _e( 'Nothing to display.', 'woocommerce-lab' ); ?></p>
						 <?php endif; ?>
						 </div>
						 <?php get_sidebar(); ?>
					 </div>
				 </div>
			 </main>
		 </div>
 <?php get_footer(); ?>