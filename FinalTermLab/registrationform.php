
<html>
<head>
	<title>Seller Registration</title>
</head>

<script>  
function verifyPassword() {  

  var name= document.getElementById("name").value;
  if(name== "")
  {
  	
  }
  var pw = document.getElementById("pswd").value;  
  if(pw == "") { 
     document.getElementById("message").innerHTML = "Fill the password please <br>";  
     return false;  
  }  
   
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "Password length must be atleast 8 characters<br>";  
     return false;  
  }  
   
  if(pw.length >=24) {  
     document.getElementById("message").innerHTML = "Maximum Password length 24 characters<br>";  
     return false;  
  } else {  
     alert("Password is correct");  
  }  
}  
</script>  

<body>
	<form  onsubmit ="return verifyPassword()">
		<fieldset>
			<legend>Create Account</legend>
				Name: <input type="text" id="name" name="name" value="" required /> <br>
				Username: <input type="text" name="username" value="" required /> <br>
				Email: <input type="email" name="email" value="" required /> <br>
				Password: <input type="password" id = "pswd" value=""/> <br>
				<span id = "message" style="color:red"> </span> 
				Gender:
  					<input type="radio" name="gender" value="female">Male
 					<input type="radio" name="gender" value="male">Female
  					<input type="radio" name="gender" value="other">Other
  					<br><br>
				<input type="submit" value="Submit"/>
				<a href="login.html"> Log In </a>
		</fieldset>
	</form>
</body>
</html>