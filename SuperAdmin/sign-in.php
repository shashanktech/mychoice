<?php
session_start();
include("config.php");
if(isset($_SESSION['Admin'])){
$username = $_SESSION['Admin'];
header("location:index.php");
}

if(isset($_POST['sign_in']))
{
  $username=  $_POST['username'];
  $password=  $_POST['password'];
  $sql  = "SELECT * from user_admin WHERE username='".$username."'";
  $result=mysql_query($sql) OR DIE(mysql_error());
  $count  = mysql_num_rows($result);
  if($count>0){
    $row  = mysql_fetch_array($result);
    $pass   =  $row['password'];
    if($password==$pass){
      $_SESSION['Admin'] = $username;
      header("location:index.php");
    }
    else{
      echo "You have Enterd Wrong Password";
    }



  }
  else{
    echo "This Email ID is not registered with Us or may be you have delete your account";
  }
}
?>




<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Dashboard Sign In Admin</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
  <div class="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard - Super Admin </h1></div>
      </div>   
    </div>
    <div class="name">
      My<span> Choice</span><br>
      <span style="font-size:15px"><i> Choose What's Right For You </i></span>
    </div>
    <div class="template-page-wrapper">
      <form class="form-horizontal templatemo-signin-form" role="form" action="#" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Email Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
          </div>
        </div>
        <div class="forget">
         <a style="color:white" href="forget_password.php"> <i>Forget Password?</i>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="sign_in" value="Sign in" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>