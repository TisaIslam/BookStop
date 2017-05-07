function optionloader() {
	
	xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
	if(this.readyState==4 && this.status==200){
		document.getElementById("options").innerHTML=xhttp.responseText;	
		}
	};

	xhttp.open("POST","options.php",true);
	xhttp.send();	
	
}
