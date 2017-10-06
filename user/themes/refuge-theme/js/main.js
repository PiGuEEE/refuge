$(document).ready(function(){

    $('.menu-btn').click(function(){
    	$('body').toggleClass('overlayActive');
  		$('.navOverlay').fadeToggle(200);
  		console.log('hehe');
    });



    // START ANIMATED TYPINGS

    var mainRefuge = {
	  strings: ["REFUGE"],
	  typeSpeed: 120
	}
	var typed = new Typed("#mainRefuge", mainRefuge);

	
	var notYet = {
	  strings: ["A VIDEOGAME BY NOTYET"],
	  startDelay: 1550,
	  typeSpeed: 50
	}
	var typed2 = new Typed("#by", notYet);


	var testimonials = {
	  strings: [, "<div class='text'>Refuge is simply THE GAME. Play it, PLAY IT! It is AWESOME!</div><div class='author'>Jason Ogro @ Itch.io</div>", "<div class='text'>One of the best games I had the chance to play. Nice job!</div><div class='author'>Silly Fella @ Steam</div>" ],
	  loop: true,
	  typeSpeed: 35,
	  backSpeed: 6,
	  backDelay: 9000
	}
	var typed2 = new Typed(".testimonials .testimonial", testimonials);



});