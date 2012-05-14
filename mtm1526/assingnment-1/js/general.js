//Displays a triangle out of the letter entered

alert('This exercise will display a triangle out of the letter you enter');

var letterLooper = function() {
	var myletter = '';
	var letters = '';
	var alphaExp = /^[a-zA-Z]+$/;
	while ((!myletter) || (!(myletter.length == 1)) || (!(myletter.match(alphaExp)))){
		myletter = prompt('Enter one letter only');
	}
	
	console.log(myletter);
	
	if((myletter) && (myletter.length == 1) && (myletter.match(alphaExp))) {
		for(var i = 0; i < 10; i++) {
			//writes some text or html int the <body>
			//document.write('Hello ' + name + '<br>');
			letters = letters + myletter;
			document.write(letters + '<br>');
			
		}
	}
};

letterLooper();