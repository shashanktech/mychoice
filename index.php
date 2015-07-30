<?php

?>

<!doctype html>
<html>
<head>
<title>College Search Engine</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="css/tinycarousel.css" type="text/css" media="screen"/>

	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/jquery.tinycarousel.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#slider1').tinycarousel({ interval: true });
					
		});
	</script>
</head>
<body>
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
				<div class="slider">


						<img src="image/menu.jpg" height=300px width= 100%/>
				</div>


				<div class="search_bar">
					<form name="main_search" action="search_view.php?find=true" method="GET">
						<input type="text" name="search" class="search_text_box" placeholder="Type Name of College, City OR Course Name Here" name="search_text">
						<input type="submit" class="search_button" value="Search">
					</form>
					


				</div>


				<div class="content">

					<div class="content_mchild">
						<div class="content_schild1">
						<img src="image/hire.jpg" width=298px; height=122px />	
						</div>
						<div class="content_schild2">
							<div class="hire_us">
								Why Choose Us?
							</div>
						My Choice is a mission-driven not-for-profit organization that connects students to college success and opportunity.

						Founded in 2105, the College Board was created to expand access to higher education. Today, the membership association is made up of over 6,000 of the worlds leading educational institutions and is dedicated to promoting excellence and equity in education.	
						<div class="read_more_button">
							<form name="read_more" action="#" method="post">
							<input type="submit" value="Read More" class="read_more">
								
							</form>						
							</div>


						</div>	
					</div>	
					
					<div class="content_mchild">
						
						<div class="content_schild1">
							<img src="image/about-us (1).jpg" width=298px; height=122px />
						</div>
						<div class="content_schild2">
							<div class="hire_us">
								Who We Are?
							</div>
						Our employees play a critical role in contributing to our mission in an environment that’s 
						collaborative, performance-based, and challenging. From prom.................................. , the people of the College Board further our cause through fresh ideas, spirited innovation, and hard work.	We Have achieved many excellence awards in providing best searches.
						We Are Best Search Engine.
							<div class="read_more_button">
							<form name="read_more" action="#" method="post">
							<input type="submit" value="Read More" class="read_more">
								
							</form>
								

							</div>

						</div>
					</div>
							
					<div class="content_mchild">
						
						<div class="content_schild1">
							<img src="image/graduated.png" width=298px; height=122px />
						</div>
						<div class="content_schild2">
							<div class="hire_us">
								Know Your College?
							</div>
						Before you can decide which college you're going to attend, you must first determine which major will provide you the education you need for your chosen career path. Below you'll find a comprehensive list of over 1,500 colleges majors as well as 7,000 accredited colleges and universities offering these majors.
						 To get started simply select a major category below. We Provide Best Results.	
						<div class="read_more_button">
							<form name="read_more" action="#" method="post">
							<input type="submit" value="Read More" class="read_more">
								
							</form>						
							</div>

						</div>
					</div>		
	
				</div>	
		<div class="sub_text">
		<div class="partners"> OUR PARTNERS </div>
		<div id="slider1">
		<a class="buttons prev" href="#">&#60;</a>
		<div class="viewport">
			<ul class="overview">
				<li><img src="image/Epsilon_logo-300x106.jpg" /></li>
				<li><img src="image/Jetstar-Logo-WEB-Master-RGB.jpg" /></li>
				<li><img src="image/logo2.gif" /></li>
				<li><img src="image/big-events-logo.gif" /></li>
				<li><img src="image/TechAge-Logo-11-300x103.png" /></li>
				<li><img src="image/IBM_logo_Big_Blue.jpg" /></li>
			</ul>
		</div>
		<a class="buttons next" href="#">&#62;</a>
		</div>
		</div>

				<footer>
					
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