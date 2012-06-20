$(document).ready(function() {
	
	$.ajaxSetup ({
	cache: true
	});
	var monsternumber;
	$.get('monster-one.html', function(data){
		$('#fillme').append(data);
	});
	
	
	$('a').on('click', function (event) {
		monsternumber= event.target.id;
		//set current to the link clicked		
		$('ul' + ' li.current').removeClass('current');
		$(this).parent().addClass('current');
		
				
		if(monsternumber == 'one') 
			$('#fillme').load('monster-one.html');
		if(monsternumber == 'two') 
			$('#fillme').load('monster-two.html');
		if(monsternumber == 'three')
			$('#fillme').load('monster-three.html');
		if(monsternumber == 'four')
			$('#fillme').load('monster-four.html');
		
	});
	
	
});