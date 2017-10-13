$(document).ready(function(){

    $('.menu-btn').click(function(){
    	$('body').toggleClass('overlayActive');
  		$('.navOverlay').fadeToggle(200);
  		console.log('hehe');
    });

    // START ANIMATED TYPINGS

    // main REFUGE on homescreen
	var typedDiv1 = $('#mainRefuge');
	if (typedDiv1.length) {
    
	    var mainRefuge = {
		  strings: ["REFUGE"],
		  typeSpeed: 100
		}
	
		var typed = new Typed("#mainRefuge", mainRefuge);
	};

	// Every Journey Ends on homescreen
	var typedDiv1 = $('#secondRefuge');
	if (typedDiv1.length) {
    
	    var secondRefuge = {
		  strings: ["EVERY JOURNEY ENDS"],
		  startDelay: 1550,
		  typeSpeed: 60
		}
	
		var typed = new Typed("#secondRefuge", secondRefuge);
	};

	
	// by not yet
	var typedDiv2 = $('#by');
	if (typedDiv2.length) {
		var notYet = {
		  strings: ["A VIDEOGAME BY NOTYET - AVAILABLE THIS DECEMBER"],
		  startDelay: 4550,
		  typeSpeed: 50
		}
		var typed2 = new Typed("#by", notYet);
	};


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

		console.log('HALO');
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