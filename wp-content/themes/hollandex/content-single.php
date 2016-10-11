<?php
/**
 * @package hollandex
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php hollandex_posted_on(); ?>
		</div><!-- .entry-meta -->


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hollandex' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->


		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ' ', 'hollandex' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'hollandex' ) );

			if ( ! hollandex_is_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '<div class="row tag-list"><h5>Tags</h5><div> %2$s </div></div>', 'hollandex' );
				} else {
					$meta_text = __( '', 'hollandex' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '<div class="row tag-list"><h5>Categories</h5><div> %1$s </div></div>  <div class="row tag-list"><h5>Tags</h5><div> %2$s </div></div>', 'hollandex' );
				} else {
					$meta_text = __( '<div class="row tag-list"><h5>Categories</h5><div> %1$s </div></div>', 'hollandex' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'hollandex' ), '<span class="edit-link">', '</span>' ); ?>


</article><!-- #post-## -->
