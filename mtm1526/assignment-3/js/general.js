$(document).ready(function(){
	var myball = $('.myCircle');
	
	$('form').on('submit', function(ev) {
		var property =$('#property');
		var ballcolor = $('#color-box');
		ev.preventDefault();

		property = $('#property').val();
		ballcolor = $('#color-box').val();
		myball.css( property, ballcolor);
		$('#hideshow').on('click', function(ev) {
			myball.toggle(200);
	
		});
	});
});