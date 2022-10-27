  <?php  
session_start();

include("conection.php");
include("functions2.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $tpno = $_POST['tpno'];
  if (!empty($user_name)&& !empty($password) && !empty($email) && !empty($address) && !empty($tpno) &&!is_numeric($user_name)) 
  {
    $user_id = random_num(20);
    $query ="insert into admin (user_id,user_name,password,email,address,tpno) values ('$user_id','$user_name','$password','$email','$address','$tpno')";
    mysqli_query($con,$query);
    header("Location: adlogin.php");
    die;

  }else
  {
    echo "please enter valid information";
  }

}

?>

 <!DOCTYPE html>
<html>
<head><title>User Home</title>
  <link rel = "icon"  href = "images/logo.png">
 <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/userp.css">

</head>
<body>



  <div class="container"> 
<div class="col-md-12">  
    <div class="col-md-4">      
        <div class="portlet light profile-sidebar-portlet bordered">
            <div class="profile-userpic">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-responsive" alt=""> </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"> Marcus Doe </div>
                <div class="profile-usertitle-job"> Developer </div>
            </div>
            <div class="profile-userbuttons">
                <button type="button" class="btn btn-info  btn-sm">Follow</button>
                <button type="button" class="btn btn-info  btn-sm">Message</button>
            </div>
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="icon-home"></i> Ticket List </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-settings"></i> Support Staff </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-info"></i> Configurations </a>
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
                        <li role="presentation" class="active"><a href="userprofile.php" aria-controls="home" role="tab" data-toggle="tab">Insert</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Update</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form>
                              <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                              </div>
                                <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>
                                 <div class="form-group">
                                <label for="inputLastName">Address</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                               <div class="form-group">
                                <label for="inputLastName">Telephone no</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                          <form>
                              <div class="form-group">
                                <label for="inputName">User Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                              </div>
                                <div class="form-group">
                                <label for="inputLastName">Last Name</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>
                                 <div class="form-group">
                                <label for="inputLastName">Address</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                               <div class="form-group">
                                <label for="inputLastName">Telephone no</label>
                                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> Check me out
                                </label>
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
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




 