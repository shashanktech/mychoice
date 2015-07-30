<?php

include("config.php");
session_start();
include("config.php");
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
else{
  header("location:logout.php");
}
$sql = "SELECT * FROM college_detail where college_email='".$username."'";
$result = mysql_query($sql) OR DIE(mysql_error());
$row= mysql_fetch_array($result);
$pass= $row['password'];
if(isset($_POST['change'])){
$old = $_POST['old'];
$new = $_POST['new'];
$new_confirm=$_POST['new_confirm'];
if($old==$pass)
{
  $sql_update = " UPDATE `college_detail` SET `password`= '".$new."' 
  WHERE college_email = '".$username."' AND password = '".$old."'"  ;
  $result_update  = mysql_query($sql_update) OR DIE(mysql_error());
}
else{
  ?>
  <script>
  alert("Your old password is incorrect");
  return false;
  </script>
  <?php
}
}
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Dashboard Preferences</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Admin </h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li class="active"><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li><a href="preferences.php"><i class="fa fa-cog"></i>Update Basic Details</a></li>
          <li><a href="extra_detail_update.php"><i class="fa fa-cog"></i>Update Extra Details</a></li>
          <li><a href="change_password.php"><i class="fa fa-cog"></i>Change Password</a></li>
          <li><a href="preferences.html"><i class="fa fa-cog"></i>Delete Account</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="preferences.html">Change Password</a></li>
            <li class="active">Form Controls</li>
          </ol>
          <h1>Change Your Password</h1>
          <form method="POST">
          <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="currentPassword">Current Password</label>
                    <input type="password" class="form-control" name="old" id="currentPassword" value="********">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">New Password</label>
                    <input type="password" name="new" class="form-control" id="password_1" placeholder="New Password">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_2">Confirm New Password</label>
                    <input type="password" name="new_confirm" class="form-control" id="password_2" placeholder="Confirm New Password">  
                  </div>
                </div>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="change" >Change</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
          </div>
          <div class="modal-footer">
            <a href="logout.php" class="btn btn-primary">Yes</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

    <footer class="templatemo-footer">
      <div class="templatemo-copyright">
        <p>Copyright &copy; 2084 Your Company Name <!-- Credit: www.templatemo.com --></p>
      </div>
    </footer>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>
                  