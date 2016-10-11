<?php
/**
 * The Template for displaying all single posts.
 *
 * @package hollandex
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div class="row">

		<main id="inner-content-row" class="site-main row" role="main">

		<div class="jumbotron">
			<?php hollandex_get_featured_image(); ?>
			</a><!-- end of anchor tag from featured-image -->
		</div>

			<div class="post-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>



			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		<div><!-- End "post-content" -->

		</main><!-- #main -->

		</div><!-- .row -->

		<?php hollandex_post_nav(); ?>

	</div><!-- #primary -->




<?php get_footer(); ?>
