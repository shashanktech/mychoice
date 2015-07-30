<?php
session_start();
include("config.php");
if(isset($_SESSION['Admin'])){
$username = $_SESSION['Admin'];
}
else{
  header("location:logout.php");
}

$sql_useful = "SELECT * FROM useful_links";
$result_useful = mysql_query($sql_useful) or die(mysql_error());

if (isset($_POST['Add'])) {

$useful_link= $_POST['link_name'];
$sql_college_type= "INSERT INTO `useful_links`(`links`) VALUES('".$useful_link."')";
$result_college_type= mysql_query($sql_college_type) OR DIE(mysql_error());
header("location:add_useful_links.php"); 
}
if(isset($_POST['Delete'])){
  if(!empty($_POST['checkbox'])){
    foreach ($_POST['checkbox'] as $selected) {
      $sql_delete= "Delete FROM useful_links where links='".$selected."'".";";
      $result_delete= mysql_query($sql_delete);
      header("location:add_useful_links.php"); 

      }
      
    }
}
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
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
        <div class="logo"><h1>Dashboard - Super Admin</h1></div>
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
          <li><a href="tables.php"><i class="fa fa-users"></i><span class="badge pull-right">NEW</span>Manage Users</a></li>
          <li><a href="add_college_type.php"><i class="fa fa-cog"></i>Add/Delete College Type</a></li>
          <li><a href="add_college_courses.php"><i class="fa fa-cog"></i>Add/Delete College Course</a></li>
          <li><a href="change_password.php"><i class="fa fa-cog"></i>Change Password</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Admin Panel</a></li>
            <li><a href="#">Preferences</a></li>
            <li class="active">Form Controls</li>
          </ol>
          <h1>Preferences</h1>
          <p class="margin-bottom-15">Here goes another form and form controls.</p>
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" method="POST">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Add New Useful Links</label>
                    <input type="url" class="form-control" name="link_name" id="firstName">
                    </div>                 
                 </div>
                  <div class="row">
                  <div class="col-md-6 margin-bottom-15">                          
                 <button type="submit" id="Add" name="Add" class="btn btn-primary">Add</button>
                  </div>
                  </div>
                <div class="col-md-6 ">
                <label> Added Useful Links </label>
                <?php while($row_useful = mysql_fetch_array($result_useful)){ ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="checkbox[]" value="<?php echo $row_useful['links'] ?>">
                     <?php echo  $row_useful['links'] ?> 
                    </label>
                    
                  </div>     
                  <?php } ?>                        
              </div>                
              <div class="row templatemo-form-buttons">
                <div class="col-md-12" id="button">
                  <button type="submit" name="Delete" id="Delete" class="btn btn-default">Delete
                  </button>    
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
            <a href="sign-in.html" class="btn btn-primary">Yes</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>
    
</div>
<footer class="templatemo-footer">
      <div class="templatemo-copyright">
        <p>Copyright &copy; 2084 Your Company Name <!-- Credit: www.templatemo.com --></p>
      </div>
    </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/templatemo_script.js"></script>
</body>
</html>