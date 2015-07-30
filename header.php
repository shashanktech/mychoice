<!doctype html>
<html>
<head>
<title>College Search Engine</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/> 
<link rel="javascript" type="text/javascript" href="validation.js"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>

<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="js/flexslider.css" type="text/css" media="screen" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	
	<!-- Includes for this demo -->
	<link rel="stylesheet" href="demo-stuff/demo.css" type="text/css" media="screen" />
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(window).load(function() {
			$(".flexslider").flexslider({
				animation: "slide",
				autoplay:true,
				itemWidth: 210,
			});
		});
	</script>
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
								<a href="Admin/sign-in.php"><li>Login</li></a>
								<li><a href="college_registration.php">Register</a></li></a>
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
