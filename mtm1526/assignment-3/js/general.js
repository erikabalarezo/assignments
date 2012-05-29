$(document).ready(function(){
	console.log('IN jQuery');
	//closs platform use on
	var property;
	var ballcolor;
	var circle;
	var stylecircle;
	
	$('#bordercolor').on('click', function() {
		property = 'border-color';
		console.log('BORDER COLOR CLICKED');
	});
	$('#backgroundcolor').on('click', function() {
		property = 'background-color';
		console.log('BACKGROUND COLOR CLIKED');
	});
	$('#color').on('click', function() {
		console.log('COLOR FROM BOX SELECTION');
		property = 'color';
	});
	$('#color-box').on('change', function() {
		console.log('WROTE A COLOR');
		ballcolor = $('#color-box').val();
		console.log(ballcolor);
	});
	$('#apply').on('click', function() {
		console.log('clicked APPLY BUTTON');
		$('.myCircle').css( property, ballcolor);
		
	});
	
});