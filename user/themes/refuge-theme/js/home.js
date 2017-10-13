$(document).ready(function(){

    var min_w = 300; // minimum video width allowed
	var vid_w_orig;  // original video dimensions
	var vid_h_orig;

	jQuery(function() { // runs after DOM has loaded
    
	    vid_w_orig = parseInt(jQuery('video').attr('width') + 200);
	    vid_h_orig = parseInt(jQuery('video').attr('height'));

	    jQuery(window).resize(function () { resizeToCover(); });
	    jQuery(window).trigger('resize');
	
	});

	function resizeToCover() {
	    // set the video viewport to the window size
	    jQuery('#videoViewport').width(jQuery(window).width());
	    jQuery('#videoViewport').height(jQuery(window).height());

	    // use largest scale factor of horizontal/vertical
	    var scale_h = jQuery(window).width() / vid_w_orig;
	    var scale_v = jQuery(window).height() / vid_h_orig;
	    var scale = scale_h > scale_v ? scale_h : scale_v;

	    // don't allow scaled width < minimum video width
	    if (scale * vid_w_orig < min_w) {scale = min_w / vid_w_orig;};

	    // now scale the video
	    jQuery('video').width(scale * vid_w_orig);
	    jQuery('video').height(scale * vid_h_orig);
	    // and center it by scrolling the video viewport
	    jQuery('#videoViewport').scrollLeft((jQuery('video').width() - jQuery(window).width()) / 2);
	    jQuery('#videoViewport').scrollTop((jQuery('video').height() - jQuery(window).height()) / 2);
	 };

	$(window).scroll(function(){

		var height1 = $('.mainHome').height();

    	if ($(window).scrollTop() >= height1 ) {
			$('.headerInternal').addClass("fixed");
		} else{
			$('.headerInternal').removeClass("fixed");

		}

    });

    $('.keepExploring').click(function(e){
    	$('body,html').animate({ scrollTop: $('.mainHome').height() }, 900);
    });

    $('.refugeSymbol').delay(3400).animate({
    	'top' : '-75px',
    	opacity : 1
    }, 600);

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
		  strings: ["A GAME BY NOTYET - AVAILABLE THIS DECEMBER"],
		  startDelay: 4550,
		  typeSpeed: 50
		}
		var typed2 = new Typed("#by", notYet);
	};

    
});