<?php

include("config.php");
$id= $_REQUEST['id'];
$sql="SELECT * FROM college_detail where id=$id";
$result=mysql_query($sql) OR DIE(mysql_error());
$row	=	mysql_fetch_array($result);

$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
if(!$pageWasRefreshed ) {
$visited = $row['visited'];
$visited = $visited+1;
$sql_visited_update = "UPDATE `college_detail` SET `visited`='".$visited."' WHERE id=$id";
$result_visited_update = mysql_query($sql_visited_update) OR DIE (mysql_error());
}


$email = $row['college_email'];
$sql_college_matter= "SELECT * FROM college_matter where college_email='".$email."'";
echo $sql_college_matter;

$result_college_matter = mysql_query($sql_college_matter) or DIE(mysql_error());
$row_college_matter= mysql_fetch_array($result_college_matter);
echo $row_college_matter['college_image_1'];



if(isset($_POST['submit'])){
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$ratings = $_POST['rate'];
$sql_feedback = "INSERT INTO `college_feedback`(`name`, `user_email`, `ratings`,`college_email`) VALUES ('".$user_name."','".$user_email."','".$ratings."','".$email."') ";
$result_feedback = mysql_query($sql_feedback) OR DIE (mysql_error());
echo $total_count=	$row['total_count'];
echo "<br>".$total_count	=	$total_count+1;
$total_rate=	$row['total_rate'];
echo "<br>".$total_rate =	$ratings + $total_rate;
echo "<br>".$rating 	= ($total_rate/$total_count);
//exit();
$sql_rate	= "UPDATE college_detail SET total_rate='".$total_rate."', total_count='".$total_count."', ratings='".$rating."' WHERE college_email='".$email."'";
echo $sql_rate;
$result_rate	=	mysql_query($sql_rate) OR DIE(mysql_error());
}
?>
<?php include('header.php'); ?>
		<div class="info">
		<img src="image/header.jpg" height="200px" width="100%" />
		</div>
		<div class="content_registration">
		<div class="content_search_left_details">
			<div class="college_logo">
			<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_logo'] ?>" width= "101px" height="78px"/>
			</div>
			<div class="college_name_detail">
			<?php echo $row['college_name']; ?>	
			</div>
			<div class="affilated detail_detail">
				<div class="label"> AFFILATED BY:</div>
				<div class="text"> <?php echo $row['college_approved']; ?> </div>	
			</div>
			<div class="college_name_detail">
			<span>Ratings:</span>
			<?php echo $row['ratings']; ?>	
			</div>
			
			<div id="container">
			<div class="flexslider">
	    	<ul class="slides">
	    	<?php
			if($row_college_matter['college_image_1']!=''){
	    	 ?>
	    	<li>
	    		<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_image_1'] ?>" />
	    		
	    	</li>
	    	<?php } ?>

	    	<?php
			if($row_college_matter['college_image_2']!=''){
	    	 ?>
	    	<li>
	    		<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_image_2'] ?>" /></a>
	    		
	    	</li>
	    	<?php } ?>
	    	<?php
	    	if($row_college_matter['college_image_3']!=''){
	    	 ?>
	    	<li>
	    		<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_image_3'] ?>" />
	    	</li>
	    	<?php } ?>

	    	<?php
	    	if($row_college_matter['college_image_4']!=''){
	    	 ?>
	    	<li>
	    		<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_image_4'] ?>" />
	    	</li>
	    	<?php } ?>
	    	<?php
	    	if($row_college_matter['college_image_5']!=''){
	    	 ?>
	    	<li>
	    		<img src="<?php echo "Admin/college_image/" .$row_college_matter['college_image_5'] ?>" />
	    	</li>
	    	<?php } ?>
	    	</ul>
	  		</div>
			</div>
			<div class="detail_box"> COLLEGE DETAILS</div>
					<div class="details">
							<div class="detail_wrapper">
								<div class="detail_label1"> College Code: </div>
								<div class="detail_text1">  <?php echo $row['college_code']; ?> </div>
							</div>
						
						<div class="detail_wrapper">
								<div class="detail_label1"> College Type: </div>
								<div class="detail_text1">  <?php echo $row['college_type']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> All India Rank: </div>
								<div class="detail_text1">  <?php echo $row['college_rank']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Established In: </div>
								<div class="detail_text1">  <?php echo $row['college_est']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Courses Offered: </div>
								<div class="detail_text1">  <?php echo $row['college_courses']; ?></div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Total Number Of Faculty: </div>
								<div class="detail_text1">  <?php echo $row['college_faculty']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Number Of Passout Batches: </div>
								<div class="detail_text1"> <?php echo $row['college_batch']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Exam Mode: </div>
								<div class="detail_text1">  <?php echo $row['college_admode']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Major Placement Companies: </div>
								<div class="detail_text1">  <?php echo $row['college_pcompany'];  ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Hostel Accomodation </div>
								<div class="detail_text1"> <?php echo $row['college_hostel'];     ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Hostel A/C: </div>
								<div class="detail_text1">  <?php echo $row['college_hosac']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Library Facility: </div>
								<div class="detail_text1">  <?php echo $row['college_library']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> College Address: </div>
								<div class="detail_text1">  <?php echo $row['college_address']; ?> </div>

						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> City: </div>
								<div class="detail_text1">  <?php echo $row['college_city']; ?> </div>

						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> State: </div>
								<div class="detail_text1">  <?php echo $row['college_state']; ?> </div>

						</div>

						<div class="detail_wrapper">
								<div class="detail_label1"> Pincode: </div>
								<div class="detail_text1">  <?php echo $row['college_pincode']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Near Raliyway Station </div>
								<div class="detail_text1">  <?php echo $row['college_rlystn']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Near bus Stand </div>
								<div class="detail_text1">  <?php echo $row['college_busstn']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Contact Number </div>

								<div class="detail_text1">  <?php echo $row['college_contact']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Email Address </div> 
								<div class="detail_text1">  <?php echo $row['college_email']; ?> </div>
						</div>
						<div class="detail_wrapper">
								<div class="detail_label1"> Website: </div> 
								<div class="detail_text1"> <a href="<?php echo "http://".$row['college_website']; ?>"> <?php echo $row['college_website']; ?></a> </div>
						</div>
					</div>	




					<div>
				<?php if($row_college_matter['college_overview']!= '') { ?>		
				<div class="overview_label"> Overview</div>
				<div class="overview_content">
				<?php echo $row_college_matter['college_overview'] ?>	
				</div>
				<?php } ?>

				<?php if($row_college_matter['college_video_title']!= '' OR $row_college_matter['college_video_url']!= '' ) { ?>
				<div class="college_video">
					<div class="video_title">
					<?php echo $row_college_matter['college_video_title']; ?>	
					</div>
					<iframe width="603" height="450" src="<?php echo $row_college_matter['college_video_url'] ?>" frameborder="0" allowfullscreen></iframe>
				
				</div>
			<?php } ?>
			<FORM method="POST" action= "#">
			<div class="feedbak">
				<div class="feedbak_title">
					Give Your Feedback 
				</div>
				<div class="field">
				<div class="label_feedback"> NAME: </div>
				<input type="text" class="text_feedback" name="name" placeholder="Your Name">	
				</div>

				<div class="field">
				<div class="label_feedback">  EMAIL_ADDRESS: </div>
				<input type="text" class="text_feedback" name="email" placeholder="Your Name">	
				</div>

				<div class="field">
				<div class="label_feedback">  RATINGS: </div>
					<DIV class="checkbox_feedback">
					<li>
                	<input type="radio" name="rate" value="5">
                	5 Stars</li>
                	<li>
                	<input type="radio" name="rate" value="4">
                	4 Stars</li>
                	<li>
                	<input type="radio" name="rate" value="3">
                	3 Stars</li>
                	<li>
                	<input type="radio" name="rate" value="2">
                	2 Stars</li><li>
                	<input type="radio" name="rate" value="1">
                	1 Stars</li>
					</DIV>	
				</div>

				<div class="field">
				<input type="submit" class="search_button_feedback" name="submit" value="Submit">
				<input type="submit" class="search_button_feedback2" name="name" value="RESET">	
				</div>

			</div>
			</FORM>
		</div>	
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



































		