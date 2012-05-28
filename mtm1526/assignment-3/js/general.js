$(document).ready(function(){
	console.log('IN jQuery');
	//closs platform use on
	var property;
	var myColor;
	
	$('#bordercolor').on('click', function(ev) {
		property = $('#bordercolor').val();
		
		//$(this).toggleClass('changeBorder');
	// JavaScript Document
	});
	$('#backgroundcolor').on('click', function(ev) {
		property = $('#backgroundcolor').val();
		
		//$(this).toggleClass('backgroundcolor');
	// JavaScript Document
	});
	$('#color').on('click', function(ev) {
		property = $('#color').val();
		
		//$(this).toggleClass('backgroundcolor');
	// JavaScript Document
	});
	
	
	bind(document.getElementById('color-box'), 'change', function (ev) {
	//INside an event Listner
	//this referers to the element this listener was bound to
		myColor = this.value;
		//we can put any htm inside
		
	});
	
	$('.todos').on('click', 'h1', function() {
		$(this).toggleClass('done');
		
	});
	var circlenewcss = property': ' + myColor;
	$('.myCircle').val('circlenewcss');

});