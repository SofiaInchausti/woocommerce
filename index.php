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

get_header(); ?>
<div class="content-area">
    <main>
        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <?php
                    if (have_posts()):
                        while (have_posts()): the_post();
                    ?>
                            <article class="col">
                                <h2><?php the_title(); ?></h2>
                                <div><?php the_content(); ?></div>
                            </article>
                        <?php endwhile;
                    else:
                        ?>
                        <p>Nothing to display </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>