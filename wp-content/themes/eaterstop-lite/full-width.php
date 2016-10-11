<?php
/**
 * Template Name: Full Width
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Eaterstop Lite
 */
get_header(); ?>
<div class="container">
     <div class="page_content">
			<?php if( have_posts() ) :
            while( have_posts() ) : the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php
                    //If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                    ?>
            </div><!-- entry-content -->
            <?php endwhile; else : endif; ?>

    </div><!-- site-aligner -->
</div><!-- content -->

<?php get_footer(); ?>
