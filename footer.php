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
?>
<footer>
    <section class="footer-widgets">
        <div class="container">
            <div class="row">Footer Widgets</div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">
                    <p>
                        <?php get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved ');?>
                    </p>
                </div>
                <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                    <?php wp_nav_menu(
                        array('theme_location' => 'woocommerce_footer_menu')
                    ) ?>
                </nav>
            </div>
        </div>
    </section>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>