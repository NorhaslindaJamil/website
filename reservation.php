<?php
	include("connect.php");
	
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$occation = $_POST['occation'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		
		
		
		if((strlen($name) < 3))
		{
			$error = "Name is too short";
		}
		
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
		}
		
		else
		{
			$insertQuery = "INSERT INTO reservation(name,email,occation,date,message) VALUES ('$name','$email','$occation','$date','$message')";
			if(mysqli_query($con, $insertQuery))
			{
				$error ="Your reservation have successfully sent!";
				
				header("location:reservation.php");
			}
			
			else
			{
				$error = "Could not able to execute";
			}
		}
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pastalicious Restaurant</title>

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<form method="post" action="reservation.php">
	<div id="fh5co-container">
		<!--navigation bar-->
		<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="mainpage.php" data-nav-section="Home">Home</a>
						<a href="#" data-nav-section="Menu">Menu</a>
						<a href="order.php" data-nav-section="Order">Order</a>
					</div>
					<div class="fh5co-logo">
						<a href="index.php">Pastalicious</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="reservation.php" data-nav-section="Reservation">Reservation</a>
						<a href="login.php" data-nav-section="Login">Login</a>
					</div>
				</div>
				
			</div>
		</div>
		<!--end of navigation bar-->
		<!--reservation section-->
		
<div id="fh5co-contact" data-section="Reservation">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Reserve a Table</h2>
						<p class="sub-heading to-animate">Come and dine in with us</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 to-animate-2">
						<h3>Contact Us</h3>
						<ul class="fh5co-contact-info">
							<li class="fh5co-contact-address ">
								<i class="icon-home"></i>
								23 Love Lane 10200,<br>Georgetown, Penang.
							</li>
							<li><i class="icon-phone"></i> 017 - 5672975</li>
							<li><i class="icon-phone"></i> 04 - 6781197</li>
							<li><i class="icon-envelope"></i>pastalicious@gmail.com</li>
						</ul>
					</div>
					<div class="col-md-6 to-animate-2">
						<h3>Reservation Form</h3>
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input id="name" name="name" class="form-control" placeholder="Name" type="text">
						</div>
						<div class="form-group ">
							<label for="email" class="sr-only">Email</label>
							<input id="email" name="email" class="form-control" placeholder="Email" type="email">
						</div>
						<div class="form-group">
							<label for="occation" class="sr-only">Occation</label>
							<select class="form-control" id="occation" name="occation">
								<option>Select an Occation</option>
							  <option>Wedding Ceremony</option>
							  <option>Anniversary</option>
							  <option>Birthday</option>
							  <option>Others</option>
							</select>
						</div>
						<div class="form-group ">
							<label for="date" class="sr-only">Date</label>
							<input id="date" class="form-control" name="date" placeholder="Date" type="text">
						</div>
						
						<div class="form-group ">
							<label for="message" class="sr-only">Message</label>
							<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group ">
							<input class="btn btn-primary" value="Send Message" name="submit" type="submit">
						</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	</form>
	<!--End Reservation section-->

		<!--Footer-->
		
<div id="fh5co-footer">
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="to-animate">&copy; 2016 Pastalicious Restaurant.<br></p>
					<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="fh5co-social">
						<li class="to-animate-2"><a href="https://www.facebook.com/"><i class="icon-facebook"></i></a></li>
						<li class="to-animate-2"><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
						<li class="to-animate-2"><a href="https://www.instagram.com/"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!--End of Footer-->
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="js/moment.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script>
		$(function () {
	       $('#date').datetimepicker();
	   });
	</script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>