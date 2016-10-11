<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package hollandex
 */

if ( ! function_exists( 'hollandex_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function hollandex_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation row clearfix" role="navigation" id="posts-pagination">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'hollandex' ); ?></h1>


			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous col-md-2 col-md-offset-2"><?php next_posts_link( __( '<span class="glyphicon glyphicon-backward"></span>', 'hollandex' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next col-md-2 col-md-offset-4"><?php previous_posts_link( __( '<span class="glyphicon glyphicon-forward"></span>', 'hollandex' ) ); ?></div>
			<?php endif; ?>



	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'hollandex_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function hollandex_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation" id="posts-pagination">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'hollandex' ); ?></h1>

			<?php
				previous_post_link( '<div class="nav-previous col-md-2 col-md-offset-2">%link</div>', '<span class="glyphicon glyphicon-backward"></span>' );
				next_post_link(     '<div class="nav-next col-md-2 col-md-offset-4">%link</div>', '<span class="glyphicon glyphicon-forward"></span>' );
			?>

	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'hollandex_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function hollandex_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( '<i class="fa fa-calendar"></i> %s', 'post date', 'hollandex' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '<i class="fa fa-user"></i> %s', 'post author', 'hollandex' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="space"></span><span class="byline"> ' . $byline . '</span>';

}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function hollandex_is_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'hollandex_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'hollandex_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so hollandex_is_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so hollandex_is_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in hollandex_is_categorized_blog.
 */
function hollandex_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'hollandex_categories' );
}
add_action( 'edit_category', 'hollandex_category_transient_flusher' );
add_action( 'save_post',     'hollandex_category_transient_flusher' );