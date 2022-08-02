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

<script>
      

            function change(){
                document.getElementsByTagName('p1')[0].innerHTML = "username exits";
            }
            function getname(){
                let username = document.getElementById('username').value;
                /*if(username == ""){
                    document.getElementsByTagName('p1')[0].innerHTML = "Null value";
                }else{
                    document.getElementsByTagName('hp1')[0].innerHTML = username;
                }*/

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