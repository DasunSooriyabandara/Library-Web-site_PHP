 <?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$user_name="";
$password="";



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
  $posts[1] = $_POST["password"];

  
  return $posts;
}


//insert
if(isset($_POST['delete'])){
  $data = getPost();

  $update_query="DELETE FROM `users`  WHERE user_name='$data[0]'AND password='$data[1]'";
  try{
    $update_result=mysqli_query($connect, $update_query);
    if($update_result){
      if(mysqli_affected_rows($connect)>0){
        echo '<script>alert("User account deleted")</script>';
      }else{
        echo '<script>alert("User account not deleted wrong user name or password")</script>';
      }
    }
  }catch(Exception $ex){
    echo '<script>alert("error in deletion")</script>';
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
                        <li role="presentation" class="active"><a href="userprofilet3.php" aria-controls="messages" role="tab" data-toggle="tab">Delete Account</a></li>
                        <li role="presentation"><a href="userprofilet4.php" aria-controls="messages" role="tab" data-toggle="tab">Borrow book</a></li>
                        
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form method ="post"   action="" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" class="form-control" name="user_name" id="inputName" placeholder="User Name" value="<?php echo $user_name;?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo $password;?>">
                              </div>
                                
                              
                              
                             
                              <input  type="submit" class="btn btn-default" name="delete" value="Delete account">
                              
                            </form>
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




 