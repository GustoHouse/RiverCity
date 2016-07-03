<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>River City Floorings</title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
	
	<div class="quick-action">
		<a class="phone" href="tel:5022618233"><span>Call Us</span></a>
		<a class="address" href="#"><span>Map Us</span></a>
	</div>
    
	<header>
		<div class="time-bar">
			<p class="time"></p>
		</div><!-- end .hour-bar -->
		<div class="nav">
			<a class="logo" href="/"><img src="images/logo.png"/></a>	
			<ul class="main-menu">
				<li><a href="#">Refinishing</a></li>
				<li><a href="#">Hardwood</a></li>
				<li><a href="#">Wall Wood</a></li>
				<li><a href="#">Carpet</a></li>
				<li><a href="#">Laminate</a></li>
				<li><a href="#">Vinyl</a></li>
			</ul>
			<div class="location">
				<a class="address" href="#">2201 Plantside Dr.<br/>Louisville, KY 40299</a>
				<a class="phone" href="tel:5022618233">502.261.8233</a>
			</div>
		</div><!-- end .nav -->
	</header><!-- end .header -->
	
	<script>
		jQuery(document).ready(function($) {
			var dayOfWeek = (new Date).getDay();
			var hours = ["Today is Sunday. We're closed today.",         
									"Today is Monday. We're open from 10am till 5pm.",
									"Today is Tuesday. We're open from 10am till 6pm.",
									"Today is Wednesday. We're open from 10am till 6pm.",
									"Today is Thursday. We're open from 10am till 6pm.",
									"Yay, Today is Friday. We're open from 10am till 5pm.",
									"Today is Saturday. We're open from 10am till 4pm."];
			var todaysHours = hours[dayOfWeek];
			$( "header .time-bar p.time" ).html(todaysHours);
		});
	</script>