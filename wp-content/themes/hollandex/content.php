<?php
/**
 * @package hollandex
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



	<?php hollandex_get_featured_image(); ?>
	<!-- opening <a> tag is from hollandex_get_featured_image() function -->

		<div class="post-things"><div class="row post-title-row">



			<?php the_title('<div class="col-md-12">', '</div>' ); ?>

		</div></div>

	</a>




	<!-- closing <a> tag from hollandex_get_featured_image() function -->

	<div class="row post-thing-excerpt">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php hollandex_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>




	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hollandex' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'hollandex' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '<i class="fa fa-tag"></i> %1$s', 'hollandex' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'hollandex' ), __( '1 Comment', 'hollandex' ), __( '% Comments', 'hollandex' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( '<br />Edit', 'hollandex' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</div><!-- end of post-thing-excerpt -->

</article><!-- #post-## -->
