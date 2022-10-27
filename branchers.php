  <?php 

 session_start();

include("conection.php");
include("functions.php");

$user_data = check_login($con);
   ?>

 <!DOCTYPE html>
<html>
<head><title>Branchers</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/firstindex.css">

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
    
    <a  href="aboutus.php">About Us</a>
    <a class="active" href="branchers.php">Branchers</a>
    <a href="contactus.php">Contact Us</a>
  </div>
</div>
  


  

<br><br><br>  <br>
<center>
<div class="box3" >
  <h4>Medical Library</h4>
  <img src="images/31.jpg">
  
  <br>

<p style="text-align: left;font-size: 16px;">The Library of the Medical Faculty, Rajarata University was founded in 1870, the same year the Medical Faculty was established. It was set up in the present building in 1955. This library is the second oldest medical library in South East Asian Region.
<br><br>
The medical library is the key provider of Library and Information Services for the Faculty of Medicine, University of Colombo. The library’s mission is to assist the Faculty in fulfilling its mission of developing a graduate who will contribute to health requirements of the individual and the community with competence, compassion and care.
</p>
</div>

<div class="box3" >
  <h4>Science Library</h4>
  <img src="images/32.jpg">
  
  <br>

<p style="text-align: justify;font-size: 16px; ">
<b>Welcome to the Science Library</b><br>
<br>
The Library of the Ceylon University College was initiated hundred years ago, in 1921, as a small collection of documents maintained at the College House to serve the then two departments, Science and Arts. In early 1950s, after transferring the Science Collection to the Faculty premises, departmental level libraries were established in the Departments of Botany, Chemistry, Mathematics, Physics and Zoology. In 1984, the Library, Faculty of Science was established as one of the two branch libraries of the Main Library, University of Colombo. It was housed in the ‘Old Royal College Building’ in the Faculty premises from 1992 to end of 2020.<br>
<br>
In the 21 st of January, 2021, when the Faculty of Science celebrates a century of excellence in its services to the nation, the Library was shifted to its new multistory building and adopted the name ‘Information and Learning Centre’ (ILC) to suit its scope of modern services that reach beyond the simple notion of a library. The contemporary learning zones and futuristic facilities of the ILC provide the learner community with a unique experience and a conducive environment for an engaging learning experience. 
<br><br>
Learning spaces in the ILC are specifically designed to match with different learning styles of students, and include zones for reading, quiet study, collaborative study, interactive study and open study. Additionally, the library skills lab, e-resource centre and the library studio provide admirable modern facilities which would inspire and enhance students’ abilities to discover, experience, study and research. 
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
  

   