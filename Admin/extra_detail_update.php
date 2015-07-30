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
$sql = "SELECT * FROM college_matter where college_email='".$username."'";
$result = mysql_query($sql) OR DIE(mysql_error());
  
  if(isset($_POST['update']))
  { 
   
  $image_path= 'college_image/';  
  $building_images_0  = $_FILES['images']['name'][0];
  $building_images_1  = $_FILES['images']['name'][1];
  $building_images_2  = $_FILES['images']['name'][2];
  $building_images_3  = $_FILES['images']['name'][3];
  $building_images_4  = $_FILES['images']['name'][4];
  $building_images_5  = $_FILES['images']['name'][5]; 
  $target0 = $image_path . $building_images_0;
  $target1 = $image_path . $building_images_1;
  $target2 = $image_path . $building_images_2;
  $target3 = $image_path . $building_images_3;
  $target4 = $image_path . $building_images_4;
  $target5 = $image_path . $building_images_5;
 
  move_uploaded_file($_FILES['images']['tmp_name'][0], $target0);
  move_uploaded_file($_FILES['images']['tmp_name'][1], $target1);
  move_uploaded_file($_FILES['images']['tmp_name'][2], $target2);
  move_uploaded_file($_FILES['images']['tmp_name'][3], $target3);
  move_uploaded_file($_FILES['images']['tmp_name'][4], $target4);
  move_uploaded_file($_FILES['images']['tmp_name'][5], $target5);
  $college_overview= $_POST['overview'];
  $college_video_title=$_POST['video_title'];
  $college_video_url=$_POST['video_url'];

  $sql_update = " UPDATE `college_matter` SET `college_overview` = '".$college_overview."',`college_logo`='".$building_images_0."',`college_image_1`='".$building_images_1."',`college_image_2`='".$building_images_2."',`college_image_3`='".$building_images_3."',`college_image_4`='".$building_images_4."',`college_image_5`='".$building_images_5."',`college_video_title`='".$college_video_title."',`college_video_url`= '".$college_video_url."' WHERE college_email='helo@gmail.com'";
  
  $result_update  = mysql_query($sql_update) OR DIE(mysql_error()); 
  echo "updated";


}
$sql = "SELECT * FROM college_matter where college_email='helo@gmail.com'";
  $result = mysql_query($sql) OR DIE(mysql_error());
  $row=mysql_fetch_array($result);


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Dashboard Extra Details</title>
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
          <h1>Update Extra College Details</h1>
             <form role="form" id="templatemo-preferences-form" action="#" method="POST" enctype="multipart/form-data">     
              <div class="row">
                <div class="col-md-12">
                  <label for="notes">Write Overview About College</label>
                  <textarea class="form-control" rows="6" id="notes" name="overview"><?php echo $row['college_overview'] ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-30">
                  <label for="exampleInputFile">Upload College Logo</label>
                  <?php if($row['college_logo']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/".$row['college_logo'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]"/>
                  <p class="help-block">You can upload file here.</p>  
                </div>                  
              </div>
              <div class="row">
                <div class="col-md-12 margin-bottom-30">
                  <label for="exampleInputFile">Upload College Images</label>
                  
                  <?php if($row['college_image_1']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/". $row['college_image_1'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]">
                  <p class="help-block">You can upload file here.</p>
                  <?php if($row['college_image_2']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/".  $row['college_image_2'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]">
                  <p class="help-block">You can upload file here.</p> 
                  <?php if($row['college_image_3']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/".  $row['college_image_3'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]">
                  <p class="help-block">You can upload file here.</p> 
                  <?php if($row['college_image_4']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/". $row['college_image_4'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]">
                  <p class="help-block">You can upload file here.</p> 
                  <?php if($row['college_image_5']!=''){?>
                  <div class="image_upload"><img src="<?php echo "college_image/". $row['college_image_5'] ?>"width="70px" height="60px"/></div><?php } ?>
                  <input type="file" id="exampleInputFile" name="images[]">
                  <p class="help-block">You can upload file here.</p>   
                </div>                  
              </div>
              <div class="row">
            <div class="col-md-12">
              
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Video Title</label>
                    <input type="text" class="form-control" id="firstName" name="video_title" value="<?php echo $row['college_video_title'];?>">

                  </div>
                </div> 
              <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="firstName" class="control-label">Video URL</label>
                    <input type="url" class="form-control" id="firstName" name="video_url" value="<?php echo $row['college_video_url'];?>">                  
                  </div>
                </div>
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
            <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
          </div>
          <div class="modal-footer">
            <a href="sign-in.php" class="btn btn-primary">Yes</a>
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
                  