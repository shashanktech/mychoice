<?php

include("config.php");
?>
<!doctype html>
<html>
<head>
<title>College Search Engine</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="stylesheet" href="css/jquery.autocomplete.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
	<main>
		<header>
			<div class="header_logo">
			<img src="image/logo.jpg" height="134.5px" width="200px"/>	     
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
				<div class="college_search_title">
				SEARCH Your College HERE!! 
				</div>

					<form name="college_reg" action="search_view.php?find=true" method="GET">	
					<div class="registration_field">
			 			<div class="college_label">COLLEGE CODE:</div>
			 			<input type="text"class="registration_text" name="college_code" id="reg_id_1"/>
					</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE NAME:</div>
			 			<input type="text"class="registration_text" name="college_name" id="reg_id_2"/>
					</div>


					<div class="registration_field">
			 			<div class="college_label">COLLEGE CITY:</div>
			 			<input type="text"class="registration_text" name="college_city" id="reg_id_2"/>
						</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE STATE:</div>
			 			<input type="text"class="registration_text" name="college_state" id="reg_id_2"/>
						</div>		

					
					<div class="registration_field">
			 			<div class="college_label">COLLEGE TYPE:</div>
			 			<?php
			 			$sql_college_type	=	"SELECT college_type FROM college_types";
			 			$result_college_type	=	mysql_query($sql_college_type) OR DIE(mysql_error());

			 			?>
			 			<select class="registration_select_text" name="college_type" id="reg_id_3">
			 			<option>Select</option>
			 			<?php while($row_college_type	=	mysql_fetch_array($result_college_type)){ ?>
			 			<option value="<?php echo $row_college_type['college_type'] ?>"> <?php echo $row_college_type['college_type'] ?></option>
			 			<?php } ?>
			 			</select>
					</div>

					<div class="registration_field">
			 			<div class="college_label">COLLEGE COURSE:</div>
			 			<select id="reg_id_6" class="registration_select_text" name="college_courses" required>
                    	<option>Select</option>
                    	</select>
                    </div>


					<div class="registration_field">
			 			<div class="college_label">COLLEGE APPROVED BY:</div>
			 			<input type="text"class="registration_text" name="college_approved" id="reg_id_4"/>
					</div>
					<input type="hidden" name="search"/>

					

					<div class="registration_field">
			 			
			 			<input type="submit"class="submit_button" name="submit_button" value="Submit" id="reg_id_17" />
					</div>
				

					</form>















			 




		</div>







				
		

			<div class="suggestion">
				<div class="suggesstion_heading"> POPULAR SEARCHES</div>
				
				<div class="suggesstion1">
					<div class="suggestion_image">
					<img src="image/ab_m.gif" width="120px" height="120px"/>	
					</div>
					<div class="suggesstion_title">
						ABES ENGINEERING COLLEGE
					</div>

					<div class="suggesstion_detail">
						It is a top Engineering college of Ghaziabad,
						it is based on values of propagating the devotion towards science
					     

					</div>


				</div>	

				<div class="suggesstion1">
					<div class="suggestion_image">
					<img src="image/ab_m.gif" width="120px" height="120px"/>	
					</div>
					<div class="suggesstion_title">
						ABES ENGINEERING COLLEGE
					</div>

					<div class="suggesstion_detail">
						It is a top Engineering college of Ghaziabad,
						it is based on values of propagating the devotion towards science
					     

					</div>


				</div>		

				<div class="suggesstion1">
					<div class="suggestion_image">
					<img src="image/ab_m.gif" width="120px" height="120px"/>	
					</div>
					<div class="suggesstion_title">
						ABES ENGINEERING COLLEGE
					</div>

					<div class="suggesstion_detail">
						It is a top Engineering college of Ghaziabad,
						it is based on values of propagating the devotion towards science
					     

					</div>


				</div>		

				<div class="suggesstion1">
					<div class="suggestion_image">
					<img src="image/ab_m.gif" width="120px" height="120px"/>	
					</div>
					<div class="suggesstion_title">
						ABES ENGINEERING COLLEGE
					</div>

					<div class="suggesstion_detail">
						It is a top Engineering college of Ghaziabad,
						it is based on values of propagating the devotion towards science
					     

					</div>


				</div>		





			</div>
					<div class="Useful_links">
						<div class="useful_links_heading">
							USEFUL LINKS
						</div>
						<div class="links">
							<a style="color:black;" href="http://www.canadacollege.edu/" class="link" target="_blank"> www.canadacollege.edu </a>
						</div>
						<div class="links">
							<a href="http://www.canadacollege.edu/" class="link" target="_blank"> www.canadacollege.edu </a>
						</div>
						<div class="links">
							<a href="http://www.canadacollege.edu/" class="link" target="_blank"> www.canadacollege.edu </a>
						</div>
						<div class="links">
							<a href="http://www.canadacollege.edu/" class="link" target="_blank"> www.canadacollege.edu </a>
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
		</html>
		<script>
$(document).ready(function(){
	$("#reg_id_3").change(function(){
		var state	=	$("#reg_id_3").val();
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
		function stateck(){
			if(httpxml.readyState==4){
				/*
				var response =	httpxml.responseText;
				alert(response);
				return false;
				*/
				var string	=	httpxml.responseText;
				newString = string.split('#', 1)[0];
				var myarray=eval(newString);
				// Before adding new we must remove previously loaded elements
				for(j=document.getElementById("reg_id_6").options.length-1;j>=0;j--){
					document.getElementById("reg_id_6").remove(j);
				}

				for (i=0;i<myarray.length;i++){
					var optn = document.createElement("OPTION");
					optn.text = myarray[i];
					optn.value = myarray[i];
					document.getElementById("reg_id_6").options.add(optn);
				}
			}
		}
		var url="select_course.php";
		url=url+"?Coursecategory="+state;
		httpxml.onreadystatechange=stateck;
		httpxml.open("GET",url,true);
		httpxml.send(null);
	})
})
</script>