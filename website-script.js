$(document).ready(function(){

	$('.responsive-news').slick({
		vertical: true,
		verticalSwiping: true,

		autoplay: true,
		autoplaySpeed: 2500,
	
		focusOnSelect: true,

		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 8,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 2,
				}
			},
			
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					
					vertical: false,
					verticalSwiping: false
				}
			},
    		
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				
					vertical: false,
                    verticalSwiping: false
				}
			}
		]
	});

});
