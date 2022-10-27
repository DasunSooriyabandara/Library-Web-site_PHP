<?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$id="";

$status="";
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
	$posts[0] = $_POST['id'];
	
	$posts[6] = $_POST["status"];
	return $posts;
}




//edit
if(isset($_POST['update'])){
	$data = getPost();
	$update_query="UPDATE `bookdata` SET status='$data[6]' WHERE id = '$data[0]'";
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
	<title>Admin Set Status</title>
	<style>

/* Create two equal columns that floats next to each other */


	#text{

		height: 35px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 50%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color:  #269f1e ;
		border: none;
	}
table{
	width: 80%;
}
th{
	text-align: center;
	padding: 10px;
}
td{
	text-align: center;
	padding: 5px;
}
h3{
	padding-left: 300px;
}
.button4 {
	border-radius: 60px;
	border: 1px solid #00cc66;
	 background: linear-gradient(to bottom, #00cc66 0%, #009900 100%);
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
	padding: 5px 5px;
	width: 	150px;
	height: 	70px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button4:active {
	transform: scale(0.95);
}

.button4:focus {
	outline: none;
}
</style>


	<link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/adindex.css">

</head>
<body>
<div class="topnav">
  
  <div class="login-container">
     

    
  		 

     <a href="adlogin.php" target="_blank"><input type="image" src="images/loginindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
      <a href="adsignup.php" target="_blank"><input type="image" src="images/signupindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	<a href="usercq.php" target="_blank"><input type="image" src="images/useridx.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	
  </div>
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : RUSL@lbr.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="images/1111.jpg" style="width:100%">
  

</div>

<div class="mySlides fade">
  
  <img src="images/222.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="images/333.jpg" style="width:100%">
  
</div>

</div>

 <div hidden="">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



<script>

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<div class="header">
  <img src="images/logo.png" class="size">
  <span class="navbartxt ">
    RUSL LIBRARY
  </span>
  <div class="header-right">

    <a  href="adindex.php">Home</a>
    
    <a href="adaboutus.php">About Us</a>
    <a href="adbranchers.php">Branchers</a>
    <a href="adcontactus.php">Contact Us</a>
    
  </div>
</div>
<center>
<form method ="post"   action="" enctype="multipart/form-data">
	<h2> Update book availability</h2>
	<h3>BOOK ID Number</h3>
  <input id="text" type="number"  name="id"   placeholder="ID No. /Automatic Number Genrates" value="<?php echo $id;?>" >
	
		
<h3>status</h3>
	<input id="text" type="text" name="status" placeholder="status" value="<?php echo $status;?>" ><br><br><br>

			
			
			<input class="button4" type="submit" name="update" value="update">
			<br>
</form>
</center>


</body>
</html>