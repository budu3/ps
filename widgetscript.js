
var content_url = "http://localhost/people_list.js";
var root = "xss";

function requestContent(){
	var script = document.createElement('script');
    	script.src = content_url;
	document.getElementsByTagName('head')[0].appendChild(script);
}

function serverResponse(data){
	if (!data) return;	
	var div = document.getElementById(root);
	var txt = "";
	for (var i = 0; i < data.length; i++) {
		if (txt.length > 0) { txt += ", "; }
	      	txt += data[i];
	}
	div.innerHTML = "Names: " + txt;  // assign new HTML into #ROOT
	div.style.display = 'block'; // make element visible
	div.style.visibility = 'visible'; // make element visible
}

document.write("<div id='xss'></div>");
requestContent();
var no_script = document.getElementById('no_script');
if (no_script) { no_script.style.display = 'none'; }
