<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package hollandex
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container-fluid">

		<!-- The main row  -->
	<div class="row" id="main-row">


	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'hollandex' ); ?></a>

	<header id="div-logo-menu" class="site-header col-md-3" role="banner">

		<div class="div-logo-menu-container">

			<div class="row brand-row site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

					<div class="nav-brand">

						<img src="<?php header_image(); ?>" class="header-logo" alt="">

						<div class="header-text">

						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>

						</div><!-- End #header-text -->

					</div><!-- End .nav-brand -->

				</a>
			</div>

			<nav id="site-navigation" class="main-navigation row" role="navigation">

					<?php


						$menu_args = array(
							'theme_location' => 'primary',
							'menu'            => '',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => false,
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul class="nav nav-pills nav-stacked" role="tablist">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
							 );

						wp_nav_menu($menu_args);


					?>
			</nav><!-- #site-navigation -->


			<?php get_sidebar(); ?>


		</div> <!-- End of div-logo-menu-container -->

	</header><!-- #div-logo-menu -->

	<div id="content" class="site-content col-md-9">
