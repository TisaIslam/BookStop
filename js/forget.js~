function checker() {
			var data = new FormData();
			data.append('email', document.getElementById("email").value);
			document.getElementById("showMessage").innerHTML="Please wait..";
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					//if(xhttp.responseText.localeCompare("check your email")==0){
						document.getElementById("showMessage").innerHTML=xhttp.responseText;
						var delayMillis = 2000;
						setTimeout(function() {
							window.location.replace("login");
						}, delayMillis);
					//}	
					//else
						//document.getElementById("showMessage").innerHTML=xhttp.responseText;
				}
			};
			xhttp.open("POST","report.php",true);
			//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(data);
		}
