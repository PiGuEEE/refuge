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
		strings: [, "<div class='text'>Refuge is a hell of an immersive game! The fact it tackles real world issues creates even more empathy towards the game and its story. Loved it!</div><div class='author'>Jason @ SAE</div>", "<div class='text'>I am really proud to see what Refuge has become, and to be part of such a great team. These Devs really love what they do, and the quality of the game reflects that.</div><div class='author'>Arthur - Web Designer @ NotYet</div>" ],
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