$(document).ready(function(){

  $('.menu-btn').click(function(){
  	$(this).parent().find('.navOverlay').fadeToggle(200);
  	console.log('hehe');
    //$('.navOverlay').fadeToggle(200);
  });

});