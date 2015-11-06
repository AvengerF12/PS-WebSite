$(document).ready(function(){

	$('.responsive-news').slick({
		vertical: true,
		verticalSwiping: true,

		autoplay: true,
		autoplaySpeed: 2500,

		centerMode: true,
		centerPadding: '30px',
		
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
				}
			},
			
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					
					vertical: false,
					verticalSwiping: false
				}
			},
    		
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				
					vertical: false,
                                        verticalSwiping: false
				}
			}
		]
	});

});
