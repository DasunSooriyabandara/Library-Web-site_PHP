<?php  
session_start();

include("conection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name)&& !empty($password) && !is_numeric($user_name)) 
	{
		//read
		
		$query ="select * from users where user_name = '$user_name' limit 1 ";

		$result = mysqli_query($con,$query);

		if ($result) 
		{
			if($result && mysqli_num_rows($result) > 0)	
			{
	 			$user_data = mysqli_fetch_assoc($result);
	 			if($user_data['password'] === $password)
	 			{
	 				$_SESSION['user_id'] = $user_data['user_id'];
	 				header("Location: index.php");
					die;
	 			}

			}
		}
		
		echo '<script>alert("Wrong username or Password")</script>';  
	}else
	{
		echo '<script>alert("Wrong username or Password")</script>'; 
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>


 	<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
	background-image: url('images/bb.jpg');
	background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}


h1 {
	font-weight: bold;
	margin: 0;

}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #00cc66;
	 background: linear-gradient(to bottom, #00cc66 0%, #009900 100%);
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

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 700px;
	max-width: 100%;
	min-height: 400px;
	


}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
	opacity: 0.9;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
	}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);

}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 55%;
	width: 45%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);

	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;


}

.overlay-left {
	transform: translateX(-20%);
	



}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
	 background: linear-gradient(to top, #006600 0%, #33cc33 100%);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);


}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</head>
<body >

	
<div class="container" id="container">
	
	<div class="form-container sign-in-container" style="padding-left: 15px;" >
		<form method="post">
			<img src="	images/ll.png" width="60px" height="60px"; >
			<h1 style="color:    #02340b   ;">Sign in<br>User</h1>
			
			<input id="text" type="text" placeholder="username" name="user_name"><br><br>
			<input id="text" type="password" placeholder="password" name="password"><br><br>
			
			<a href="uforgetpw.php">Forgot your password?</a>
			<button  type="submit" value="Login">login</button>
		</form>
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right ">
				<h1>Hello, there!</h1>
				<p>Enter your personal details and start journey with us</p>
				 <a href="signup.php" target="_blank"><button class="ghost" id="signUp" onclick="signup.php">Sign Up</button></a>
				
			</div>
		</div>
	</div>
</div>




	
</body>
</html>