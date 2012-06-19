$(document).ready(function() {
	$.get('monster-one.html', function(data){
		//$('body').append(data);
		$('#fillme').append(data);
	});
	
	/*
	$.get('monster-one.html', function(data){
		$('#fillme').append(data);
	});
	*/
	/*
	$('#gethtml').on('click', function () {
		$('#fillme-monster-one').load('load-me.html');
	});
	*/
	$('#one').on('click', function (data) {
		//$('body').removeData('monster-one.html');
		//if ($('a').hasClass('one'))
		//$('body').load('monster-two.html');
		$('#fillme').load('monster-one.html');
		
			//$('body').replaceWith('monster-two.html');
	
		
		
	});
	$('#two').on('click', function () {
		$('#fillme').load('monster-two.html');
	});
	$('#three').on('click', function () {
		$('#fillme').load('monster-three.html');
	});
	$('#four').on('click', function () {
		$('#fillme').load('monster-four.html');
	});
	/*
	$('#sendme').on('change', function(){
		$.post('save.php', {
			sendme : $('#sendme').val()
		});
	});
	*/
});