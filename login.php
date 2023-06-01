<html>
<head>
<title>Login Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="font-awesome.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="container" id="wrapper">
	<img src="images/53840.png"/>
	<form method="POST" action="Index.php" onsubmit="return Validate()" name="vform">
		<div class="form-input">
        <input type="text" name="username" placeholder="Enter Username">
        <div id="name_error" class="val_error">
        </div>
        <div class="form-input">
        <input type="email" name="email" placeholder="Email">
        <div id="email_error" class="val_error">
        </div>
        <div class="form-input">
        	<input type="password" name="password" placeholder="Enter Password">
        </div>
         <div class="form-input">
        	<input type="password" name="passwordconf" placeholder="Re-Enter Password">
        	<div id="password_error" class="val_error">
        </div>
        <input type="submit" name="submit" value="Signup" class="btn-login">
	</form>
	</br>
	
</div>
	<center><footer><p>LogIn page created by:<a href="#" class:"Footer-text"> Chirag Mehta</a></p></footer></center>
</body>
</html>

<script type="text/javascript">
	var username = document.forms["vform"] ["username"];
var email = document.forms["vform"] ["email"];
var password = document.forms["vform"] ["password"];
var passwordconf = document.forms["vform"] ["passwordconf"];

var name_error = document.getElementById("name_error");
var email_error = document,getElementById("email_error");
var password_error = document.getElementById("password_error");

username.addEventListner("blur",nameVerify,true);
email.addEventListner("blur",emailVerify,true);
password.addEventListner("blur",passwordVerify,true);

function  Validate()
{
	if(username.value == "")
	{
		username.style.border = "1px solid red";
		name_error.textContent = "Username is required";
		username.focus();
		return false;
	}

    if(email.value == "")
	{
		email.style.border = "1px solid red";
		email_error.textContent = "Email is required";
		email.focus();
		return false;
	}

	if(password.value == "")
	{
		password.style.border = "1px solid red";
		password_error.textContent = "Password is required";
		password.focus();
		return false;
	}

     
     if(password.value != passwordconf.value){
     	password.style.border = "1px solid red";
     	passwordconf.style.border = "1px solid red";
     	passwordconf.innerHTML = "please enter the same password";
     	return false;
     }
    
    function nameVerify(){
    	if(username.value !=""){
		name_error.innerHTML ="";	
		return true;
    	}
    }
    

    function emailVerify(){
    	if(email.value !=""){
		email_error.innerHTML ="";	
    	return true;
    	}
    }


    
    function passwordVerify(){
    	if(password.value !=""){
		password_error.innerHTML ="";	
    	return true;
    	}

    }







}

</script>