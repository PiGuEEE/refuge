$(document).ready(function() {  

	$('#contactForm').on('submit', function (e) {

		console.log('HELLOW');
    	

	    if (!e.isDefaultPrevented()) {
	        var url = "user/themes/refuge-theme/phpmailer/email.php";

	        $.ajax({

	            type: "POST",
	            url: url,
	            data: $(this).serialize(),
	            success: function (data)

	            {
    				console.log('SENT');

	            	$('#contactForm').fadeOut(300).delay(3000).fadeIn(600);

					setTimeout(function() {
	            		$('#contactForm')[0].reset();
					  	$('.successMessage').addClass('visible');
					  	//$('#contactForm #email').focus();
					}, 300);

					setTimeout(function() {
					  $('.successMessage').removeClass('visible');
					  $('#contactForm input').focusout();
					}, 2650);
	            	
	            	//console.log('email sent');
	                var messageAlert = 'alert-' + data.type;
	                var messageText = data.message;

	                var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
	               
	                if (messageAlert && messageText) {
	                    $('#contactForm').find('.messages').html(alertBox);
	                    $('#contactForm')[0].reset();
	                }
	            }

	        });

	        return false;

	    }	

	});
});