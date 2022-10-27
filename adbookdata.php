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
	$posts[1] = $_POST["bookno"];
	$posts[2] = $_POST["name"];
	$posts[3] = $_POST["pages"];
	$posts[4] = $_POST["author"];
	$posts[5] = $_POST["publisher"];
	$posts[6] = $_POST["status"];
	return $posts;
}


//insert
if(isset($_POST['insert'])){
	$data = getPost();
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

	$insert_query="INSERT INTO `bookdata`(`bookno`,`name`, `pages`,`author`,`publisher`,`status`,`image`) VALUES ('$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$file')";
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
//search
if(isset($_POST['search']))
{
	$data = getPost();
	$search_query="SELECT * FROM bookdata WHERE id ='$data[0]'";
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
					$status = $rows['status'];

				}
			}else{
				echo '<script>alert("no data are available")</script>';
			}
		} else{
			echo '<script>alert("result error")</script>';
		}

}
//delete
if(isset($_POST['delete'])){
	$data = getPost();
	$delete_query = "DELETE FROM `bookdata` WHERE id = '$data[0]'";
	try{
		$delete_result = mysqli_query($connect, $delete_query);
		if($delete_result){
			if(mysqli_affected_rows($connect)>0)
			{
				echo '<script>alert("data deleted")</script>';
			}else{
				echo '<script>alert("data not deleted")</script>';
			}
		}
	}catch(Exception $ex){
		echo '<script>alert("error in delete")</script>';
	}
}

//edit
if(isset($_POST['update'])){
	$data = getPost();
	$update_query="UPDATE `bookdata` SET `bookno`='$data[1]',name='$data[2]',pages='$data[3]',author='$data[4]',publisher='$data[5]',status='$data[6]',image='$file' WHERE id = '$data[0]'";
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
	<title>admin book data</title>
	<style>

/* Create two equal columns that floats next to each other */
.columnl {
  float: left;
  width: 30%;
  
  height: 300px; /* Should be removed. Only for demonstration */
}
.columnr {
  float: right;
  width: 69%;
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
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : RUSL@LBR.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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
<div class="row">
<div class="columnl" style="	padding-left: 	10px;"	 >
<form method ="post"   action="" enctype="multipart/form-data">
	<h2>ID Number<br>	 (Use to ADD/Update/Delete Book data)</h2>
  <input id="text" type="number"  name="id"   placeholder="ID No. /Automatic Number Genrates" value="<?php echo $id;?>" >
	
		<h3>book number</h3>
	<input id="text" type="text" name="bookno"  placeholder="book number" value="<?php echo $bookno;?>">


	<h3>Book Name</h3>
	<input id="text" type="text" name="name"  placeholder="book name" value="<?php echo $name;?>" >

<h3>Pages</h3>
	<input id="text" type="text" name="pages" placeholder="pages" value="<?php echo $pages;?>" >
<h3>author</h3>
	<input id="text" type="text" name="author" placeholder="author" value="<?php echo $author;?>" >
<h3>publisher</h3>
	<input id="text" type="text" name="publisher" placeholder="publisher" value="<?php echo $publisher;?>" >
<h3>status</h3>
	<input id="text" type="text" name="status" placeholder="status" value="<?php echo $status;?>" >
<h3>Book Image</h3>
<input type="file" name="image" id="image"><br><br>
			
			<input id="button" type="submit" name="insert" value="Add">
			<input id="button" type="submit" name="update" value="update"><br><br>
			<input id="button" type="submit" name="delete" value="delete">
			<input id="button" type="submit" name="search" value="find"><br>
</form>
</div>
<div class="columnr"  >
<h2>Book Data Update | Delete</h2>
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

$sql = "SELECT id,bookno,name,pages,author,publisher,status,image FROM bookdata";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Search ID</th>
<th>Book No</th>
<th>Name</th>
<th>Pages</th>
<th>Author</th>
<th>Publisher</th>
<th>Status</th>
<th>Image</th>

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

echo "</tr>";


    }
} else {
    echo "0 results";
}

$conn->close();
?>
</div>  
</div>  

</body>
</html>