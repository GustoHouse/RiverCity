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
	<header>
		<div class="time-bar">
			<p></p>
		</div><!-- end .hour-bar -->
		<div class="nav">
			<a class="logo" href="/"><img src="images/logo.png"/></a>
			<div class="location">
				<a class="address" href="#">2201 Plantside Dr.<br/>Louisville, KY 40299</p>
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
			$( "header .time-bar p" ).html(todaysHours);
		});
	</script>