  <?php 

 session_start();

include("conection.php");
include("functions.php");

$user_data = check_login($con);
   ?>

 <!DOCTYPE html>
<html>
<head><title>User Home</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/firstindex.css">

  <style>
.container2 {
  
  width: 100%;
}

.image2 {
  opacity: 1;
  display: block;
  width: 100%;
  height: 100%;
  transition: .5s ease;
  backface-visibility: hidden;
  padding-left: 	20px;
  
}

.middle2 {
  transition: .5s ease;
  opacity: 0;
 
  top: 50%;
  left: 50%;
  transform: translate(2%, -350%);
  -ms-transform: translate(2%, -2%);
  text-align: center;
}

.container2:hover .image2 {
  opacity: 0.3;
}

.container2:hover .middle2 {
  opacity: 1;
}
.text2 {
 
  color: white;
  font-size: 16px;
  padding: center;
}
/* Fun Facts */

.fun-facts {
	margin-top: 100px;
	background-image: url(images/5555.jpg);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	
	color: #fff;
}

.fun-facts span {
	text-transform: uppercase;
	font-size: 15px;
	color: #fff;
	letter-spacing: 1px;
	margin-bottom: 10px;
	display: block;
}

.fun-facts h2 {
	font-size: 36px;
	font-weight: 600;
	margin-bottom: 35px;
}

.fun-facts em {
	font-style: normal;
	color: #a4c639;
}

.fun-facts p {
	color: #fff;
	margin-bottom: 40px;
}

.fun-facts .left-content {
	margin-right: 45px;
}

.button3 {

	border-radius: 20px;
	border: 1px solid #00cc66;
	 background: linear-gradient(to bottom, #00cc66 0%, #009900 100%);
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 5px 5px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button3:active {
	transform: scale(0.95);
}

.button3:focus {
	outline: none;
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
</head>
<body>
<div class="topnav">
  
  <div class="login-container">
     

    
  		 

      <a href="login.php" target="_blank"><input type="image" src="images/loginindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
      <a href="signup.php" target="_blank"><input type="image" src="images/signupindex.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	<a href="admincq.php" target="_blank"><input type="image" src="images/admin.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 	
    	<a href="userprofilet1.php" target="_blank"><input type="image" src="images/acc.png" class="image" style="width: 50px;height: 50px;" alt="Submit"></a> 
  </div>
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : rusl@lbr.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello,<?php echo $user_data['user_name']; ?></h5>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/1111.jpg" style="width:100% ">
  

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

    <a class="active" href="index.php">Home</a>
    
    <a href="aboutus.php">About Us</a>
    <a href="branchers.php">Branchers</a>
    <a href="contactus.php">Contact Us</a>
    
  </div>
</div>
  


  

<br><br><br>  <br>

  <h1>MAIN LIBRARY  </h1>
  
  <p style="text-align: 	center;	padding-left: 	150px; padding-right: 	150px; font-size: 	17px; line-height: 30px; "	>Main Library is the focal point of the Library Network of Rajarata University which consist of the branch Libraries of the Faculty of Medicine & Faculty of Science and it caters to Faculties of Arts, Education, Graduate Studies, Law and Management & Finance.  The Main Library is located at Philip Gunawardena Mawatha (Reid Avenue).
Special Offers</p><br><br>

<h1>Search Books </h1><br><br><br><br><br>
<center>
<a href="userbooksch.php" target="_blank"><button class="button4"  onclick="userbooksch.php" >Search book</button></a>
</center><br><br><br><br><br>
<h1>Branchers </h1><br><br>

<table border="0 " width="  100%"> 
	
<tr > 
<td> <br> <div class="container2">
	<center><img src="images/21.jpg" alt="rooms" class="image2" style="width:80% "  ></center>
		<div class="middle2">
			
<div class="text2">	<button class="button3" onclick="window.location.href='branchers.php'"><b>Read More</b></button></div>
 </div>
</div>
</td>
<td><div class="container2">
	<center><img src="images/22.jpg" alt="rooms" class="image2" style="width:80% "  ></center>
		<div class="middle2">
			
<div class="text2">	<button class="button3" onclick="window.location.href='branchers.php'"><b>Read More</b></button></div>
 </div>
</div> </td>
<td><div class="container2">
	<center><img src="images/23.png" alt="rooms" class="image2" style="width:80% "  ></center>
		<div class="middle2">
			
<div class="text2">	<button class="button3" onclick="window.location.href='branchers.php'"><b>Read More</b></button></div>
 </div>
</div> </td>
</tr>

  

    
 
<tr>
  
 <td><br> <b> Medical Library</b>


</td>
<td><br><b> Science library</b>
</td>
<td><br><b> Technology library</b></td>

</tr>

 


</table>
<div class="fun-facts">
      
            
              <p align="center">
 <center>
 	<br><br><h2>Opening Hours</h2>
<table>
	<tr  >
		<th>Sections</th>
		<th>Weekdays</th>
		<th>Weekends</th>	
	</tr>
	<tr>
		<td style="padding: 20px;">Counter</td>
		<td style="padding: 20px;">7.30a.m.-6.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-6.00p.m.</td>	
	</tr>
 	<tr>
		<td style="padding: 20px;">E-Resource Center</td>
		<td style="padding: 20px;">7.30a.m.-6.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-7.00p.m.</td>	
	</tr><tr>
		<td style="padding: 20px;">Permanent Reference</td>
		<td style="padding: 20px;">8.30a.m.-6.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-6.00p.m.</td>	
	</tr><tr>
		<td style="padding: 20px;">Law</td>
		<td style="padding: 20px;">7.30a.m.-6.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-6.00p.m.</td>	
	</tr><tr>
		<td style="padding: 20px;">Reference</td>
		<td style="padding: 20px;">6.30a.m.-6.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-7.00p.m.</td>	
	</tr><tr>
		<td style="padding: 20px;">Lending</td>
		<td style="padding: 20px;">7.30a.m.-7.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-6.00p.m.</td>	
	</tr><tr>
		<td style="padding: 20px;">Periodicals Section</td>
		<td style="padding: 20px;">8.30a.m.-7.00p.m.</td>
		<td style="padding: 20px;">8.30a.m.-7.00p.m.</td>	
	</tr> 	
 	
</center>  
</table>

</p>
            </div>
          
          
         
 
<table>
  <tr>
    <td>
  <div class="p"><h2>Our Mission</h2>



The Mission is to provide access to the library and information services in an efficient, effective and useful manner to support teaching, learning and research activities of the intellectual community by making resource materials available, and by assisting users to be acquainted with skills in locating information deemed necessary in the modern information age.
 <br> 


</div>
  </td>
  <td><br><br><br><br><br>
    <video width="700" controls>
  <source src="images/vv.mp4" type="video/mp4">
  
  Your browser does not support HTML video.
</video>
  </td>
</tr>
</table >

  



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
        <td style="text-align: left; padding-top:  50px; padding-right: 30px;">info@rusllibrary .com<br>
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
  

   