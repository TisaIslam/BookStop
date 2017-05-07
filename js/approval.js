function approve(id,name) {
	
		
	var data = new FormData();
	data.append('id', name);	
	xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
	if(this.readyState==4 && this.status==200){
		document.getElementById(id).innerHTML=xhttp.responseText;
		document.getElementById(id).style.color = 'green';
		document.getElementById( "b"+name ).setAttribute('onclick','dummy()');
		
		}
	};
	xhttp.open("POST","approve.php",true);
	xhttp.send(data);
	
}

function remove(id,name) {
			
	var data = new FormData();
	data.append('id', name);	
	xhttp= new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
	if(this.readyState==4 && this.status==200){
		document.getElementById(id).innerHTML=xhttp.responseText;
		document.getElementById(id).style.color = 'red';
		document.getElementById( "button"+name ).setAttribute('onclick','dummy()');
		}
	};
	xhttp.open("POST","removeitem.php",true);
	xhttp.send(data);
	
}

function dummy() {
			
	console.log("dummy");
}
