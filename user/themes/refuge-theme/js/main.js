$(document).ready(function(){

    $('.menu-btn').click(function(){
    	$('body').toggleClass('overlayActive');
  		$('.navOverlay').fadeToggle(100);
    });

    // START ANIMATED TYPINGS

    

	// homepage testimonials
	var typedDiv3 = $('.testimonial');
	if (typedDiv3.length) {
		
		var testimonials = {
		strings: [, "<div class='text'>It has been impressive to watch Notyet learn and grow as they wrangle with an intentionally complex topic.</div><div class='author'>Tony Parmenter - Games Lecturer @ SAE Institute</div>" ],
		  loop: true,
		  typeSpeed: 35,
		  backSpeed: 6,
		  backDelay: 9000
		}

		var typed3 = new Typed(".testimonials .testimonial", testimonials
		);
	};

	
	// about page testimonials
	var typedDiv4 = $('#testimonialAbout');
	if (typedDiv4.length) {

		var testimonialsAbout = {
		  strings: [, "<div class='text'>Refuge is simply THE GAME. Play it, PLAY IT! It is AWESOME!</div><div class='author'>Jason Ogro @ Itch.io</div>", "<div class='text'>One of the best games I had the chance to play. Nice job!</div><div class='author'>Silly Fella @ Steam</div>" ],
		  loop: true,
		  typeSpeed: 35,
		  backSpeed: 6,
		  backDelay: 9000,
		}

		var typed4 = new Typed("#testimonialAbout", testimonialsAbout
		);
	}


});