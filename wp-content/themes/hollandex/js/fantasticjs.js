/**
 * JS functions file for the color picker and jquery ui tabs in admin area theme-options page
 *
 *
 */
( function( $ ) {




	$('#txthollandex_color_1').wpColorPicker();
	$('#txthollandex_color_2').wpColorPicker();
	$('#txthollandex_color_3').wpColorPicker();
	$('#txthollandex_color_4').wpColorPicker();
	$('#txthollandex_color_5').wpColorPicker();
	$('#txthollandex_color_6').wpColorPicker();
	$('#txthollandex_color_7').wpColorPicker();
	$('#txthollandex_color_8').wpColorPicker();
	$('#txthollandex_color_9').wpColorPicker();



	//some jquery ui tabs for theme options page
	$('#hollandex_tabs').tabs();


	// Do detailed descriptions of each color variable
	var colors = [];
	setColordescriptions();
	function setColordescriptions(){

		colors[0] = "The Primary Color for hyperlinks, pills, butoons, input text, tags";
		colors[1] = "The Primary Color for footer area and main menu on mouse hovers & info buttons";
		colors[2] = "The background color for body and post content";
		colors[3] = "The color for Post title backgrounds & menu items when mouse hovers";
		colors[4] = "The color for the content area background and for individual comments";
		colors[5] = "The color for headers ";
		colors[6] = "The background color for the menu area";
		colors[7] = "The color for post title hover";
		colors[8] = "The background color for post title hover ";


	}


	$('#colors_div>table>tbody>tr').each(function(index){
		$(this).append('<td>' + colors[index] + '</td>');
	});


} )( jQuery );
