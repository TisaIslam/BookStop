function handle(e) {
	if(e.keyCode === 13){
		e.preventDefault();
		var s=document.getElementById("search").value;
		localStorage.setItem("search", s);
		window.location.href = "search";	
	}
}


function searchIt(){
		var s=localStorage.getItem("search");
            	var data = new FormData();
		data.append('search', s);
	    	xhttp= new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					
					document.getElementById("body").innerHTML=xhttp.responseText;
					option();
				}
			};
		xhttp.open("POST","search.php",true);
		xhttp.send(data);
    }


function option() {
	
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
