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

 get_header();
 ?>
         <div class="content-area">
             <main>
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-9 col-md-8 col-12">
                         <?php 
                             // If there are any posts
                             if( have_posts() ):
 
                                 // Load posts loop
                                 while( have_posts() ): the_post();
                                     get_template_part( 'template-parts/content' );
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