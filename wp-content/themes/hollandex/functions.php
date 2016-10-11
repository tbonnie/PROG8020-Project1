<?php
/**
 * hollandex functions and definitions
 *
 * @package hollandex
 */



if ( ! function_exists( 'hollandex_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hollandex_setup() {


	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;

	if ( ! isset( $content_width ) ) {
		$content_width = 640; /* pixels */
	}


	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'hollandex', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hollandex' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link','audio'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hollandex_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );


	//add theme support for title-tag
	add_theme_support( 'title-tag' );


	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css' ) );



}
endif; // hollandex_setup
add_action( 'after_setup_theme', 'hollandex_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/registerhollandexidebar
 */
function hollandex_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Panel Sidebar', 'hollandex' ),
		'id'            => 'sidebar-1',
		'description'   => __('The main sidebar that is below the main navigation area','hollandex'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s left-sidebar">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );



	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 1', 'hollandex' ),
		'id'            => 'sidebar-2',
		'description'   => __('The 1st sidebar for the footer section','hollandex'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 2', 'hollandex' ),
		'id'            => 'sidebar-3',
		'description'   => __('The 2nd sidebar for the footer section','hollandex'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Sidebar 3', 'hollandex' ),
		'id'            => 'sidebar-4',
		'description'   => __('The 3rd sidebar for the footer section','hollandex'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'hollandex_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hollandex_scripts() {

	wp_enqueue_style( 'hollandex-bootsrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' ); //bootsrap css
	wp_enqueue_style( 'hollandex-style', get_stylesheet_uri() );
	wp_enqueue_style( 'hollandex-font-awesome-css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' ); // font-awesome css

	wp_enqueue_script( 'hollandex-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hollandex-bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '3.0' ); //bootsrap
	wp_enqueue_script( 'hollandex-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true ); //custom js

	wp_enqueue_script( 'hollandex-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//Google web Fonts
	wp_enqueue_style( 'hollandex-roboto', '//fonts.googleapis.com/css?family=Roboto');
	wp_enqueue_style( 'hollandex-merriweather', '//fonts.googleapis.com/css?family=Merriweather');
	wp_enqueue_style( 'hollandex-play', '//fonts.googleapis.com/css?family=Play');
	wp_enqueue_style( 'hollandex-lobster', '//fonts.googleapis.com/css?family=Lobster');
	wp_enqueue_style( 'hollandex-arimo', '//fonts.googleapis.com/css?family=Arimo');
	wp_enqueue_style( 'hollandex-bitter', '//fonts.googleapis.com/css?family=Bitter');
	wp_enqueue_style( 'hollandex-oxygen', '//fonts.googleapis.com/css?family=Oxygen');
	wp_enqueue_style( 'hollandex-ubuntu', '//fonts.googleapis.com/css?family=Ubuntu');
	wp_enqueue_style( 'hollandex-Fjalla', '//fonts.googleapis.com/css?family=Fjalla+One');

}
add_action( 'wp_enqueue_scripts', 'hollandex_scripts' );


/**
 * Custom template for read more on the excerpt
 */
function hollandex_new_excerpt_more( $more ) {
	return '<div class="row more-details">
	<a class="read-more btn btn-primary" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'hollandex') . '</a>

	</div>';
}
add_filter( 'excerpt_more', 'hollandex_new_excerpt_more' );


/**
 * Get The Post Thumbnail
 */
function hollandex_get_featured_image()
{

	$link = get_the_permalink();

	echo "<a href='$link' class='thumbnail'>";


	// $post_format_array = array_search(get_post_format(),array('image','video','link','audio'));

	// if(is_single() && count($post_format_array) > 0){
	// 	hollandex_get_post_format_icon();
	// 	return;
	// }


			if( has_post_thumbnail() )
			{
				the_post_thumbnail();
			}
			else
			{

				hollandex_get_post_format_icon();

			}


}


function hollandex_get_post_format_icon(){

	$format = get_post_format();
	$icon = '';

	switch ($format) {
		case 'image':
			$icon = 'camera';
			break;

			case 'video':
			$icon = 'film';
			break;

			case 'link':
			$icon = 'link';
			break;

			case 'quote':
			$icon = 'quote-left';
			break;

			case 'audio':
			$icon = 'music';
			break;

		default:
			$icon = 'file-text';
			break;
	}

	$return_val = "<span class='span-format-icon'><i class='fa fa-$icon'></i></span>";


	echo $return_val;



}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Implement Custom Theme Options
 */
require get_template_directory() . '/inc/hollandex_theme_customizer.php';
// require get_template_directory() . '/inc/hollandex_theme_options.php';
