 <?php 

 session_start();

include("conection.php");
include("functions.php");


   ?>

   <!DOCTYPE html>
<html>
<head><title>Home</title>
  <link rel = "icon"  href = "images/logo.png">
  <link rel="stylesheet" href="css/firstindex.css">
  <style >
    button {
    width: 15em;
    border: 3px  #92210f;
    background:  #e67e22;
    border-radius: 8px;
    height: 10em;
    text-align: center;
    font-size: 16px;
    
}
h1{text-align: center;
  color: green;
  }

  * {box-sizing: border-box;}

.container {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
  </style>


</head>
<body>
<div class="topnav">
  
  <div class="login-container">
     

    
       

     
    
  </div>
  <h5 align="right" >&#9742; &nbsp;&nbsp;      Hot line : 0770490000 &nbsp;&nbsp;|  &#9993; &nbsp;&nbsp;     E mail  : Rusl@lbr.lk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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

    <a  href="firstindex.php">Home</a>
    
    <a href="firstindex.php">About Us</a>
    <a href="firstindex.php">Branchers</a>
    <a href="firstindex.php">Contact Us</a>
    
  </div>
</div>
  

<br><br><br>  <br>

 
<h1>Login to see more</h1>
<center>
<table >
  <tr ><td style="padding: 30px;">
 
  <a href="admincq.php" target="_blank"><input type="image" src="images/ad.png" class="image" style="width: 200px;height: 220px;" alt="Submit"></a> 
  

</td>
<td style="padding: 30px;">
 
  <a href="usercq.php" target="_blank"><input type="image" src="images/ur.jpg" class="image" style="width: 200px;height: 220px;" alt="Submit"></a> 
  

</td>
  
</tr>
<tr>
<td style="font-weight:   bold; "  >Admin</td>
<td style="font-weight:   bold; ">User</td>
</tr>
</table>
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
  
</body>
</html>



 
         
