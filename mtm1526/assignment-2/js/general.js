// JavaScript Document

var additemBtn = document.getElementById('additem-btn');
var item = document.getElementById('inputitem');
var mylist = document.getElementById('myList');
var theform = document.getElementById('theform');
	
var bind = function(elem, ev, func){
	if(window.addEventListener) {
		elem.addEventListener(ev,func,false);
	}
	else {
		elem.attachEvent('on' + ev, func);
	}
	
};

bind(theform, 'submit', function (ev) {
	ev.preventDefault();
	
	var str = this.value;
	if (!str.match(/^\s*$/)) {
    	myItem = document.createElement('li');
		myItem.style.value = str;
		myItem.innerHTML = str;
		myItem.className = 'incomplete';
		console.log(ev.target);
		mylist.appendChild(myItem);
		item.value = '';
		
	}
});


bind(document.body, 'click', function (ev) {
	console.log(ev.target);
	if(ev.target.className.toLowerCase() == 'incomplete') {
		myItem = ev.target;
		myItem.className = 'complete';
	}
	else if(ev.target.className.toLowerCase() == 'complete') {
		myItem = ev.target;
		myItem.className = 'incomplete';
	}
});


