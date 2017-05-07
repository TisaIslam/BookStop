function checker() {
			var data = new FormData();
			data.append('email', document.getElementById("email").value);
			document.getElementById("showMessage").innerHTML="Please wait..";
			document.getElementById("showMessage2").innerHTML="";
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					if(xhttp.responseText.indexOf("Check Your email")!=-1){
						document.getElementById("showMessage").innerHTML=xhttp.responseText;
						document.getElementById("showMessage").style.color = 'green';
						document.getElementById("showMessage2").innerHTML="";
						var delayMillis = 2000;
						setTimeout(function() {
							window.location.replace("login");
						}, delayMillis);
					}	
					else{
						document.getElementById("showMessage2").innerHTML=xhttp.responseText;
						document.getElementById("showMessage").innerHTML="";
					}
				}
			};
			xhttp.open("POST","report.php",true);
			//xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.send(data);
		}
