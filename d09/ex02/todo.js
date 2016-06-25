var listItem = [];

// 1 j affiche le contenu de mon cookie
console.log(document.cookie);
// display list items
if (document.cookie) {
	listItem = JSON.parse(document.cookie);
	console.log(listItem);
	for(var i = 0; i < listItem.length; i++) {
		var list = document.getElementById('ft_list');
		var lastItem = document.createElement('div');
		lastItem.innerHTML = listItem[i];
		lastItem.insertBefore(lastItem, list.firstChild);
		// lastItem.onclick = eraseToDo();
	}
}

// todoChild.innerHTML = tab[elem];
// todo.insertBefore(todoChild, todo.firstChild);
// document.getElementById(elem).addEventListener('click', function(){
// 	ft_remove(this.id);
// }, false);



function addToDo() {
	var toDo = prompt("Veuillez rentrer une tâche :");
	if (toDo != "") {
		var list = document.getElementById('ft_list');
		var newItem = document.createElement('div');
		newItem.setAttribute("id", "todo");
		newItem.innerHTML = toDo;
		list.insertBefore(newItem, list.firstChild);
		listItem.push(toDo);
		document.cookie = createCookie('todo', JSON.stringify(listItem), 1);
		lastItem.onclick = eraseToDo(newItem);
		console.log(document.cookie);
	}
}

function eraseToDo() {
	if (confirm('Voulez-vous supprimer cette tâche ?')) {

	}
}

function createCookie(name, value, days) {
	console.log(value);
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
}

// function getCookie(name) {
// 	var nameEQ = name + "=";
// 	var ca = document.cookie.split(';');
// 	for(var i = 0; i < ca.length; i++) {
// 		var c = ca[i];
// 		while (c.charAt(0)==' ')
// 			c = c.substring(1, c.length);
// 		if (c.indexOf(nameEQ) == 0)
// 			return c.substring(nameEQ.length, c.length);
// 	}
// 	return null;
// }

// function eraseCookie(name) {
// 	createCookie(name, "", -1);
// }


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
