itemNb = 0;
var listItem = [];

if (document.cookie) {
	listItem = JSON.parse(document.cookie);
	for(var i = 0; i < listItem.length; i++) {
		var list = document.getElementById('ft_list');
		var lastItem = document.createElement('div');
		lastItem.setAttribute("class", "elem");
		lastItem.id = Math.round(new Date().getTime() + (Math.random() * 100));
		lastItem.innerHTML = listItem[i];
		if (list.firstChild) {
			list.insertBefore(lastItem, list.firstChild);
		} else {
			list.appendChild(lastItem);
		}
		selectElem();
	}
}

function addToDo() {
	var toDo = prompt("Veuillez rentrer une tâche :");
	if (toDo) {
		var list = document.getElementById('ft_list');
		var newItem = document.createElement('div');
		newItem.id = Math.round(new Date().getTime() + (Math.random() * 100));
		newItem.setAttribute("class", "elem");
		newItem.innerHTML = toDo;
		list.insertBefore(newItem, list.firstChild);
		listItem.push(toDo);
		document.cookie = JSON.stringify(listItem);
		selectElem();
	}
}

function selectElem() {
	document.querySelectorAll(".elem").forEach(function(row) {
		row.addEventListener('click', eraseToDo, false);
	});
}

function eraseToDo(e) {
	if (confirm('Voulez-vous supprimer cette tâche ?')) {
		var toRemove = e.target.innerHTML;
		indexToRemove = listItem.indexOf(toRemove);
		listItem.splice(indexToRemove, 1);
		document.cookie = JSON.stringify(listItem);
		document.getElementById(e.target.id).remove();
	}
}
