 <?php 

 session_start();

include("conection.php");
include("functions.php");


   ?>

   <!DOCTYPE html>
<html>
<head><title>Check</title>
  <link rel = "icon"  href = "images/logo.png">
  <style >
   button {
  border-radius: 20px;
  border: 1px solid #00cc66;
  background-image: url('images/ad.jpg');
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}
  </style>}

</head>
<body>
<center>
<h1>Login to see more</h1>

<button ><i class="fa fa-home"></i> Home</button>
<button class="btn"><i class="fa fa-bars"></i> Menu</button>

<a href="login.php" target="_blank"><input type="image" src="images/ad.png" style="width: 200px;height: 220px;" alt="Submit"></a>
<a href="login.php" target="_blank"><input type="image" src="images/ur.jpg" style="width: 200px;height: 220px;" alt="Submit"></a>

  <a href="usercq.php" target="_blank"><button " onclick="usercq.php" >User</button></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="admincq.php" target="_blank"><button " onclick="admincq.php" >Admin</button></a>
</center>
 
         
  
</body>
</html>
