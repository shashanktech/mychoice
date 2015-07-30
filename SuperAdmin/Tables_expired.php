<?php
session_start();
include("config.php");
if(isset($_SESSION['Admin'])){
$username = $_SESSION['Admin'];
}
else{
  header("location:logout.php");
}
$sql_new = "SELECT * FROM college_detail WHERE approved= 0 AND deleted= 0";
$result_new = mysql_query($sql_new) OR DIE(mysql_error());
$count_new  = mysql_num_rows($result_new);

$sql_active = "SELECT * FROM college_detail WHERE approved= 1 AND deleted= 0";
$result_active = mysql_query($sql_active) OR DIE(mysql_error());
$count_active  = mysql_num_rows($result_active);

$sql_expired = "SELECT * FROM college_detail WHERE deleted= 1";
$result_expired = mysql_query($sql_expired) OR DIE(mysql_error());
$count_expired  = mysql_num_rows($result_expired);

if(isset($_REQUEST['code'])){

  $college_email = $_REQUEST['code'];
  $sql_expired = "UPDATE `college_detail` SET `approved`= 1 ,`deleted`= 0 WHERE college_email='".$college_email."'";
  $result_expired  = mysql_query($sql_expired) OR DIE(mysql_error());
  header("location:Tables_expired.php");
}

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Dashboard Tables</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Dashboard -Super Admin</h1></div>
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
            <li><a href="#">Manage Users</a></li>
            <li class="active">Tables</li>
          </ol>
          <h1>Manage Users</h1>
          <p>Here goes tables and users.</p>

          <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li><a href="tables.php">New Users <span class="badge"><?php echo $count_new; ?></span></a></li>
                <li ><a href="tables_active.php">Active Users <span class="badge"><?php echo $count_active; ?></span></a></li>
                <li class="active"><a href="tables_expired.php">Expired Users <span class="badge"><?php echo $count_expired; ?></span></a></li>
              </ul>          
            </div>
          </div> 
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <h4 class="margin-bottom-15">Expired/Deleted Users Table</h4>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>College Code</th>
                      <th>College Name</th>
                      <th>College Type</th>
                      <th>College_Email</th>
                      <th>Approval</th>
                      <th>View</th>
                      <th>Deleted By</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php while($row_expired = mysql_fetch_array($result_expired)) { ?>
                    <tr>
                      <td><?php echo $row_expired['college_code'];   ?></td>
                      <td><?php echo $row_expired['college_name'];   ?></td>
                      <td><?php echo $row_expired['college_type'];   ?></td>
                      <td><?php echo $row_expired['college_email'];   ?></td>
                      <td><a href="http://localhost/shashank/SuperAdmin/Tables_expired.php?code=<?php echo $row_expired['college_email']; ?>" class="btn btn-default">Approve</a></td>                    
                      <td>
                        <!-- Split button -->
                        <div class="btn-group">
                          <a href= "../college_details.php?id=<?php echo $row_expired['id'] ?>" ><button type="button" class="btn btn-info">View Details</button></a>
                        </div>
                      </td>
                      <td><?php echo $row_expired['deleted_by'];   ?></td>
                    </tr>
                    <?php } ?> 
                  </tbody>
                </table>
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