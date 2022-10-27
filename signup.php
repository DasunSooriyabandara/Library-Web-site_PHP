<?php  
session_start();

include("conection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$tpno = $_POST['tpno'];
	if (!empty($user_name)&& !empty($password) && !empty($email) && !empty($address) && !empty($tpno) &&!is_numeric($user_name)) 
	{
		$user_id = random_num(20);
		$query ="insert into users (user_id,user_name,password,email,address,tpno) values ('$user_id','$user_name','$password','$email','$address','$tpno')";
		mysqli_query($con,$query);
		header("Location: login.php");
		die;

	}else
	{
		echo "please enter valid information";
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
 	<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  background-image: url('images/bb.jpg');
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 750px;
  height: 470px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 325px;
  height: 470px;
  background: linear-gradient(to top, #006600 0%, #33cc33 100%);
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}


button {
	border-radius: 20px;
	border: 1px solid #00cc66;
	background: linear-gradient(to top, #006600 0%, #33cc33 100%);
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
 padding-top: 30px;
 padding-left: 5px;
 width: 325px;
  height: 470px;
  
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

.thumbnail__content {text-align:  center;
padding-top: 80px;}
h1,
h2 {
  font-weight: 300;
  color: rgba(255,255,255,1);
}
.heading--primary {font-size: 1.999rem;}
.heading--secondary {font-size: 1.414rem;}



	</style>
	</head>
<body>
<div id="login-box">
  <div class="right">
    <h1 style="color: #141414";>Sign up</h1>
    <form method="post">
    <input type="text" name="user_name" placeholder="Username" />
    
    <input type="password" name="password" placeholder="Password" />
    <input type="text" name="email" placeholder="E-mail" />
     <input type="text" name="address" placeholder="Address" />
     <input type="text" name="tpno" placeholder="Telephone no:" />
    <button class="ghost" id="signIn">Register</button>
</form>



  </div>
  
  <div class="left ">
     <div class="thumbnail__content ">
      <h1 class="heading--primary">Welcome to Library.</h1>
      <h2 class="heading--secondary">Are you ready to join us?<br>	User</h2>
    </div><br><br>
    <center>
    <a href="login.php" target="_blank"><button class="ghost" id="signUp" onclick="login.php">login</button></a>
  </center>
  </div>
  <div class="or">OR</div>
</div>
</body>
</html>