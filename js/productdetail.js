function loadProduct() {
			
			var id=localStorage.getItem("detail");
			var data = new FormData();
			data.append('search', id);
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					
					document.getElementById("body").innerHTML=xhttp.responseText;
					option();
				}
			};
			xhttp.open("POST","details.php",true);
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
