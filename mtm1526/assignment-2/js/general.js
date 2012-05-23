// JavaScript Document

var additemBtn = document.getElementById('additem-btn');
var item = document.getElementById('inputitem');
var mylist = document.getElementById('myList');

//console.log('form at zero is ' + document.getElementsByTagName('form')[0]);
	
var bind = function(elem, ev, func){
	if(window.addEventListener) {
		elem.addEventListener(ev,func,false);
	}
	else {
		elem.attachEvent('on' + ev, func);
	}
	
};

bind(item, 'change', function (ev) {
	//ev.preventDefault();
	
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

//bind(additemBtn, 'clik',function() {
bind(additemBtn, 'click',function() {
	//var allItems = document.getElementsByTagName('li');
	//if (allItems == 0) {
		//var myList = document.createElement('ul');
		//document.body.appendChild(myList);
	//	myItem = document.createElement('li');
	//}
	/*else {
		myItem = document.createElement('li');
		console.log(myItem);
	}
	
	*/
	//addHandler();
	//ev.preventDefault();
	//evtSubmit();
	//todoform.addEventListener('submit', stopDefAction, false);
	//event.stopImmediatePropagation();
	

	//ev.preventDefault();
		//document.body.appendChild(myItem);
		//if(ev.target.id == 'additem-btn') {
			//console.log('the target id is ' + ev.target.id);
			//ev.preventDefault();
		
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


