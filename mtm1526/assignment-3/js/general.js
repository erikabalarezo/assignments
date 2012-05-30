$(document).ready(function(){
	//console.log('IN jQuery');
	
	var property;
	var ballcolor;
	$('#property').on('click', function() {
		property = $('#property').val();
		//console.log('property clicked: ' + property);
	});
	
	$('#color-box').on('change', function() {
		ballcolor = $('#color-box').val();
		//console.log(ballcolor);
	});
	
	$('#apply').on('click', function(ev) {
		//console.log('clicked APPLY BUTTON');
		ev.preventDefault();
		if((property) && (ballcolor))
			$('.myCircle').css( property, ballcolor);
		
	});
	$('#hideshow').on('click', function() {
		$('.myCircle').toggle("slow");

	
	});
});