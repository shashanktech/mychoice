<?php

include("config.php");
$sql_popular2 = "SELECT * FROM college_detail WHERE deleted=0 AND approved=1 ORDER BY visited DESC limit 10" ;

$result_popular2 = mysql_query($sql_popular2) OR DIE ( mysql_error()); 

$sql_useful = "SELECT * FROM useful_links ORDER BY id DESC LIMIT 10";
$result_useful = mysql_query($sql_useful) OR DIE (mysql_error());

if(isset($_POST['submit_button']))
{

$query = mysql_query("SELECT MAX(id) as max FROM college_detail"); 
$row = mysql_fetch_array($query);
$max_id = $row['max'];
$college_code=$_POST['college_code'];
$college_name=	$_POST['college_name'];
$college_rank=	$_POST['college_rank'];
$college_type=implode(',',$_POST['college_type']);
$college_approved=$_POST['college_approved'];
$college_faculty=$_POST['college_faculty'];
$college_courses=implode(', ' , $_POST['college_courses']);
$college_estd=$_POST['college_estd'];
$college_batch=$_POST['college_batch'];
$college_admode=implode(',',$_POST['college_admode']);
$college_pcompany=$_POST['college_pcompany'];
$college_hostel=$_POST['college_hostel'];
echo $college_hostel;
if(strcmp($college_hostel,'yes')==0) {
	$college_hosac=$_POST['college_hosac'];
}
else {
	$college_hosac=0;
}




$college_library=$_POST['college_library'];
$college_address=$_POST['college_address'];
$college_city=$_POST['college_city'];
$college_state=$_POST['college_state'];
$college_pincode=$_POST['college_pincode'];
$college_rlystn=$_POST['college_rlystn'];
$college_busstn=$_POST['college_busstn'];
$college_website=$_POST['college_website'];
$college_contact=$_POST['college_contact'];
$college_email=$_POST['college_email'];
$meta= $_POST['meta'].",".$college_code.",".$college_name.",".$college_approved.",".$college_type.",".$college_courses.",".$college_city.",".$college_state;
$password='MYC-'.$max_id."-".$college_code;

$sql="INSERT INTO `college_detail`(`college_code`, `college_name`, `college_rank`, `college_type`, `college_est`, `college_courses`, `college_faculty`, `college_batch`, `college_pcompany`, `college_approved`,`college_admode`, `college_hostel`, `college_hosac`, `college_library`, `college_address`,`college_city`, `college_state`, `college_pincode`, `college_rlystn`, `college_busstn`, `college_website`, `college_contact`,`college_email`,`password`,`meta`) VALUES ('".$college_code."','".$college_name."','".$college_rank."','".$college_type."','".$college_estd."','".$college_courses."','".$college_faculty."','".$college_batch."','".$college_pcompany."','".$college_approved."','".$college_admode."','".$college_hostel."','".$college_hosac."','".$college_library."','".$college_address."','".$college_city."','".$college_state."','".$college_pincode."','".$college_rlystn."','".$college_busstn."','".$college_website."','".$college_contact."','".$college_email."','".$password."','".$meta."') ";
$result	=	mysql_query($sql) OR DIE(mysql_error());

$sql_extra_detail_email= "INSERT INTO `college_matter`(`college_email`) VALUES ('".$college_email."')";
$result_extra_detail_email= mysql_query($sql_extra_detail_email) OR DIE(mysql_error());
if(isset($result)){
$to = $college_email;
$subject = "Confirm Mail From MYCHOICE";
$message = "Thanks For Registration with us.<br> Your MYCHOICE Password Is: ".$password.". Please Update Your More Detail so students can find it easily.\n http://localhost/shashank/Admin/sign-in.php" ;
$from = "from: Shashank.Raghav@hotmail.com";
mail($to, $subject, $message, $from);
echo "Your Values Inserted Successfully";
$to = $college_email;
$subject = "Confirm Mail From MYCHOICE";
$message = "Thanks For Registration with us.<br> Your MYCHOICE Password Is: ".$password.". Please Update Your More Detail so students can find it easily.<br> http://localhost/shashank/Admin/sign-in.php" ;
$from = "from: Shashank.Raghav@hotmail.com";
mail($to, $subject, $message, $from);
}


}

?>
<!doctype html>
<html>
<head>
<title>College Search Engine</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="jquery/query.js"></script>
<script type="text/javascript" src="js/vert.js">
</script>
</head>
<body>
<div class="se-pre-con"></div>
	<main>
		<header>
			<div class="header_logo">
			<img src="image/blog.png" height="134.5px" width="200px"/>	     
			</div>
			
			<div class="header_menu">	
				<div class="top_header_menu">
						<div class="log_reg">
							<ul>
								<li>Login</li>
								<li>Register</li>
							</ul>

						</div>
				</div>	
				<div class="bottom_header_menu">				
						<div class="header_menu_bar">
							<ul>
								<li>Home Page</li>
								<li>Search Page</li>
								<li>Detail Page</li>
								<li>Registration Page</li>

								<li>About Us</li>
								<li>Contact Us</li>
							</ul>
						</div>
				</div>
			</div>
		</header>

		<div class="info">
		<img src="image/header.jpg" height="200px" width="100%" />
		</div>
		<div class="content_registration">

			<div class="content_registration_left">
				<div class="college_registration_title">
				COLLEGE REGISTRATION
				</div>

					<form name="college_reg" action="#" method="post">	
					<div class="registration_field">
			 			<div class="college_label">COLLEGE CODE:</div>
			 			<input type="text"class="registration_text" name="college_code" id="reg_id_1" />

					</div>

					<div class="code_validation" id="1">*Please Fill College Code</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE NAME:</div>
			 			<input type="text"class="registration_text" name="college_name" id="reg_id_2" required/>
						</div>
					<div class="registration_field">
			 			<div class="college_label">ALL INDIA RANK:</div>
			 			<input type="number"class="registration_text" name="college_rank" id="reg_id_3" min="0" required/>
						</div>		


					<div class="registration_field">
			 			<div class="college_label">COLLEGE TYPE:</div>
			 			<?php
			 			$sql_college_type	=	"SELECT college_type FROM college_types";
			 			$result_college_type	=	mysql_query($sql_college_type) OR DIE(mysql_error());

			 			?>
			 			<div class="college_type">
			 			<?php while($row_college_type	=	mysql_fetch_array($result_college_type)){ ?>
			 				
			 				<div class="course_content"> <input type="checkbox" value="<?php echo $row_college_type['college_type'] ?>"  name="college_type[]" id="reg_id_4"><?php echo  $row_college_type['college_type'] ?></div> 
			 			<?php } ?>
 
						 </div>
					</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE AFFILIATED BY:</div>
			 			<input type="text"class="registration_text" name="college_approved" id="reg_id_5" />
					</div>


					<div class="registration_field">
			 			<div class="college_label">TOTAL NO. OF FACULTY:</div>
			 			<input type="text"class="registration_text" name="college_faculty" id="reg_id_6" />
					</div>

					<div class="registration_field">
			 			<div class="college_label">COURSES OFFERED:</div>
			 			<?php
			 			$sql_college_category	=	"SELECT course_name FROM college_course_selection";
			 			$result_college_category	=	mysql_query($sql_college_category) OR DIE(mysql_error());

						?>
			 			<div class="course_category">
			 			<?php while($row_college_category	=	mysql_fetch_array($result_college_category)){ ?>
			 				
			 			<div class="course_content"> <input type="checkbox" value="<?php echo  $row_college_category['course_name'] ?>"  name="college_courses[]" id="reg_id_7"><?php echo  $row_college_category['course_name'] ?></div> 

			 			<?php }?>

						 
						 
						 </div>
					</div> 

			 		<div class="registration_field">
			 			<div class="college_label">COLLEGE ESTD. YEAR</div>
			 			<select class="registration_select_text" name="college_estd" id="reg_id_8">
			 			<?php for($i=1980;$i<=2015;$i++){ ?>
			 			<option value="<?php echo $i ;?>"> <?php echo $i ?></option>
			 			<?php } ?>
			 			</select>
					</div>

					<div class="registration_field">
			 			<div class="college_label">PASSOUT BATCHES:</div>
			 			<input type="number"class="registration_text" name="college_batch" id="reg_id_9" min="0" oninput="return checkbatch()" required/>
					</div>


					<div class="registration_field">
			 			<div class="college_label">EXAM MODE:</div>
			 			<div class="course_category">

			 			
			 		<div class="course_content"> 	<input type="checkbox" value="ONLINE"  name="college_admode[]" id="reg_id_10" />ONLINE </div> 
			 		<div class="course_content"> 	<input type="checkbox" value="OFFLINE"  name="college_admode[]" id="reg_id_10"/>OFFLINE </div>
			 			</div>
			 		</div>	

					

					<div class="registration_field">
			 			<div class="college_label">MAJOR PLACEMENT COMPANIES:</div>
			 			<textarea rows="10" class="registration_textarea" name="college_pcompany" id="reg_id_11">
			 				
			 			</textarea>
					</div>

					<div class="registration_field">
			 			<div class="college_label">HOSTEL ACCOMADATION:</div>
			 			<input type="radio" name="college_hostel" value="yes" id="reg_id_12"> YES </input>
			 			<input type="radio"  name="college_hostel" value="no" id="reg_id_32" > NO </input>
					</div>

					<div class="registration_field" id="33">
			 			<div class="college_label">HOSTEL A/C:</div>
			 			<input type="radio" name="college_hosac" value="yes" id="reg_id_13"> YES </input>
			 			<input type="radio"  name="college_hosac" value="no" id="reg_id_13"> NO </input>
					</div>

					<div class="registration_field">
			 			<div class="college_label">LIBRARY FACILITY:</div>
			 			<input type="radio" name="college_library" value="yes" id="reg_id_14"> YES </input>
			 			<input type="radio"  name="college_library" value="no"  id="reg_id_14"> NO </input>
					</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE ADDRESS:</div>
			 			<textarea rows="3" cols="5" class="registration_textarea" name="college_address" id="reg_id_15"> </textarea>
					</div>
					<div class="registration_field">
			 			<div class="college_label">CITY:</div>
			 			<input type="text" class="registration_text" name="college_city" id="reg_id_16" />
					</div>
					<div class="registration_field">
			 			<div class="college_label">STATE:</div>
			 			<input type="text" class="registration_text" name="college_state" id="reg_id_17" />
					</div>

					<div class="registration_field">
			 			<div class="college_label">PINCODE:</div>
			 			<input type="number"class="registration_text" name="college_pincode" id="reg_id_18" maxlength="6" onchange="return checkpincode()" />
					</div>

					<div class="registration_field">
			 			<div class="college_label">NEAR RAILWAY STATION:</div>
			 			<input type="text"class="registration_text" name="college_rlystn" id="reg_id_19"/>
					</div>

					<div class="registration_field">
			 			<div class="college_label">NEAR BUS STAND:</div>
			 			<input type="text"class="registration_text" name="college_busstn" id="reg_id_20"/>
					</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE WEBSITE:</div>
			 			<input type="text"class="registration_text" name="college_website" id="reg_id_21"/>
					</div>

					<div class="registration_field">
			 			<div class="college_label">CONTACT NUMBER:</div>
			 			<input type="text"class="registration_text" name="college_contact" id="reg_id_22" onchange="return checkcontact()" />
					</div>

					<div class="registration_field">
			 			<div class="college_label">EMAIL-ADDRESS:</div>
			 			<input type="text"class="registration_text" name="college_email" id="reg_id_23" onchange="return checkEmail()" />
					</div>
					<div class="registration_field">
			 			<div class="college_label">WRITE META KEYWORDS:</div>
			 			<textarea rows="10" class="registration_textarea" name="meta" id="reg_id_89">
			 			</textarea>
					</div>
					<div class="eg"><i> Add Meta Keywords For Searching Criteria<br> Eg: No.1 College In Noida, Best college...</i></div>
					<?php
					$a= rand(0,5);
					$b=rand(5,9);
					$c=$a+$b;
					?>
					<div class="captcha"><label class="capcha_text"><?php echo $a."+" .$b?> <label/></div>
					<div class="registration_field">
			 			<div class="college_label">Above Calcution is=</div>
			 			<input type="hidden"class="registration_text" value="<?php echo $c ?>" id="reg_id_26"  />
			 			
			 			<input type="text"class="registration_text" id="reg_id_28" />
					</div>

					<div class="registration_field">
			 			
			 			<input type="submit" class="submit_button" name="submit_button" value="Submit" id="reg_id_24" onclick="return validation()" />
						<input type="reset" class="reset_button" name="reset_button" value="Reset" id="reg_id" />
					</div>

					
					</form>















			 




		</div>







				
		

			<div class="suggestion">
				<div class="suggesstion_heading"> POPULAR SEARCHES</div>
				<?php while($row_popular2 = mysql_fetch_array($result_popular2)){ ?>
				<div class="suggesstion1">
				<?php 
					$sql_popular = "SELECT * FROM college_matter where college_email='".$row_popular2['college_email']."'";
					$result_popular = mysql_query($sql_popular) OR DIE ( mysql_error());
					$row_popular= mysql_fetch_array($result_popular);
				?>
					<div class="suggestion_image">
					<img src="<?php echo "Admin/college_image/" . $row_popular['college_logo'] ?>" width="120px" height="120px"/>	
					</div>
					<div class="suggesstion_title">
						<?php echo $row_popular2['college_name'] ?>
					</div>

					<div class="suggesstion_detail">
						
					     <?php echo substr($row_popular['college_overview'],0,200)."..." ?>

					</div>


				</div>	
				<?php } ?>
				





			</div>
					<div class="Useful_links">
						<div class="useful_links_heading">
							USEFUL LINKS
						</div>
						
						<div id="marquee1" class="container" onmouseover="zxcMarquee.scroll('marquee1',0);" onmouseout="zxcMarquee.scroll('marquee1',-1);">
						<div style="position: absolute; width: 98%;">
						<?php while($row_useful = mysql_fetch_array($result_useful)) { ?>
						<p><div class="links"  id="m1">
						<img src="image/8IZNhRrf.jpeg" width="18px" height="18px"/>	<a style="color:black;" href="<?php echo $row_useful['links'] ?>" class="link" target="_blank"> <?php echo $row_useful['links'] ?> </a>
						</div></p>
				
					<?php } ?>
							
</div>
</div>

					</div>

		</div>

				<footer>
						<script type="text/javascript" src="jq.js"></script>
						<div class="footer_menu">
								<div class="footer_menu_bar">
								<ul>
									<li>Home Page</li>
									<li>Search Page</li>
									<li>Detail Page</li>
									<li>Registration Page</li>
									<li>About Us</li>
									<li>Contact Us</li>

								</ul>

								</div>

						</div>

						
							
							<center>
							<div class="footer_line1">
							&copy COPYRIGHT 2014-2015  &nbsp  All Rights Reserved
							</div>
							<div class="footer_line2">
							Developed By: Shashank Raghav
							</div>
							</center>

				</footer>





		</main>
		</body>



<script>
		//------------------------- For Newss Allert Submission
$(document).ready(function(){
var httpxml;
	try{
		// Firefox, Opera 8.0+, Safari
		httpxml=new XMLHttpRequest();
	}
	catch (e){
		// Internet Explorer
		try{
			httpxml=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e){
			try{
				httpxml=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("Your browser does not support AJAX!");
				return false;
      		}
    	}
	}
	$("#reg_id_22").click(function(){
		var email	=	$("#reg_id_23").val();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		alert(email);
		//return false;
		
		if(email!=''){
		  
		  if(!filter.test(email)) {
				
				$("#reg_id_23").css({"border":"1px solid #f00"});
				 document.getElementById("reg_id_23").value='';
				return false;
				}
		  else{
			function stateck(){
				if(httpxml.readyState==4){
					var response= httpxml.responseText;
					alert(response);
					if(response=="string"){
						alert("available");
						//$(".email_division_form").html('<input type="submit" value="This Email is available" />')
					}
					else{
						alert("This email is already registered");
						//$(".email_division_form").html('<input type="submit" value="This Email-ID already registered with us" />')
					}
				}
    		}
			var url="subscribe.php";
			url=url+"?email="+email;
			alert(url);
			httpxml.onreadystatechange=stateck;
			httpxml.open("GET",url,true);
			httpxml.send(null);
			}
		}
		else{
				$("#reg_id_23").css({"border":"1px solid #f00"});
				return false;
			
		}
	})
	$("#alert_email").change(function(){
		var alert_email	=	$("#alert_email").val();
		if(alert_email!=''){
			$("#alert_email").css({"border":"1px solid #d3d3d3"});
		}
	})
})
//------------------------- For Newss Allert Submission
</script>
		</html>