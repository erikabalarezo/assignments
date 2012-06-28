$(document).ready(function () {
	//save useravailable at the top
	var userAvailable = $('.user-available');
	var emailAvailable = $('.email-available');
	var passwordReqs = 0;
	$('#username').on('change', function (ev) {
		//console.log('username');
		var username = $(this).val();
		
		userAvailable.attr('data-status','unchecked');
		
		if(username.length >=3 && username.length <= 25) {
			var ajax = $.post('check-username.php', {
				'username':username
			});
			//data is going to hava available or unavailable
			ajax.done(function(data) {
				if(data == 'available') {
					userAvailable
					.attr('data-status', 'available').html('Available');
				}
				else{
					userAvailable
					.attr('data-status', 'unavailable').html('Unavailable');
				}
			
			});
			
		}
		else {
			userAvailable.attr('data-status', 'unavailable').html('Unavailable');
					
		}
	
	});
	
	$('#email').on('keyup', function(ev) {
		var email = $(this).val();
		emailAvailable.attr('data-status','unchecked');
		
		if(email.length >=3 && email.length <= 25) {
			var ajax = $.post('check-email.php', {
				'email':email
			});
			//data is going to hava available or unavailable
			ajax.done(function(data) {
				if(data == 'available') {
					emailAvailable
					.attr('data-status', 'available').html('Available');
				}
				else{
					emailAvailable
					.attr('data-status', 'unavailable').html('Unavailable');
				}
			
			});
			
		}
		else {
			emailAvailable.attr('data-status', 'unavailable').html('Unavailable');
					
		}
	
	
	});
	
	
	
	
	
//onkeydown this is better because you see what the user types
	$('#password').on('keyup', function(ev) {
		var password = $(this).val();
		
		passwordReqs = 0;
		
		if(password.length > 5) {
			passwordReqs++;
			$('.pass-length').attr('data-state', 'achieved');
		}
		if(password.match(/[a-z]/)) {
			passwordReqs++;
			$('.pass-lower').attr('data-state', 'achieved');
		}
		if(password.match(/[A-Z]/)) {
			passwordReqs++;
			$('.pass-upper').attr('data-state', 'achieved');
		}
		
		if(password.match(/\d/)) {
			passwordReqs++;
			$('.pass-num').attr('data-state', 'achieved');
		}
		if(password.match(/[^a-zA-Z0-9]/)) {
			passwordReqs++;
			$('.pass-symbol').attr('data-state', 'achieved');
		}
	});
	
	
	
	$('form').on('submit',function(ev) {
		if (
			userAvailable.attr('data-status')== 'unchecked'
			||userAvailable.attr('data-status')== 'unAvailable'
			||passwordReq < 5
		) {
			ev.preventDefault(); //not let submit if any error
		}
	});
	
});

