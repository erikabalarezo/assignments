$(document).ready(function(){
	console.log('IN jQuery');
	//closs platform use on
	$('#bordercolor').on('click', function(ev) {
		$(this).toggleClass('changeBorder');
	// JavaScript Document
	});
	$('#backgroundcolor').on('click', function(ev) {
		$(this).toggleClass('backgroundcolor');
	// JavaScript Document
	});
	
	$('.todos').on('click', 'h1', function() {
		$(this).toggleClass('done');
		
	});
	bind(document.getElementById('color-box'), 'change', function (ev) {
	//INside an event Listner
	//this referers to the element this listener was bound to
	myColor = this.value;
	//we can put any htm inside
	circle.innerHTML = '<strong>' + this.value + '</strong>';
});

});