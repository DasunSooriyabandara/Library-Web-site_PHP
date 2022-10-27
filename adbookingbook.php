<?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$id="";
$user_name="";
$bookid="";
$bookno="";
$bookname="";
$contno="";
$address="";
$date="";

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
	$posts[1] = $_POST["user_name"];
	$posts[2] = $_POST["bookid"];
	$posts[3] = $_POST["bookno"];
	$posts[4] = $_POST["bookname"];
	$posts[5] = $_POST["contno"];
	$posts[6] = $_POST["address"];
	$posts[7] = date('Y-m-d',strtotime($_POST['date']));
	return $posts;
}


//insert
if(isset($_POST['insert'])){
	$data = getPost();
	

	$insert_query="INSERT INTO `bookingbook`(`user_name`,`bookid`, `bookno`,`bookname`,`contno`,`address`,`date`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]')";
	try{
		$insert_result=mysqli_query($connect, $insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($connect)>0){
				echo '<script>alert("data inserted successfully")</script>';

			}else{
				echo '<script>alert("data are not inserted")</script>';
			}
		}
	}catch(Exception $ex){
		echo '<script>alert("error inserted")</script>';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book data</title>
	<style>

/* Create two equal columns that floats next to each other */
.columnl {
  float: left;
  width: 39%;
  
  height: 300px; /* Should be removed. Only for demonstration */
}
.columnr {
  float: right;
  width: 60%;
 padding-right: 5px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


	#text{

		height: 35px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 75%;
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
	padding-left: 50px;
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
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : rusl@lbr.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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
    
    <a  href="adaboutus.php">About Us</a>
    <a  href="adbranchers.php">Branchers</a>
    <a  href="adcontactus.php">Contact Us</a>
    
  </div>
</div>
  

<form method ="post"   action="" enctype="multipart/form-data">
	
	<h2>Insert Your booking Details	 </h2>	<center>
	<table >
		<tr>
	<td><h3>ID Number</h3>
  <input id="text" type="number"  name="id"   placeholder="ID No. /Automatic Number Genrates " value="<?php echo $id;?> " ></td>
	
	<td>	<h3>User name</h3>
	<input id="text" type="text" name="user_name"  placeholder="user name" value="<?php echo $user_name;?>">
</td>
</tr>
<tr><td>
	<h3>Book id</h3>
	<input id="text" type="text" name="bookid"  placeholder="book id" value="<?php echo $bookid;?>" ></td>
<td>
<h3>Book no</h3>
	<input id="text" type="text" name="bookno" placeholder="book no" value="<?php echo $bookno;?>" ></td>
</tr>
<tr><td>

<h3>Book name</h3>
	<input id="text" type="text" name="bookname" placeholder="book name" value="<?php echo $bookname;?>" ></td>
<td><h3>contno</h3>
	<input id="text" type="text" name="contno" placeholder="cont no" value="<?php echo $contno;?>" ></td>
</tr>
<tr><td>
<h3>Address</h3>
	<input id="text" type="text" name="address" placeholder="address" value="<?php echo $address;?>" ></td>
<td><h3>Date</h3>
	<input id="text" type="date" name="date" placeholder="date" value="<?php echo $date;?>" ></td>	</tr>
	</table>
<br><br>
			
			<input id="button" type="submit" name="insert" value="BOOK">
			
</form>
</center>
</body>
</html>