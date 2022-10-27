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




?>
<!DOCTYPE html>
<html>
<head>
	<title>admin book data</title>
	<style>



	#text{

		height: 35px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 75%;
	}

	#button2{

    padding: 10px;
    width: 150px;
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
.button4 {
  border-radius: 60px;
  border: 1px solid #00cc66;
   background: linear-gradient(to bottom, #00cc66 0%, #009900 100%);
  color: #FFFFFF;
  font-size: 14px;
  font-weight: bold;
  padding: 5px 5px;
  width:  150px;
  height:   70px;
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

<h2>Booking details</h2>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_sample_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id,user_name,bookid,bookno,bookname,contno,address,date FROM bookingbook";
$result = $conn->query($sql);

echo "<center><table border='1'>
<tr>
<th>Search ID</th>
<th>user_name</th>
<th>bookid</th>
<th>bookno</th>
<th>bookname</th>
<th>contno</th>
<th>address</th>
<th>date</th>

</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['bookid'] . "</td>";
echo "<td>" . $row['bookno'] . "</td>";
echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['contno'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['date'] . "</td>";



echo "</tr></center>";


    }
} else {
    echo "0 results";
}

$conn->close();

?>
<center>

      <a href="adsetstatus.php" target="_blank"><button class="button4" onclick="adsetstatus.php" >Update status</button></a> <br><br>
     </center>

</body>

</html>