  <?php  
session_start();



$servername = "localhost";
$username="root";
$password="";
$dbname="login_sample_db";

$user_name="";
$password="";
$name="";
$lastname="";
$email="";
$address="";
$tpno="";



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
  $posts[2] = $_POST["name"];
  $posts[3] = $_POST["lastname"];
  $posts[4] = $_POST["email"];
  $posts[5] = $_POST["address"];
  $posts[6] = $_POST["tpno"];
  
  return $posts;
}


//insert
if(isset($_POST['update'])){
  $data = getPost();
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $update_query="UPDATE `users` SET password='$data[1]',name='$data[2]',lastname='$data[3]',email='$data[4]',address='$data[5]',tpno='$data[6]',image='$file' WHERE  user_name= '$data[0]'";
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
<head><title>User Home</title>
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
                <div class="profile-usertitle-job"> Client </div>
            </div>
            <div class="profile-userbuttons">
              <a href="contactus.php" target="_blank"><button type="button" class="btn btn-info  btn-sm" onclick="contactus.php">Message</button>
              <a href="index.php" ><button type="button" class="btn btn-info  btn-sm" onclick="index.php">Home</button>
            </div>
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="userprofilet2.php">
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
                        <li role="presentation" class="active"><a href="userprofilet2.php" aria-controls="profile" role="tab" data-toggle="tab">Update</a></li>
                        <li role="presentation"><a href="userprofilet3.php" aria-controls="messages" role="tab" data-toggle="tab">Delete Account</a></li>
                        <li role="presentation"><a href="userprofilet4.php" aria-controls="messages" role="tab" data-toggle="tab">Borrow book</a></li>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane " id="home"></div>
                          
                        <div role="tabpanel" class="tab-pane active" id="profile">
                          <form method ="post"   action="" enctype="multipart/form-data">
                              <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" class="form-control" id="inputName" name="user_name" placeholder="User Name" value="<?php echo $user_name;?>">
                              </div>
                               <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo $password;?>">
                              </div>
                              <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="<?php echo $name;?>">
                              </div>
                                <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="<?php echo $email;?>">
                              </div>
                               <div class="form-group">
                                <label for="inputLastName">Address</label>
                                <input type="text" class="form-control" id="inputLastName" name="address" placeholder="Address" value="<?php echo $address;?>">
                              </div>  
                               <div class="form-group">
                                <label for="inputLastName">Telephone no</label>
                                <input type="text" class="form-control" id="inputLastName" name="tpno" placeholder="Telephone" value="<?php echo $tpno;?>">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile" name="image">
                                
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                              <input  type="submit" class="btn btn-default" name="update" value="Update">
                              
                            </form>
                          </div>
                        <div role="tabpanel" class="tab-pane" id="messages">Messages</div>
                        <div role="tabpanel" class="tab-pane" id="settings">Settings</div>
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




 