<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package BoldGrid
 */

get_header(); ?>

<div class="row background-primary">
    <div class="container">
        <div class="row background-shadow">
            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php get_template_part( 'template-parts/content', 'page' ); ?>
                                <?php
                                // If comments are open or we have at least one comment, load up the comment template
                                if ( ( comments_open(  ) && '0' != get_comments_number(  ) ) || ( current_user_can( 'moderate_comments' ) ) ) : ?>
                                    <div id="boldgrid-comments" class="container">
                                        <?php comments_template(  ); ?>
                                    </div><!-- #boldgrid-comments -->
                                <?php endif; ?>
                            <?php endwhile; // end of the loop. ?>
                        
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .row -->

<?php get_footer(); ?>
