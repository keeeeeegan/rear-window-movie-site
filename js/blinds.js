$(document).ready(function () {


	var width = $(window).outerWidth();
	var height = $(window).outerHeight();
	
	var how_tall = height/20;
	var how_tall = 35;

	$('body').css('overflow', 'hidden');
	
	var $overlay = $('.overlay');
	$overlay.css({
		'opacity':'1',
		'display':'block'
	});	

	$overlay.animate({
		opacity: '0'
		}, 600, function() {
			$overlay.fadeOut('fast');
			$('body').css('overflow', 'visible');
	});	

	// when a link is clicked
	$('nav a').click(function(e) {
		e.preventDefault();

		var link_href = $(this).attr('href');

		$('body').css('overflow', 'hidden');
		
		var $overlay = $('<div class="overlay"></div>');
		$('body').append($overlay);
		$overlay.css({
			'opacity':'0',
			'display':'block'
		});		

		for (var i=0; i<20; i++) {
			
			var from_top = (how_tall+40)*i;
			
			var $blinds = $('<div class="blinds"></div>');

			$('body').append($blinds);
			$blinds.css({
				'height': how_tall+'px',
				'width': width+'px',
				'top': from_top+'px',
				'opacity':'.55',
				'display':'block'
			});
					
			$blinds.animate({
				height: '+=48',
				top: '-=25',
				opacity: '1'
				}, 400, function() {			
			});	
		
		}

		$overlay.animate({
			opacity: '1'
			}, 400, function() {
				//change page here
				document.location.href = link_href;
		});		
		
	});
	
});