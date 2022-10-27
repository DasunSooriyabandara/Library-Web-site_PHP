<?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$user_name="";
$bookname="";
$date="";
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

  $posts[0] = $_POST["user_name"];

  
  
  
  return $posts;
}


//search
if(isset($_POST['search']))
{
  
  $data = getPost();
  $search_query="SELECT bookname,date FROM bookingbook WHERE user_name ='$data[0]'";
  $search_result=mysqli_query($connect, $search_query);
    if($search_result)
    {
      if(mysqli_num_rows($search_result))
      {
        while($rows = mysqli_fetch_array($search_result))
        {
        
          
         
          $bookname = $rows['bookname'];
         $date = $rows['date'];

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
<head><title>User Profile</title>
  <link rel = "icon"  href = "images/logo.png">
 <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/userp.css">
<style type="text/css">
  .container{
    padding-top: 70px;
  }

  tr{
    padding: 20px;
  }
th{
   padding: 20px;
}
td{
   padding: 10px;
}
</style>
</head>
<body>



  <div class="container"> 
<div class="col-md-12">  
    <div class="col-md-4">      
        <div class="portlet light profile-sidebar-portlet bordered">
            <div class="profile-userpic">
                <img src="images/user.png" class="img-responsive" alt=""> </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> User </div>
                <div class="profile-usertitle-job"> Client</div>
            </div>
            <div class="profile-userbuttons">
                <a href="contactus.php" target="_blank"><button type="button" class="btn btn-info  btn-sm" onclick="contactus.php">Message</button>
                <a href="index.php" ><button type="button" class="btn btn-info  btn-sm" onclick="index.php">Home</button>
            </div>
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="userprofilet3.php">
                            <i class="icon-home"></i> Edit Account </a>
                    </li>
                    <li>
                        <a href="uforgetpw.php">
                            <i class="icon-settings"></i> Change Password </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="icon-info"></i> Log out </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-8"> 
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Your info</span>
                </div>
            </div>
            <div class="portlet-body">
                <div>
                
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" ><a href="userprofilet1.php" aria-controls="home" role="tab" data-toggle="tab">Insert</a></li>
                        <li role="presentation" ><a href="userprofilet2.php" aria-controls="profile" role="tab" data-toggle="tab">Update</a></li>
                        <li role="presentation" ><a href="userprofilet3.php" aria-controls="messages" role="tab" data-toggle="tab">Delete Account</a></li>
                        <li role="presentation" class="active"><a href="userprofilet4.php" aria-controls="messages" role="tab" data-toggle="tab">Borrow book</a></li>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form method ="post"   action="" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" class="form-control" name="user_name" id="inputName" placeholder="User Name" value="<?php echo $user_name;?>">
                              </div>
                              
                                
                              
                              
                             
                              <input  type="submit" class="btn btn-default" name="search" value="search">
                              
                            </form>
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

$sql = "SELECT bookname,date FROM bookingbook WHERE user_name ='$data[0]'";
$result = $conn->query($sql);

echo "<center><table>
<tr>


<th>Book Name</th>
<th>Date you borrowed</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      echo "<tr>";

echo "<td>" . $row['bookname'] . "</td>";
echo "<td>" . $row['date'] . "</td>";


echo "</tr></center> ";


    }
} else {
    echo "0 results";
}

$conn->close();
echo "  ";
?>



</div>  
 
  

                        </div>
                        
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
</div>
  <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js">
  </script>  
 </body>
 </html>




 