function loadtext() {
			var s=document.getElementById('text').name;
			var st=document.getElementById('others').name;
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					document.getElementById("wrap").innerHTML=xhttp.responseText;
					//document.getElementById("showMessage").innerHTML=xhttp.responseText;
				}
			};

			xhttp.open("POST","fetchtext.php",true);
			
			xhttp.send();
}


function loadOthers() {
			var s=document.getElementById('text').name;
			var st=document.getElementById('others').name;
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					document.getElementById("wrap").innerHTML=xhttp.responseText;
					//document.getElementById("showMessage").innerHTML=xhttp.responseText;
				}
			};

			xhttp.open("POST","fetchOthers.php",true);
			xhttp.send();
}
