 <?php 

 session_start();

include("conection.php");
include("functions.php");


   ?>

   <!DOCTYPE html>
<html>
<head><title>User Check</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/homecss.css">

</head>
<style >
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
  height: 370px;
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
  width: 375px;
  height: 370px;
  background: linear-gradient(to top, #006600 0%, #33cc33 100%);
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  color:  #ffffff ;
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
 
 width: 375px;
  height: 370px;
  background: linear-gradient(to bottom, #006600 0%, #33cc33 100%);
  
}


</style>
<body>
<center><br><br>
	<h1 style="font-size: 70px;">User</h1>
<table >
  <tr ><td style="padding: 60px;">
 
  <a href="login.php" target="_blank"><input type="image" src="images/login.png" class="image" style="width: 200px;height: 220px;" alt="Submit"></a> 
  

</td>
<td style="padding: 60px;">
 
  <a href="signup.php" target="_blank"><input type="image" src="images/signup.png" class="image" style="width: 200px;height: 220px;" alt="Submit"></a> 
  

</td>
  
</tr>
<tr>
<td style="font-weight:   bold; color:  #f9fefa ; font-size: 20px; "  >Login</td>
<td style="font-weight:   bold; color:  #f9fefa ; font-size: 20px;">Sign up</td>
</tr>
</table>
</center>

     
  
</body>
</html>