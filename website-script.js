$(document).ready(function(){

	$('.responsive-news').slick({
		vertical: true,
		verticalSwiping: true,

		autoplay: true,
        autoplaySpeed: 2500,

		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
				}
			},
			
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
    		
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

	$('.center').slick({
		centerMode: true,
		centerPadding: '60px',
		responsive: [
			{
				breakpoint: 768,
				settings: {
					centerMode: true,
					centerPadding: '40px'
				}
			},
			{
				breakpoint: 480,
				settings: {
					centerMode: true,
					centerPadding: '40px'
				}
			}
		]
	});
});
