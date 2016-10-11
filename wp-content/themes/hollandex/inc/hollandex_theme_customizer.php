<?php


add_action("customize_register","hollandex_theme_customize_register");

function hollandex_theme_customize_register($wp_customize){

	/*
*
* Default Google Fonts specifically picked to suit the design
*
*/
$google_fonts = array(
	"Roboto" => "Roboto",
	 "Merriweather" => "Merriweather",
	 "Play" => "Play",
	"Ubuntu"=>"Ubuntu",
	"Lobster"=>"Lobster",
	"Arimo"=>"Arimo",
	"Bitter"=>"Bitter",
	"Oxygen"=>"Oxygen",
	"Fjalla One" => "Fjalla One"
);


/*
*
* Default Theme Colors
*
*/
$default_options = array(
	 "hollandex_color_1" => "#79003D",
	 "hollandex_color_2" => "#D04D14",
	 "hollandex_color_3" => "#F7F7F7",
	 "hollandex_color_4" => "#2E003F",
	 "hollandex_color_5" => "#E7E7E7",
	 "hollandex_color_6" => "#3D3D3D",
	 "hollandex_color_7" => "#F9EFEF",
	 "hollandex_color_8" => "#000137",
	 "hollandex_color_9" => "#F89301",
);




//footer settings
	$wp_customize->add_section('footer_text',array(
		'title' => __('Footer Text', 'hollandex'),
		'description' => __('Add You custom Footer Text Here', 'hollandex'),
		'capability' => 'edit_theme_options'
		)
		);

	$wp_customize->add_setting('hollandex_footer_text',array(
		'default' => __('Powered By Wordpress', 'hollandex'),
		'sanitize_callback' => 'wp_kses_post'
		));

	$wp_customize->add_control('hollandex_footer_text',array(
		'type' => 'text',
		'section' => 'footer_text',
		'label' => __('Enter Footer Text', 'hollandex')
		));




//font settings
	$wp_customize->add_section('fonts',array(
		'title' => __('Fonts', 'hollandex'),
		'description' => __('Select The Fonts To Use', 'hollandex'),
		'capability' => 'edit_theme_options'
		)
		);

	$wp_customize->add_setting('hollandex_body_font',array(
		'default' => '1',
		'sanitize_callback' => 'sanitize_text_field'
		));

	$wp_customize->add_control('hollandex_body_font',array(
		'type' => 'select',
		'section' => 'fonts',
		'label' => __('Select Font To Use', 'hollandex'),
		'choices' => $google_fonts
		));

	$wp_customize->add_setting('hollandex_menu_font',array(
		'default' => '1',
		'sanitize_callback' => 'sanitize_text_field'
		));

	$wp_customize->add_control('hollandex_menu_font',array(
		'type' => 'select',
		'section' => 'fonts',
		'label' => __('Select Menu Font', 'hollandex'),
		'choices' => $google_fonts
		));




//Color settings


	$wp_customize->add_setting('hollandex_color_1',array(
		'default' => $default_options['hollandex_color_1'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_1',array(
			'label' => __('Theme Color One','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_1'

		)));

	$wp_customize->add_setting('hollandex_color_2',array(
		'default' => $default_options['hollandex_color_2'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_2',array(
			'label' => __('Theme Color Two','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_2'

		)));

	$wp_customize->add_setting('hollandex_color_3',array(
		'default' => $default_options['hollandex_color_3'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_3',array(
			'label' => __('Theme Color 3','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_3'

		)));

	$wp_customize->add_setting('hollandex_color_4',array(
		'default' => $default_options['hollandex_color_4'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_4',array(
			'label' => __('Theme Color 4','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_4'

		)));

	$wp_customize->add_setting('hollandex_color_5',array(
		'default' => $default_options['hollandex_color_5'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_5',array(
			'label' => __('Theme Color 5','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_5'

		)));

	$wp_customize->add_setting('hollandex_color_6',array(
		'default' => $default_options['hollandex_color_6'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_6',array(
			'label' => __('Theme Color 6','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_6'

		)));

	$wp_customize->add_setting('hollandex_color_7',array(
		'default' => $default_options['hollandex_color_7'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_7',array(
			'label' => __('Theme Color 7','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_7'

		)));

	$wp_customize->add_setting('hollandex_color_8',array(
		'default' => $default_options['hollandex_color_8'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_8',array(
			'label' => __('Theme Color 8','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_8'

		)));

	$wp_customize->add_setting('hollandex_color_9',array(
		'default' => $default_options['hollandex_color_9'],
		'sanitize_callback' => 'sanitize_hex_color'
		));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'hollandex_color_9',array(
			'label' => __('Theme Color 9','hollandex'),
			'section' => 'colors',
			'settings' => 'hollandex_color_9'

		)));

}


/*
*
* retrieve the custom css from the theme options and output it for use in the site
*
*/
function hollandex_custom_style_head()
{

global $google_fonts;
global $default_options;

		echo "<style type='text/css'>";


			echo "

					html , body ,h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6
					 {
							font-family: '".  sanitize_text_field(get_theme_mod('hollandex_body_font','Roboto')) ."' , sans-serif ;
						}


			";


			echo "

					nav#site-navigation
					 {
							font-family: '".  sanitize_text_field(get_theme_mod('hollandex_menu_font','Roboto')) ."' , sans-serif ;
						}


			";



			$color_1 = esc_html(get_theme_mod('hollandex_color_1',$default_options['hollandex_color_1']));

			echo "

				a {
					color: ". $color_1  .";
				}

				.tag-list div a{
					color: #fff;
					background-color: ". $color_1 .";
				}

				.tag-list div a:hover{
					color: #fff;
					background-color: ". $color_1  .";
				}

				.comments-row .comment-respond input[type='submit']{
					color: #fff;
					background-color: ". $color_1  .";
				}

				.tagcloud a:hover{
					color: #fff;
					background-color: ". $color_1  .";
				}


				.widget_calendar table tbody td a{
					background-color: ". $color_1  .";
					color: #fff;
				}

				.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus,
				.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open .dropdown-toggle.btn-primary, .btn-primary ,.label-primary,
				.nav .open>a, .nav .open>a:hover, .nav .open>a:focus{
					color: #fff;
					background-color: ". $color_1 .";
				}


				a:hover , .brand-row a:hover {
					color: ". $color_1  .";
				}

				input[type=search] , input[type=text], textarea, select{
					color: ". $color_1  .";
				}

				.sub-menu li a
				{
					color: ". $color_1  .";
				}

				#footer-divider{
					color: ". $color_1  .";
					border-top: 1px solid ". $color_1 .";
				}


				#posts-pagination span.glyphicon{
					color:  ". $color_1  .";
				}

				#row-share {
					color: ". $color_1  .";
				}


				.comments-post-title{
					color: ". $color_1  .";
				}

				.comment-time{
					color: ". $color_1 .";
				}


			";







			$color_2 = esc_html(get_theme_mod('hollandex_color_2',$default_options['hollandex_color_2']));

			echo "

					.tagcloud{
						background-color: ". $color_2  .";
					}


					#header-row, #colophon{
						background-color: ". $color_2  .";
					}

					.nav>li>a:hover, .nav>li>a:focus , .sub-menu li a:hover, .sub-menu li a:active {

						background-color: ". $color_2  .";
					}

					.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active, .open .dropdown-toggle.btn-info, .btn-info ,.label-info,
					.nav .open>a, .nav .open>a:hover, .nav .open>a:focus{
						color: #fff;
						background-color: ". $color_2  .";
					}

					#top-sorter{
						color: ". $color_2  .";
					}

					.sub-menu li a:hover
					{
						background-color: ". $color_2  .";
					}



			";



			$color_3 = esc_html(get_theme_mod('hollandex_color_3',$default_options['hollandex_color_3']));

			echo "

				.post-title-row div{
					color: ". $color_3  .";
				}

				.post-content {
					background-color: ". $color_3  .";
					}


				.four-four-row{
					background-color: ". $color_3  .";
					}


				body{
					background-color: ". $color_3  .";
				}


			";



			$color_4 = esc_html(get_theme_mod('hollandex_color_4',$default_options['hollandex_color_4']));

			echo "

					#inner-content-row a:hover{
						color: ". $color_4  .";
					}


					.nav>li>a:hover, .nav>li>a:focus , .sub-menu li a:hover, .sub-menu li a:active {

						color: ". $color_4  .";
					}

					.sub-menu li a:hover
					{
						color: ". $color_4  .";
					}

					.posted-on i, .tags-links i{
						color: ". $color_4  .";
					}

					.post-title-row div{

						background-color: ". $color_4  .";
					}



			";

		$color_5 = esc_html(get_theme_mod('hollandex_color_5',$default_options['hollandex_color_5']));

			echo "

				#main-row{
				background-color: ". $color_5 .";
			}

			.comment-list li{
				background-color: ". $color_5 .";

			}



			";

		$color_6 = esc_html(get_theme_mod('hollandex_color_6',$default_options['hollandex_color_6']));

			echo "

					.widget-area aside h1{
						color: ". $color_6  .";
					}


					.brand-row , .brand-row a{
						color: ". $color_6  .";
					}


			";

		$color_7 = esc_html(get_theme_mod('hollandex_color_7',$default_options['hollandex_color_7']));

			echo "
					#div-logo-menu{
						background-color: ". $color_7  ." !important;
					}

			";

		$color_8 = esc_html(get_theme_mod('hollandex_color_8',$default_options['hollandex_color_8']));

			echo "
				.post-title-row div:hover{

					background-color: ". $color_8 .";
				}


			";

		$color_9 = esc_html(get_theme_mod('hollandex_color_9',$default_options['hollandex_color_9']));

			echo "
				.post-title-row div:hover{
					color: ". $color_9  .";

				}


			";


			echo "</style>";



}

add_action('wp_head','hollandex_custom_style_head');


/*
*
* retrieve the footer signature from theme options
*
*/
function hollandex_get_footer_signature()
{

	$footer_text = __("Hollandex Theme By <a href='http://www.kozmikinc.com'>Kozmik</a>. Proudly powered by <a href='http://www.wordpress.org'>WordPress</a>","hollandex");


	echo wp_kses_post(get_theme_mod('hollandex_footer_text',$footer_text));

}





?>
