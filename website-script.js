$(document).ready(function(){

    // Hide the unneeded news
    $('.h-snippet').hide();

    // Slick carousel
	$('.responsive-news').slick({
		vertical: true,
		verticalSwiping: true,

        autoplay: true,
        autoplaySpeed: 5000,

        adaptiveHeight: true,
        infinite: false,
		arrows: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 2
				}
			},
			
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					
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

    $('.responsive-showcase').slick({
        infinite: true,
        arrows: false,

        autoplay: true,
        autoplaySpeed: 4000,

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

});


// Load 3 news at a time
function showNews()
{
    var activatedCounter = 0;
    var i=0;

    for(i=0;i<9 && activatedCounter<3;i++){
        if(document.getElementById("snippet"+i).style.display == "none"){
            document.getElementById("snippet"+i).style.display = "block";
            activatedCounter++;
        }
    }

    // Hide button if finished loading news
    if(activatedCounter == 3 && i==9){
        document.getElementById("load-btn").style.display = "none";
    }
}

