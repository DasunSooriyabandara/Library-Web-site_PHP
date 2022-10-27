<?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$user_name="";

$password="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database
try{
	$connect =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}
//get data from the form
function getPost()
{
	$posts = array();
	$posts[2] = $_POST["user_name"];
	
	$posts[3] = $_POST["password"];
	return $posts;
}




//edit
if(isset($_POST['update'])){
	$data = getPost();
	$update_query="UPDATE `users` SET password='$data[3]' WHERE user_name = '$data[2]'";
	try{
		$update_result=mysqli_query($connect, $update_query);
		if($update_result){
			if(mysqli_affected_rows($connect)>0){
				echo '<script>alert("data updated")</script>';
	
			}else{
				echo '<script>alert("data not updated")</script>';
			}
		}
	}catch(Exception $ex){
		echo '<script>alert("error in update")</script>';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>


 	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color:  #269f1e ;
		border: none;
	}

	#box{
			 align-items: center;
 
  
  margin-right: 200px;
  margin-left: 200px;

box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);

 
 
  margin: 120px auto;
  border-radius: 10px;
  
  

		background-color: grey;
		
		width: 300px;
		padding: 20px;
	}
  body {
  background-image: url('images/41.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
	</style>
</head>
<body >
	<div id ="box"> 

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;text-align: center;">Reset password</div>
			User name:<br><br>
			<input id="text" type="text" name="user_name" value="<?php echo $user_name;?>"><br><br>
			Password:<br><br>
			<input id="text" type="password" name="password"><br><br>
			Re enter Password:<br><br>
			<input id="text" type="password" name="password" value="<?php echo $password;?>"><br><br>
			<input id="button" type="submit" name="update" value="update">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input id="button" type="reset" value="Reset">
			<br><br>

			<a href="login.php">Click to login</a><br><br>
		</form>

	</div>
</body>
</html>