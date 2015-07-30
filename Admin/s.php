<?php
include("config.php");
if(isset($_POST['go']))
{
$image_path= 'college_image/';	
$building_images	= $_FILES['images']['name'][0];
$building_images	= $_FILES['images']['name'][1];
$target0 = $image_path . $building_images;
$target1 = $image_path . $building_images;

move_uploaded_file($_FILES['images']['tmp_name'][0], $target0);
move_uploaded_file($_FILES['images']['tmp_name'][1], $target1);
}
?>
<html>
<body>
<form method= "POST" enctype="multipart/form-data">
<label for="exampleInputFile">Upload College Images</label>
<input type="file" name="images[]" /></div>
<input type="file" name="images[]" /></div>
<input type="submit" value="go" name="go"/> 
</form>
</body>
</html>