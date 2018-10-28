<?php
/**
 * Created by PhpStorm.
 * User: Kesara
 * Date: 10/28/2018
 * Time: 10:49 PM
 */

get_header();
?>
<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
    <main id="main" class="site-main" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content-child', 'single' ); ?>
            <?php unite_post_nav(); ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() ) :
                comments_template();
            endif;
            ?>
        <?php endwhile; // end of the loop. ?>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>