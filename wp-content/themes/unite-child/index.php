<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 10/28/2018
 * Time: 10:55 PM
 */

get_header(); ?>
    <div id="primary" class="content-area col-sm-12 col-md-8">
        <main id="main" class="site-main" role="main">
            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    /*Hook default content to content-child , because the content child ready to custom*/
                    get_template_part( 'content-child', get_post_format() );
                    ?>
                <?php endwhile; ?>
                <?php unite_paging_nav(); ?>
            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>