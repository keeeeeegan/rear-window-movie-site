$(document).ready(function () {


	$('#trailer').click( function(e) {
		e.preventDefault();
		$(".trailer_container").html('<iframe width="673" height="505" src="http://www.youtube.com/embed/6kCcZCMYw38?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>');
	});




	function loadLargeImage(img_src, img_desc, img_title) {
		$('.larger_image_view').html('<a href="#" class="close">close</a><img src="' + img_src + '"><span class="title">' + img_title + '</span><p>' + img_desc + '</p>');
		//$('.larger_image_view').html('<a href="#" class="close">close</a><a href="#" class="left">left</a><img src="' + img_src + '"><p>' + img_desc + '</p><a href="#" class="right">right</a>');

		repositionLargeImageView();
	}

	function closeLargeImageView() {
		$('.cover').remove();
  		$('body').css('overflow', 'visible');
	}

	function repositionLargeImageView() {
		var win_width = $(window).outerWidth();
		var win_height = $(window).outerHeight();
		var search_width = $('.larger_image_view').outerWidth(); 
		var search_height = $('.larger_image_view').outerHeight(); 

		var place_x = win_width/2 - search_width/2;
		var place_y = win_height/2 - search_height/2 + $(window).scrollTop();

		$('.larger_image_view').css({'top':place_y , 'left':place_x})
	}

	$('.window').click(function(e) {
		e.preventDefault();

		$('body').append('<div class="cover"><div class="larger_image_view"></div></div>');
		$('body').css('overflow', 'hidden');

		var img_src = $(this).attr('href');
		var img_desc = $(this).children('img').data('desc');
		var img_title = $(this).children('span').html();

		loadLargeImage(img_src, img_desc, img_title);

		// remove the overlay
		$(document).keyup(function(e) {
  			if (e.keyCode == 27) {
  				closeLargeImageView();
  			} 
		});
	});


	$('.cover .close').on('click', function(e) {
		e.preventDefault();
		closeLargeImageView();
	});	

	$(window).scroll(function() {
		repositionLargeImageView();
	});
	$(window).resize(function() {
		repositionLargeImageView();
	});	

	

});
