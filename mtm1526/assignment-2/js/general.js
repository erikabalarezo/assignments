// JavaScript Document for Tiny to do form

var item = document.getElementById('inputitem');
var mylist = document.getElementById('myList');
var theform = document.getElementById('theform');
	
theform.addEventListener('submit',function(ev) {
	ev.preventDefault();
	
	var str = item.value;
	if (!str.match(/^\s*$/)) {
    	myItem = document.createElement('li');
		myItem.style.value = str;
		myItem.innerHTML = str;
		myItem.className = 'incomplete';
		console.log(ev.target);
		mylist.appendChild(myItem);
		item.value = '';
		
	}
}, false);


document.body.addEventListener('click', function(ev) {
	console.log(ev.target);
	if(ev.target.className.toLowerCase() == 'incomplete') {
		myItem = ev.target;
		myItem.className = 'complete';
	}
	else if(ev.target.className.toLowerCase() == 'complete') {
		myItem = ev.target;
		myItem.className = 'incomplete';
	}
}, false);


