<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package hollandex
 */


get_header(); ?>

	<div id="primary" class="content-area row page-row">

		<div class="row">

		<main id="inner-content-row" class="site-main row" role="main">



		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>



			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>



		</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #primary -->

<?php get_footer(); ?>
