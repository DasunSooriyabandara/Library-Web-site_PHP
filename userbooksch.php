<?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$id="";
$bookno="";
$name="";
$pages="";
$author="";
$publisher="";
$data =0;
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
	
	
	$posts[2] = $_POST["name"];
	
	
	return $posts;
}


//insert

//search
if(isset($_POST['search']))
{
	
	$data = getPost();
	$search_query="SELECT * FROM bookdata WHERE name ='$data[2]'";
	$search_result=mysqli_query($connect, $search_query);
		if($search_result)
		{
			if(mysqli_num_rows($search_result))
			{
				while($rows = mysqli_fetch_array($search_result))
				{
					$id = $rows['id'];
					$bookno = $rows['bookno'];
					$name = $rows['name'];
					$pages = $rows['pages'];
					$author = $rows['author'];
					$publisher = $rows['publisher'];

				}
				echo '<script>alert(" data are available")</script>';
			}else{
				echo '<script>alert("no data are available")</script>';
			}
		} else{
			echo '<script>alert("result error")</script>';
		}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User book data</title>
	<style>

/* Create two equal columns that floats next to each other */
.columnl {
  float: left;
  width: 49%;
  
  height: 300px; /* Should be removed. Only for demonstration */
}
.columnr {
  float: center;
  width: 100%;
 padding: 5px;
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
</style>


	<link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/adindex.css">

</head>
<body>
<div class="topnav">
  
  <div class="login-container">
     

    
  		 

      <a href="login.php" target="_blank"><input type="image" src="images/loginindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
      <a href="signup.php" target="_blank"><input type="image" src="images/signupindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	<a href="admincq.php" target="_blank"><input type="image" src="images/admin.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	<a href="userprofilet1.php" target="_blank"><input type="image" src="images/acc.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 
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

    <a  href="index.php">Home</a>
    
    <a href="aboutus.php">About Us</a>
    <a href="branchers.php">Branchers</a>
    <a href="contactus.php">Contact Us</a>
    
  </div>
</div>
<div class="row">
<div class="columnla" style="	padding-left: 	10px;"	 >
<form method ="post"   action="" enctype="multipart/form-data">
	<h2> (Search a Book )</h2>
	<center>
	<h4>Book Name</h4>
	<input id="text" type="text" name="name"  placeholder="book name" value="<?php echo $name;?>" ><br><br>
	
	<input id="button" type="submit" name="search" value="find"><br><br>		
		
	</center>
		

			
			
</form>
<center>
<a href="allbook.php" target="_blank"><button id="button2" onclick="allbook.php" >All Books</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="bookingbook.php" target="_blank"><button id="button2" onclick="bookingbook.php" >Booking a book</button></a>	
     </center>
</div>

<h2>Book Details</h2>
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

$sql = "SELECT id,bookno,name,pages,author,publisher,status,image FROM bookdata WHERE name ='$data[2]'";
$result = $conn->query($sql);

echo "<center><table border='1'>
<tr>
<th>Book ID</th>
<th>Book No</th>
<th>Name</th>
<th>Pages</th>
<th>Author</th>
<th>Publisher</th>
<th>Status</th>
<th>Image</th>
<th>booking</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['bookno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['pages'] . "</td>";
echo "<td>" . $row['author'] . "</td>";
echo "<td>" . $row['publisher'] . "</td>";
echo "<td>" . $row['status'] . "</td>";

?>
<td><?php
echo '<img src="data:image;base64,'.base64_encode($row['image']) .'" alt="Image" style="width:100px; height:100px">';
?><td><a href="bookingbook.php" target="_blank"><button id="button2" onclick="bookingbook.php" >Book</button></a></td>
<?php
echo "</tr></center> ";


    }
} else {
    echo "0 results";
}

$conn->close();
echo "	";
?>



</div>  
 

</body>

</html>