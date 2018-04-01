

function toggleTableAddFormUser(){
	var add_btn = document.getElementById('add_btn');
	var  table =  document.getElementById('table');
	var add_form =  document.getElementById('add_form');

	table.style.display = "none";
	add_btn.style.display = "none";
	add_form.style.display = "block";
	 
}

function openTableUser(){
	window.location.assign("users");
}

