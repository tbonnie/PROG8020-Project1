( function ( $ ){


	/*
	*
	* Add a down icon to menu items that have sub menus
	*
	*/
	$('.menu-item').each(function(){

		if ( $(this).children('.sub-menu').length > 0 )
			{
				$(this).children('a').append("<i class='fa fa-chevron-down'></i>");


			}

	});


	/*
	*
	* For right aligned navigational menus make sure that on smaller screens the menu comes first and goes on top instead of
	* going underneath the content
	*
	*/
	if ( $('#div-logo-menu').hasClass("right-menu") && $(window).width() < 992 )
	{
		var divLogoMenu = $('#div-logo-menu').detach();
		var divContent = $('#div-content').detach();

		$('#main-row').append(divLogoMenu,divContent);
	}


	/*
	*
	* Adjust The menu Bar Width
	* Take Note of Window Width And resize when window resizes
	*
	*
	*/
	$(window).resize(adjustMenuBarHeight);
	adjustMenuBarHeight();


	/*
	* Main Menu Toggle dropdown menus with child ul's
	*
	*/

	$('.menu-item-has-children>a').click(function(e){

		e.preventDefault();

		$(this).next('ul.sub-menu').slideToggle();

	});

	/******
	* Show the View Details label on mouse over in shop page
	*
	*
	*/
	$('.posts-list li').hover(function(){
		$(this).find('.view-details-row').fadeIn();
	},function(){
		$(this).find('.view-details-row').fadeOut();
	});

	/*
	* Adjust the height of the menu bar to try and emulate 100% height
	* on desktops and medium screen devices
	*
	*/
	function adjustMenuBarHeight()
	{
		var screen_width = $(window).width();


		if(screen_width <= 992)
		{
			$('#div-logo-menu').css('height','auto');
		}
		else
		{

			var content_height = $('div#primary').height() + $('footer#colophon').height() + 100;
			var logo_menu_height = $('#div-logo-menu').height();

				if(logo_menu_height <= content_height)
					{

						$('#content').height(content_height);
						$('#div-logo-menu').height(content_height);

					}
					else
					{
						$('#content').height(logo_menu_height);
					}


		}





	}



	scaleGetInTouchColumn();

	function scaleGetInTouchColumn()
	{


		if( $('.contact-page').length > 0 &&  $(window).width() > 992 )
		{
				var scale_height = $('.contact-page .col-md-8').innerHeight();
				$('.contact-page .col-md-4').height(scale_height);
		}



	}




}) (jQuery);
