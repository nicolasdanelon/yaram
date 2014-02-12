
function prepareEventHandlers() {

	var theButton = document.getElementById("show_sidebar");
	var theAside = document.getElementsByTagName("aside")[0];

	theButton.onclick = function() {
		theAside.style.display == "block" ? 
			theAside.style.display='none' :
			theAside.style.display='block' ;
	}

}

window.onload = function() {
	prepareEventHandlers();
}