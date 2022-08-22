
<?php
require_once('../controller/rootheader.html');
?>

<html>
<head>
	<title>Seller Registration</title>

<script>  
function verify() {  
  var name= document.getElementById("name").value;
  if(name== "")
  {
    document.getElementById("messageN").innerHTML = "Fill the Name please <br>";
  }

  var email= document.getElementById("email").value;
  if(email== "")
  {
    document.getElementById("messageE").innerHTML = "Fill the Email Address please <br>";
  }

  var pw = document.getElementById("password").value;  
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
  } 
}  
</script>  

<script>
      
            function change(){
                document.getElementsByTagName('p1')[0].innerHTML = "username exits";
            }
            function getname(){
                let username = document.getElementById('username').value;
            }
            function ajax(){
                let username = document.getElementById('username').value;
                let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'userCheck.php?username='+username, true);
                xhttp.open('POST', 'userCheck.php', true);
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('head').innerHTML = this.responseText;
                    }             
                }
                
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");     
                xhttp.send('username='+username);
            }
        </script>

</head>
<body>
	<form action="../controller/registrationCheck.php" method="post" enctype="" onsubmit ="return verify(this); return false; " >
		<fieldset>
			<legend>Create Account</legend>
				Name: <input type="text" name="name" value=""/> <br>
				<span id = "messageN" style="color:red"> </span> 
				Username: <input type="text" name="username" value="" onclick="ajax()"/> <br>
				Email: <input type="email" name="email" value=""/> <br>
				<span id = "messageE" style="color:red"> </span> 
				Password: <input type="password" name="password" value=""/> <br>
				<span id = "message" style="color:red"> </span> 
				Gender:
  					<input type="radio" name="gender" value="female">Male
 					<input type="radio" name="gender" value="male">Female
  					<input type="radio" name="gender" value="other">Other
  					<br><br>
				<input type="submit" name="submit" value="Submit"/>
				<a href="login.html"> Log In </a>
		</fieldset>
	</form>
</body>
</html>
