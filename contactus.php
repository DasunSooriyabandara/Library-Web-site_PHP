  <?php 

$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$Name="";
$email="";
$subject="";
$message="";


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
  $posts[0] = $_POST["Name"];
  $posts[1] = $_POST["email"];
  $posts[2] = $_POST["subject"];
  $posts[3] = $_POST["message"];
  
  return $posts;
}


//insert
if(isset($_POST['insert'])){
  $data = getPost();
  

  $insert_query="INSERT INTO `contactus`(`Name`, `email`, `subject`, `message`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
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
<head><title>Contact Us</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/contactuscss.css">

<style>
.box3 {
  background-color:  #f0f0f3 ;
  width: 95%;
  
  padding: 30px;
  margin: 20px;
}
</style>
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
  <div class="numbertext">1 / 3</div>
  <img src="images/1111.jpg" style="width:100%">
  

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/222.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
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
    
    <a  href="aboutus.php">About Us</a>
    <a  href="branchers.php">Branchers</a>
    <a class="active" href="contactus.php">Contact Us</a>
    
  </div>
</div>
  


  

<br><br>
<h1>Contact Us | RUSL Library</h1>
      <h2>Contact</h2>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Send an Email. All fields with an asterisk (*) are required.<br><br><br>
 <form method ="post"   action="" enctype="multipart/form-data">     
<table   style=" width: 100%">
  <tr>
    <td>
    Name :*</td><td><input type="text" name="Name" size="80" value="<?php echo $Name;?>">
    </td>
    <td rowspan="4" style="padding-right: 0px"><img src="images/41.jpg" width="350px" height="250px">
      <br>
      <h3>RUSL Library</h3>
      <h3>&#9993;  Email:</h3>
      &nbsp;&nbsp;Rusllibrary@gmail.com<br><br>
      <h3>&#9742;  Contact:</h3>
      &nbsp;&nbsp;07714588785<br>
      <h3>&#127968;   Location:</h3>
      &nbsp;&nbsp;NO:100,Horowpathana rd,<br>Mihinthale,Sri Lanka
    </td>
  </tr>
<tr>
    <td>
    Email :*</td><td><input type="email" name="email"  value="<?php echo $email;?>">
    </td>
  </tr>
<tr>
    <td>
    Subject :*</td><td><input type="text" name="subject" value="<?php echo $subject;?>">
    </td>
  </tr>
  <tr>
    <td>
    Message :*</td><td><textarea style="border-radius: 7px;"  name="message" rows="10" cols="50" value="<?php echo $message;?>">Type Your Message</textarea>
    </td>
  </tr>
</table>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input class="input" type="submit" name="insert" value ="Submit" style="color: #e2e6f0"></td> &nbsp
    <input class="input" type="Reset" name="Reset" style="color: #e2e6f0"></td>
  </form>  
 <div id="pattern" class="pattern">
      <div class="map">
      </div>
  </div>

  
  
     <footer>
    <table   width="50%" align="left" style="color: white;">
      <tr class="tr" >

        <th style="text-align: left;">
          RUSL Library <br>
        </th>
        <th style="text-align: left;">Contact
          <br>
        </th>
        
      </tr>
      <tr>
       <td style="text-align: left; padding-top:  10px; padding-right: 30px;">
          The National Library is mainly a research and a reference library and it is the main library and information centre in Sri Lanka. It intends to provide library resources as well as information to all Sri Lankans through the National Library. The library has five floors with a floor area of 11,250 sqm. and 866 meters of shelving.There are three reading areas with a seating capacity for 320 readers and several special study rooms, air conditioned auditorium with 145 seats and a conference room with 30 seats.  <br>
        </td>
        <td style="text-align: left; padding-top:  50px; padding-right: 10px;">info@rusllibrary .com<br>
  library@rusl.com<br>
  
 +94 77 0100001 <br>
 +94 37 4565222 <br>
  NO: 100,<br>
  kalagedihena,<br>
    Yakkala,<br>
     Sri Lanka.
          <br>
        </th>
        
      </tr>
      

    </table>
       <iframe align="right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6730694015023!2d80.25535361477695!3d7.610509094512428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae32d94d69a5c39%3A0x758509008aa4ec7f!2sWariyapola!5e0!3m2!1sen!2slk!4v1619037868754!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


     </iframe><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <center>
     

  All right recived &copy 2021 | Developed by Mark I<br><br></p><br><hr></center>
  </footer>
  

   