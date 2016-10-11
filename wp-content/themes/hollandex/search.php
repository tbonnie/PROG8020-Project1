<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package hollandex
 */

get_header(); ?>


	<div id="primary" class="content-area row">

		<div class="row">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'hollandex' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div> <!-- div.row -->

	<?php hollandex_paging_nav(); ?>


	</div><!-- #primary -->

<?php get_footer(); ?>
