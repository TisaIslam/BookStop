function loader() {
			
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					if(xhttp.responseText.localeCompare("denied")==0)
					{
						window.location.href="index";
					}
					else
					document.getElementById("body").innerHTML=xhttp.responseText;
				}
			};
			xhttp.open("POST","pending.php",true);
			xhttp.send();
		}
