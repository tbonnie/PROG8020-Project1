<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package hollandex
 */
?>



	<footer id="colophon" class="site-footer row" role="contentinfo">

		<?php get_sidebar("footer"); ?>


		<div class="row">
			<div class="col-md-12">
				<hr id="footer-divider"></hr>
			</div>
		</div>

		<div class="site-info">
			<?php hollandex_get_footer_signature(); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


	</div><!-- #content -->

	</div><!-- #main-row -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
