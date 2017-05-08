function checkp() {
			var data = new FormData();
			data.append('password', document.getElementById("cpass").value);
			var x=document.getElementById("cpass").value;
			if(x.length < 6){
				document.getElementById("showMessage").innerHTML="Password must be 6 characters or more!";
				return;
			}
			xhttp= new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					
					if(xhttp.responseText.localeCompare("Success")==0){
						window.location.href = "changePass";
					}	
					else
					document.getElementById("showMessage").innerHTML=xhttp.responseText;
				}
			};
			
			xhttp.open("POST","checkpass.php",true);
			xhttp.send(data);
}

function checker() {

			var a=document.getElementById("password").value;
			var b=document.getElementById("reenter").value;	
			if(a.length < 6){
				document.getElementById("showMessage").innerHTML="Password must be 6 characters or more!";
				return;
			}
			if(a.localeCompare(b)!=0){
				document.getElementById("showMessage").innerHTML="Password does not match!";
				return;
			}
			var data = new FormData();
			data.append('password', document.getElementById("password").value);
			xhttp= new XMLHttpRequest(); 
			xhttp.onreadystatechange = function() {
				console.log(this.readyState+" "+this.status+" "+xhttp.responseText);
				if(this.readyState==4 && this.status==200){
					if(xhttp.responseText.localeCompare("Success")==0){
						window.location.replace("account");
					}	
					else
					document.getElementById("showMessage").innerHTML=xhttp.responseText;
				}
			};
			xhttp.open("POST","updatePass.php",true);
			xhttp.send(data);
		}
