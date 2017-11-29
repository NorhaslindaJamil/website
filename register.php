<?php
	include("connect.php");
	
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		if((strlen($name) < 3))
		{
			$error = "First name is too short";
		}
		
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error = "Please enter valid email address";
		}
		
		else
		{
			$insertQuery = "INSERT INTO register(name,email,username,password) VALUES ('$name','$email','$username','$password')";
			if(mysqli_query($con, $insertQuery))
			{
				$error = "Records inserted successfully!";
				
			
				
				
				header("location:login.php");
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
	<link rel = "stylesheet" href="register.css">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!--<link rel="shortcut icon" href="favicon.ico">-->

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
<!--Navigation Bar here-->

<div class="js-sticky">
			<div class="fh5co-main-nav">
				<div class="container-fluid">
					<div class="fh5co-menu-1">
						<a href="mainpage.php" data-nav-section="Home">Home</a>
						<a href="#" data-nav-section="Menu">Menu</a>
						<a href="order.php" data-nav-section="Order">Order</a>
					</div>
					<div class="fh5co-logo">
						<a href="index.html">Pastalicious</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="reservation.php" data-nav-section="Reservation">Reservation</a>
						<a href="login.php" data-nav-section="Login">Login</a>
					</div>
				</div>
				
			</div>
		</div>

<!--End of Navigation Bar-->

<br><br>
<!--Beginning of the Form-->
<div id="fh5co-contact" data-section="Login">
 <style>body{
background-image: url(images/form2.jpg);}</style>
<div class="container">       
      <div  class="form">
    		<form id="contactform" action="register.php" method="post"> 
            	<p class="contact"><h1>Registration Form </h1></p>
                
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="Name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="Example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username">Username</label></p> 
    			<input id="username" name="username" placeholder="Username" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="password">Password</label></p> 
    			<input type="password" id="password" name="password" placeholder="Password" required=""> 
                
                <p class="contact"><label for="repassword" >Confirm Password</label></p> 
    			<input type="password" id="repassword" name="repassword" placeholder=" Re-enter the password" required=""> <br>
 
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Submit" type="submit"> 	<br> 
   </form> 
</div>      
</div>

<!--End Of The Form-->

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