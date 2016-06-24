function addToDo() {
	var toDo = prompt("Veuillez rentrer une tâche :");
	if (toDo != "") {
		var toDos = getCookie('listItem');
		console.log(toDos);
		if (toDos) {

		} else {
			createCookie('listItem', toDo, 10);
		}
	}
}

function createCookie(name, value, days) {
	alert(name);
	alert(value);
	alert(days);
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		var expires = "; expires=" + date.toGMTString();
	}
	else {
		var expires = "";
	}
	var str = name + "=" + value + expires;
	console.log(str);
	document.cookie = str;
	console.log(document.cookie);
}

function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ')
			c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0)
			return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name, "", -1);
}


// Specify them all once eg:
//
// var value = ['1', '2', '3', 'n'].join(',');
// document.cookie = 'key=' + value;
// where 'key=' + value will now be:
//
// key=1,2,3,n
// Or alternatively, read your data from cookie first and add new data:
//
// var keycookie = // read your cookie here
// keycookie += 'new stuff';
// document.cookie = 'key=' + keycookie;
