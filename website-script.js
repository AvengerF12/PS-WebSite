$(document).ready(function(){

    $('.h-snippet').hide();

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


function showNews()
{
    var activatedCounter = 0;

    for(var i=0;i<9 && activatedCounter<3;i++){
        console.log(document.getElementById("snippet5").style.display);
        if(document.getElementById("snippet"+i).style.display == "none"){
            document.getElementById("snippet"+i).style.display = "inline";
            activatedCounter++;
        }
    }
}


