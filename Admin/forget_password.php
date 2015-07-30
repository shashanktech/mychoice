<?php
session_start();
include("config.php");

if(isset($_POST['send_pass']))
{
  $username=  $_POST['username'];
  $sql  = "SELECT * from college_detail WHERE college_email='".$username."'";
  $result=mysql_query($sql) OR DIE(mysql_error());
  $count  = mysql_num_rows($result);
  if($count>0){
    $row  = mysql_fetch_array($result);
    $pass   =  $row['password'];
    $to = $username;
    $subject = "Your Password";
    $msg  = "Your MY CHoice Password is ".$pass;
    $from = "From :asd@gmail.com";
    mail($to, $subject, $msg, $from);
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
        <div class="logo"><h1>Dashboard - Admin </h1></div>
      </div>   
    </div>
    <div class="name">
      My<span> Choice</span><br>
      <span style="font-size:15px"><i> Choose What's Right For You </i></span>
    </div>
    <div class="head">
      Did You Forget Your Password?
    </div>
    <div class="template-page-wrapper">
      <form class="form-horizontal templatemo-signin-form" role="form" action="#" method="post">
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" name="send_pass" value="Send Password" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>