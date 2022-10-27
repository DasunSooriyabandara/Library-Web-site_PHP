  <?php 

 session_start();

include("conection.php");
include("functions.php");

$user_data = check_login($con);
   ?>

 <!DOCTYPE html>
<html>
<head><title>About us</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/firstindex.css">

<style>
.box3 {
  background-color: lightgrey;
  width: 90%;
  
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
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : rusl@lbr.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hello,<?php echo $user_data['user_name']; ?></h5>
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
    
    <a class="active" href="aboutus.php">About Us</a>
    <a href="branchers.php">Branchers</a>
    <a href="contactus.php">Contact Us</a>
  </div>
</div>
  


  

<br><br><br>  <br>
<center>
<div class="box3" >
  <h4>Introduction to Library Network</h4>
  The Library Network of the Rajarata University consists of the Main Library and two branch libraries. The Main Library, which occupies a six-storied building that is situated between the Faculty of Law and the Faculty of Arts, has its entrance at the Philip Gunawardena Mawatha. This library caters for the Faculties of Arts, Education, Graduate Studies, Law and Management and Finance. The two branch libraries are located in the Faculties of Medicine and Science.
</div>
<div class="box3" >
  <h4>Vision</h4>
  To support the university’s vision in building synergies between knowledge, education and research, by striving to create an environment conducive to learning, teaching and intellectual advancement.
</div>
<div class="box3" >
  <h4>Mission</h4>
  To underpin the mission of the university, by providing high-quality service for the staff, students and the researchers to satisfy their quest for knowledge.

</div>
<div class="box3" >
  <h4>Objectives</h4>
  <p style="text-align: left; font-size: 16px;">
    1) To provide and maintain a collection of books, journals, multimedia and e-journals that is current and comprehensive in terms of coverage of the various disciplines.<br><br>
    2) To serve the readers of the library with best available information in a supportive and catering manner.<br>
    3) To co-operate with other libraries and library related institutions.<br><br>
    4) Providing best user services to the users. (To the students and academic staff members)<br><br>
    5) Providing efficient library services implementing a new library automation system and buildup a intranet connecting the faculty libraries.<br><br>
    6) Staff Development through training and recruitment.<br><br>
    7) Exploit the usage of the library.<br><br>
    8) Conservation and preservation of the library resources.<br><br>
    9) To develop the professional skills of the librarians and others of the North Central Province.<br><br>
</p>
</div>


</center>

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
  

   