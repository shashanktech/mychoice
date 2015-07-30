<?php
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

if(isset($_POST['update'])){ 
  $college_rank=  $_POST['college_rank'];
  $college_type=implode(',',$_POST['college_type']);
  $college_faculty=$_POST['college_faculty'];
  $college_courses=implode(', ' , $_POST['college_courses']);
  $college_batch=$_POST['college_batch'];
  $college_admode=implode(',',$_POST['college_admode']);
  $college_pcompany=$_POST['college_pcompany'];
  $college_hostel=$_POST['college_hostel'];
  $college_hosac=$_POST['college_hosac'];
  $college_library=$_POST['college_library'];
  $college_website=$_POST['college_website'];
  $college_contact=$_POST['college_contact'];
  $college_email=$_POST['college_email'];



  $sql_update = " UPDATE `college_detail` SET `college_rank`='".$college_rank."',`college_type`= '".$college_type."',`college_courses`='".$college_courses."',`college_faculty`='".$college_faculty."',`college_batch`='".$college_faculty."',`college_pcompany`='".$college_pcompany."',`college_admode`='".$college_admode."',`college_hostel`='".$college_hostel."',`college_hosac`='".$college_hosac."',`college_library`='".$college_library."',`college_website`='".$college_website."',`college_contact`='".$college_contact."',`college_email`='".$college_email."' WHERE college_email = '".$username."'" ;
  $result_update  = mysql_query($sql_update) OR DIE(mysql_error());
  header("location:preferences.php");

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
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal1"><i class="fa fa-cog"></i>Delete Account</a></li>
          <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="index.html">Dashboard</a></li>
            <li><a href="preferences.html">Update Details</a></li>
            <li class="active">Form Controls</li>
          </ol>
          <h1>Update Your College Details</h1>
          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <?php while($row=mysql_fetch_array($result)) { ?>

                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">All India Rank</label>
                    <input type="number" name="college_rank" class="form-control" id="firstName" min="0" value="<?php echo $row['college_rank'];?>"/>
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="lastName" class="control-label">College Type</label>
                    <?php
                     $sql_college_type = "SELECT college_type FROM college_types";
                     $result_college_type  = mysql_query($sql_college_type) OR DIE(mysql_error());
                    ?>
                    <?php while($row_college_type = mysql_fetch_array($result_college_type)) { ?>
                    <div class="course_content" 
                    <?php 
                    if(strstr($row['college_type'], $row_college_type['college_type'])){ ?>
                       style="color:red"
                       <?php
                    }
                    ?>
                    > 
                    <input type="checkbox" 
                    <?php 
                    if(strstr($row['college_type'], $row_college_type['college_type'])){ ?>
                       checked="checked" 
                       style="color:red"
                       <?php
                    }
                    ?>
                    value="<?php echo $row_college_type['college_type'] ?>"  name="college_type[]" id="reg_id_4"><?php echo $row_college_type['college_type'] ?></div> 
                    <?php } ?>
                    </div>        
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label>Total Number Of Faculty</label>
                    <input type="text" class="form-control" name="college_faculty" id="firstName" value="<?php echo $row['college_faculty'];?>"> 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label>Email address</label>
                    <input type="text" class="form-control" name="college_email" id="firstName" readonly value="<?php echo $row['college_email'];?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label>College Website</label>
                    <input type="text" class="form-control" name="college_website" id="firstName" value="<?php echo $row['college_website'];?>"> 
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label>Contact Number</label>
                    <input type="text" class="form-control" id="firstName" name="college_contact" value="<?php echo $row['college_contact'];?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                  <label>Courses Offered

                  </label>
                    <?php
                    $sql_college_category = "SELECT course_name FROM college_course_selection";
                    $result_college_category  = mysql_query($sql_college_category) OR DIE(mysql_error());

                    ?>
                    <div class="course_category">
                    <?php while($row_college_category = mysql_fetch_array($result_college_category)){ ?>
                    <div class="course_content"> <input type="checkbox" 
                    <?php 
                    if(strstr($row['college_courses'], $row_college_category['course_name'])){ ?>
                       checked="checked"
                       <?php
                    }
                    ?>
                    value="<?php echo $row_college_category['course_name'] ?>"  name="college_courses[]" id="reg_id_7"><?php echo $row_college_category['course_name'] ?></div> 
                    <?php } ?>
                    </div>
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_1">Pass Out Batches</label>
                    <input type="number" class="form-control" name="college_batch" id="password_1" min="0" value="<?php echo $row['college_batch'];?>">  
                  </div>
                  <div class="col-md-6 margin-bottom-15">
                    <label for="password_2">Exam Mode</label>
                    <div class="course_category">            
                     <div class="course_content">  <input type="checkbox"
                    <?php 
                    if(strstr($row['college_admode'], "ONLINE" )){ ?>
                        checked="checked"
                       
                    <?php
                    }
                    ?>
                      value="ONLINE"  name="college_admode[]" id="reg_id_10" />ONLINE </div> 
                    <div class="course_content">  <input type="checkbox" 
                    <?php 
                    if(strstr($row['college_admode'], "OFFLINE" )){ ?>
                        checked="checked"
                       
                    <?php
                    }
                    ?>
                    value="OFFLINE"  name="college_admode[]" id="reg_id_10"/>OFFLINE </div>
                    </div>  
                  </div>
                </div>
               <div class="row">
                <div class="col-md-12">
                  <label for="notes">Major Placement Companies</label>
                  <textarea class="form-control" name="college_pcompany" rows="6" id="notes" ><?php echo $row['college_pcompany'];?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  
                  <div class="radio margin-bottom-15">
                      <label class="rad_label"><b>Hostel Accomadation</b></label>
                    <div class="course_category2">            
                     <div class="course_content2">  <input type="radio"
                      <?php 
                    if(strstr($row['college_hostel'], "yes" )){ ?>
                        checked="checked"                       
                    <?php
                    }
                    ?>
                      value="yes"  name="college_hostel" id="reg_id_10" />YES </div> 
                    <div class="course_content2">  <input type="radio"
                      <?php 
                    if(strstr($row['college_hostel'], "no" )){ ?>
                        checked="checked"
                       
                    <?php
                    }
                    ?>
                     value="no"    name="college_hostel" id="reg_id_10"/>NO </div>
                    </div>
                   
                  </div>
                  <div class="radio margin-bottom-15">
                      <label class="rad_label"><b>Hostel A/C</b></label>
                    <div class="course_category2">            
                     <div class="course_content2">  <input type="radio"
                      <?php 
                    if(strstr($row['college_hosac'], "yes" )){ ?>
                        checked="checked"
                       
                    <?php
                    }
                    ?>
                      value="yes"  name="college_hosac" id="reg_id_10" />YES </div> 
                    <div class="course_content2">  <input type="radio" 
                    <?php 
                    if(strstr($row['college_hosac'], "no" )){ ?>
                        checked="checked"
                       
                    <?php
                    }
                    ?>

                    value="no"    name="college_hosac" id="reg_id_10"/>NO </div>
                    </div>
                   
                  </div>
                              
                </div>                            
              </div>                
              <div class="row">
                <div class="col-md-12 margin-bottom-15">
                 <div class="rad_label3"> LIBRARY FACILITY</div>
                  <label class="radio-inline">
                    <input type="radio" name="college_library" id="inlineRadio1"
                    <?php 
                    if(strstr($row['college_library'], "yes" )){ ?>
                        checked="checked"                       
                    <?php
                    }
                    ?>
                     value="yes"> YES
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="college_library" id="inlineRadio2" 
                    <?php 
                    if(strstr($row['college_library'], "no" )){ ?>
                    checked="checked"                       
                   <?php
                  }
                  ?>
                    value="no"> NO
                  </label>                    
                </div>                  
              </div>
              <?php } ?>
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" name="update">Update</button>
                  <button type="reset" class="btn btn-default">Reset</button>    
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="confirmModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Are you sure you want to Delete Your Account?</h4>
          </div>
          <div class="modal-footer">
            <a href="delete.php" class="btn btn-primary">Yes</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>


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
                  