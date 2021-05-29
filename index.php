<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/n-style.css">
</head>
<body>

<?php include_once 'header.php';?>

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

<?php include_once 'footer.php';?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>