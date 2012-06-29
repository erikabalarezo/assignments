$(document).ready(function() {
	
	
	$.ajaxSetup ({
	cache: true
	});
	var planetnumber;
	
	
	$('a').on('click', function (event) {
		event.preventDefault();
		planetnumber= event.target.id;
		//set current to the link clicked		
		$('ul' + ' li.current').removeClass('current');
		$(this).parent().addClass('current');
		
				
		if(planetnumber == 'one') 
			$('#fillme').load('includes/earth.php');
		if(planetnumber == 'two') 
			$('#fillme').load('includes/mars.php');
		if(planetnumber == 'three')
			$('#fillme').load('includes/jupiter.php');
		if(planetnumber == 'four')
			$('#fillme').load('includes/venus.php');
		
	});
	
	
});