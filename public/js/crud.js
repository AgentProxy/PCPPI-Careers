$(document).ready(function(){
	$(document).on("click", ".requirements-btn", addReq);
});

console.log("hello");

/* PWNED BY AGENT PROXY "SERVING YOU SPAGHETTI CODE SINCE 2014 FIXED NA PLESSSS" */
function addReq(){
	console.log("hello");
	i = document.getElementsByClassName('requirements');
	$('#req-list-0').clone().attr('id','req-list-'+(i.length)).insertAfter('#req-list-' + (i.length- 1));
	$('#requirements-1').attr('id','requirements-'+(i.length));
	document.getElementById("req-list-" + (i.length-1)).style.display = "block";
	//document.getElementById("requirements-" + (i.length)).placeholder = "requirements " + i.length-1;
	//node = document.getElementById("requirements-" + (i.length-1));
	// console.log(node.lastChild.textContent);
	// node.lastChild.innerHTML = i.length-1;
}

function addAcc(){
	i = document.getElementsByClassName('requirements');
	$('#req-list-0').clone().attr('id','req-list-'+(i.length)).insertAfter('#req-list-' + (i.length- 1));
	$('#requirements-1').attr('id','requirements-'+(i.length));
	document.getElementById("req-list-" + (i.length-1)).style.display = "block";
}