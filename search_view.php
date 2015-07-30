<?php
include("config.php");
if(!isset($_REQUEST['search'])){
	header("location:index.php");
}
$sql = "SELECT * FROM college_detail WHERE (deleted=0 AND approved=1) ";

if(isset($_REQUEST['search'])!='' AND $_REQUEST['search']!=''){
	$search = $_REQUEST['search'];
	
	if(is_numeric($search)){
		$sql	= $sql." AND college_code = ".$search;
	}
	else{
		$count_space = substr_count($search," ");
		
		$search=	explode(" ", $search);
		for($i=0; $i<=$count_space;$i++)
		{
			if($i==0){
				$sql	= $sql." AND meta LIKE '%".$search[$i]."%'";
			}
			else{
				$sql	= $sql." OR meta LIKE '%".$search[$i]."%'";
			}
		}
		/*
		$sql	= $sql." OR college_city LIKE '%".$search."%' ";
		$sql	= $sql." OR college_state LIKE '%".$search."%' ";
		$sql	= $sql." OR college_courses LIKE '%".$search."%' ";
		$sql	= $sql." OR college_type LIKE '%".$search."%' ";
		$sql	= $sql." OR college_approved LIKE '%".$search."%' ";
		*/

	}
	//echo $sql;
	//exit();
}
else{
	if($_REQUEST['college_code']!=''){
	$college_code= $_REQUEST['college_code'];
	$sql	= $sql." AND college_code = ".$college_code;
	}
	if($_REQUEST['college_name']!=''){
	$college_name= $_REQUEST['college_name'];
	$sql	= $sql." AND college_name LIKE '%".$college_name."%'";
	}
	if($_REQUEST['college_city']!=''){
	$college_city= $_REQUEST['college_city'];
	$sql	= $sql." AND college_city LIKE '%".$college_city."%' ";
	}
	if($_REQUEST['college_state']!=''){
	$college_state= $_REQUEST['college_state'];
	$sql	= $sql." AND college_state LIKE '%".$college_state."%' ";
	}
	if($_REQUEST['college_courses']!=''){
	$college_courses= mysql_real_escape_string($_REQUEST['college_courses']);
	$sql	= $sql." AND college_courses LIKE '%".$college_courses."%' ";
	}
	if($_REQUEST['college_type']!=''){
	$college_type= $_REQUEST['college_type'];
	$sql	= $sql." AND college_type LIKE '%".$college_type."%' ";
	}
	if($_REQUEST['college_approved']!=''){
	$college_approved= $_REQUEST['college_approved'];
	$sql	= $sql." AND college_approved LIKE '%".$college_approved."%' ";
	}
}
echo $sql;
//exit();
$result= mysql_query($sql) OR DIE(mysql_error());
$count=mysql_num_rows($result);



?>
<!doctype html>
<html>
<head>
<title>College Search Engine</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="javascript" type="text/javascript" href="validation.js"/>
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
		<div class="content_search_left">
		<div class="result_number"> <div class="result_number_text"> <?php echo $count ?> results found </div></div>
		<?php if($count == 0) { ?>
		<div class="for_zero" id="no"><div class="zero_text"> PLEASE SEARCH AGAIN</div> </div>
		<div class="not_found_image"> <img src="image/no_results.png"/></div>
		<?php } ?>
			<?php while($row = mysql_fetch_array($result)) { ?>
			<div class="search_result1">
				<div class="search_image">
				<?php 
				$sql_logo= "SELECT college_logo FROM college_matter WHERE college_email= '".$row['college_email']."'";
				$result_logo = mysql_query($sql_logo) OR DIE (mysql_error()); 
				$row_logo = mysql_fetch_array($result_logo)
				?>
				<img src="<?php echo "Admin/college_image/" . $row_logo['college_logo'] ?>" width="200px" height="200px" />	
				</div>
				<div class="college_name">
					<div class="c_name"><?php echo $row['college_name']; ?></div>
				</div>
				<div class="result_wrapper">
					<div class="search_label1">COLLEGE CODE:</div>
					<div class="search_text1">  <?php echo $row['college_code']; ?> </div>
				</div>
				<div class="result_wrapper">
					<div class="search_label1">COLLEGE TYPE:</div>
					<div class="search_text1">  <?php echo $row['college_type']; ?> </div>
				</div>
				<div class="result_wrapper">
					<div class="search_label1">AFFILATED BY:</div>
					<div class="search_text1">  <?php echo $row['college_approved']; ?> </div>
				</div>
				<div class="result_wrapper">
					<div class="search_label1">ALL INDIA RANK:</div>
					<div class="search_text1"> <?php echo $row['college_rank']; ?> </div>
				</div>
				<div class="result_wrapper">
					<div class="search_label1">ESTABLISHED IN:</div>
					<div class="search_text1">  <?php echo $row['college_est']; ?> </div>
				</div>

				<div class="result_wrapper">
					<div class="search_label1">COURSES OFFERED:</div>
					<div class="search_text1">  <?php echo $row['college_courses']; ?> </div>
				</div>
				<div class="result_wrapper">
					<a href="http://localhost/shashank/college_details.php?id=<?php echo $row['id']; ?>" class="view_detailsbutton">Read More</a>
				</div>
				</div>
				<?php } ?>
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