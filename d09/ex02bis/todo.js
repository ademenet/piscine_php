itemNb = 0;
var listItem = [];

if (document.cookie) {
	listItem = JSON.parse(document.cookie);
	displayList(listItem);
}

function addToDo() {
	var toDo = prompt("Veuillez rentrer une tâche :");
	if (toDo) {
		listItem.push(toDo);
		document.cookie = JSON.stringify(listItem);
		displayList(listItem);
	}
}

function displayList(listItem) {
	$("#ft_list").empty();
	listItem.forEach(function(value) {
		var Id = Math.round(new Date().getTime() + (Math.random() * 100));
		$('<div class="elem" id="' + Id + '">' + value + '</div>').prependTo($("#ft_list"));
		$('#' + Id).on('click', function() {
			if (confirm('Voulez-vous supprimer cette tâche ?')) {
				var toRemove = $(this).html();
				indexToRemove = listItem.indexOf(toRemove);
				listItem.splice(indexToRemove, 1);
				document.cookie = JSON.stringify(listItem);
				$(this).remove();
			}
		});
	});
}
