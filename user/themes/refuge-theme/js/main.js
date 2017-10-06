$(document).ready(function(){

    $('.menu-btn').click(function(){
    	$('body').toggleClass('overlayActive');
  		$(this).parent().find('.navOverlay').fadeToggle(200);
  		console.log('hehe');
    	//$('.navOverlay').fadeToggle(200);
    });



    // START ANIMATED TYPINGS

    var mainRefuge = {
	  strings: ["REFUGE"],
	  typeSpeed: 80
	}
	var typed = new Typed("#mainRefuge", mainRefuge);

	
	var notYet = {
	  strings: ["A VIDEOGAME BY NOT-YET"],
	  startDelay: 650,
	  typeSpeed: 50
	}
	var typed2 = new Typed("#by", notYet);



});