<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/n-style.css">
</head>
<body>

<?php include 'header.php';?>

<div class="nav-bar container"><!-- nav-bar -->
	<ul class="manu"><!-- manu -->
		<li><a href="#">Home</a></li>
		<li><a href="#">All Schedule</a></li>
		<li><a href="#">Service type</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">About Us</a></li>
	</ul><!-- /manu -->
	<div class="search-box"><!-- search-box -->
		<a href=""><img src="img/search.png"></a>
		<input type="input" name="search" placeholder="Search">
	</div><!-- /search-box -->
</div><!-- /nav-bar -->

<div class="slider container" align="center"><!-- slider -->
  	<img class="slide" src="img/banner/banner1.png">
  	<img class="slide" src="img/banner/banner2.png">
  	<img class="slide" src="img/banner/banner3.png">
  	<img class="slide" src="img/banner/banner4.png">
  	<img class="slide" src="img/banner/banner5.png">

  	<button class="slider-btn previous-btn" onclick="previous(-1)"><img src="img/previous.png"></button>
  	<button class="slider-btn next-btn" onclick="next(1)"><img src="img/next.png"></button>
</div><!-- /slider -->

<div class="search-bus container"><!-- search-bus -->
	<div class="search-header container" >
		<h1>Plan Your Journey</h1>
	</div>
	<form>
	<div class="search-col container">
		<div class="search-input">
			<label>Departure</label>
			<select>
				<option value="" selected disabled >Select Departure</option>
				<option>Colombo</option>
				<option>Colombo</option>
			</select>
		</div>
		<div class="search-input">
			<label>Arrival</label>
			<select>
				<option value="" selected disabled >Select Arrival</option>
				<option>Colombo</option>
				<option>Colombo</option>
			</select>
		</div>
		<div class="search-input">
			<label>Date</label>
			<input type="date" name="date" id="sh-date" min="<?php echo date('Y-m-d');?>">
		</div>
	</div>
	<center>
		<input class="bus-btn" type="submit" name="Search" value ="Search for a schedule">
	</center>
	</form>
</div><!-- /search-bus -->

<div class="service-type container"><!-- service-type -->
	<div class="st-header">
		<h1>Service Type</h1>
		<hr>
	</div>
	<div class="service-box">
		<div class="box">
			<h2>Normal</h2>
			<hr>
			<ul class="box-cont">
				<li>Not air-condition</li>
				<li>Normal seats</li>
				<li>Stop at almost all the bus stop</li>
			</ul>
		</div>
		<div class="box">
			<h2>Semi Luxury</h2>
			<hr>
			<ul class="box-cont">
				<li>Not air-condition</li>
				<li>There are curtains</li>
				<li>Better Seats</li>
				<li>Only stops at major bus stops.</li>
				<li>Faster</li>
			</ul>
		</div>
		<div class="box">
			<h2>Luxury</h2>
			<hr>
			<ul class="box-cont">
				<li>Air-condition</li>
				<li>Faster</li>
				<li>Better Seats</li>
				<li>Only stops at major bus stops.</li>
				<li>Wifi available</li>
			</ul>
		</div>
	</div>
</div><!-- /service-type -->

<div class="footer container"><!-- footer -->
	<div class="f-quick-links">
		<h2>Quick Links</h2>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">All Schedule</a></li>
			<li><a href="#">Service type</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About Us</a></li>
		</ul>
	</div>
	<div class="f-about-us">
		<h2>About Us</h2>
		<p>We have been a pioneer in booking online bus tickets in Sri Lanka since 2021.Through this service, long distance travelers can book bus seats anywhere in Sri Lanka. This is open to you 24 hours a day.</p>
	</div>
	<div class="f-contact">
		<h2>Contact Us</h2>
		<p>transporty(pvt) Ltd,<br>
			Malabe, <br>
			Colombo. <br>
			Tel:0112356365 <br>
			Email:info@transporty.lk</p>
	</div>
	<div class="news">
		<center>
		<h2>News Letter</h2>
		<p>Get notified about the next update</p>
		<form class="subr-form">
			<input type="Email" name="news" placeholder="Email">
			<button type="submit"><img src="img/btn-arrow.svg"></button>
		</form>
		<div class="social-icon">
			<a href="www.faceook.com"><img src="img/social-media/facebook.svg"></a>
			<a href="www.messenger.com"><img src="img/social-media/messenger.svg"></a>
			<a href="www.twitter.com"><img src="img/social-media/twitter.svg"></a>
			<a href="www.whatsapp.com"><img src="img/social-media/whatsapp.svg"></a>
		</div>
		</center>
	</div>
</div><!-- /footer -->
<div class="copyrigth">
	<p>Copyrigth ©2021 transporty.lk - All right reserved</p>
</div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>